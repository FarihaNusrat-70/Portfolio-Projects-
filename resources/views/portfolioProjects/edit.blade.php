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
                <a class="btn btn-secondary btn-sm pl-4 pr-4" href="{{ URL::to('/index') }}"> <i
                        class="fa fa-backward backIcon" aria-hidden="true"></i> <span id="backWritten"> Back
                    </span>
                </a>
            </div>
            <form method="POST" action="{{ URL::to('/updateProject') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" id="id" name="id" value="{{ $projectData->id }}">

                <div class="mb-3">
                    <label for="email">title:</label>
                    <input type="test" class="form-control" id="title" placeholder="Enter title" name="title"
                        value="{{ old('email', $projectData->title) }}" required>
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" placeholder="Enter full name"
                        name="description" value="{{ old('description', $projectData->description) }}" required>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="project_url">project_url :</label>
                    <input type="text" class="form-control" id="project_url" placeholder="Enter project_url number"
                        name="project_url" value="{{ old('project_url', $projectData->project_url) }}" required>
                    @error('project_url')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="draft" {{ old('status', $projectData->status) == 'draft' ? 'selected' : '' }}>
                            Draft</option>
                        <option value="published"
                            {{ old('status', $projectData->status) == 'published' ? 'selected' : '' }}>Published
                        </option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="image">Image (optional):</label>
                    @if (isset($projectData->image))
                        <div class="mt-2">
                            <img src="{{ asset('images/' . $projectData->image) }}" alt="Current Image"
                                class="img-thumbnail" style="max-width: 200px;">
                            <p>Current Image</p>
                        </div>
                    @endif

                    <input type="file" class="form-control" id="image" name="image"
                        placeholder="Choose an image">

                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>





                {{-- <div class="mb-3">
                    <label for="image">Picture:</label>
                    <input type="file" name="image" class="form-control" id="image"
                        placeholder="Choose an image">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div> --}}

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</body>

</html>
