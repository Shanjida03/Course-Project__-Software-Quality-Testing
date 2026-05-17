<?php
    session_start();
    if(isset($_POST["add"]))
    {
        if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["uname"]) || empty($_POST["pass"]) || empty($_POST["nid"]) || empty($_POST["vision"])|| empty($_POST["edu"])|| empty($_POST["exp"]) || empty($_POST["party"])|| empty($_POST["symbol"]))
        {
            echo "Fields Can't be empty";
        }
        
    }
    
?>