<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple project</title>
</head>
<body>

    <form action="index.php" method="post">
      <label for="name">Name:</label>
      <input type="text" name="name"><br>
      <label for="id">ID:</label>
      <input type="text" name="id"><br>
      <label for="address">Address:</label>
      <input type="text" name="address"><br>
      <button type="submit">Submit</button>
    </form>
  
    <?php
    // Access submitted data (assuming the form is submitted)
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = $_POST['name'];
      $id = $_POST['id'];
      $address = $_POST['address'];
  
      // Create an array to store data
      $data = array(
        "name" => $name,
        "id" => $id,
        "address" => $address,
      );
    }
    ?>
  
    <table>
      <tr>
        <th>Name</th>
        <th>ID</th>
        <th>Address</th>
      </tr>
  
      <?php if (isset($data)) : // Check if data exists ?>
        <tr>
          <td><?php echo $data['name']; ?></td>
          <td><?php echo $data['id']; ?></td>
          <td><?php echo $data['address']; ?></td>
        </tr>
      <?php endif; ?>
  
    </table>
  
  </body>
</html>