<?php include('header.php');?>
	<div class="container">
	<div class="row" style="margin-top:25px;">
		<?php $userid =$this->session->userdata('userid')?>
		<?php $username =$this->session->userdata('username')?>
		<div class="small-12 medium-6 large-3 columns">
			<ul class="side-nav">
				<li><h3 class="greeting"> Welcome <?php echo $username;?></h3></li>
				<hr>
				<li><?php echo anchor("dashboard/addPost", 'ADD BLOG POST');?></li>
			</ul>
		</div>
		<div class="small-12 medium-8 large-9 columns">
				<div class="row">
					<p class="title"><?php echo $posts->post_title;?></p>
				</div>
				<div class="row">
					<img class="small-12 medium-4 large-3 columns" src=<?php echo $posts->post_image;?>>
					</div>
					<hr>
					<div class="row">						
						<p class="description"><?php echo $posts->post_description;?></p>
					</div>					
		</div>
	</div>
	</div>
<?php include('footer.php');?>