
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


    class StudentTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Course::deleteAll();
            Student::deleteAll();
        }

        function testGetStudentName()
        {
            //Arrange
            $student_name = "Johnny Mcfly";
            $date_enrollment = "2014-08-08";
            $test_student = new Student($student_name, $date_enrollment);

            //Act
            $result = $test_student->getStudentName();

            //Assert
            $this->assertEquals($student_name, $result);
        }

        function testGetDateOfEnrollment()
        {
            //Arrange
            $student_name = "MARTY Mcfly";
            $date_enrollment = "2014-08-08";
            $test_student = new Student($student_name, $date_enrollment);

            //Act
            $result = $test_student->getDateOfEnrollment();

            //Assert
            $this->assertEquals($date_enrollment, $result);
        }

        function testSave()
        {
            //Arrange
            $student_name = "Mike Laser";
            $date_enrollment = "2014-08-15";
            $id = 3;
            $test_student = new Student($student_name, $date_enrollment, $id);
            //Act
            $test_student->save();


            //Assert
            $result = Student::getAll();
            $this->assertEquals($test_student, $result[0]);
        }


      }

?>
