<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\house\models\MerchantComment;
use merchant\house\models\searchs\MerchantComment as MerchantCommentSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class MerchantCommentController extends AdminController
{
	protected $modelClass = 'merchant\house\models\MerchantComment';
    use MerchantInfoTrait;

    public function init()
    {
        parent::init();

		$this->_ownerInfo();
		$this->_initInfo();
    }

    public function actionListinfo()
    {
        $searchModel = new MerchantCommentSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		$data = [
			'city_code' => isset($this->ownerInfo['city_code']) ? $this->ownerInfo['city_code'] : '',
			'merchant_id' => isset($this->ownerInfo['merchant_id']) ? $this->ownerInfo['merchant_id'] : '',
			'owner_id' => isset($this->ownerInfo['id']) ? $this->ownerInfo['id'] : '',
		];
		return $this->_addInfo(new MerchantComment($data));
    }

    public function actionUpdate($id = 0)
    {
		if (Yii::$app->request->isAjax) {
		    return $this->_updateByAjax();
		}

		return $this->_updateInfo($id);
    }

    public function actionDelete($id)
    {
		return $this->_deleteInfo($id);
    }
}