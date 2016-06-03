<?php
use yii\helpers\Html;

$tableName = 'owner_house';
?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $model->getAttributeLabel('created_at'); ?></th>
            <th><?= $model->getAttributeLabel('updated_at'); ?></th>
            <th><?= $model->getAttributeLabel('address'); ?></th>
            <th><?= $model->getAttributeLabel('house_area'); ?></th>
            <th><?= $model->getAttributeLabel('house_type'); ?></th>
            <th><?= $model->getAttributeLabel('house_sort'); ?></th>
            <th><?= $model->getAttributeLabel('buy_furniture'); ?></th>
            <th><?= $model->getAttributeLabel('buy_building'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
            <td><?= date('Y-m-d H:i:s', $model->updated_at); ?></td>
            <td><input type="text" name="address" value="<?= $model->address; ?>" onchange="updateElemForOwner('<?= $tableName; ?>', <?= $model->id; ?>, 'address', this.value)"/></td>
            <td><input type="text" name="house_area" value="<?= $model->house_area; ?>" onchange="updateElemForOwner('<?= $tableName; ?>', <?= $model->id; ?>, 'house_area', this.value)"/></td>
            <td>
            <?= Html::dropDownList(
                'house_type', 
                $model->house_type, 
                $model->houseTypeInfos, 
                [
                    'prompt' => '全部', 
                    'class' => 'form-control',
                    'onchange' => "updateElemForOwner('{$tableName}', {$model->id}, 'house_type', this.value)",
                ]
            ); ?>
            </td>
            <td>
            <?= Html::dropDownList(
                'house_sort', 
                $model->house_sort, 
                $model->houseSortInfos, 
                [
                    'prompt' => '全部', 
                    'class' => 'form-control',
                    'onchange' => "updateElemForOwner('{$tableName}', {$model->id}, 'house_sort', this.value)",
                ]
            ); ?>
            </td>
            <td><?= Html::radioList('buy_furniture', $model->buy_furniture, $model->buyFurnitureInfos, ['onchange' => "updateElemForOwner('{$tableName}', {$model->id}, 'buy_furniture', $('input[name=\"buy_furniture\"]:checked').val())"]); ?></td>
            <td><?= Html::radioList('buy_building', $model->buy_building, $model->buyBuildingInfos, ['onchange' => "updateElemForOwner('{$tableName}', {$model->id}, 'buy_building', $('input[name=\"buy_building\"]:checked').val())"]); ?></td>
        </tr>
    </tbody>
</table>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $model->getAttributeLabel('renovation_at'); ?></th>
            <th><?= $model->getAttributeLabel('renovation_step'); ?></th>
            <th><?= $model->getAttributeLabel('renovation_budget'); ?></th>
            <th><?= $model->getAttributeLabel('renovation_company'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
		    <td><input type="text" name="renovation_at" value="<?= $model->renovation_at; ?>"/></td>
            <td>
            <?= Html::dropDownList(
                'renovation_step', 
                $model->renovation_step, 
                $model->renovationStepInfos, 
                [
                    'prompt' => '全部', 
                    'class' => 'form-control',
                    'onchange' => "updateElemForOwner('{$tableName}', {$model->id}, 'renovation_step', this.value)",
                ]
            ); ?>
            </td>
            <td>
            <?= Html::dropDownList(
                'renovation_budget', 
                $model->renovation_budget, 
                $model->renovationBudgetInfos, 
                [
                    'prompt' => '全部', 
                    'class' => 'form-control',
                    'onchange' => "updateElemForOwner('{$tableName}', {$model->id}, 'renovation_budget', this.value)",
                ]
            ); ?>
            </td>
            <td><?= Html::radioList('renovation_company', $model->renovation_company, $model->renovationCompanyInfos, ['onchange' => "updateElemForOwner('{$tableName}', {$model->id}, 'renovation_company', $('input[name=\"renovation_company\"]:checked').val())"]); ?></td>
        </tr>
    </tbody>
</table>