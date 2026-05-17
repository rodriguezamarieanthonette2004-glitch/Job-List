<!DOCTYPE html>
<html>
<head>
    <title>Job Detail</title>
    <style>
        body { font-family: Times New Roman, serif; margin: 20px; }
        nav a { color: #00e; text-decoration: underline; font-size: 14px; }
    </style>
</head>
<body>
    <nav>
        <a href="/job-list/public">Home</a> | <a href="/job-list/public/jobs">Jobs</a>
    </nav>
    <h1>{{ $job->title }}</h1>
    <p>Salary: {{ $job->salary }}</p>
    <p>Description: {{ $job->description }}</p>
    <br>
    <a href="/job-list/public/jobs">Back to job list</a>
</body>
</html>