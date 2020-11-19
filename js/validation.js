
function validateForm() {
    var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("name must be filled out");
   
    return false;
    }
 
  var x = document.forms["myForm"]["email"].value;
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);   
  return false; 
}

   var x = document.forms["myForm"]["subject"].value;
  if (x == "") {
    alert("subject must be filled out");
    return false;
  }
   var x = document.forms["myForm"]["message"].value;
  if (x == "") {
    alert("message must be filled out");
    return false;
  }
 
}
