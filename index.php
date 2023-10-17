<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Custom css -->
        <link rel="stylesheet" href="css/stylesheet.css">

        <!-- Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <!-- Custom JS -->
            <script src="js/script_file.js"></script>
        <!-- Include css animations -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <!-- Bootstrap includes -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Google icons includes -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <!-- connect to database -->
        <?php include_once('db_connect.php');?>
        <title>Review module</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="MultiCarousel" data-items="1,2,3" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                            <?php 
                                    foreach($results_query as $result){
                                        echo "                <div class='item'>
                                        <div class='pl-4 pr-4 pt-4 h-100 review-block'>
                                            <img height='62' width='100' src='assets/" . $result['img_url'] . ".png'>
                                            <p class='review-content'>
                                                <i>\"" . $result['content']. "\"</i>
                                            </p>
                                            <p class='author-name'>
                                                - " . $result['first_name'] . $result['last_name']. "
                                            </p>
                                    </div></div>";
                                    }

                                    ?>
                    </div>
                    <h2 class="font-style">Wat zeggen anderen?</h2>
                    <span class="material-symbols-outlined leftLst">arrow_back</span>
                    <span class="material-symbols-outlined rightLst">arrow_forward</span>

                    <!-- <button class="btn btn-primary leftLst"><</button> -->
                    <!-- <button class="btn btn-primary rightLst">></button> -->
                </div>
            </div>
	    </div>
    </body>
</html>