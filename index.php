<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seed Understanding...</title>
</head>

<body>

    <?php
    $conn = mysqli_connect("localhost", "root", "");

    $seeded = mysqli_query($conn, "SHOW DATABASES LIKE 'seeder_db'");
    $count_dbs = mysqli_num_rows($seeded);

    if ($count_dbs == 0) {
        ?>
        <form action="sample.php" method="POST">
            <button nam>Run Default Migration</button>
        </form>
        <?php
    }
    ?>

    <h1>My Project</h1>


</body>

</html>