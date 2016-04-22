<?php

namespace shoot\models;

use common\models\ShootModel;

class Attribute extends ShootModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attribute}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '属性ID',
            'type_id' => '分类',
            'name' => '属性名称',
            'values' => '可选值',
            'orderlist' => '排序',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'status' => '是否显示',
        ];
    }
}