<?php $__env->startSection('title'); ?>
Tambah Agama
<?php $__env->stopSection(); ?>
<?php $__env->startSection('master'); ?>
active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Tambah Agama</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel Master</li>
          <li class="breadcrumb-item"><a href="/agama">Agama</a></li>
          <li class="breadcrumb-item"><a href="#">Tambah Agama</a></li>
        </ul>
      </div>
      
      <div class="row">        
        <div class="col-md-12">
          <div class="tile">
            <!-- <h3 class="tile-title">Register</h3> -->            
            <div class="tile-body">
              <!-- <form class="form-horizontal" action="<?php echo e(route('pegawai.store')); ?>" method="post"> -->
              <form class="form-horizontal" action="<?php echo e(url('/agama')); ?>" method="post">
                <?php echo e(csrf_field()); ?> 
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama Agama</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="nmagama">
                  </div>

              </div>

            <div class="tile-footer">
              <div class="row">              
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                  <a class="btn btn-secondary" href="/agama"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>        
                
              </div>
              </form>
            </div>

          </div>
        </div>               
      </div>
    </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kelompok5\resources\views/agama/create.blade.php ENDPATH**/ ?>