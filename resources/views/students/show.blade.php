<!-- resources/views/students/show.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Student View</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student View Details 
                            <a href="{{ route('students.index') }}" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Student Name</label>
                            <p class="form-control">{{ $student->name }}</p>
                        </div>
                        <div class="mb-3">
                            <label>Student Email</label>
                            <p class="form-control">{{ $student->email }}</p>
                        </div>
                        <div class="mb-3">
                            <label>Student Phone</label>
                            <p class="form-control">{{ $student->phone }}</p>
                        </div>
                        <div class="mb-3">
                            <label>Student Course</label>
                            <p class="form-control">{{ $student->course }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
