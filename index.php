<?php 
    require_once('./Controller/Controller.php');


    try
    {
        if(isset($_GET['page']))
        {
            if($_GET['page'] == "players"){
                playersAll();
            }elseif($_GET['page'] == "games"){
                gameAll();
            }elseif($_GET['page'] == "contest"){
                contestAll();
            }else{
                throw new Exception("Cette page n'existe pas !");
                // header('location:404.php');
            }
        }else{
            playersAll();
        };
    }
    catch(Exception $e)
   {
        echo $e->getMessage();
   } 

    


?>