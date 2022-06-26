<?php
include 'dbc.php';



function cerere8(){
    global $conexiune;
    $query = "select * from appointment";
    $result = mysqli_query($conexiune, $query);

    return $result;

   
        $fn=$_SESSION['user'];
        $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1,1 )";       
                                                         
    
        $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1,1)";       
                                                       
    
            $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1,1)";       
                                                   
    
            $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1,1 )";       

}


function cerere10(){
    global $conexiune;

    $query = "select * from appointment";
    $result = mysqli_query($conexiune, $query);

    return $result;
    $fn=$_SESSION['user'];
        $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1,2 )";       
                                               
          
            $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1, 2)";       
                                                 
                 
            $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1,2 )";       
                                              
               
            $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1, 2)";       

}


function cerere12(){
    global $conexiune;

    $query = "select * from appointment";
    $result = mysqli_query($conexiune, $query);

    return $result;
    $fn=$_SESSION['user'];
    
        $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1,3 )";       
                                            
   
            $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1,3 )";       
                                            
    
            $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1,3 )";       
                                       
    
            $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1,3 )";       
   
}


function cerere14(){
    global $conexiune;

    $query = "select * from appointment";
    $result = mysqli_query($conexiune, $query);

    return $result;
    $fn=$_SESSION['user'];
     
        $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1,4 )";       
                                              
    
            $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1,4 )";       
                                      
 
            $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1,4 )";       
                                                
     
            $queryinsert = "insert into appointment(id_student,id_teacher,id_stare,id_interval) VALUES($fn,4,1,4 )";       
   
}

?>
