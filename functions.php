<?php
    $stylesPath = get_bloginfo("template_directory") . "/css";
    $scriptsPath = get_bloginfo("template_directory") . "/scripts";
    
    function getPath($folder, $file) {
        if ($folder != "" && $file != "") {
            echo($folder . '/' . $file);
        }
        return;
    }
?>