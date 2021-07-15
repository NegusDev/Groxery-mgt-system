<?php


class View
{
    public function header()
    {
        include(BASE_DIR . "/Header.php");
    }

    public function footer()
    {
        include(BASE_DIR . "/Footer.php");
    }

}