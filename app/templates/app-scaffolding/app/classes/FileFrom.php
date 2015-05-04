<?php

class FileFrom {
    public $commonDir = 'common';

    function strip($filename)
    {
        $filename = Help::stripFilenameExtension($filename);
        return $filename;
    }

    public function game($filename)
    {
        $filename = $this->strip($filename);
        return APP_DIR . "/{$filename}.php";
    }

    public function common($filename, $dir_name)
    {
        if (empty($dir_name))
            $dir_name = $this->commonDir;

        $filename = $this->strip($filename);
        return APP_DIR . "/{$dir_name}/{$filename}.php";
    }

    public function state($filename)
    {
        $filename = $this->strip($filename);
        return $_SERVER['DOCUMENT_ROOT'] . "/{$filename}.php";
    }

    public function stateCommon($filename)
    {
        $filename = $this->strip($filename);
        return $_SERVER['DOCUMENT_ROOT'] . "/inc/.php/common/{$filename}.php";
    }

    public function adminCommon($filename)
    {
        $filename = $this->strip($filename);
        return SCBZ_COMMON . "/{$filename}.php";
    }
}