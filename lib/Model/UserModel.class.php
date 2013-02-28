<?php

class UserModel extends RelationModel
{
    public static $TYPE=array(
        'NO_LOGIN'=>0,
        'LOGIN_SUC'=>1,
        'LOGIN_FAIL'=>2
    );
    public function validate($username,$password)
    {
        $User=D('User');
        $data=array();
        $data['username']=$username;
        $data['password']=$password;
        
        if($result=$User->where($data)->find())
        {
            //validate success
            $_SESSION[C('USER_AUTH_KEY')] = $result['uid'];
            session('cur_user',$User);
            return true;
        }
        return false;
    }
}