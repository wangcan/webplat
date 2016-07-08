<?php
use yii\helpers\Url;

$cssFiles = isset($this->params['cssFiles']) ? $this->params['cssFiles'] : [];
$jsFiles = isset($this->params['jsFiles']) ? $this->params['jsFiles'] : [];
$seoTitle = Yii::$app->params['seoTitle'];
$seoKeyword = Yii::$app->params['seoKeyword'];
$seoDescription = Yii::$app->params['seoDescription'];
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<link rel="canonical" href="<?= Yii::getAlias('@gallerycmsurl'); ?>" />
<meta name="applicable-device" content="mobile" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="shortcut icon" href="/favicon.ico" />
<title><?= $seoTitle; ?></title>
<meta name="keywords" content="<?= $seoKeyword; ?>" />
<meta name="description" content="<?= $seoDescription; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="address=no">
<meta content="false" name="twcClient" id="twcClient" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { ?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl/gallerycms') . '/house-m/css/' . $cssFile . '.css?v=151020'; ?>" />
<?php } } ?>

<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/gallerycms') . '/house-m/js/' . $jsFile . '.js'; ?>"></script>
<?php } } ?>
</head>
<?= $content; ?>
<body class="<?php if (isset($this->params['bodyClass'])) { echo $this->params['bodyClass']; } ?>">
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
</div>
</body>
</html>
