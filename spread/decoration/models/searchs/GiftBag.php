<?php

namespace spread\decoration\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\decoration\models\GiftBag as GiftBagModel;

class GiftBag extends GiftBagModel
{
    public function search($params)
    {
        $query = GiftBagModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}