<?php

namespace App\Http\Controllers;

use App\Models\Response;
use App\Models\ResponseAnswer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class QuestionerController extends Controller
{
    public function create()
    {
        $questions = Question::where('is_active', true)->orderBy('number')->get();
        return view('questioner', compact('questions'));
    }

    public function store(Request $request)
    {
        if ($request->has('answers')) {
            return $this->storePublicSubmission($request);
        }

        if (!session('is_admin')) {
            return redirect('/');
        }

        $validated = $request->validate([
            'number' => ['required', 'integer', 'min:1', 'max:255', 'unique:questions,number'],
            'text' => ['required', 'string', 'max:500'],
            'category' => ['required', Rule::in(['emotional', 'stress', 'social', 'self_control'])],
            'is_active' => ['nullable', 'boolean'],
        ]);

        Question::create([
            'number' => $validated['number'],
            'text' => $validated['text'],
            'category' => $validated['category'],
            'is_active' => $validated['is_active'] ?? true,
        ]);

        return redirect()->route('admin.questioner.index')->with('success', 'Pertanyaan ditambahkan.');
    }

    public function show($id)
    {
        $response = Response::with('answers')->findOrFail($id);

        $n = $response->answers->count();
        $minScore = 1 * $n;
        $maxScore = 5 * $n;
        $range = $maxScore - $minScore;
        $lowMax = (int) floor($minScore + 0.40 * $range);
        $mediumMax = (int) floor($minScore + 0.60 * $range);

        if ($response->total_score <= $lowMax) {
            $interpret = 'Kesehatan mental rendah';
        } elseif ($response->total_score <= $mediumMax) {
            $interpret = 'Kesehatan mental sedang';
        } else {
            $interpret = 'Kesehatan mental baik';
        }

        return view('questioner_result', compact('response', 'interpret', 'minScore', 'maxScore'));
    }

    public function index()
    {
        $questions = Question::orderBy('number')->get();
        return view('admin.questioner', compact('questions'));
    }

    public function update(Request $request, $id)
    {
        if (!session('is_admin'))
            return redirect('/');

        $question = Question::findOrFail($id);

        $validated = $request->validate([
            'number' => ['required', 'integer', 'min:1', 'max:255', Rule::unique('questions', 'number')->ignore($question->id)],
            'text' => ['required', 'string', 'max:500'],
            'category' => ['required', Rule::in(['emotional', 'stress', 'social', 'self_control'])],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $question->update([
            'number' => $validated['number'],
            'text' => $validated['text'],
            'category' => $validated['category'],
            'is_active' => array_key_exists('is_active', $validated) ? (bool) $validated['is_active'] : $question->is_active,
        ]);

        return back()->with('success', 'Pertanyaan diperbarui.');
    }

    public function destroy($id)
    {
        if (!session('is_admin'))
            return redirect('/');

        $question = Question::findOrFail($id);
        $question->delete();

        return back()->with('success', 'Pertanyaan dihapus.');
    }

    private function storePublicSubmission(Request $request)
    {
        $questions = Question::where('is_active', true)->orderBy('number')->get();

        if ($questions->isEmpty()) {
            return back()->withErrors(['questions' => 'Pertanyaan belum tersedia.'])->withInput();
        }

        $rules = [
            'name' => 'required|string|max:100',
            'age' => 'required|integer|min:10|max:100',
            'gender' => 'required|in:male,female,other',
            'answers' => 'required|array',
        ];
        foreach ($questions as $q) {
            $rules["answers.{$q->number}"] = 'required|integer|min:1|max:5';
        }
        $validated = $request->validate($rules);

        $response = Response::create([
            'name' => $validated['name'],
            'age' => $validated['age'],
            'gender' => $validated['gender'],
        ]);

        $catTotals = [
            'emotional' => 0,
            'stress' => 0,
            'social' => 0,
            'self_control' => 0,
        ];
        $total = 0;

        foreach ($questions as $q) {
            $score = (int) $validated['answers'][$q->number];

            ResponseAnswer::create([
                'response_id' => $response->id,
                'question_no' => $q->number,
                'category' => $q->category,
                'score' => $score,
            ]);

            $total += $score;
            $catTotals[$q->category] += $score;
        }

        // Simpan agregatnya
        $response->update([
            'total_score' => $total,
            'category_scores' => $catTotals,
        ]);

        // ==== Hitung interpretasi dinamis untuk modal ====
        $n = $questions->count();
        $minScore = 1 * $n;
        $maxScore = 5 * $n;
        $range = $maxScore - $minScore;
        $lowMax = (int) floor($minScore + 0.40 * $range);
        $mediumMax = (int) floor($minScore + 0.60 * $range);

        if ($response->total_score <= $lowMax) {
            $interpret = 'Kesehatan mental rendah';
        } elseif ($response->total_score <= $mediumMax) {
            $interpret = 'Kesehatan mental sedang';
        } else {
            $interpret = 'Kesehatan mental baik';
        }

        // Kembalikan ke halaman form dengan modal hasil
        return redirect()
            ->route('questioner')
            ->with('result', [
                'id' => $response->id,
                'name' => $response->name,
                'age' => $response->age,
                'gender' => $response->gender,
                'total' => $response->total_score,
                'min' => $minScore,
                'max' => $maxScore,
                'interpret' => $interpret,
                'category_scores' => $catTotals,
            ]);

    }
}
