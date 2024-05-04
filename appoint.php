<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handyman Services | Appointment</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500&family=Poppins:ital,wght@0,400;0,500;1,400;1,500&family=Roboto:ital,wght@1,700&family=Rowdies&family=Ubuntu:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2e6c203cf8.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js" defer></script> 
    <style>
        /*********************
      NAVIGATION
*********************/
.nav-pane {
    background: transparent;
    backdrop-filter: blur(5px);
    position: fixed;
    width: 100%;
    height: 65px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    top: 0px;
    scroll-behavior: smooth;
    z-index: 10;
  }
  
  .nav-pane a{
    display: flex;
    text-decoration: none;
    background: transparent;
    color: white;
    text-transform: uppercase;
    font-size: 0.9em;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    padding: 10px 20px;
    text-align: center;
    transition: .2s;
  }
  
  .nav-pane #section-2:hover, #section-3:hover, #section-4:hover, #section-5:hover, #section-6:hover, #section-2:focus, #section-3:focus, #section-4:focus, #section-5:focus, #section-6:focus{
    background: linear-gradient(to top, #c2baa6, transparent, transparent, transparent, transparent) transparent;
    color: rgb(218, 146, 53);
    border-radius: 5px;
    
  }
  
  .nav-pane #section-2:active, #section-3:active, #section-4:active, #section-5:active, #section-6:active {
    color: #fff;
    background: transparent;
  }
  
  .to-top{
    background-color: #ece8e1;
    position: fixed;
    bottom: 20px;
    right: 32px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    text-decoration: none;
    pointer-events: none;
    opacity: 0;
    transition: all .3s;
    z-index: 99;
  }
  
  .to-top.active{
    bottom: 20px;
    pointer-events: auto;
    opacity: 1;
  }
  
  .to-top:hover {
    background-color: #dad6ce;
  }

  /*********************
        FOOTER
*********************/
footer{
    background-color: rgb(218, 146, 53); /*rgb(17, 17, 17);*/
    height: 334px;
  }
  
  .footer-container1{
    margin-top: 200px;
  }
  
  .flex-container{
    text-align: center;
    padding-top: 50px;
  }
  
  .footer-content{
    text-align: center;
    margin-top: 50px;
    padding-left: 300px;
    padding-right: 300px;
  }
  
  .footer-context {
    margin-top: 15px;
  }
  
  #logo{
    width: 70px;
    margin-top: -10px;
    margin-right: 50px;
  }
  
  #logo2{
    width: 70px;
  
  }
  
  #logo1{
    width: 50px;
  }
  
  #facebook, #insta, #twitter {
    width: 30px;
  }
  
  #facebook:hover, #insta:hover, #twitter:hover, #logo:hover{
    cursor: pointer;
  }
  
  footer a{
    text-decoration: none;
    color: black;
  }
  
  footer a:hover{
    text-decoration: underline;
  }
  
  #facebook, #twitter {
    margin-right: 50px;
  }


/*******************************************************************************************************

                                            APPOINTMENT PAGE Modified Version

********************************************************************************************************/
body, html {
  margin: 0;
  padding: 0;
  width: 100%;
}

@font-face {
  font-family: bebasNeue;
  src: url(fonts/BebasNeue-Regular.woff);
}

@font-face {
  font-family: rowdies;
  src: url(fonts/Rowdies-Bold.ttf);
}

@font-face {
  font-family: gontserrat;
  src: url(fonts/Gontserrat-Thin.ttf);
}

.blur-bg {
  /* background-image: url('../images/appoint-bg.jpg'); 
  background-size: cover;
  background-position: center; */
  width: 100%;
  position: relative;
}

.blur-bg > img {
  width: 100%;
  height: 100vh;
  overflow: hidden; /* Prevent forms from overflowing */
  filter: blur(3px) grayscale(80%); /* Blur effect and increased grayscale */
}

.forms-container {
  width: 900px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  justify-content: center; /* Center the forms horizontally */
  align-items: center; /* Center the forms vertically */
  border: none;
}

.form-left, .form-right {
  flex: 1;
  padding: 20px;
  background-color: rgba(218, 146, 53, 1);/* Reduced opacity */
  border-radius: 4px;
  text-align: center;
  box-shadow: 0 50px 70px rgba(0, 0, 0, 1);
  width: 900px; /* Limit maximum width of the forms */
  border: none;
  height: 500px;
}

.form-left {
  margin-right: 30px; /* Adjust spacing between forms */
  position: relative; 
}

.logo {
  position: absolute;
  top: 0%;
  left: 5%;
}

.logo > img{
  width: 110px;
}

.vertical-line {
  position: absolute;
  top: 0;
  left: -15%;
  height: 538px;
  border: 1px solid rgb(15, 40, 50);
}

.horizontal-line1 {
  position: absolute;
  top: 150%;
  left: -39%;
  width: 27px;
  border: 1px solid rgb(15, 40, 50);
}

.horizontal-line2 {
  position: absolute;
  top: 200%;
  left: -25%;
  width: 10px;
  border: 1px solid rgb(15, 40, 50);
}

.horizontal-line3 {
  position: absolute;
  top: 210%;
  left: -25%;
  width: 10px;
  border: 1px solid rgb(15, 40, 50);
}

.horizontal-line4 {
  position: absolute;
  top: 220%;
  left: -25%;
  width: 10px;
  border: 1px solid rgb(15, 40, 50);
}

#parallelogram {
  position: absolute;
  top: -0.01%;
  left: 273%;
  width: 300px;
  height: 540px;
  transform: skew(-40deg);
  background: rgb(15, 40, 50);
  z-index: 0;
  opacity: 1;
}

#parallelogram-blur1 {
  position: absolute;
  top: -80%;
  left: 430%;
  width: 300px;
  height: 104vh;
  transform: skew(-40deg);
  background: rgba(15, 40, 50);
  z-index: -1;
  filter: drop-shadow(10px 0 50px rgba(2, 6, 23, 1))
}

.image-container {
  /* Center the image container */
  position: absolute;
  width: 430px;
  height: 500px;
  top: 53.8%;
  left: 74%;
  transform: translate(-50%, -50%);
}

.image-container img {
  width: 400px; /* Set the width of the image to fill its container */
  height: 500px; /* Maintain aspect ratio */
  object-fit: contain;
  /* object-position: 100%; Position the image*/
  filter: drop-shadow(10px 0 0.8px rgba(2, 6, 23, 0.7)) /* Add shadow to png file */
  
}

/* RIGHT FORM */
.form-right {
  flex: 1; /* Set flex to fill available space */
  padding: 20px;
  background-color: rgba(218, 146, 53, 1); /* Reduced opacity */
  border-radius: 10px;
  text-align: center;
  box-shadow: 0 15px 70px rgba(0, 0, 0, 1);
  width: 500px; /* Limit maximum width of the form */
  border: 1px solid #575757;
  height: 450px;
  margin-right: 30px; /* Adjust spacing between forms */
}

.form-right form {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100%;
  margin-top: -40px;
}

.form-right input[type="text"],
.form-right input[type="email"],
.form-right input[type="tel"],
.form-right input[type="date"] {
  border: none; /* Remove the border */
  border-bottom: 1px solid #083C59; /* Add a bottom border */
  outline: none; /* Remove the outline */
  margin-bottom: 10px;
  width: 80%; /* Adjust width of inputs */
  height: 20px;
  background-color: rgba(218, 146, 53, 1);
  color: #000;
  font-weight: bold;
  font-family: 'Century Gothic';
}

/* Change the color of the placeholder text */
.form-right input[type="text"]::placeholder,
.form-right input[type="email"]::placeholder,
.form-right input[type="tel"]::placeholder,
.form-right textarea::placeholder,
.form-right input[type="date"]::placeholder {
  color: #575757; /* Set the desired placeholder text color */
}

.form-right label {
  color: #083C59; /* Set the label color */
  font-weight: bold;
  font-family: 'Century Gothic';
  opacity: 0.7;
  font-size: 0.9em;
}

input[type=date]:invalid::-webkit-datetime-edit {
  color: #083C59;
  opacity: 0.7;
}

#date-label{
  margin-right: 54.1%;
}


.form-right textarea{
  margin-bottom: 10px;
  width: 77.5%; /* Adjust width of inputs */
  border: 1px solid #083C59; /* Add a bottom border */
  background-color: rgba(218, 146, 53, 1);
  height: 130px;
  padding: 10px;
  border-radius: 5px;
}

/* Additional styling for textarea */
.form-right textarea {
  resize: none; /* Disable resizing */
  font-weight: bold;
  font-family: 'Century Gothic';
}

.row-field {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  gap: 20%;
  width: 80%;
}

/*Select Container*/
.select-container {
  width: 250px;
  justify-content: center;
  display: flex;
  gap: 25px;
  flex-direction: column;
  border-radius: 10px;
  margin: 265px 0 0 150px;
  z-index: 2;
}

/* Option Select */

.form-select {
  height: 50px;
  border: none; /* Remove border */
  border-radius: 5px;
  color: #cf882b;
  background-color: rgba(36, 100, 137, 1);
  font-weight: bold;
  font-size: 1.2em;
  font-family: bebasNeue;
  cursor: pointer;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5); /* Add box shadow */ 
  text-align: center;
  letter-spacing: 0.5px;
  z-index: 2;
}

.form-title1{
  position: absolute;
  top: 23%;
  left: 10.8%;
  color: rgba(36, 100, 137, 1);
  font-family: rowdies;
  font-size: 3em;
  text-transform: uppercase;
  z-index: 2;
}

.form-title2{
  color: rgba(36, 100, 137, 1);
  font-family: rowdies;
  font-size: 2em;
  text-transform: uppercase;
}

.subtitle{
  position: absolute;
  top: 37.5%;
  left: 23.6%;
  color: rgba(36, 100, 137, 1);
  font-family: gontserrat;
  text-transform: uppercase;
  font-size: 1.2em;
  z-index: 2;
}

#showRightFormButton {
  width: 40px;
  position: absolute; /* Change to absolute positioning */
  bottom: 55px;
  left: 275px;  
  cursor: pointer;
}

#showRightFormButton:disabled {
  opacity: 0.5; /* Adjust the opacity value as needed */
  position: absolute;
  bottom: 55px;
  left: 275px; 
}

#showLeftFormButton {
  /* position: absolute; */ /* Change to absolute positioning */
  /* bottom: 30px;
  left: 200px;  */ 
}

/* #showLeftFormButton {
  border: none; 
  width: 40px;
  position: absolute; 
  bottom: 20px;
  right: 472px;
  background-color: transparent;
  cursor: pointer;
} */

#btnLogout, #btnSubmit,#showLeftFormButton,#showRightFormButton {
  border: none;
  background: none;
  padding: 0;
  cursor: pointer;
  transition: transform 0.3s ease; /* Add a transition for the button */
}

#btnLogout:hover, #btnSubmit:hover, #showLeftFormButton:hover,#showRightFormButton:hover {
  transform: scale(1.1); /* Enlarge the button on hover */
}

#btnLogout:active, #btnSubmit:active, #showLeftFormButton:active,#showRightFormButton:active  {
  transform: scale(0.9); /* Shrink the button when clicked */
}

#btnSubmit {
  color: #246489;
  border: 1px solid #246489;
  padding: 5px;
  width: 140px;
  height: 35px;
  border-radius: 10px;
  font-family: gontserrat;
  font-weight: bold;
}

#btnSubmit:hover {
  background-color: #246489;
  color: rgb(218, 146, 53);
}

#btnSubmit:active {
  border: 1px solid #246489;
  background-color: transparent;
  color: #246489;
}

#showLeftFormButton{
  cursor: pointer;
}

#btnLogout {
  position: absolute;
  top: 10px;
  right: 40px;
  cursor: pointer;
  color: #246489;
  padding: 5px;
}

.button-container{
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  align-items: center;
  gap: 400px;
  width: 100%;
}

    </style>
</head>
    <!-- Icons -->
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Rubik+Scribble&family=Varela+Round&display=swap');
    </style>
<body>
<div class="blur-bg">
    <img src="images/appoint-bg.jpg" alt="">
</div>
    <div class="forms-container">
        <div class="form-left">
          <span class="logo">
            <span class="vertical-line"></span>
            <span class="horizontal-line1"></span>
            <span class="horizontal-line2"></span>
            <span class="horizontal-line3"></span>
            <span class="horizontal-line4"></span>
            <span id="parallelogram"></span>
            <span id="parallelogram-blur1"></span>
            <span id="parallelogram-blur2"></span>
            <img src="images/company logo.png" alt="">
          </span>
            <h1 class="form-title1">Need a Hand?</h1>
            <h3 class="subtitle">Get a handyman</h3>
            
                <div class="select-container">
                <select id="jobSelect" class="form-select" name="job" required> 
                <option selected disabled>Select Job Category</option>
        <?php
                // Establish a connection to your MySQL database
                try {
                    $pdo = new PDO('mysql:host=localhost;dbname=handyman_db', 'root', '');
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    die("Connection failed: " . $e->getMessage());
                }

                // Retrieve distinct job categories from the database
                $stmt = $pdo->query("SELECT DISTINCT job FROM employees");

                // Check if the query executed successfully
                if ($stmt) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<option value="' . $row['job'] . '">' . $row['job'] . '</option>';
                    }
                } else {
                    echo "Error: " . $pdo->errorInfo()[2]; // PDO error info returns an array
                }
        ?>        
        </select>

        <select id="employeeSelect" class="form-select" name="employee" required>
            <option selected disabled>Select Employee</option>
        </select>
        </div> 

            <br>  <br>
        <div class="image-container">
            <img id="employeePhoto" src="images/plumber 3.png" alt="Employee Image">
        </div>
            
        <!-- Add button to show the right form -->
        <button id="showRightFormButton" type="button"><i class="fa-solid fa-circle-arrow-right fa-3x" style="color: #246489"></i></button> 
        </div>
        <script>
        //Next Button
        var showRightFormButton = document.getElementById("showRightFormButton");

        showRightFormButton.addEventListener("click", function () {
                // Get the selected job and employee
                var selectedJob = document.getElementById("jobSelect").value;
                var selectedEmployee = document.getElementById("employeeSelect").value;

                // Log the selected values to debug
                console.log("Selected job:", selectedJob);
                console.log("Selected employee:", selectedEmployee);

                // Check if both job and employee are selected
                if (selectedJob && selectedEmployee) {
                // Set the selected job and employee in the hidden input fields
                document.getElementById("hiddenJob").value = selectedJob;
                document.getElementById("hiddenEmployee").value = selectedEmployee;

                // Hide the left form
                document.querySelector(".form-left").style.display = "none";
                // Show the right form
                document.querySelector(".form-right").style.display = "block";
            } else {
                // Prompt the user to select both a job and an employee before proceeding
                alert("Please select both a job and an employee before proceeding.");
            }
        });

            // Disable the button initially
            showRightFormButton.disabled = true;

            // Add event listener to the employee dropdown
            document.getElementById("employeeSelect").addEventListener("change", function () {
            // Enable the button if employee is selected
            showRightFormButton.disabled = this.value === '';
        });
        </script>

        <div class="form-right" style="display: none;">
            <h1 class="form-title2">Personal Details</h1>
            <form id="myForm" action="submit.php" method="post">
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="text" name="address" placeholder="Address" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="pnum" placeholder="Phone Number" required>
                <label id="date-label" for="date">Date of Inspection and Service</label>
                <div class="row-field">
                  <input type="date" name="date" required>
                  <input type="text" id="promo" placeholder="Promo Code (If you have one)" name="promo">
                </div>
                <textarea id="needs" name="needs" rows="4" placeholder="Describe your needs" required></textarea>
                <!-- Inside the right form -->
                <input type="hidden" id="hiddenJob" name="job">
                <input type="hidden" id="hiddenEmployee" name="employee">

                <div class="button-container">   
                        <button id="showLeftFormButton" type="button"><i class="fa-solid fa-circle-arrow-left fa-3x" style="color: #246489"></i></button> 
                        <button id="btnSubmit" type="submit">Submit</button>
                      </div>
                    </form>
                <form action="clear.php" method="post">
                    <button id="btnLogout" type="submit"><i class="fa-solid fa-right-from-bracket fa-2xl"></i></button>    
                </form>
        </div>
    </div>


        <script>
            //Back button
            document.getElementById("showLeftFormButton").addEventListener("click", function () {
            // Hide the right form
            document.querySelector(".form-right").style.display = "none";
            // Show the left form
            document.querySelector(".form-left").style.display = "block";
            });
        </script>



    <!-- NAVIGATION BAR SA HULI DAPAT NAKALAGAY AMPOTA -->
    <div class="nav-pane">
        <a id="section-1" href="index.php #home"><img id="logo1" src="images/favicon.png" alt=""></a>
        <a id="section-0" href="devs.php"><img id="logo1" src="images/company logo-white.png" alt=""></a>
        <a id="section-0" href=""></a>
        <a id="section-0" href=""></a>
        <a id="section-0" href=""></a>
        <a id="section-0" href=""></a>
        <a id="section-0" href=""></a>
        <a id="section-0" href=""></a>
        <a id="section-2" href="index.php">Home</a>
        <a id="section-3" href="index.php #about">About</a>
        <a id="section-4" href="services.php">Services</a>
        <a id="section-5" href="handymen.php">Handymen</a>
        <a id="section-6" href="appoint.php">Appoint</a>
    </div>

    <!--FOOTER CONTENT-->
    <footer>
        <div class="footer-container">
            <div class="flex-container">
                <a href="https://www.facebook.com/profile.php?id=100083662747852"><img id="facebook" src="images/facebook.png" alt=""></a>
                <a href="https://www.facebook.com/profile.php?id=100083662747852"><img id="twitter" src="images/twitter.png" alt=""></a>
                <a href="https://www.facebook.com/profile.php?id=100083662747852"><img id="insta" src="images/instagram.png" alt=""></a>
            </div>
            <div class="footer-content">
                <a href="index.php"><img id="logo" src="images/favicon.png" alt=""></a>
                <a href="devs.php"><img id="logo2" src="images/company logo.png" alt=""></a>
                <p class="footer-context">&copy; 2023 Araa Company, Inc. Araa Company, HANDYMAN, and any associated logos are tradmarks, service marks, and/or registered trademarks of Araa Company, Inc.</p>
                <a href="devs.php" class="devs">The Devs</a>
            </div>
        </div>
    </footer>
</body>
</html>
