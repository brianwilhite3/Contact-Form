<body>
<div class="container">
  <div id="response" class="bg-success"></div>
</div>
<div class="container">
  <h1 id="forms" class="page-header">Send Us a Message</h1>
   <form name="contact" method="post" class="" id="contact" >
<!-- full name -->
<div class="row">
  <div class="form-group col-lg-4">
    <label for="name" class="">Name</label>
     <?php echo form_error('name'); ?>
      <input type="text" name="name" class="form-control input-lg" placeholder="" id="name" value="<?php echo set_value('name'); ?>">
      <span class="help-block">Please enter your first and last name.</span>
  </div>
</div>
<div class="row">
  <div class="form-group col-lg-4">
    <!-- city -->
    <label for="email" class="">E-Mail</label>
    <?php echo form_error('email'); ?>
    <input type="text" name="email" class="form-control input-lg" placeholder="" id="e_mail" value="<?php echo set_value('email'); ?>">
  </div>
</div>
<div class="row">
  <div class="form-group col-xs-4">
    <label for="date" class="">Date</label>
  <div class="input-group date"  data-date="" data-date-format="mm-dd-yyyy"> 
    <input name="date" class="form-control input-lg" type="text" id="date" value="<?php echo set_value('date'); ?>">
    <span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
  </div>
    <span class="help-block">Please click inside the field and choose a date.</span>
  </div>
</div>
<script type="text/javascript">
$(".input-group.date").datepicker({autoclose: true, todayHighlight: true });
</script>
<div class="row">
  <div class="form-group col-lg-4">
    <!-- phone number -->
    <label for="phone" class="control-label">Phone Number</label>
    <?php echo form_error('phone'); ?>
    <input type="text" name="phone" class="form-control input-lg" placeholder="" id="phone" value="<?php echo set_value('phone'); ?>">
    <span class="help-block">Please enter area code.</span>
  </div>
</div>
<div class="row">
  <div class="form-group col-lg-4">
    <!-- Company -->
    <label for="company" class="control-label">Company</label>
    <?php echo form_error('company'); ?>
    <input type="text" name="company" class="form-control input-lg" placeholder="" id="business" value="<?php echo set_value('company'); ?>">
  </div>
</div>
<div class="row">	
  <div class="form-group col-lg-6">
    <!-- message -->
    <label for="message" class="control-label">Message</label>
    <?php echo form_error('message'); ?>
    <textarea class="form-control" name="message" rows="4" placeholder="Comments or questions..." id="message" value="<?php echo set_value('massage'); ?>"></textarea>
  </div>
</div>
<button type="submit" class="btn btn-primary btn-lg" id="check" value="Submit">Submit</button><p class="error warning"></p>
</form>
</div>
</body>
</html>
  
  
  
  
  
  
