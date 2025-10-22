<?php
// Fallback data for when database is not available

function get_landmarks_data() {
    return [
        [
            'id' => 1,
            'name' => 'Grand Place',
            'description' => 'UNESCO World Heritage Site and the central square of Brussels, featuring stunning guildhalls and the Town Hall.',
            'location' => 'City Center, Brussels',
            'image_path' => 'assets/images/grand_place_brussels_364537f2.jpg'
        ],
        [
            'id' => 2,
            'name' => 'Atomium',
            'description' => 'A 102-meter tall structure representing an iron crystal magnified 165 billion times, built for the 1958 World Expo.',
            'location' => 'Square de l\'Atomium, 1020 Brussels',
            'image_path' => 'assets/images/atomium_brussels_bel_225e89cc.jpg'
        ],
        [
            'id' => 3,
            'name' => 'St. Michael and St. Gudula Cathedral',
            'description' => 'The main Catholic cathedral of Brussels, a masterpiece of Gothic architecture.',
            'location' => 'Parvis Sainte-Gudule, 1000 Brussels',
            'image_path' => 'assets/images/st_michael_st_gudula_3a45153d.jpg'
        ],
        [
            'id' => 4,
            'name' => 'Royal Palace of Brussels',
            'description' => 'The official palace of the King and Queen of the Belgians, used for state functions.',
            'location' => 'Rue Brederode 16, 1000 Brussels',
            'image_path' => 'assets/images/royal_palace_brussel_c83d14a3.jpg'
        ],
        [
            'id' => 5,
            'name' => 'European Parliament',
            'description' => 'One of the main institutions of the European Union, where EU laws are debated and adopted.',
            'location' => 'Rue Wiertz, 1047 Brussels',
            'image_path' => 'assets/images/european_parliament__8fdca356.jpg'
        ],
        [
            'id' => 6,
            'name' => 'Sonian Forest',
            'description' => 'A 4,400-hectare ancient forest on the southeastern edge of Brussels.',
            'location' => 'Southeast Brussels region',
            'image_path' => 'assets/images/sonian_forest_brusse_9db93ba0.jpg'
        ]
    ];
}

function get_gallery_data() {
    return [
        [
            'id' => 1,
            'title' => 'Grand Place at Night',
            'description' => 'The magnificent Grand Place illuminated in the evening',
            'image_path' => 'assets/images/grand_place_brussels_364537f2.jpg',
            'category' => 'landmarks'
        ],
        [
            'id' => 2,
            'title' => 'The Atomium',
            'description' => 'Brussels iconic 1958 World Expo monument',
            'image_path' => 'assets/images/atomium_brussels_bel_225e89cc.jpg',
            'category' => 'landmarks'
        ],
        [
            'id' => 3,
            'title' => 'Brussels Cityscape',
            'description' => 'Beautiful view of Brussels skyline',
            'image_path' => 'assets/images/brussels_cityscape_s_275944aa.jpg',
            'category' => 'cityscape'
        ],
        [
            'id' => 4,
            'title' => 'Royal Palace',
            'description' => 'The majestic Royal Palace of Brussels',
            'image_path' => 'assets/images/royal_palace_brussel_c83d14a3.jpg',
            'category' => 'architecture'
        ],
        [
            'id' => 5,
            'title' => 'European Parliament',
            'description' => 'Home of European democracy',
            'image_path' => 'assets/images/european_parliament__8fdca356.jpg',
            'category' => 'institutions'
        ],
        [
            'id' => 6,
            'title' => 'Sonian Forest',
            'description' => 'Ancient forest surrounding Brussels',
            'image_path' => 'assets/images/sonian_forest_brusse_9db93ba0.jpg',
            'category' => 'nature'
        ],
        [
            'id' => 7,
            'title' => 'Belgian Delicacies',
            'description' => 'Famous Belgian waffles and chocolate',
            'image_path' => 'assets/images/belgian_waffles_choc_5d6c8016.jpg',
            'category' => 'culture'
        ],
        [
            'id' => 8,
            'title' => 'Art Museums',
            'description' => 'World-class art collections in Brussels',
            'image_path' => 'assets/images/brussels_belgium_mus_bc097f97.jpg',
            'category' => 'museums'
        ]
    ];
}
?>
