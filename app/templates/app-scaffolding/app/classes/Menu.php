<?php

class Menu {

    private $navPatterns = array();

    public function addPattern($name, $pattern)
    {
        if (is_array($pattern))
            $this->navPatterns[$name] = $pattern;
        else
            $this->navPatterns[$name] = array($pattern);
    }

    public function getNavClass($menuItem)
    {
        $uri = $_SERVER['REQUEST_URI'];

        foreach ($this->navPatterns as $navPattern => $patterns) {
            foreach ($patterns as $pattern) {
                if (stripos($uri, $pattern) !== false && $menuItem == $navPattern) {
                    return 'active';
                    break;
                }
            }
        }

        return '';
    }

    public function displayAll()
    {
        Help::d($this->navPatterns, null, '#cc6633', '#fff');
    }
}