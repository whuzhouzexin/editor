<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>文本编辑器</title>

	<script type="text/javascript" src="/editor/Public/js/jquery-2.0.2.js"></script>
    <script type="text/javascript" src="/editor/Public/ueditor/ueditor.config.js"></script>    
    <script type="text/javascript" src="/editor/Public/ueditor/ueditor.all.min.js"></script>
    <script>
    $(function(){
        var ue = UE.getEditor('container',{
            serverUrl :'<?php echo U('Home/Index/editor');?>'
        });
    })
    </script>
    <style>
    form{
        width: 80%;
       
        margin: 0 auto;
        }
        form input[type="submit"]{
            text-align: center;
            line-height: 40px;
            border: 0px;
            width: 100px;
            height: 40px;
            margin: 0px;
            padding: 0px;
            display: block;
            background: blue;


            }</style>
</head>
<body>
<form action='<?php echo U('Home/Index/deal');?>' method="post" enctype="multipart/form-data">
    <script id="container" name="content" type="text/plain">
       
    </script>

   <label>作者：</label><input type="text" name="author"><br/>
   <br/>
   <label>标题：</label><input type="text" name="title"><br/>
   <br/>
    <input type="submit"  value="提交"  />
</form>

</body>
</html>