
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
            Course::deleteAll();
            Student::deleteAll();
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

        function testGetNumber()
        {
            //Arrange
            $course_name = "HISTORY";
            $number = 101;
            $test_course = new Course($course_name, $number);

            //Act
            $result = $test_course->getNumber();

            //Assert
            $this->assertEquals($number, $result);
        }

      }

?>
