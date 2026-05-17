<?php
    session_start();
    if(isset($_POST["vote"]))
    {

        if (empty($_POST["cv"]))
        {
                echo "Please select a symbol";
        }
            else if($_POST["cv"] = "Clock")
            {
                    $_SESSION["cv"]=$_POST["cv"];
    
                    header("location: ../View/ThankyouCandidateView.php");
            }

            else if($_POST["cv"] = "Lotus")
            {
                $_SESSION["cv"]=$_POST["cv"];
    
                    header("location: ../View/ThankyouCandidateView.php");
            }

            else if($_POST["cv"] = "Axe")
            {
                $_SESSION["cv"]=$_POST["cv"];
    
                    header("location: ../View/ThankyouCandidateView.php");
            }

            

        }

        else  
        {
                
        }
    
?>