

function checkEmail(emailId) {
if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailId)){

return true;
}    
return false;
}

function ValidateEmail(){
    var emailID=document.form.email;

    if ((emailID.value==null)||(emailID.value=="")){
        alert("Please Enter your Email ID")
        emailID.focus()
        return false
    }

    if (checkEmail(emailID.value)==false){
        emailID.value=""
        alert("Invalid Email Adderess");
        emailID.focus()
        return false
    }
        alert('valid');
        return true
 }