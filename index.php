<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="img/png" sizes="16x16" href="http://localhost/company/img/2250.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Simple Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</head>
<body>
<div class="signup-form">
    <form action="index2.php" method="post">
		<h2>แบบทดสอบ ชุด 1
</h2>
<!-- 		<p class="hint-text">Create your account. It's free and only takes a minute.</p> -->
       
		<div class="form-group">
            <input type="name" class="form-control" name="item_name" placeholder="ชื่อรายการ" >
        </div>
        <div class="col-md-6">
                    <div class="form-group">

                        <label for="exampleInputEmail1"><b>วันที่ทำรายการ</b></label><br/>
                        	<input type="hidden" name="date" value="<?php echo $date_nows; ?>">
                            <input class="form-control" type="date" name="date">
                           

                    </div>
                    
                </div>
		<div class="form-group">
            <input type="name" class="form-control" name="name" placeholder="ผู้ทำรายการ" >
        </div>        
        <div class="form-group">
        <div class="form-group">
        	<input type="username" class="form-control" name="amount" placeholder="จำนวนเงิน">
        </div>     	
        
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">บันทึก</button>
        </div>
   
</body>
</html>


