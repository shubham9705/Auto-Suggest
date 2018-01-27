<?php
if(isset($_GET['search1'])){
 $search =$_GET['search1'];
   if(!empty($search)){
   	include 'count.php'; 
   	$query="SELECT `username` FROM `people` WHERE `username` LIKE '".$search."%'";
   	$x=mysql_query($query);
   	while($y=mysql_fetch_assoc($x)){
   	 
   	  	echo $name=$y['username'].'<br>';
   	  }

}
}
?>   
