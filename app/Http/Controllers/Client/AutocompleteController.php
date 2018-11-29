<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AutocompleteController extends Controller
{
    public function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('questions')
        ->where('question_content', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul>';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->question_content.'</a></li>';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
}
