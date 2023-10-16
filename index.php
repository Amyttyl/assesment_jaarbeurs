<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Custom css -->
        <link rel="stylesheet" href="css/stylesheet.css">
        <!-- Bootstrap includes -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Google icons includes -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <?php include_once('db_connect.php');
        ?>
        <title>Review module</title>
    </head>
    <body>
        <section class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Wat zeggen anderen?</h1>
                <div class="mr-5">
                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>
                    <span class="material-symbols-outlined">
                        arrow_forward
                    </span>
                </div>
            </div>
            <div class="row">
                <?php 
                foreach($results_query as $result){
                    echo "<div class='col-md-4 '><div class='p-4 h-100 review-block'><img height='62' width='100' src='assets/" . $result['img_url'] . ".png'<br><br>";
                    echo "\"" . $result['content']. "\"<br><br>";
                    echo "- " . $result['first_name'] . $result['last_name']. "<br><br></div></div>";
                }
                ?>
            </div>
        </section>
    </body>
</html>