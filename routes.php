<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->post('names', 'controllers/add-name.php');

echo '<pre>';
    var_dump($router->routes);
echo '</pre>';