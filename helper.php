<?php

function validate_input_text($textValue){
    if(!empty($textValue)){
        $trim_text=trim($textValue);
        $sanitize_str=filter_var($trim_text,FILTER_SANITIZE_STRING);
        return $sanitize_str;
    }
    return '';
}

function validate_input_email($emailValue){
    if(!empty($emailValue)){
        $trim_text=trim($emailValue);
        $sanitize_str=filter_var($trim_text,FILTER_SANITIZE_EMAIL);
        return $sanitize_str;
    }
    return '';
}

function upload_profile($path,$file){
    $targetDir=$path;
    $default="./Assets/Profile/beard.png"; 
    $filename=basename($file['name']);
    $targetFilePath=$targetDir.$filename;
    $fileType=pathinfo($targetFilePath,PATHINFO_EXTENSION);
    if(!empty($filename)){
        $allowType=array('jpg','png','jpeg');
        if(in_array($fileType,$allowType)){
            if(move_uploaded_file($file['tmp_name'],$targetFilePath)){
                return $targetFilePath;
            }
        }
    }
    return $default;
}

?>