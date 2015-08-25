<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Course.php";
    require_once __DIR__."/../src/Student.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $server = 'mysql:host=localhost;dbname=registrar';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();
    // needed for intial set up everything above this line


    // link to Home page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array('courses' => Course::getAll(), 'students' => Student::getAll()));
   });

   // link to courses twig views page
   $app->get("/courses", function() use($app){
       return $app['twig']->render('courses.html.twig', array('courses'=> Course::getAll(), 'students'=> Student::getAll()));
   });

   // link to courses twig views page
   $app->get("/students", function() use($app){
       return $app['twig']->render('students.html.twig', array('students'=> Student::getAll(), 'courses'=> Course::getAll()));
   });

    // path to edit individual student
    // $app->get("/students/{id}", function($id) use($app) {
    //     $student = Student::find($id);
    //     return $app['twig']->render('student_edit.html.twig', array('student'=>$student, 'students'=> $course->getStudents()));

    // path to update individual student
    // $app->patch

    // post edited student information
    // $app-> post








        // must have a return app at the bottom of app.php page
        return $app;
?>
