<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ.</title>
   <link rel="stylesheet" type="text/css" href="../style/stylefaq.scss"> 
    <link rel="stylesheet" type="text/css" href="../style/stylewelcome.scss">
    <link rel="stylesheet" type="text/css" href="../style/dorzimi.scss">
</head>
<body>

<nav> 
        <img src="../img/logo.png"  class="logo">
           <ul class="menyt">
             
              <li> <a href="welcome.php" >Home</span>
              </a> 
              </li>
              <li> <a href="../code/lendet.php" >Lendet </a>  </li>
             <li> <a href="../code/detyrat.php" >Detyrat e mija</a> </li>
             <li> <a href="../code/vlersimi.php" >Vlerësimet </a> </li>
             <li> <a href="../code/dorzimi.php" >Dorëzo detyrën </a> </li>
             <li> <a href="../code/faq.php"  class="open">FAQ.</a> </li>
             <li> <a href="../code/profili.php" >Profili </a> </li>
             <li><a href="../code/logout.php" class="logout">Logout</a></li>
             
              
           </ul>
          
         </nav>  

         <div class="queston" >
             <H1> Ç'është "study room" ?</H1>
             <p>"Study room" është një uebfaqe e krijuar 
                 për menaxhimin e lëndëve në Universitetin e Prishtinës - 
                 Fakultetin e Inxhinieris Elektrike dhe Kompjuterike!</p>
         </div>

         <div class="queston">
             <H1> Pse duhet përdorur "study room" ?</H1>
             <p>Mundëson dorëzimin online të detyrave 
                 dhe kjo është një lehtësi e madhe për studentët dhe profesorët!</p>
         </div>

         <div class="queston">
             <H1> Cili është kushti kryesor për përdorimin e  "study room"?</H1>
             <p>Duke qenë se regjistrimi në faqen tonë bëhet duke shënuar 
                 ID-në e fakultetit, kushti kryesor është të jesh student 
                 në fakultetin tonë, sepse nëse regjistrohesh në faqen tonë 
                 dhe menaxheri i faqe e sheh që nuk je i regjistruar 
                 si student në universitetin tonë atëherë llogaria juaj do të fshihet!</p>
         </div>

         <div class="queston">
             <H1> Si të bëhemi pjesë e universitetit tuaj?</H1>
             <p>Për më shumë informacion në lidhje me universitetin tonë vizito :
                  <a href="https://fiek.uni-pr.edu/" target="_blank"> FIEK! </a></p>
         </div>
<center>

         <div class="container">
        <form action="mailto:donjetam33@gmail.com" method="POST" enctype="text/plain" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <br>
                <br>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
            </div>
            <br>
                <br>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <br>
                <br>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <br>
                <br>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <br>
                <br>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <br>
                <br>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <br>
                <br>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <br>
                <br>
            <div>
                <button type="submit" class="btn" >Send Message!</button>
            </div>
            <div>
                <button type="reset" class="btn" >Reset Message!</button>
            </div>
        </form>
    </div>
    <cener>
    

</body>
</html>