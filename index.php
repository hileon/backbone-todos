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
  <div id="todoapp-logo" >  
      <a id="to-todoapp" href="#app"></a>  
      <h1>Todos</h1>    
  </div>

  <div id="todoapp" class="app-hide">
    <a id="to-todoapp-logo" href="#logo"></a>
    <div class="title">
      <h1>Todos</h1>
    </div>

    <div class="content">

      <div id="create-todo">
        <input id="new-todo" placeholder="What needs to be done?" type="text" />
        <span class="ui-tooltip-top" style="display:none;">Press Enter to save this task</span>
      </div>

      <div id="todos">
        <ul id="todo-list"></ul>
      </div>

      <div id="todo-stats"></div>

    </div>

  </div>
</div>







<!-- Templates 模板放在app js前面是因为,这些js不会被浏览器执行, 应该不会阻塞太多的时间. 而且app js里可能有多个script要执行, 这时候会阻塞浏览器的. -->
  <script type="text/template" id="item-template">
    <div class="todo <%= done ? 'done' : '' %>">
      <div class="display">
        <input class="check" type="checkbox" <%= done ? 'checked="checked"' : '' %> />
        <div class="todo-text"></div>
        <span class="todo-destroy"></span>
      </div>
      <div class="edit">
        <input class="todo-input" type="text" value="" />
      </div>
    </div>
  </script>

  <script type="text/template" id="stats-template">
    <% if (total) { %>
      <span class="todo-count">
        <span class="number"><%= remaining %></span>
        <span class="word"><%= remaining == 1 ? 'item' : 'items' %></span> left.
      </span>
    <% } %>
    <% if (done) { %>
      <span class="todo-clear">
        <a href="#">
          Clear <span class="number-done"><%= done %></span>
          completed <span class="word-done"><%= done == 1 ? 'item' : 'items' %></span>
        </a>
      </span>
    <% } %>
  </script>






<!-- app js  -->
  <script src="js/vendor/jquery-1.7.1.js"></script>
  <script data-main="js/main" src="js/require.js"></script>
  <!--script src="localstorage.js?<?php echo $version ?>"></script-->
  <!--script src="todos.js?<?php echo $version ?>"></script-->


</body>
</html>