<!DOCTYPE html>
<html>
<head>
    <title>Update Application</title>
</head>
<body>
    @if(session('status'))
        <div>{{ session('status') }}</div>
    @endif
    <form method="POST" action="{{ route('update.run') }}">
        @csrf
        <button type="submit">Run Updates</button>
    </form>
</body>
</html>
