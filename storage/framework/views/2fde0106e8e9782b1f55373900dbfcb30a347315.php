
<h1>Employee List</h1>
<?php if(count($members)): ?>
	<ul>
	<?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li><?php echo e($staff); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>


<?php endif; ?><?php /**PATH D:\xampp\htdocs\bob\resources\views/employee.blade.php ENDPATH**/ ?>