<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>展示文章</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
     
     <div>
     	 <?php if(is_array($content)): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$content): $mod = ($i % 2 );++$i;?><p><?php echo ($content["new_ahtor"]); ?></p>
     	 	  <p><?php echo ($content["new_title"]); ?></p>
     	 	  <p><?php echo (htmlspecialchars_decode($content["new_content"])); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
     </div>
</body>
</html>