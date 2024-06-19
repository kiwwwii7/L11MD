<?php
$party_name = $_POST['party_name'];
$candidate_count = $_POST['candidate_count'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Saraksts: <?= $party_name; ?></h2>
    <form action="kandidati.php" method="post">
        <?php for ($i = 1; $i <= $candidate_count; $i++) { ?>
            <fieldset>
                <legend>Kandidats <?= $i; ?></legend>
                <label for="candidate_name<?= $i; ?>">Vards:</label>
                <input type="text" id="candidate_name<?= $i ?>" name="candidate_name<?= $i ?>" ><br><br>

                <label for="candidate_surname<?= $i; ?>">Uzvards:</label>
                <input type="text" id="candidate_surname<?= $i ?>" name="candidate_surname<?= $i ?>" ><br><br>

                <input type="radio" name="vote<?= $i ?>" id="par<?= $i ?>" value="par" >
                <label for="par<?= $i ?>">Par</label>
                <input type="radio" name="vote<?= $i ?>" id="pret<?= $i ?>" value="pret" >
                <label for="pret<?= $i ?>">Pret</label>
                <input type="radio" name="vote<?= $i ?>" id="Atturos<?= $i ?>" value="Atturos" >
                <label for="Atturos<?= $i ?>">Atturos</label>
            </fieldset>
        <?php } ?>

        <input type="submit" value="Apstiprinat">
    </form>



    <h2>Party Members</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Vote</th>
        </tr>
        <?php
        $member_count = count($_POST) / 3;

        for ($i = 1; $i <= $member_count; $i++) {
            $name = $_POST["candidate_name$i"];
            $surname = $_POST["candidate_surname$i"];
            $vote = $_POST["vote$i"];
            ?>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $surname; ?></td>
                <td><?php echo $vote; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>