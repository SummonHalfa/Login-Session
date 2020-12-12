<html>
<?php session_start();?>
<head>
    <meta charset="UTF-8">
    <title>Carrello</title>
    <link rel="stylesheet" href="css/shop.css" media="screen" type="text/css" />
    <!-- Caricare le icone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
</head>

<body>

<div class="topnav">
  <a class="left"><i class="fa fa-fw fa-user"></i><b><?php echo $_SESSION['user'];?></b></a>
  <a href="destroy.php" class="right"><b>Logout</b></a>
  <a href="carrello.php" class="right"><b>Carrello</b></a>
</div>

<?php 

$prodotto[0]["immagine"]='<img src="images/pc1.jpg"  height="20%">';
$prodotto[0]["nome"]='PC GAMING N1';



$prodotto[1]["immagine"]='<img src="images/pc2.jpg"  height="20%">';
$prodotto[1]["nome"]='PC GAMING N2';


$prodotto[2]["immagine"]='<img src="images/pc3.jpg"  height="20%">';
$prodotto[2]["nome"]='PC GAMING N3';


?>
<table border = "0" width="30%">
<?php for($i=0;$i<count($prodotto);$i++){?>
  <tr>
    <td>
    <?php echo $prodotto[$i]["immagine"]?>
    </td>

    <td>
    <b><p><?php echo $prodotto[$i]["nome"]?><p></b>
    </td>
    <td>
    <form method = "POST">
      <p><b>Aggiungi al carrello</b></p>

      <input type="number" name="<?php echo "quantita" . $i?>" min="1" max="5">
      <input type="submit">
    </form> 
    </td>
    <?php } ?>
  </tr>
    <?php 
      if(isset($_POST['quantita0'])){
        $_SESSION['quantita0']=$_POST['quantita0'];
      }

      if(isset($_POST['quantita1'])){
        $_SESSION['quantita1']=$_POST['quantita1'];
      }
      if(isset($_POST['quantita2'])){
        $_SESSION['quantita2']=$_POST['quantita2'];
      }
    ?>





</table>

</body>


</html>