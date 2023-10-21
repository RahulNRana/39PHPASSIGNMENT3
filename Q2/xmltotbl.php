<?php
$con = mysqli_connect("localhost","root","root","studxmlsql");

if (!$con)
{
    die('Could not connect: ');
}

$sql="SELECT * FROM student";
$result = $con->query($sql);
// Start XML file, create parent node
$domdoc = new DOMDocument("1.0");
$pnode = $domdoc->createElement("studs");
$parnode = $domdoc->appendChild($pnode);

while ($row = $result->fetch_assoc()){
    // ADD TO XML DOCUMENT NODE
    $pnode = $domdoc->createElement("student");
    $newnode = $parnode->appendChild($pnode);
    $newnode->setAttribute("id",$row['id']);
    $newnode->setAttribute("name",$row['name']);
    $newnode->setAttribute("college",$row['course']);
    $newnode->setAttribute("address",$row['address']);
}

$domdoc->save("student.xml");
echo "Successfully Read Data from student.xml file to student table...";
// Close connections
$con->close();
?>