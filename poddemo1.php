<?php
        $searchtitle = Silence;
	$searchauthor = agatha;
	
       
                $db = new PDO("mysql:host=localhost;dbname=library","root","");
                $query = "select * from books where title like '%$searchtitle%'"."and author like '%$searchauthor%'";	
                $stmt = $db->query($query);
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                printf("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["title"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["author"]."<br>");	
                }
       
  
?>


