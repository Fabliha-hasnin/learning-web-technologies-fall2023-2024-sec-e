<?php
  require_once('../controller/sessioncheck.php'); 
  //require_once('../model/db.php');
  if (isset($_SESSION['flag']))
  {
  ?>

<html lang="en">
<head>
    <title>Document</title>
    <style>  
    td { vertical-align:top;}
   </style>
</head>
<body>
    <table>
    <html lang="en">
<head>
    <title> Menu </title>
</head>
<body>
<table border = "1" align="center" width="70%" height="100%" >
    <tr>
        <th colspan="2"> <bold><h1> Collaborative task management </h1></bold><pre><p> Logged in as <?php echo $_SESSION['user']['username']?></p> | <a href="../controller/logout.php"> Logout </a></pre></th>

    </tr>
     <tr>
     <td width="30%">
         Accounts
         <hr></hr>
         <ul>
          <li> <a href="./managerDashboard.php"> Dasboard </a> </li>
<!--           
        <ul>
        <li> <a href="./workhistory.php"> View work history </a> </li>
        <li> <a href="./viewproflink.php"> View profile link </a> </li>
        </ul> -->

          <li> <a href="./setTask.php"> Set task </a> </li>
          <li> <a href="./viewprojects.php"> View projects </a> </li>
          <!-- <li> <a href="./currentWork.php"> Current work </a> </li> -->
          <li> <a href="./manageTeam.php"> Manage team </a> </li>
          <li> <a href="./viewprof.php"> View profile </a> </li>
          <li> <a href="./editprof.php"> Edit profile </a> </li>
          <!-- <li> <a href="./changeprofpic.php"> Change profile photo </a> </li> -->
          <li> <a href="./changepass.php"> Change password </a> </li>
         </ul>
     </td>

     <td width="70%">
       <!-- <center> <img src ="me.jpg" width = "100px" height="100px"> <br> </center>   -->
    </td > 

    </tr>
    <tr align="center">
        <td colspan="2"> Copyright c 2023 </td>
    </tr>
</body>
</html>
    </table>
</body>
</html>

<?php
  }
    else{
        header('location: ./managerLogin.php');
    }
?>