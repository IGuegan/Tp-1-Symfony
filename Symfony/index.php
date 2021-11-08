<?php
require_once 'models/database.php';

$db = initDatabse();

$table = $db->prepare('SELECT * FROM posts');
$table->execute();
$table_bdd = $table->fetchall();

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Test</title>
</head>

<body style="width: 1000px;">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
        <th scope="col">Actif</th>
        <th scope="col">Créé le</th>
        <th scope="col">Commentaires</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($table_bdd as $value) : ?>
        <tr>
          <td><?php echo $value['id'] ?></td>
          <td><?php echo $value['title'] ?></td>
          <td><?php echo $value['description'] ?></td>
          <td><?php echo $value['active'] ?></td>
          <td><?php echo $value['created_at'] ?></td>
          <td><a href="comments.php?id=<?php echo $value['id']; ?>" type="button" class="btn btn-dark">Voir</button></a>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>