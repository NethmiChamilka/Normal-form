<!-- resources/views/form.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>

</head>
<body>
    <div class="container mt-5">
        <h2>Form Submission</h2>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
       <!-- Form -->
        <form action="{{ route('form.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div><br>
            <div class="form-group mt-3">
                <label for="address">Address:</label>
                <input type="text" name="address" class="form-control" value="{{ old('address') }}" required>
            </div><br>
            <div class="form-group mt-3">
                <label for="telephone">Telephone Number:</label>
                <input type="text" name="telephone" class="form-control" value="{{ old('telephone') }}" required>
            </div><br>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>
</html>
