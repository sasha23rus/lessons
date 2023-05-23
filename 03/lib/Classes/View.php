<?php

namespace Lib;

class View
{


    public function render(Array $data, $template='default_calculator')
    {
        ob_start();
        include_once $_SERVER['DOCUMENT_ROOT'].LOCAL_PATH.'/view/'.$template.'.php';
        return ob_get_clean();

    }//end render()


}//end class
