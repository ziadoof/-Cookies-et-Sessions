<?php require 'inc/head.php';
if(isset($_SESSION['user']))
{
    session_start();
}

?>
<section class="cookies container-fluid">
    <div class="row text-center">
     <?php

    switch ($_GET["ajout"])
	{
	    case "MM_cookies":
	        $_SESSION['M&M cookies']++;
	        header('Location: index.php');
		break;
	    case "Pecan_nuts":
	        $_SESSION['Pecan nuts']++;
	        header('Location: index.php');
		break;
		case "Chocolate_chips":
		    $_SESSION['Chocolate chips']++;
	        header('Location: index.php');
		break;
		case "Chocolate_cookie":
		    $_SESSION['Chocolate cookie']++;
	        header('Location: index.php');
		break;
	}
	echo "Vous avez ces articles dans votre panier "."<br>"."<br>";
	  foreach ( $_SESSION as $key => $value)
	  {
	      if ($key==user)
	          {
	              echo "<br>";
	          }else{
	            print_r($key); echo ' '.''.':'.' '.' ';
                print_r($value);
                echo "<br>";
                   }
	  }
      ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
