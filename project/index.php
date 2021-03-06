<?php 

require_once 'include/autoload.php'; 

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING); 

if(empty($page)) { 
    $page = 'select'; 
} 
?> 
<!doctype html> 
<html lang="en"> 
  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 

    <title>Mysql Project</title> 
  </head> 
  <body> 
    <div class="row"> 
        <div class="container-fluid"> 
            <div class="col-sm-4"> 
                <ul> 
                    <li><a href="index.php?page=insert">Insert</a></li> 
                    <li><a href="index.php?page=update">Update</a></li> 
                    <li><a href="index.php?page=delete">Delete</a></li> 
                    <li><a href="index.php?page=select">Select</a></li> 
                </ul> 
            </div> 
            <div class="col-md-8"> 
                <?php if (file_exists(__DIR__ .  '/pages/' . $page . ".php")) { 
                    include 'pages/' . $page . ".php"; 
                } ?> 
            </div> 
        </div> 
    </div> 

    <!-- Optional JavaScript --> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
  </body> 
</html>