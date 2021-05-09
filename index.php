<!DOCTYPE html>
<?php
include 'classes/connect.php';

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>PASCAL</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="extensions/style.css" >
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script type="text/javascript" src="extensions/vanilla/vanilla-tilt.js"></script>
 
        <script>
        var video = document.getElementById("myVideo");
        var btn = document.getElementById("myBtn");

        function myFunction() {
          if (video.paused) {
            video.play();
            btn.innerHTML = "Pause";
          } else {
            video.pause();
            btn.innerHTML = "Play";
          }
        }
        </script>
    </head>
    <body>

        <div class="container  ">
            
            test test test this is another test's a
 

            
            <div class="">
  <h1 style="color: #A0A0A0;font-size:8em;text-shadow:5px 5px 5px rgba(0,0,0,0.2);" class=" align-items-start">SPACIER</h1>
               <p style="color: #A0A0A0;text-align: right;">BY PASCAL REAL</p>
 
            </div>
                          
        
    <div style="width:30rem;height:40rem" class="card">
        <div class="content" >
            <img src="images/View03.jpg" style="object-fit: cover;width: 15rem;height: 15rem;border-radius: 50%"  >
            <h2 style="color: #A0A0A0;font-size: 5.5em;text-shadow:5px 5px 5px rgba(0,0,0,0.2); ">PORTFOLIO</h2>
                       <div style="background:#A0A0A0;width: 100%;box-shadow: 5px 5px 5px rgba(0,0,0,0.1);"  >
                <h3 style="color: #F8F8F8;text-shadow:5px 5px 5px rgba(0,0,0,0.2);">PRODUCTS</h3>
            </div></br>
            <p style="color: #A0A0A0">&nbsp;&nbsp;&nbsp;&nbsp;THIS PART CONTAINS BOTH ARCHITECTURAL DESIGN AND FULL-STACK DEVELOPMENT SECTIONS.</p></br></br>
            <a href="product/index.php">SEE MORE</a>
        </div>
    </div>
    <div style="width:30rem;height:40rem" class="card">
        <div class="content" >
            <img src="images/PascalProfile.jpg" style="object-fit: cover;width: 15rem;height: 15rem;border-radius: 50%"  >
            <h2 style="color: #A0A0A0;font-size: 5.5em;right: 190px;text-shadow:5px 5px 5px rgba(0,0,0,0.2);">ABOUT</h2>
                       <div style="background:#A0A0A0;width: 100%;box-shadow: 5px 5px 5px rgba(0,0,0,0.1);"  >
                <h3 style="color: #F8F8F8;text-shadow:5px 5px 5px rgba(0,0,0,0.2);">PASCAL</h3>
            </div></br>
            <p style="color: #A0A0A0">&nbsp;&nbsp;&nbsp;&nbsp;PASCAL IS A FULL-STACK DEVELOPER WITH 3D ANIMATION AND GRAPHIC DESIGN SKILLS. 
                </p></br></br>
            <a href="about/index.php">SEE MORE</a>
        </div>
    </div>
 
</div>
    
        


        

        
        
    </body>
    <script>
        	VanillaTilt.init(document.querySelectorAll(".card"), {
		max: 15,
		speed: 400,
                                glare:true,
                                "max-glare":0.5,
	});
        
        </script>
</html>
