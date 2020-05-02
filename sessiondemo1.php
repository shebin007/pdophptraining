<html>
    <head>

    </head>
    <body>
        <form action="sessiondemo1.php" method="GET">
            <input type="submit" name="Count" value="Count">
            <?php
                session_start();
                if(! isset($_SESSION['counter']))
                {
                    $count =0;
                }
                 
                else{
                    $count = $_SESSION['counter'];

                }
                    
                
                $count = $count +1;
                $_SESSION['counter'] = $count;
                echo "Count is $count";
            ?>
        </form>
    </body>
</html>