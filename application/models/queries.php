<?php 
class Queries extends CI_Model{

	public function register($data)
	{
		return $this->db->insert('tbl_users',$data);
	}

	public function login($email,$password)
	{
		$query=$this->db->where(['email'=>$email,'password'=>$password])
							->get('tbl_users');
		if($query->num_rows()>0)
		{
			return $query->row();
		}					
	}

	public function insertPost($data)
	{
		return $this->db->insert('tbl_posts',$data);
	}

	public function getposts()
	{
		$this->db->select('*');
		$this->db->from('tbl_posts');
		$this->db->order_by("post_id","DESC");
		$query= $this->db->get();
		return $query->result();
	}


	public function getSinglePost($postid)
	{
		$query= $this->db->where(['post_id'=>$postid])
 						->get('tbl_posts');
 		if($query->num_rows()>0)
 		{
 			return $query->row();
 		}
	}

	public function updateThePost($data,$postid)
	{
		
		return $this->db->where('post_id',$postid)
						->update('tbl_posts',$data);
	}

	public function deleteThePost($postid)
	{
		return $this->db->delete('tbl_posts',['post_id'=>$postid]);
	}
}

?>