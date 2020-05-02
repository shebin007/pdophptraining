<?php
        $searchtitle = 'p';
        $searchauthor = 'kamala'; 

        
                $db = new PDO("mysql:host=localhost;dbname=library","root","");
              $query = "select * from books where title like '%$searchtitle%'"."and author like '%$searchauthor%'";     
                $stmt = $db->query($query); 
 printf("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Book name"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Author Name"."<br>");    
               while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        printf("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["title"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["author"]."<br>");      
                }
  
?>




