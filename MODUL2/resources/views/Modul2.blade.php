<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="{{ asset('JS/script.js') }}"></script>

    <style>
    .error {
    color: red;
    margin-top: -10px;
    margin-bottom: 10px;
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


</body>

</html>
