<?php

namespace backend\website\controllers;

use Yii;
use website\models\Goods;
use website\models\searchs\Goods as GoodsSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class GoodsController extends AdminController
{
	protected $modelClass = 'website\models\Goods';

    public function actionListinfo()
    {
        $searchModel = new GoodsSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Goods());
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