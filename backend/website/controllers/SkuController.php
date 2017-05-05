<?php

namespace backend\website\controllers;

use Yii;
use website\models\Sku;
use website\models\searchs\Sku as SkuSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class SkuController extends AdminController
{
	protected $modelClass = 'website\models\Sku';

    public function actionListinfo()
    {
        $searchModel = new SkuSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Sku());
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