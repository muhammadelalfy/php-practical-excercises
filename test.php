<?php

$arr = array('students' => array('khaled'=>array('age'=>28,'address'=>'mansoura','email'=>'khaled.com')
,'hazem'=>array('age'=>29,'address'=>'aga','email'=>'hazem.com')),
'teachers'=>array('anas'=>array('age'=>25,'address'=>'magzar','email'=>'anas.com'),'hassan'=>array(
	'age'=>26,'address'=>'sandooop','email'=>'hasan.com')

)
,
'hobbies'=>array('25'=>'footbal','26'=>'tennis','29'=>'basket','28'=>'handball' )
);


global $key;
$hobbies = array();
$teachers = array();
$students = array();

foreach ($arr as $key => $value) {





    //  Check type
        //  Scan through inner loop        
      
            if($key == "hobbies"){
            foreach($value as $keyHoby => $valueHobby)
            {
                array_push($hobbies, $keyHoby, $valueHobby);
            }
            
        }

    elseif($key == "teachers"){

    foreach($value as $keyteacher => $valueTeacher)
    {
        
        array_push($teachers, $keyteacher, $valueTeacher);

    }
   


}
          
elseif($key == "students"){

    foreach($value as $keystudent => $valuestudent)
    {
        
        array_push($students, $keystudent, $valuestudent);
    }
  


}




}
echo "<pre>";


    print_r ($students);
    echo '<br>';
    print_r ($teachers);
    echo '<br>';

    print_r ($hobbies);

    echo "</pre>";
    echo '<br>';
    echo '<br>';
    echo '<br>';

    foreach($students as $student => $stu){
        if($student == 0){
        echo "name"." is ";
         print_r($stu) ;
         echo "</br>";


         foreach($students[1] as $khaled_details_key => $khaled_details_value){
       echo    $khaled_details_key . " is " . $khaled_details_value . "<br>";
        
        }
       
        echo "and his hobby is " .$hobbies[7] ."</br>"."</br>";
        }
        


        
        elseif($student == 2){
            echo "name"." is ";
             print_r($stu) ;
             echo "</br>";

             foreach($students[3] as $hazem_details_key => $hazem_details_value){
                echo    $hazem_details_key . " is " . $hazem_details_value . "<br>";
                 
                 }
                
                 echo "and his hobby is " .$hobbies[5] ."</br>"."</br>";
                 }
        }

    
















        foreach($teachers as $teacher => $teach){
            if($teacher == 0){
            echo "name"." is ";
             print_r($teach) ;
             echo "</br>";
    
    
             foreach($teachers[1] as $anas_details_key => $anas_details_value){
           echo    $anas_details_key . " is " . $anas_details_value . "<br>";
            
            }
           
            echo "and his hobby is " .$hobbies[1] ."</br>"."</br>";
            }
            
    
    
            
            elseif($teacher == 2){
                echo "name"." is ";
                 print_r($teach) ;
                 echo "</br>";
    
                 foreach($teachers[3] as $hasan_details_key => $hasan_details_value){
                    echo    $hasan_details_key . " is " . $hasan_details_value . "<br>";
                     
                     }
                    
                     echo "and his hobby is " .$hobbies[3] ."</br>"."</br>";
                     }
            }
    
    