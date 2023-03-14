function contact_formValidation(){
   
    var name = document.forms["contact_form_12"]["fullname"].value;
    if(name==""){
        document.getElementById("usrname_err").innerHTML="please enter your name";
        return false;
    }
    
    /*email validation*/
    var email = document.forms["contact_form_12"]["email"].value;
    if(email==""){
        document.getElementById("email_err").innerHTML = "please enter your validate email";
        return false;
    }else{
        var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;

        var em_va =  re.test(email);
        if(!em_va){
            document.getElementById("email_err").innerHTML ="your email is not in correct format"
            return false
        }
    }
    // end of email validation
    var subject = document.forms["contact_form_12"]["subject"].value;
    if(subject==""){
        document.getElementById("subject_err").innerHTML="can you give the subject for feedback please?";
        return false;
    }
    // subject validation
    var message = document.forms["contact_form_12"]["message"].value;
    if(message==""){
        document.getElementById("message_err").innerHTML = "please write your message in detail";
        return false;
    }
    // end of subject validation

    //message validation
    var name = document.forms["contact_form_12"]["fullname"].value;
    if(name==""){
        alert("please enter your name");
        return false;
    }

    //end of message validation
}
