<!DOCTYPE html>
<?php
include '../classes/connect.php';

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>PASCAL</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../extensions/timeline_style.css" >
        <link rel="stylesheet" href="../extensions/style.css" >

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <script type="text/javascript" src="../extensions/vanilla/vanilla-tilt.js"></script>
 
        <script>
$(function () {
        $("#modalexperience").hide();
        $("#modalsoftware").hide();
        $("#modalsoftware").hide();
});

                    function showModal(url){
        $("#modalexperience").hide();
        $("#modalsoftware").hide();
        $("#modalsoftware").hide();
                            $("#"+url).show();

                    }
                    
                    function modalClosed(modal_id){
                        $("#"+modal_id).hide();
                    }
        
        </script>
    </head>
    <body class="container">
        


        
        <div   class=" container "  >
 
    
            <div class="col-4" style="">
        <h1 style="color:#A0A0A0;font-size:8em;text-shadow: 5px 5px 5px rgba(0,0,0,0.1);" class=" ">P A S C A L</h1>
        <div style="background:#A0A0A0;width: 100%;box-shadow: 5px 5px 5px rgba(0,0,0,0.1);"  >
                <p style="background:#A0A0A0;width: 100%;box-shadow: 5px 5px 5px rgba(0,0,0,0.1);text-align: center;color:#fff;">DETAILS</p>
        </div>
        <div class="justify-content-center "  >
                <div class="card1" style="width: 35rem;height:3rem;margin-top:  4rem;cursor: pointer" onclick="showModal('modalexperience')">
                        <p style="color:#A0A0A0;font-size:2em;">EXPERIENCE</p>
                </div>
<!--                <div class="card1" style="width: 35rem;height:3rem;margin-top:  4rem;cursor: pointer" onclick="showModal('modalsoftware')">
                        <p style="color:#A0A0A0;font-size:2em;">SKILLS</p>
                </div>    -->
            <div class="card1" style="width: 35rem;height:3rem;margin-top:  4rem;cursor: pointer" onclick="showModal('modalsoftware')">
                        <p style="color:#A0A0A0;font-size:2em;">SOFTWARE PROFICIENCY</p>
                </div>
        </div>
        
        
        </br></br>
 
                <p style="color: #A0A0A0;width: 20%;text-shadow: 5px 5px 5px rgba(0,0,0,0.1);cursor: pointer;text-align: left" onclick="location.href = '../index.php'"; >HOME</p>
         
    </div>
            <div class="col-8 justify-content-center" id="modalexperience" style="width:40rem" onclick="modalClosed('modalexperience')">
                <div style="width:80rem;height:60rem" class="card1">
                    <div class="content2" style="">
                        
                        
             

<section class="timeline_area section_padding_130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
 

<h6 style="width: 100%" >WORKING EXPERIENCE</h6>
                    <div class="line"></div>
 
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Timeline Area-->
                <div class="apland-timeline-area">
                    <!-- Single Timeline Content-->
                    <div class="single-timeline-area" style="margin-left: 2rem">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>CURRENT</p>
                        </div>
                        <div class="row" style="margin-left: 2rem">
                            <div class="col-12 col-md-6 col-lg-4" style="width: 50rem">
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                    <div class="" style=""><img src="../images/is_icon.png" style="border-radius: 70px; width: 70px ; height: 70px" /></div>
                                    <div class="timeline-text">
                                        
                                        <h6 style="color: #545454;text-align: right;"><b>IS SOFTWARE</b></h6>
                                        
                                        <p style="color: #696969;text-align: right"><b>WEB-DEVELOPER</b></p>
                                        <p style="color: #CECECE;text-align: right">Full-time</p>
                                        <p style="color: #696969;text-align: right"><b>Bangkok, Thailand</b></p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4" >
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                    <div class="" style=""><img src="../images/nova_icon.png" style="border-radius: 70px; width: 70px ; height: 70px" /></div>
                                    <div class="timeline-text">
                                        <h6 style="color: #545454;text-align: right;"><b>NOVA CONCEPTS</b></h6>
                                        <p style="color: #696969;text-align: right"><b>3D VISUALIZER</b></p>
                                        <p style="color: #CECECE;text-align: right">Remote</p>
                                        <p style="color: #696969;text-align: right"><b>New York, USA</b></p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Single Timeline Content-->
                    <div class="single-timeline-area" style="margin-left: 2rem">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>2019-2020</p>
                        </div>
                        <div class="row" style="margin-left: 2rem">
 
                            <div class="col-12 col-md-6 col-lg-4" >
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                    <div class="" style=""><img src="../images/nova_icon.png" style="border-radius: 70px; width: 70px ; height: 70px" /></div>
                                    <div class="timeline-text">
                                        
                                        <h6 style="color: #545454;text-align: right;"><b>NOVA CONCEPTS</b></h6>
                                        
                                        <p style="color: #696969;text-align: right"><b>3D VISUALIZER</b></p>
                                        <p style="color: #CECECE;text-align: right">Intern</p>
                                        <p style="color: #696969;text-align: right"><b>New York, USA</b></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Timeline Content-->
                    <div class="single-timeline-area" style="margin-left: 2rem">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>2018-2019</p>
                        </div>
                        <div class="row" style="margin-left: 2rem">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                      <div class="" style=""><img src="../images/chapman_icon.png" style="border-radius: 70px; width: 70px ; height: 70px" /></div>
                                    <div class="timeline-text">
                                        
                                        <h6 style="color: #545454;text-align: right;"><b>CHAPMAN TAYLOR</b></h6>
                                        
                                        <p style="color: #696969;text-align: right"><b>ARCHITECT</b></p>
                                        <p style="color: #CECECE;text-align: right">Full-time</p>
                                        <p style="color: #696969;text-align: right"><b>Bangkok, Thailand</b></p>
                                </div>
                            </div>
                             
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                       
                                            
                   </div>
               </div>
            </div>
                <div class="col-8" id="modalsoftware" style="width:40rem" onclick="modalClosed('modalsoftware')">
                <div style="width:80rem;height:60rem" class="card1">
                   <div class="content2" >
 
                       

<section class="timeline_area section_padding_130">
    <div class=" ">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
 
                    <div class="line"></div>
 
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <!-- Timeline Area-->
                <div class="apland-timeline-area">
                    <!-- Single Timeline Content-->
                    <div class="single-timeline-area" style="margin-left: 2rem">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <b>SOFTWARE PROFICIENCY</b>
                        </div>
                        <div class="row" style="margin-left: 2rem">
                            <div class="col-12 col-md-6 col-lg-4" style="width: 50rem">
                                 
                                    <div class="row" style=" ">
                                        <div class=" " style=" ">
                                            <h6 style="color: #545454;text-align: left; "><b style="  ">PROGRAMMING LANGUAGES</b> </h6><br>
                                <p>PHP</p><br>
                                <p>JAVASCRIPT</p><br>
                                <p>SQL</p><br>
                                <p>JQUERY</p><br>
                                <p>HTML</p><br>
                                <p>CSS</p> <br>
 
                            </div>
                        </div>
                                   
                                    
        
                             
                        </div>
                    </div>
                     
 
            </div>
        </div>        
        </div>
          
            
            <div class="col-4">
                <!-- Timeline Area-->
                <div class="apland-timeline-area">
                    <!-- Single Timeline Content-->
                    <div class="single-timeline-area" style="margin-left: 2rem">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
 
                        </div>
                        <div class="row" style="margin-left: 2rem">
                            <div class="col-12 col-md-6 col-lg-4" style="width: 50rem">
                                 
                                    <div class="row" style=" ">
                                        <div class=" " style=" ">
                                            <h6 style="color: #545454;text-align: left; "><b style="  ">3D ANIMATION AND GRAPHIC DESIGN</b> </h6><br>
                                <p>3DS MAX</p><br>
                                <p>LUMION</p><br>
                                <p>PREMIERE PRO</p><br>
                                
                                <p>PHOTOSHOP</p><br>
                                <p>INDESIGN</p><br>
                            </div>
                        </div>
 
                        </div>
                    </div>
 
            </div>
        </div>        
        </div>
            <div class="col-4">
                <!-- Timeline Area-->
                <div class="apland-timeline-area">
                    <!-- Single Timeline Content-->
                    <div class="single-timeline-area" style="margin-left: 2rem">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
 
                        </div>
                        <div class="row" style="margin-left: 2rem">
                            <div class="col-12 col-md-6 col-lg-4" style="width: 50rem">
                                 
                                    <div class="row" style=" ">
                                        <div class=" " style=" ">
                                            <h6 style="color: #545454;text-align: left; "><b style="  ">ARCHITECTURE</b> </h6><br>
                                <p>REVIT</p><br>
                                <p>AUTOCAD</p><br>
                                <p>SKETCHUP</p><br>
                            </div>
                        </div>
 
                        </div>
                    </div>
 
            </div>
        </div>        
        </div>
            
    </div>
    <div class=" ">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
 

 
                    <div class="line"></div>
 
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <!-- Timeline Area-->
                <div class="apland-timeline-area">
                    <!-- Single Timeline Content-->
                    <div class="single-timeline-area" style="margin-left: 2rem">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <b>LANGUAGES</b>
                        </div>
                        <div class="row" style=" ">
                            <div style=" ">
                                <h6 style="color: #545454;text-align: left; "><b style="  ">THAI</b><p style=" "> - Native</p></h6>
                            </div>
                        </div>
                        <div class="row" style=" ">
                                                    <div style="  ">
                                <h6 style="color: #545454;text-align: left; "><b style=" ">ENGLISH</b><p style=" "> - Fluent</p></h6>
                            </div>
                    </div>
                        </div>
                     
 
            </div>
        </div>
            
        </div>
    </div>
</section>
                       
                       
                   </div>
               </div>
            </div>
             
 
 
    

</div>
 
 
    </body>
 
        
    </body>
    <script>
        	VanillaTilt.init(document.querySelectorAll(".card1"), {
		max: 5,
		speed: 400,
                                glare:true,
                                "max-glare":1,
	});
                	VanillaTilt.init(document.querySelectorAll(".card"), {
		max: 5,
		speed: 400,
                                glare:true,
                                "max-glare":1,
	});
        
        </script>
</html>
