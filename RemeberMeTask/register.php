<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">




<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

</style>
</head>
<body>

<form name = "myForm" action="registerInsrt.php" method = "post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input  placeholder="Enter Email" name="Email" id="email" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" >

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" >
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" value = "Submit"  onclick="validateForm(document.form1.text1)">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="loginForm.php">Sign in</a>.</p>
  </div>
</form>


<script>
function validateForm(mail) {
  if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(myForm.email.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
  }
}
</script>  




      // Form validation code will come here.
      // function validate() {



      //   var emailID = document.myForm.EMail.value;
      //    atpos = emailID.indexOf("@");
      //    dotpos = emailID.lastIndexOf(".");
         
      //    if (atpos < 1 || ( dotpos - atpos < 2 )) {
      //       alert("Please enter correct email ")
      //       document.myForm.EMail.focus() ;
      //       return false;
      //    }
      
      //    if( document.myForm.Name.value == "" ) {
      //       alert( "Please provide your name!" );
      //       document.myForm.Name.focus() ;
      //       return false;
      //    }
      //    if( document.myForm.EMail.value == "" ) {
      //       alert( "Please provide your Email!" );
      //       document.myForm.EMail.focus() ;
      //       return false;
      //    }
      //    if( document.myForm.Zip.value == "" || isNaN( document.myForm.Zip.value ) ||
      //       document.myForm.Zip.value.length != 5 ) {
            
      //       alert( "Please provide a zip in the format #####." );
      //       document.myForm.Zip.focus() ;
      //       return false;
      //    }
      //    if( document.myForm.Country.value == "-1" ) {
      //       alert( "Please provide your country!" );
      //       return false;
      //    }
      //    return( true );
      

      //    }
</script>




</body>
</html>
