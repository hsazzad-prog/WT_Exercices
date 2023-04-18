
function validation(){
 
    if(checkfname()==false || checkgender()==false){
    
        return false;
    }
    return true;   
}

function checkfname(){
    var fname= document.getElementById("fname").value;
    if(fname=="" || fname.length <3){
      document.getElementById("fnameerror").innerHTML=
      "name must be mentioned";
        return false;
    }
    else{
        return true;
    }
}

function checkgender(){
  if(document.getElementById("gender").checked==false)
  {
    document.getElementById("gendererror").innerHTML=
    "gender must be specified";
    return false;
  }
  return true; 

}