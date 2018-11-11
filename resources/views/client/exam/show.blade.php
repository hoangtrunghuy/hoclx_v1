@foreach($data as $item)
	<b>{{$item ->question_id}}</b><br>
	<b>{{$item ->question->question_content}}</b>
	<b>{{$item ->question->question_ansA}}</b>
	

@endforeach