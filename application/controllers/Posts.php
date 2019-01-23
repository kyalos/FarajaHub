<?php
class Posts extends CI_Controller{

public function __construct() {
		parent::__construct();
		$this->load->model('post_model');
    $this->load->library('session');
    $this->load->library('pagination');
	}
	public function index(){
$data['posts'] = $this->post_model->get_posts();
    $this->load->view('templates/newheader');
    $this->load->view('pages/',$data);
    $this->load->view('templates/newfooter');
}
public function create()
{
   $article_url = url_title($this->input->post('title'),'-',TRUE);
	 $this->form_validation->set_rules('story_category', 'Story_category','required');
	 $this->form_validation->set_rules('title', 'Title', 'required');
	 $this->form_validation->set_rules('content', 'Content','required');
	 if($this->form_validation->run() == FALSE)
	 {
      $data = array(
      'article_url'=>$article_url,
      'user_id'=>$this->session->userdata('user_id'),
      'category_id'=>$this->input->post('category_id'),
      'title' => $this->input->post('title'),
      'content' => $this->input->post('content'),
      'content1' => $this->input->post('content1')
    );
    $res = $this->post_model->save_article($data);
    redirect('posts/write');
	 }
	else
	{
    $this->load->view('templates/newheader');
    $this->load->view('pages/home');
    $this->load->view('templates/newfooter');   
	}
}
public function contactus()
{
	 $this->form_validation->set_rules('Message', 'Message', 'required');
   $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	 $this->form_validation->set_rules('subject', 'Subject', 'required');
	 if($this->form_validation->run() !== FALSE)
	 {
	   if($this->session->userdata('loginstate')) {
           $data['categories'] = $this->post_model->get_categories();
           // $data['posts']=$this->post_model->get_itsess();
           $data['p']=$this->post_model->get_postssess();
           $this->load->view('templates/newheader');
           $this->load->view('pages/contactuslogged',$data);
           $this->load->view('templates/newfooter');
    }
else{
          $data['categories'] = $this->post_model->get_categories();
          // $data['posts']=$this->post_model->get_it();
          $data['p']=$this->post_model->get_posts();
          $this->load->view('templates/newheader');
          $this->load->view('pages/contactus',$data);
          $this->load->view('templates/newfooter'); 
    }
	 }
	else
	{
    $data = array(
        'message' => $this->input->post('message'),
        'email' => $this->input->post('email'),
        'subject' => $this->input->post('subject')
      );
		$this->post_model->contactus_post($data);
        if($this->session->userdata('loginstate')) {
           $data['categories'] = $this->post_model->get_categories();
           $data['posts']=$this->post_model->get_itsess();
           $data['p']=$this->post_model->get_postssess();
           $this->load->view('templates/newheader');
           $this->load->view('pages/contactuslogged',$data);
           $this->load->view('templates/newfooter');
    }
else{  
           $data = array(
            'message' => $this->input->post('message'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject')
          );
          $this->post_model->contactus_post($data);
          $data['categories'] = $this->post_model->get_categories();
          $data['posts']=$this->post_model->get_it();
          $data['p']=$this->post_model->get_posts();
          $this->load->view('templates/newheader');
          $this->load->view('pages/contactus',$data);
          $this->load->view('templates/newfooter'); 
    }
   }
 }
 public function commentus()
{
	 $this->form_validation->set_rules('comment', 'Comment', 'required');
	 $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	 $this->form_validation->set_rules('website','Website');
	 if($this->form_validation->run() !== FALSE)
	 {
	   if($this->session->userdata('loginstate')) {
           $current_url= current_url();
           $data['categories'] = $this->post_model->get_categories();
           $data['posts']=$this->post_model->get_itsess();
           $data['p']=$this->post_model->get_postssess();
           $this->load->view('templates/newheader');
           $this->load->view('$current_url',$data);
           $this->load->view('templates/newfooter');
    }
else{
          $data['categories'] = $this->post_model->get_categories();
          $data['posts']=$this->post_model->get_it();
          $data['p']=$this->post_model->get_posts();
          $this->load->view('templates/newheader');
          $this->load->view('$current_url',$data);
          $this->load->view('templates/newfooter'); 
    }
	 
     $data = array(
              'comment' => $this->input->post('comment'),
              'email' => $this->input->post('email'),
              'website' => $this->input->post('website')
      );
		$this->post_model->commentus_post($data);
		if($this->session->userdata('loginstate')) {
           $data['categories'] = $this->post_model->get_categories();
           $data['posts']=$this->post_model->get_itsess();
           $data['p']=$this->post_model->get_postssess();
           $this->load->view('templates/newheader');
           $this->load->view('$current_url',$data);
           $this->load->view('templates/newfooter');
    }
else{
      $data = array(
              'comment' => $this->input->post('comment'),
              'email' => $this->input->post('email'),
              'website' => $this->input->post('website')
      );
          $this->post_model->commentus_post($data);
          $data['categories'] = $this->post_model->get_categories();
          $data['posts']=$this->post_model->get_it();
          $data['p']=$this->post_model->get_posts();
          $this->load->view('templates/newheader');
          $this->load->view('$current_url',$data);
          $this->load->view('templates/newfooter'); 
    }
        
   }
 }
 public function write($page= 'write'){
  if($this->session->userdata('loginstate')) {
    $data['firstname']=$this->session->userdata('firstname');
    $data['secondname']=$this->session->userdata('secondname');
    $data['categories']= $this->post_model->get_categories();
    $data['posts']=$this->post_model->get_posts();
    $this->load->view('templates/newheader');
    $this->load->view('pages/write',$data);
    $this->load->view('templates/newfooter');
  }
  else{
    $this->session->set_userdata('current_url', 'posts/write');
    $data['categories']= $this->post_model->get_categories();
    $this->load->view('templates/newheader');
    $this->load->view('pages/login',$data);
    $this->load->view('templates/newfooter');

  }
}
  public function category_posts($category_id){
  if($this->session->userdata('loginstate'))
    {
  $data['cat'] = $category_id;
  $data['posts'] = $this->post_model->get_category_posts($category_id);
  $this->load->view('templates/newheader');
  $this->load->view('pages/category_posts', $data);
  $this->load->view('templates/newfooter');
}
else
{
  $data['cat'] = $category_id;
  $data['posts'] = $this->post_model->get_category_posts($category_id);
  $this->load->view('templates/newheader');
  $this->load->view('pages/category_posts', $data);
  $this->load->view('templates/newfooter'); 
}
}
public function category_posts_darktheme($category_id){
  if($this->session->userdata('loginstate'))
    {
  $data['cat'] = $category_id;
  $data['posts'] = $this->post_model->get_category_posts($category_id);
  $this->load->view('templates/darkthemenewheader');
  $this->load->view('pages/category_posts_darktheme', $data);
  $this->load->view('templates/darkthemenewfooter');
}
else
{
  $data['cat'] = $category_id;
  $data['posts'] = $this->post_model->get_category_posts($category_id);
  $this->load->view('templates/darkthemenewheader');
  $this->load->view('pages/category_posts', $data);
  $this->load->view('templates/darkthemenewfooter'); 
}
}
 } 

?>