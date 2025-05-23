<!DOCTYPE html>
<html lang="en">


<head>
    <title>Personal Data Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <style>
        .bordered-box {
            border: 1px solid #007bff;
            border-radius: 5px;
            padding: 20px;
            margin: 20px auto;
            max-width: 1000px;
            /* Adjust width as needed */
        }
    </style>

</head>

<body>

    <div class="container mt-5">

        <div class="bordered-box">
            <h2>Portfolio Projects – CRUD Application</h2>

            <div style="margin-bottom: 21px; padding:0px;"><a class="btn btn-default btn-sm create-new"
                    style="margin-left: 20px; background-color:#00A896;color:white;" title=" Create New Trainee"
                    href="<?php echo e(URL::to('/create')); ?>"> <i class="fa fa-plus create-new"></i></i>Add New Project</a>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Project_url</th>
                        <th>Status</th>
                        <th style="height: 60px;width: 82px;"> Image</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $projectDatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($data->title); ?></td>
                            <td><?php echo e($data->description); ?></td>
                            <td><?php echo e($data->project_url); ?></td>
                            <td><?php echo e($data->status); ?></td>
                            <td> <img src="<?php echo e(asset('images/' . $data->image)); ?>" alt="Uploaded Image" width="150">
                            </td>
                            <td>
                                <div style="width:120px">
                                    <a href="<?php echo e(URL::to('/viewProjectData', ['id' => $data->id])); ?>"
                                        class="btn btn-sm btn-icon-only btn-info tooltips"
                                        style="padding: 1px 6px; margin-bottom: 2px; width: 31px; height: 30px;"
                                        title="View" aria-label="View">
                                        <i class="fa fa-eye" style="margin-right: -2px;"></i>
                                    </a>
                                    <!-- Edit Button -->
                                    <a href="<?php echo e(URL::to('/editProject', ['id' => $data->id])); ?>"
                                        class="btn btn-sm btn-icon-only btn-primary tooltips vcenter"
                                        style="padding: 1px 6px; margin-bottom: 2px; width: 31px; height: 30px;"
                                        title="Edit" aria-label="Edit">
                                        <i class="fa fa-edit" style="margin-right: -2px;"></i>
                                    </a>

                                    <!-- Delete Button  -->
                                    <a href="<?php echo e(URL::to('/deleteProject', ['id' => $data->id])); ?>"
                                        class="btn btn-xs btn-icon-only btn-danger tooltips vcenter delete"
                                        style="padding: 1px 6px; margin-bottom: 2px; width: 31px; height: 30px;"
                                        title="Delete">
                                        <i class="fa fa-trash" style="margin-right: -2px;"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center">No records found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>
<?php /**PATH /var/www/html/Portfolio-Projects-/resources/views/portfolioProjects/index.blade.php ENDPATH**/ ?>