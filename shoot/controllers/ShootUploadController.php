<?php

namespace shoot\controllers;

use common\components\UploadController;
use shoot\models\Attachment;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

class ShootUploadController extends UploadController
{
	public $enableCsrfValidation = false;

	protected function getAttachment($params = [])
	{
		return new Attachment($params);
	}
}