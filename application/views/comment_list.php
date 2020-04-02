<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html/;charset=utf-8">
	<title>留言板</title>
	<link rel="stylesheet" href="<?php echo site_url();?>public/css/home.css" />
</head>
<body>
<div id="box">
	<h1>留言板</h1>
	<div class="postbox">
		<form method="post" action="<?php echo base_url('guestbook/add_guestbook');?>">
			<ul class="userbox">
				<li>名称：</li><li class="user_name"><input type="text" name="poster" /></li>
				<li>邮箱：</li><li class="user_email"><input type="text" name="mail" /></li>
				<li class="user_post"><input type="submit" class="post_button" value="发布"></li>
			</ul>
			<textarea name="comment" required="required">在此处留言</textarea>
		</form> 
	</div>
	<div class="comment_info">
		留言数：<?php  echo $num; ?>
		<span class="sort">
			排序方式：<a href="<?php echo base_url('guestbook/index');?>" class="<?php if($this->uri->segment(3) != 'desc') {echo "curr";}?>">正序</a> <a href="<?php echo base_url('guestbook/index');?>/desc" class="<?php if($this->uri->segment(3) == 'desc') {echo "curr";} ?>">倒序</a>
		</span>
	</div>
	<ul class="comments">
		<?php foreach($comment as $item):?>
		<li>
			<p>用户名：<?=$item['poster'];?></p>
			<p><?=$item['comment'];?></p>
			<p style="font-style: oblique;">发表日期：<?=$item['date'];?></p>
			<?php if($item['reply']!==''): ?>
			<ul class="comment_reply">
				<li>
					<p>管理员回复：</p>
					<p>>>>&nbsp;&nbsp;<?=$item['reply'];?></p>
				</li>
			</ul>
			<?php endif; ?>
		</li>
		<?php endforeach; ?>
		<!--  
		<li>
			<p>用户名：测试者02</p>
			<p>这里是留言正文，欢迎来到传智博客。</p>
			<p>发表日期：2000-00-00 00:00</p>
		</li>
		-->
	</ul>
	<div class="comments_footer">
		<?php echo $pagel;?>
	</div>
	<a href="<?php echo base_url('admin/login');?>" style="text-decoration: none;float: right;color: #777;border-bottom: 2px dotted #ddd;">LOG IN</a>
</body>
</html>