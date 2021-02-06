<html>
<head>
  <style>
  #menutree li { list-style: none; }
  li .menu_label + input[type=checkbox] { opacity: 0; }
  li .menu_label { cursor: pointer; }
  li .menu_label + input[type=checkbox] + ol > li { display: none; }
  li .menu_label + input[type=checkbox]:checked + ol > li { display: block; }
  </style>
</head>
<body>

</body>
</html>

<?php

function buildTree($array, $currentParent, $currLevel = 0, $prevLevel = -1) {
foreach ($array as $categoryId => $category) {
if ($currentParent == $category['parent_id']) {
if ($currLevel > $prevLevel) echo "<ol id='menutree'>";
if ($currLevel == $prevLevel) echo "</li>";
echo '<li> <label class="menu_label" for='.$categoryId.'>'.$category['name'].'</label><input type="checkbox" id='.$categoryId.' />';
if ($currLevel > $prevLevel) { $prevLevel = $currLevel; }
$currLevel++;
buildTree ($array, $categoryId, $currLevel, $prevLevel);
$currLevel--;
}
}
if ($currLevel == $prevLevel) echo "</li> </ol>";
}



/*Connecting to Database tempdb*/

$mysqli = new mysqli("localhost","root","","cakedb");

// Check connection
if ($mysqli -> connect_errno) {

  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else
{


}

/*Executing the select query to fetch data from table tab_treeview*/
$sqlqry="SELECT * FROM tab_treeview";


// $result_parent2=mysqli_fetch_assoc($sqlqry_parent1);


$result=mysqli_query($mysqli,$sqlqry);

/*Defining an array*/
$arrayCountry = array();

while($row = mysqli_fetch_assoc($result)){
  $arrayCountry[$row['id']] = array("parent_id" => $row['parent_id'], "name" => $row['name']);
}

/*Checking is there any records in $result array*/
if(mysqli_num_rows($result)!=0)
{
/*Calling the recursive function*/
buildTree($arrayCountry, 0);
}
