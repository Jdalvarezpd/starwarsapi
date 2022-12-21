<?php
    //import the functions file and access to get the data using the id of the character
    require 'functions.php'; 

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $id = $_GET['id'];

        $character = get_character_info($id);
        $character = json_decode($character);

    }
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
            <div class="col-12">
                <button onclick="history.back(-1)" class="ms-4 btn btn-primary" style="cursor: pointer; ">&#11164 Back</button>
            </div>
            <div class="col-12 text-center mb-4" style="min-height: 440px;">
                <h1 class="card-titleb text-white mb-3 mt-3"><?php echo strtolower($character->name);?></h1>

                <span class="text-white" style="font-size: 1.5em;">
                height: <?php echo strtolower($character->height);?><br>
                mass: <?php echo strtolower($character->mass);?><br>
                hair_color: <?php echo strtolower($character->hair_color);?><br>
                skin_color: <?php echo strtolower($character->skin_color);?><br>
                eye_color: <?php echo strtolower($character->eye_color);?><br>
                birth_year: <?php echo strtolower($character->birth_year);?><br>
                gender: <?php echo strtolower($character->gender);?><br>
                homeworld: <a href="<?php echo strtolower($character->homeworld);?>" target="_blank"><?php echo strtolower($character->homeworld);?></a><br>
                </span>

            </div>
        </div>
    </div>

    <footer class="bg-dark text-center text-white fixed">
        <div class="text-center p-3 font-family:Arial" style="background-color: rgba(0, 0, 0, 0.2);">
            <?php echo strtolower('This project was created using a public starwars API'); ?>
            <a class="text-white" target="_blank" href="https://swapi.dev/documentation"><?php echo strtolower('Check API Here'); ?></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</body>
</html>