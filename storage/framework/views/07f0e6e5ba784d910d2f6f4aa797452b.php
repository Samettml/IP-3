<?php $__env->startSection('main'); ?>
    İletişim Sayfası İçeriği
    <br><br>
    <?php if($errors->any()): ?>
      <h2> <strong>Hatalı veri girişi!!</strong></h2>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php echo e($error); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>


    <?php endif; ?>

    <h5>İletişim Formu</h5>
    <form action="" method="POST">
        <?php echo csrf_field(); ?>
        İsminiz
        <br><input type="text" name="isim"/>
        <br><br>
        Konu:
        <br>
            <select name="konu">
                <option>Öğrenci İşleri</option>
                <option>Sosyal Olanaklar</option>
                <option>Diğer</option>
            </select>
        <br><br>
        Mesajınız:
        <br>
        <textarea name="mesaj"></textarea>
        <br>
        <input type="submit" value="Mesajı Gönder"/>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mhmet\Desktop\ip-2\ip-2\resources\views/contact.blade.php ENDPATH**/ ?>