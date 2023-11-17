<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include helper files for handling requests and other functions
require_once __DIR__ . '/helpers/request.php';
require_once __DIR__ . '/helpers/functions.php';

// Parse the URL and the query string
$url = parse_url($_SERVER['REQUEST_URI']);
$params = [];
if (isset($url['query'])) {
    parse_str($url['query'], $params);
}

// Switch statement to handle different routes based on the path from the URL
switch ($url['path']) {
    // Case: Root path '/'
    case '/Pokedex/':
        // Check if the HTTP method is GET
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            // Include the PokedexController and call the index function
            require 'controllers/PokedexController.php';
            index();
        }
        break;

    // Case: Handle other paths
    case '/Pokedex/index.php/pokemon':
        // Check if the HTTP method is GET
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            // Check if the 'name' parameter is set in the query string
            if (isset($params['name']) && !empty($params['name'])) {
                // If 'name' parameter is set, include the PokemonController and call the show function
                require 'controllers/PokemonController.php';
                show($params['name']);
            } else {
                // If 'name' parameter is not set, include the 404 error page
                require 'views/errors/404.php';
                // Set HTTP response code to 404 Not Found
                http_response_code(404);
            }
        }
        break;

    // Default case: Handle all other paths
    default:
        // Include the 404 error page for unknown paths
        require 'views/errors/404.php';
        // Set HTTP response code to 404 Not Found
        http_response_code(404);
        break;
}
?>
