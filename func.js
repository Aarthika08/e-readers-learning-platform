
    function validate(){
        

if(!document.getElementById("password").value==document.getElementById("password").value)alert("Passwords do no match");
return document.getElementById("password").value==document.getElementById("password1").value;
return false;
}

    function myFunction(){
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
        // toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        
        // toggle the icon
        this.classList.toggle("bi-eye");
    });}
    
    


    function myFunction1(){
        const togglePassword = document.querySelector("#togglePassword1");
        const password = document.querySelector("#password1");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });}

