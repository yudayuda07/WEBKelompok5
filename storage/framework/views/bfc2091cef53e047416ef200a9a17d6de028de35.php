<?php $__env->startSection('title'); ?>
Master Agama
<?php $__env->stopSection(); ?>
<?php $__env->startSection('master'); ?>
active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Master Agama</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel Master</li>
          <li class="breadcrumb-item"><a href="#">Agama</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <!-- <h2 class="mb-3 line-head" id="buttons">Data Pegawai</h2> -->
              <div class="form-group col-md 8">              
              <a href="<?php echo e(route('agama.create')); ?>"
              class="btn btn-primary"><span class="fa fa-plus"> Tambah Agama</span></a>
              </div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Agama</th>                      
                      <th>Operasi</th>                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no_urut=1;
                  ?>
                    <?php $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tampil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($no_urut++); ?></td>
                      <td><?php echo e($tampil->nmagama); ?></td>                    
                      <td>
                        <a href="<?php echo e(route('agama.edit', $tampil->id_agm)); ?>"
                        class="btn btn-info"><span class="fa fa-edit (alias)"> Edit</span></a>
                      </td>
                      <td>
                        <button class="btn btn-danger btn_modal_hapus" data-url="<?php echo e(route('agama.destroy', $tampil->id_agm)); ?>" type="button" ><span class="fa fa-trash"> Hapus</span></button>                        
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                    
                  </tbody>
                </table>         
            </div>            
          </div>
        </div>
        <div class="row">      
          
        </div>
      </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kelompok5\resources\views/agama/tampil.blade.php ENDPATH**/ ?>