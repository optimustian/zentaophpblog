<div class="left">
	<header>
		<div class="am-center">
        	<div class="face-img">
            <img src="<?php echo $webRoot.'theme/image/logo.jpg' ?>">
            </div>
            <div class="face-name">山顶洞洞人</div>
        </div>
	</header>

	<div class="list-group am-center">
	  <div class="list-group-item"><a href="<?php echo $webRoot; ?>" class="nav-item">首页</a></div>
		<?php 
			foreach ($category as $key => $value) {
			 echo "<div class=\"list-group-item categorychild\" data-child=\"{$value->parent->ename}\">";
			 echo "<a class=\"nav-item\">{$value->parent->cname}</a></div>";
			}
		?>
		<div class="list-group-item"><a class="nav-item">关于</a></div>
	</div>
  </div>
