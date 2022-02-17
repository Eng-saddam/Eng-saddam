const signInBtn = document.getElementById("signIn");
const signUpBtn = document.getElementById("signUp");
const fistForm = document.getElementById("form1");
const secondForm = document.getElementById("form2");
const container = document.querySelector(".container");

signInBtn.addEventListener("click", () => {
	container.classList.remove("right-panel-active");
});

signUpBtn.addEventListener("click", () => {
	container.classList.add("right-panel-active");
});
/*
fistForm.addEventListener("submit", (e) => e.preventDefault());
secondForm.addEventListener("submit", (e) => e.preventDefault());
*/


$(document).ready(function(){
    
    $("#form1").submit(function(){
       var first_name = $('#first_name').val();
       var last_name = $('#last_name').val();
       var phone = $('#phone').val();
       var email = $('#email').val();
       var password = $('#password').val();
       var re_password = $('#re_password').val();
        var result =[];

       if(check_require('first_name') == 0){
           result.push("First Name is required");
       }

       if(check_require('last_name') == 0){
           result.push("Last Name is required");
       }

       if(check_require('phone') == 0){
           result.push("Phone Number is required");
       }

       if(check_require('email') == 0){
           result.push("Email is required");
       }
       if(check_require('password') == 0){
           result.push("Password is required");
       }
       if(check_require('re_password') == 0){
           result.push("Retype password Name is required");
       }
       if(check_number('phone') == 0){
           result.push("Error in Phone Number");
       }
       if(validateEmail('email') == 0){
           result.push("Email Address is not correnct");
       }
    
  
    


        if(password !== re_password && password != ''){
            $('#password').css({"border-style": "solid", "border-color": "red", "border-width": "thin"});
            $('#re_password').css({"border-style": "solid", "border-color": "red", "border-width": "thin"});
            result.push("Password and confirm password does not match");


        }else if(password === re_password && password != ''){
            $('#password').css({"border-style": "none", "border-color": "block", "border-width": "none"});
            $('#re_password').css({"border-style": "none", "border-color": "block", "border-width": "none"});

        }

        if(result.length > 0){
            var text ="";
            for (i = 0; i < result.length; i++) {
                text += " * " + result[i] + "<br>";
              }
             $('#result').html(text);




            return false;
        }

       function validateEmail(parmeter) {
        var parmeter_val =  $('#' + parmeter).val();
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(re.test(parmeter_val)){
            $('#' + parmeter).css({"border-style": "none", "border-color": "block", "border-width": "none"});
            return 1;
        }else{
            $('#' + parmeter).css({"border-style": "solid", "border-color": "red", "border-width": "thin"});
            return 0;
        }
        
      }
      
        function check_require(parmeter){
            var parmeter_val =  $('#' + parmeter).val();
            if(!parmeter_val.trim()){
                $('#' + parmeter).css({"border-style": "solid", "border-color": "red", "border-width": "thin"});
                return 0;
            }else{
                $('#' + parmeter).css({"border-style": "none", "border-color": "block", "border-width": "none"});
                return 1;
            }
        }

        function check_number(parmeter){
            var parmeter_val =  $('#' + parmeter).val();
            if(! $.isNumeric(parmeter_val)){
                $('#' + parmeter).css({"border-style": "solid", "border-color": "red", "border-width": "thin"});
                return 0;
            }else{
                $('#' + parmeter).css({"border-style": "none", "border-color": "block", "border-width": "none"});
                return 1;

            }
        }


    });
    $('.databaseAlert').delay(3000).fadeOut('slow');

    Filevalidation = () => {
        const fi = document.getElementById('pic');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (i = 0; i <= fi.files.length - 1; i++) {
    
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file > 2048) {
                    fi.value="";
                    $('#upload_section').css({"border-style": "solid", "border-color": "red", "border-width": "thin"});
                    alert("The Image size must be less than 2 MB.")

                }
            }
        }
    }

  });

  