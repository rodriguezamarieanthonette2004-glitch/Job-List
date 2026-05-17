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
        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="/job-list/public/jobs/<?php echo e($job->id); ?>">
                <?php echo e($job->title); ?> - <?php echo e($job->salary); ?>

            </a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html><?php /**PATH C:\xampp\htdocs\job-list\resources\views/jobs/index.blade.php ENDPATH**/ ?>