<?php
/**
 * Created by PhpStorm.
 * User: Pichau
 * Date: 03/10/2016
 * Time: 16:24
 */

namespace CodeDelivery\OAuth2;


class Verifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }

}