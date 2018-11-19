<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_profile()
    {
        return view('profile.edit-profile');
    }
    public function edit_image()
    {
        return view('profile.edit-image');
    }
    public function edit_account()
    {
        return view('profile.edit-account');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request, $id)
    {
        $model = User::findOrFail($id);

        $model->fill($request->all());

        $flag = $model->save();

        if ($flag) {
            session()->flash('success', 'Cập nhật thành công !');
        } else {
            session()->flash('warning', 'Cập nhật không thành công !');
        }
        return back();

    }
    public function updateAccount(Request $request, $id)
    {
        $model = User::findOrFail($id);
        if (!empty($request->old_password)) {
            if (Hash::check($request->old_password, $model->password)) {
                $model->password = Hash::make($request->password);
                $flag = $model->save();
                if ($flag) {
                    session()->flash('success', 'Cập nhật thành công !');
                } else {
                    session()->flash('warning', 'Cập nhật không thành công !');
                }

            } else {
                session()->flash('success', 'Mật khẩu cũ không đúng!');
            }
            $model->fill($request->all());
            return back();
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateImgage(Request $request, $id)
    {
        $model = User::findOrFail($id);
        $model->fill($request->all());

        if ($request->hasFile('user_img')) {
            $image = $request->file('user_img');

            $imageName = time() . $image->getClientOriginalName();

            $path = public_path('/images');
            $image->move($path, $imageName);

            $model->user_img = 'images/' . $imageName;

        }
        $flag = $model->save();
        if ($flag) {
            session()->flash('success', 'Cập nhật thành công !');
        } else {
            session()->flash('warning', 'Cập nhật không thành công !');
        }
        return back();
    }
}
