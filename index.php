<table border=1>
<tr>
  <td width=50>1위</td>
  <td width=50>2위</td>
  <td width=50>3위</td>
  <td width=50>4위</td>
  <td width=50>5위</td>
  <td width=50>6위</td>
  <td width=50>7위</td>
  <td width=50>8위</td>
  <td width=50>9위</td>
  <td width=50>10위</td>
</tr>

<?PHP
$conn = mysql_connect('52.78.104.59','root','YTkZDASW2jRP');
 
$db_status = mysql_select_db('hanyang');
 
if(!$db_status) {
error("DE_ERROR");
exit;
}
 
$query = "select one, two, three, four, five, six, seven, eight, nine, ten, t from search";
$result = mysql_query($query);
 
while($row = mysql_fetch_row($result)) {
print "<tr>";
print "<td>".$row[0]."</td>";
print "<td>".$row[1]."</td>";
print "<td>".$row[2]."</td>";
print "<td>".$row[3]."</td>";
print "<td>".$row[4]."</td>";
print "<td>".$row[5]."</td>";
print "<td>".$row[6]."</td>";
print "<td>".$row[7]."</td>";
print "<td>".$row[8]."</td>";
print "<td>".$row[9]."</td>";
print "</tr>";
}
 
?>
</table>
