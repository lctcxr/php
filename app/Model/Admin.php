<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/3/20
 * Time: 13:55
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Admin  extends User
{
    protected  $table = 'admin';

}