<?php
    session_start();

    if(isset($_POST["update"]))
    {

        if(empty($_POST["fname"]) || empty($_POST["lname"]))
        {
            echo "Required field";
        }
        else
        {
            $fname = $_POST["fname"];
       
            echo "Candidate first name is ". $_POST["fname"];

        echo "<br>";

        $lname = $_POST["lname"];

            echo "Candidate last name is ". $_POST["lname"];
        
        }
    }    

    
?>