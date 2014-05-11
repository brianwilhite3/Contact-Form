<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * Brian Wilhite
 * Model 
 * Insert user input
 * 
 */

class Records extends CI_Model{
    
    function __construct(){
        parent::__construct();
    }
    
    function insert_input(){
    
    // set to true for xss_clean()
    $name = $this->input->post('name', TRUE);
    $email = $this->input->post('email', TRUE);
    $date = $this->input->post('date', TRUE);
    $phone = $this->input->post('phone', TRUE);
    $company = $this->input->post('company', TRUE);
    
    $contatData = array(
    'c_name' => $name,
    'c_email' => $email,
    'c_date' => $date,
    'c_phone' => $phone,
    'c_company' => $company
    );
      $this->db->insert('contacts', $contatData); 
    }
    function delete(){
      $this->db->delete('contact', array('id' => $id)); 
    }

}
/* End of file records.php */
/* Location: ./system/application/models/records.php */
