<?= $this->extend('layouts/core') ?>

<?= $this->section('content') ?>
<form class="mx-3" method="POST" action="">
  <?= csrf_field() ?>
  <input type="hidden" name="id" value="<?= $news['id'] ?>">

  <!-- Judul input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form4Example1">Judul</label>
    <input type="text" id="form4Example1" class="form-control" name="kolom_judul" value="<?= $news['judul'] ?>" />
  </div>

  <!-- Isi input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form4Example3">Isi</label>
    <textarea class="form-control" id="form4Example3" rows="4" name="kolom_isi"><?= $news['isi'] ?></textarea>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
</form>
<?= $this->endSection() ?>