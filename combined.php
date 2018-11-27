
<?php
$name = $email = $gender = $comment = $contact= "";
$nameErr = $emailErr = $genderErr = $contactErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Check if name field is empty or not
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)){
            $nameErr = "Only letters and white spaces allowed";

        }
    
    }

    // Check if email field is empty or not
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
            $emailErr = "Invalid email format";

        }
    }

    // Check if contact field is empty or not
    if (empty($_POST["contact"])) {
        $contactErr = "Contact is required";
    } else {
        $contact = test_input($_POST["contact"]);
        if (!preg_match("/^[0-9]*$/",$contact)) {
            $contactErr = "Invalid contact";

        }
    }

    $comment = test_input($_POST['comment']);
    $gender = test_input($_POST['gender']);
} 


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<html>

    <head>
        <style>

            body {
                background-color: black;
                color: white;
            }
            h1 {
                font-family: sans-serif;
                font-size: 20px;
            }

            input[type=text] {
                width: 20%;
                border: black 1px solid;
                background-color: grey;
            }

            textarea {
                width: 20%;
                border: black 1px solid; 
                background-color: grey;

            }

            form {
                font-family: sans-serif;
            }

            img {
                max-width: 10%;
            }

            
        </style>
    </head>
    <body>

        <h1> PHP Playgrounds - Form </h1>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
        
            Name: <input type="text" name="name" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span>
            <p>
            E-mail: <input type="text" name="email" value="<?php echo $email;?>"><span class="error">* <?php echo $emailErr;?></span>

            <p>
            Contact: <input type="text" name="contact" value="<?php echo $contact;?>"><span class="error">* <?php echo $contactErr;?></span>
            
            <p>
            Comment: <textarea name="comment" rows="5" columns="10"><?php echo $comment;?></textarea>
            <p>

            Gender: <input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?>value="female">Female
                    <input type="radio" name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?>value="male">Male
            <p>


            <input type="submit">
            <br>


            <!-- Embed link in an image -->
            <a href = "https://www.google.com"><img src="php.png"></a>

            <h3> Your input is as follows: </h1>

            <?php
                echo "<br>";
                echo $name;
                echo "<br>";
                echo $contact;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $comment;
                echo "<br>";
                echo $gender;
            ?>

        </form>
    </body>
</html>


