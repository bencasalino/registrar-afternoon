
<?php


    require_once "src/Course.php";


    class CourseTest extends PHPUnit_Framework_TestCase
    {
        function test_course()
        {
            $test_myClass = new Course();

            $result = $test_course->myFunction();
            $this->assertEquals("data", $result);
        }


      }

?>
