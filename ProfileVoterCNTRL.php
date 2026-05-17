<?php
    session_start();

    if(isset($_POST["save"]))
    {
        if(empty($_POST["pass"]) || empty($_POST["npass"]) || empty($_POST["cpass"]))
        {
            echo "All information required";
        }
        
    }

    else
    {
       
    }
?>