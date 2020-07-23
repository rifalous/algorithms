<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;

class DecryptController extends Controller
{
    public function main() {
        $password = $this->decryptPassword(']CQGWCWK');
        return $password;
    }

    public function decryptPassword($password)
    {
        $value = $password;
        $result = "";
        $res = "";
        try
        {
            $location = 0;
            $code = "1234567890";

            for ($i = 0; $i < strlen($value); $i++)
            {
                $location = $i % strlen($code) + 1;
                $result = str_split($this->mySubString($value, $i, 1))[0] ^ str_split($this->mySubString($code, $location, 1))[0];
                $res = $res . $result;
            }
        }
        catch (Exception $e)
        { 
            return $e;
        }
        return $res;
    }

    public function mySubString($myString, $start, $length) {
        $end = min(($start + $length), strlen($myString));
        return substr($myString, $start, ($end-$start));
    }
}
?>