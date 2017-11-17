<?php 


error_reporting(0) ;
if($_GET['lastComment']){
set_exception_handler('exception_handler') ;
$config = parse_ini_file("config/my.ini") ;
$db=new mysqli($config['dbLocation'] , $config['dbUser'] , $config['dbPassword'] , $config['dbName']);
if(mysqli_connect_error()) {
 throw new Exception("<b>Could not connect to database</b>") ;
} 
$filtered = filter_input(INPUT_GET, "lastComment", FILTER_SANITIZE_URL);
if (!$result = $db->query('SELECT * FROM world_country WHERE id >' .$filtered .' ORDER BY name ASC LIMIT 0 , 10')) {
    throw new Exception("<b>Could not read data from the table </b>") ;
}

while($data = $result->fetch_object()) {
$id = $data->id;
$name = $data->Name ;
$continent = $data->Continent;
$population = $data->Population;
$names = $data->names;
if($names != '') {
echo "
<div class='postedComment' id=\"$data->id \">
 
  <i class=\"fa fa-$names\" style=\"font-size:85px;color:#018bc8\"></i>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$names 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style=\"font-size:small;color:black\">Index : $id</i>
<br><hr /> 
 
</div> 
" ;  

} } 
/* close connection */
$db->close();
	} else {
    header("Location: index.php");
    die("Denny access");
	}

function exception_handler($exception) {
  echo "Exception cached : " , $exception->getMessage(), "";
}
