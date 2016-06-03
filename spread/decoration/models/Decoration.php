<?php

namespace spread\decoration\models;

use common\models\SpreadModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "template".
 */
class Decoration extends spreadModel
{
	public $companyInfo;
	public $signupNumberFormat;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%decoration}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            //[['orderlist'], 'default', 'value' => 0],
			[['start_at', 'end_at'], 'filter', 'filter' => function($value) {
				return strtotime($value);
			}],
			[['picture', 'picture_small', 'map', 'picture_lottery'], 'integer'],
			[['company_id','lottery_number', 'bonus_number', 'gift_bag_number'], 'default', 'value' => 0],
			[['sms', 'sms_new'], 'default', 'value' => ''],
			[['address', 'signup_base', 'arrive_line', 'holding_at', 'description', 'lottery_number', 'lottery_rule', 'bonus_number', 'bonus_rule', 'gift_bag_number', 'gift_bag_rule'], 'safe'],
        ];
    }	

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
			'id' => '团购会ID',
			'company_id' => '所属公司',
			'name' => '名称',
			'start_at' => '开始时间',
			'end_at' => '结束时间',
			'picture' => '图片',
			'picture_lottery' => '抽奖奖品图片',
			'picture_small' => '小图',
			'description' => '描述',
			'address' => '地址',
			'map' => '地图',
			'arrive_line' => '到达路线',
			'signup_base' => '基准报名人数',
			'signup_number' => '报名人数',
			'sms' => '业主短信',
			'sms_new' => '新业主短信',
			'lottery_number' => '抽奖总数',
			'bonus_number' => '红包总数',
			'gift_bag_number' => '礼包总数',
			'lottery_rule' => '抽奖规则',
			'bonus_rule' => '红包规则',
			'gift_bag_rule' => '礼包规则',
			'status' => '状态',
        ];
    }

	public function getInfo($where)
	{
        /*$key = "decorationsem_decoration_info_{$id}";
        $info = false;// \Yii::$app->cacheRedis->get($key);
        if ($info) {
			$info['signup_number'] = $this->getSignupNumber($id);
            return $info;
		}*/

		$info = static::find()->where($where)->one();//->toArray();
		if (empty($info)) {
			return $info;
		}

		$info['signup_number'] = $info['signup_base'] + $info['signup_number'];
		$info = $this->_formatInfo($info);

        //\Yii::$app->cacheRedis->set($key, $info);
		return $info;
	}

	protected function getSignupNumber($id)
	{
		$info = static::findOne(['id' => $id])->toArray();
		$signupNumber = $info['signup_base'] + $info['signup_number'];
		return $signupNumber;
	}

	/**
	 * 格式化团购会信息，m站和pc站需要格式化的信息不同
	 *
	 * @return array
	 */
	protected function _formatInfo($info)
	{
		$info['picture'] = $info->getAttachmentUrl($info['picture']);
		$info['picture_lottery'] = $info->getAttachmentUrl($info['picture_lottery']);
		$info['picture_small'] = $info->getAttachmentUrl($info['picture_small']);
		$info['map'] = $info->getAttachmentUrl($info['map']);
		$info['companyInfo'] = \merchant\models\Company::findOne($info['company_id'])->toArray();
		$signupNumber = (string) $info['signup_number']; 
		$signupNumberFormat = '';
		for ($i = 0; $i < strlen($signupNumber); $i++) {
			$signupNumberFormat .= '<i>' . $signupNumber{$i} . '</i>'; 
		}
		$info['signupNumberFormat'] = $signupNumberFormat;

		return $info;
	}

	public function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
	}

	public function getCompanyInfos()
	{
		$infos = ArrayHelper::map(\merchant\models\Company::find()->all(), 'id', 'name');
		return $infos;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['picture', 'picture_lottery', 'picture_small', 'map'];
		$this->_updateSingleAttachment('decoration', $fields);

		return true;
	}	
}