<?php

#class to store any global variables needed
class Globe
{
    private $globalItems = array();

    public function set($name, $value)
    {
        $this->globalItems[$name] = $value;
    }

    public function get($name)
    {
        if (empty($this->globalItems[$name]))
            return null;

        return $this->globalItems[$name];
    }

    public function displayAll()
    {
        Help::d($this->globalItems, null, '#cc6633', '#fff');
    }
}
