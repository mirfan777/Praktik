<!-- requirement -->
<?php 
    require '../../env.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resource/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <div class="text-3xl text-red-900 font-bold flex flex-col justify-center items-center  h-56">
    <h1>IT'S WORKS!</h1>
    <h1><?php echo $_ENV["text"] ?></h1>
  </div>
</body>
</html>
