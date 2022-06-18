<?php $__env->startSection('content'); ?>
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="<?php echo e(route('home')); ?>">Home</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Cart</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-12">
                    <h2 class="btn btn-warning text-white">Pending</h2>
                    <p>note:Harap melakukan pembayaran dp sebelum jadwal pemesanan lapangan</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Nama</th>
                                        <th class="product-thumbnail">tanggal</th>
                                        <th class="product-name">jam mulai</th>
                                        <th class="product-price">jam selesai</th>
                                        <th class="product-name">Lapangan</th>
                                        <th class="product-name">Jenis Lapangan</th>
                                        <th class="product-price">Status</th>
                                        <th class="product-price">jam</th>
                                        <th class="product-quantity" width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($booking->status_id == 1): ?>
                                            <tr>
                                                <td><?php echo e($booking->nama); ?></td>
                                                <td><?php echo e($booking->date); ?></td>
                                                <td><?php echo e($booking->start_time); ?></td>
                                                <td><?php echo e($booking->end_time); ?></td>
                                                <td><?php echo e($booking->arenas->id); ?></td>
                                                <td><?php echo e($booking->arenas->jenis->nama); ?></td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-outline-warning"><?php echo e($booking->status->nama); ?></button>
                                                </td>
                                                <?php
                                                    $hour = date('h', strtotime(Carbon\Carbon::parse($booking->end_time)->format('H:i:s'))) - date('h', strtotime(Carbon\Carbon::parse($booking->start_time)->format('H:i:s')));
                                                ?>
                                                <td><?php echo e($hour); ?></td>


                                                <td>
                                                    <a href="<?php echo e(route('order.checkout', $booking->id)); ?>"
                                                        class="btn btn-success">Bayar</a>
                                                    <a href=""
                                                        onclick="return confirm('Yakin ingin membatalkan pesanan')"
                                                        class="btn btn-danger">Batalkan</a>
                                                </td>

                                            </tr>
                                        <?php else: ?>
                                            
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

            <div class="container">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h2 class="btn btn-warning text-white">Booking</h2>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Nama</th>
                                    <th class="product-name">Tanggal</th>
                                    <th class="product-price">Start Time</th>
                                    <th class="product-price">End Time</th>
                                    <th class="product-price">Status</th>
                                    <th class="product-quantity" width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($booking->status_id == 2): ?>
                                        <tr>
                                            <td><?php echo e($booking->nama); ?></td>
                                            <td><?php echo e($booking->date); ?></td>
                                            <td><?php echo e($booking->start_time); ?></td>
                                            <td><?php echo e($booking->end_time); ?></td>
                                            <td><?php echo e($booking->arenas->id); ?></td>
                                            <td><?php echo e($booking->arenas->jenis->nama); ?></td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-outline-warning"><?php echo e($booking->status->nama); ?></button>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                    </div>

                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h2 class="btn btn-warning text-white">Riwayat Pesanan Anda</h2>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Nama</th>
                                                <th class="product-name">Total</th>
                                                <th class="product-price">Status</th>
                                                <th class="product-quantity" width="20%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                <?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/customer/order/index.blade.php ENDPATH**/ ?>