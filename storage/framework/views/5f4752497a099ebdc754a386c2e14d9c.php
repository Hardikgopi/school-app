<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    
    <style>
@import url('https://fonts.googleapis.com/css2?family=Freeman&display=swap');
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Freeman&family=Jaro:opsz@6..72&display=swap');
</style>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#register').submit(function(event) {
                var isValid = true;
                $('.error').remove();

               
                var username = $('#username').val().trim();
                if (username == '') {
                    $('#username').after('<span class="error">Please enter a username</span>');
                    isValid = false;
                } else if (!isValidUsername(username)) {
                    $('#username').after('<span class="error">Username must contain only letters</span>');
                    isValid = false;
                }

             
                var email = $('#email').val().trim();
                if (email == '') {
                    $('#email').after('<span class="error">Please enter an email</span>');
                    isValid = false;
                } else if (!isValidEmail(email)) {
                    $('#email').after('<span class="error">Please enter a valid email</span>');
                    isValid = false;
                }

                
                var password = $('#password').val().trim();
                if (password == '') {
                    $('#password').after('<span class="error">Please enter a password</span>');
                    isValid = false;
                } else if (!isValidPassword(password)) {
                    $('#password').after('<span class="error">Password must be at least 8 characters long</span>');
                    isValid = false;
                }

              
                var confirmPassword = $('#confirmpassword').val().trim(); 
                if (confirmPassword == '') {
                    $('#confirmpassword').after('<span class="error">Please confirm your password</span>'); 
                    isValid = false;
                } else if (confirmPassword != password) {
                    $('#confirmpassword').after('<span class="error">Passwords do not match</span>'); 
                    isValid = false;
                }

                
                var role = $('#role').val();
                if (role == '') {
                    $('#role').after('<span class="error">Please select a role</span>');
                    isValid = false;
                }

                if (!isValid) {
                    event.preventDefault(); 
                }
            });

            function isValidUsername(username) {
                var usernameRegex =/^[a-zA-Z\-.]+$/;
                return usernameRegex.test(username);
            }

            function isValidEmail(email) {
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }

            function isValidPassword(password) {
                return password.length >= 8;
            }
        });
    </script>
   <style>
   body{
    background-image: url(pexels-pixabay-414660.jpg);
    background-size: cover;
   }
   
   
   .container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color:skyblue;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    color: darkred;
    font-family: "Jaro", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: dark black;

  font-family: "Freeman", sans-serif;
  font-weight: 400;
  font-style: normal;


}

input[type="text"],
input[type="email"],
input[type="password"],
select {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 16px;
}

select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url('data:image/svg+xml;utf8,<svg fill="#000000" width="16" height="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

.error {
    color: red;
    font-size: 14px;
    margin-top: 5px;
}
</style>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form id="register" action="/add-val" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" id="confirmpassword" name="confirmpassword" required>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <select id="role" name="role" required>
                    <option value="">Select Role</option>
                    <option value="Admin">Admin</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Student">Student</option>
                </select>
            </div>
            <button type="submit">Register</button>
            <?php echo csrf_field(); ?>
            
        </form>
    </div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\school-project\resources\views/register.blade.php ENDPATH**/ ?>