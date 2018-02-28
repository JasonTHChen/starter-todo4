<?php
/**
 * Created by PhpStorm.
 * User: victo
 * Date: 2018-02-28
 * Time: 11:18 AM
 */

class Roles extends Application
{
    public function actor($role = ROLE_GUEST)
    {
        $this->session->set_userdata('userrole',$role);
        redirect($_SERVER['HTTP_REFERER']); // back where we came from
    }
}