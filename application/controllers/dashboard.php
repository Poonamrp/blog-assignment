<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->model('queries');
		$records= $this->queries->getposts();
		$this->load->view('dashboard',['records'=>$records]);
	}
	public function addPost()
	{
		$userid= $this->session->userdata('userid');
		if($userid)
		{
			return redirect('welcome');
		}
		$this->load->view('addPost');
	}
	public function publishPost()
	{
		$config = [
			'upload_path'=>'./uploads',
			'allowed_types'=>'gif|jpg|png|jpeg',
		];
		$this->load->library('upload',$config);
		$this->form_validation->set_rules('post_title','POST Title','required');
		$this->form_validation->set_rules('post_description','POST Description','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run() && $this->upload->do_upload())
		{
			$data=$this->input->post();
			$info=$this->upload->data();
			$image_path=base_url("uploads/".$info['raw_name'].$info['file_ext']);
			$data['post_image']=$image_path;
			unset($data['submit']);
			$this->load ->model('queries');
			//print_r($data);
			//exit();
			if($this->queries->insertPost($data))
			{
				$this->session->set_flashdata('response','Post Published Successfully');
			}	
			else
			{
				$this->session->set_flashdata('response','Failed to Publish Post');
			}
			return redirect('dashboard');
		}
		else
		{
			$this->addPost();
		}
	}

	public function post($postid)
	{//echo $postid;
		$this->load->model('queries');
		$posts = $this->queries->getSinglePost($postid);
		$this->load->view('post',['posts'=>$posts]);
	}

	public function editpost($postid)
	{
		$this->load->model('queries');
		$posts= $this->queries->getSinglePost($postid);
		$this->load->view('editpost',['posts'=>$posts]);
	}

	public function updatePost($postid)
	{
		$config=[
			'upload_path'=>'./uploads',
			'allowed_types'=>'gif|jpg|png|jpeg',
		];
		$this->load->library('upload',$config);
		$this->form_validation->set_rules('post_title','POST Title','required');
		$this->form_validation->set_rules('post_description','POST Description','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run() && $this->upload->do_upload())
		{
			$data=$this->input->post();
			$info=$this->upload->data();
			$image_path=base_url("uploads/".$info['raw_name'].$info['file_ext']);
			$data['post_image']=$image_path;
			unset($data['submit']);
			$this->load ->model('queries');
			//print_r($data);
			//exit();
			if($this->queries->updateThePost($data, $postid))
			{
				$this->session->set_flashdata('response','Post Updated Successfully');
			}	
			else
			{
				$this->session->set_flashdata('response','Failed to Update Post');
			}
			return redirect('dashboard');
		}
		else
		{
			$this->editpost();
		}

	}

	public function deletepost($postid)
	{
		$this ->load->model('queries');
		if($this->queries->deleteThePost($postid))
		{
			$this->session->set_flashdata('response','Post Deleted Successfully');
		}	
		else
		{
			$this->session->set_flashdata('response','Failed to Delete Post');
		}
		return redirect('dashboard');
	}

	

}
?>