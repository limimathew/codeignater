<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
    table,thead,th,td{
        border:1px solid;
        border-collapse:collapse;
        padding:20px;
        margin-left:200px;
        margin-top:5px;
    }
    h1{
        text-align:center;
    }
    .bi{
    background-image:url("../images/41.jpg");
    background-size:cover;
    }
    .btn{
        background-color:rgba(0,255,0,0.7);
        width:100px;
        height:50px;
        padding:5px;
        text-decoration:none;
        color:black;
        margin-left:200px;
        border-radius:5px;

    }
 </style>
</head>
<body class="bi">
    <h1> VIEW PUBLIC DETAILS</h1>
       

 <a class="btn" href="<?php echo base_url() ?>Main/admin">Back To Home</a>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Address</th>
<th>Pincode</th>
<th>Phoneno</th>
<th>Gender</th>
<th>Email</th>
<th colspan="2">Action</th>
</tr>
<?php
if($n->num_rows()>0)
{
  

    foreach($n->result() as $row)
    {  
        ?>
        
     <tr>
         
        <td><?php echo $row->fname;?></td>
        <td><?php echo $row->lname;?> </td>
        
        <td><?php echo $row->address;?></td>
        <td><?php echo $row->pincode; ?> </td>
        <td><?php echo $row->phno; ?> </td>
        <td><?php echo $row->gender; ?> </td>
        <td><?php echo $row->email; ?></td>
         
         
         
         <?php
         if($row->status=='1')
         {
             ?>
             <td>Approved</td>
             <td><a href="<?php echo base_url()?>Main/rejectdetails/<?php echo $row->fkey;?> ">Reject</a></td>
             <?php
             }
             else if($row->status=='2')
             {
                 ?>
                 <td>Rejected</td>
                 <td><a href="<?php echo base_url()?>Main/approvedetails/<?php echo $row->fkey;?>">Approve</a></td>
                 <?php
             }
             else{
                 ?>
         <td><a href="<?php echo base_url()?>Main/approvedetails/<?php echo $row->fkey;?>">Approve</a></td>
         <td><a href="<?php echo base_url()?>Main/rejectdetails/<?php echo $row->fkey;?> ">Reject</a></td>
         </tr>
                
                 <?php
             }
             ?>
         
    <?php
    }

}
    else{
        ?>
        <tr><tr>no data found</td></tr>
        <?php
    }

    ?>

</table>
</form>
</body>
</html>