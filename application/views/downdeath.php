<html>
<head>
<title></title>
<style>
body{
    background-image:url("../image/emp_bg4.jpg");
    background-size:cover;
    }
table,td{
    border:2px solid;
    border-collapse:collapse;
    padding:10px;
    text-align:center;
    
    
}
.tb{
    background-color:rgba(0,0,0,0.4);
    color:white;

}
a{
    text-decoration:none;
}

</style>
</head>
<body>
    <nav>
        <button>
        <a href="<?php echo base_url()?>Main/office">Back</a>
        </button>
    </nav>
<table class="tb">

    <h2>Death Certificate</h2>
     <?php
    if($n->num_rows()>0)
      {
        foreach($n->result() as $row)
        {
         ?>
    <tr>
    <td>Date Of Death</td>
    <td><?php echo $row->d_date;?></td>
</tr>
<tr>
    <td>Name of the Deceased</td>
     <td><?php echo $row->name;?></td>
 </tr>
 <tr>

    <td>Gender</td><td><?php echo $row->gender;?></td></tr>
   <tr> <td>Address of the Deceased</td><td><?php echo $row->address;?></td></tr>
    <tr><td>Name Of Husband/Father</td> <td><?php echo $row->address;?></td></tr>
    <tr> <td>Name Of Mother</td><td><?php echo $row->hf_name;?></td></tr>
    <tr> <td>Address Of The Deceased At The Time Of Death</td><td><?php echo $row->mother_name;?></td></tr>
    <tr> <td>Age Of The Deceased</td> <td><?php echo $row->d_address;?></td></tr>
    <tr> <td>Death Place</td> <td><?php echo $row->age;?></td></tr>
    <tr> <td>Informant's Name</td> <td><?php echo $row->d_place;?></td></tr>
    <tr> <td>Informant's Address</td><td><?php echo $row->i_name;?></td></tr>
    <tr> <td>Panchayath</td> <td><?php echo $row->i_address;?></td></tr>
    <tr> <td>Informant's Aadhar No</td> <td><?php echo $row->panchayath;?></td>
         <td><?php echo $row->aadharno;?></td></tr>
    <tr> <td>Phone No</td> <td><?php echo $row->phno;?></td></tr>
         
        
     <?php
 }
}
     ?>
 </table>
</body>
</html>




        