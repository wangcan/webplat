<?php

namespace spider\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spider\models\Attachment as AttachmentModel;

class Attachment extends AttachmentModel
{
    public function search($params)
    {
        $query = AttachmentModel::find()
            ->from(AttachmentModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}