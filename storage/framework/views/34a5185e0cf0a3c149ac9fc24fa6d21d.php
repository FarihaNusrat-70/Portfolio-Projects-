<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Personal Data</title>
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
            <h2>Edit Project Data</h2>
            <div class="actions" style="margin-left: 405px;">
                <a class="btn btn-secondary btn-sm pl-4 pr-4" href="<?php echo e(URL::to('/index')); ?>"> <i
                        class="fa fa-backward backIcon" aria-hidden="true"></i> <span id="backWritten"> Back
                    </span>
                </a>
            </div>
            <form method="POST" action="<?php echo e(URL::to('/updateProject')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo e($projectData->id); ?>">

                <div class="mb-3">
                    <label for="email">title:</label>
                    <input type="test" class="form-control" id="title" placeholder="Enter title" name="title"
                        value="<?php echo e(old('email', $projectData->title)); ?>" required>
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-3">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" placeholder="Enter full name"
                        name="description" value="<?php echo e(old('description', $projectData->description)); ?>" required>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-3">
                    <label for="project_url">project_url :</label>
                    <input type="text" class="form-control" id="project_url" placeholder="Enter project_url number"
                        name="project_url" value="<?php echo e(old('project_url', $projectData->project_url)); ?>" required>
                    <?php $__errorArgs = ['project_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="draft" <?php echo e(old('status', $projectData->status) == 'draft' ? 'selected' : ''); ?>>
                            Draft</option>
                        <option value="published"
                            <?php echo e(old('status', $projectData->status) == 'published' ? 'selected' : ''); ?>>Published
                        </option>
                    </select>
                    <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div class="mb-3">
                    <label for="image">Image (optional):</label>
                    <?php if(isset($projectData->image)): ?>
                        <div class="mt-2">
                            <img src="<?php echo e(asset('images/' . $projectData->image)); ?>" alt="Current Image"
                                class="img-thumbnail" style="max-width: 200px;">
                            <p>Current Image</p>
                        </div>
                    <?php endif; ?>

                    <input type="file" class="form-control" id="image" name="image"
                        placeholder="Choose an image">

                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>





                

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</body>

</html>
<?php /**PATH /var/www/html/portfolio/resources/views/portfolioProjects/edit.blade.php ENDPATH**/ ?>