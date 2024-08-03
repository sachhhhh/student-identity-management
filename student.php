<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <style>
        *
        {
            margin:0px;
            padding:0px;
        }
        .header
        {
            background-color:skyblue;
            line-height:70px;
            padding-left:30px;
        }
        a
        {
            text-decoration:none;
            font-weight: bold;
        }
        .logout
        {
            float:right;
            padding-right:30px;
            padding-top:5px;
        }
        ul
        {
            background-color:#424a5b;
            width:16%;
            height:100%;
            position:fixed;
            padding-top:5%;
            text-align:center;
        }
        ul li
        {
            list-style:none;
            padding-bottom:30px;
            font-size:15px;
        }
        ul li a
        {
            color:white;
            font-weight:bold;
        }
        ul li a:hover
        {
            color:skyblue;
            text-decoration:none;
        }
        .content
        {
            margin-top:5%;
            text-align: center; /* Center align the content */
        }
        label
        {
            display:inline-block;
            text-align:right;
            width:100px;
            padding-top:10px;
            padding-bottom:10px;
        }
        body
        {
            background-image: url('kct.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .div_deg
        {
            background-color:white;
            width:400px;
            padding-top:70px;
            padding-bottom:60px;
            padding-right:100px;
            padding-:100px;
            margin-left:45%;
            margin-right:50px;
        }
        form a
        {
            color:white;
            text-decoration:none;
        }
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px; /* Adjust as needed */
        }
        .button-container .btn {
            margin: 0 10px; /* Adjust spacing between buttons */
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
    <aside>
        <ul>
            <li>
                <a href="addstudentdetails.php">Add Student Details</a>
            </li>
           
        </ul>
    </aside>
   
    <div class="content">
        <h1 style="text-align:center;">VIEW STUDENTS</h1> <!-- Apply text-align:center; to center align -->
        <div class="button-container">
            <a href="studentbybloodgroup.php" class="btn btn-primary">By Blood Group</a>
            <a href="studentbycohort.php" class="btn btn-primary">By Cohort</a>
            <a href="studentbypercentile.php" class="btn btn-primary">By Percentile</a>

        </div>
    </div>
    <div class="div_deg">
        <!-- Other content -->
    </div>
</body>
</html>   
