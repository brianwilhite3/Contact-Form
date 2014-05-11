<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Brian Wilhite
 * Config
 * Back end validation
 * 
 */
$config = array(
              'contact' => array(
                          array(
                              'field' => 'name',
                              'label' => 'name',
                              'rules' => 'required'
                               ),
                          array(
                              'field' => 'email',
                              'label' => 'email',
                              'rules' => 'required|valid_email'
                               ),
                          array(
                              'field' => 'phone',
                              'label' => 'phone number',
                              'rules' => 'required'
                               ),
                          array(
                              'field' => 'company',
                              'label' => 'company',
                              'rules' => 'required'
                               ),
                          array(
                              'field' => 'message',
                              'label' => 'message',
                              'rules' => 'required|min_length[1]'
                               ),
                           array(
                              'field' => 'date',
                              'label' => 'date',
                              'rules' => 'required'
                               ),
                  )
                                     
);
 
/* End of file form_validation.php */
/* Location: ./application/config/form_validation.php */
