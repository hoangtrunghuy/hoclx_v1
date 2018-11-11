<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\InforDriving;
use App\Http\Controllers\Controller;

class InforDrivingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = InforDriving::latest()->get();
        return view('admin.infordriving.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.infordriving.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new InforDriving();
        $model->fill($request->all());

        if ($request->hasFile('infor_drivings_image')) {

            $image = $request->file('infor_drivings_image');

            $imageName = time() ."_". $image->getClientOriginalName();

            $path = public_path('images');

            $image->move($path, $imageName);

            $model->infor_drivings_image = 'images/'.$imageName;
        }
        $flag = $model->save();
        if($flag){
            session()->flash('success','tạo mới thành công !');
        }
        else{
            session()->flash('warning','tạo mới không thành công !');
        }
        return redirect(route('infordriving.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = InforDriving::findOrFail($id);
        return view('admin.infordriving.edit',compact('model'));
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

       $model = InforDriving::findOrFail($id);
        $model->fill($request->all());

        if ($request->hasFile('infor_drivings_image')) {
            $image = $request->file('infor_drivings_image');

            $imageName = time() . $image->getClientOriginalName();

            $path = public_path('/images');

            $image->move($path, $imageName);

            $model->infor_drivings_image = 'images/'.$imageName;

        }
        $flag = $model->save();
        if($flag){
            session()->flash('success','cập nhật thành công !');
        }
        else{
            session()->flash('warning','cập nhật không thành công !');
        }
        return redirect(route('infordriving.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = InforDriving::findOrFail($id);
        $flag = $model->delete();
        if($flag){
            session()->flash('success','xóa thành công !');
        }
        else{
            session()->flash('warning','xóa không thành công !');
        }
        return back();
    }
}
