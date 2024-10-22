

<?php $__env->startSection('main'); ?>
    İletişim Sayfası İçeriği
    <br><br>
    <?php if($errors->any()): ?>
        <h2> <strong>Hatalı veri girişi!!</strong></h2>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <h5>İletişim Formu</h5>
    <form action="" method="POST">
        <?php echo csrf_field(); ?>
        İsminiz
        <br><input type="text" name="isim" value="<?php echo e(old('isim')); ?>"/>  <!-- Eski isim verisi -->
        <br><br>
        Konu:
        <br>
        <select name="konu">
            <option <?php echo e(old('konu') == 'Öğrenci İşleri' ? 'selected' : ''); ?>>Öğrenci İşleri</option>
            <option <?php echo e(old('konu') == 'Sosyal Olanaklar' ? 'selected' : ''); ?>>Sosyal Olanaklar</option>
            <option <?php echo e(old('konu') == 'Diğer' ? 'selected' : ''); ?>>Diğer</option>
        </select> <!-- Eski konu verisi -->
        <br><br>
        Mesajınız:
        <br>
        <textarea name="mesaj"><?php echo e(old('mesaj')); ?></textarea> <!-- Eski mesaj verisi -->
        <br>
        <input type="submit" value="Mesajı Gönder"/>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mhmet\Desktop\internet programcılığı\IP-3\resources\views/contact.blade.php ENDPATH**/ ?>