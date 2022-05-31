 <?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="../style/stylewelcome.scss">

</head>
<body>
<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "<b>Mirësevini në faqen tonë!</b>";
?>
        <nav> 
        <img src="../img/logo.png"  class="logo">
           <ul class="menyt">
             
              <li> <a href="welcome.php"  class="open">Home</span>
              </a> 
              </li>
              <li> <a href="../code/lendet.php" >Lendet </a>  </li>
             <li> <a href="../code/detyrat.php" >Detyrat e mija</a> </li>
             <li> <a href="../code/vlersimi.php" >Vlerësimet </a> </li>
             <li> <a href="../code/dorzimi.php" >Dorëzo detyrën </a> </li>
             <li> <a href="../code/" >FAQ.</a> </li>
             <li> <a href="../code/profili.php" >Profili </a> </li>
             <li><a href="../code/logout.php" class="logout">Logout</a></li>
             
              
           </ul>
          
         </nav> 

<div class="img">
  
 
<button class="buttoni"><a href="../code/ajax.php" >Shiko me shume</a>
        
</button>
</body>
</html>