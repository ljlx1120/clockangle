<?php
  date_default_timezone_set('America/Los_Angeles');
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Clock.php";

  // use Symfony\Component\Debug\Debug;
  // Debug::enable();

  $app = new Silex\Application();

  // $app['debug'] = true;

  $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
  ));

  $app->get("/", function () use ($app) {
    return $app['twig']->render('index.html.twig');
  });

  $app->post("/calculate", function () use ($app) {

    $new_clock = new Clock;
    $hour = $_POST['hour'];
    $min = $_POST['min'];
    $result = $new_clock->angleCheck($hour, $min);

    return $app['twig']->render('index.html.twig', array('result'=>$result));
  });
  return $app;
?>
