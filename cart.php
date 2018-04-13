<?php require 'inc/head.php';

if (!empty($_SESSION['user']))
{
    session_start();
    switch ($_GET["ajout"])
    {
        case "MM_cookies":
            $_SESSION['M&M cookies']++;
            $_SESSION['article']++;
            header('Location: index.php');
            break;
        case "Pecan_nuts":
            $_SESSION['Pecan nuts']++;
            $_SESSION['article']++;
            header('Location: index.php');
            break;
        case "Chocolate_chips":
            $_SESSION['Chocolate chips']++;
            $_SESSION['article']++;
            header('Location: index.php');
            break;
        case "Chocolate_cookie":
            $_SESSION['Chocolate cookie']++;
            $_SESSION['article']++ ;
            header('Location: index.php');
            break;
    }
}

?>
<section class="cookies container-fluid">
    <div class="row text-center">
     <?php

     if (!empty($_SESSION['user']))
     {
        echo "Vous avez ".$_SESSION['article']." articles dans votre panier "."<br>"."<br>";
	  foreach ( $_SESSION as $key => $value)
	  {
	      if ($key=='user'||$key=='article')
	          {
	              echo "<br>";
	          }else if($value==0)
	          {
	            echo '';
	          }
	         else
	          {
	            print_r($key); echo ' '.''.':'.' '.' ';
                print_r($value);
                echo "<br>";

                   }
	  }
     }else{
         echo "Vous devez vous connecter pour remplir le panier" ;
     }
	
      ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
