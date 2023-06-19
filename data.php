<?php

$arrgenres = [
    1 => 'horror',
    2 => 'sci-fi',
    3 => 'thriller',
    4 => 'drama',
    5 => 'love',
    6 => 'noir',
    7 => 'crime',
    8 => 'comedy',
];

$arrMovies = [
    new movies(
        'alien',
        '1979',
        [
            new genres($arrgenres[1]),
            new genres($arrgenres[2]),
            new genres($arrgenres[3]),
        ],
        'Sigourney Weawer',
        'Ridley Scott',
    ),
    new movies(
        'Iron Man',
        '2008',
        [
            new genres($arrgenres[2]),
        ],
        'Robert Downey Jr',
        'Jon Favreau',
    ),
    new movies(
        'matrix',
        '1999',
        [
            new genres($arrgenres[2]),
            new genres($arrgenres[4]),
        ],
        'Keanu Reeves',
        'the Wachowski sisters',
    ),
];

