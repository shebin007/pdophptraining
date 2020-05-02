<?php
     $searchtitle = 'p';
	$searchauthor = 'kamala';
try{	
       
                $db = new PDO("mysql:host=localhost;dbname=library","root","");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);       
       $stmt = $db->prepare("select * from books where title regexp :title"." and author regexp :author");
$stmt->bindparam(':title',$searchtitle);
$stmt->bindparam(':author',$searchauthor);
		
$stmt->execute();
                 //$stmt = $db->query($q);
              
               while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        printf("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["title"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["author"]."<br>");	
                }

}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }       
  
?>






