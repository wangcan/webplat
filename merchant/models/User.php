<?php

namespace merchant\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use common\models\AuthBase;

/**
 * This is the model class for table "manager".
 */
class User extends AuthBase
{
    const STATUS_NOACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_LOCK = 99;

    public $password_new_repeat;
    public $password_old;
    public $password_new;

    public static function getDb()
    {
        return Yii::$app->dbMerchant;
    }	

    public function behaviors()
    {
		$behaviors = [
		    $this->timestampBehaviorComponent,
		];
		return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        return [
            'create' => ['mobile', 'truename', 'email', 'password', 'status', 'merchant_id'],
            'update' => ['truename', 'email', 'password_new', 'status', 'merchant_id'],
            'edit' => ['truename', 'email', 'mobile', 'password', 'password_new_repeat', 'password_new', 'password_old'],
            //'edit-password' => ['password_old', 'password_new', 'password_new_repeat'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
			[['password_old'], 'required', 'on' => ['edit']],
			[['status', 'merchant_id'], 'default', 'value' => 0],
            [['password_old'], 'checkPasswordOld', 'on' => ['edit']],
            ['password_new', 'string', 'min' => 6, 'when' => function($model) { return $model->password_new != ''; }],
            ['password_new', 'compare', 'on' => ['edit']],
			[['truename', 'email', 'mobile', 'password_new', 'password_new_repeat'], 'safe', 'on' => ['edit']],
			[['truename', 'email', 'mobile', 'status', 'merchant_id'], 'safe', 'on' => ['create', 'update']],
        ];
    }

    public function checkPasswordOld()
    {
        $result = \Yii::$app->security->validatePassword($this->password_old, $this->getOldAttribute('password'));
        if (!$result) {
            $this->addError('password_old', '旧密码错误');
        }
		return $result;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
			'merchant_id' => '商家',
            'truename' => '真实姓名',
			'login_num' => '登录次数',
            'password' => '密码',
            'password_old' => '旧密码',
            'password_new' => '新密码',
            'password_new_repeat' => '确认密码',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'last_at' => '最后登录时间',
            'mobile' => '手机号',
            'email' => '邮箱',
            'status' => '状态',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
		    if (Yii::$app->controller->id == 'site') {
				return true;
			}
            if ($this->isNewRecord) {
				$this->setPassword($this->password);
            } else if (!empty($this->password_new)) {
			    $this->setPassword($this->password_new);
            }
        }

        return true;
    }

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		return true;
	}

    public static function getStatusInfos()
    {
        return [
            self::STATUS_ACTIVE => '正常',
            self::STATUS_NOACTIVE => '没激活',
            self::STATUS_LOCK => '锁定',
        ];
    }

    public function registerUser($data)
    {   
        $user = new self($data);
        $user->created_at = \Yii::$app->params['currentTime'];
        $user->updated_at = \Yii::$app->params['currentTime'];
        $user->setPassword($data['password']);
        $user->generateAuthKey();
        if ($user->save(false)) {
            return $user;
        }    

        return false;
    }  
	public function getMerchantInfos()
	{
		$infos = ArrayHelper::map(Merchant::find()->where(['is_joined' => 1])->all(), 'id', 'name');
		return $infos;
	}

	public function getInfo($where)
	{
        return static::findOne($where);
	}
}