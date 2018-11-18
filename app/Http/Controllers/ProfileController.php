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
    public function index()
    {
        return view('profile');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $model = User::findOrFail($id);

        if(Hash::check($request->old_password,$model->password)){
            $model->password = Hash::make($request->password);
            $flag = $model->save();

        }else{
            echo "Nhap lai mat khau cu";
        
        }
       $model->fill($request->all());

        if ($request->hasFile('user_img')) {
            $image = $request->file('user_img');

            $imageName = time() . $image->getClientOriginalName();

            $path = public_path('/images');

            $image->move($path, $imageName);

            $model->user_img = 'images/'.$imageName;

        }
       
        if($flag){
            session()->flash('success','Cập nhật thành công !');
        }
        else{
            session()->flash('warning','Cập nhật không thành công !');
        }
        return back();
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
