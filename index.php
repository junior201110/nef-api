<?
define('HOST_NAME',$_SERVER['HTTP_HOST']);
header('Content-Type: application/json');
require 'vendor/autoload.php';
$app = new Slim\App();

$app->get('/',function(){
    DB::openConnection();
});

$app->group('/app',function() use($app){
    $app->get('/react/{num1}/{num2}',function($request, $response, $args){
        $n1 = intval($args['num1']);
        $n2 = intval($args['num2']);
        $sum = $n1+$n2;
        echo json_encode(['error'=>false,'data'=>$sum]);
    });
    $app->get('/hello/{name}', function ($request, $response, $args) {
        $response->write("Hello, " . $args['name']);
        return $response;
    });
    $app->group('/user',function() use($app){
        $app->post('/login/',function(){

        });
    });

});

$app->run();