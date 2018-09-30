/*
formChecker.js
Author: Clare Meyer
Lab: 04; Exercise: 03
validates all the userinput from customerFrontend.html
 */

function validate(){
  /*gets all the information the user inputs from the html*/
  var check=document.getElementById("username");
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var rareQuant = document.getElementById("most").value;
  var middleQuant = document.getElementById("middle").value;
  var lastQuant = document.getElementById("least").value;
  var shipping1 = document.getElementsByName("shipping");

  /*makind sure they picked a shipping option*/
  var shipping="";
  for(var i=0; i < shipping1.length; i++){
    if(shipping1[i].checked){
      shipping=shipping1[i].value;
    }
  }

  /*checks to make sure there are no blank or negative fields*/
  if(username== "" || password=="" || rareQuant==""|| rareQuant<0 || middleQuant=="" || middleQuant<0 || lastQuant==""|| lastQuant<0||shipping==""){
    if(rareQuant==""||middleQuant==""||lastQuant==""){
      alert("quantities must be numbers");
    }
    else{
      alert("CANNOT HAVE ANY BLANK FIELDS");
    }
  }
  else if(!check.checkValidity()){
    alert("must be a valid email");
  }

}
