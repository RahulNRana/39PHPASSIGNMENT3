<?php

$con = mysqli_connect("localhost","root","root","studxmlsql");
if (!$con)
{
    die('Could not connect: ');
}

$xml = simplexml_load_file("student.xml");

foreach($xml->children() as $student) {
  
    $name1 = $student['name'];
    $course1 = $student['course'];
    $address1 = $student['address'];


    mysqli_query($con,"INSERT INTO student (name, course, address) VALUES ('$name1', '$course1', '$address1')");
}
echo "Data inserted in to student table";

$con->close();
?>
