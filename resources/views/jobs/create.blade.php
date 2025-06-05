<h1>Create Job</h1>
<form method="POST" action="{{ route('jobs.store') }}">
    @csrf
    <input name="plot_number" placeholder="Plot Number">
    <input name="location" placeholder="Location">
    <input name="job_type" placeholder="Job Type">
    <input type="datetime-local" name="scheduled_at">
    <textarea name="notes" placeholder="Notes"></textarea>
    <button type="submit">Save</button>
</form>
