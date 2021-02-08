<?php
$param = array(2,-2,3,5);


function first_mogab_outside($arr){
    $arrloop = $arr;
   global $mogab ;
   $mogab = array();
   global $saleb ;
   $saleb = array();
    
    


foreach ($arrloop as $arrs)
    {

    if ($arrs > 0)
    {
        $mogab[] = $arrs;

    }

    else
    {
        $saleb[] = $arrs;

    }
}

if(count($saleb) == count($arrloop)){

    echo 1 ;   


    }

    else{
        $the_min = min($mogab);

      
        $first_positive_num = --$the_min;

      
        
        if(array_search($first_positive_num, $mogab) && $first_positive_num == 1)
        {
            echo .9;
        }

        if(!array_search($first_positive_num, $mogab) && $first_positive_num == 1)
        {
            echo $first_positive_num;
        }


        elseif($first_positive_num == 0){
            
            echo   .1;
        }
        

        elseif( $first_positive_num != 1 && $first_positive_num != 0 && !array_search($first_positive_num, $mogab)){
            
            echo   $first_positive_num;
        }


    }
    
}

first_mogab_outside($param);

// foreach (range(0, 1) as $number) {
//     echo $number;
// }