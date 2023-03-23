<?= $this->extend('layouts/core') ?>

<?= $this->section('tampilan_data') ?>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Nomor</th>
      <th>Judul</th>
      <th>Isi</th>
      <th>Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($newses as $news) : ?>
      <tr>
        <td><?= $news['id'] ?></td>
        <td><?= $news['judul'] ?></td>
        <td><?= $news['isi'] ?></td>
        <td>
          <a href="<?= site_url('news/' . $news['id'] . '/edit') ?>">Ubah</a>
          <a href="<?= site_url('news/' . $news['id'] . '/delete') ?>" onClick="alert('Apakah anda yakin?')">Hapus</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<form class="mx-3" method="POST" action="/news">
  <?= csrf_field() ?>
  <!-- Judul input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form4Example1">Judul</label>
    <input type="text" id="form4Example1" class="form-control" name="kolom_judul" />
  </div>

  <!-- Isi input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form4Example3">Isi</label>
    <textarea class="form-control" id="form4Example3" rows="4" name="kolom_isi"></textarea>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
</form>
<?= $this->endSection() ?>