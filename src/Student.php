<?php

    class Student {

      private $id;
      private $student_name;
      private $date_of_enrollment;

      //Constructors
      __construct($student_name,$date_of_enrollment,$id)
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

    }


 ?>
