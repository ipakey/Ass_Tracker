<?php

    function get_courses(){
        global $db;
        $query = 'SELECT * FROM courses ORDER BY cs_Id';
        $statement = $db->prepare($query);
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement-> closeCursor();
    return $courses;
    }

    function get_course_name($course_id){
        if(!$course_id){
            return "All Course";
        }
        global $db;
        $query = 'SELECT * FROM courses WHERE cs_Id = :course_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':course_id', $course_id);
        $statement->execute();
        $course = $statement->fetch();
        $statement-> closeCursor();
        $course_name = $course['cs_Name'];
    return $course_name;
    }

    function delete_course($course_id){
        global $db;
        $query = 'DELETE * FROM courses WHERE cs_Id = :course_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':course_id', $course_id);
        $statement->execute();
        $statement-> closeCursor();
    }

    function add_course($course_name){
        global $db;
        $query='INSERT INTO courses (cs_Name) VALUES (:course_Name)';
        $statement = $db->prepare($query);
        $statement->bindValue(':course_Name', $course_name);
        $statement->execute();   
        $statement-> closeCursor();
    
    }
    