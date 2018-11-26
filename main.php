<html>
    <body>
        <form action="form.php" method="post">

        
            Name: <input type="text" name="name" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span>
            <br>
            E-mail: <input type="text" name="email" value="<?php echo $email;?>"><span class="error">* <?php echo $emailErr;?></span>
            <br>
            Comment: <textarea name="comment" rows="5" columns="10"><?php echo $comment;?></textarea>
            Gender: <input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?>value="female">Female
                    <input type="radio" name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?>value="male">Male
            <br>

            <input type="submit">



        </form>
    </body>
</html>


