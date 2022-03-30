<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<?php
include 'include/head.php';
include 'include/header.php';
?>


<body>



    <section class="contenair">
        <div class="row">
            <div class="col-4">
                <a href="index.php?addhome"><button type="button" class="btn btn-light col-10 ">Home</button></a>
                <?php if (isset($_GET['addhome'])) {if (isset($_SESSION['table'])) {echo include'include/ul.php';}} ?>
    
            </div>

            <div class="col">
                <a href="index.php?addform"><button type="button" class="btn btn-primary ">Ajouter des doneés</button></a>        
                <?php if (isset($_GET['addform'])) {include 'include/form.php';} ?>
            </div>
        </div>
    </section>






<?php


    if(isset($_GET['debug'])){
        var_dump($_SESSION);
    }

    if(isset($_GET['sup'])){
        session_destroy();
    }





    if(isset($_GET['boucle'])){
                $i = 0 ;
        while ($i <= 10) {
            echo "je m'apelle Omar DEROUICH j'ai 23 et je mesure 1,73cm" . "<br>";
            $i++;
        }
    }

    

    if(isset($_GET['fonction'])){
   
        function presentation ( ){  
        foreach ($_SESSION["table"] as $key => $value){
            echo "cette ligne correspend a la clé $key et contient $value <br>" ;
        }
        
        } 

        presentation();
 }


    



 if(isset($_GET['debug'])){
   echo '';

   echo '';

   echo '';
}









 ?>




<?php

    if (isset($_POST["submit"])) {

        if (empty($_POST["firstname"])) {
            echo '<div class="alert alert-secondary text-center " role="alert">Insére ton nom!</div>';
        }

        if (empty($_POST["lastname"])) {
            echo '<div class="alert alert-secondary text-center " role="alert">Insére ton prenom!</div>';
        }

        if (empty($_POST["agee"])) {
            echo '<div class="alert alert-secondary text-center " role="alert">Insére ton age!</div>';
        }

        if (empty($_POST["work"])) {
            echo '<div class="alert alert-secondary text-center " role="alert">Insére ton sexe!</div>';
        }

        if (empty($_POST["size"])) {
            echo '<div class="alert alert-secondary text-center " role="alert">Insére ta taille!</div>';
        } else {
            $_SESSION["table"] = [
                "prenom" => $_POST['firstname'],
                "nom" => $_POST['lastname'],
                "age" => $_POST['agee'],
                "metier" => $_POST['work'],
                "taille" => $_POST['size']

            ];

            echo '<div class="alert alert-success text-center" role="alert">Les données ont bien été sauvegardées</div>';
            
        }
    }

    

    ?>







<?php 'include/footer.php'; ?>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>