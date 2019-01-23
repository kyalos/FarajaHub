<?php
class Darktheme extends CI_Controller{
	public function __construct() {
		parent::__construct();
    $this->load->model('post_model');
    $this->load->library('session');
    $this->load->library('pagination');
}
public function view($page= 'homedark'){
  if($this->session->userdata('loginstate')) {
		   $data['posts']=$this->post_model->get_story();
       $data['po']=$this->post_model->get_story_slider();
       $data['categories'] = $this->post_model->get_categories();
       $data['p']=$this->post_model->get_posts();
       $this->load->view('templates/darkthemeheader');
       $this->load->view('pages/homedarklogged',$data);
       $this->load->view('templates/darkthemefooter');
  }
  else
  {
    $data['posts']=$this->post_model->get_story();
       $data['categories'] = $this->post_model->get_categories();
       $data['p']=$this->post_model->get_posts();
       $this->load->view('templates/darkthemeheader');
       $this->load->view('pages/homedark',$data);
       $this->load->view('templates/darkthemefooter');
  }
}
public function about($page= 'aboutus'){
  if($this->session->userdata('loginstate')) {
    $data['posts']=$this->post_model->get_posts();
    $data['categories'] = $this->post_model->get_categories();
    $this->load->view('templates/darkthemeheader');
    $this->load->view('pages/aboutuslogged',$data);
    $this->load->view('templates/darkthemefooter');
  }
  else{
    $this->session->set_userdata('current_url', 'pages/about');
    $data['posts']=$this->post_model->get_posts();
    $data['categories'] = $this->post_model->get_categories();
    $this->load->view('templates/darkthemeheader');
    $this->load->view('pages/aboutus',$data);
    $this->load->view('templates/darkthemefooter');
  }
}
public function contact(){
  if($this->session->userdata('loginstate')) {
    $data['p']=$this->post_model->get_posts();
    $data['posts'] = $this->post_model->get_categories();
    $this->load->view('templates/darkthemeheader');
    $this->load->view('pages/contactuslogged',$data);
    $this->load->view('templates/darkthemefooter');
  }
  else{
    $data['p']=$this->post_model->get_posts();
    $data['posts'] = $this->post_model->get_categories();
    $this->load->view('templates/darkthemeheader');
    $this->load->view('pages/contactus',$data);
    $this->load->view('templates/darkthemefooter');
  }
}
public function list($page= 'listpost'){
     if($this->session->userdata('loginstate')) {
          $data['p']=$this->post_model->get_list();
          $data['categories'] = $this->post_model->get_categories();
          $this->load->view('templates/darkthemeheader');
          $this->load->view('pages/listlogged',$data);
          $this->load->view('templates/darkthemefooter');
       }
     else{
          $data['p']=$this->post_model->get_list();
          $data['categories'] = $this->post_model->get_categories();
          $this->load->view('templates/darkthemeheader');
          $this->load->view('pages/listpost',$data);
          $this->load->view('templates/darkthemefooter');
        }
    }
public function reading(){
$config = array();
$config["base_url"] = base_url() . "index.php/pagination_controller/contact_info";
$total_row = $this->post_model->record_count();
$config["total_rows"] = $total_row;
$config["per_page"] = 1;
$config['use_page_numbers'] = TRUE;
$config['num_links'] = $total_row;
$config['cur_tag_open'] = '&nbsp;<a class="current">';
$config['cur_tag_close'] = '</a>';
$config['next_link'] = 'Next';
$config['prev_link'] = 'Previous';

$this->pagination->initialize($config);
if($this->uri->segment(3)){
$page = ($this->uri->segment(3)) ;
}
else{
$page = 1;
}
$data["results"] = $this->post_model->fetch_posts($config["per_page"], $page);
$str_links = $this->pagination->create_links();
$data["links"] = explode('&nbsp;',$str_links );
     if($this->session->userdata ('loginstate')) {
          $data['categories'] = $this->post_model->get_categories();
          $data['posts']=$this->post_model->get_itsess();
          // $story_id = $this->post_model->get_story_id();
          $data['comm']=$this->post_model->get_comments();
          $data['com']=$this->post_model->count_comments();
          $data['p']=$this->post_model->get_postssess();
          $this->load->view('templates/darkthemeheader');
          $this->load->view('pages/readinginterfacelogged',$data);
          $this->load->view('templates/darkthemefooter');
        }
else{
    $data['categories'] = $this->post_model->get_categories();
    $data['posts']=$this->post_model->get_it();
    // $story_id = $this->post_model->get_story_id();
    $data['comm'] =$this->post_model->get_comments();
    $data['com'] =$this->post_model->count_comments();
    $data['p'] =$this->post_model->get_posts();
    $this->load->view('templates/darkthemeheader');
    $this->load->view('pages/readinginterface',$data);
    $this->load->view('templates/darkthemefooter'); 
}
}
public function cat()
{
  $this->load->view('templates/darkthemeheader');
  $this->load->view('pages/categories');
  $this->load->view('templates/darkthemefooter'); 
}
public function category($article_url){
  if($this->session->userdata('loginstate')) {      
     $data['posts'] = $this->post_model->get_story_category_posts($article_url);
     $data['comm']=$this->post_model->get_comments();
     $data['com']=$this->post_model->count_comments();
      $this->load->view('templates/darkthemeheader');
      $this->load->view('pages/readinginterfacelogged',$data);
      $this->load->view('templates/darkthemefooter');
}
else{
    $this->session->set_userdata('current_url', 'pages/category/'.$article_url);
     $data['posts'] = $this->post_model->get_story_category_posts($article_url);
     $data['comm']=$this->post_model->get_comments();
     $data['com']=$this->post_model->count_comments();
     $this->load->view('templates/darkthemeheader');
     $this->load->view('pages/readinginterface',$data);
     $this->load->view('templates/darkthemefooter');
}
}
public function rememberpass(){
    
     $data['posts'] = $this->post_model->get_story_category_posts($article_url);
     $data['comm']=$this->post_model->get_comments();
     $data['com']=$this->post_model->count_comments();
      $this->load->view('templates/darkthemeheader');
      $this->load->view('pages/rememberpass',$data);
      $this->load->view('templates/darkthemefooter');

}
function login(){
   $query = $this->post_model->validate();

   if($query['res'] == true){
     $this->session->set_userdata('loginstate', TRUE);
     $this->session->set_userdata('user_id', $query['user_id']);
     $this->session->set_userdata('email', $query['email']);
     $this->session->set_userdata('firstname', $query['firstname']);
     $this->session->set_userdata('secondname', $query['secondname']); 
     $this->session->set_userdata('profile_image', $query['profile_image']);    
     
     if($this->session->userdata('current_url')) {
      redirect($this->session->userdata('current_url'));
     }else{

      redirect('pages/list');
     // $data['p'] = $this->post_model->get_list();
     // $data['categories'] = $this->post_model->get_categories();
     // $this->load->view('templates/darkthemeheader');
     // $this->load->view('pages/listpost', $data);
     // $this->load->view('templates/darkthemefooter');

     }
   }
   else{
     $data['categories'] = $this->post_model->get_categories();
     $data['incorrect'] = 'Invalid credentials';
     $data['loginstate'] = FALSE;
     $this->load->view('templates/darkthemeheader');
     $this->load->view('pages/login',$data);
   }
  }
  function logout(){
   $this->session->sess_destroy();
   $this->load->view('templates/darkthemeheader');
   $this->load->view('pages/login'); 
  }
  function story_category_posts($story_category){
  $data['title'] = $story_category;
  $data['posts'] = $this->post_model->get_story_category_posts($story_category);
  $this->load->view('templates/darkthemeheader');
    $this->load->view('pages/list');
    $this->load->view('templates/darkthemefooter');

}
function latest_story_posts()
{
  $data['posts'] = $this->post_model->get_story($_category);
    $this->load->view('templates/darkthemeheader');
    $this->load->view('pages/view', $data);
    $this->load->view('templates/darkthemefooter');
}
}
?>