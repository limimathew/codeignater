<html>
    <head>
    <title></title>
    <style>
        body{
            background-image:url("../images/bir.jpg");
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
        h2{
            text-align:center;
            font-size:40px;
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
     <?php
    if($n->num_rows()>0)
      {
        foreach($n->result() as $row)
        {
         ?>

    <h2>Birth Certificate</h2>
    <tr>
    <td>Full Name</td>
     <td><?php echo $row->fname;?></td>
 </tr>
 <tr>
    <td>Date Of Birth</td>
     <td><?php echo $row->DOB;?></td>
 </tr>
 <tr>
    <td>Gender</td>
     <td><?php echo $row->gender;?></td>
 </tr>
 <tr>

    <td>Place Of Birth</td>
    <td><?php echo $row->birthplace;?></td>
</tr>
<tr>
    <td>Full Name of Husband/ Father</td>
    <td><?php echo $row->guardianname;?></td>
</tr>
<tr>
    <td>Permanent Address</td>
    <td><?php echo $row->address;?></td>
</tr>
<tr>
    <td>House No/ Room No</td>
     <td><?php echo $row->houseno;?></td>
 </tr>
 <tr>

    <td>Road/Street Name</td>
    <td><?php echo $row->street;?></td>
</tr>
<tr>

    <td>Select District</td>
     <td><?php echo $row->district;?></td>
 </tr>
 <tr>
    <td>Panchayat Name</td>
     <td><?php echo $row->panchayath;?></td>
 </tr>
 <tr>
    <td>Ward Name and Number</td>
     <td><?php echo $row->ward;?></td>
 </tr>
 <tr>
    <td>Block Name</td>
     <td><?php echo $row->block;?></td>
 </tr>
 <tr>
    <td>Gaurdian Aadhar Number</td>
     <td><?php echo $row->aadharno;?></td>
 </tr>
 <tr>

    <td>Pincode</td>
    <td><?php echo $row->pin;?></td>
</tr>
<tr>


    <td>Phone No</td>
     <td><?php echo $row->phoneno;?></td>
 </tr>
<?php   
 }
}
?>
 </table>
</body>
</html>