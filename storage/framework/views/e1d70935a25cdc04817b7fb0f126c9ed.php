<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Personal Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .bordered-box {
            border: 1px solid #007bff;
            /* Bootstrap primary color */
            border-radius: 5px;
            padding: 20px;
            margin: 20px auto;
            max-width: 500px;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="bordered-box">
            <h2>View Project Data</h2>
            <div class="actions" style="margin-left: 405px;">
                <a class="btn btn-secondary btn-sm pl-4 pr-4" href="<?php echo e(URL::to('/index')); ?>">
                    <i class="fa fa-backward backIcon" aria-hidden="true"></i>
                    <span id="backWritten"> Back </span>
                </a>
            </div>
            <div class="mb-3">
                <img src="<?php echo e(asset('images/' . $projectData->image)); ?>" alt="Uploaded Image" width="150">
            </div>
            <div class="mb-3">
                <p id=""><strong>Name:</strong> <?php echo e($projectData->title); ?></p>
            </div>

            <div class="mb-3">
                <p id=""><strong>description:</strong> <?php echo e($projectData->description); ?></p>
            </div>

            <div class="mb-3">
                <p id=""><strong>status:</strong> <?php echo e($projectData->status); ?></p>

            </div>

            <div class="mb-3">
                <p id=""><strong>Project_url:</strong> <?php echo e($projectData->project_url); ?></p>
            </div>




        </div>
    </div>

</body>

</html>
<?php /**PATH /var/www/html/portfolio/resources/views/portfolioProjects/view.blade.php ENDPATH**/ ?>