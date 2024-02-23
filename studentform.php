<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 bg-success bg-gradient">
    <h2 class="mb-4">Student Form</h2>

    <form action="submit_student.php" method="post">
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required><br><br>
        </div>

        <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" required><br><br>
        </div>

        <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" required><br><br>
        </div>

        <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" name="gender" id="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>
        </div>

        <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" id="age" name="age" required><br><br>
        </div>

        <div class="form-group">
        <label for="course">Course</label>
        <input type="text" class="form-control" id="course" name="course" required><br><br>
        </div>

        <input type="submit" class="btn btn-primary" value="submit">


    </form>
    </div>

    
</body>
</html>