<?php
class Controller_User extends System_Controller
{
    public function profileAction()
    {
        $args = $this->_getArguments();
        $userId = $args['id'];
        
        $modelUser = Model_User :: getById($userId);
  
    }
}