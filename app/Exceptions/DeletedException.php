<?php
/**
 * @author: Endo
 * Date: 5/7/16
 * @copyright: Endo
 */


namespace App\Exceptions;


use Exception;

class DeletedException extends Exception
{
    public function __construct($message = "", $code = 0, Exception $previous = null) {
        if ($message == "") {
            $message = "Object Is Deleted";
        }
        return parent::__construct($message, $code, $previous);
    }
}