<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/style.css">
    <style>




        .error {
            color: red;
            margin-top: -10px;
            margin-bottom: 10px;

        }

        .show-password {
            cursor: pointer;
            font-size: 12px;
            margin-left: 5px;
        }

    </style>
</head>
<body>
    <div class="container">

        <form id="registrationForm" onsubmit="return validateForm()">
            <div class="card">
            <h2>Log in</h2>
            <div class="label-float">
            <input type="text" id="username" name="username" required>
            <label for="user">Username</label>

            </div>

            <div class="label-float">
            <input type="password" id="password" name="password" required>
            <label for="password">Password:</label>
            <img src="images/eye-regular.svg" id="passShow" alt="eyes" onclick="togglePassword()">
            </div>
            <input type="submit" value="Submit">
            </div>
                <div class="container">
                    <div>
                    <span id="usernameError" class="error"></span>
                    </div>
                    <div>
                    <span id="passwordError" class="error"></span>
                    </div>
                </div>


        </form>
    </div>

    <script>
        function validateForm() {
            // Reset errors
            document.getElementById("usernameError").innerHTML = "";
            document.getElementById("passwordError").innerHTML = "";

            // Get input values
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            var valid = true;

            // Validate username length
            if (username.length > 7) {
                document.getElementById("usernameError").innerHTML = "Username tidak boleh lebih dari tujuh karakter.";
                valid = false;
            }

            // Validate password length and complexity
            if (password.length < 10) {
                document.getElementById("passwordError").innerHTML = "Password harus terdiri dari minimal sepuluh karakter.";
                valid = false;
            } else if (!password.match(/[A-Z]/) || !password.match(/[a-z]/) || !password.match(/[0-9]/) || !password.match(/[!@#$%^&*()_+]/)) {
                document.getElementById("passwordError").innerHTML = "Password harus terdiri dari huruf kapital, huruf kecil, angka, dan karakter khusus.";
                valid = false;
            }



            return valid;
        }

        function togglePassword() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</body>
</html>
