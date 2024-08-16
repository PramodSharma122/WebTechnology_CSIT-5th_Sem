<?php
include("connectioncheck.php");
$sql="SELECT * FROM students";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo '<table border=1>
    <tr>
    <th> ID </th>
    <th> FirstName </th>
    <th> LastName </th>
    <th> Email </th>
    </tr>';
    while($row=mysqli_fetch_assoc($result)){
        echo '<tr><td>'.$row["id"].'</td>
        <td>'.$row["firstname"].'</td>
        <td>'.$row["lastname"].'</td>
        <td>'.$row["email"].'</td> </tr>';
    }
    echo '</table>';
}
    else{
        echo "0 results";
    }
    mysqli_close($conn);
?>