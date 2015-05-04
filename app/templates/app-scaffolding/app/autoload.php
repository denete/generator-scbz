<?php

# autoload classes
function autoload_classes($class_name)
{
    #check app
    $class_file = dirname(__FILE__)  . "/classes/{$class_name}.php";
    if (includeFile($class_file))
        return;

    #check secondchance framework (admin)
    $class_name_array = explode('_', $class_name, 2);
    if (defined('SCBZ_INCLUDE'))
        $classes_dir = SCBZ_INCLUDE. '/classes/';
    else
        $classes_dir = SCBZ_ROOT. '/admin/' . ENVIRONMENT_DIR . '/htdocs/inc/.php/classes/';

    if (count($class_name_array) > 1) {
        $class_prefix = strtolower($class_name_array[0]);
        if (is_dir($classes_dir . "$class_prefix"))
            require_once($classes_dir . $class_prefix . "/{$class_name_array[1]}.php");
        else
            require($classes_dir . $class_name . '.php');
    } else {
        require($classes_dir . $class_name . '.php');
    }

    return true;
}

# autoload classes
spl_autoload_register('autoload_classes');

# include file
function includeFile($file)
{
    if(is_file($file)) {
        include_once $file;
        return true;
    } else {
        return false;
    }
}