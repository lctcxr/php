<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/3/23
 * Time: 17:58
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class AdminController  extends  Controller
{
    public  function  index(){
         return view('admin.table.table');
    }

}