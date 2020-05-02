<?php
    //use a stored procedure
   // $db = new PDO("myqsl:host=localhost;dbname=library","root","");

   $db = new PDO("mysql:host=localhost;dbname=library","root","");
    $stmt = $db->query("call overdue_books()");

    while($row = $stmt ->fetch(PDO::FETCH_ASSOC))
    {
        printf($row["title"]."<br>");
        
    }


?>