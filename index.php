<!-- inserting data as array in table  -->
<?php
    $_student_record = array(
        array(
            'name' => 'Alex',
            'email' => 'alex@yopmail.com',
            'grade' => 'A'
        ),
        array(
            'name' => 'John',
            'email' => 'john@yopmail.com',
            'grade' => 'B'
        ),
        array(
            'name' => 'Sam',
            'email' => 'sam@yopmail.com',
            'grade' => 'A+'
        ),
        array(
            'name' => 'Alice',
            'email' => 'alice@yopmail.com',
            'grade' => 'B'
        ),
    )
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record</title>
</head>
<body>
    <!-- creating table using html -->
    <table border="2"> <!--  table inline styling -->
        <tr>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>GRADE</th>
        </tr>
        <!-- using foreach loop to inset table using php -->
        <?php
            foreach($_student_record as $key => $value){
                // to get table head in table
                echo "<tr>";
                    // to get values in table
                    foreach($value as $k => $v){
                        echo "<td> $v </td>";
                    }
                echo "</tr>";
            }
        ?>
    </table> <!-- end of html table -->
</body>
</html>