<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog System</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/foundation.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css');?>">
    <link rel="stylesheet" type="text/css" href="http://fonts.googlepis.com/css?family=Tangerine">
   <!--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     -->
     <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <style type="text/css">
    body
    {
      background-image: url("<?php echo base_url();?>assets/img/b1.jpg") !important;

    }
    
    .greeting
    {
      
      font-family: verdana!important;
      color: #FFFFFF !important;
      text-align: left !important;
      font-weight: bold;font-size: 16px;
    }
    .response
    {
      border-style: solid !important;
      border-width: 1px !important;
      display: block !important;
      font-size: 25px !important;
      font-weight: normal !important;
      margin-bottom: 1.11111rem !important;
      padding: 0.77778rem 1.33333rem 0.77778rem 0.77778rem !important;
      position: relative !important;
      transition: opacity 300ms ease-out !important;
      background-color: rgba(239,66,36,0.85) !important;
      color: #FFFFFF !important;
    }
    .title
    {
       background-color: #e6e6e6;
      font-family: verdana !important;
      color: #FFFFFF;
      text-align: center;
      font-weight: bold;
      font-size: 15px;
    }
      .side-nav
      {
        list-style-type: none;
      }
    
    h2{
      font-family: :Microsoft Yi Baiti !important;
      font-size: 50px;
      text-align: center;
      color: #FFFFFF;
    }
    h3{
      font-family: :Microsoft Yi Baiti !important;
      font-size: 30px;
      text-align: center;
      color: #FFFFFF;
    }
    p
    {
      font-size: 18px;
      color: #FFFFFF;
    }
    .description
    {
      color: #000;
      font-family: arial !important;
    }
  </style>
</head>
<body>
    <div class="container">
      <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle="example-menu"></button>
        <div class="title-bar-title">Menu</div>        
      </div>

      <div class="top-bar" id="example-menu">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text"><?php echo anchor("dashboard",'BLOGGING SYSTEM');?></li>
            <li>
              <a href="#">Setting</a>
              <ul class="menu vertical">
                <li><?php echo anchor("welcome/logout",'Logout');?></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="top-bar-right">
          
        </div>
      </div>
    </div>
</body>
  </html>