<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Login / Sign up Page </title>
  <link rel="stylesheet" href="http://www.tonysemaan.net/index.html/Login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script>

    //********************* Sign Up **************************
    function validateForm2() {

      var x5 = document.forms["myForm2"]["password"].value;
      var x6 = document.forms["myForm2"]["vpass"].value;
      if(x6 != x5){
        document.getElementById("vpassError").innerHTML="*";
        document.getElementById("passwordError").innerHTML="*";
        document.forms["myForm2"]["vpass"].value ="";
        document.forms["myForm2"]["password"].value ="";
        return false;
      }
      else{
        window.close();
        return true;
      }
    }
  </script>
</head>

<body>
<ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Login')" id="defaultOpen">Login</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'SignUp')">Sign Up</a></li>
</ul>

<div id="Login" class="tabcontent">
  <form name="myForm1" action="http://localhost/HomeWork1/Pages/Login.PHP"  method="post">
    <div id="c">
        <label><b>Username</b></label>
        <input id="log" type="text" placeholder="Enter Username" name="user"
        required> <label id=userError style="color: red"></label>
        <label><b>Password</b></label>
        <input id="log" type="password" placeholder="Enter Password" name="pass" required> <label id=passError style="color: red"></label>
        <button type="submit"value="Submit">Login</button>
      </div>
  </form>
</div>

<div id="SignUp" class="tabcontent">
<div id="c">
  <form name="myForm2" action="http://www.tonysemaan.net/index.html/RegisterationModal.php" onsubmit="return validateForm2()" method="POST">
  <label><b>First Name</b></label><input id="sign" maxlength="15" type="text" name="fname" placeholder="Enter First Name" onkeypress='return event.charCode > 31 && (event.charCode < 48 || event.charCode > 57)'" required> <br><br>
  <label><b>Last Name</b></label> <input id="sign" maxlength="15" type="text" placeholder="Enter Last Name" name="lname" onkeypress='return event.charCode > 31 && (event.charCode < 48 || event.charCode > 57)'" required>  <br><br>
  <label><b>User Name</b></label> <input id="sign" maxlength="15" type="text" placeholder="Enter User Name" name="user" pattern="^[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)?$" required>  <br><br>
  <label><b> e-mail</b></label><input id="sign" type="email" maxlength="40" name="email" placeholder="Enter mailID" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,}" required> <br><br>
  <label><b> Password</b></label><input id="sign" type="password" maxlength="15" placeholder="Enter Password" name="password" required> <label id=passwordError style="color: red"></label> <br><br>
  <label><b> Verify Password</b></label><input id="sign" type="password" maxlength="15" placeholder="Verify Password" name="vpass" required> <label id=vpassError style="color: red"></label> <br><br><br>
  <button type="submit"value="Submit">Sign Up</button>
  </form>
</div>
</div>

<footer class="container-fluid text-center">
  <p>Tony Semaan - Hatem Zreiqi &ensp;<span class="glyphicon glyphicon-copyright-mark"></span>&ensp; 2016</p>
</footer>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>
