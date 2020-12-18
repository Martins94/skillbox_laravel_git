<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    public function contacts()
    {
        return view('contacts');
    }

    public function feedback()
    {
        $feedbacks = Feedback::latest()->get();

        return view('admin.feedbacks', compact('feedbacks'));
    }

    public function store()
    {
        $data = $this->validate(\request(), [
            'email' => 'required',
            'message' => 'required'
        ]);

        Feedback::create($data);

        return redirect('/admin/feedbacks');
    }
}
