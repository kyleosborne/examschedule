<!--Kyle Osborne search.php searches for extra JSON data to populate exam table-->
<?php
    include 'config.php';
    $courseid = $_GET['id'];
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    # SQL query for table data
    $sql = "SELECT course, section, instructor, date, start, end FROM courses JOIN time on courses.id = time.id WHERE courses.id = " . $courseid;
    $result = mysqli_query($conn, $sql);
    $time = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $time[] = $row;
    }
    $info = json_encode($time);
    echo $info;
    mysqli_close($conn);
?>
