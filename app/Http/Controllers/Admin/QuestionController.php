<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Question::all();
        // dd($data);
        return view('admin.Question.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $model = new Question();

        $model->fill($request->all());

        $model->save();

        return redirect(route('questions.index'));
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
        $model = Question::find($id);

        return view('admin.Question.edit',compact('model'));

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
        $model = Question::find($id);

        $model->fill($request->all());

        $model->update();

        return redirect(route('questions.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $model = Question::findOrFail($id);

        // $flag = $model->delete();
        // if($flag){
        //     session()->flash('success','xóa thành công !');
        // }
        // else{
        //     session()->flash('warning','xóa không thành công !');
        // }
        // return back();
        
        $model = Question::find($id);

        $msg = $model->delete();

        if ($msg) {

            return response()->json(array(
                'status' => 204,
                'msg' => '204: HTTP requests successful'
            ));
        }
        return response()->json(array(  
            'status' => 400,
            'msg' => '400: Bad Request'
        ));


    }
}
