<?php
return [
    'cityCodes' => [
	'bj', 'sh',
];
$companyList = "http://{$cityCode}.to8to.com/company/list_{$page}.html";
$companyShowUrls = [
	'index' => "http://{$cityCode}.to8to.com/zs/{$cId}/",
	'info' => "http://bj.to8to.com/zs/company1009502/",
	'certificate' => "http://bj.to8to.com/zs/1009502/integrity-certificate-1.html",
	'integrity' => "http://bj.to8to.com/zs/integrity1009502/",
	'news' => "http://bj.to8to.com/zs/news1009502/",
	'news-1' => "http://bj.to8to.com/zs/1009502/news-1-1.html",
	'connect' => "http://bj.to8to.com/zs/1009502/company-connect-1.html",
	'star' => "http://bj.to8to.com/zs/fiveStar.php?uid=1009502",
];

$companyDesigner = [
	'list' => "http://bj.to8to.com/zs/team1009502/",
	'show' => "http://bj.to8to.com/zs/1009502/team-display-t64989.html",
];

$companyComment = [
	'list' => "http://bj.to8to.com/zs/yz_dp.php?uid=1009502&page=2",
];

$companyWorking = [
	'list' => "http://bj.to8to.com/zs/visit.php?uid=1009502&act=0&page=1",
	'show' => "http://bj.to8to.com/zs/1009502/3851140visit1-display-1.html",
];

$realcase = [
	'list' => "http://bj.to8to.com/zs/1009502/case-0-1.html",
	'show' => "http://bj.to8to.com/zs/1009502/2307252visit1-display-1.html",
];