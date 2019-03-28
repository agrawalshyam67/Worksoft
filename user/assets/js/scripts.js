
$(function(){

    $("#loginbutton").click(function(){
        $("#loginbutton").hide();
        $("#registerbutton").show();
        $(".register").hide();
        $(".login").show();

    });

    $("#registerbutton").click(function(){
        $("#loginbutton").show();
        $("#registerbutton").hide();
        $(".register").show();
        $(".login").hide();
    });


    document.getElementById('loginBtn').addEventListener('click', sendLogin);
    document.getElementById('registerBtn').addEventListener('click', sendRegistration)

   
            function sendRegistration(e)
            {
                e.preventDefault();

                var fname = document.getElementById('form-first-name').value;
                var lname = document.getElementById('form-last-name').value;
                var regUser = document.getElementById('form-usernameRegister').value;
                var regPass = document.getElementById('form-passRegister').value;
                var email = document.getElementById('form-email').value;
                var imkt = document.getElementById('form-immatrikulation').value;
                var dept = document.getElementById('form-dept').value;
                var course = document.getElementById('form-course').value;
                var disc = document.getElementById('form-decipline').value;
                var uname = document.getElementById('form-about-yourself').value;

                var registerUserInfo = "fname="+fname+"&lname="+lname+"&regUser="+regUser+"&regPass="+regPass+"&email="+email+"&imkt="+imkt+"&dept="+dept+"&course="+course+"&disc="+disc+"&uname="+uname;
                console.log(registerUserInfo);
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function()
                { if(this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById("registerForm").innerHTML = this.responseText;
                        
                    }
                }

                
                
                xhttp.open('POST', './././register.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(registerUserInfo);
               
            }

            function sendLogin(e)
            {
                e.preventDefault();
                
                var username = document.getElementById('userID').value;
                var password = document.getElementById('userPass').value;
                var userInfo = "user="+username+"&pass="+password;

                
                //var tabOpen = window.open("./././Camunda.html", 'newtab');
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function()
                { if(this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById("loginStatus").innerHTML = this.responseText;
                       
                        console.log(this.responseText);
                        
                        //window.location = "Camunda.html";
                      
                    }
                }

                xhttp.open('POST', './././login.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(userInfo); 
                /*
                xhttp.open('GET', './././Camunda.html', false);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(userInfo);
                */
                //window.open("./././Camunda.html");
            }

});