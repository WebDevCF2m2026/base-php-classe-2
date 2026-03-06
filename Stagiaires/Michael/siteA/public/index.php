<?php

if(isset($_GET['page'])){

    
    switch($_GET['page']):
        // si elle vaut contact
        case "contact":
            include "../template/form.php";

        
            break;
        default :
            include "../template/404.php";    
        endswitch;

}else{

    // on prend les données de l'accueil
    include "../datas/groupe2.php";
    // on prend l'accueil
    include_once("../template/accueil.php");
}