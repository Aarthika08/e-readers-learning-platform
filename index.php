<!-- registeration page -->
<html>
    <head> 
        <link rel="stylesheet" type="text/css" href="slogin.css">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link href = "css/bootstrap.min.css" rel = "stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <title>webpage development</title></head>
    <body>
    <section class="user">
        <div class="user_options-container">
          <div class="user_options-text">
            <div class="user_options-unregistered">
              <h2 class="user_unregistered-title">Don't have an account?</h2>
              <p class="user_unregistered-text">Click sign up using this link</p>
              <button class="user_unregistered-signup" id="signup-button">Sign up</button>
            </div>
      
            <div class="user_options-registered">
              <h2 class="user_registered-title">Have an account?</h2>
              <p class="user_registered-text">login with your username and login</p>
              <button class="user_registered-login" id="login-button">Login</button>
            </div>
          </div>
          
          <div class="user_options-forms"  style="height: 525px; border: solid;border-color: black;" id="user_options-forms">
            
            <div class="user_forms-login" style="font-size: 15px; height: 40px; padding: 5px 5px; border: solid;border-color: black;">
              <h2 class="forms_title">Login</h2>
                          <form class="forms_form" action="testing2.php" method="post">
                            <!-- testing2.php----is for login -->
                <fieldset class="forms_fieldset">                
                <div class="forms_field">                                
                <i class="fa fa-user icon">USERNAME</i><br>
                <input  type="email" name="email" id="email" placeholder="Enter username" class="forms_field-input" required autofocus>
            </div>
            
                <div class="forms_field">    
                <i class="fa fa-key icon">PASSWORD</i><br>
                <!-- <input type="password" id="psw" name="password" class="forms_field-input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> -->
                <!-- <input type="password" id="password" name="password" class="forms_field-input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> -->
                <!-- <div class="forms_field" style="display: flex;flex-direction: row;">                     -->
                       <!-- <i class="fas fa-key" style="padding-left: 1px;"></i>              -->
                      <!-- <input type="password" name="password"  id="password" class="forms_field-input" placeholder="password" required>     -->
                      <input style="width: 90%;" type="password" id="password" name="password" class="forms_field-input password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                      
                      <!-- <span class="eye" onclick="myFun()">  
                      <i class="far fa-eye-slash" id="togglePassword"></i>        
                     </span>   -->
                      
                   
            </div><br>
            <div class="forms_buttons">
                <button type="button" class="forms_buttons-forgot">Forgot password?</button>
                <input type="submit" value="Log In" class="forms_buttons-action">
              </div>           
                <!-- <a href="http://localhost/finalyrproject/password-reset.php">forgot password?</a>
                <a href="reg.html">Don't have a account?</a> -->
                </form>
            </div>
            <div class="user_forms-signup" style="font-size: 15px; height: 40px; padding: 5px 5px; border: solid;border-color: black;">
              <h2 class="forms_title">Sign Up</h2>
              <form class="forms_form" style="margin-top: -7%;" action="insert.php" method="post">
                <fieldset class="forms_fieldset">
                  <div class="forms_field">
                     <input type="text" name="name" placeholder="Full Name" id="username" class="forms_field-input"   title="Must contain  uppercase and lowercase letter" required />
                  </div>
                  <div class="forms_field"> 
                       <input type="date" name="dob" id="dob" class="forms_field-input" placeholder="D.O.B" required> 
                       </div>
                  <div class="forms_field">
                    <input type="email" placeholder="Email" class="forms_field-input" name="email" required />
                  </div>
                  <!-- <div class="forms_field">
                    <input type="password" placeholder="Password" class="forms_field-input" required />
                  </div> -->
                  <div class="forms_field">
                  <input  id="phone" placeholder="enter your phone" class="forms_field-input" name="phone"
                  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                  type = "number"  maxlength = "10"  required >
                </div> 
                  <div class="forms_field" style="display: flex;flex-direction: row;">                    
                       <i class="fas fa-key" style="padding-left: 1px;"></i>             
                      <!-- <input type="password" name="password"  id="password" class="forms_field-input" placeholder="password" required>     -->
                      <input type="password" id="password" name="password" class="forms_field-input password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                      
                      <span class="eye" onclick="myFunction()">  
                      <i class="far fa-eye-slash" id="togglePassword"></i>        
                     </span>  
                      
                  </div> 
                  <div class="forms_field" style="display: flex;flex-direction: row;"> 
                  <i class="fas fa-key" style="padding-left: 1px;"></i>               
                   <!-- <input type="password"  id="password1" name="password" class="forms_field-input" placeholder="conform password" value="" oninput="return passwordValidation(this.value)" required/> -->
                   
                   <input type="password" id="password1" name="password2" class="forms_field-input password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                      
                   <span class="eye" onclick="myFunction1()">  
                    <i class="far fa-eye-slash" id="togglePassword1"></i>        
                   </span> 
                </div> 
                       

                </fieldset>

                <div class="forms_buttons">
                  <input type="submit" value="Sign up" class="forms_buttons-action">
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </section>
      <!-- <div id="message">
        <h3>Password must contain the following:</h3>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
      </div> -->
      <script src="func.js"></script>
  <script src="validate.js"></script>
  <script>
const usernameEl = document.querySelector('#username');
const emailEl = document.querySelector('#email');
const passwordEl = document.querySelector('#password');
const confirmPasswordEl = document.querySelector('#confirm-password');

const form = document.querySelector('#signup');


const checkUsername = () => {

    let valid = false;

    const min = 3,
        max = 25;

    const username = usernameEl.value.trim();

    if (!isRequired(username)) {
        showError(usernameEl, 'Username cannot be blank.');
    } else if (!isBetween(username.length, min, max)) {
        showError(usernameEl, `Username must be between ${min} and ${max} characters.`)
    } else {
        showSuccess(usernameEl);
        valid = true;
    }
    return valid;
};


const checkEmail = () => {
    let valid = false;
    const email = emailEl.value.trim();
    if (!isRequired(email)) {
        showError(emailEl, 'Email cannot be blank.');
    } else if (!isEmailValid(email)) {
        showError(emailEl, 'Email is not valid.')
    } else {
        showSuccess(emailEl);
        valid = true;
    }
    return valid;
};

const checkPassword = () => {
    let valid = false;


    const password = passwordEl.value.trim();

    if (!isRequired(password)) {
        showError(passwordEl, 'Password cannot be blank.');
    } else if (!isPasswordSecure(password)) {
        showError(passwordEl, 'Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*)');
    } else {
        showSuccess(passwordEl);
        valid = true;
    }

    return valid;
};

const checkConfirmPassword = () => {
    let valid = false;
    // check confirm password
    const confirmPassword = confirmPasswordEl.value.trim();
    const password = passwordEl.value.trim();

    if (!isRequired(confirmPassword)) {
        showError(confirmPasswordEl, 'Please enter the password again');
    } else if (password !== confirmPassword) {
        showError(confirmPasswordEl, 'The password does not match');
    } else {
        showSuccess(confirmPasswordEl);
        valid = true;
    }

    return valid;
};

const isEmailValid = (email) => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};

const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};

const isRequired = value => value === '' ? false : true;
const isBetween = (length, min, max) => length < min || length > max ? false : true;


const showError = (input, message) => {
    // get the form-field element
    const formField = input.parentElement;
    // add the error class
    formField.classList.remove('success');
    formField.classList.add('error');

    // show the error message
    const error = formField.querySelector('small');
    error.textContent = message;
};

const showSuccess = (input) => {
    // get the form-field element
    const formField = input.parentElement;

    // remove the error class
    formField.classList.remove('error');
    formField.classList.add('success');

    // hide the error message
    const error = formField.querySelector('small');
    error.textContent = '';
}


form.addEventListener('submit', function (e) {
    // prevent the form from submitting
    e.preventDefault();

    // validate fields
    let isUsernameValid = checkUsername(),
        isEmailValid = checkEmail(),
        isPasswordValid = checkPassword(),
        isConfirmPasswordValid = checkConfirmPassword();

    let isFormValid = isUsernameValid &&
        isEmailValid &&
        isPasswordValid &&
        isConfirmPasswordValid;

    // submit to the server if the form is valid
    if (isFormValid) {

    }
});


const debounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {
        // cancel the previous timer
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        // setup a new timer
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};

form.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {
        case 'username':
            checkUsername();
            break;
        case 'email':
            checkEmail();
            break;
        case 'password':
            checkPassword();
            break;
        case 'confirm-password':
            checkConfirmPassword();
            break;
    }
}));
    </script>
  <script>
    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");
    
    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
      document.getElementById("message").style.display = "block";
    }
    
    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
      document.getElementById("message").style.display = "none";
    }
    
    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
      // Validate lowercase letters
      var lowerCaseLetters = /[a-z]/g;
      if(myInput.value.match(lowerCaseLetters)) {  
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
      }
      
      // Validate capital letters
      var upperCaseLetters = /[A-Z]/g;
      if(myInput.value.match(upperCaseLetters)) {  
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }
    
      // Validate numbers
      var numbers = /[0-9]/g;
      if(myInput.value.match(numbers)) {  
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }
      
      // Validate length
      if(myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }
    </script>
    
    <script>
      /**
 * Variables
 */
const signupButton = document.getElementById('signup-button'),
    loginButton = document.getElementById('login-button'),
    userForms = document.getElementById('user_options-forms')

/**
 * Add event listener to the "Sign Up" button
 */
signupButton.addEventListener('click', () => {
  userForms.classList.remove('bounceRight')
  userForms.classList.add('bounceLeft')
}, false)

/**
 * Add event listener to the "Login" button
 */
loginButton.addEventListener('click', () => {
  userForms.classList.remove('bounceLeft')
  userForms.classList.add('bounceRight')
}, false)
</script>
    </body>
 </html>