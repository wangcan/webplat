<?php

namespace shoot\info\models;

use common\models\ShootModel;

class Info extends ShootModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%info}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name' => '名称',
            'code' => '代码',
            'description' => '描述',
            'parent_id' => '父级分类ID',
            'orderlist' => '排序',
			'template' => '模板',
			'content' => '内容',
            'status' => '状态',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['parent_id'], 'filterParent'],
            [['orderlist', 'parent_id'], 'default', 'value' => 0],
            [['parent_id'], 'default', 'value' => ''],
			[['description', 'template', 'content'], 'safe'],
        ];
    }

    /**
     * Use to loop detected.
     */
    public function filterParent()
    {
        $parent = self::findOne(['id' => $this->parent_id]);
        if (empty($parent)) {
            $this->addError('parent_id', '父分类不存在');
        }
    }

	/**
	 * Get the infos, format the name to a tree
	 *
	 */
	public function getFormatedInfos()
	{
    	$infos = $this->find()->indexBy('id')->asArray()->all();
		$formatedInfos = $this->getTreeInfos($infos, 'id', 'parent_id', 'name');
        return $formatedInfos;
	}

	/**
	 * Get tree list for select
	 *
	 * @return array
	 */
	public function getSelectInfos()
	{
    	$infos = $this->find()->select(['id', 'name', 'parent_id'])->indexBy('id')->asArray()->all();
		$datas = $this->getLevelInfos($infos, 'id', 'parent_id', 'name', 0);
		return $datas;
	}

	public function getStatusInfos()
	{
		$datas = [
			'0' => '隐藏',
			'1' => '显示',
		];	
		return $datas;
	}

	public function getTemplateInfos()
	{
		$datas = [
			'' => '默认',
			'simple' => '简洁',
		];	
		return $datas;
	}	
}
