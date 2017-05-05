<?php

namespace backend\shoot\controllers;

use Yii;
use shoot\models\Tag;
use shoot\models\searchs\Tag as TagSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class TagController extends AdminController
{
	protected $modelClass = 'shoot\models\Tag';

    public function actionListinfo()
    {
        $searchModel = new TagSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Tag());
    }

	public function actionAddMul()
	{
		return $this->_addMulInfo(new Tag());
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