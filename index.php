<?php

include __DIR__ . '/movies.php';
include __DIR__ . '/genres.php';
include __DIR__ . '/data.php';

// $alien = new movies('alien', '1979', 'horror/sci-fi', 'Sigourney Weawer', 'Ridley Scott');
// $ironMan = new movies('Iron Man', '2008', 'Marvel', 'Robert Downey Jr', 'Jon Favreau');
// $matrix = new movies('matrix', '1999', 'sci-fi', 'Keanu Reeves', 'the Wachowski sisters');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <!-- link di BOOTSTRAP, per accedere alla libreria-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- script con link di BOOTSTRAP, da mettere in fondo al body o nell'head con defer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous" defer></script>
</head>
<body>
    <div class="container">
        <h1>Movies</h1>
        <ul><?php
            foreach ($arrMovies as $movies) { ?>
				<li><?php echo $movies->getFullInfo() ?></li><?php
			} ?>
        </ul>
    </div>
</body>
</html>