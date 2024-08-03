<html>
<head>
    <meta charset="utf-8">
    <title>student Identity Management</title>
    <!-- <link rel="stylesheet" type="text/css"href="style.css"> -->

    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</head>
<body>
    <nav>
 <center>
        <label class="logo">
        <img src="kctlogo.jpeg" alt="kct.logo" width="70" height="70" style="padding-top: 0px;">
            Kumaraguru College of Technology
</center>
        </label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <!-- <li><a href="login.php" class="btn btn-success">Login</a></li> -->
        </ul>
    </nav>
    <div class="section1">
        <!-- <img class="main_img" src="kct_indexpage.jpeg"> -->
    </div>
    <center>
   
            <div class="form_deg">
            <div class="title_deg">
                      <div style ="font-size:30px ; font-weight: bold;">
                        Login Form
                        
                        </div>
                        <h4>
                            <?php
                            error_reporting(0);
                            session_start();
                            session_destroy();
                            echo $_SESSION['loginMessage'];
                            ?>
                        </h4>

                <form action="login_check.php" method="POST" class="login_form">
                    
                    <div>
                        <label class="label_deg">Username</label>
                        <input type="text" name="username" placeholder=" Enter your username">
                    
                    </div>

                    <div>
                        <label class="label_deg">Password</label>
                        <input type="text" name="password" placeholder="Enter your password">
                    </div>

                    <div>
                        <input class="btn btn-primary" type="submit" name="submit" value="login">
                    </div>

                </form>
            </div>
        </center>
</body>
</html>


<style>
    *
 {
    padding: 0;
    margin:0;
 }

.section1
{
    position:absolute;
    
}

nav
{   position:fixed;
    background-color: transparent;
    height: 70px;
    width: 100%;
    z-index: 1;
}

.logo
{
    font-size: 30px;
    position: relative ;
    right: 2%;
    color:black;
    font-weight: bold;
    line-height:70px ;
}

ul
{
    position: relative;
    float: right;
    margin-right: 20px;
}
ul li
{
    display: inline-block;
    line-height: 70px;
    margin:0 5px;

}

ul li a
{
    text-decoration: none;
    color: black;
    font-size:17px;
}

.main_img
{
    width: 100%;
    height: 100%;
}

.form_deg
{
    padding-top: 200px;
    
}



.label_deg {
    display: inline-block;
    color: black;
    width: 100px;
    text-align: right;
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 20px;
    font-family: 'Times New Roman';

}

.login_form
{
    background-color:transparent;
    width: 400px;
    padding-top: 70px;
    padding-bottom: 70px;
   
   
}

.title_deg
{
    background-color: transparent;
   width: 400px;
   border: 2px solid rgba(255, 255, 255, .2);
   backdrop-filter: blur(3px);
   
}

body
{
    background-image: url('kct_indexpage.jpeg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}

</style>