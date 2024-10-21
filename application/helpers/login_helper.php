<?php
    function is_logged_in()
    {
        $ci = get_instance();
        // jika tidak ditemukan session yg sesuai maka di tolak
        if(!$ci->session->userdata('username')) {
        redirect('login');
        }
    }