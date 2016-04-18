<?php

namespace spread\models;

use common\models\WebsiteModel;
use common\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attachment}}';
    }

    public static function getDb()
    {
        return \Yii::$app->dbSpread;
    }	

	public function getFieldInfos($table = null, $field = null)
	{
		$infos = [
			'groupon' => [
				'picture' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 100,
    				'type' => 'image/*',
				],
				'picture_small' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 40,
    				'type' => 'image/*',
				],
				'map' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 100,
    				'type' => 'image/*',
				],				
			],
			'product' => [
				'main_photo' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 100,
    				'type' => 'image/*',
				],
			],			
			'brand' => [
				'logo' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 80,
    				'type' => 'image/*',
				],
			],			
		];

		if (is_null($table) && is_null($field)) {
			return $infos;
		}

		if (!isset($infos[$table])) {
			return false;
		}
		if (is_null($field)) {
			return $infos[$table];
		}
		if (!isset($infos[$table][$field])) {
			return false;
		}

		return $infos[$table][$field];
	}
}