<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function showSurvey1()
    {
        return view('surveys.survey1');
    }

    public function storeSurvey1(Request $request)
    {
        $request->validate([
            'interest_confirmation' => 'required|boolean',
            'choice1' => 'required|string',
            'choice2' => 'required|string|different:choice1',
            'choice3' => 'required|string|different:choice1|different:choice2',
        ]);

        Survey::create([
            'user_id' => Auth::id(),
            'interest_confirmation' => $request->interest_confirmation,
            'choice1' => $request->choice1,
            'choice2' => $request->choice2,
            'choice3' => $request->choice3,
        ]);

        return redirect()->route('profile');
    }

    // Ajouter la méthode manquante
    public function resultsSurvey1()
    {
        $results = Survey::select('id', 'user_id', 'interest_confirmation','choice1','choice2','choice3')->with('user')->get();
        return view('surveys.results1', compact('results'));
    }

}
