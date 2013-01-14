<!DOCTYPE html>

<html> 

	<head>
		<title>Register</title>
		<?php
    		$this->load->helper('html');
    		$link = array(
         	'href' => 'css/login/styles.css',
          	'rel' => 'stylesheet',
          	'type' => 'text/css',
          	'media' => 'all'
			);
			echo link_tag($link); 
    	?>		
		
	</head>
    
<body>


<!--top banner-->
	<div id="topBanner" class="blockElement">
    	<div id="topBanner_text">Register</div>
    </div>
<!--top banner ends-->
    
<!--separator-->
    <div id="separator" class="blockElement">separator</div>
<!--separator ends-->

<!--login box-->	
<div id="loginBox">

<?php

	echo form_fieldset('Register As');
	
	echo form_open('main/regPageSelect');
	$data = array(
	 'name'      => 'options',
    'id'        => 'faculty',
    'checked'   => FALSE,
    'style'     => 'margin:10px',
    );
	
	$data['value'] = 'faculty';
	echo form_radio($data);
	echo form_label('Faculty', 'faculty');
	
	echo "<br/>";	
	
	$data['value'] = 'student';
	$data['id'] = 'student';
	echo form_radio($data);
	echo form_label('Student', 'student');
	
	echo br(2);	
	
	echo form_submit('Continue Registration','Continue Registration');
	
	echo form_fieldset_close();
	
	echo form_close();
?>
    

</div>
<!--login box ends-->
</body>

</html>