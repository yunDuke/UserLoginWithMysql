 <?php

$conn=@mysql_connect("localhost", "root", "1234") or die("Could not connect");

$rs = @mysql_select_db("account", $conn) or die("Could not select database");
 
$sql="select * from product";
 
$rs=mysql_query($sql,$conn) or die("Could not execute query");

$list = "<table>";
$list.="<tr><th>First Name</th>";
$list.="<th>Last Name</th>";
$list.="<th>User Name</th>";
$list.="<th>Password</th></tr>";

while($row= mysql_fetch_array($rs) )
{
   $list .= "<tr>";
   $list .= "<td>".$row["name"]."</td>";
   $list .= "<td>".$row["plate"]."</td>";
   $list .= "<td>".$row["password"]."</td>";
   $list .= "<td>".$row["lat"]."</td>";
   $list .= "</tr>";
}
$list .= "</table>";
echo($list);

?>
	
