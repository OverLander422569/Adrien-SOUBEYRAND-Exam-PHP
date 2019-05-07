<?php
		
    include 'model/database.php';
     if($_SERVER["REQUEST_METHOD"]== "POST" && !empty($_POST)){ 
            $sql = "INSERT INTO contact (nom, prenom, pseudo, dateNaissance) VALUES ('".$nom."','".$prenom."','".$pseudo."','".$dateNaissance."','');";
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$firstname, $age, $tel, $email,$pays,$comment, $metier, $url));
            Database::disconnect();
            header("Location: index.php");
        }
?>