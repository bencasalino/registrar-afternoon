<?php

    class Student {

      private $id;
      private $student_name;
      private $date_of_enrollment;

      //Constructors
       function __construct($student_name,$date_of_enrollment,$id = null)
      {
        $this->student_name = $student_name;
        $this->date_of_enrollment = $date_of_enrollment;
        $this->id = $id;
      }

      //Setters

      function setStudentName($new_student_name)
      {
          $this->student_name = (string) $new_student_name;
      }

      function setDateOfEnrollment($new_date_of_enrollment)
      {
          $this->date_of_enrollment = $new_date_of_enrollment;
      }

      //Getters

      function getStudentName()
      {
          return $this->student_name;
      }

      function getDateOfEnrollment()
      {
          return $this->date_of_enrollment;
      }

      function getId()
      {
          return $this->id;
      }

      function save()
      {

          $GLOBALS['DB']->exec("INSERT INTO students (name, date_of_enrollment) VALUES ('{$this->getStudentName()}', '{$this->getDateOfEnrollment()}');");
          $this->id = $GLOBALS['DB']->lastInsertId();
      }

      //STATIC

      static function deleteAll()
      {
          $GLOBALS['DB']->exec("DELETE FROM students;");
      }

      static function getAll()
      {
          $returned_students = $GLOBALS['DB']->query("SELECT * FROM students;");
          $students = array();

          foreach($returned_students as $student) {
              $student_name = $student['student_name'];
              $id = $student['id'];
              $date_enroll = $student['date_of_enrollment'];
              $new_student = new Student($student_name, $date_enroll, $id);
              array_push($students, $new_student);
          }
          return $students;

      }

  }//end class


 ?>
