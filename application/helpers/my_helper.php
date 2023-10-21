<?php

function is_logged_in()
{
    $ci = get_instance();
    
    if (!$ci->session->userdata('username')){
        redirect('auth'); 
    } else {

        $level = $ci->session->userdata('level');
        // $controller = $ci->uri->segmen(1);

        // if ($level == 'admin') {
        //     redirect('Admin');
        // } else if ($level == 'petugas') {
        //     redirect('Petugas');
        
        // } else {
        //     redirect('auth/blocked');
        // }
        
        

        // if ($queryAccess->num_rows() < 1) {
        //     redirect('auth/blocked');
        // }
    }


}
