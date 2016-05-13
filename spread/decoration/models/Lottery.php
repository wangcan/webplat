<?php

namespace spread\decoration\models;

use yii\helpers\ArrayHelper;
use common\models\SpreadModel;

class Lottery extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lottery}}';
    }

    /**
     * @inheritdoc
     */
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
    public function rules()
    {
        return [
            [['name', 'prize', 'decoration_id'], 'required'],
            [['probability', 'limit_day', 'orderlist', 'status', 'price'], 'default', 'value' => 0],
			[['description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'prize' => '奖品',
            'price' => '价格',
            'orderlist' => '排序',
            'probability' => '中奖几率',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '暂停使用',
			'1' => '正常',
		];	
		return $datas;
	}	

	public function getDecorationInfos()
	{
		$infos = ArrayHelper::map(\spread\decoration\models\Decoration::find()->all(), 'id', 'name');
		return $infos;
	}	

	public function getInfos($decorationId)
	{
		/*$cache = \Yii::$app->cache;
		$keyCache = 'decoration_brand';
		$data = $cache->get($keyCache);
		if ($data) {
			return $data;
		}*/

		$infos = $this->find()->where(['decoration_id' => $decorationId])->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->all();

        //$cache->set($keyCache, $infos);
		return $infos;
	}		

	public function getPresent($data)
	{
		$decoration = $data['decorationModel'];
		$countTarget = $decoration->lottery_number;
		if ($countTarget < 1) {
			return ['status' => 400, 'message' => '本次活动没有抽奖环节'];
		}

		$got = LotteryLog::findOne(['mobile' => $data['mobile'], 'decoration_id' => $decoration['id']]);
		if (!empty($got)) {
			return ['status' => 400, 'message' => '您已经抽过奖了'];
		}

		$countExist = LotteryLog::find()->where(['decoration_id' => $decoration['id']])->count();
		if ($countExist >= $countTarget) {
			return ['status' => 400, 'message' => '本次活动奖品已发放完毕'];
		}

		$infos = $this->getInfos($decoration['id']);
		if (empty($infos)) {
			return ['status' => 400, 'message' => '本次活动抽奖奖品已下架'];
		}

		$dayTime = strtotime(date('Ymd'));
		$proArr = [];
		foreach ($infos as $info) {
		    $count = LotteryLog::find()->where(['decoration_id' => $decoration['id'], 'lottery_id' => $info['id']])->count();
		    $dayWhere = ['and', "decoration_id={$decoration['id']}", "lottery_id ={$info['id']}", "created_at>{$dayTime}"];
		    $dayCount = LotteryLog::find()->where($dayWhere)->count();
			$rate = $count / $countTarget * 100;
			if ($rate < $info['probability'] && $dayCount < $info['limit_day']) {
				$proArr[$info['id']] = $info['probability'];
			}
		}
		$keyBingo = $this->_getRand($proArr);
		$info = isset($infos[$keyBingo]) ? $infos[$keyBingo] : false;

		if (empty($info)) {
			return ['status' => 400, 'message' => '本奖品已发放完毕'];
		}

		$got = LotteryLog::findOne(['mobile' => $data['mobile'], 'decoration_id' => $decoration['id']]);
		if (!empty($got)) {
			return ['status' => 400, 'message' => '您已经抽过奖了'];
		}

		$insertInfo = [
			'lottery_id' => $info['id'],
			'decoration_id' => $decoration['id'],
			'mobile' => $data['mobile'],
			'name' => $info['name'],
			'prize' => $info['prize'],
			'price' => $info['price'],
			'created_at' => \Yii::$app->params['currentTime'],
			'status' => 0,
		];
		$lotteryLog = new LotteryLog($insertInfo);
		$lotteryLog->insert(false);


		$return = [
			'status' => 200,
			'message' => "您成功抽中了{$info['prize']}:价值{$info['price']}的{$info['name']}",
			'data' => $info,
		];

		$content = "【一起装修网】恭喜您获得{$info['prize']}！客服会在15分钟内回访了解详细需求。展厅参观地址：{$decoration['address']}。咨询电话：400-689-1717转5";

		$smser = new \common\components\sms\Smser('company');
        $smser->send($data['mobile'], $content, 'decoration_signup');

		return $return;
	}
    
	protected function _getRand($proArr)
	{   
        $result = '';    
        // 概率数组的总概率精度   
        $proSum = array_sum($proArr);    
        // 概率数组循环   
        foreach ($proArr as $key => $proCur) {   
            $randNum = mt_rand(1, $proSum);   
            if ($randNum <= $proCur) {   
                $result = $key;   
                break;   
            } else {   
                $proSum -= $proCur;   
            }         
        }   
        unset($proArr);    
        return $result;   
    }   
	
}
