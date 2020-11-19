<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
       <script>  
function validateForm(){  
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("FullName must be filled out");
    return false;
  }
  
  var x = document.forms["myForm"]["email"].value;
  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  
  var x = document.forms["myForm"]["contact"].value;
 
 if(isNaN(x)||x.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false; 
           }
           else if((x.length<1) || (x.length>10))
           {
                alert("enter 10 numbers");
                return false;
           }
           else if (x.charAt(0)!="9")
           {
                alert("it should start with 9 ");
                return false;
           }
  var x = document.forms["myForm"]["address"].value;
  if (x == "") {
    alert("Comments must be filled out");
    return false;
  }
  var password = document.forms["myForm"]["password"].value;
  if((password.length<6) || (password.length>6)){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script> 
    </head>
    <body>
        
           <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>

    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

        <title>Online Cake Shop</title>
        
    </head>
    <body>
        <div class="main_container" id="home">
            <div class="navbar">
                <div class="header">
                <div class="logo">
                    <a href="#">Cake Shop</a>
                    
                </div>
                
                <div class="navbar_items">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Product</a>
    <div class="dropdown-content">
      <a href="#">Cake</a>
      <a href="#">Pestries</a>
      <a href="#">layered cake</a>
      <a href="#">cupcake</a>
      <a href="#">cookies</a>
    </div>
  </li>
                        
                        <li><a href="#contactus">Contact</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Log in</a></li>
                        
                    </ul>
                </div>
                </div>
            </div>
        </div><br><br><br><br><br>

       
        <section class="my-4">
        <div class="contactus" id="contactus">
            <h1 class="title">Create  Account</h1>
            <form name="myForm" action="#" onsubmit="return validateForm()" method="post">
            <form method="post" action="">
                <div class="form_wrapper">
                
                <div class="form_input">
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="form_input">
                    <input type="text" name="email" placeholder="Email">
                </div>
                    <div class="form_input">
                    <input type="text" name="contact" placeholder="Contact">
                </div>
                <div class="form_input">
                    <input type="text" name="address" placeholder="Address">
                </div>
                 <div class="form_input">
                     <input type="text" name="password" placeholder="Password">
                </div>
                <div class="btn">
                   <input type="submit" name="submit" name="submit">  
            </div>
                           <div class="w-50 m-auto"
                <form method="post" action="">
                     <div class="form-group">
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="login.php">Have an account? Login.</a></label>
        </div>
        </div>
</form>
</form>
        </section>
            
        <div class="footer">
            <a href="#">cake shop</a>
        </div>
        <?php
if (isset($_POST['submit'])){
require 'connection.php';
$conn = Connect();

$Name = $conn->real_escape_string($_POST['name']);
$Email = $conn->real_escape_string($_POST['email']);
$Contact = $conn->real_escape_string($_POST['contact']);
$Address = $conn->real_escape_string($_POST['address']);
$Password = $conn->real_escape_string($_POST['password']);

$query = "INSERT into signup(Name,Email,Contact,Address,password) VALUES('$Name','$Email','$Contact','$Address','$Password')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}

$conn->close();
}
?>
   
     
    </body>
</html>
