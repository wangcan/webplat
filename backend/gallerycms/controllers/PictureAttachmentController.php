<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\PictureAttachment;
use gallerycms\models\searchs\PictureAttachment as PictureAttachmentSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class PictureAttachmentController extends AdminController
{
	protected $modelClass = 'gallerycms\models\PictureAttachment';

    public function actionListinfo()
    {
        $searchModel = new PictureAttachmentSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new PictureAttachment());
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