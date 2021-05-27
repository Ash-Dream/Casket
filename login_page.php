<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In</title>

        <script src="main_script.js"></script>

    </head>

    <body>
        
    <form method="get" action="engine.php" id="authorisation" onsubmit="return username_password_check();">
        <div>
            <p id="username">Enter your username:
                <input type="username" name="password" id="password">
            </p>
            <p id="password">Enter your password:
                <input type="password" name="password" id="password">
            </p>
            <input type="submit">
        </div>
    </form>

    <h1> Back to main page -> <a href="main_page.html">"CASKET"</a></h1> 

    </body>

</html>