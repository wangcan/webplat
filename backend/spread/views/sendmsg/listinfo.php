<?php

use yii\helpers\Html;
use yii\helpers\Url;

$menus = $this->context->menuInfos;
print_r($menus);exit();
$sendMenu = $menus['spread_decoration_sendmsg_send'];
$sendInfos = [
	'dispatch-owner' => [
		'name' => '通知业主分配的装修公司',
	],
	'dispatch-merchant' => [
		'name' => '通知商及时查看分配的业主信息',
	],
];

?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                        <tr>
                            <th>短信类型</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sendInfos as $key => $info) { ?>
                        <tr>
						    <td><?= $info['name']; ?></td>
					    	<td><?= $info['name']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
