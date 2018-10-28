<?php 

/* 
    DELETE FROM table_name 
    WHERE condition; 
*/ 


$ID = filter_input(INPUT_GET, 'ID', FILTER_VALIDATE_INT); 

if (empty($ID)) { 
    header('Location: http://ubuntu.ametikool.ee/~TA17_Ruutli/veebirakendused/mysql/project/index.php?message=id_missing'); //redirect to url 
} 

$query = " 
    DELETE FROM lyhwhl_users 
    WHERE ID = " . $ID . " 
"; // Delete row where ID equals 1 

if (mysqli_query($link, $query) === TRUE) { 
    header('Location: http://ubuntu.ametikool.ee/~TA17_Ruutli/veebirakendused/mysql/project/index.php?message=user_deleted'); //redirect to url 
} else { 
    ?><div class="alert alert-danger">Row not Deleted</div><?php 
}
