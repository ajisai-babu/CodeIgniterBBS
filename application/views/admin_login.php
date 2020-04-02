<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html/;charset=utf-8">
	<title>留言板后台</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>public/css/admin.css" />
</head>
<body>
	<div id="box">
		<h1>留言板后台</h1>
		<div id="loginbox">
			<form method="post" action="<?php echo base_url('admin/login_action');?>">
				<p>用户名：<input type="text" name="username" class="input"/></p>
				<p>密　码：<input type="password" name="password" class="input" /></p>
				<p>验证码：<input name="captcha" type="text" class="input" /></p>
				<p><?php echo $cap;?><br/>单击图片刷新验证码</p>
				<input type="submit" class="button" value="登录" />
			</form>
		</div>
		<a href="<?php echo base_url('guestbook/index');?>" style="text-decoration: none;float: right;color: #777;border-bottom: 2px dotted #ddd; margin-top: 20px;">返回留言板</a>
	</div>
</body>
</html>