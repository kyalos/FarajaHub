<?php
class Post_model extends CI_Model{
	public function __constrget_get_uct(){
		$this->load->database();
		$this->load->dbforge();
		$this->load->library('session');
	}
	public function get_posts(){
			$this->db->order_by("story_id","desc");
			$q =$this->db->get('posts',2);
			return $q->result();
		}
	public function get_postssess(){
			$this->db->order_by("story_id","desc");
			$query =$this->db->get('posts',2);
            $ud=$this->session->userdata('user_id');
            $this->db->where( array('user_id'=>$ud));
			return $query->result();
		}
	public function get_it(){ 
          $this->db->select('*'); 
          $this->db->from('posts');
          $this->db->join('categories', 'posts.category_id= categories.category_id');
          // $this->db->join('comments', 'posts.comment_id = comments.comment_id');
          $this->db->join('user', 'posts.user_id = user.user_id');
          $this->db->limit('1');
          $this->db->order_by("posts.story_id","desc");
          $query = $this->db->get();
          return $query->result();
	}
	public function get_story_id(){ 
          $this->db->select('story_id'); 
          $this->db->from('posts');
          $this->db->join('comments', 'posts.comment_id = comments.comment_id');
          $this->db->join('user', 'posts.user_id = user.user_id');
          $this->db->limit('1');
          $query = $this->db->get();
          return $query->result();
	}
	public function get_list(){ 
          $this->db->select('*'); 
          $this->db->from('posts');
          $this->db->join('categories', 'posts.category_id= categories.category_id');
          $this->db->join('comments', 'posts.comment_id = comments.comment_id');
          $this->db->join('user', 'posts.user_id = user.user_id');
          $this->db->limit('4');
          $this->db->order_by("posts.story_id","desc");
          $query = $this->db->get();
          return $query->result();
	}
	// public function get_after_logged(){ 
 //          $this->db->select('*'); 
 //          $this->db->from('posts');
 //          $this->db->join('categories', 'posts.category_id= categories.category_id');
 //          $this->db->join('comments', 'posts.comment_id = comments.comment_id');
 //          $this->db->join('user', 'posts.user_id = user.user_id');
 //          $this->db->limit('10');
 //          $query =$this->db->get('posts');
 //          return $query->result();
 //      }
	public function get_itsess(){
		// user.firstname,user.secondname comments.comment 
          $this->db->select('*'); 
          $this->db->from('posts');
          $this->db->join('categories', 'posts.category_id= categories.category_id');
          $this->db->join('comments', 'posts.comment_id = comments.comment_id');
          $this->db->join('user', 'posts.user_id = user.user_id');
          $this->db->limit('1');
          $ud=$this->session->userdata('user_id');
          $this->db->where( array('posts.user_id'=>$ud));
          $query = $this->db->get();
          return $query->result();
	}	
	// public function gallery()
	// {
	// 	for ($n = 0; $n < $length; $n++) {
	// $fields = array(
 //        'gallery'.$n => array('type' => 'varchar(40)', 'after' => 'gallery'.$n-1)
 //       );
 //        $this->dbforge->add_column('user', $fields);

	// }


// $this->db->select('*');
//         $this->db->from('posts');
//           $this->db->join('categories', 'posts.category_id= categories.category_id');
//           //$this->db->join('comments', 'posts.comment_id = comments.comment_id');
//           $this->db->join('user', 'posts.user_id = user.user_id');
//           $this->db->where( array('posts.article_url'=>$article_url));
// 		$query =$this->db->get();
// 		return $query->result();

// 	}


	public function get_similar_category_posts($category_id)
	{
     $this->db->select('*');
     $this->db->order_by("category_id","desc");
     $this->db->from('posts',3);
     $this->db->join('categories', 'posts.category_id= categories.category_id');
     $this->db->join('comments', 'posts.comment_id = comments.comment_id');
     $this->db->join('user', 'posts.user_id = user.user_id');
     $this->db->where( array('posts.category_id'=>$category_id));
     $query = $this->db->get();
     return $query->result();
    }
	public function get_category_posts($article_url){
		$this->db->select('*');
        $this->db->from('posts');
          $this->db->join('categories', 'posts.category_id= categories.category_id');
          //$this->db->join('comments', 'posts.comment_id = comments.comment_id');
          $this->db->join('user', 'posts.user_id = user.user_id');
          $this->db->where( array('posts.article_url'=>$article_url));
        $this->db->limit('1');
		$query =$this->db->get();
		return $query->result();
	}

  public function get_related_posts($article_url){
         $category_id = 0; 
          $this->db->select('category_id');
          $this->db->from('posts');
          $this->db->where( array('posts.article_url'=>$article_url));
          $query =$this->db->get();
          $result = $query->result();

     foreach ($result as $row){
        $category_id = $row->category_id;
      }

    $this->db->select('*');
        $this->db->from('posts');
          $this->db->join('categories', 'posts.category_id= categories.category_id');
          //$this->db->join('comments', 'posts.comment_id = comments.comment_id');
          $this->db->join('user', 'posts.user_id = user.user_id');
          $this->db->where( array('posts.category_id'=>$category_id));
        $this->db->limit('3');
    $query =$this->db->get();
    return $query->result(); 
  }
	  	public function get_story_category_posts($category_id){
   		$cat_id = $category_id;
   		  $this->db->select('*');
          $this->db->from('posts');
          $this->db->join('categories', 'posts.category_id = categories.category_id');
          $this->db->join('user', 'posts.user_id = user.user_id');
          $this->db->where( array('posts.category_id'=>$cat_id));
		  $this->db->order_by("story_id","desc");
		  $query =$this->db->get();
		  return $query->result();
	}
	public function get_authors_posts($user_id){
		$this->db->select('*');
        $this->db->from('posts');
          $this->db->join('categories', 'posts.category_id= categories.category_id');
          $this->db->join('user', 'posts.user_id = user.user_id');
          $this->db->where( array('posts.user_id'=>$user_id));
		$query =$this->db->get();
		return $query->result();
	}
	
	// public function get_story_category_postssess($story_category){
	// 	$this->db->select('*');
 //        $this->db->from('posts');
 //        $this->db->join('categories', 'posts.story_category = categories.story_category');
 //        $this->db->join('comments', 'posts.story_category = comments.story_category');
 //        $this->db->join('user', 'posts.story_category = user.story_category');
 //        $this->db->order_by("story_id","desc");
 //        $this->db->limit('6');
 //        $ud=$this->session->userdata('user_id');
 //        $this->db->where( array('posts.user_id'=>$ud));
	// 	$query =$this->db->get();
	// 	return $query->result();
	// }
	public function get_story(){
          $this->db->select('*');
          $this->db->from('posts');
          $this->db->join('categories', 'posts.category_id = categories.category_id');
          $this->db->join('user', 'posts.user_id = user.user_id');
          $this->db->order_by("posts.story_id","desc");
          $this->db->limit('6');
          $query = $this->db->get();
          return $query->result();
       }
       public function get_story_slider(){
          $this->db->select('*');
          $this->db->from('posts');
          $this->db->join('categories', 'posts.category_id = categories.category_id');
          $this->db->join('user', 'posts.user_id = user.user_id');
          $this->db->order_by("posts.story_id","desc");
          $this->db->limit('6');
          $query = $this->db->get();
          return $query->result();
       }
       public function get_storysess(){
          $this->db->select('*');
          $this->db->from('posts');
          $this->db->join('categories', 'posts.category_id= categories.category_id');
          $this->db->join('comments', 'posts.comment_id = comments.comment_id');
          $this->db->join('user', 'posts.user_id = user.user_id');
          $this->db->order_by("story_id","desc");
          $this->db->limit('6');
          $ud=$this->session->userdata('user_id');
          $this->db->where( array('posts.user_id'=>$ud));
          $query = $this->db->get();
          return $query->result();
       }
    public function get_categories(){
       $this->db->select("*");
       $this->db->from('categories');
       $query = $this->db->get();
       return $query->result();
       } 
    public function get_color_theme()
    {
    	$colortheme = 0;

    	$this->db->select("colorvalue");
    	$this->db->from('colortheme');
    	$query = $this->db->get();
    	$result = $query->result();

    	foreach ($result as $row){
    		$colorvalue = $row->colorvalue;
    	}

    	return $colorvalue;
    }
    public function change_color_theme($colorval)
    {
      $i = 1;
      $this->db->select("colorvalue");
      $this->db->from('colortheme');
	    $this->db->where('colorid', $i);
	    return $this->db->update('colorval', $colorval);
    }      
	// public function create_post()
	// {
	// 	$slug = url_title($this->input->post('title'));  
	// 	$data =array('slug' =>$slug,'story_category'=> $this->input->posts('story_category'), 'slug' =>$slug,'title'=> $this->input->post('title' ), 'slug' =>$slug, 'body' =>$this->input->post('body'));

	// 		return $this->db->insert('post', $data);
	// }

	function save_article($data){
		$insert = $this->db->insert('posts',$data);
		$insert_id = $this->db->insert_id();
		if ($insert){
			$res = $this->do_upload($insert_id);
            $r= $this->emphasis_upload($insert_id);
			if ($res['result'] && $r['result'] == true){
				$array_return = array('result'=>true,'message'=>'Saved and uploaded image successfully');				
			}else{
				$array_return = array('result'=>false,'message'=>'Saved but did not upload image successfully. ' . $res['message']);
				redirect('pages/reading');
			}

		}else{
			$array_return = array('result'=>false,'message'=>'Could not save article successfully. Please try again.');
			redirect('posts/write');
		}

		return $array_return;
	}
	public function do_upload($id){
		for ($i = 1; $i <= 3; $i++) 
		{
			if(basename($_FILES['story_image'.$i]['name'])!=''){
			$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "2048000",
				'max_height' => "0",
				'max_width' => "0"
			);
             $this->load->library('upload');
			$this->upload->initialize($config);

			if($this->upload->do_upload('story_image'.$i)){
				$dt = $this->upload->data();
				$this->db->where(array('story_id'=>$id));
				$this->db->update('posts',array('story_image'.$i=>$dt['file_name']));

				$array_return = array('result'=>true,'message'=>'Image uploaded successfully');
				//$data = array('upload_data' => $this->upload->data());
				//$this->load->view('upload_success',$data);
			}else{
				$array_return = array('result'=>false, 'message'=>$this->upload->display_errors());
				//$error = array('error' => $this->upload->display_errors());
				//$this->load->view('custom_view', $error);
			}

		}
	}

		return $array_return;
	}
	public function emphasis_upload($id){
		if (basename($_FILES['emphasis']['name']) != ''){
			
			$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
				'max_height' => "0",
				'max_width' => "0"
			);

			$this->load->library('upload');
			$this->upload->initialize($config);

			if($this->upload->do_upload('emphasis')){
				$dt = $this->upload->data();

				$this->db->where(array('story_id'=>$id));
				$this->db->update('posts',array('emphasis'=>$dt['file_name']));

				$array_return = array('result'=>true,'message'=>'Image uploaded successfully');
				//$data = array('upload_data' => $this->upload->data());
				//$this->load->view('upload_success',$data);
			}else{
				$array_return = array('result'=>false, 'message'=>$this->upload->display_errors());
				//$error = array('error' => $this->upload->display_errors());
				//$this->load->view('custom_view', $error);
			}

		}

		return $array_return;
	}
function find_posts(){
       $this->db->from('posts');
       return $this->db->get()->result();
      $ud=$this->session->userdata('user_id');
      $this->db->where( array('posts.user_id'=>$ud));
   }
function validate(){		
		$user_password = $this->input->post('user_password');
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('user_password', $user_password);
		
		$query = $this->db->get('user');
		
		if($query->num_rows() == 1){
			$data = array (				
				'last_update' => date("m/d/Y", time())
			);
			foreach ($query->result() as $row){
				$user_id = $row->user_id;
				$email = $row->email;
				$firstname=  $row->firstname;
				$secondname= $row->secondname;
				$profile_image = $row->profile_image;
			}			
			$arr_return = array('user_id' => $user_id, 'firstname' => $firstname, 'secondname' => $secondname, 'email' => $email, 'profile_image' => $profile_image, 'res' => true);			
			return $arr_return;			
			
			return true;
		}else{
			$arr_return = array('user_id' => '', 'email' => '', 'firstname' => '' , 'secondname' => '', 'profile_image' => '','res' => false);			
			return $arr_return;
		}
	}
	function findpassword()
	{
		$this->db->from('user');
       return $this->db->get()->result();
      $email=$this->session->userdata('email');
      $this->db->where( array('user.password'=>$email));
	}
	public function commentus_post($data)
	{
      return $this->db->insert('comments', $data);
    }
    public function contactus_post($data)
	{
            return $this->db->insert('message', $data);
    }
    public function record_count() {
        return $this->db->count_all("posts");
    }
     // Fetch data according to per_page limit.
public function fetch_posts($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("posts");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   public function login_list()
   {

   }
   public function verify_user($email) {
	        $data = array('is_verified' => 1);
	        $this->db->where('email', $email);
	        $this->db->update('users', $data);
	    }
   public function count_comments(/*$story_id*/) {
        return $this->db->count_all("comments");
        // $this->db->where(array('story_id'=>$story_id));
        // $query = $this->db->get();
        // return $query->result();
    }
   public function get_comments($article_url)
   {
   	      $story_id = 0;
   	      $this->db->select('story_id');
          $this->db->from('posts');
          $this->db->where(array('article_url'=>$article_url));
         $query = $this->db->get();
    	   $result = $query->result();

    	foreach ($result as $row){
    		$story_id = $row->story_id;
    	}

          $this->db->select('*');
          $this->db->from('comments');
          $this->db->order_by("comment_id","desc");
          $this->db->limit('3');
          $this->db->where(array('story_id'=>$story_id));
          $query = $this->db->get();
          return $query->result();
}
}
?>