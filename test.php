<?php

$arr = array('students' => array('khaled'=>array('age'=>28,'address'=>'mansoura','email'=>'khaled.com')
,'hazem'=>array('age'=>29,'address'=>'aga','email'=>'hazem.com')),
'teachers'=>array('anas'=>array('age'=>25,'address'=>'magzar','email'=>'anas.com'),'hassan'=>array(
	'age'=>26,'address'=>'sandooop','email'=>'hasan.com')

)
,
'hobbies'=>array('25'=>'footbal','26'=>'tennis','29'=>'basket','28'=>'handball' )
);


// $flat = iterator_to_array(new RecursiveIteratorIterator(new RecursiveArrayIterator($arr)), 1);
// print_r($flat);


// $it = new RecursiveIteratorIterator(new RecursiveArrayIterator($arr));
// foreach($it as $v) {
//   echo $v, " ";
//   echo '<br>';

// }


// function flatten(array $array) {
//     $return = array();
//     array_walk_recursive($array, function($a) use (&$return) { $return[] = $a; });
//     return $return;
// }
// flatten ($arr);


//groubed to a non flat 
// $objTmp = (object) array('aFlat' => array());

// array_walk_recursive($arr, create_function('&$v, $k, &$t', '$t->aFlat[] = $v;'), $objTmp);

// echo "<pre>";
// print_r($objTmp->aFlat);
// echo "<pre>";


// echo '<br>';
// echo '<br>';
// echo '<br>';







// function myfunction($value,$key)
// {
// echo " $key is $value<br>";
// }
// array_walk_recursive($arr,"myfunction");


// function array_values_recursive($ary)  {
//     $lst = array();
//     foreach( array_keys($ary) as $k ) {
//         $v = $ary[$k];
//         if (is_scalar($v)) {
//             $lst[] = $v;
//         } elseif (is_array($v)) {
//             $lst = array_merge($lst,array_values_recursive($v));
//         }
//     }
//     return array_values(array_unique($lst)); // used array_value function for rekey
// }


// $flat = array_values_recursive($arr);
// print_r($flat); // OUTPUT : Array ( [0] => John Doe [1] => Government [2] => English [3] => Steven Lee [4] => Math [5] => Science [6] => PE [7] => Jean Perot [8] => French [9] => Literature )

// $arr_objects=json_decode(json_encode($arr),true);
// array_walk_recursive($arr, function($value,$key){
//     print_r($value);
//     print_r($key);
// });

// array_walk($arr,function(&$value,$key){
//     $value=(array) $value;
// });
// array_walk_recursive($arr, function($value,$key){
//     echo '<br>';

//     print_r($value);
//     echo '<br>';
//     print_r($key);
// });


// function flatten_array(array $items, array $flattened = []){


//     foreach($items as $item )
//     {
//         if(is_array($item))
//         {
//             $flattened = flatten_array($item , $flattened);
//             continue;
//         }

//         $flattened = $item;
//     }
//     return $flattened;
// }
// flatten_array($arr);

$flatten = new RecursiveArrayIterator($arr);
$flatten = new RecursiveArrayIterator($flatten);
$flatten = iterator_to_Array($flatten,false);
echo '<pre>';
print_r($flatten);
echo '</pre>';
echo '<br>';
echo '<br>';


$result = array_reduce($flatten, 'array_merge', array());
echo '<pre>';

print_r($result);

echo '</pre>';

echo '<br>';
echo '<br>';


function group($array)
{
    $group = array();
    $key = 'email';
    foreach (array_values($array) as $values) {

        if ( empty($values[$key])) {
            $ptr = 'empty';
        }
        else {
            $ptr = $values[$key];   
        }

        $new_key = $values['age'];
        $group[$ptr][$new_key] = $values['address'];   
    }
    return $group;
}

$grouped = group($result);


echo '<pre>';

print_r($grouped);

echo '</pre>';




