<?php 


/*******  a7e51799-887e-4f73-929c-304c117c911b  *******/
function getErorrMsg($fieldName) {
    if (isset($_SESSION['errors'][$fieldName]) && !empty($_SESSION['errors'][$fieldName])) {
        $msg = '
        <p class="w-100 py-1 mt-1"
        role="alert"
        style="
            font-size: 12px;
            color: #b80000; 
            border-radius: 4px;
            padding-left: 6px;
        ">
        '.$_SESSION['errors'][$fieldName].'
        </p>';
        unset($_SESSION['errors'][$fieldName]);
        return $msg;
    }
}





