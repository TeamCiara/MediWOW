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
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/w3.css">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        
        <!-- Logo -->
        <link rel="icon" href="/images/ICON.ico">
        
	</head>
    
	<body>
        
        
        <div id="wrapper" class="">
            
            <!-- Intro -->
            <div id="intro" class="main container-fluid text-center bg-1">
                <section>
                <!-- Home Button -->
                <div class="text-right">
                    <a id="login" href="login.php" class="btn btn-lg btn-danger">Login</a>
                </div>
                    <br/><br/><br/>
                    <img class="img-responsive" src="images/mediwow.png" />
                        <small class="text-muted"><i>Insert tag line here...</i></small>
                        <br/><br/>
                       <a href="#one" class="btn btn-default btn-lg btn-danger">Start</a>
                </section>
            </div>
            
            <!-- Page One -->
			<div id="one" class="main container-fluid bg-2">
               <section> 
                <!-- Home Button -->
                <div class="text-right">
                    <a id="home" href="#intro" class="btn btn-lg"><span class="glyphicon glyphicon-home"></span> Home </a>
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
                    <ul id="symptoms_list">
                    </ul>
                    
                    
                    <!-- Add Symptoms Text Field -->
                    <br/>
                    <input type="text" id="symptomText" name="addSymptoms" value="" placeholder="Add symptoms here..."/> 
                    <!-- Add Symptoms Button -->
                    <input type="button" id="addSymptomButton" class="btn btn-default btn-info" value="Add Symptom"/>
                    
                    <br/><br/>
                    <h3 id="symptomHeader">Symptoms:</h3>
                    <br/><br/><br/>
                    
                    <!-- Added symptoms list -->
                    <ul id="myList">
                      <li>Coffee</li>
                      <li>Tea</li>
                    </ul>
                    <p id="symptomList"></p>
                    
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
                    <a id="home" href="#intro" class="btn btn-lg"><span class="glyphicon glyphicon-home"></span> Home </a>
                </div>

                <h1 id="section1header" class="">You have...</h1>
                <br />
                <ul>
                    <li>Diarrhea</lis>
                </ul>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type= "text/javascript" src="assets/js/main.js">
        </script>
        
	</body>
</html>