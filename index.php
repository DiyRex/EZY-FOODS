<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./styles/homepage.css">
    <link rel="stylesheet" href="./components/navbar.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
</head>
<body>
    <?php
    include './components/navbar.php';
    ?>
    <button class="btn" id="mybutton">scroll</button>
    <div class="red" id="red1"></div>
    <div class="blue" id="blue1"></div>
    <div class="green" id="green1"></div>

    <script>
        $("#mybutton").click(function() {
                $('html, body').animate({
                    scrollTop: $("#green1").offset().top
                }, 1000);
            });
    </script>
</body>
</html>