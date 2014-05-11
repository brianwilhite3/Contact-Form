<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Brian Wilhite
 * controller 
 * Category pages
 * 
 */

  class Category extends CI_Controller{

    function __construct(){
    parent::__construct();
    $this->load->model('Records');
    }
 
 function home(){
      $data = array(
               'title' => 'Home Page'
          );
      $this->load->view('templates/header',$data);
      $this->load->view('templates/home');
 }
 function contact_form(){
      
        if ($this->form_validation->run('contact') === FALSE){
        
        // Show backend validation if JavaScript is off
        $data = array(
               'title' => 'Contact Form'
          );
        $this->load->view('templates/header', $data);
        $this->form_validation->set_error_delimiters('<p class="alert-danger">', '</p>');
        $this->template->load('templates/struct', 'forms/contact_form');
     }else{
      
        // Insert user data
        $this->Records->insert_input();
        
        // Send e-mail
        $this->email->from('', '');
        $this->email->to(''); 
        //$this->email->cc('another@another-example.com'); 
        //$this->email->bcc('them@their-example.com'); 

        $this->email->subject('');
        $this->email->message('');	

        $this->email->send();
        echo $this->email->print_debugger();
      }  
  }
  
/* End of file category.php */
/* Location: ./application/controllers/category.php */ 
 
  
  
  
  
  
  
  
  
  
  

   












 }
  
/* End of file products.php */
/* Location: ./application/controllers/products.php */  
