<!DOCTYPE html>
<html>
<head>
    <title>Create Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-lght">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">Create User</h2>

        <form action="/store" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $name ?? '' }}">

            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $email ?? '' }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
               <input type="password" name="password" class="form-control" value="{{ $password ?? '' }}">
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
