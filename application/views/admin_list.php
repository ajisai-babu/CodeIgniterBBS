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
		<div id="info">欢迎您：admin <a href="<?php echo base_url('admin/logout'); ?>">退出</a><br/>
		总留言数：<?php echo $num; ?>
		</div>
		<div id="comment">
			<?php foreach($comment as $item): ?>
			<ul class="list">
				<li>作者：<?=$item['poster']?> 邮箱：<?=$item['mail'];?> IP:<?=$item['ip'];?> 
					<span class="right">
						<a href="<?php echo base_url('adminlist/reply_action').'/'.$item['id']?>">回复/修改</a>
						<a href="<?php echo base_url('adminlist/delete_action').'/'.$item['id']?>">删除</a>
					</span>
				</li> 
				<li><?=$item['comment'];?></li>
				<li>
					<span class="right">发表时间：<?=$item['date'];?></span>
					管理员回复：<br/><?=$item['reply'];?>
				</li>
			</ul>
			<?php endforeach; ?>
		</div>
		<div id="footer">
			<?php echo $pagel; ?>
		</div>
	</div>
</body>
</html>