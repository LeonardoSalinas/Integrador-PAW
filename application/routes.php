 <?php
 
$router->get('', 'Home@index');
//$router->get('index.php', '');
$router->get('index/home.php','Home@index');
$router->get('index/contact.php','Contact@create');
$router->get('index/user.php', 'User@index');
$router->get('index/casa.php', 'Casa@index');
$router->post('index/user/insert.php', 'User@insert');
$router->get('index/user/create.php', 'User@create');
$router->get('index/user/delete.php', 'User@delete');
$router->get('index/casa/create.php', 'Casa@create');
$router->post('index/casa/create.php', 'Casa@insert');
$router->post('index/message/create.php', 'Contact@insert');
$router->get('index/message.php','Contact@index');
$router->get('index/message/delete.php','Contact@delete');
$router->get('index/casa/detail.php','Casa@detail');
$router->get('index/image/create.php','Image@create');
$router->get('index/image/get.php','Image@index');
$router->get('index/image/delete.php','Image@delete');
$router->post('index/image/upload.php','Image@upload');



