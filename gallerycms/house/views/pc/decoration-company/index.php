<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'common', 'lib/footer',
	'pages/provider/index',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'lib/bootstrap.carousel',
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;
//'杭州装修公司_杭州装修公司大全|排名 -兔狗杭州装修网';
//'杭州装修公司,杭州装修公司大全,杭州装修公司排名';
//'兔狗杭州装修网是一家致力于为广大杭州业主提供家装、家居、建材等装修服务的家装平台,专业正规杭州装修公司推荐,帮助杭州业主轻松搞定装修!';

$infos[] = ['id' => 1, 'name' => '可猛的装修公司', 'address' => '北京中南海'];
?>
<script type="text/javascript">$(function() {
    setCookie('page_flag', 'provider');
});</script>
<div class="page_banner" style="background: url('http://img.tugou.com/images/tugou5/provider/banner.jpg') no-repeat top center; height: 320px;"></div>
<div class="page_container clearfix">
<h1>推荐装修公司</h1>
<ul class="provider_list">
    <?php for ($i = 1; $i < 20; $i++) { foreach ($infos as $info) { ?>
	<li data-provider-id="<?= $info['id']; ?>">
        <div class="item_part left">
		    <a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id']]); ?>" target="_blank">
				<img class="provider_avatar" src="http://pic.tugou.com/provider/1461553260_4216181.jpeg" alt="<?= $info['name']; ?>" />
            </a>
            <p>已服务 4200 业主</p>
        </div>
        <div class="item_part center">
            <p class="provider_name">
			    <a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id']]); ?>" title="<?= $info['name']; ?>" target="_blank"><?= $info['name']; ?></a>
                <span class="provider_tags">
                    <i class="icon_new icon1"><span>保障金先行赔付</span></i>
                    <i class="icon_new icon2"><span>装修施工资质权威认证</span></i>
                    <i class="icon_new icon3"><span>环保用材，绿色施工</span></i>
                </span>
            </p>
            <p class="provider_resource">
                <span>
                    <i class="icon_new designer"></i>
					<span>实景作品：</span>19个
                </span>
                <span>
                    <i class="icon_new operator"></i>
					<span>直播工地：</span>1个
                </span>
            </p>
            <p class="provider_address">
			    <i class="icon_new address"></i><?= $info['address']; ?>
            </p>
            <p class="provider_operate">
                <input type="button" value="免费为我做设计" />
                <input type="button" value="免费为我出报价" />
				<input type="button" value="免费预约看工地" />
            </p>
        </div>
        <div class="item_part right">
            <p>业主评分<br /><strong>4.9</strong></p>
        </div>
    </li>
    <?php } } ?>
</ul>
<div class="provider_advert">
    <div class="provider_advert_form">
        <div class="title_box">
            <p class="title">免费获取3套方案</p>
            <p class="subtitle">优质装修公司免费出方案，预算省40%</p></div>
        <div class="apply_form">
            <input name="apply_type" type="hidden" value="8" />
            <input name="name" type="text" placeholder="您的姓名" />
            <input name="phone" type="text" placeholder="手机号码" />
            <div class="select-group clearfix js-region-select-group">
                <select class="js-province" name="province" id="province">
                    <option value="">省/市</option></select>
                <select class="js-city" name="city" id="city">
                    <option value="">市/地区</option></select>
            </div>
            <input name="apply" type="button" value="立即预约" /></div>
    </div>
    <div class="provider_advert_free">
        <ul>
            <li style="background-position: 0 -638px;">
                <a href="http://www.tugou.com/free/yanfang/">
                    <p class="title">免费上门验房</p>
                    <p class="content">资深验房专家上门验房
                        <br>专业仪器检测房屋质量</p></a>
            </li>
            <li style="background-position: -230px -638px;">
                <a href="http://www.tugou.com/free/sheji/">
                    <p class="title">免费3套设计方案</p>
                    <p class="content">3套设计方案比较
                        <br>合理规划空间</p></a>
            </li>
            <li style="background-position: -460px -638px;">
                <a href="http://www.tugou.com/free/sheji/">
                    <p class="title">免费3份报价清单</p>
                    <p class="content">3份报价清单比较
                        <br>避免价格猫腻</p></a>
            </li>
        </ul>
    </div>
</div>
</div>
<div class="pop_mask hide">
<div class="pop_box">
    <a class="pop_close">&times;</a>
    <div class="title_box">
        <p class="title">免费获取3套方案</p>
        <p class="subtitle">优质装修公司免费出方案，预算省40%</p></div>
    <div class="apply_form">
        <input name="apply_type" type="hidden" value="6" />
        <input name="apply_provider" type="hidden" value="" />
        <input name="name" type="text" placeholder="您的姓名" />
        <input name="phone" type="text" placeholder="手机号码" />
        <div class="select-group clearfix js-region-select-group">
            <select class="js-province" name="province" id="province">
                <option value="">省/市</option></select>
            <select class="js-city" name="city" id="city">
                <option value="">市/地区</option></select>
        </div>
        <input name="apply" type="button" value="免费预约" />
        <p>全国服务热线400-8617-000
            <br />为了方便我们联系，请留下您的联系方式，我们将严格保密</p></div>
</div>
</div>
<!--底部-->
<script type="text/javascript">$(function() {
    fixItem(1180, $('.provider_advert'), $('.provider_list'), 5, 115);

    bindingControlPopMask($('.pop_mask'), $('.pop_box'));

    triggerPopForm($('.provider_operate input[type="button"]'));

    var advertFormSelect = new SelectController(city_list, $('.provider_advert .apply_form'));
    var popFormSelect = new SelectController(city_list, $('.pop_mask .apply_form'));
    advertFormSelect.renderSelectOptions();
    advertFormSelect.bindingSelected('bottom');
    advertFormSelect.bindingCloseOptionsBox();
    popFormSelect.renderSelectOptions();
    popFormSelect.bindingSelected('bottom');
    popFormSelect.bindingCloseOptionsBox();
});

function triggerPopForm(btn) {
    $(btn).on('click',
    function() {
        var index = $(this).index();
        setProvider($(this), $('.pop_mask .pop_box'));
        showPopMask($('.pop_mask'));
        changeTitleOfPop(index, $('.pop_mask .pop_box .title_box'));
    });

    var changeTitleOfPop = function(index, container) {
        var contentOpts = [];
        var $apply_type = $('.pop_mask .apply_form').find("input[name='apply_type']");
        switch (index) {
        case 0:
            contentOpts = ['免费做设计', '免费获取3份设计选取满意设计稿'];
            $apply_type.val('9');
            break;
        case 1:
            contentOpts = ['免费获取报价', '免费获取3份报价 避免价格猫腻'];
            $apply_type.val('10');
            break;
        case 2:
            contentOpts = ['免费预约看工地', '免费预约看工地 108道超国标工艺'];
            $apply_type.val('11');
            break;
        default:
            return;
        }
        $('.title', container).text(contentOpts[0]);
        $('.subtitle', container).text(contentOpts[1]);
    };
    var setProvider = function(btn, container) {
        var providerId = $(btn).parents('.provider_list li').data('providerId');
        $('input[name="apply_provider"]', container).val(providerId);
    };
}

function fixItem(contentWidth, targetContainer, relativeContainer, offsetToTop, offsetToBottom) {
    var viewWidth = $(document.body)[0].clientWidth;
    if (viewWidth < contentWidth) {
        return;
    }
    var targetOffsetRight = (viewWidth - contentWidth) / 2;
    var targetOffsetTop = 0;
    var targetOffsetBottom = 0;
    if (typeof offsetToTop === 'number') {
        targetOffsetTop = offsetToTop;
    }
    if (typeof offsetToBottom === 'number') {
        targetOffsetBottom = offsetToBottom;
    }
    var relativeOffsetTop = $(relativeContainer).offset().top;
    var relativeHeight = $(relativeContainer).height();
    var targetHeight = $(targetContainer).height();
    $(window).scroll(function() {
        if ($(window).scrollTop() + offsetToTop < relativeOffsetTop) {
            $(targetContainer).css({
                position: 'relative',
                right: 0,
                top: 0
            });
        } else if ($(window).scrollTop() + offsetToTop < relativeOffsetTop + relativeHeight - targetHeight) {
            $(targetContainer).css({
                position: 'fixed',
                top: targetOffsetTop,
                right: targetOffsetRight
            });
        } else {
            $(targetContainer).css({
                position: 'relative',
                top: $(targetContainer).parent().height() - targetOffsetBottom - targetHeight,
                right: 0
            });
        }
    });

}
</script>
</body>

</html>
