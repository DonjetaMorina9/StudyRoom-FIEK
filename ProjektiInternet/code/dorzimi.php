
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dorëzo detyrën</title>
    <link rel="stylesheet" type="text/css" href="../style/stylewelcome.scss">
    <link rel="stylesheet" type="text/css" href="../style/dorzimi.scss">
</head>
<body>

        <nav> 
        <img src="../img/logo.png"  class="logo">
           <ul class="menyt">
             
              <li> <a href="welcome.php"  >Home</span>
              </a> 
              </li>
              <li> <a href="../code/lendet.php" >Lendet </a>  </li>
             <li> <a href="../code/detyrat.php" >Detyrat e mija</a> </li>
             <li> <a href="../code/vlersimi.php" >Vlerësimet </a> </li>
             <li> <a href="../code/dorzimi.php" class="open" >Dorëzo detyrën </a> </li>
             <li> <a href="../code/faq.php" >FAQ.</a> </li>
             <li> <a href="../code/profili.php" >Profili </a> </li>
             <li><a href="../code/logout.php" class="logout">Logout</a></li>
             
              
           </ul>
          
         </nav> 
         <center>
<form action="mailto:donjetam33@gmail.com" method="POST">
         <label for="lenda" >Zgjedh lenden qe deshironi te dorzoni detyren :</label>
               <br>
               <br>

               <select  id="lenda" name="lenda"  >
                   <option value="Programimi në Internet">Programimi në Internet </option>
                   <option value="Bazat">Bazat e të Dhënave</option>
                   <option value="Asd">Algoritmet dhe Strukturat e të Dhënave </option>
                   <option value="Bazat">Sistemi Operativ</option>

               </select>

<br>
<br>
               <label for="lenda" >Zgjedh semstrin:</label>
               <br>
<br>

               <select  id="lenda" name="lenda" >
                   <option value="1"  selected>Semestri Veror </option>
                   <option value="2">Semestri Dimeror</option>
               

</select>
<br>
<br>
<label for="lenda" >Zgjedh detyren :</label>
<br>
<br>

               <select  id="lenda" name="lenda"  >
                   <option value="Detyra1"  selected>Detyra 1 </option>
                   <option value="Detyra2">Detyra 2</option>
                   <option value="Detyra3">Detyra 3</option>
                   
</select>
<br>
<br>
<input type="file" id="myfile" 
            name="myfile" multiple="multiple"  />
          
        <br /><br />
      
        <input type="submit" />
</form>
         </center>
        
    
</body>
</html>