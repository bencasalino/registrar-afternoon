
<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Course.php";
    require_once "src/Student.php";

    $server = 'mysql:host=localhost;dbname=registrar_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);


    class CourseTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
           //Course::deleteAll();
           //Student::deleteAll();
        }

        function testGetCourseName()
        {
            //Arrange
            $course_name = "HISTORY";
            $number = 101;
            $test_course = new Course($course_name, $number);

            //Act
            $result = $test_course->getCourseName();

            //Assert
            $this->assertEquals($course_name, $result);
        }

        function testGetCourseNumber()
        {
            //Arrange
            $course_name = "HISTORY";
            $number = 101;
            $test_course = new Course($course_name, $number);

            //Act
            $result = $test_course->getCourseNumber();

            //Assert
            $this->assertEquals($number, $result);
        }

        function testSave()
        {
            //Arrange
            $course_name = "HISTORY";
            $number = 101;
            $test_course = new Course($course_name, $number);
            //var_dump($test_course);

            //Act
            $test_course->save();

            //Assert
            $result = Course::getAll();
            $this->assertEquals($test_course, $result[0]);
        }



      }

?>
