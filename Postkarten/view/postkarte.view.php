<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="../Postkarten/bootstrap-5.3.3-dist/css/bootstrap.css" />
    <!--Schriftarten-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
<!--Schriftart Ubuntu-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../Postkarten/css/postkarten.css">

</head>

<div class="container">
    <header class="row  w-100"> <!--bg-dark wegmachen und individuelle Farbe-->
  <div class="logo"><span>F</span> <span>O</span> <span>R</span> <span id="Y">Y</span><span>O</span> <span>U</span></div> 
  <div class="col-md-12 p-0">     
<nav class="navbar navbar-expand-lg navbar-light "> <!--vertikale Navbar-->
    <ul class="navbar-nav p-3">
      <li class="nav-item ">
        <a href="#home" class="nav-link ml-3 mr-4 ">Home</a>
      </li>  
      <li class="nav-item ">
        <a href="#bestellung" class="nav-link ml-3 mr-4 ">Zitat-Eingabe / Bestellung</a>
      </li>
      <li class="nav-item ">
        <a href="#aboutus" class="nav-link ml-3 mr-4 ">About Us</a>
      </li>
      <li class="nav-item ">
        <a href="#contact" class="nav-link ml-3 mr-4 ">Kontakt</a>
      </li>
    </ul>

</nav>
</div> <!--topic-->
<div class="col-md-12 p-0 slogan">
 
 <p class=" text-lg p-2 spruch"> Gestalten Sie Ihre persönliche Postkarte zum Verschenken</p>
</div>
</header>

<main> <!--Postkarten-->
<div class="container" id="home">
   <div class="row justify-content-md-center">
    <div class="col col-md-12">
        <img class="card-image-top img-fluid img1 postkarte" src="fotos/Postkarte_Blumenwiese_Pauline_Pohl_(finish).png" alt="Postkarte: Blumenwiese">
        <p class="text-left"> 2,00 Euro</p><p class="text-center titel1">Postkarte-Blumenwiese</p> <button class="btn btn-primary btn1 mx-1">kaufen</button>
        
    </div>
    <div class="col col-md-6">
        <img class="img-fluid rounded postkarte" onmmouseover="hervorheben()"onmouseout="hervorheben()" src="fotos/Herz_Pauline_Pohl_(finish).png" alt="Postkarte:Herz">
        <p class="text-left"> 1,50 Euro<p class="text-center p-klein">Postkarte-Kompliment <button class="btn btn-primary btn-klein">kaufen</button></p></p>
    </div>
    <div class="col col-md-6 ">
        <img class="img-fluid rounded postkarte" onmmouseover="hervorheben()"onmouseout="hervorheben()" src="fotos/Postkarte_Entspannung_Pauline_Pohl(finish).png" alt="Postkarte:Entspannung">
        <p class="text-left"> 1,50 Euro<p class="text-center  p-klein">Postkarte-Entspannung <button class="btn btn-primary  btn-klein">kaufen</button></p></p>
    </div>
    <div class="col col-md-6 mt-4">
        <img class="img-fluid rounded postkarte" onmmouseover="hervorheben()"onmouseout="hervorheben()" src="fotos/ShoppingGlück_Pauline_Pohl_(finish).png" alt="Postkarte:Shopping-Glueck">
        <p class="text-left"> 1,50 Euro<p class="text-center  p-klein">Postkarte-Glück <button class="btn btn-primary btn-klein">kaufen</button></p></p>
    </div>
    <div class="col col-md-6 mt-4">
        <img class="img-fluid rounded postkarte" onmmouseover="hervorheben()"onmouseout="hervorheben()" src="fotos/Besties_Pauline_Pohl_(finish).png" alt="Postkarte:Besties">
        <p class="text-left"> 1,50 Euro<p class="text-center  p-klein">Postkarte-Besties <button class="btn btn-primary  btn-klein" >kaufen</button></p></p>
    </div>
    <script>

    
      
      function hervorheben(){
      const postkarten = document.querySelectorAll(".postkarte");
          postkarten.forEach(postkarte =>{
                      postkarte.addEventListener('mouseover',()=>{

         
          if(postkarte)
          postkarte.style.border=' 2px solid rgba(223, 200, 78, 0.4)'; /*alpha-Kanal 0.5 0.8 0.3*/
         
        });
        postkarte.addEventListener('mouseout', () => {
      postkarte.style.border = 'none';
    });
  }); //Ende foreach
        }
        
    </script>

        <form action="./controller/lieblingszitat.php" method= "POST">
    <div class="zitat col col-md-12 text-center form-group" onmouseover="changeColor()" onmouseout="changeColor()"id="bestellung">
    
      <label for="lieblingszitat-area">Lieblingszitat</label>
      <p class="p-2 mt-4 zitat-aufforderung"> Erstellen Sie Ihr Wunschzitat mit einer Postkarte Ihrer Wahl</p>
      <textarea class="form-control" rows="10" col="5" placeholder="Bevor Sie Ihren Lieblingszitat reinschreiben, hinterlegen Sie bitte zuerst Ihre Kontaktdaten." id="lieblingszitat-area" onclick="umranden()" name="zitat" ></textarea>
      <input type="hidden" name="nachrichtID" value="<?php echo isset($_SESSION['nachrichtID']) ? $_SESSION['nachrichtID'] : ''; ?>">
      <button class="btn-lg mt-4  bestellung">bestellen</button>
    
      <script>
            function umranden(){
          const texareaRand=document.getElementById("lieblingszitat-area");
          texareaRand.addEventListener("click", function(){
            this.style.border = "3px solid #612A6F";

          });
        }
        function changeColor(){
          const divColor= document.querySelector(".zitat");
           divColor.addEventListener("mouseover", function(){
            divColor.style.backgroundColor = "#a0c4ff";
           });

           divColor.addEventListener("mouseout",function(){
              divColor.style.backgroundColor =  "#fdffb6";
           });
        }
        

      </script>

    </div>
    </form>
    <a href="#contact" class="zumcontact">Zum Kontakt</a>
    <div class="row mt-5" id="aboutus">
      <div class="col-md-6 ">
     
      <img class="img-fluid team" src="fotos/team.jpg" alt="unternehmensfoto(team)">
     </div>
     <div class="col-md-6  align-items-center">

      <div class="pos-text position-relative  justify-content-md-center mt-4 p-4">
      <h2 class="p-2"> About Us</h2>
      <p>Unser Unternehmen bietet seit 2015 hochwertige und kreative Postkarten an, um sich und anderen eine Freude zu machen.
      Unsere Designs werden von kreativen Köpfen entworfen, die sich von den neuesten Trends und unterschiedlichen Themen inspirieren lassen.</p>
      <p> Wir freuen uns darauf, Ihnen dabei zu helfen, Ihre Botschaft in wunderschönen Postkarten festzuhalten!</p>
    </div>
    </div>
    </div>

    <div class="row contact" onclick="wechselnColor()" onmouseout="wechselnColor()" id="contact">

      <div class="col-md-6">
        <h3 class="p-2"> So erreichen Sie uns:</h3>
        <ul>
          <li><i  class="fas fa-phone p-2 fa-2x"> </i>  <p class="mt-2"> 0800 92 79 2-79</p></li>
          <li><i class="fas fa-map-marker-alt fa-2x"></i> <p  class="mt-2"> Moritz-Seeler-Straße 5 12489 Berlin</p></li>
          <li> <i class="fas fa-clock fa-2x"></i><p>Montag 10:00-17:00 Uhr</p><p>Dienstag 10:00-17:00 Uhr</p> <p>Mittwoch 10:00-17:00 Uhr</p> <p>Donnerstag 10:00-17:00 Uhr</p><p>Freitag 10:00-18:00 Uhr</p><p>Samstag 10:00-13:00 Uhr</p>   </li>
        </ul>       
      </div>

      <script>
           function wechselnColor(){
          const divColor= document.querySelector(".contact");
         // const senden =  document.querySelector(".senden");
           divColor.addEventListener("click", function(){
            this.style.backgroundColor =  "#fdffb6";
         //  senden.style.backgroundColor="#ffbe98";
          
           });

           divColor.addEventListener("mouseout",function(){
            divColor.style.backgroundColor = " #a0c4ff";
          //  senden.style.backgroundColor = "#cff0cc";
           });
        }
      </script>
      <div class="col-md-6">
      

          <form action="./controller/contact.php" method="POST" id="formular" class="mt-5 p-4">
            <div class="row p-4">

              <div class="col-md-6 contactvorname">
                <input type="text" class="form-control p-2 mb-2 mt-2" placeholder="Vorname" name="vn">
              </div>
              <div class="col-md-6 contactnachname">
                <input type="text" class="form-control p-2  mb-2 mt-2" placeholder="Nachname" name="nn">
              </div>

              <div class="col-md-6 contactemail">
                <input type="text" class="form-control p-2  mb-2 mt-3" placeholder="E-Mail" name="mail">
              </div>
              <div class="col-md-6 contactadresse">
                <input type="text" class="form-control p-2  mb-2 mt-3" placeholder="Adresse" name="adresse">
              </div>
              <textarea class="form-control mt-5" rows="5"  placeholder="Nachricht" name="nachricht"></textarea>
              <button class="btn  mb-3 mt-4 senden" onclick="wechselnColor()">senden</button>

            </div>
         
        </form>
      </div>

    </div>

    <div class="row info p-0 mt-5 justify-content-md-center">
      <div class="col-md-12 col-ms-4 bg-secondary p-2 text-center">
        <ul>
          <li class="d-inline-block p-2 mr-5">
            <i class="fas fa-gift icon"><span  class="text-white"> versandkostenfrei ab 10 €</span></i> <!-- Geschenk Icon -->


          </li>
          <li class="d-inline-block p-4 ml-4 mr-5"><i class="fas fa-truck icon"> <span  class="text-white">schnelle Lieferung von 2 bis 3 Werktage</span></i> <!-- Lieferwagen Icon --></li>
          <li class="d-inline-block p-4 mr-5"><i class="far fa-square icon"><b><span  class="text-white"> 14 Tage Rückgaberecht</span></b></i> <!-- Rechteck Icon --></li>
          <li class="d-inline-block p-4 mr-5"><i class="far fa-smile "></i><b> <span  class="text-white">zuverlässiger Kundenservice</span></b></li>
        </ul>
      </div>
    </div>

    <footer class="mt-5">
      <div class="row">
        <div class="col-md-4">
          <ul>
            <li class=" text-white">
              <h4>Hilfe und Kontakt</h4>
            </li>
            <li class=" text-white">Zahlungsmethoden</li>
            <li class=" text-white">Versandinformationen</li>
            <li class=" text-white">Bestellung retournieren</li>
            <li class=" text-white">Sendung verfolgen</li>
            <li class=" text-white">Impressum</li>
          </ul>

        </div>

        <div class="col-md-4">
          <ul>
            <li class=" text-white"><h4>Newsletter</h4></li>
            <li class=" text-white">Sie möchten die neuesten Postkartendesigns wissen?</li>
            <li class=" text-white">Jetzt anmelden!</li>
            <p></p>
           
            <li><input type="text" placeholder="E-Mail-Adresse eingeben" class="form-control mt-2" id="footer-input"/></li>
          </ul>

        </div>
        <div class="col-md-4">
          <ul>
            <li  class="text-center text-white"><h4>Finden Sie uns auf</h4></li>
            <li class="text-center text-white"><i class="fab fa-facebook fa-2x"></i></li>
            <li  class="text-center text-white"><i class="fab fa-instagram fa-2x"></i></li>
            <li  class="text-center text-white"><i class="fab fa-twitter fa-2x"></i></li>
          </ul>
        </div>
      </div>
    </footer>





   </div> 

</div>
</main>
</div>

    
</body>
</html>