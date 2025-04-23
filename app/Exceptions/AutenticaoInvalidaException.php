<?php

namespace App\Exceptions;

use Exception;

class AutenticaoInvalidaException extends Exception
{
    protected $message = 'As credenciais não correspondem.';

    public function render(){
        return response()->json([
           'error' => class_basename($this),
           'message' => $this->getMessage(),
        ]);
    }

}
