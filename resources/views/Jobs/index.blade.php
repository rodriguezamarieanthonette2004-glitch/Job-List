<!DOCTYPE html>
<html>
<head>
    <title>Available Jobs</title>
    <style>
        body { font-family: Times New Roman, serif; margin: 20px; }
        nav a { color: #00e; text-decoration: underline; font-size: 14px; }
    </style>
</head>
<body>
    <nav>
        <a href="/job-list/public">Home</a> | <a href="/job-list/public/jobs">Jobs</a>
    </nav>
    <h1>Available Jobs</h1>
    <ul>
        @foreach ($jobs as $job)
        <li>
            <a href="/job-list/public/jobs/{{ $job->id }}">
                {{ $job->title }} - {{ $job->salary }}
            </a>
        </li>
        @endforeach
    </ul>
</body>
</html>