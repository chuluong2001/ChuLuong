<!-- header -->
<?php echo $__env->make('Admins.Layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Sidebar -->
<?php echo $__env->make('Admins.Layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Topbar -->
<?php echo $__env->make('Admins.Layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Manage Pets</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Pets</li>
            </ol>
            <?php if(session('msg')): ?>
                <div class="alert alert-success"><?php echo e(session('msg')); ?></div>
            <?php endif; ?>
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for=""> Name Pets </label>
                    <input type="text" class="form-control" name="name" value ="<?php echo e($cate->name); ?>" placeholder="Name Pets">
                </div>
                <div class="mb-3">
                    <label for="">Breed</label>
                    <input type="text" class="form-control" name="breed" value ="<?php echo e($cate->breed); ?>" placeholder="Breed ..." >
                </div>
                <div class="mb-3">
                    <label for=""> Gender </label>
                    <input type="text" class="form-control" name="gender" value ="<?php echo e($cate->gender); ?>" placeholder="Gender ...">
                </div>
                <div class="mb-3">
                    <label for=""> Price </label>
                    <input type="text" class="form-control" name="price" value ="<?php echo e($cate->price); ?>" placeholder="Price ...">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description" value ="<?php echo e($cate->description); ?>" placeholder="Description ..." >
                </div>
                <div class="mb-3">
                    <label for=""> Quantity  </label>
                    <input type="text" class="form-control" name="quantity" value ="<?php echo e($cate->quantity); ?>" placeholder="Quantity ...">
                </div>
                <div class="mb-3">
                    <label for="imageInput">Image</label>
                    <div class="input-group">
                        <label class="input-group-text" for="imageInput"><input type="file" id="imageInput" name="image_url" value ="<?php echo e($cate->image_url); ?>" accept="image/*"></label>
                    </div>
                </div> 
                <div class="mb-3">
                    <label for=""> Status </label>
                    <input type="text" class="form-control" name="status" value ="<?php echo e($cate->status); ?>" placeholder="Status ...">
                </div>
                <div class="mb-3">
                    <?php if($categories != null): ?>
                    <label for=""> Categori </label>
                    <select id="inputCategori" class="form-control" name="category_id">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($categori->category_id); ?>"><?php echo e($categori->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-info"> Edit </button>
                <button type="reset" class="btn btn-primary">Reset Button</button>
                <a href="<?php echo e(asset('Admins/Pets/managepets')); ?>" class="btn btn-warning">Back</a>

            </form>
        </div>
    </main>
</div>


<!-- footer -->
<?php echo $__env->make('Admins.Layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- back to top -->
<?php echo $__env->make('Admins.Layouts.back_to_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- logout -->
<?php echo $__env->make('Admins.Layouts.logout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- JS -->
<?php echo $__env->make('Admins.Layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GraduationThesis_PetE-commerce_G5\resources\views/Admins/Contents/editpets.blade.php ENDPATH**/ ?>