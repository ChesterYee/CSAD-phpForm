
<?php
$name = $email = $gender = $comment = "";
$nameErr = $emailErr = $genderErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Check if name field is empty or not
    if (empty($_POST["name"])) {
        echo $nameErr = "Name is required";
        echo "<br>";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)){
            echo $nameErr = "Only letters and white spaces allowed";
            echo "<br>";

        }
    
    }

    // Check if email field is empty or not
    if (empty($_POST["email"])) {
        echo $emailErr = "Email is required";
        echo "<br>";
    } else {
        $email = test_input($_POST["email"]);
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
            echo $emailErr = "Invalid email format";
            echo "<br>";

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
