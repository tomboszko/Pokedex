<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Simple Router

// Include the helper file for handling requests
require_once __DIR__ . '/helpers/request.php';
require_once __DIR__ . '/helpers/functions.php';
require_once __DIR__ . '/helpers/connectPDO.php';

    


// Switch statement to handle different routes based on the path from the URL

switch ($url['path']) {
        // Case: Root path '/'
    case '/Pokedex/':
        // Check if the HTTP method is GET
        if ($method == 'GET') {
            // Include the 'views/index.php' file for the root path
            require 'controllers/PokedexController.php';
            index($pdo);
        }
        break;
    case '/Pokedex/index.php/login':
    if ($method == 'POST') {
        require 'controllers/AuthController.php';
        login($pdo);
    } 
    //elseif ($method == 'GET') {
    //    require 'views/login_form.php';
    //}
    break;

        // Case: Handle other paths
    case '/Pokedex/index.php/pokemon':
        // Check if the HTTP method is GET
        if ($method == 'GET') {
            // Parse the query string of the URL and store the result in the 'result' array
            parse_str($url['query'], $result);
            // Check if the 'pokemon' parameter is set in the query string
            if (isset($result['name']) && !empty($result['name'])) {

                // If 'pokemon' parameter is set, include the 'views/show.php' file
                require 'views/show.php';
            } else {
                // If 'pokemon' parameter is not set, include the 'views/errors/404.php' file
                require 'views/errors/404.php';
                // Set HTTP response code to 404 Not Found
                http_response_code(404);
            }
        }
        break;

        // Default case: Handle all other paths
    default:
        // Include the 'views/errors/404.php' file for unknown paths
        require 'views/errors/404.php';
        // Set HTTP response code to 404 Not Found
        http_response_code(404);
        break;
}
