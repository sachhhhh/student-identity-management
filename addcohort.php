<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:index.php");
}

else if($_SESSION['usertype']=='staff')
{
    header("location:index.php");
}

$host="localhost";
$user="root";
$password="";
$db="student";
$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_cohort']))
{
$id=$_POST['id'];
$cohortname=$_POST['cohortname'];
$department=$_POST['department'];

    
$sql="INSERT INTO addcohort(id,cohortname,department) VALUES ('$id','$cohortname','$department')";

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
                margin-top:5%;
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
                background-color:skyblue;
                width:400px;
                padding-top:70px;
                padding-bottom:70px;
                padding-right:70px;
                margin-left:45%;
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
                    <a href="cohort.php">Cohort</a>
                </li>
                
                
            </ul>
        </aside>
        <div class="content">
            <h1>ADD COHORT</h1>
        </div>
        <div class="div_deg">
                <form action="#" method="POST">
                    <div>
                        <label> COHORT ID</label>
                        <input type="number" name="id">
                    </div>
                    <div>
                        <label>COHORTNAME</label>
                        <input type="text" name="cohortname">
                    </div>

                    <div>
                        <label>DEPARTMENT</label>
                        <input type="text" name="department">
                    </div>

                  
                    <div>
                        <input type="submit" style="margin-left:48%" class="btn btn-primary" name="add_cohort" value="Add Cohort">
                    </div>
                </form>
            </div>
    </body>
</html>