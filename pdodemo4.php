<?php
     $searchtitle = 'p';
        $searchauthor = 'kamala';
//try{    
        
                $db = new PDO("mysql:host=localhost;dbname=library","root","");
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);       
       $stmt = $db->prepare("select * from books where title like ?"." and author  like ?");


$stmt->execute(array("%$searchtitle%","%$searchauthor%"));
                 //$stmt = $db->query($q);

               while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        printf("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["title"].
		"&nbsp;&nbsp;".$row["author"]);

                }

//}
//catch(PDOException $e)
  //  {
   // echo "Error: " . $e->getMessage();
   // }       
  
?>
