<?php
class Controller_Admin extends Controller_User
{
    public function indexAction()
    {
        $userRole = $this->getSessParam('userRole');
        if($this->_userRole == Model_User::ROLE_ADMIN_ID) 
        {
            echo 'Вы попали в админскую часть сайта!';         
        }
        else 
        {
            echo 'Вы не являетесь администраторам!';
        }
    
    }
}
