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

    <h2>Birth Certificate</h2>
    <tr>
    <td>Full Name</td>
    <td>Date Of Birth</td>
    <td>Gender</td>
    <td>Place Of Birth</td>
    <td>Full Name of Husband/ Father</td>
    <td>Permanent Address</td>
    <td>House No/ Room No</td>
    <td>Road/Street Name</td>
    <td>Select District</td>
    <td>Panchayat Name</td>
    <td>Ward Name and Number</td>
    <td>Block Name</td>
    <td>Gaurdian Aadhar Number</td>
    <td>Pincode</td>
    <td>Phone No</td>
    <td colspan='2'>Status</td>
    <!--<td>password</td>-->
    </tr>
    <?php
    if($n->num_rows()>0)
      {
        foreach($n->result() as $row)
        {
         ?>
         <tr>
         <td><?php echo $row->fname;?></td>
         <td><?php echo $row->DOB;?></td>
         <td><?php echo $row->gender;?></td>
         <td><?php echo $row->birthplace;?></td>
         <td><?php echo $row->guardianname;?></td>
         <td><?php echo $row->address;?></td>
         <td><?php echo $row->houseno;?></td>
         <td><?php echo $row->street;?></td>
         <td><?php echo $row->district;?></td>
         <td><?php echo $row->panchayath;?></td>
         <td><?php echo $row->ward;?></td>
         <td><?php echo $row->block;?></td>
         <td><?php echo $row->aadharno;?></td>
         <td><?php echo $row->pin;?></td>
         <td><?php echo $row->phoneno;?></td>
        <?php
                    if($row->birth_status=='1')
                    {
                ?>
                    <td><?php echo "Approved-"; ?><a href="<?php echo base_url()?>Main/download/<?php echo $row->bid ?>">Download</a></td>
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
         <
     </tr>
     <?php
 }
}
     ?>
 </table>
</body>
</html>
