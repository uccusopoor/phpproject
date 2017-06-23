<?php session_start();
if(isset($_SESSION["uAcc"]))
{
   
    if($_SESSION["authority"]==1)
    {
        header('Location:logHome1.php');
    }
    else
    {
        header('Location:logHome2.php');
    }

}
else
{
    header('Location:didnotlogHome.php');
}
?>
