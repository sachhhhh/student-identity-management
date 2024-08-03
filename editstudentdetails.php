<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:index.php");
}
else if($_SESSION['usertype']=='student')
{
    header("location:index.php");
}

 
$host="localhost";
$user="root";
$password="";
$db="student";
$data=mysqli_connect($host,$user,$password,$db);
 
 
// $query = "SELECT coursename FROM addcourse";
//     $result = mysqli_query($data, $query);
//     $options='';
//     while ($row = mysqli_fetch_assoc($result)) {
//         $coursename = $row['coursename'];
//         $options .= "<option value='$coursename'>$coursename</option>";
//     }
$query = "SELECT cohortname FROM addcohort";
    $result = mysqli_query($data, $query);
    $options='';
    while ($row = mysqli_fetch_assoc($result)) {
        $cohortname = $row['cohortname'];
        $options .= "<option value='$cohortname'>$cohortname</option>";
    }   
 
if(isset($_POST['delete'])){
    $rollnumber= $_POST['rollnumber'];
    $qu = "DELETE FROM studentdetails WHERE rollnumber = '$rollnumber'";
    $res = mysqli_query($data, $qu);
}
else if(isset($_POST['edit'])){
    $rollnumber=$_POST['rollnumber'];
    $name = $_POST['name'];
    $bloodgroup=$_POST['bloodgroup'];
    $mailid=$_POST['mailid'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $department=$_POST['department'];
    $cohort=$_POST['cohort'];
    $percentile=$_POST['percentile'];
 
    echo '
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
       margin-left:50%;
       margin-top:2%;
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
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
   }
   .div_deg
   {
       background-color:white;
       width:400px;
       padding-top:70px;
       padding-bottom:70px;
       padding-right:70px;
       margin-left:50%;
       margin-top:1%;
   }
   
</style>


<body>
        <header class="header">
        <a href="" style="font-weight:bold">Admin Dashboard</a>
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
        
    </body>

    <div class="content">
            <h1>ADD STUDENT DETAILS</h1>
        </div>
        <div class="div_deg">
                <form action="#" method="POST">
                <div>
                        <label>ROLLNUMBER</label>
                        <input type="text" name="rollnumber" value='.$rollnumber.'>
                    </div>

                    <div>
                        <label> NAME</label>
                        <input type="text" name="name" value='.$name.'>
                    </div>
                    <div>
                    <label for="bloodgroup">BLOODGROUP</label>

        <select name="bloodgroup" id="bloodgroup">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="A1+">A1+</option>
                <option value="A1-">A1-</option>
  
        </select>
                    </div>
                    <div>
                        <label> MAILID</label>
                        <input type="text" name="mailid" value='.$mailid.'>
                    </div>
                    <div>
                        <label> MOBILE</label>
                        <input type="number" name="mobile" value='.$mobile.'>
                    </div>

                    <div>
                        <label>ADDRESS</label>
                        <input type="text" name="address" value='.$address.'>
                    </div>
                    

                    
                    <div>
                        <label> DOB</label>
                        <input type="text" name="dob" value='.$dob.'>
                    </div>
                    <div>
                        <label> DEPARTMENT</label>
                        <input type="text" name="department" value='.$department.'>
                    </div>
                    <div>
                        <label>COHORT</label>
                        <select name="cohortname">
                        <?php echo $options;?>
                        </select>
                    </div>
                    <div>
                        <label>PERCENTILE</label>
                        <input type="text" name="percentile" value='.$percentile.'>
                    </div>
                    


                   
                    <div>
                        <input type="submit" style="margin-left:38%" class="btn btn-primary" name="add_studentdetails" value="Add Student details">
                    </div>
                </form>
            </div>
 

 

   
';
}
 
if(isset($_POST['update'])){
    
    $rollnumber=$_POST['rollnumber'];
    $name = $_POST['name'];
    $bloodgroup=$_POST['bloodgroup'];
    $mailid=$_POST['mailid'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $department=$_POST['department'];
    $cohort=$_POST['cohort'];
    $percentile=$_POST['percentile'];

   
    $q = "UPDATE studentdetails SET rollnumber='$rollnumber',name='$name',bloodgroup='$bloodgroup',mailid='$mailid',mobile='$mobile',
     address='$address',dob='$dob',department='$department',cohort='$cohort',percentile='$percentile' WHERE rollnumber = '$rollnumber'";
    $res = mysqli_query($data, $q);
    if(isset($_POST['delete'])){
        // Your code to delete the selected record goes here
        // After deletion, redirect to editstudentdetails.php
        header('Location: edit.php');
        exit;
    }
    else if(isset($_POST['update'])) {
        // Your code to update the selected record goes here
   
        // After successful update, redirect to editstudentdetails.php
        header('Location: edit.php');
        exit;
    }
   
}
 
if(isset($_POST['edit_student']))
{
$rollnumber=$_POST['rollnumber'];
 
 
   
    $sql="select * from studentdetails where rollnumber='$rollnumber'";
 
    $result=mysqli_query($data,$sql);
    // while($row=mysqli_fetch_assoc($result)) { ?>
 
   
 
<!DOCTYPE <html>

    <head>
        <meta charset="utf-8">
        <title>Admin dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
 
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 
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
                width:142%;
            }
            a
            {
                text-decoration:none;
            }
            .logout
            {
                float:right;
                padding-right:30px;
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
            /* .content
            {
                margin-left:40%;
                margin-top:3%;
            } */
 
            .content
            {
                margin-left:17%;
                margin-top:3%;
                margin-top:20px;
            }
            /* th,td{
                padding:15px;
            } */
 
            /* Apply basic styles to the entire table */
table {
  width: 80%;
  border-collapse: collapse;
  margin-bottom: 20px;
  margin: 0;
  margin-right:10px;
}
 
 
/* Style header cells */
th {
  background-color: #f2f2f2;
  border: 1px solid #dddddd;
  padding: 8px;
  text-align: left;
}
 
/* Style regular cells */
td {
  border: 1px solid #dddddd;
  padding: 8px;
}
 
/* Apply a light background color to even rows for better readability */
tr:nth-child(even) {
  background-color: #f9f9f9;
}
 
/* Hover effect on rows for better user interaction */
tr:hover {
  background-color: #e5e5e5;
}
body, html {
  margin: 0;
  padding: 0;
}
.resizable-table {
    width: 150%; /* Set the desired width of the table */
    height: 100px; /* Set the desired height of the table */
    /* Add other styling properties as needed */
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
                <li>
                    <a href="addstudent.php">Add Student</a>
                </li>
               
                <li>
                    <a href="student.php">View Student</a>
                </li>
                <li>
                    <a href="edit.php">Edit Student Details</a>
                </li>
 
                <!-- <li>
                    <a href="addstaffdetails.php">Add Staff Details</a>
                </li>
                <li>
                    <a href="addstaff.php">Add Staff</a>
                </li>
                <li>
                    <a href="staff.php">View Staff</a>
                </li>
                <li>
                    <a href="course.php">Course</a>
                </li>    
                <li>
                    <a href="addlog.php">Staff Log</a>
                </li>  
                <li>
                    <a href="adduser.php">Add User</a>
                </li>               -->
            </ul>
        </aside>
        <div class="content">
    <table border=1 class="resizable-table">
        <tr>
           
            <th>Roll Number</th>
            <th>Name</th>
            <th>Blood Group</th>
            <th>Mail ID</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>DOB</th>
            <th>Department</th>
            <th>Cohort</th>
            <th>Percentile</th>
            <th>Action</th>
           
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
            <td><?php echo $row['rollnumber']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['bloodgroup']; ?></td>
                <td><?php echo $row['mailid']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['dob']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td><?php echo $row['cohort']; ?></td>
                <td><?php echo $row['percentile']; ?></td>
                <td><form method="post" action="">
                <input type="hidden" name="rollnumber" value="<?=$row['rollnumber']?>">
                <input type="hidden" name="name" value="<?=$row['name']?>">
                <input type="hidden" name="bloodgroup" value="<?=$row['bloodgroup']?>">
                <input type="hidden" name="mailid" value="<?=$row['mailid']?>">
                <input type="hidden" name="mobile" value="<?=$row['mobile']?>">
                <input type="hidden" name="address" value="<?=$row['address']?>">
                <input type="hidden" name="dob" value="<?=$row['dob']?>">
                <input type="hidden" name="department" value="<?=$row['department']?>">
                <input type="hidden" name="cohort" value="<?=$row['cohort']?>">
                <input type="hidden" name="percentile" value="<?=$row['percentile']?>">
                <button class="btn1" name="edit"><i class="material-icons" style="vertical-align: middle;color:#13005A">edit</i></button>|
                <button class="btn1" name="delete"><i class="material-icons" style="vertical-align: middle;color:red">delete</i></button>
            </form></td>
 
            </tr>
            <?php
        }
        ?>
    </table>
</div>
 
       
 
       
    </body>
</html>
 
       
    <?php }
     ?>