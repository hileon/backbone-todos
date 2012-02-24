<!DOCTYPE html>
<html>
<?php
    $version = 'v' . rand() . rand();
?>
<head>  
  <title>Backbone Demo: Todos</title>
  <!--link href="style.css" media="all" rel="stylesheet" type="text/css"/-->
  <link rel="stylesheet/less" type="text/css" media="all" href="style.less">
  <!--注意你的less样式文件一定要在引入less.js前先引入。-->
  <script src="js/vendor/less-1.2.2.min.js" type="text/javascript"></script>  
</head>
<body>


<div id="container" >
  <a href="#">home</a><br>
  <a href="#app">app</a><br>
  <a href="#app/:item_1">item 1</a><br>
  <div id="loginfo" />
</div>








<!-- app js  -->
  <script src="js/vendor/jquery-1.7.1.js"></script>
  <script data-main="js/main" src="js/require.js"></script>
  <!--script src="localstorage.js?<?php echo $version ?>"></script-->
  <!--script src="todos.js?<?php echo $version ?>"></script-->


</body>
</html>