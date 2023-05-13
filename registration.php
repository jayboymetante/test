

<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="style.css">
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"  rel="stylesheet"  type='text/css'>
    <link rel="stylesheet" href="common/bootstrap/css/bootstrap.css" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/c75e69fab4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript" src='../files/bower_components/sweetalert/js/sweetalert2.all.min.js'> </script>
<!-- SweetAlert2 -->
<link rel="stylesheet" href='../files/bower_components/sweetalert/css/sweetalert2.min.css' media="screen" />
     <script type="text/javascript" src='../files/bower_components/sweetalert/js/sweetalert2.all.min.js'> </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="landing-page.php">
        <img src="img/Tabogon.png" class="mr-2" alt="" height="30">
        Tabogon  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="registration.php"><i class="fas fa-syringe"></i> Register</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="vaccines.php"><i class="fa-sharp fa-solid fa-prescription-bottle"></i> Vaccine Availability</a>
            </li>
            <!-- <li class="nav-item active">
                <a class="nav-link" href="map.php"><i ><ion-icon name="map-outline" style='color:white'></ion-icon></i></i> Map</a>
            </li> -->
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownEmergency" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <ion-icon name="map-outline" style='color:white'></ion-icon></i></i>Map
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownEmergency">
                    <a class="dropdown-item" href="map.php">Total Vaccine Administered </a>
                    <a class="dropdown-item" href="traffic.php">Traffic</a>
                    <a class="dropdown-item" href="hazard.php">Hazard</a>
                  
                </div>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownEmergency" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class=""></i> Emergency Hotline
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownEmergency">
                    <a class="dropdown-item" href="javascript:;">0969-220-2999</a>
                    <a class="dropdown-item" href="javascript:;">0928-934-7148</a>
                    <a class="dropdown-item" href="javascript:;">0928-826-7084</a>
                    <a class="dropdown-item" href="javascript:;">411-0155</a>
                    <a class="dropdown-item" href="javascript:;">255-7960</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown portal-hide">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSignIn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-sign-in-alt"></i> Sign In
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownSignIn">
                        <a class="dropdown-item" href="admin-login.php">Admin</a>
                        <a class="dropdown-item" href="workforce-login.php">Workforce</a>
                        <a class="dropdown-item" href="resident-login.php">Resident</a>
                    </div>
                </li>
        </ul>
    </div>
</nav>
<h3 class="text-center"><i class="fas fa-syringe" style='color:green'></i>VACCINE INFORMATION MANAGEMENT SYSTEM</h3>
<p class="text-center">Online Registration</p>
<div class="card">
    <div class="container">
            <form action="" method="POST" autocomplete="">
          
                <div class="form-group">
                    <label class="label" for="exampleInputFirstName">First Name</label>
                    <input class="form-control" type="text" name="first_name" placeholder="First Name/Pangalan" required value="">
                </div>
                <div class="form-group">
                    <label class="label" for="exampleInputMiddleName"> Full Middle Name</label>
                    <span class="tip-info">Please avoid Middle Initial for inconsistencies</span>
                    <span class="tip-info">Leave it blank if no middle name</span>
                    <input class="form-control" type="text" name="middle_name" placeholder="Middle Name/Gitnang Pangalan" required value="">
                </div>
                
                <div class="form-group">
                    <label class="label" for="exampleInputLastName">Last Name</label>
                    <input class="form-control" type="text" name="last_name" placeholder="Last Name/Apelyido" required value="">
                </div>
               
                <div class="form-group">
                 <label class="label" for="exampleInputGender">Gender</label>
                 <select class="form-control" required name="gender">
                    <option selected>Gender/Kasarian</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                 </select>
                </div>
                <div class="form-group">
                    <label class="label" for="exampleInBirthday">Date of Birth</label>
                    <input class="form-control" id="date" type="date" name="birth_date" required value="">
                </div>
                <div class="form-group">
                    <label class="label" for="exampleInputAge">Age</label>
                    <input class="form-control" type="number" id="age" name="age" placeholder="Age/Edad" required value="" readonly="readonly">
                </div>
                <div class="form-group">
                    <label class="label" for="exampleInputCitizenship">Citizenship</label>
                    <input class="form-control" type="text" name="citizenship" placeholder="citizenship/Pagkamamamayan" required value="">
                </div>
                <div class="form-group">
                 <label class="label" for="exampleInputCivilStatus">Civil Status</label>
                 <select class="form-control" required name="civil_status">
                    <option selected>Civil Status/Katayuang sibil</option>
                    <option value="single">Single</option>
                    <option value="maried">Maried</option>
                    <option value="divorced">Divorced</option>
                 </select>
                </div>
                <div class="form-group">
                    <label class="label" for="exampleInputMobileNumber">Mobile Number</label>
                    <span class="tip-info">eg. 09123456789 - please follow this format</span>
                    <input class="form-control" type="number" name="mobile_number" placeholder="Mobile number/telepono" required value="">
                </div>
               
                <div class="form-group">
                    <label class="label" for="exampleInputHeight">Height</label>
                    <input class="form-control" type="text" name="height" placeholder="Height" required value="">
                </div>
                <div class="form-group">
                    <label class="label" for="exampleInputWeight">Weight</label>
                    <input class="form-control" type="text" name="weight" placeholder="Weight" required value="">
                </div>
                <div class="form-group">
                 <label class="label" for="exampleInputComorbidities">Comorbidities</label>
                 <select class="form-control" required name="comorbidities">
                    <option selected>Choose Comorbidities</option>
                    <option value="NONE">NONE</option>
                    <option value="Hypertension">Hypertension</option>
                    <option value="Heart Disease">Heart Disease</option>
                    <option value="Kidney Disease">Kidney Disease</option>
                    <option value="Diabetes mellitus">Diabetes mellitus</option>
                    <option value="Bronchial Asthma">Bronchial Asthma</option>
                    <option value="Immunodeficiency state">Immunodeficiency state</option>
                    <option value="Cancer">Cancer</option>
                 </select>
                </div>
                    <hr>
                   <center><p class="login-credentials" >This Is to Check You Vaccination Status</p></center>
                <div class="form-group">
                    <label class="label" for="exampleInputEmail1">Email Address</label>
                    <span  class="tip-warning">Required</span>
                    <input class="form-control" type="email" name="email" placeholder="Email Address" required value="">
                </div>
                <div class="form-group">
                    <label class="label" for="exampleInputPassword1">Password</label>
                    <span  class="tip-warning">Required</span>
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>
                
                <div class="remove_this_ondupli">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkbox1">
                        <label class="custom-control-label" for="checkbox1">
                            I hereby certify that the above information are true and correct to the best of my knowledge. I allow the Tabogon Vaccination
                            Operation Center to collect and process my Personal Information and Sensitive Personal Information for the vaccination profiling purposes.
                            The information herein shall be treated as confidential in compliance with the
                            <a href="https://eccinternational.com/" target="_blank">
                                Data Privacy Act of 2012.</a>
                        </label>
                    </div>
                    <hr>
                </div>
                    <input class="mt-3 btn btn-primary d-flex ml-auto mr-auto" id="submit" type="submit"  onclick="sweet()" name="signup" value="Submit">
            </form>
          
    </div>
</div>
<div class="bg-success p-3 foooter">
    <div class="text-center text-white">
        <small>
            Copyright © 2022 <a href="#" class="text-white" target="_blank">Jay Boy Metante</a>
            <br>
            All Rights Reserved
        </small>
    </div>
</div>



<script >

  /* $("#submit").click(function(){
var dob = document.getElementById("date").value;
var year = Number(dob.substr(0, 4));
var month = Number(dob.substr(4, 2)) - 1;
var day = Number(dob.substr(6, 2));
var today = new Date();
var age = today.getFullYear() - year;
if (today.getMonth() < month || (today.getMonth() == month && today.getDate() < day)) {
  age--;
}
console.log(age);
// var newage = document.getElementById("age1").value;
document.getElementById("age1").setAttribute('value',age);

});*/

$(document).on('change', '#date', function() {
var birthdate = $(this).val();
calculate(birthdate);
});
   
function calculate(birthdate) {
  var start = new Date(birthdate);
  var end       = new Date();
  var age_year  = Math.floor((end - start)/31536000000);
  var age_month = Math.floor(((end - start)% 31536000000)/2628000000);
  var age_day   = Math.floor((((end - start)% 31536000000) % 2628000000)/86400000);
  $('#age').val(age_year);
}


</script>
</body>
</html>