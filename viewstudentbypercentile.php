<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
} else if ($_SESSION['usertype'] == 'student') {
    header("location:index.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "student";
$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['view_student'])) {
    $percentile = isset($_POST['percentile']) ? $_POST['percentile'] : null;

    $sql = "SELECT rollnumber, name, mailid, mobile, department, dob, cohort, percentile FROM studentdetails WHERE percentile >= '$percentile' ORDER BY name ASC";

    $result = mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    <style>
        /* Your CSS styles */
        *
        {
            margin: 0;
            padding: 0;
        }
        .header
        {
            background-color: skyblue;
            line-height: 70px;
            padding-left: 30px;
        }
        a
        {
            text-decoration: none;
            font-weight: bold;
        }
        .logout
        {
            float: right;
            padding-right: 30px;
        }
        .content
        {
            margin-left: 17%;
            margin-top: 3%;
            margin-top: 20px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 20px;
            margin: 0;
            margin-right: 10px;
        }
        th {
            background-color: #f2f2f2;
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        td {
            border: 1px solid #dddddd;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #e5e5e5;
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="" style="text-decoration:none">Admin Dashboard</a>
        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </header>

    <div class="content">
        <table border="1">
            <tr>
                <th>Roll Number</th>
                <th>Name</th>
                <th>Mail ID</th>
                <th>Mobile</th>
                <th>Department</th>
                <th>DOB</th>
                <th>Cohort</th>
                <th>Percentile</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo isset($row['rollnumber']) ? $row['rollnumber'] : ''; ?></td>
                    <td><?php echo isset($row['name']) ? $row['name'] : ''; ?></td>
                    <td><?php echo isset($row['mailid']) ? $row['mailid'] : ''; ?></td>
                    <td><?php echo isset($row['mobile']) ? $row['mobile'] : ''; ?></td>
                    <td><?php echo isset($row['department']) ? $row['department'] : ''; ?></td>
                    <td><?php echo isset($row['dob']) ? $row['dob'] : ''; ?></td>
                    <td><?php echo isset($row['cohort']) ? $row['cohort'] : ''; ?></td>
                    <td><?php echo isset($row['percentile']) ? $row['percentile'] : ''; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>

<?php
}
?>
