<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * 这个为这个文件的html模板文件
 * http://demo.cssmoban.com/cssthemes6/tmag_4_Dashio/index.html
 * Class HomeController
 * @package App\Http\Controllers\Admin
 */
class HomeController extends Controller
{
    public  function __construct()
    {
//        $this->middleware('admin.auth')->only('store');
    }

    /**
     * Display a listing of the resource.
     *登录返回页面
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login.login.login');
        //
    }

    /**
     * Show the form for creating a new resource.
     *登录
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
//        echo 1;
//        dd($request->toArray());
        //
        $status = Auth::guard('admin')->attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);
//        dd($status);
        if (!empty($status)){
           return  redirect('admin/admin')->with('success','登录成功');
        }else {
            return redirect('/admin/index')->with('error','账号密码错误');
        }
    }


    /**
     * Store a newly created resource in storage.
     *返回的后台首页
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin.index');
//        $data= '登录成功,后台页面';
//
//        return $data;
        //
    }
    /**
     * Display the specified resource.
     *退出登录
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/index')->with('success','退出登录成功');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
