<?php

namespace backend\spread\controllers;

use Yii;
use spread\decoration\models\Professor;
use spread\decoration\models\searchs\Professor as ProfessorSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ProfessorController extends AdminController
{
	protected $modelClass = 'spread\decoration\models\Professor';

    public function actionListinfo()
    {
        $searchModel = new ProfessorSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Professor());
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