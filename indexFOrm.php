<!DOCTYPE html>
<html>
<head>
    <title>User Profile Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h2>User Profile Form</h2>

    <!-- Action should be "connect.php" if you're submitting to that file -->
    <form action="connect.php" method="POST" class="d-flex flex-column" enctype="multipart/form-data">

        <label>Full Name:</label>
        <input type="text" name="fullname" class="form-control" required>

        <label>Email:</label>
        <input type="email" name="email" class="form-control" required>

        <label>Phone Number:</label>
        <input type="text" name="phone" class="form-control">

        <label>Gender:</label>
        <select name="gender" class="form-control">
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label>Bio:</label>
        <textarea name="bio" rows="4" class="form-control"></textarea>

        <!-- Submit button with name="submit" -->
        <button type="submit" name="submit" class="btn btn-primary" style="margin-top: 15px;">Submit</button>
    </form>
</div>

</body>
</html>
