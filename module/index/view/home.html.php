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
<?php include '../../common/view/index_header.html.php';?>
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
			if(!empty($type->cname)) echo "<li class=\"am-active\">$type->cname</li>"; 
			echo "</ol>";
	  }
	?>
<div class="article-list">
<?php
	if(empty($article)) echo "<div style=\"text-align:center;\"><a href=\"#\" class=\"am-icon-warning am-text-xxxl am-text-warning\"></a><h3>该分类下没有任何文章！</h3></div>";
	foreach ($article as $key => $value) {
		$link4=helper::createLink('article', 'dateil', "id=$value->id");
		echo "<section class=\"am-panel am-panel-danger\">";
		echo "<header class=\"am-panel-hd\">";
		echo "<h3 class=\"am-panel-title\"><a href=\"{$link4}\">{$value->title}</a></h3>";
		echo "</header>";
		echo "<div class=\"am-panel-bd article-desc am-cf\">";
		$img= helper::getImgs($value->content,0);
		if(!empty($img)){
			echo "<div class=\"am-align-right\">";
			echo "<img src=\"{$img}?imageMogr2/thumbnail/!30p\" style=\"width:100px;height:100px;\">";
			echo "</div>";
		}
		echo helper::cutstr_html($value->content,250);
		echo "</div>";
		echo "<footer class=\"am-panel-footer\">";
		echo "<span><i class=\"am-icon-calendar\"></i>{$value->createdate}</span>";
		echo "<span><i class=\"am-icon-map-marker\"></i>{$value->typename}</span>";
		echo "<span><i class=\"am-icon-eye\"></i>{$value->view}</span>";
		echo "<a href=\"{$link4}\"><span class=\"am-fr am-text-danger\"><i class=\"am-icon-book\"></i>阅读全文>></span></a>";
		echo "</footer>";
		echo "</section>";
	}
?>			
	<ul class="am-pagination am-pagination-centered">
		<li><a href="<?php echo helper::createLink('index', 'home', "type=$type->ename");?>"><i class="am-icon-fast-backward am-text-success"></i></a></li>
		<li><a href="<?php $page=$pager->pageID-1; echo helper::createLink('index', 'home', "type=$type->ename&pageID=$page");?>"><i class="am-icon-backward am-text-success"></i></a></li>
		<span class="am-text-danger"><?php echo $pager->pageID.'/'.$pager->pageTotal; ?>页</span>
		<li><a href="<?php $page=$pager->pageID+1; echo helper::createLink('index', 'home', "type=$type->ename&pageID=$page");?>"><i class="am-icon-forward am-text-success"></i></a></li>
		<li><a href="<?php echo helper::createLink('index', 'home', "type=$type->ename&pageID=$pager->pageTotal");?>"><i class="am-icon-fast-forward am-text-success"></i></a></li>
	</ul>
</div>
		
	  </div>
	  <div class="am-u-md-3">
	  <?php include '../../common/view/right_nav.html.php';?>
	  </div>
	  <div style="clear: both;"></div>
	  
  </div>
  
</div>
<?php include '../../common/view/index_foolter.html.php';?>
<?php include '../../common/view/gotop.html.php';?>
</body>
<?php include '../../common/view/index_foolterjs.html.php';?>
</html>
