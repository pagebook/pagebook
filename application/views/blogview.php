<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
  </head>
  <style media="screen">
  </style>
  <body>
    <h1><?php echo $heading ?></h1>
    <h3>My Todo List</h3>

    <ul>
      <?php foreach ($todo_list as $item=>$key){?>

      <li><?php echo $item."||".$key->name; }?></li>
    </ul>
    <!-- 블로그 클래스의 test함수 호출-->
    <form action="index.php/Blog/test" method="post">
      <input type="hidden" name="ID" value="YAGIMOTTI">
      <input type="submit"  value="OK">
    </form>
  </body>
</html>
