<?php 
class Logout extends CI_Controller
{
    public function index(){
            foreach ($_SESSION as $key => $value) {
              unset($_SESSION[$key]);
            }
              redirect('login');
    }

}
?>