<?phprequire 'Slim/Slim.php';\Slim\Slim::registerAutoloader();$app = new \Slim\Slim();$route = '/';$app->get($route, function () {	});	include "methods/ongithub/products.php";$app->run();?>