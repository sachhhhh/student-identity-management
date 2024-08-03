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
// else if($_SESSION['usertype']=='staff')
// {
//     header("location:index.php");
// }
 
$host="localhost";
$user="root";
$password="";
$db="student";
$data=mysqli_connect($host,$user,$password,$db);
 

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
                background-color:white;
                width:400px;
                padding-top:70px;
                padding-bottom:60px;
                padding-right:70px;
                margin-left:45%;
            }
            form a
            {
                color:white;
                text-decoration:none;
               
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
                    <a href="edit.php">Edit Student Details</a>
                </li>
                
                 
            </ul>
        </aside>
        <div class="content">
            <h1>EDIT STUDENT</h1>
        </div>
        <div class="div_deg">
                <form action="editstudentdetails.php" method="POST">
                   
                       
 
                    <div>
                        <label>Roll Number</label>
                        <input type="text" name="rollnumber">
                    </div>
                    <div>
                        <button style=" margin-left:140px ;margin-top:20px" class="btn btn-primary" name="edit_student">
                            Edit Student
                        </button>
                        <!-- <input type="submit" style=" margin-left:140px" class="btn btn-primary" name="add_course" > -->
                    </div>
                </form>
            </div>
    </body>
</html>