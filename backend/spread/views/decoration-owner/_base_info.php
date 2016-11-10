<?php
use yii\helpers\Html;

$model->callback_again = $model->callback_again > 0 ? $model->callback_again : time();
echo date('Y-m-d H:i:s', $model->callback_again);
$tableName = 'activity_user';
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		    <div data-original-title="" class="box-header well">
                <h2>业主报名信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div> 
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th><?= $model->getAttributeLabel('mobile'); ?></th>
					    <th><?= $model->getAttributeLabel('name'); ?></th>
					    <th><?= $model->getAttributeLabel('signup_at'); ?></th>
					    <th><?= $model->getAttributeLabel('signup_city'); ?></th>
					    <th><?= $model->getAttributeLabel('channel'); ?></th>
					    <th><?= $model->getAttributeLabel('signup_num'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td><?= $model->mobile; ?></td>
						<td><input type="text" name="name" value="<?= $model->name; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $model->id; ?>, 'name', this.value);"/></td>
					    <td><?= date('Y-m-d H:i:s', $model->signup_at); ?></td>
					    <td><?= $model->signup_city; ?></td>
					    <td><?= $model->channel; ?></td>
					    <td><?= $model->signup_num; ?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
						<th><?= $model->getAttributeLabel('invalid_status'); ?></th>
					    <th><?= $model->getAttributeLabel('status'); ?></th>
					    <th><?= $model->getAttributeLabel('callback_again'); ?></th>
					    <th><?= $model->getAttributeLabel('keyword'); ?></th>
					    <th><?= $model->getAttributeLabel('keyword_search'); ?></th>
					    <th><?= $model->getAttributeLabel('note'); ?></th>
					    <th><?= $model->getAttributeLabel('message'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td>
    					<?= Html::dropDownList(
    						"invalid_status", 
    						$model->invalid_status, 
    						$model->invalidStatusInfos, 
    						[
    							'prompt' => '全部', 
    							'class' => 'form-control',
								'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'invalid_status', this.value)",
    						]
    					); ?>
                        </td>
					    <td>
    					<?= Html::dropDownList(
    						"status", 
    						$model->status, 
    						$model->statusInfos, 
    						[
    							'prompt' => '全部', 
    							'class' => 'form-control',
								'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'status', this.value)",
    						]
    					); ?>
                        </td>
					    <td>
                        <input type="hidden" id="callback_again_old" value="<?= date('Y-m-d H:i:s', $model->callback_again); ?>" />
						<input class="form-control" type="text" id="callback_again" onblur="changeDate('<?= $tableName; ?>', <?= $model->id; ?>, 'callback_again', this.value)" value="<?= date('Y-m-d H:i:s', $model->callback_again); ?>">
                    <script type="text/javascript">
                        $(function () {
                            $('#callback_again').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
							//$('#callback_again').onchange = function () { alert('ss'); }
                        });
                    </script>
                        </td>
					    <td><?= $model->keyword; ?></td>
					    <td><?= $model->keyword_search; ?></td>
					    <td><?= $model->note; ?></td>
					    <td><?= $model->message; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
