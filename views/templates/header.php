<?php echo doctype('html5'); ?>
<html> 
  <head> 
  <title><?= $title ?></title>
  <?php echo meta('Content-type', 'text/html; charset=utf-8', 'name'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/ddSlick.css'  ?>"  />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.css'  ?>"  />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/font-awesome.min.css'  ?>"  />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/datepicker3.css'  ?>"  />
        
  <?php echo script_tag('js/jquery_11.js' );?>
  <?php echo script_tag('js/bootstrap.min.js' );?>
  <?php echo script_tag('js/validate.js' );?>
  <?php echo script_tag('js/bootstrap-datepicker.js' );?>
  <?php echo script_tag('js/jquery.dropdown.js' );?>
  </head>
   
