<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        return Quiz::latest()->get();
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'Question' => 'required|max:250',
			'Option1' => 'required|max:250',
			'Option2' => 'required|max:250',
			'Option3' => 'required|max:250',
			'Option4' => 'required|max:250',
			'Answer' => 'required|max:1'
        ]);
        return Quiz::create([ 'Question' => request('Question'), 'Option1' => request('Option1'), 'Option2' => request('Option2'), 'Option3' => request('Option3'), 'Option4' => request('Option4'), 'Answer' => request('Answer') ]);
    }
    public function destroy($id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();
        return 204;
    }
	public function view()
    {
        $quizzes =  Quiz::latest()->get();

		foreach($quizzes as $quiz)
		{
			switch($quiz->Answer)
			{
				case 'A':
					$response[] = array("text"=>$quiz->Question, "responses"=>array(array("text"=>$quiz->Option1,"correct" => true),array("text"=>$quiz->Option2),array("text"=>$quiz->Option3),array("text"=>$quiz->Option4)));
				break;
				case 'B':
					$response[] = array("text"=>$quiz->Question, "responses"=>array(array("text"=>$quiz->Option1),array("text"=>$quiz->Option2,"correct" => true),array("text"=>$quiz->Option3),array("text"=>$quiz->Option4)));
				break;
				case 'C':
					$response[] = array("text"=>$quiz->Question, "responses"=>array(array("text"=>$quiz->Option1),array("text"=>$quiz->Option2),array("text"=>$quiz->Option3,"correct" => true),array("text"=>$quiz->Option4)));
				break;
				case 'D':
					$response[] = array("text"=>$quiz->Question, "responses"=>array(array("text"=>$quiz->Option1),array("text"=>$quiz->Option2),array("text"=>$quiz->Option3),array("text"=>$quiz->Option4,"correct" => true)));
				break;
			}
		}
		
		
		return response()->Json(array("questions" => $response));
    }
}
