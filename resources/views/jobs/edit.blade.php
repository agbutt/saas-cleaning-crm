<h1>Edit Job</h1>
<form method="POST" action="{{ route('jobs.update', $job) }}">
    @csrf
    @method('PUT')
    <input name="plot_number" value="{{ $job->plot_number }}" placeholder="Plot Number">
    <input name="location" value="{{ $job->location }}" placeholder="Location">
    <input name="job_type" value="{{ $job->job_type }}" placeholder="Job Type">
    <input type="datetime-local" name="scheduled_at" value="{{ $job->scheduled_at->format('Y-m-d\TH:i') }}">
    <textarea name="notes" placeholder="Notes">{{ $job->notes }}</textarea>
    <input name="status" value="{{ $job->status }}" placeholder="Status">
    <button type="submit">Save</button>
</form>
