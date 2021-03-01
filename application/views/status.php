<html>
<head>
<html>
<head>
<title> first site                              
</title>
<style>
    .bi{
    background-image:url("../images/new1.jpg");
    background-size:cover;
    
}
input ,textarea{
     padding:10px;
margin:10px;
text-align:center;
}
.frm
{
    border:1px solid;
  
   width:500px;
   padding:20px;
   margin-left:400px;
   background-color:rgba(0,0,0,0.4);
   
}
h1{
    text-align:center;
    color:white;
}
table
{
margin-left:100px;
color:white;
}

</style>
</head>
<body class="bi">
<div class="menubar">
<!---<form method="post" action="">
<?php

 if($userdata->num_rows()>0)
 {
        foreach($userdata->result() as $row) 
         {
         ?>
         
<div class="frm">
<table>
<h1>status </h1>
                <tr><th>Applied Name:</th><td><?php echo $row['fname']; ?></td></tr>
                <tr><th>Birth certificate:</th>
                <?php
                    if($row->birth_status=='1')
                    {
                ?>
                    <td><?php echo "Approved"; ?></td>
                <?php
                    }
                    else if($row->birth_status=='2')
                    {
                ?>
                    <td><?php echo "Rejected"; ?></td>
                <?php
                    }
                    else
                    {
                ?>
                    <td><?php echo "Waiting for Approval/ Not Applied"; ?></td>
                <?php
                    }
                ?>
                </tr></br>
                <tr><th>Death certificate</th>
                <?php
                    if($row->death_status=='1')
                    {
                ?>
                    <td><?php echo "Approved"; ?></td>
                <?php
                    }
                    else if($row->death_status=='2')
                    {
                ?>
                    <td><?php echo "Rejected"; ?></td>
                <?php
                    }
                    else
                    {
                ?>
                    <td><?php echo "Waiting for Approval/ Not Applied"; ?></td>
                <?php
                    }
                ?>
                 </tr></br>
                <tr><t>Caste certificate:</th>
                <?php
                    if($row->cast_status=='1')
                    {
                ?>
                    <td><?php echo "Approved"; ?></td>
                <?php
                    }
                    else if($row->cast_status=='2')
                    {
                ?>
                    <td><?php echo "Rejected"; ?></td>
                <?php
                    }
                    else
                    {
                ?>
                    <td><?php echo "Waiting for Approval/ Not Applied"; ?></td>
                <?php
                    }
                ?></tr></br>          
                
 <?php
    }
}

?>  
</form>-->
 <div>
</body>
</html>