<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mictli Gatita</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Lato&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="/build/img/favicon.png"/>
    <link rel="stylesheet" href="build/css/app.css">
    
	<link rel="stylesheet" href="/build/css/flexslider.css" type="text/css" media="screen" />


</head>
<body>

    <?php echo $contenido; ?>
     
    
    <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/build/js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="/build/js/jquery.flexslider.js"></script>

  <script>
        $(function(){
            $('.flexslider').flexslider({
                animation: "slide"
            });
        });
    </script>
</body>
</html>