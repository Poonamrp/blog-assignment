<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogging  website</title>
    <link rel="stylesheet" href="<?php echo base_url('css/foundation.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/app.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/styles.css');?>">
    <!--  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
   <!--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
  <!-- </head> -->
    <style type="text/css">
    body
    {
      background-image: url("<?php echo base_url();?>assets/img/b1.jpg") !important;
    }
    h1{
      font-family: :Microsoft Yi Baiti !important;
      font-size: 45px;
      text-align: center;
      color: #FFFFFF;
    }
    h3
    {
      font-family: :Microsoft Yi Baiti !important;
      font-size: 36px;
      text-align: center;
      color: #FFFFFF;
    }
  </style>
    </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="small-12 medium-6 large-6 columns">
          <h1>BLOGGING SYSTEM  </h1>
          <div class="row">
             <div class="small-12 medium-9 large-9 columns">
              <h3>SIGN IN</h3>
              <?php echo form_open('welcome/signin');?>
              <div class="row">
                 <div class="small-12 medium-12 large-12 columns">
                  <?php echo form_input(['name'=>'email','placeholder'=>'Email','class'=>'textbox']);?>
                  <?php echo form_password(['name'=>'password','placeholder'=>'Password','class'=>'textbox']);?>
                  <?php echo form_submit(['name'=>'submit','value'=>'SIGN IN','class'=>'hollow button success textbox']);?> 
                  <?php echo form_reset(['name'=>'reset','value'=>'RESET','class'=>'hollow button success textbox']);?> 
              </div>
             </div>
             <?php echo form_close();?>
          </div>
        </div>
      </div>
         <div class="small-12 medium-6 large-6 columns">
           <div class="small-12 medium-9 large-9 columns">
          <h3>REGISTER</h3>
           <?php echo form_open('welcome/signup');?>
           <?php if($msg=$this->session->flashdata('response'));?>
            <div class="response">
              <?php echo $msg;?>
            </div>

           <?php $data=array(
            'user_role_id'=>'2'
          );?>
           <?php echo form_hidden($data);?>
          <div class="row">
            <div class="small-12 medium-12 large-12 columns">
              <?php echo form_input(['name'=>'username','placeholder'=>'Username','class'=>'textbox']);?>
              <?php echo form_error('username','<div class="text-danger">','</div>');?>
               <?php echo form_input(['name'=>'email','placeholder'=>'Email','class'=>'textbox']);?>
              <?php echo form_error('email','<div class="text-danger">','</div>');?>
              
               <?php echo form_input(['name'=>'password','placeholder'=>'Password','class'=>'textbox']);?>
              <?php echo form_error('password','<div class="text-danger">','</div>');?>
              <?php echo form_submit(['name'=>'submit','value'=>'SIGN IN','class'=>'hollow button success textbox']);?> 
                  <?php echo form_reset(['name'=>'reset','value'=>'RESET','class'=>'hollow button success textbox']);?> 
              
            </div>
          </div>
          <?php echo form_close();?>
        </div>
    </div>
</div>
</div>

    <script src="<?php echo base_url('assets/js/vendor/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/what-input.js');?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/foundation.js');?>"></script>
    <script src="<?php echo base_url('assets/js/app.js');?>"></script>
  </body>
</html>
