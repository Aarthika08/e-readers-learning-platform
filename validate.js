function validate() {
    var name = document.forms["RegForm"]["name"];
    var email = document.forms["RegForm"]["email"];
    var tphone = document.forms["RegForm"]["tphone"];
    
    var password = document.forms["RegForm"]["Password"];
    
    
    function allLetter(name)
  {
   var letters = /^[A-Za-z]+$/;
   if(inputtxt.value.match(letters))
     {
      return true;
     }
    if (name.value == "") {
            window.alert("Please enter your name.");
            name.focus();
            return false;
        }
     
   else
     {
     alert("only alphabets are allowed");
     return false;
     }
  }

   
    function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(Regform.email.value))
  {
    return (true)
  }

  if (email.value == "") {
    window.alert(
      "Please enter a valid e-mail address.");
    email.focus();
    return false;
}else{
    alert("You have entered an invalid email address!")
    return (false)
}}
    




    


/*function validatePhoneNumber(input_str) {
    var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

    return re.test(input_str);
}

function validateForm(event) {
    var phone = document.getElementById('myform_phone').value;
    if (!validatePhoneNumber(phone)) {
        document.getElementById('phone_error').classList.remove('hidden');
    }
    if (phone.value == "") {
        window.alert(
          "Please enter your phone number.");
        phone.focus();
        return false;
    } else {
        document.getElementById('phone_error').classList.add('hidden');
        alert("validation success")
    }
    event.preventDefault();
}

document.getElementById('myform').addEventListener('submit', validateForm);*/

function validatePhoneNumber(phone) {
    var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

    return re.test(phone);
}

function validateForm(event) {
    var tphone = document.getElementById('phone').value;
    if (!validatePhoneNumber(tphone)) {
        document.getElementById('phone_error').classList.remove('hidden');
    }
     if (tphone.value == "") {
        window.alert(
          "Please enter your phone number.");
        phone.focus();
        return false;
    } 
    if(tphone.value.length!=10){
       
        
        message.innerHTML = "required 10 digits, match requested format!"
    }else {
        document.getElementById('phone_error').classList.add('hidden');
        alert("validation success")
    }
    event.preventDefault();
}
document.getElementById('Regform').addEventListener('submit', validateForm);

function passwordValidation(passwordInput) {
    var password = document.getElementById("passwordInput");
    var issueArr = [];
    if (!/^.{7,15}$/.test(passwordInput)) {
        issueArr.push("Password must be between 7-15 characters.");
    }
    if (!/\d/.test(passwordInput)) {
        issueArr.push("Must contain at least one number.");
    }
    if (!/[a-z]/.test(passwordInput)) {
        issueArr.push("Must contain a lowercase letter.");
    }
    if (!/[A-Z]/.test(passwordInput)) {
        issueArr.push("Must contain an uppercase letter.");
    }
    if (password.value == "") {
        window.alert("Please enter your password");
        password.focus();
        return false;
    }
    if (issueArr.length > 0) {
        password.setCustomValidity(issueArr.join("\n"));
        password.style.borderColor = alertRedInput;
    } else {
        password.setCustomValidity("");
        password.style.borderColor = defaultInput;
    }
  }

    

    return true;
}