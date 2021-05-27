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
        
        <form method="post" action="login_engine.php">  
            Name: <input type="text" name="name" value="">
            <br><br>

            E-mail: <input type="text" name="email" value="">
            <br><br>

            Website: <input type="text" name="website" value="">
            <br><br>

            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>

            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="non_binary") echo "checked";?> value="non_binary">Non-binary
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
            <br><br>
            <input type="submit" name="submit" value="Submit">  
        </form>

        <h1> Back to main page -> <a href="main_page.html">"CASKET"</a></h1> 

    </body>

</html>