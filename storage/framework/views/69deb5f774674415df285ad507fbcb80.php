<?php $__env->startSection('container'); ?>

<h1>Tambah Data</h1>

<form action="<?php echo e(route('siswa.store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <label for="name">Nama</label>
    <input class="form-control mb-3" type="text" name="name" placeholder="Nama">

    <label for="about">Tentang</label>
    <input class="form-control mb-3" type="text" name="about" placeholder="Tentang">

    <label for="file" class="form-label">Foto</label>
    <input class="form-control" type="file" name="photo" id="file">

    <button type="submit" class="btn btn-primary mt-3 mb-3">Submit</button>
</form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.siswa.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web\resources\views/master/siswa/addsiswa.blade.php ENDPATH**/ ?>