<?php
    session_start();
    if(isset($_POST["login"]))
    {
        if(empty($_POST["uname"]) || empty($_POST["password"]))
        {
            echo "Username & Password required";
        }
        else
        {
            if($_POST["uname"]=="Candidate" && $_POST["password"]=="123")
            {
                    $_SESSION["uname"]=$_POST["uname"];
                    $_SESSION["password"]=$_POST["password"];
    
                    header("location: ../View/DashboardCandidateView.php");
            }

            else
            {
                echo"Username and password is incorrect";
            }
        }
         
        
    }
    
?>