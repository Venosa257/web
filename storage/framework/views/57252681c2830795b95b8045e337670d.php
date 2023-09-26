
<?php $__env->startSection('container'); ?>
<a href="/siswa/create" type="button" class="btn btn-primary mb-4">Tambah Data</a>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Foto</th>
      <th scope="col">Name</th>
      <th scope="col">About</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    <tr>
      <th scope="row">1</th>
      <td><img src="<?php echo e(asset('storage\\' . $s->p)); ?>" alt="<?php echo e($s->name); ?>"></td>
      <td><?php echo e($s->name); ?></td>
      <td><?php echo e($s->about); ?></td>
      <td>
        <a href="" class="btn btn-warning">Edit</a>
         <form action="<?php echo e(route('siswa.destroy', $s->id)); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <button class="btn btn-datatable btn-icon btn-transparent-dark" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.siswa.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web\resources\views/master/siswa/index.blade.php ENDPATH**/ ?>