<?php

//-->session
function IsAdmin()
{
    $ci =& get_instance();
    //session akan aktif jika session bernilai 1
    if($ci->session->userdata('IsAdmin')<>1)
    {
        redirect('auth','refresh');
    }
}
//-->Endsession

//-->format_img
function UploadImg($file, $path, $name_prefix, $max_size)
{
    // Generate a unique name for the file
    $new_name = $name_prefix . '_' . time() . '_' . uniqid() . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
    $target_file = $path . $new_name;

    // Check if the directory exists, if not create it
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }

    // Move the uploaded file to the target directory
    if (move_uploaded_file($file['tmp_name'], $target_file)) {
        return $new_name;
    } else {
        return false;
    }
}

//-->Endformat_img


?>
