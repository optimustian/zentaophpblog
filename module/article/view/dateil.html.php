<?php
/**
 * The html template file of index method of index module of zentaoPHP.
 *
 * The author disclaims copyright to this source code.  In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
?>
<?php include dirname(__FILE__) . '/index_header.html.php';?>
<?php 
	foreach ($category as $key => $value) {
		echo "<div class=\"nav-list\" id=\"{$value->parent->ename}\">";
		$link1=helper::createLink('index', 'home', "type={$value->parent->ename}");
		echo "<div class=\"am-panel-hd categorytitle\"><a href=\"$link1\">{$value->parent->cname}</a></div>";
		echo "<ul class=\"am-list\">";
		foreach ($value->child as $key2 => $value2) {
			$link2=helper::createLink('index', 'home', "type=$value2->ename");
			echo "<li><a  href=\"$link2\">{$value2->cname}</a></li>";
		}
		echo "</ul>";
		echo "</div>";
	}
?>
<div class="right">
	  <div class="am-u-md-9">
	  <?php 
	  if($type->ename!='all'){
		echo "<ol class=\"am-breadcrumb\">";
			echo "<li><a href=\"$webRoot\" class=\"am-icon-home\">首页</a></li>";
			if(!empty($type->parentename)){
				$link3=helper::createLink('index', 'home', "type=$type->parentename"); 
				echo "<li><a href=\"$link3\">$type->parentcname</a></li>";
			}
			$link4=helper::createLink('index', 'home', "type=$type->ename"); 
			if(!empty($type->cname)) echo "<li><a href=\"$link4\">$type->cname</a></li>"; 
			echo "<li class=\"am-active\">正文</li>"; 
			echo "</ol>";
	  }
	?>
<div class="article">
<?php echo $article->content; ?>
<?php include dirname(__FILE__) . '/comment.html.php';?>
</div>
		
	  </div>
	  <div class="am-u-md-3">
			<?php include dirname(__FILE__) . '/right_nav.html.php';?>
	  </div>
	  <div style="clear: both;"></div>
	  
  </div>
  
</div>
<?php include dirname(__FILE__) . '/index_foolter.html.php';?>
 <?php include dirname(__FILE__) . '/gotop.html.php';?>
</body>
</html>
