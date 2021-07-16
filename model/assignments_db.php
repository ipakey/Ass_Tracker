<?php

function get_assignments_by_course($course_Id){
    global $db;
    if($course_Id){
        $query = 'SELECT A.as_Id, A.as_desc, C.cs_Name FROM assignments A LEFT JOIN courses C ON A.as_Id = C.cs_Id WHERE A.as_Id = :course_id ORDER BY A.as_Id';
    }
    else{
        $query = 'SELECT A.as_Id, A.as_desc, C.cs_Name FROM assignments A LEFT JOIN courses C ON A.as_Id = C.cs_Id ORDER BY C.cs_Id';
    }
    $statment = $db->prepare($query);
    $statment->bindValue(':course_Id', $course_Id);
    $statment->execute();
    $assignments = $statment->fetchAll();
    $statment-> closeCursor();
return $assignments;
}

function delete_assignment($assignment_id){
    global $db;
    $query = 'INSERT INTO assignments (as_Desc, as_CourseId)VALUES ()';
    $statment = $db->prepare($query);
    $statment->bindValue(':assign_Id', $assignment_id);
    $statment->execute();  
    $statment-> closeCursor();

}

function add_assignment($course_id, $description){
    global $db;
    $query = 'DELETE FROM Assignments WHERE ID = :assign_id';
    $statment = $db->prepare($query);
    $statment->bindValue(':assign_Id', $course_id);
    $statment->execute();   
    $statment-> closeCursor();

}