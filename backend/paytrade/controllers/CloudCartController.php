<?php

namespace backend\paytrade\controllers;

use Yii;
use paytrade\cloud\models\Cart;
use paytrade\cloud\models\searchs\Cart as CartSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class CloudCartController extends AdminController
{
	protected $modelClass = 'paytrade\cloud\models\Cart';

    public function actionListinfo()
    {
        $searchModel = new CartSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Cart());
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