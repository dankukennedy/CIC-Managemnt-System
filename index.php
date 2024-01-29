<?php include ('config/app.php');   ?>


<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Community Information Center System </title>
      <link rel="stylesheet" href="flow/css/components.css">
      <link rel="stylesheet" href="flow/css/icons.css">
      <link rel="stylesheet" href="flow/css/responsee.css">
      <link rel="stylesheet" href="flow/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="flow/owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="flow/css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="flow/js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="flow/js/jquery-ui.min.js"></script>    
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
         <nav>
            <div class="line">
               <div class="s-12 l-2">
                  <img class="s-5 l-12 center"src="flow/img/logo.png" width="30" height="10">
               </div>
               <div class="top-nav s-12 l-10 right">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     <li><a href="<?= base_url('index.php')  ;?>">Home</a></li>
                     <li>
                        <a>CIC System</a>
                        <ul>
                            <li><a href="admin/staff/staff_login.php">Login As Staff & Admin</a></li>
                           <li><a href="admin/ad_login.php">Login As Zonal Manager</a></li>
                           <li><a href="login.php">Login As CIC Manager</a></li>
                           
                        </ul>
                     </li>
                     <li>
                        <a>GIFEC</a>
                        <ul>
                           <li><a href="https://gifec.gov.gh/objectives/" target="_blank" >About</a></li>
                           <li><a href="https://gifec.gov.gh/contact/" target="_blank">Location</a></li>
                        </ul>
                     </li>
                     
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <section>
         <!-- CAROUSEL --> 
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">
               <div class="item">
                  <img src="cics/cic1.jpg" alt="">
                  <div class="line">
                     <h2>Stakeholders Meeting</h2>
                  </div>
               </div>
               <div class="item">
                  <img src="cics/cic2.jpg" alt="">
                  <div class="line">
                     <h2>Policy Implimentation</h2>
                  </div>
               </div>
               <div class="item">
                  <img src="cics/cic3.jpg" alt="">
                  <div class="line">
                     <h2>Meeting with Minister for Communication!</h2>
                  </div>
               </div>
            </div>
         </div>
         <!-- FIRST BLOCK -->
        
         <!-- SECOND BLOCK -->
         <div id="second-block">
            <div class="line">
               <div class="margin-bottom">
                  <div class="margin">
                     <article class="s-12 m-12 l-8 center">
                        <h1>Vision</h1>
                        <p>To innovatively manage a Universal Access Fund collaboratively with stakeholders to achieve universal access through the use of ICTs in Ghana. </p>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <!-- GALLERY -->
         <div id="third-block">
            <div class="line">
               <h2>Gallery</h2>
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img class="margin-bottom" src="cics/cic2.jpg">
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img class="margin-bottom" src="cics/cic9.jpg">
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img class="margin-bottom" src="cics/cic10.jpg">
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img class="margin-bottom" src="cics/cic7.jpg">
                  </div>
               </div>
            </div>
         </div>
         <div id="fourth-block">
            <div class="line">
               <div id="owl-demo2" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2>Objectives of GIFEC </h2>
                     The main objectives of the Ghana Investment Fund for Electronic Communications (GIFEC), as approved
by the Communications Act775, are to:
                     <p>• Facilitate the provision of universal access to electronic communication by the unserved and underserved communities
                     </p>
                  </div>
                  <div class="item">
                     <h2>Objectives of GIFEC </h2>
                     <p>• Facilitate the provision of internet point of presence in underserved and unserved communities</p>
                     <p>• Facilitate capacity building programmes and promote ICT inclusion in the unserved and underserved communities</p>
                     </p>
                  </div>
                  <div class="item">
                     <h2>Objectives of GIFEC </h2>
                     <p>• Facilitate the deployment of ICT and equipment to educational, vocational and other training institutions</p>
                     <p>• Develop an effective human resource for the Agency
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- FOOTER -->
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2023, Kennedy Edem Danku @ Dompoase CIC</p>
            </div>
            <div class="s-12 l-6">
               <a class="right" href="https://gifec.gov.gh" target="_blank" >Ghana Investment Fund for Electronic Communcation</a>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="flow/js/responsee.js"></script>
      <script type="text/javascript" src="flow/owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {	  
           $("#owl-demo").owlCarousel({		
           	navigation : true,
           	slideSpeed : 300,
           	paginationSpeed : 400,
           	autoPlay : true,
           	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
        		slideSpeed : 300,
        		autoPlay : true,
        		navigation : true,
        		pagination : true,
        		singleItem:true
        	  });
         });	 
      </script>
   </body>
</html>