<?php
import("@.Model.User");

class UserAction extends Action {

    public function isLogin() {
        $this->assign("isLogin", true);
        $this->display("user");
    }

    public function login() {
        $username =$_POST['username'];
        $password = $_POST['password'];

        if (!empty($username) && !empty($password)) {
            $User=D("User");
            $random = $User->where('username="' . $username . '"')->field('random')->find();

            if($random!=null)
            {
                
                $password=md5($password.$random['random']);
                
                if($User->validate($username,$password))
                {
                    $this->assign("type",1);
                    $this->display("user");
                }else{
                    $this->assign("type",2);
                    $this->display("user");
                }
            }
        } else {
            $this->assign("type", 0);
            $this->display("user");
        }
    }

}