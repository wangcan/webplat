<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;
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

	protected function _fieldInfos()
	{
		return [
			'article' => [
				'thumb' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 80,
    				'type' => 'image/*',
				],
			],			
			'article_category' => [
				'thumb' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 30,
    				'type' => 'image/*',
				],
			],
			'recommend' => [
				'thumb' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 30,
    				'type' => 'image/*',
				],
			],
			'picture_category' => [
				'thumb' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 30,
    				'type' => 'image/*',
				],
			],
			'professor' => [
				'photo' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 80,
    				'type' => 'image/*',
				],
			],			
			'position' => [
				'picture' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 2000,
    				'type' => 'image/*',
				],
				'picture_mobile' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 600,
    				'type' => 'image/*',
				],
				'picture_ext' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 2000,
    				'type' => 'image/*',
				],
			],			
		];
	}
}