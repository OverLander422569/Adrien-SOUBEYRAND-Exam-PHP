<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ExamenPHP</title>
        
        	<link href="css/bootstrap.min.css" rel="stylesheet">
        	<link href="css/responsive.css" rel="stylesheet">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
        

    </head>
    <body>

<br />
<div class="container">

<br />
<div class="row">

<br />
<h2>ExamenPHP</h2>
<p>

</div>
<p>


<br />
<div class="row">
                
                    <a href="add.php" class="btn btn-success">Ajouter un user</a>
                

<br />
<div class="table-responsive">

<br />
<table class="table table-hover table-bordered">

<br />
<thead>

<th>ID</th>
<p>

<th>nom</th>
<p>

<th>prenom</th>
<p>

<th>pseudo</th>
<p>

<th>dateNaissance</th>
<p>

</thead>
<p>


<br />
<tbody>
<?php include 'model/database.php'; //on inclut notre fichier de connection $pdo = Database::connect(); //on se connecte à la base $sql = 'SELECT * FROM user ORDER BY id DESC'; //on formule notre requete foreach ($pdo->query($sql) as $row) { //on cree les lignes du tableau avec chaque valeur retournée
  echo '
<br />
<tr>';
echo'
<td>' . $row['ID'] . '</td>
<p>'
';
<td>' . $row['nom'] . '</td>
<p>'
';
<td>' . $row['prenom'] . '</td>
<p>'
';
<td>' . $row['dateNaissance'] . '</td>
<p>'
';
                            echo '

<td>';
                            echo '<a class="btn" href="edit.php?id=' . $row['id'] . '">Read</a>';// un autre td pour le bouton d'edition
                            echo '</td>
<p>
';
                            echo '

<td>';
                            echo '<a class="btn btn-success" href="update.php?id=' . $row['id'] . '">Update</a>';// un autre td pour le bouton d'update
                            echo '</td>
<p>
';
                            echo'

<td>';
                            echo '<a class="btn btn-danger" href="delete.php?id=' . $row['id'] . ' ">Delete</a>';// un autre td pour le bouton de suppression
                            echo '</td>
<p>
';
                            echo '</tr>
<p>
';
                        
 Database::disconnect(); //on se deconnecte de la base
                        ;
?>    
</tbody>
<p>

</table>
<p>

</div>
<p>


</div>
<p>


</div>
<p>

    </body>
</html>