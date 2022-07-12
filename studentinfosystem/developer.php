<?php
include('connect.php');
include('functions.php');
$result = $con->query("SELECT * FROM students LIMIT 10");

// Get the result in to a more usable format.
$query = array();
while($query[] = mysqli_fetch_assoc($result));
array_pop($query);

// Output a dynamic table of the results with column headings.
echo '<table border="1">';
echo '<tr>';
foreach($query[0] as $key => $value) {
    echo '<td>';
    echo $key;
    echo '</td>';
}
echo '</tr>';
foreach($query as $row) {
    echo '<tr>';
    foreach($row as $column) {
        echo '<td>';
        echo $column;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>