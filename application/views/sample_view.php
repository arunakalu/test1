
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
    <?php
    $arr1=array(
        'id'=>"form1",'name'=>"registerForm"
    );
    echo form_open('/sample_one/getDataFromView',$arr1);?>
   
        
        
        <input id="" type="text" name="txt1">
        <input type="text" id="" name="txt2"> 
        <input type="submit" name="btn1" id="" value="Submit">
        
 <?php   echo form_close(); ?>
 <?php   echo base_url('sample_one'); ?>
    
</body>
</html>