<html>
<?php session_start();?>
<head>

  <meta charset="UTF-8">

  <title>Register</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>
</html>


<body style="background-color:#C8C8C8">

  <h1> CARRELLO </h1>
  <?php 

  $prodotto[0]["immagine"]='<img src="images/pc1.jpg"  height="20%">';
  $prodotto[0]["nome"]='PC GAMING N1';



  $prodotto[1]["immagine"]='<img src="images/pc2.jpg"  height="20%">';
  $prodotto[1]["nome"]='PC GAMING N2';


  $prodotto[2]["immagine"]='<img src="images/pc3.jpg"  height="20%">';
  $prodotto[2]["nome"]='PC GAMING N3';


  ?>
  <table border = 1 width="30%">
  <?php for($i=0;$i<count($prodotto);$i++){?>
  <tr>
    <td>
    <?php echo $prodotto[$i]["immagine"]?>
    </td>

    <td>
    <b><p><?php echo $prodotto[$i]["nome"]?><p></b>
    </td>
    <td>
      <?php
       
       echo "Quantita:" . $_SESSION['quantita' . $i];
      ?>
    </td>
    <?php } ?>
  </tr>
  </table>
</body>