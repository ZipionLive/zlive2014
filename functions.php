<?php
    $stylesPath = get_bloginfo("template_directory") . "/css";
    $scriptsPath = get_bloginfo("template_directory") . "/scripts";
    
    function getPath($folder, $file) {
        if ($folder != "" && $file != "") {
            echo($folder . '/' . $file);
        }
        return;
    }
    
   // function importStyleSheet($file) {
   //     if ($file != "") {
   //         echo('<link rel="stylesheet" href="');
   //         getPath($stylesPath, $file);
   //         echo('" type="text/css" media="screen" />');
   //     }
   //     return;
   //}
   // 
   // function importScript($file) {
   //     if ($file != "") {
   //         echo('<script type="text/javascript" src="');
   //         getPath($scriptsPath, $file);
   //         echo('"></script>');
   //     }
   //     return;
   // }
?>