<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Handlers\ImageUploadHandler;

class UsersController extends Controller
{
    //显示个人中心的页面
    public function show(User $user)
    {

        return view('users.show',compact('user'));
    }


    //点击编辑选项跳转到具体的编辑页面
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    //在编辑页面点击  保存修改 完成具体的功能
    public function update(UserRequest $request, ImageUploadHandler $uploader, User $user)
    {
        $data = $request->all();
        if($request->avatar){
            $result = $uploader->save($request->avatar, 'avatars', $user->id, 362);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }//dd方法用来查看文件上传的情况

        $user->update($data);
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }

}
