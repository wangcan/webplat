<?php

namespace backend\website\controllers;

use Yii;
use website\models\GoodsFavour;
use website\models\searchs\GoodsFavour as GoodsFavourSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class GoodsFavourController extends AdminController
{
	protected $modelClass = 'website\models\GoodsFavour';

    public function actionListinfo()
    {
        $searchModel = new GoodsFavourSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new GoodsFavour());
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
