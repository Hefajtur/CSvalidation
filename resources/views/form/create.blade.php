<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Form Example</h1>

    <form action="" method="POST" id="form_insert">
        <!-- Text Input -->
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
        </div>

        <!-- Email Input -->
        <div class="mb-3">
            <label for="email" class="form-label">Email address:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
        </div>

        <!-- Number Input -->
        <div class="mb-3">
            <label for="number" class="form-label">Number:</label>
            <input type="number" class="form-control" name="number" id="number" placeholder="Enter your number">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $("#form_insert").validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
            },
            number: {
                required: true,
                minlength: 4
            },
        },
        errorElement: "div",
        errorClass: "text-danger",
        errorPlacement: function (error, element) {
            // Customize the placement of error messages if needed
            error.appendTo(element.closest(".mb-3"));
        }
    });
</script>
</body>
</html>
