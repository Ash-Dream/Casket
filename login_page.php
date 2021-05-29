<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CASKET</title>
        
        
        <link rel="stylesheet" href="layout\styles\styles.css">
        
        
        <script src="layout\scripts\main_script.js"></script>

    </head>
    <body>



        <h1> WELCOME TO THE <a href="main_page.php">CASKET</a></h1> 
        <br>
        <div id="tabs">
            <ul>
                <li><a href="main_page.php"><span>Main page</span></a></li>
                <li><a href="login_page.php"><span>Login page</span></a></li>
            </ul>
        </div>
        
        <div id="main_content">
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

            <h1> Back to main page -> <a href="main_page.php">"CASKET"</a></h1> 
        </div>


    </body>

</html>