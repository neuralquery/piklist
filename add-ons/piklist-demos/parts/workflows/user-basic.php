<?php
/*
Title: Basic
Order: 10
Flow: User Demo
Default: true
*/
  
  piklist('include_user_profile_fields', array(
    'sections' => array(
      'Personal Options'
      ,'Name'
      ,'Contact Info'
      ,'About the user'
      ,'About Yourself'
    )
  ));


  piklist('shared/code-locater', array(
    'location' => __FILE__
    ,'type' => 'Workflow Tab'
  ));

?>