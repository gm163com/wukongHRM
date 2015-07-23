<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<title><?php echo C('defaultinfo.name');?> - Powered By 悟空HRM</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content=""/>
		<meta name="author" content="悟空HRM"/>
		<link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/>
		<link rel="stylesheet" href="__PUBLIC__/css/bootstrap.css">
		<link rel="stylesheet" href="__PUBLIC__/css/hrms.css">
		<script src="__PUBLIC__/js/jquery.min.js"></script>
		<script src="__PUBLIC__/js/bootstrap.min.js"></script>
		<script src="__PUBLIC__/js/nongli.js"></script>
		<script src="__PUBLIC__/js/calendar.js"></script>
		<!--[if lt IE 9]>
		<script src="__PUBLIC__/js/html5shiv.min.js"></script>
		<script src="__PUBLIC__/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
<?php echo W('Navigation');?>
<div class="body-right">
	<div class="row-table">
		<div class="row-table-title">绩效考核详情</div>
		<div class="row-table-body form-horizontal">
			<p class="form-title">
				绩效考核详情&nbsp;&nbsp;
				<a href="javascript:history.go(-1);">返回</a>&nbsp;&nbsp;
			</p>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">模板名称</label>
				<div class="col-sm-3"><?php echo ($appraisalmanager["template"]["name"]); ?></div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">考核名称</label>
				<div class="col-sm-3"><?php echo ($appraisalmanager["name"]); ?></div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">类型</label>
				<div class="col-sm-3"><?php echo ($appraisalmanager["template"]["category"]["name"]); ?></div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">状态</label>
				<div class="col-sm-3"><?php echo ($appraisalmanager["status_name"]); ?></div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">创建人</label>
				<div class="col-sm-3"><?php echo ($appraisalmanager["template"]["creator_user_name"]); ?></div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">负责人</label>
				<div class="col-sm-3"><?php echo ($appraisalmanager["executor_user_name"]); ?></div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">启动时间</label>
				<div class="col-sm-3"><?php echo (date('Y-m-d',$appraisalmanager["start_time"])); ?></div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">截止时间</label>
				<div class="col-sm-3"><?php echo (date('Y-m-d',$appraisalmanager["end_time"])); ?></div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">更多说明</label>
				<div class="col-sm-8">
					<pre name="description" class="col-sm-8"style="min-height:150px;"><?php echo ($appraisalmanager["template"]["description"]); ?></pre>
				</div>
			</div>
			<p class="form-title">
				考核对象
			</p>
			<div class="form-group">
				<label for="insurance_type" class="col-sm-2 control-label">考核对象</label>
				<div class="col-sm-9" id="itembox">
					<table class="table table-bordered">
						<tr>
							<td>评分人员</td>
							<td>考核对象</td>
						</tr>
						<tr>
							<td><?php echo ($appraisalmanager["examiner_user_name"]); ?></td>
							<td><?php echo ($appraisalmanager["examinee_user_name"]); ?></td>
						</tr>
					</table>
				</div>
			</div>
			<p class="form-title">
				考核内容
			</p>
			<div class="form-group">
				<label for="insurance_type" class="col-sm-2 control-label">考核详细</label>
				<div class="col-sm-9" id="itembox">
					<table class="table table-bordered">
						<tr>
							<td>名称</td>
							<td>标准分</td>
							<td>评分范围</td>
							<td>评分细则</td>
						</tr>
						<?php if(is_array($appraisalmanager['template']['score'])): $i = 0; $__LIST__ = $appraisalmanager['template']['score'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td><?php echo ($vo["name"]); ?></td>
							<td><?php echo ($vo["standard_score"]); ?></td>
							<td><?php echo ($vo["low_scope"]); ?>&nbsp;至&nbsp;<?php echo ($vo["high_scope"]); ?></td>
							<td><?php echo ($vo["description"]); ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clear"></div>
<div class="modal fade" id="alert" tabindex="-1" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">提示信息</h4>
			</div>
			<div class="modal-body">
			<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
					<?php echo ($vv); ?>
				</div><?php endforeach; endif; endforeach; endif; ?>
			</div>
		</div>
	</div>
</div>
<?php if(!empty($alert)): ?><script type="text/javascript">
	$('#alert').modal('show');
	var alert_n = setInterval('$("#alert").modal("hide")',1000);
	$('#alert').on('hide.bs.modal', function (e) {
		clearInterval(alert_n);
	});
</script><?php endif; ?>
		<!-- <div id="footer">
			<div class="container">
				<p class="text-muted credit">
					悟空HRM © 2013 <a href="http://www.ccds24.com" target="_blank">河南锐骑文化传播有限公司</a>版权所有
				</p>
			</div>
		</div> -->
	</body>
</html>