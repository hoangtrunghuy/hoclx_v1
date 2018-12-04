<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();

        return view('admin.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new User();

        $model->fill($request->all());

        if ($request->hasFile('user_img')) {

            $image = $request->file('user_img');

            $imageName = time() ."_". $image->getClientOriginalName();

            $path = public_path('/images');

            $image->move($path, $imageName);

            $model->user_img = 'images/'. $imageName;

        }

        $flag = $model->save();
        if($flag){
            session()->flash('success','Tạo mới thành công !');
        }
        else{
            session()->flash('warning','Tạo mới không thất bại !');
        }

        return redirect(route('user.index'));

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
        $model = User::findOrFail($id);
        return view('admin.user.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = User::findOrFail($id);
        $model->fill($request->all());
        if ($request->hasFile('user_img')) {

            $image = $request->file('user_img');

            $imageName = time() ."_". $image->getClientOriginalName();

            $path = public_path('/images');

            $image->move($path, $imageName);

            $model->user_img = 'images/'. $imageName;

        }
        $flag = $model->save();
        if($flag){
            session()->flash('success','cập nhật thành công !');
        }
        else{
            session()->flash('warning','cập nhật không thành công !');
        }
        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = User::findOrFail($id);

        $flag = $model->delete();
        if($flag){
            session()->flash('success','Xóa thành công !');
        }
        else{
            session()->flash('warning','xóa không thành công !');
        }

        return Redirect()->route('user.index');
    }
}
