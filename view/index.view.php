<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <tittle></tittle>
</head>
<body>

<?php if (isset($_POST['send'])):?>
<?php validate($_POST); ?>

    <?php endif ?>
    <?php if (isset($_POST['send']) & empty($validation_errors)): ?>
    <ul>
        <?php printData();?>

        <?php else: ?>
             <?php foreach ($validation_errors as $errors): ?>
        <div class="alert alert-danger m-2" role="alert">
            <?= $errors; ?>
        </div>
        <?php endforeach; ?>
    </ul>


<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="name">Vardas</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">Iveskite varda</small>
        </div>
        <div class="form-group">
            <label for="lastname">Pavarde</label>
            <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastNameHelp">
            <small id="lastNameHelp" class="form-text text-muted">Iveskite pavarde</small>
        </div>
        <div clas="form-group">
            <label for="InputEmail">El. pastas:</label>
            <input type="email" class="form-control" id="InputEmail" name="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Jusu el. pastas</small>

        </div>
        <div class="form-group">
            <select class="form-control" name="departament">
                <option selected disabled>--Pasirinkite departamenta</option>
                <?php foreach ($departaments as $dep): ?>
                    <option value=<?= $dep; ?>><?= $dep; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Zinute</label>
            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="send">Siusti</button>

</div>
</form>
    <?php endif; ?>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>