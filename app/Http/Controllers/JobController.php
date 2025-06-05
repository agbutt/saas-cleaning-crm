<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::latest()->paginate();
        return view('jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'plot_number' => 'required|string',
            'location' => 'required|string',
            'job_type' => 'required|string',
            'scheduled_at' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        $job = Job::create(array_merge($validated, [
            'office_id' => auth()->id(),
            'status' => 'pending',
        ]));

        return redirect()->route('jobs.show', $job);
    }

    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        $validated = $request->validate([
            'plot_number' => 'required|string',
            'location' => 'required|string',
            'job_type' => 'required|string',
            'scheduled_at' => 'required|date',
            'notes' => 'nullable|string',
            'status' => 'required|string',
        ]);

        $job->update($validated);

        return redirect()->route('jobs.show', $job);
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('jobs.index');
    }
}
