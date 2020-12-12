<html>
<head>

  <meta charset="UTF-8">

  <title>Register</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body style="background-color:#C8C8C8">


<div class="login-card">
    <b><p style="text-align:center; color:red;">Verrai Reindirizzato alla pagina di Login in 10 secondi
    <?php
        session_start();
        session_destroy();
        header( "refresh:10; url=main.php" );
    ?>
    </p></b>
</div>
</body>
</html>


