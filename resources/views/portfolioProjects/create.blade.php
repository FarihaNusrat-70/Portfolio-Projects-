<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
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
            <h2>Project Data</h2>
            {{-- <div class="actions" style="margin-left: 405px;">
                <a class="btn btn-secondary btn-sm pl-4 pr-4" href="{{ URL::to('pds') }}"> <i
                        class="fa fa-backward backIcon" aria-hidden="true"></i> <span id="backWritten"> Back
                    </span>
                </a>
            </div> --}}

            <form method="POST" action="{{ URL::to('/saveProject') }}" enctype="multipart/form-data">
                @csrf <!-- Add CSRF token for security -->

                <div class="mb-3">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title"
                        required>
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" placeholder="Enter description"
                        name="description">
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="project_url">Project_url:</label>
                    <input type="tel" class="form-control" id="project_url" placeholder="Enter project_url"
                        name="project_url">
                    @error('project_url')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>




                <div class="mb-3">
                    <label for="image">Image:</label>
                    <input type="file" name="image" class="form-control" id="image"
                        placeholder="Choose an image">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status">Address:</label>
                    <select name="status" id="status">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>

    </div>

</body>

</html>
