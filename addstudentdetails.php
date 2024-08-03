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

if(isset($_POST['add_studentdetails']))
{
    $rollnumber=$_POST['rollnumber'];

$name=$_POST['name'];
$bloodgroup=$_POST['bloodgroup'];

$mailid=$_POST['mailid'];
$mobile=$_POST['mobile'];

$address=$_POST['address'];
$dob=$_POST['dob'];
$department=$_POST['department'];
$cohortname=$_POST['cohortname'];
$percentile=$_POST['percentile'];






    $sql="INSERT INTO studentdetails(rollnumber,name,bloodgroup,mailid,mobile,address,dob,department,cohort,percentile ) VALUES ('$rollnumber','$name','$bloodgroup','$mailid','$mobile','$address','$dob','$department','$cohortname','$percentile')";

    $result=mysqli_query($data,$sql);

    if($result)
    {
        echo "<script type='text/javascript'>
        alert('Data upload success');
         </script>";
    }
    else
    {
        echo "upload failed";
    }

   
   

}

$query = "SELECT cohortname FROM addcohort";
    $result = mysqli_query($data, $query);
    $options='';
    while ($row = mysqli_fetch_assoc($result)) {
        $cohortname = $row['cohortname'];
        $options .= "<option value='$cohortname'>$cohortname</option>";
    }

?>
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
                padding-bottom:70px;
                padding-right:70px;
                margin-left:50%;
                margin-top:1%;
            }
            
        </style>
    </head>
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
                    <li>
                    <a href="student.php">View Student</a>
                    </li>
                    <li>
                    <a href="edit.php">Edit Student Details</a>
                    </li>
                
                </li>
           
            </ul>
        </aside>
        <div class="content">
            <h1>ADD STUDENT DETAILS</h1>
        </div>
        <div class="div_deg">
                <form action="#" method="POST">
                <div>
                        <label>ROLLNUMBER</label>
                        <input type="text" name="rollnumber">
                    </div>

                    <div>
                        <label> NAME</label>
                        <input type="text" name="name">
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
                        <input type="text" name="mailid">
                    </div>
                    <div>
                        <label> MOBILE</label>
                        <input type="number" name="mobile">
                    </div>

                    <div>
                        <label>ADDRESS</label>
                        <input type="text" name="address">
                    </div>
                    

                    
                    <div>
                        <label> DOB</label>
                        <input type="text" name="dob">
                    </div>
                    <div>
                        <label> DEPARTMENT</label>
                        <input type="text" name="department">
                    </div>
                    <div>
                        <label>COHORT</label>
                        <select name="cohortname">
                        <?php echo $options;?>
                        </select>
                    </div>
                    <div>
                        <label>PERCENTILE</label>
                        <input type="text" name="percentile">
                    </div>
                    


                   
                    <div>
                        <input type="submit" style="margin-left:38%" class="btn btn-primary" name="add_studentdetails" value="Add Student details">
                    </div>
                </form>
            </div>
    </body>
</html>