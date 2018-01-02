<!doctype html>
<html lang="es">
<head>
  <meta character="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximun-scale=1.0
        minumun-scale=1.0">
 <meta http-equiv="X-VA-Compatible" content="e=edge">
 <title>lista</title>
</head>
<body>
 <h1><?=  e($title)?></li>  
  <ul>
    <?php foreach($users as $user):?>
      <li><?php echo e($user)?></li>
    <?php endforeach; ?>
  </lu>



</body>
</html>
