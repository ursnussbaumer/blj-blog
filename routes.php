<?php

$routes = [
    '' => 'views/list.view.php',
    'list' => 'views/list.view.php', 
    'add' => 'views/add.view.php', 
    'other-blogs' => 'views/other-blogs.view.php', 
    'thankyou' => 'views/thankyou.view.php'
];

$uri = trim(parse_url($_SERVER['REQUEST_URI'] ?? '',  PHP_URL_PATH)); 
$uriComponents = explode('/', $uri);
$page = $uriComponents[4] ?? '';

if (array_key_exists($page, $routes)) {
    //echo 'Page: ' . $page . '<br>' . 'Route: ' . $routes[$page];
    require $routes[$page];
} 
else {
    http_response_code(404);
    die('Keine Route für diese URI gefunden.');
}
