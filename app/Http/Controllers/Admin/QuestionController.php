<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Question;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use View;

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
        return view('admin.question.index',compact('data'));
    }

    public function lythuyet()
    {
        $data = Question::paginate(10);
        return view("client.lythuyet")->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Question();

        $model->fill($request->all());

        if ($request->hasFile('question_img')) {

            $image = $request->file('question_img');

            $imageName = time() ."_". $image->getClientOriginalName();

            $path = public_path('images');

            $image->move($path, $imageName);

            $model->question_img = 'images/'.$imageName;

        }

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

        return view('admin.question.edit',compact('model'));

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
        /*$old = str_replace('images',"",$model->question_img);

            File::delete(public_path('images') , $old);*/

        if ($request->hasFile('question_img')) {
            /*$old = public_path("{$model->question_img}");
                if (File::exists($old)) {
                    unlink($old);}*/
            /*dd($model->question_img);*/
            

            $image = $request->file('question_img');

            $imageName = time() ."_". $image->getClientOriginalName();

            $path = public_path('images');

            $image->move($path, $imageName);

            

            $model->question_img = 'images/'.$imageName;
        }
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

    public function delete_qs($id)
    {
        $deletedRows = Question::where('id', $id)->delete();
        
        return redirect(route('questions.index'));
    }



    /*public function hs()
    {
        $data = Question::all();
        
        foreach ($data as $value) {
            $string = $value->question_img; 
            if (strpos($string, 'images/154') !== false) {
                $re1 = preg_replace("/154[0-9]+/", '', $string);
                $replaced = preg_replace("/_+/", '', $re1);
                //dd($value->id);

                Question::where('id', '=', $value->id)
                ->update(['question_img' => $replaced]);
            }
        }
        $ok = 'oke';

        return view('hs',compact('ok'));
    }*/


}


