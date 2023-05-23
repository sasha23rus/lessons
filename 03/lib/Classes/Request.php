<?php

namespace Lib;

class Request
{


    public function validate():array
    {
        $result = [];
        foreach ($_POST as $key => $value) {
            $result[$key] = is_numeric($value) ? intval($value) : htmlspecialchars($value);
        }

        switch ($_POST['action']) {
            case 'plus':
            $result['action'] == 'plus';

            case 'minus':
            $result['action'] == 'minus';

            case 'multiply':
            $result['action'] == 'multiply';

            case 'divide':
            $result['action'] == 'divide';

            case 'equal':
            $result['action'] == 'equal';

            default:
            $result['action'] == 'plus';
        }

        return $result;

    }//end validate()


}//end class
