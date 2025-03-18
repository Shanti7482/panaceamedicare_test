<?php
function check_login() {
    $CI =& get_instance();
    if (!$CI->session->userdata('logged_in')) {
        redirect('/');
    }
}

?>