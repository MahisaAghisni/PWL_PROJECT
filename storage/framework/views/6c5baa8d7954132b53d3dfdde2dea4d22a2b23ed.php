<?php $__env->startSection('content'); ?>
    <div class="site-blocks-cover" style="background-image: url(<?php echo e(asset('shopper')); ?>/images/bg-image2.jpg);"
        data-aos="fade">
        <div class="container">
            <div class="row align-items-start align-items-md-center justify-content-end">
                <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                    <h1 class="mb-2">Booking Lapangan Olahraga Jadi Lebih Mudah</h1>
                    <div class="intro-text text-center text-md-left">
                        <p class="mb-4">Cari jadwal lapangan dan aktivitas olahraga tanpa harus keluar rumah</p>
                        <p>
                            <a href="<?php echo e(route('daftar-lap')); ?>" class="btn btn-sm btn-primary">Jelajahi Sekarang</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/customer/home/index.blade.php ENDPATH**/ ?>