<?php
use yii\helpers\Url;
?>
<div class="live-site line-bg">
    <h3>工地直播 全程透明</h3>
    <p>施工进展，实时掌控</p>
    <div class="items padTop35">
        <?php $i = 0; foreach ($infos as $info) { if ($i > 3) { break; } ?>
			<a <?php if ($i == 3) { echo 'class="last"'; } ?>href="<?= Url::to(['/house/decoration-company/show-working', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
			<img src="<?= $info['thumb']; ?>" width="278px" height="218px">
			<div class="node"><?= $info['status']; ?></div>
            <div class="recommend">
			    <p><?= $info['community_name'] . '-' . $info['owner_name'] . '的家'; ?></p>
				<p><?= $info['area']; ?>㎡ <?= $info['decoration_type'] . ' ' . $info['decoration_price'] . '万'; ?></p>
            </div>
        </a>
        <?php $i++; } ?>
    </div>
</div>