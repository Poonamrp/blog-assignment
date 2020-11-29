<?php include('header.php');?>
	<div class="container">
	<div class="row">
		<div class="small-12 medium-6 large-3 columns">
			<ul class="side-nav">
				<?php $username =$this->session->userdata('username')?>
				<li><h3 class="greeting"> Welcome <?php echo $username;?></h3></li>
				<hr>
				<li><?php echo anchor("dashboard/addPost", 'ADD BLOG POST');?></li>
			</ul>
		</div>
	</div>
		<div class="small-12 medium-6 large-9 columns">
		<h3>ADD NEW POST</h3>
	</div>
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<?php echo form_open_multipart('dashboard/publishPost',['class'=>'form-horizontal']);?>
				<p>Title
				<?php echo form_input(['name'=>'post_title','placeholder'=>'Title','value'=>set_value('post_title')]);?>
				<?php echo form_error('post_title','<div class="text-danger">','</div>');?>
				</p>
				<p>
 					Description
					<?php echo form_textarea(['name'=>'post_description','placeholder'=>'Description','value'=>set_value('post_description')]);?>
					<?php echo form_error('post_description','<div class="text-danger">','</div>');?>
				</p>
				<p>
					<?php echo form_upload(['name'=>'userfile','value'=>'Save','class'=>'primary button']);?>
					<?php echo form_error('userfile','<div class="text-danger">','</div>');?>
				</p>
					<?php echo form_submit(['name'=>'submit','value'=>'PUBLISH POST','class'=>'hollow button success']);?>
				<p>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
	</div>
<?php include('footer.php');?>