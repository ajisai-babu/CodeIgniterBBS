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
	<div id="comment">
		<form method="post" action="<?php echo base_url('adminlist/reply_update');?>">
			<ul class="reply">
				<li>用户：<input type="text" name="poster" class="input" value="<?=$res['poster'];?>" /></li>
				<li>邮箱：<input type="text" name="mail" class="input" value="<?=$res['mail'];?>"></li>
				<li class="top">留言：<textarea name="comment"><?=$res['comment'];?></textarea></li>
				<li class="top">回复：<textarea name="reply"><?=$res['reply'];?></textarea></li>
				<li class="center">
					<input type="reset" value="重置" class="button" />
					<input type="submit" value="保存" class="button" />
				</li>
			</ul>
			<input type="hidden" name="id" value="<?php echo $this->uri->segment(3);?>">
		</form>
	</div>
</div>
</body>
</html>