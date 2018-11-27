<html>
    <head>
        <style>
            * {
                max-width: 100%
            }

            p {
                display:inline;
                margin:0;
                padding:0;
                
            }
            
            .both {
                font-style: italic;
                text-decoration: underline;
                color: purple;
            }
            .forthree {
                text-decoration: underline;
                color: red;
            }
            .forfive {
                font-style: italic;
                color: blue;
            }

            .others {
                color: black;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
    <?php

        $x = 0;
        echo "<h1>Printing number 1 to 100</h1>";

        for ($x = 1; $x <= 100; $x ++) {

            if ($x % 3 == 0 && $x % 5 == 0 ) {
                echo "<p class=both>$x</p>";
            } else if ($x % 3 == 0) {
                echo "<p class=forthree>$x</p>";
            } else if ($x % 5 == 0) {
                echo "<p class=forfive>$x</p>";
        
            } else {
                echo "<p class=others>$x</p>";

            }

            
        }


    ?>
    </body>    
</html>
