
<!--
-Diwas Lamsal
-18406547
-CSY2028 WEB PROGRAMMING TERM I ASSIGNMENT
-UNIVERSITY OF NORTHAMPTON
******************************************************
* The logout.php file                                *
* Logs out the logged in user                        *
******************************************************
 -->

<!-- The user is redirected to restricted.php file in case they tried to access admin area being a customer -->
<?php
  session_start();
  session_destroy();

  if(isset($_GET['restricted'])){
    header("Location: ./restricted.php");
  }else{
    header("Location: ./");
  }
?>
                                                                                                  
