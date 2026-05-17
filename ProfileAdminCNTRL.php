<?php
    session_start();

    if(isset($_POST["save"]))
    {
        if(empty($_POST["pass"]) || empty($_POST["npass"]))
        {
            echo "All information required";
        }
        
    }

    else
    {

       
    }
?>