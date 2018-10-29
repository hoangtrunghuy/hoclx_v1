<?php

namespace App\Http\Controllers;

use App\Tip;
use Illuminate\Http\Request;

class TipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tip::latest()->get();
        return view('admin.tips.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Tip();
        $model->fill($request->all());

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imageName = time() . $image->getClientOriginalName();

            $path = public_path('/images');

            $image->move($path, $imageName);

            $model->image = 'images/'.$imageName;

        }
        $flag = $model->save();
        if($flag){
            session()->flash('success','tạo mới thành công !');
        }
        else{
            session()->flash('warning','tạo mới không thành công !');
        }
        return back();
        /*$rules = [
            'title' => 'require|min:10|max:191|unique:tips,title',
            'discription' => 'require|min:10|max:191',
            'image' => 'nullable',
        ];
        $this->validate($request,$rules);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Tip::findOrFail($id);
        return view('admin.tips.show',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Tip::findOrFail($id);

        return view('admin.tips.edit',compact('model'));
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
        $model = Tip::findOrFail($id);
        $model->fill($request->all());

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imageName = time() . $image->getClientOriginalName();

            $path = public_path('/images');

            $image->move($path, $imageName);

            $model->image = 'images/'.$imageName;

        }
        $flag = $model->save();
        if($flag){
            session()->flash('success','cập nhật thành công !');
        }
        else{
            session()->flash('warning','cập nhật không thành công !');
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
        $model = Tip::findOrFail($id);

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
