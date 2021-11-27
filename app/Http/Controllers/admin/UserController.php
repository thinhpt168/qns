<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserPostRequest;
use App\User;

class UserController extends Controller
{
    public function listUser () {
        $listUser = User::all();
        return view('admin.user.list',[
            'listUser' => $listUser
        ]);
    }
    public function formAddUser () {
        return view('admin.user.add');
    }
    public function addUser (UserPostRequest $request) {
        
        $addUser = new User;
        $addUser->name = $request->name;
        $addUser->account = $request->account;
        $addUser->email = $request->email;
        $addUser->password = bcrypt($request->password);
        $addUser->phone = $request->phone;
        $addUser->status = $request->status;
        $addUser->admin = $request->admin;
        $addUser->save();
        return redirect()->route('listUsers')->with('success','Thêm mới thành công');
    }
}
