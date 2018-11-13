<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exam;
use DB;
use App\Question;
use Session;
use View;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('exams')
        ->select('exam_id','exam_score','created_at')
        ->groupBy('exam_id')
        ->orderBy('created_at', 'desc')
        ->get();

        return view('client.exam.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_ex = 'ex'.time();
        
        $ly_thuyet = Question::inRandomOrder()
            ->select('id')
            ->where('question_type', '=', 1)
            ->get();
        
        $bien_bao = Question::inRandomOrder()
            ->select('id')
            ->where('question_type', '=', 2)
            ->get();

        $sa_hinh = Question::inRandomOrder()
            ->select('id')
            ->where('question_type', '=', 3)
            ->get();

        for ($i=1; $i < 3; $i++) {
            
            DB::table('exams')
            ->insert([ 'user_id' => 1/* edit */, 'exam_id' => $id_ex, 'question_id' => $ly_thuyet[$i]->id, 'created_at' =>date('Y-m-d H:i:s') ]);

            DB::table('exams')
            ->insert([ 'user_id' => 1/* edit */, 'exam_id' => $id_ex, 'question_id' => $bien_bao[$i]->id, 'created_at' =>date('Y-m-d H:i:s') ]);

            DB::table('exams')
            ->insert([ 'user_id' => 1/* edit */, 'exam_id' => $id_ex, 'question_id' => $sa_hinh[$i]->id, 'created_at' =>date('Y-m-d H:i:s') ]);
        }

        
        return redirect(route('exams.show',$id_ex));

        /*return view('client.exam.index')
        ->with(compact('ly_thuyet'))
        ->with(compact('bien_bao'))
        ->with(compact('sa_hinh'));*/
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
        $data = Exam::where('exam_id', $id)->get();

        return view('client.exam.lamde',compact('data'));
    }

    public function xemlai($id)
    {
        $data = Exam::where('exam_id', $id)->get();

        Session::get('diem'); //nhận biến diem từ hàm cham bên dưới đã gửi đi để hiển thị

        return view::make('client.exam.xemlai')
        ->with(compact('data')) //cach gửi 2 biến đi
        ->with(compact('diem')); //cach gửi 2 biến đi
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

    public function delete_exam($exam_id)
    {
        $deletedRows = Exam::where('exam_id', $exam_id)->delete();
        
        return redirect(route('exams.index'));
    }


    public function cham(Request $request)
    {
        $exam_id = $request->input('exam_id');
        $diem = 0;
        for ($i=1; $i < 7; $i++) {

            $ans = $request->input('cau'.$i.'_answerTrue');

            $BL = $request->input('cau'.$i.'_check1') . $request->input('cau'.$i.'_check2') . $request->input('cau'.$i.'_check3') . $request->input('cau'.$i.'_check4');

            $question_id = $request->input('cau'.$i.'_id');
            /*dd($question_id);*/
            DB::table('exams')
            ->where('exam_id', '=', $exam_id)
            ->where('question_id', '=', $question_id)
            ->update(['user_ans' => $BL]);

            if ($ans == $BL) {
                $diem++;
            }
        }
        
        Exam::where('exam_id', '=', $exam_id)
        ->update(['exam_score' => $diem]);
        
        return Redirect()->route('xemlai',$exam_id)->with( ['diem' => $diem] );
    }
}
