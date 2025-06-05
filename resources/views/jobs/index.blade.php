<h1>Jobs</h1>
@foreach($jobs as $job)
    <div><a href="{{ route('jobs.show', $job) }}">{{ $job->plot_number }} - {{ $job->location }}</a></div>
@endforeach
