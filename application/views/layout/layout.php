<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">     
     <link rel="stylesheet" href="../application/public/css/style.css">
      <link rel="stylesheet" href="../application/public/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title><?=$title; ?></title>
</head>
<body>
    <?php include("navbar.php"); ?>
    <div class="container">
    <?php echo $content; ?>
    </div>

    <script src = "../application/public/js/jquery.min.js"></script>
    <script src = "../application/public/js/bootstrap.min.js"></script>
    <script src = "../application/public/js/script.js"></script>

</body>
</html>