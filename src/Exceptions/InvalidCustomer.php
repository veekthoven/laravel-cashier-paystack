<?php

namespace veekthoven\Cashier\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\Model;

class InvalidCustomer extends Exception
{
    public static function notYetCreated(Model $owner): static
    {
        return new static(class_basename($owner).' is not a Paystack customer yet.');
    }
}
