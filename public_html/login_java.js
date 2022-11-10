function credentials(){
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;

    if(username=="charles" && password=="charles12"){
        alert("Succesfully signed in");
        return false;
    }
    else{
        alert("Incorrect credentials");
        
    }
}