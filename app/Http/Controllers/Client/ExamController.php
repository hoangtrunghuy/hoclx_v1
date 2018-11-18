<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exam;
use DB;
use App\Question;
use Session;
use View;
use Auth;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;

        $data = DB::table('exams')
        ->select('*')
        ->where('user_id', '=', $user_id)
        ->groupBy('exam_id')
        ->orderBy('created_at', 'desc')
        ->get();

        
        Session::get('diem'); //nhận biến diem từ hàm cham bên dưới đã gửi đi để hiển thị

        return view::make('client.exam.index')
        ->with(compact('data')) //cach gửi 2 biến đi
        ->with(compact('diem')); //cach gửi 2 biến đi
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id_ex = 'ex'.time();

        $user_id = Auth::user()->id;

        $ex_type = $request->exam_type;
        
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
            ->insert([ 'user_id' => $user_id, 'exam_id' => $id_ex, 'question_id' => $ly_thuyet[$i]->id, 'exam_type' =>$ex_type, 'created_at' =>date('Y-m-d H:i:s') ]);

            DB::table('exams')
            ->insert([ 'user_id' => $user_id, 'exam_id' => $id_ex, 'question_id' => $bien_bao[$i]->id, 'exam_type' =>$ex_type, 'created_at' =>date('Y-m-d H:i:s') ]);

            DB::table('exams')
            ->insert([ 'user_id' => $user_id, 'exam_id' => $id_ex, 'question_id' => $sa_hinh[$i]->id, 'exam_type' =>$ex_type, 'created_at' =>date('Y-m-d H:i:s') ]);
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

        return view('client.exam.xemlai',compact('data'));
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
        $exam_type = $request->input('exam_type');
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

        if($exam_type = 'b1' && $diem > 25 || $exam_type = 'b2' && $diem > 25){
            Exam::where('exam_id', '=', $exam_id)
            ->update(['exam_score' => $diem,'exam_status' => 'Đạt']);
        }elseif($exam_type = 'c' && $diem > 27 || $exam_type = 'd' && $diem > 27 || $exam_type = 'e' && $diem > 27 || $exam_type = 'f' && $diem > 27){
            Exam::where('exam_id', '=', $exam_id)
            ->update(['exam_score' => $diem,'exam_status' => 'Đạt']);
        }else{
            Exam::where('exam_id', '=', $exam_id)
            ->update(['exam_score' => $diem,'exam_status' => 'Không Đạt']);
        }
        
        
        
        return Redirect()->route('exams.index')->with( ['diem' => $diem] );
    }
}
