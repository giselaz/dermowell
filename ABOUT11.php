<?php
 
require_once 'config/connect.php'; 
include 'functions.php';
include 'inc/header.php';
include 'inc/nav.php';
?>
    <style>
       
        * {
         box-sizing: border-box;
          }


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.menu {
  width: 35%;
}

.content {
  width: 65%;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 8px;
  background-color: plum;
  color: #ffffff;
  font-family: cormorant;
}

.menu li:hover {
  background-color: peachpuff;
}
.column {
  float: left;
  padding: 5px;
  
}

.container {
  position: relative;
}

.center {
  position: absolute;
  top: 42%;
  left: 42%;
  transform: translate(-50%, -50%);
  font-size: 18px;
}

.imazh { 
  width: 100%;
  height: auto;
  opacity: 0.3;
}
    </style>
</head>

<body>
    
            
    </div>
    <div class="container">
        <img class="imazh" src="asstes/img/4d1ef0e3508a40a92b928f298fc3611ed8-02-Skincare-Routine.rsocial.w1200.jpg"  width="1000" height="300">
        <div class="center">
            <div class="column content">
              <h1 style="font-family: nunito sans;">DermoWell</h1>
              <p style="padding-right: 150px; font-family: cormorant;">DermoWell është dyqani online dedikuar lëkurës të bukur dhe të shëndetshme por jo vetëm.

                Krijuar me shumë dashuri , nga njerez te apasionuar ndaj përkujdesjes për lëkurën dhe të bukurës.
                
                Dëshira për të ndarë me të gjithë njerëzit informacionet dhe këshillat se si duhet të kujdeseni për një lëkurë të shëndetshme na bëri që të vendosnim  të krijonim kte faqe por me ëndrra shumë të mëdha për në vazhdimësi.
                
                Ajo që e bën të veçantë DermoWell është se këtu nuk gjeni vetëm produkte koreane kozmetike, që tashmë të gjithë e njohin cilësinë dhe efektivitetin e tyre, por të gjitha markat më të mira të skincare në botë përfshirë linjat franceze lider si La Roche Posay, Vichy, Bioderma etj.
                
                Synimi jonë është që shumë shpejt të vijmë dhe me një farmaci fizike ku aty të finalizojmë qëllimin tonë, te bukurën dhe shëndetin !</p></div>
        <div class="clearfix">
            <div class="column menu">
              <ul>
                <li ><bold>Transport në gjithë Shqipërinë</bold><br> <p>Ju sjellim produktet tuaja të preferuara në çdo qytet që ndodheni</p></li>
                <li><bold>Këshilla për lëkurën tuaj</bold>  <br><p>Ju sygjerojmë produkte të cilat janë posaçërisht për lëkurën tuaj</p></li>
                <li><bold>Pagesa Cash</bold> <br><p> Ju paguani për produktet tuaja në momentin që ju dorëzohet paketa</p></li>
                
              </ul>
            </div>
          </div>
        
    </div>
    <footer>
        <div class="footer-content">
            <img src="img/Asset 42.png"  class="logo" alt="brand-logo">
            <div class="footer-ul-container">
                
            </div>
        </div>
        
   <?php
   include 'inc/footer.php';
   ?>