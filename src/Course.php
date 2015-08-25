<?php

    class Course {

        private $id;
        private $course_name;
        private $number;


        //Constructors
        __construct($course_name,$number,$id)
        {
          $this->course_name = $course_name;
          $this->number = $number;
          $this->id = $id;
        }

        //Setters
        function setCourseName($new_course_name)
        {
            $this->course_name = (string) $new_course_name;
        }

        function setNumber($new_number)
        {
            $this->number = (int) $new_number;
        }

        //Getters
        function getCourseName ()
        {
            return $this->course_name;
        }

        function getNumber()
        {
            return $this->number;
        }

        function getId()
        {
            return $this->id;
        }


    }


 ?>
