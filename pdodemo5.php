<?php
     $db = new PDO("mysql:host=localhost;dbname=library","root","");
    $stmt = $db->prepare("select count_overdue_books(2)");
    $stmt->execute();
    //stmt->execute(array(2));
    printf("No of overdue books = %d\n",$stmt->fetchColumn());

?>
