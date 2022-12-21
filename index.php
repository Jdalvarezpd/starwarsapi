<?php 
    //import the functions file and access to get the data
    require 'functions.php'; 

    $all_characters = get_all_character_info();
    $all_characters_converted = json_decode($all_characters);
    $all_characters_results = $all_characters_converted->results;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Starwars</title>
</head>
<body>
    <div class="container-fluid bg_dark">

        <div class="row">
            <div class="col-12 text-center">
                <img src="images/star-wars-logo-png-10.png" class="logo" alt="starwars_logo">
            </div>
        </div>

        <div class="row">
            <?php //Iterating the elements and displaying the information in html
                foreach ($all_characters_results as $character) { ?>
                <div class="col-md-3 mb-4">
                    <div class="card" style="width: 18rem; background-color: black;">
                    <div class="card-body">
                        <h5 class="card-titleb text-white" style="cursor: pointer;">
                            <?php echo $str = strtolower($character->name); ?>
                        </h5>
                        <p class="card-text info_color">
                            Height: <?php echo $character->height; ?><br>
                            Mass: <?php echo $character->mass; ?><br>
                            Birth Year: <?php echo $character->birth_year; ?>
                        </p>
                        <?php /*The function below is to clean and get the id of the character that is in the url string, 
                                this is because there is no id element provided by the API */?>
                        <a href="<?php $id = preg_replace("/[^0-9]/", "", $character->url); 
                                echo 'character?id=' . $id; ?>">
                            more info
                        </a>
                    </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <footer class="bg-dark text-center text-white">
        <div class="text-center p-3 font-family:Arial" style="background-color: rgba(0, 0, 0, 0.2);">
            <?php echo strtolower('This project was created using a public starwars API'); ?>
            <a class="text-white" target="_blank" href="https://swapi.dev/documentation"><?php echo strtolower('Check API Here'); ?></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>