<?php $__env->startSection('content'); ?>

    <div class="site-section">
        <div class="container">
            <div class="image-header">
                <img src="<?php echo e(asset('storage/' . $arenas->image)); ?>" alt="">
                <h1>Futsal Sport Centre</h1>
            </div>
            <div class="lapangan">
                <div class="title">
                    <h2>Lapangan <?php echo e($arenas->id); ?></h2>
                    <h4><a href="<?php echo e(route('detail-lapangan', $arenas->jenis->id)); ?>"><?php echo e($arenas->jenis->name); ?></a>
                    </h4>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><?php echo e($arenas->jenis->name); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lapangan <?php echo e($arenas->id); ?></li>
                    </ol>
                </nav>

                <div class="cek-jadwal">
                    <h4>Pilih Tanggal Booking : </h4>
                    <form action="<?php echo e(url()->current()); ?>" method="get">
                        <div class="form-group mb-2">
                            <label for="jadwals">pilih tanggal booking</label>
                            <input type="date" class="form-control " id="jadwals" name="jadwals"
                                value="<?php echo e(request('jadwals')); ?>" />
                        </div>
                        <button type="submit" class="btn btn-primary" value="jadwals">Cek Jadwal</button>
                    </form>
                    <?php if(isset($jadwals)): ?>
                        <?php if(count($bookings) > 0): ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered" id="table">
                                    <thead>
                                        <tr>
                                            <th>date</th>
                                            <th>start time</th>
                                            <th>end time</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($booking->date); ?></td>
                                                <td><?php echo e($booking->start_time); ?></td>
                                                <td><?php echo e($booking->end_time); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info" style="margin-top: 50px">
                                <strong>Belum ada jadwal </strong>
                            </div>
                        <?php endif; ?>
                        <a href="<?php echo e(route('booking.lapangan', $arenas->id)); ?>" class="btn btn-primary">Booking
                            Sekarang</a>
                    <?php endif; ?>

                </div>
            </div>



        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/customer/lapangan/index.blade.php ENDPATH**/ ?>