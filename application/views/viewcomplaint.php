<html>
<head>
<title></title>
<style>
    table,th,td{
        border:1px solid white;
        border-collapse:collapse;
        padding:15px;
        margin-left:30px;
        background-color:rgba(0,0,0,0.2);
    }
    .bi{
	background-image:url(../images/comp5.jpg);
	background-size:cover;
	
  }
  h1{
      text-align:center;
      
  }
  body{
    
    width:470px;
    height:500px;
	text-align:center;
	padding:5px;
	margin-left:400px;
    color:white;
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
<h1>VIEW COMPLAINTS</h1>
<table>
<a class="btn" href="<?php echo base_url();?>Main/admin">back to home</a>
<tr>
<thead>

<th>complaint</th>
<th>subject</th>
<th>current date</th>
<th>Action</th>
</thead>
</tr>
<?php
if($n->num_rows()>0)
{
foreach($n->result() as $row)
{
?>
<tr>



<td><?php echo $row->complaint;?></td>
<td><?php echo $row->subject;?></td>

<td><?php echo $row->currentdate;?></td>
<td><a href="<?php echo base_url();?>Main/deletedetail/<?php echo $row->id;?>">Delete</a></td>
        </tr>
        </div>
        <?php
    }
}
    ?>
</table>

</form>
</body>
</html>