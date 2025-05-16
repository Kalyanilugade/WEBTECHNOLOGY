<?php
// Connect to DB
$conn = new mysqli("localhost", "root", "", "simple_crud");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Create (Insert)
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO students (name, email) VALUES ('$name', '$email')");
}

// Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE students SET name='$name', email='$email' WHERE id=$id");
}

// Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM students WHERE id=$id");
}

// Get student for editing
$edit = false;
if (isset($_GET['edit'])) {
    $edit = true;
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM students WHERE id=$id");
    $student = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple CRUD App</title>
</head>
<body>
    <h2><?= $edit ? "Edit Student" : "Add Student" ?></h2>
    <form method="post">
        <?php if ($edit): ?>
            <input type="hidden" name="id" value="<?= $student['id'] ?>">
        <?php endif; ?>
        Name: <input type="text" name="name" value="<?= $edit ? $student['name'] : '' ?>" required>
        Email: <input type="email" name="email" value="<?= $edit ? $student['email'] : '' ?>" required>
        <button type="submit" name="<?= $edit ? 'update' : 'add' ?>">
            <?= $edit ? 'Update' : 'Add' ?>
        </button>
    </form>

    <h2>Student List</h2>
    <table border="1" cellpadding="5">
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
        <?php
        $result = $conn->query("SELECT * FROM students");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="?edit=<?= $row['id'] ?>">Edit</a> |
                <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Delete this student?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
