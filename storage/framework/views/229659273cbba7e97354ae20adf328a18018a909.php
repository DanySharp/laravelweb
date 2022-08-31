<?php $__env->startSection('content'); ?>



    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-info">
                <div class="card-block p-b-0 bg-inverse">
                    <div class="btn-group pull-left">
                        <button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-settings"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <h4 class="m-b-0"><?php echo e($usersCount); ?></h4>
                    <p>کاربران</p>
                </div>
                <div class="chart-wrapper p-x-1" style="height:70px;">
                    <canvas id="card-chart1" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-info">
                <div class="card-block p-b-0 bg-success">
                    <button type="button" class="btn btn-transparent active p-a-0 pull-left">
                        <i class="icon-location-pin"></i>
                    </button>
                    <h4 class="m-b-0"><?php echo e($CategoriesCount); ?></h4>
                    <p>دسته بندیها </p>
                </div>
                <div class="chart-wrapper p-x-1" style="height:70px;">
                    <canvas id="card-chart2" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->
        <!--/col-->



        <!--/col-->
        <!--/col-->
        <!--/col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-warning bg-danger">
                <div class="card-block p-b-0 ">
                    <div class="btn-group pull-left">
                        <button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-settings"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <h4 class="m-b-0"><?php echo e($postsCount); ?></h4>
                    <p>تعداد مطالب </p>
                </div>
                <div class="chart-wrapper" style="height:70px;">
                    <canvas id="card-chart3" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-deck card-danger bg-dark">
                <div class="card-block p-b-0 bg-dark">
                    <div class="btn-group pull-left ">
                        <button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-settings"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <h4 class="m-b-0"><?php echo e($photosCount); ?></h4>
                    <p>تعداد تصاویر </p>
                </div>
                <div class="chart-wrapper p-x-1" style="height:70px;">
                    <canvas id="card-chart4" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->

    </div>

    <div class="row">
        <div class="col-md-6"></div>
        <h3>Last Posts</h3>
        <table  class="table table-hover bg-content">
            <thead>
            <tr class="text-justify">
                <th>عنوان</th>
                <th>دسته بندی</th>
                <th>تاریخ ارسال</th>
            </tr>
            </thead>
            <tbody>

            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="active">

                    <td><a href="<?php echo e(route('posts.edit',$post->id)); ?>"><?php echo e($post->title); ?></a></td>
                    <td><?php echo e($post->category->title); ?></td>
                    <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($post->created_at)); ?></td>
                    

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>




    </div>










    <div class="row">
        <div class="col-md-6"></div>
        <h3>Last Users</h3>






        <table  class="table table-hover bg-content">
            <thead>
            <tr>

                <th>نام</th>
                <th>ایمیل</th>

                <th>تاریخ ایجاد</th>
            </tr>
            </thead>
            <tbody style="vertical-align: middle">

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr class="active">



                    <td><a href="<?php echo e(route('users.edit',$user->id)); ?>"><?php echo e($user->name); ?></a></td>
                    <td><?php echo e($user->email); ?></td>


                    <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($user->created_at)); ?></td>
                    

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>




    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/dashboard/index.blade.php ENDPATH**/ ?>