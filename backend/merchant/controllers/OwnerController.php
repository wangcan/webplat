<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\house\models\Owner;
use merchant\house\models\searchs\Owner as OwnerSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class OwnerController extends AdminController
{
	protected $modelClass = 'merchant\house\models\Owner';
    use MerchantInfoTrait;

    public function init()
    {
        parent::init();

		$this->_initInfo();
    }


    public function actionListinfo()
    {
        $searchModel = new OwnerSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		$data = [
			'merchant_id' => Yii::$app->request->get('merchant_id', 0),
			'city_code' => isset($this->companyInfo['code_short']) ? $this->companyInfo['code_short'] : '',
		];
		return $this->_addInfo(new Owner($data));
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