<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'znbj/css/new_global', 'znbj/css/toolbar_css', 'znbj/css/zxbjV2',
	'znbj/css/zxbj_new_two', 'znbj/css/zxbj_n_alink',
];
$this->params['jsFiles'] = [
];
$this->params['bodyClass'] = 'narrow_980';
$this->params['currentNav'] = 'free';
$this->params['formPosition'] = 'hd-baojia';
$this->params['formPositionName'] = '活动-报价';
?>
<!--[if lt IE 9]>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<![endif]-->
<!--[if gte IE 9]>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj/js/jquery-1.10.2.min.js" type="text/javascript"></script>
<![endif]-->
<!--[if !IE]><!-->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj/js/jquery-1.10.2.min.js" type="text/javascript"></script>
<!--<![endif]-->
<script>
   var jq = jQuery.noConflict();
window.BASEDOMAIN = '.<?= Yii::$app->params['baseDomain']; ?>';
</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj/js/to8torsas.js" type="text/javascript"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj/js/tender.js" type="text/javascript"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj/js/to8torsaszb.js" type="text/javascript"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj/js/common_new.js" type="text/javascript"></script>
<script type="text/javascript">var city_config = jq.parseJSON('{"bj":{"tname":"\u5317\u4eac","townid":1672},"tj":{"tname":"\u5929\u6d25","townid":317},"sy":{"tname":"\u6c88\u9633","townid":2951},"dl":{"tname":"\u5927\u8fde","townid":2962},"sjz":{"tname":"\u77f3\u5bb6\u5e84","townid":2116},"ts":{"tname":"\u5510\u5c71","townid":2140},"lf":{"tname":"\u5eca\u574a","townid":2271},"as":{"tname":"\u978d\u5c71","townid":2971},"dq":{"tname":"\u5927\u5e86","townid":2538},"heb":{"tname":"\u54c8\u5c14\u6ee8","townid":2474},"cc":{"tname":"\u957f\u6625","townid":2755},"qinhuangdao":{"tname":"\u79e6\u7687\u5c9b","townid":2151},"wlcb":{"tname":"\u4e4c\u5170\u5bdf\u5e03","townid":3049},"tieling":{"tname":"\u94c1\u5cad","townid":3035},"baoding":{"tname":"\u4fdd\u5b9a","townid":2201},"zhangjiakou":{"tname":"\u5f20\u5bb6\u53e3","townid":2226},"handan":{"tname":"\u90af\u90f8","townid":2160},"cangzhou":{"tname":"\u6ca7\u5dde","townid":2255},"jilin":{"tname":"\u5409\u6797","townid":2763},"yingkou":{"tname":"\u8425\u53e3","townid":3009},"jinzhou":{"tname":"\u9526\u5dde","townid":2994},"fushun":{"tname":"\u629a\u987a","townid":2979},"hengshui":{"tname":"\u8861\u6c34","townid":2280},"benxi":{"tname":"\u672c\u6eaa","townid":2939},"tonghua":{"tname":"\u901a\u5316","townid":2783},"xingtai":{"tname":"\u90a2\u53f0","townid":2179},"suihua":{"tname":"\u7ee5\u5316","townid":2595},"huludao":{"tname":"\u846b\u82a6\u5c9b","townid":3001},"dandong":{"tname":"\u4e39\u4e1c","townid":2986},"liaoyang":{"tname":"\u8fbd\u9633","townid":3030},"chaoyang":{"tname":"\u671d\u9633","townid":3043},"chengde":{"tname":"\u627f\u5fb7","townid":2243},"jiamusi":{"tname":"\u4f73\u6728\u65af","townid":2575},"qqhe":{"tname":"\u9f50\u9f50\u54c8\u5c14","townid":2494},"siping":{"tname":"\u56db\u5e73","townid":2772},"sh":{"tname":"\u4e0a\u6d77","townid":1103},"nj":{"tname":"\u5357\u4eac","townid":2827},"hz":{"tname":"\u676d\u5dde","townid":591},"fz":{"tname":"\u798f\u5dde","townid":1681},"suzhou":{"tname":"\u82cf\u5dde","townid":2929},"changshu":{"tname":"\u5e38\u719f","townid":2930},"jn":{"tname":"\u6d4e\u5357","townid":1422},"wx":{"tname":"\u65e0\u9521","townid":2920},"qd":{"tname":"\u9752\u5c9b","townid":1440},"nb":{"tname":"\u5b81\u6ce2","townid":511},"wz":{"tname":"\u6e29\u5dde","townid":523},"yw":{"tname":"\u4e49\u4e4c","townid":558},"wf":{"tname":"\u6f4d\u574a","townid":1408},"jining":{"tname":"\u6d4e\u5b81","townid":1488},"yt":{"tname":"\u70df\u53f0","townid":1472},"nt":{"tname":"\u5357\u901a","townid":2892},"cz":{"tname":"\u5e38\u5dde","townid":2912},"xz":{"tname":"\u5f90\u5dde","townid":2836},"tz":{"tname":"\u53f0\u5dde","townid":571},"jx":{"tname":"\u5609\u5174","townid":535},"jh":{"tname":"\u91d1\u534e","townid":556},"qz":{"tname":"\u6cc9\u5dde","townid":1715},"nc":{"tname":"\u5357\u660c","townid":869},"ganzhou":{"tname":"\u8d63\u5dde","townid":906},"fzlc":{"tname":"\u9ece\u5ddd","townid":959},"nf":{"tname":"\u5357\u4e30","townid":952},"lianyungang":{"tname":"\u8fde\u4e91\u6e2f","townid":2845},"kunshan":{"tname":"\u6606\u5c71","townid":2933},"suqian":{"tname":"\u5bbf\u8fc1","townid":2860},"yangzhou":{"tname":"\u626c\u5dde","townid":2878},"zhenjiang":{"tname":"\u9547\u6c5f","townid":2902},"huaian":{"tname":"\u6dee\u5b89","townid":2855},"quzhou":{"tname":"\u8862\u5dde","townid":605},"huzhou":{"tname":"\u6e56\u5dde","townid":543},"zhoushan":{"tname":"\u821f\u5c71","townid":566},"shaoxing":{"tname":"\u7ecd\u5174","townid":549},"wuhu":{"tname":"\u829c\u6e56","townid":1555},"jiujiang":{"tname":"\u4e5d\u6c5f","townid":890},"yancheng":{"tname":"\u76d0\u57ce","townid":2867},"ahsz":{"tname":"\u5bbf\u5dde","townid":1620},"huangshan":{"tname":"\u9ec4\u5c71","townid":1605},"jiangyin":{"tname":"\u6c5f\u9634","townid":2921},"zhangzhou":{"tname":"\u6f33\u5dde","townid":1730},"zibo":{"tname":"\u6dc4\u535a","townid":1446},"linyi":{"tname":"\u4e34\u6c82","townid":1531},"anqing":{"tname":"\u5b89\u5e86","townid":1592},"taizhou":{"tname":"\u6cf0\u5dde","townid":2885},"heze":{"tname":"\u83cf\u6cfd","townid":1394},"zaozhuang":{"tname":"\u67a3\u5e84","townid":1460},"lishui":{"tname":"\u4e3d\u6c34","townid":581},"yingtan":{"tname":"\u9e70\u6f6d","townid":902},"weihai":{"tname":"\u5a01\u6d77","townid":1482},"dongying":{"tname":"\u4e1c\u8425","townid":1464},"putian":{"tname":"\u8386\u7530","townid":1713},"longyan":{"tname":"\u9f99\u5ca9","townid":1752},"yichun":{"tname":"\u5b9c\u6625","townid":940},"binzhou":{"tname":"\u6ee8\u5dde","townid":1386},"rizhao":{"tname":"\u65e5\u7167","townid":1419},"liaocheng":{"tname":"\u804a\u57ce","townid":1377},"taian":{"tname":"\u6cf0\u5b89","townid":1501},"fuzhou":{"tname":"\u629a\u5dde","townid":951},"dezhou":{"tname":"\u5fb7\u5dde","townid":1511},"jian":{"tname":"\u5409\u5b89","townid":927},"shangrao":{"tname":"\u4e0a\u9976","townid":962},"jingdezhen":{"tname":"\u666f\u5fb7\u9547","townid":876},"gz":{"tname":"\u5e7f\u5dde","townid":1121},"sz":{"tname":"\u6df1\u5733","townid":1130},"dg":{"tname":"\u4e1c\u839e","townid":1181},"fs":{"tname":"\u4f5b\u5c71","townid":1196},"huizhou":{"tname":"\u60e0\u5dde","townid":1172},"sanya":{"tname":"\u4e09\u4e9a","townid":2093},"zhongshan":{"tname":"\u4e2d\u5c71","townid":1182},"zhuhai":{"tname":"\u73e0\u6d77","townid":1134},"shantou":{"tname":"\u6c55\u5934","townid":1141},"qingyuan":{"tname":"\u6e05\u8fdc","townid":1229},"jiangmen":{"tname":"\u6c5f\u95e8","townid":1186},"zhaoqing":{"tname":"\u8087\u5e86","townid":1221},"nn":{"tname":"\u5357\u5b81","townid":1891},"lz":{"tname":"\u67f3\u5dde","townid":1903},"xm":{"tname":"\u53a6\u95e8","townid":1695},"haikou":{"tname":"\u6d77\u53e3","townid":2092},"beihai":{"tname":"\u5317\u6d77","townid":1936},"guilin":{"tname":"\u6842\u6797","townid":1915},"yangjiang":{"tname":"\u9633\u6c5f","townid":1198},"bijie":{"tname":"\u6bd5\u8282","townid":2056},"ningde":{"tname":"\u5b81\u5fb7","townid":1761},"heyuan":{"tname":"\u6cb3\u6e90","townid":1156},"yunfu":{"tname":"\u4e91\u6d6e","townid":1106},"sanming":{"tname":"\u4e09\u660e","townid":1699},"zhanjiang":{"tname":"\u6e5b\u6c5f","townid":1206},"shaoguan":{"tname":"\u97f6\u5173","townid":1145},"baise":{"tname":"\u767e\u8272","townid":1868},"maoming":{"tname":"\u8302\u540d","townid":1214},"jieyang":{"tname":"\u63ed\u9633","townid":1242},"fcg":{"tname":"\u9632\u57ce\u6e2f","townid":1940},"guigang":{"tname":"\u8d35\u6e2f","townid":1949},"shanwei":{"tname":"\u6c55\u5c3e","townid":1177},"wuzhou":{"tname":"\u68a7\u5dde","townid":1929},"0775":{"tname":"\u7389\u6797","townid":1952},"meizhou":{"tname":"\u6885\u5dde","townid":1162},"hechi":{"tname":"\u6cb3\u6c60","townid":1964},"qionghai":{"tname":"\u743c\u6d77","townid":2095},"laibin":{"tname":"\u6765\u5bbe","townid":1976},"puning":{"tname":"\u666e\u5b81","townid":1243},"chongzuo":{"tname":"\u5d07\u5de6","townid":1983},"cq":{"tname":"\u91cd\u5e86","townid":974},"xa":{"tname":"\u897f\u5b89","townid":1},"wh":{"tname":"\u6b66\u6c49","townid":762},"cd":{"tname":"\u6210\u90fd","townid":118},"km":{"tname":"\u6606\u660e","townid":612},"hf":{"tname":"\u5408\u80a5","townid":1547},"lanzhou":{"tname":"\u5170\u5dde","townid":1783},"ty":{"tname":"\u592a\u539f","townid":1254},"gy":{"tname":"\u8d35\u9633","townid":2013},"cs":{"tname":"\u957f\u6c99","townid":2619},"hhht":{"tname":"\u547c\u548c\u6d69\u7279","townid":3094},"wlmq":{"tname":"\u4e4c\u9c81\u6728\u9f50","townid":410},"zz":{"tname":"\u90d1\u5dde","townid":2298},"yinchuan":{"tname":"\u94f6\u5ddd","townid":1018},"baotou":{"tname":"\u5305\u5934","townid":3106},"ny":{"tname":"\u5357\u9633","townid":2413},"ly":{"tname":"\u6d1b\u9633","townid":2328},"jz":{"tname":"\u7126\u4f5c","townid":2353},"luzhou":{"tname":"\u6cf8\u5dde","townid":151},"zigong":{"tname":"\u81ea\u8d21","townid":138},"deyang":{"tname":"\u5fb7\u9633","townid":159},"mianyang":{"tname":"\u7ef5\u9633","townid":166},"yulin":{"tname":"\u6986\u6797","townid":86},"yichang":{"tname":"\u5b9c\u660c","townid":803},"xianyang":{"tname":"\u54b8\u9633","townid":33},"kaili":{"tname":"\u51ef\u91cc","townid":1991},"zhuzhou":{"tname":"\u682a\u6d32","townid":2627},"kaifeng":{"tname":"\u5f00\u5c01","townid":2316},"xinyang":{"tname":"\u4fe1\u9633","townid":2438},"zunyi":{"tname":"\u9075\u4e49","townid":2026},"shiyan":{"tname":"\u5341\u5830","townid":782},"xiangyang":{"tname":"\u8944\u9633","townid":774},"xiangtan":{"tname":"\u6e58\u6f6d","townid":2635},"yueyang":{"tname":"\u5cb3\u9633","townid":2669},"hengyang":{"tname":"\u8861\u9633","townid":2644},"chuzhou":{"tname":"\u6ec1\u5dde","townid":1611},"xinxiang":{"tname":"\u65b0\u4e61","townid":2366},"huainan":{"tname":"\u6dee\u5357","townid":1572},"liupanshui":{"tname":"\u516d\u76d8\u6c34","townid":2019},"hanzhong":{"tname":"\u6c49\u4e2d","townid":74},"yongzhou":{"tname":"\u6c38\u5dde","townid":2711},"qujing":{"tname":"\u66f2\u9756","townid":627},"fuyang":{"tname":"\u961c\u9633","townid":1537},"liuan":{"tname":"\u516d\u5b89","townid":1632},"bengbu":{"tname":"\u868c\u57e0","townid":1563},"changde":{"tname":"\u5e38\u5fb7","townid":2678},"jingmen":{"tname":"\u8346\u95e8","townid":814},"xining":{"tname":"\u897f\u5b81","townid":1045},"meishan":{"tname":"\u7709\u5c71","townid":248},"ziyang":{"tname":"\u8d44\u9633","townid":255},"huangshi":{"tname":"\u9ec4\u77f3","townid":767},"baoji":{"tname":"\u5b9d\u9e21","townid":20},"tongren":{"tname":"\u94dc\u4ec1","townid":2046},"guangan":{"tname":"\u5e7f\u5b89","townid":229},"puer":{"tname":"\u666e\u6d31","townid":665},"baoshan":{"tname":"\u4fdd\u5c71","townid":647},"xiaogan":{"tname":"\u5b5d\u611f","townid":823},"datong":{"tname":"\u5927\u540c","townid":1262},"yiyang":{"tname":"\u76ca\u9633","townid":2692},"chenzhou":{"tname":"\u90f4\u5dde","townid":2697},"huaihua":{"tname":"\u6000\u5316","townid":2722},"loudi":{"tname":"\u5a04\u5e95","townid":2735},"zhaoyang":{"tname":"\u90b5\u9633","townid":2655},"zhangjiajie":{"tname":"\u5f20\u5bb6\u754c","townid":2687},"xianning":{"tname":"\u54b8\u5b81","townid":842},"sanmenxia":{"tname":"\u4e09\u95e8\u5ce1","townid":2405},"huanggang":{"tname":"\u9ec4\u5188","townid":831},"zhoukou":{"tname":"\u5468\u53e3","townid":2448},"shangqiu":{"tname":"\u5546\u4e18","townid":2428},"nanchong":{"tname":"\u5357\u5145","townid":208},"pds":{"tname":"\u5e73\u9876\u5c71","townid":2342},"chifeng":{"tname":"\u8d64\u5cf0","townid":3118},"yibin":{"tname":"\u5b9c\u5bbe","townid":218},"linfen":{"tname":"\u4e34\u6c7e","townid":1333},"jinzhong":{"tname":"\u664b\u4e2d","townid":1306},"suining":{"tname":"\u9042\u5b81","townid":184},"puyang":{"tname":"\u6fee\u9633","townid":2386},"maanshan":{"tname":"\u9a6c\u978d\u5c71","townid":1577},"guangyuan":{"tname":"\u5e7f\u5143","townid":176},"xuchang":{"tname":"\u8bb8\u660c","townid":2392},"bozhou":{"tname":"\u4eb3\u5dde","townid":1639},"yuncheng":{"tname":"\u8fd0\u57ce","townid":1350},"zhumadian":{"tname":"\u9a7b\u9a6c\u5e97","townid":2458},"jingzhou":{"tname":"\u8346\u5dde","townid":792},"yuxi":{"tname":"\u7389\u6eaa","townid":637},"leshan":{"tname":"\u4e50\u5c71","townid":196},"changzhi":{"tname":"\u957f\u6cbb","townid":1278},"anshun":{"tname":"\u5b89\u987a","townid":2039},"neijiang":{"tname":"\u5185\u6c5f","townid":190},"tianshui":{"tname":"\u5929\u6c34","townid":1798},"longnan":{"tname":"\u9647\u5357","townid":1849},"zhaotong":{"tname":"\u662d\u901a","townid":653},"weinan":{"tname":"\u6e2d\u5357","townid":48},"anyang":{"tname":"\u5b89\u9633","townid":2378},"dazhou":{"tname":"\u8fbe\u5dde","townid":235},"ankang":{"tname":"\u5b89\u5eb7","townid":99},"ezhou":{"tname":"\u9102\u5dde","townid":821},"luohe":{"tname":"\u6f2f\u6cb3","townid":2400},"nanping":{"tname":"\u5357\u5e73","townid":1741},"dali":{"tname":"\u5927\u7406","townid":725},"hebi":{"tname":"\u9e64\u58c1","townid":2308},"hegang":{"tname":"\u9e64\u5c97","townid":2510},"mudanjiang":{"tname":"\u7261\u4e39\u6c5f","townid":2565},"shuangyashan":{"tname":"\u53cc\u9e2d\u5c71","townid":2518},"jixi":{"tname":"\u9e21\u897f","townid":2528},"chuxiong":{"tname":"\u695a\u96c4","townid":715},"hulunbeiershi":{"tname":"\u547c\u4f26\u8d1d\u5c14","townid":3147},"xilinguolemeng":{"tname":"\u9521\u6797\u90ed\u52d2\u76df","townid":3286},"xishuangbanna":{"tname":"\u897f\u53cc\u7248\u7eb3","townid":3287},"huaibei":{"tname":"\u6dee\u5317","townid":1582}}');</script></head>

<div class="toolbar_header">
<div class="toolbar_header_top">
    <div class="toolbar_header_center">
        <div class="header_top_right toolbar_header_center_right">
            <ul>
                <li>
                    <!--<label id="nav_user_data">
                        <a href="http://www.to8to.com/new_login.php" class="htr_login" rel="nofollow">登录</a>
                        <a href="http://www.to8to.com/reg/" class="htr_reg" rel="nofollow">注册</a></label>
                    <span class="htr_line"></span>-->
                    <a class="nav_fzlink" href="<?= Yii::getAlias('@gallerycmsurl'); ?>" target="_blank">返回官网首页</a></li>
            </ul>
        </div>
        <div class="toolbar_header_center_left">
            <ul class="clear">
                <li>
				    <a class="nav_fzlink link_to8to" href="<?= Url::to(['/house/site/home', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="link_to8to">
				    <em href="<?= Url::to(['/house/site/home', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="toolbar_log"></em>
					<span><?= Yii::$app->params['siteNameBase']; ?></span>
                    </a>
                </li>
                <li>
    				<a href="<?= Url::to(['/house/sample/index', 'page' => 1, 'tag' => '']); ?>">装修案例</a>
                </li>
                <li>
    				<a href="<?= Url::to(['/house/realcase/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">实景作品</a>
                </li>
                <li>
    				<a href="<?= Url::to(['/house/decoration-company/index', 'page' => 1, 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">装修公司</a>
                </li>
                <li>
    			    <a href="<?= Url::to(['/house/feature/index', 'view' => 'kaopu', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">装修服务</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="global_wrap clear zxbj_details" id="gloWrap">
    <!-- con -->
    <div class="con">
        <div class="con_bj clear">
            <!-- calculate -->
            <div class="con_bj_cal col_l">
                <h3 class="calputer_tit">装修计算器<span>今天已有<em class="num_man">812</em>位业主获取了装修预算</span></h3>
                <form id="new_base_info">
                    <div class="mod_form bj_form">
                        <div class="form_line">
                            <label for="" class="label">
                                <em class="label_start">*</em>所在城市：</label>
                            <div class="element">
                                <div class="clear">
                                    <input type="hidden" name="dangci" value="jianzhuang">
                                    <select id="User_Shen" name="shen" class="select select_s col_l" onchange="changeProvince('User_Shen','User_City','User_Town');">
                                        <option value="">省/市</option></select>
                                    <select id="User_City" name="city" class="select select_s col_l" onchange="changeTown('User_Shen','User_City','User_Town');">
                                        <option value="">市/地区</option></select>
                                    <div style="display:none">
                                        <select class="langSelect" id="User_Town" name="town">
                                            <option value="">县/市</option></select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form_line">
                            <label for="" class="label">
                                <em class="label_start">*</em>房屋面积：</label>
                            <div class="element">
                                <div class="text_wrap">
                                    <input type="text" class="text area_text" name="square" id="square">
                                    <em class="text_lbl">输入您的房屋面积</em>
                                    <em class="unit" style="color: black;">m&sup2;</em></div>
                                <p class="text_area">* 输入面积小于30㎡时，报价结果按30㎡计算</p></div>
                        </div>
                        <!--<div class="form_line">
                            <label for="" class="label">
                                <em class="label_start">*</em>房屋户型：</label>
                            <div class="element">
                                <div class="clear">
                                    <select name="shi" id="shi" class="select select_s select_s_s col_l">
                                        <option value="1">1室</option>
                                        <option value="2">2室</option>
                                        <option value="3">3室</option>
                                        <option value="4">4室</option>
                                        <option value="5">5室</option>
                                        <option value="6">6室</option></select>
                                    <select name="ting" id="ting" class="select select_s select_s_s col_l">
                                        <option value="1">1厅</option>
                                        <option value="2">2厅</option>
                                        <option value="3">3厅</option>
                                        <option value="4">4厅</option>
                                        <option value="5">5厅</option>
                                        <option value="6">6厅</option></select>
                                    <select name="chu" id="chu" class="select select_s select_s_s col_l">
                                        <option value="1">1厨</option>
                                        <option value="2">2厨</option>
                                        <option value="3">3厨</option></select>
                                    <select name="wei" id="wei" class="select select_s col_l">
                                        <option value="1">1卫</option>
                                        <option value="2">2卫</option>
                                        <option value="3">3卫</option>
                                        <option value="4">4卫</option>
                                        <option value="5">5卫</option>
                                        <option value="6">6卫</option></select>
                                    <select name="yangtai" id="yangtai" class="select select_s col_l">
                                        <option value="1">1阳台</option>
                                        <option value="2">2阳台</option>
                                        <option value="3">3阳台</option>
                                        <option value="4">4阳台</option>
                                        <option value="5">5阳台</option>
                                        <option value="6">6阳台</option></select>
                                </div>
                            </div>
                        </div>-->
                        <div class="form_line" id="phoneInput">
                            <label for="" class="label">
                                <em class="label_start">*</em>手机号码：</label>
                            <div class="element">
                                <div class="text_wrap">
                                    <input type="text" class="text" name="phone">
                                    <em class="text_lbl">报价结果将发送到您的手机</em></div>
                            </div>
                        </div>
                        <div class="form_line bj_btn">
                            <a class="calc-btn" id="calc_btn" href="javascript:;"></a>
                            <input type="hidden" name="ptag" id="myPtag" value="1_4_7_1" /></div>
                    </div>
                </form>
            </div>
            <!-- results -->
            <div class="con_bj_res col_r">
                <!--<h3>计算结果</h3>-->
                <div class="bj_res_con">
                    <div class="bj_res_t clear">您的装修预算约
                        <b id="money">？</b>
                        <span>元</span></div>
                    <ul class="bj_res_ul">
                        <li class="clear">
                            <span>卧室：</span>
                            <strong><em id="price-ws">？</em>元</strong></li>
                        <li class="clear">
                            <span>客厅：</span>
                            <strong><em id="price-kt">？</em>元</strong></li>
                        <li class="clear">
                            <span>厨房：</span>
                            <strong><em id="price-cf">？</em>元</strong></li>
                        <li class="clear">
                            <span>卫生间：</span>
                            <strong><em id="price-wsj">？</em>元</strong></li>
                        <li class="clear">
                            <span>阳台：</span>
                            <strong><em id="price-yt">？</em>元</strong></li>
                        <li class="clear">
                            <span>其他：</span>
                            <strong><em id="price-other">？</em>元</strong></li>
                    </ul>
                </div>
                <div class="bj_explain" style="display:none">
                    <p class="attention">
                        <b>*</b>稍候装修管家将回电您，免费提供装修咨询服务</p>
                    <p>
                        <b>*</b>因材料品牌及工程量不同，具体报价以量房实测为准</p>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj/js/zxbj_new_two.js?v=1467882103" type="text/javascript"></script>
    <script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj/js/GlobalProvinces.js?v=1460516531" type="text/javascript"></script>
    <script type="text/javascript">var gpm = new GlobalProvincesModule; //城市类
        gpm.def_province = ["省/市", ""];
        gpm.def_city1 = ["市/地区", ""];
        gpm.def_city2 = ["县/市", ""];
        gpm.initProvince($('User_Shen'));

        //解决大屏幕底部定位导致信息显示不全问题
        jq(function() {
            function setMinHeight() {
                var htmlObj = document.documentElement,
                wrapObj = document.getElementById('gloWrap'),
                windowHeight = htmlObj.clientHeight || bodyObj.clientHeight,
                wrapHeight = wrapObj.offsetHeight,
                wrapTop = wrapObj.offsetTop,
                wrapPos = wrapHeight + wrapTop;

                if (wrapPos < windowHeight) {
                    var pos = windowHeight - wrapPos;
                    wrapObj.getElementsByClassName('con')[0].style.paddingBottom = pos + 'px';
                };
            }
            setMinHeight();
            jq(window).on('resize',
            function() {
                setMinHeight();
            })
        })</script>
    <div id="small_window"></div>
    <div class="footer" id="footerHeight">
        <div class="footer_bottom">
            <div class="footer_bottom_container">
                <!--<div class="fbc_menu">
                    <ul>
                        <li>
                            <a hidefocus="" href="" target="_blank" rel="nofollow">关于我们</a><span></span>
                        </li>
                    </ul>
                </div>-->
                <div class="fbc_copyright">免责声明：本网站部分内容由用户自行上传，如权利人发现存在误传其作品情形，请及时与本站联系。</div>
                <div class="fbc_icp">中国装修网
				    <a href="javascript:void(0);" target="_blank" rel="nofollow"><?= Yii::$app->params['siteIcpInfo']; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
jQuery(function() {
    href_url = window.location.href;
    try {
        var footObj = document.getElementById('footerHeight'),
        wrapObj = document.getElementById('gloWrap'),
        htmlObj = document.documentElement,
        bodyObj = document.body,
        windowHeight = htmlObj.clientHeight || bodyObj.clientHeight,
        docScrollHeihgt = htmlObj.scrollHeight || bodyObj.scrollHeight,
        wrapHeight = wrapObj.offsetHeight,
        cb = (function() {
            var u = window.navigator.userAgent.toLocaleLowerCase(),
            msie = /(msie) ([\d.]+)/,
            chrome = /(chrome)\/([\d.]+)/,
            firefox = /(firefox)\/([\d.]+)/,
            safari = /(safari)\/([\d.]+)/,
            opera = /(opera)\/([\d.]+)/,
            ie11 = /(trident)\/([\d.]+)/,
            b = u.match(msie) || u.match(chrome) || u.match(firefox) || u.match(safari) || u.match(opera) || u.match(ie11);
            return {
                name: b[1],
                version: parseInt(b[2])
            };
        })();
        if (docScrollHeihgt < windowHeight) { //文档高度小于窗口高度
            var outWrapHeight = docScrollHeihgt - wrapHeight;
            if (cb.version < 8 && cb.name == 'msie') {
                footObj.style.position = 'absolute';
                htmlObj.style.overflowY = 'hidden';
            } else {
                footObj.style.position = 'fixed';
            }

            wrapObj.style.height = (windowHeight - outWrapHeight) + "px";
            footObj.style.bottom = 0;
        }
    } catch(e) {
    }
});
</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj/js/3e5c2a19dc2ac1471a747.js?v=1469619289" type="text/javascript"></script>
