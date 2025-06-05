<h1>Job Detail</h1>
<div>Plot: {{ $job->plot_number }}</div>
<div>Location: {{ $job->location }}</div>
<div>Type: {{ $job->job_type }}</div>
<div>Scheduled: {{ $job->scheduled_at }}</div>
<div>Status: {{ $job->status }}</div>
<a href="{{ route('jobs.edit', $job) }}">Edit</a>
