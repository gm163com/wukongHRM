<?php if (!defined('THINK_PATH')) exit();?><div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel"><b>下级员工列表</b></h4>
		</div>
		<div class="modal-body form-horizontal">
			<table class="table table-striped">
				<thead>
					<tr>
						<td>选择</td>
						<td>姓名</td>
						<td>岗位</td>
						<td>类型</td>
						<td>电话</td>
						<td>邮箱</td>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($subUser)): $i = 0; $__LIST__ = $subUser;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td><input type="radio" name="user_id" value="<?php echo ($vo["user_id"]); ?>" /></td>
							<td><?php echo ($vo["name"]); ?></td>
							<td><?php echo ($vo["position_name"]); ?></td>
							<td><?php echo ($vo["type_name"]); ?></td>
							<td><?php echo ($vo["telphone"]); ?></td>
							<td><?php echo ($vo["email"]); ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
			<div class="modal-footer">
				<input type="submit" id="user_submit" class="btn btn-primary" value="确定" />
				<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	/**
	 * 主要执行人，将选择的值传递到上个界面
	 * 父页面通过设置ID： dialog_user_id 和 dialog_user_name 来接收数据
	 *
	 **/
	$('#user_submit').click(function(){
		var item = $("input:radio[name='user_id']:checked").val();
		$("input[name='executor_id']").val(item);
		$("#dialog_user_id").val(item);
		var executor_name = $('input:radio[name="user_id"]:checked').parent().next().html();
		$("input[name='executor_name']").val(executor_name);
		$("#dialog_user_name").val(executor_name);
		$('#alert').modal('hide');
	});
</script>