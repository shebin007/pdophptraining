<html>
    <head>

    </head>
    <body>
        <form action="hiddensession.php" method="GET">
            <input type="submit" name="count" value="count">
            <?php
                $_GET['$hiddencounter'] =2;
                if(!isset($_GET['hiddencounter'])){

                    $count = 0;
                }
               
             
                else{
                    $count = $_GET['hiddencounter'];
                } 
                
                $count = $count +1;
                $_GET['hiddencounter']=$count; 
                echo '<input type="hidden" value ='.$count.'name="hiddencounter">';
                echo "count is $count";
                  

            ?>
            
        </form>
    </body>
</html>