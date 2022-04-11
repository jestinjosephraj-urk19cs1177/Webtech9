<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 9</title>
</head>
<body>
    <h1>Sign up for free.</h1>
    <p>Fill inyour name, passwod and email, then click the submit to register.</p>
    <label for="username">Username</label>
    <input type="text" name="username" id="username" title="username" >
    <br><br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" title="email">
    <br><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" title="password">
    <br><br>
    <label for="re-password">Retype password</label>
    <input type="password" name="re-password" id="re-password" title="re-password">
    <br>
    <br>
    <input type="button" id="submit" value="Submit">
    <input type="button" id="reg" value="Register">
    <br><br><br>
    <p id="output"></p>
    <script>    

        document.getElementById("submit").addEventListener("click", (e) => {
            const useranme = document.getElementById("username").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const rePassword = document.getElementById("re-password").value;
            const http = new XMLHttpRequest();
            http.open("GET", `chuser.php?name=${useranme}`, true);
            http.send();
            http.onreadystatechange = function() {
                document.getElementById("output").innerHTML = this.responseText;
            }
        });
        document.getElementById("reg").addEventListener("click", (e) => {
            const useranme = document.getElementById("username").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const rePassword = document.getElementById("re-password").value;
            if (password != rePassword) return alert("Password doesnt match!");
            const http = new XMLHttpRequest();
            http.open("GET", `register.php?name=${useranme}&email=${email}&password=${password}`, true);
            http.send();
            http.onreadystatechange = function() {
                document.getElementById("output").innerHTML = this.responseText;
            }
        });
    </script>
</body>
</html>
