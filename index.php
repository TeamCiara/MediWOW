<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Mediwow</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSS Designs -->
		<link rel="stylesheet" href="assets/css/main2.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/chat.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        
        <!-- Logo -->
        <link rel="icon" href="/images/ICON.ico">
       
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script type= "text/javascript" src="assets/js/map.js"></script>
        
	</head>
    
	<body>
        
        <!-- Chat Box -->
    <div id="minimize2">Talk to Doctor</div>
	<div id="maximize">
		<div id="header">Your Name</div>
		<textarea readonly id="bbody" style="color:darkslategrey;">Hello! I'm your doctor! How may I help you?</textarea>
		<textarea rows="1" id="chat" ></textarea>
	</div>
        
        <!-- web page -->
        <div id="wrapper" class="">
            
            <!-- Intro -->
            <div id="intro" class="main container-fluid text-center bg-1">
                <section>
                <!-- Home Button -->
                <div class="text-right">
                    <a id="login" type="button" href="login-home.php" class="btn btn-lg btn-danger">Login</a>
                </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <img id="logo" class="img-responsive" src="images/mediwow.png" />
                        <small class="text-muted"><i>Insert tag line here...</i></small>
                        <br/><br/>
                       <a href="#one" type="button" class="btn btn-default btn-lg btn-danger">Start</a>
                    </div>
                    <div class="col-md-3"></div>
                </section>
            </div>
            
            <!-- Page One -->
			<div id="one" class="main container-fluid bg-2">
               <section> 
                <!-- Home Button -->
                <div class="text-right">
                    <a id="home" type="button" href="#intro" class="btn btn-lg"><span class="glyphicon glyphicon-home"></span> Home </a>
                </div>
                
                <form id="form_symptoms" action="">
                    <div id="check_symptoms">
                        <h1 id="section1header" class="">What do you feel?</h1>
                        <br />
                        <label><input class="symptomsCheckbox" type="checkbox" name="mailId" value="headache" >Headache</label><br/>
                        <label><input class="symptomsCheckbox" type="checkbox" name="mailId" value="cold" >Cold</label><br/>
                        <label><input class="symptomsCheckbox" type="checkbox" name="mailId" value="cough">Cough</label><br/>
                        <label><input class="symptomsCheckbox" type="checkbox" name="mailId" value="runnynose"> Runny Nose</label><br/>
                    </div>

                    <!-- Added symptoms -->
                    <p id="pText"></p>
                    
                    <!-- Add Symptoms Text Field -->
                    <br/>
                    <input type="text" id="symptomText" name="addSymptoms" value="" placeholder="Add symptoms here..."/> 
                    <!-- Add Symptoms Button -->
                    <input type="button" id="addSymptomButton" class="btn btn-default btn-info" value="Add Symptom"/>
                    
                    <br/><br/>
                    <h3 id="symptomHeader">Symptoms:</h3>
                    
                    <!-- Added symptoms list -->
                    <ul id="symptoms_list">
                    </ul>
                    
                    
                    <!-- Submit button -->
                    <div class="text-center" >
                        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Submit</button>
                    </div>
                    
                    <!-- Pop-up message before submission -->
                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content">
                          <div class="w3-container ">
                            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                            <h1>Are you sure?</h1>
                            <div class="col-xs-6 text-center">
                                <a href="#two"><span onclick="document.getElementById('id01').style.display='none'"><button id="yesSubmitSymptomsButton" type="button" class="btn btn-default btn-success">Yes</button></span></a>
                            </div>
                            <div class="col-xs-6 text-center">
                                <a href="#one"><span onclick="document.getElementById('id01').style.display='none'" class="btn btn-default btn-danger">No</span></a>
                            </div>
                          </div>
                        </div>
                    </div>
                </form>
            </section>
         </div>
            
          <!-- Page Two -->
        <div id="two" class="main container-fluid bg-3">
            <section>
                <!-- Home Button -->
                <div class="text-right">
                    <a id="home" type="button" href="#intro" class="btn btn-lg"><span class="glyphicon glyphicon-home"></span> Home </a>
                </div>
                
                <div>
                <h1 id="section1header" class="">You have...</h1>
                <br />
                <ul>
                    <li>Flu</li>
                </ul>
                </div>
            <br/>
                <h1 id="section1header" class="">Please go to the nearest drugstore...</h1>
                <!-- map -->
                <div id="googleMap" style="width:100%;height:400px;"></div>  
            </section>
        </div>

		  <!-- Footer -->
			<footer id="footer" class="container-fluid">
				<div class="inner">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>

		
        
        </div>
        
        <!-- Scripts -->

        <script type= "text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjrh7v3GLliDx_3DWtmEGAOvrWlN6lrJk&callback=myMap"></script>
    <script type= "text/javascript" src="assets/js/main.js"></script> 
        
	</body>
</html>