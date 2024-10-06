<?php
    

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Date: " . $_POST['dt'] . "<br>";
    echo "Participant Name: " . $_POST['name'] . "<br>";
    echo "Institute Name: " . $_POST['iname'] . "<br>";
    echo "University Name: " . $_POST['uname'] . "<br>";
    echo "Course: " . $_POST['course'] . "<br>";
    echo "Semester: " . $_POST['semester'] . "<br>";
    echo "Mobile No: " . $_POST['mno'] . "<br>";
    echo "Email ID: " . $_POST['mail'] . "<br>";
    echo "Referenced By: " . $_POST['ref'] . "<br>";
    echo "Address: " . $_POST['add'] . "<br>";

    
    if (!empty($_POST['chk'])) {
        echo "Selected Events: <br>";
        foreach ($_POST['chk'] as $event) {
            echo $event . "<br>";
        }
    } else {
        echo "No events selected.<br>";
    }
}


?>