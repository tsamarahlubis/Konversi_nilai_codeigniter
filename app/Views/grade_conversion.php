<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align">Konversi Nilai</span>
                        <?php if (isset($errors) && !empty($errors)) : ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php foreach ($errors as $error) : ?>
                                        <li><?= esc($error) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <form action="<?= base_url('grade/convert') ?>" method="POST">
                            <?= csrf_field() ?>
                            <div class="input-field">
                                <input type="text" id="partisipasi" name="partisipasi" value="<?= old('partisipasi') ?>" required>
                                <label for="partisipasi">Nilai Partisipasi</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="tugas" name="tugas" value="<?= old('tugas') ?>" required>
                                <label for="tugas">Nilai Tugas</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="uts" name="uts" value="<?= old('uts') ?>" required>
                                <label for="uts">Nilai UTS</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="uas" name="uas" value="<?= old('uas') ?>" required>
                                <label for="uas">Nilai UAS</label>
                            </div>
                            <button type="submit" class="btn waves-effect waves-light">Konversi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>