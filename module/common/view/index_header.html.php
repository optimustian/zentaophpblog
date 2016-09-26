<?php
$webRoot = $this->app->getWebRoot();
?>
<!DOCTYPE html>
<html lang='en'>
<head>
 <?php
 if(isset($title)) echo html::title($title);

 echo html::meta('charset', 'utf-8');
 echo html::meta('viewport', 'width=device-width, initial-scale=1.0');

 css::import($webRoot . 'theme/amazeui/css/amazeui.min.css');
 css::import($webRoot . 'theme/css/calendar.css');
 css::import($webRoot . 'theme/css/index.css');
 if(isset($pageCss)) css::internal($pageCss);

 js::import($webRoot . 'theme/js/jquery-1.8.3.min.js',    $config->version);
 js::import($webRoot . 'theme/amazeui/js/amazeui.min.js', $config->version);
 js::exportConfigVars();

 echo html::icon($webRoot . 'favicon.ico');
 ?>
</head>
<body>
<div id='main'>
<?php include dirname(__FILE__) . '/left_nav.html.php';?>