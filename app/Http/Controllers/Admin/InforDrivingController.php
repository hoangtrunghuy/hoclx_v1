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
        $data = InforDriving::all();
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
    public function autosave(Request $request)
    {
        $model = new InforDriving();

        include('../vendor/autosaving/simple_html_dom.php');

        $html = file_get_html("https://vnexpress.net/tin-tuc/oto-xe-may");

        $link_list = array();
        foreach($html->find('div.sub_featured ul.scrollbar-inner li a') as $element)
        {
            //array_push($link_list,$element->href);
            $href = $element->href;
            if(!strpos($href,'box_comment')){
                // echo $href.'<br />';
                $article = file_get_html($href);
                $content =  $article->find('section.sidebar_1');
                $nodes  = $content[0]->children();
                $title = $nodes[1]->plaintext;
                $description = $nodes[2]->plaintext;
                $content = $nodes[3]->__tostring();
//                $nodes[0]->first_child()->plaintext.'<hr />';
                $model->infor_drivings_title = $title;
                $model->infor_drivings_discription = $description;
                $model->infor_drivings_image = 'images/1542537249thongtin4.jpg';
                $model->infor_drivings_content = $content;
                $model->save();
            }
        }
        return redirect(route('infordriving.index'));
    }
}
