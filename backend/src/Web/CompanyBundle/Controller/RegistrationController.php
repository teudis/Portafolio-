<?php

namespace Web\CompanyBundle\Controller;


use FOS\UserBundle\Controller\RegistrationController as BaseController;


class RegistrationController extends BaseController
{
    
   
    public function registerAction()
  { 
    $response = parent::registerAction();
    // ... do custom stuff
    return $response;
   }
  
   
   
   
}
