<?php
class Pages extends CI_Controller{
	public function __construct() {
		parent::__construct();
    $this->load->model('post_model');
    $this->load->library('session');
    $this->load->library('pagination');
}
public function view($page= 'home'){
  if($this->session->userdata('loginstate')) {

    $col =$this->post_model->get_color_theme();
      if($col != 0)
      {
		   $data['posts']=$this->post_model->get_story();
       $data['po']=$this->post_model->get_story_slider();
       $data['categories'] = $this->post_model->get_categories();
       $data['p']=$this->post_model->get_posts();
       $this->load->view('templates/darkthemeheader');
       $this->load->view('pages/homelogged',$data);
       $this->load->view('templates/darkthemefooter');
     }
     else
     {
      $data['posts']=$this->post_model->get_story();
       $data['po']=$this->post_model->get_story_slider();
       $data['categories'] = $this->post_model->get_categories();
       $data['p']=$this->post_model->get_posts();
       $this->load->view('templates/newheader');
       $this->load->view('pages/homelogged',$data);
       $this->load->view('templates/newfooter');
     }
  }
  else
  {
      $col =$this->post_model->get_color_theme();
      if($col != 0)
      {
       $data['posts']=$this->post_model->get_story();
       $data['categories'] = $this->post_model->get_categories();
       $data['p']=$this->post_model->get_posts();
       $this->load->view('templates/darkthemeheader');
       $this->load->view('pages/home',$data);
       $this->load->view('templates/darkthemefooter');
     }
     else
     {
      $data['posts']=$this->post_model->get_story();
      $data['categories'] = $this->post_model->get_categories();
      $data['p']=$this->post_model->get_posts();
       $this->load->view('templates/newheader');
       $this->load->view('pages/home',$data);
       $this->load->view('templates/newfooter');
     }
   }
}
public function about($user_id){
  if($this->session->userdata('loginstate')) {
    $col =$this->post_model->get_color_theme();
      if($col != 0)
      {
    $data['posts']=$this->post_model->get_posts();
    $data['author_posts'] = $this->post_model->get_authors_posts('user_id');
    $data['categories'] = $this->post_model->get_categories();
    $this->load->view('templates/darkthemeheader');
    $this->load->view('pages/aboutuslogged',$data);
    $this->load->view('templates/darkthemefooter');
  }
  else
  {
    $data['posts']=$this->post_model->get_posts();
    $data['author_posts'] = $this->post_model->get_authors_posts('user_id');
    $data['categories'] = $this->post_model->get_categories();
    $this->load->view('templates/newheader');
    $this->load->view('pages/aboutuslogged',$data);
    $this->load->view('templates/newfooter'); 
  }
  }
  else{
    $col =$this->post_model->get_color_theme();
      if($col != 0)
      {
    $this->session->set_userdata('current_url', 'pages/about');
    $data['posts']=$this->post_model->get_posts();
    $data['author_posts'] = $this->post_model->get_authors_posts('user_id');
    $data['categories'] = $this->post_model->get_categories();
    $this->load->view('templates/darkthemeheader');
    $this->load->view('pages/aboutus',$data);
    $this->load->view('templates/darkthemefooter');
  }
  else
  {
    $this->session->set_userdata('current_url', 'pages/about');
    $data['posts']=$this->post_model->get_posts();
    $data['author_posts'] = $this->post_model->get_authors_posts('user_id');
    $data['categories'] = $this->post_model->get_categories();
    $this->load->view('templates/newheader');
    $this->load->view('pages/aboutus',$data);
    $this->load->view('templates/newfooter');

  }
  }
}
public function contact(){
  if($this->session->userdata('loginstate')) {
    $col =$this->post_model->get_color_theme();
      if($col != 0)
      {
    $data['p']=$this->post_model->get_posts();
    $data['posts'] = $this->post_model->get_categories();
    $this->load->view('templates/darkthemeheader');
    $this->load->view('pages/contactuslogged',$data);
    $this->load->view('templates/darkthemefooter');
  }
  else
  {
     $data['p']=$this->post_model->get_posts();
    $data['posts'] = $this->post_model->get_categories();
    $this->load->view('templates/newheader');
    $this->load->view('pages/contactuslogged',$data);
    $this->load->view('templates/newfooter');
  }
  }
  else{
    $col =$this->post_model->get_color_theme();
      if($col != 0)
      {
    $data['p']=$this->post_model->get_posts();
    $data['posts'] = $this->post_model->get_categories();
    $this->load->view('templates/darkthemeheader');
    $this->load->view('pages/contactus',$data);
    $this->load->view('templates/darkthemefooter');
  }
  else
  {
    $data['p']=$this->post_model->get_posts();
    $data['posts'] = $this->post_model->get_categories();
    $this->load->view('templates/newheader');
    $this->load->view('pages/contactus',$data);
    $this->load->view('templates/newfooter');
  }
  }
}
public function list($page= 'listpost'){
     if($this->session->userdata('loginstate')) {
      $col =$this->post_model->get_color_theme();
      if($col != 0)
      {
          $data['p']=$this->post_model->get_list();
          $data['posts']=$this->post_model->get_story();
          $data['categories'] = $this->post_model->get_categories();
          $this->load->view('templates/darkthemeheader');
          $this->load->view('pages/listlogged',$data);
          $this->load->view('templates/darkthemefooter');
        }
        else
        {
          $data['p']=$this->post_model->get_list();
          $data['posts']=$this->post_model->get_story();
          $data['categories'] = $this->post_model->get_categories();
          $this->load->view('templates/newheader');
          $this->load->view('pages/listlogged',$data);
          $this->load->view('templates/newfooter');
        }
       }
     else{
      $col =$this->post_model->get_color_theme();
      if($col != 0)
      {
          $data['p']=$this->post_model->get_list();
          $data['posts']=$this->post_model->get_story();
          $data['categories'] = $this->post_model->get_categories();
          $this->load->view('templates/darkthemeheader');
          $this->load->view('pages/listpost',$data);
          $this->load->view('templates/darkthemefooter');
        }
        else
        {
          $data['p']=$this->post_model->get_list();
          $data['posts']=$this->post_model->get_story();
          $data['categories'] = $this->post_model->get_categories();
          $this->load->view('templates/newheader');
          $this->load->view('pages/listpost',$data);
          $this->load->view('templates/newfooter');
        }
}
    }
    public function rememberpass(){
      $col =$this->post_model->get_color_theme();
      if($col != 0)
      {
     $data['comm']=$this->post_model->get_comments();
     $data['com']=$this->post_model->count_comments();
      $this->load->view('templates/darkthemeheader');
      $this->load->view('pages/rememberpass',$data);
      $this->load->view('templates/darkthemefooter');
    }
    else
    {
      $data['comm']=$this->post_model->get_comments();
     $data['com']=$this->post_model->count_comments();
      $this->load->view('templates/newheader');
      $this->load->view('pages/rememberpass',$data);
      $this->load->view('templates/newfooter');
    }

}
// public function reading(){
// $config = array();
// $config["base_url"] = base_url() . "index.php/pagination_controller/contact_info";
// $total_row = $this->post_model->record_count();
// $config["total_rows"] = $total_row;
// $config["per_page"] = 1;
// $config['use_page_numbers'] = TRUE;
// $config['num_links'] = $total_row;
// $config['cur_tag_open'] = '&nbsp;<a class="current">';
// $config['cur_tag_close'] = '</a>';
// $config['next_link'] = 'Next';
// $config['prev_link'] = 'Previous';

// $this->pagination->initialize($config);
// if($this->uri->segment(3)){
// $page = ($this->uri->segment(3)) ;
// }
// else{
// $page = 1;
// }
// $data["results"] = $this->post_model->fetch_posts($config["per_page"], $page);
// $str_links = $this->pagination->create_links();
// $data["links"] = explode('&nbsp;',$str_links );
//      if($this->session->userdata ('loginstate')) {
//           $data['categories'] = $this->post_model->get_categories();
//           $data['posts']=$this->post_model->get_itsess();
//           // $story_id = $this->post_model->get_story_id();
//           $data['comm']=$this->post_model->get_comments();
//           $data['com']=$this->post_model->count_comments();
//           $data['p']=$this->post_model->get_postssess();
//           $this->load->view('templates/newheader');
//           $this->load->view('pages/readinginterfacelogged',$data);
//           $this->load->view('templates/newfooter');
//         }
// else{
//     $data['categories'] = $this->post_model->get_categories();
//     $data['posts']=$this->post_model->get_it();
//     // $story_id = $this->post_model->get_story_id();
//     $data['comm'] =$this->post_model->get_comments();
//     $data['com'] =$this->post_model->count_comments();
//     $data['p'] =$this->post_model->get_posts();
//     $this->load->view('templates/newheader');
//     $this->load->view('pages/readinginterface',$data);
//     $this->load->view('templates/newfooter'); 
// }
// }


public function newreading(){
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
      $col =$this->post_model->get_color_theme();
      if($col != 0)
      {
          $data['categories'] = $this->post_model->get_categories();
          $data['related'] = $this->post_model->get_story_category_posts($category);
          $data['posts']=$this->post_model->get_itsess();
          // $story_id = $this->post_model->get_story_id();
          $data['comm']=$this->post_model->get_comments();
          $data['com']=$this->post_model->count_comments();
          $data['p']=$this->post_model->get_postssess();
          $this->load->view('templates/darkthemeheader');
          $this->load->view('pages/readinginterfacelogged',$data);
          $this->load->view('templates/darkthemefooter');
        }
        else
        {
          $data['categories'] = $this->post_model->get_categories();
          $data['related'] = $this->post_model->get_story_category_posts($category);
          $data['posts']=$this->post_model->get_itsess();
          // $story_id = $this->post_model->get_story_id();
          $data['comm']=$this->post_model->get_comments();
          $data['com']=$this->post_model->count_comments();
          $data['p']=$this->post_model->get_postssess();
          $this->load->view('templates/newheader');
          $this->load->view('pages/readinginterfacelogged',$data);
          $this->load->view('templates/newfooter');
        }
        }
else{
  $col =$this->post_model->get_color_theme();
      if($col != 0)
      {
    $data['categories'] = $this->post_model->get_categories();
    $data['posts']=$this->post_model->get_it();
    // $story_id = $this->post_model->get_story_id();
    $data['comm'] =$this->post_model->get_comments();
    $data['related'] = $this->post_model->get_story_category_posts($category);
    $data['com'] = $this->post_model->count_comments();
    $data['p'] =$this->post_model->get_posts();
    $this->load->view('templates/darkthemeheader');
    $this->load->view('pages/newreadinginterface',$data);
    $this->load->view('templates/darkthemefooter'); 
  }
  else
  {
    $data['categories'] = $this->post_model->get_categories();
    $data['posts']=$this->post_model->get_it();
    // $story_id = $this->post_model->get_story_id();
    $data['comm'] =$this->post_model->get_comments();
    $data['related'] = $this->post_model->get_story_category_posts($category);
    $data['com'] = $this->post_model->count_comments();
    $data['p'] =$this->post_model->get_posts();
    $this->load->view('templates/newheader');
    $this->load->view('pages/newreadinginterface',$data);
    $this->load->view('templates/newfooter');
  }
 }
}


public function cat()
{
  $this->load->vnewiew('templates/newheader');
  $this->load->view('pages/categories');
  $this->load->view('templates/newfooter'); 
}
 function story_category_posts($category_id){
   if($this->session->userdata('loginstate')) {    
   $col =$this->post_model->get_color_theme();
      if($col != 0)
      {  
     $data['cat_posts'] = $this->post_model->get_story_category_posts($category_id);
     $data['comm']=$this->post_model->get_comments();
     $data['category'] =$this->post_model->get_categories();
     $data['com']=$this->post_model->count_comments();
     $data['posts']=$this->post_model->get_story();
      $this->load->view('templates/darkthemeheader');
      $this->load->view('pages/listlogged',$data);
      $this->load->view('templates/darkthemefooter');
    }
    else
    {
      $data['cat_posts'] = $this->post_model->get_story_category_posts($category_id);
     $data['comm']=$this->post_model->get_comments();
     $data['category'] =$this->post_model->get_categories();
     $data['com']=$this->post_model->count_comments();
     $data['posts']=$this->post_model->get_story();
      $this->load->view('templates/newheader');
      $this->load->view('pages/listlogged',$data);
      $this->load->view('templates/newfooter');
    }
}
else{
  $col =$this->post_model->get_color_theme();
      if($col != 0)
      {
    // $this->session->set_userdata('current_url', 'pages/category/'.$article_url);
     $data['cat_posts'] = $this->post_model->get_story_category_posts($category_id);
     $data['comm']=$this->post_model->get_comments();
     $data['posts']=$this->post_model->get_story();
     $data['com']=$this->post_model->count_comments();
     $data['categories'] =$this->post_model->get_categories();
     $this->load->view('templates/darkthemeheader');
     $this->load->view('pages/list',$data);
     $this->load->view('templates/darkthemefooter');
   }
   else
   {
    $data['cat_posts'] = $this->post_model->get_story_category_posts($category_id);
     $data['comm']=$this->post_model->get_comments();
     $data['com']=$this->post_model->count_comments();
     $data['posts']=$this->post_model->get_story();
     $data['categories'] =$this->post_model->get_categories();
     $this->load->view('templates/newheader');
     $this->load->view('pages/list',$data);
     $this->load->view('templates/newfooter');
   }
}
}
public function category($article_url){
  if($this->session->userdata('loginstate')) {   
  $col =$this->post_model->get_color_theme();
      if($col != 0)
      {   
     $data['posts'] = $this->post_model->get_category_posts($article_url);
     foreach ($result as $row){
        $category_id = $row->category_id;
      }
      $data['related'] = $this->post_model->get_similar_category_posts($category_id);
     $data['comm']=$this->post_model->get_comments($article_url);
     
     // $data['related'] = $this->post_model->get_related_posts($article_url);
     $data['category'] =$this->post_model->get_categories();
     $data['com']=$this->post_model->count_comments();
      $this->load->view('templates/darkthemeheader');
      $this->load->view('pages/readinginterfacelogged',$data);
      $this->load->view('templates/darkthemefooter');
    }
    else
    {
       $data['posts'] = $this->post_model->get_category_posts($article_url);
     $data['comm']=$this->post_model->get_comments($article_url);
     
     $data['related'] = $this->post_model->get_related_posts($article_id);
     $data['category'] =$this->post_model->get_categories();
     $data['com']=$this->post_model->count_comments();
      $this->load->view('templates/newheader');
      $this->load->view('pages/readinginterfacelogged',$data);
      $this->load->view('templates/newfooter');
    }
}
else{
  $col =$this->post_model->get_color_theme();
      if($col != 0)
      {   
    $this->session->set_userdata('current_url', 'pages/category/'.$article_url);
     $data['posts'] = $this->post_model->get_category_posts($article_url);
     $data['comm']=$this->post_model->get_comments($article_url);
     $data['related'] = $this->post_model->get_related_posts($article_url);
     $data['com']=$this->post_model->count_comments();
     $data['categories'] =$this->post_model->get_categories();
     $this->load->view('templates/darkthemeheader');
     $this->load->view('pages/newreadinginterface',$data);
     $this->load->view('templates/darkthemefooter');
   }
   else
   {
    $this->session->set_userdata('current_url', 'pages/category/'.$article_url);
     $data['posts'] = $this->post_model->get_category_posts($article_url);
     $data['comm']=$this->post_model->get_comments($article_url);
     $data['related'] = $this->post_model->get_related_posts($article_url);
     $data['com']=$this->post_model->count_comments();
     $data['categories'] =$this->post_model->get_categories();
     $this->load->view('templates/newheader');
     $this->load->view('pages/newreadinginterface',$data);
     $this->load->view('templates/newfooter');
   }
}
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
     // $this->load->view('templates/newheader');
     // $this->load->view('pages/listpost', $data);
     // $this->load->view('templates/newfooter');

     }
   }
   else{
    $col =$this->post_model->get_color_theme();
      if($col != 0)
      {
     $data['categories'] = $this->post_model->get_categories();
     $data['incorrect'] = 'Invalid credentials';
     $data['posts']=$this->post_model->get_story();
     $data['loginstate'] = FALSE;
     $this->load->view('templates/darkthemeheader');
     $this->load->view('pages/login',$data);
   }
   else
   {
    $data['categories'] = $this->post_model->get_categories();
     $data['incorrect'] = 'Invalid credentials';
     $data['posts']=$this->post_model->get_story();
     $data['loginstate'] = FALSE;
     $this->load->view('templates/newheader');
     $this->load->view('pages/login',$data);
   }
   }
  }
  function logout(){
   $this->session->sess_destroy();
   $this->load->view('templates/newheader');
   $this->load->view('pages/login'); 
  }
function latest_story_posts()
{
  $data['posts'] = $this->post_model->get_story($_category);
    $this->load->view('templates/newheader');
    $this->load->view('pages/view', $data);
    $this->load->view('templates/newfooter');
}
public function accountconfirm($email)
      {
        $this->load->model->post_model->verify_user($email); 
      }

public function change_color_theme($colorvalue)
{
  $colorval = $colorvalue;
  $this->post_model->change_color_theme($colorval);

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
              $this->load->view('templates/newheader');
              $this->load->view('pages/readinginterfacelogged',$data);
              $this->load->view('templates/newfooter');
            }
    else{
        $data['categories'] = $this->post_model->get_categories();
        $data['posts']=$this->post_model->get_it();
        // $story_id = $this->post_model->get_story_id();
        $data['comm'] =$this->post_model->get_comments();
        $data['related'] = $this->post_model->get_similar_categories($category);
        $data['com'] = $this->post_model->count_comments();
        $data['p'] =$this->post_model->get_posts();
        $this->load->view('templates/newheader');
        $this->load->view('pages/newreadinginterface',$data);
        $this->load->view('templates/newfooter');
        }
  }  
}
?>