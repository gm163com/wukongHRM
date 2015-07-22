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
<script src="__PUBLIC__/js/datepicker/WdatePicker.js" type="text/javascript"></script>
<div class="body-right">
	<div class="row-table">
		<div class="row-table-title">员工档案</div>
		<div class="row-table-body">
			<p class="form-title"><a class="pull-right btn btn-primary btn-xs" href='<?php echo U("hrm/archives/index");?>'>员工档案列表</a>添加员工档案</p>
			<form class="form-horizontal " action="<?php echo U('hrm/archives/add');?>" method="post">
				<div class="form-group">
					<label for="to_name" class="col-sm-2 control-label">姓名</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" id="to_name">
						<input type="hidden" name="to_user_id" id="to_user_id">
					</div>
					<label for="id_num" class="col-sm-2 control-label">证件号码</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="id_num" id="id_num">
					</div>
				</div>
				<div class="form-group">
					<label for="origin" class="col-sm-2 control-label">籍贯</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="origin" id="origin">
					</div>
					<label for="archives_num" class="col-sm-2 control-label">档案编号</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="archives_num" id="archives_num">
					</div>
				</div>
				<div class="form-group">
					<label for="bankcard" class="col-sm-2 control-label">工资卡号</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="bankcard" id="bankcard">
					</div>
					<label for="tbno" class="col-sm-2 control-label">社保号</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" id="tbno" name="tbno">
					</div>
				</div>
				<div class="form-group">
					<label for="old_name" class="col-sm-2 control-label">曾用名</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="old_name" id="old_name">
					</div>
					<label for="sex" class="col-sm-2 control-label">性别</label>
					<div class="col-sm-3">
						<select class="form-control" name="sex" id="sex">
							<option value="1">男</option>
							<option value="2">女</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="birthday" class="col-sm-2 control-label">出生日期</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="birthday" id="birthday" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
					</div>
					<label for="birthplace" class="col-sm-2 control-label">出生地</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="birthplace" id="birthplace">
					</div>
				</div>
				<div class="form-group">
					<label for="nation" class="col-sm-2 control-label">民族</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="nation" id="nation">
					</div>
					<label for="partisan" class="col-sm-2 control-label">政治面貌</label>
					<div class="col-sm-3">
						<select class="form-control" name="partisan" id="partisan">
							<option value="1">群众</option>
							<option value="2">共青团员</option>
							<option value="3">共产党员</option>
							<option value="4">其他党派</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="accounts" class="col-sm-2 control-label">户口</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="accounts" id="accounts">
					</div>
					<label for="accounts_status" class="col-sm-2 control-label">户口性质</label>
					<div class="col-sm-3">
						<select class="form-control" name="accounts_status" id="accounts_status">
							<option value="1">非农</option>
							<option value="2">农业</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="marital_status" class="col-sm-2 control-label">婚姻状况</label>
					<div class="col-sm-3">
						<select class="form-control" name="marital_status" id="marital_status">
							<option value="1">已婚</option>
							<option value="2">未婚</option>
						</select>
					</div>
					<label for="ygsf" class="col-sm-2 control-label">员工身份</label>
					<div class="col-sm-3">
						<select class="form-control" name="ygsf" id="ygsf">
							<option value="1">农民</option>
							<option value="2">工人</option>
							<option value="3">干部</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="nationality" class="col-sm-2 control-label">国籍</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="nationality" id="nationality">
					</div>
					<label for="document_type" class="col-sm-2 control-label">证件类型</label>
					<div class="col-sm-3">
						<select class="form-control" name="document_type" id="document_type">
							<option value="1">身份证</option>
							<option value="2">护照</option>
							<option value="3">驾驶证</option>
							<option value="4">军官证</option>
							<option value="5">毕业证</option>
							<option value="6">技师证</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="health" class="col-sm-2 control-label">健康状况</label>
					<div class="col-sm-3">
						<select class="form-control" name="health" id="health">
							<option value="1">较差</option>
							<option value="2">一般</option>
							<option value="3">良好</option>
						</select>
					</div>
					<label for="height" class="col-sm-2 control-label">身高</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="height" id="height">
					</div>
				</div>
				<div class="form-group">
					<label for="weight" class="col-sm-2 control-label">体重</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="weight" id="weight">
					</div>
					<label for="vision" class="col-sm-2 control-label">视力</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="vision" id="vision">
					</div>
				</div>
				<div class="form-group">
					<label for="education" class="col-sm-2 control-label">最高学历</label>
					<div class="col-sm-3">
						<select class="form-control" name="education" id="education">
							<option value="1">小学</option>
							<option value="2">初中</option>
							<option value="3">高中</option>
							<option value="4">大专</option>
							<option value="5">本科</option>
							<option value="6">硕士</option>
							<option value="7">博士</option>
						</select>
					</div>
					<label for="degree" class="col-sm-2 control-label">最高学位</label>
					<div class="col-sm-3">
						<select class="form-control" name="degree" id="degree">
							<option value="0">--请选择--</option>
							<option value="1">学士</option>
							<option value="2">双学士</option>
							<option value="3">硕士</option>
							<option value="4">博士</option>
							<option value="5">博士后</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="school" class="col-sm-2 control-label">毕业院校</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="school" id="school">
					</div>
					<label for="speciality" class="col-sm-2 control-label">专业</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="speciality" id="speciality">
					</div>
				</div>
				<div class="form-group">
					<label for="job_title" class="col-sm-2 control-label">职称</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="job_title" id="job_title">
					</div>
					<label for="work_date" class="col-sm-2 control-label">参加工作日期</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="work_date" id="work_date" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
					</div>
				</div>
				<div class="form-group">
					<label for="length_work" class="col-sm-2 control-label">工龄</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="length_work" id="length_work">
					</div>
					<label for="feel_length_work" class="col-sm-2 control-label">空闲工龄</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="feel_length_work" id="feel_length_work">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"></label>
					<div class="col-sm-3">
						<input class="btn btn-primary" type="submit" value="保存"/>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" class="btn" value="取消" onclick="javascript:history.go(-1);"/>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="clear"></div>
<script type="text/javascript">
$(function(){
	$('#to_name').click(function(){
		$('#alert').modal({
			show:true,
			remote:'<?php echo U("core/user/getuserrindex");?>'
		});
	});
});
</script>
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