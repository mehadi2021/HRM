
<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('payroll.store')); ?>"  method='post'>
<?php echo csrf_field(); ?>

       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div>
               <label for="">Select Employee</label>
               <select name="user_id" id=""class="form-control"> 
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </select>

               </div>

               <div>
               <label for="salary_structure_id">salary_structure </label>
               <select name="salary_structure_id" id=""class="form-control"> 
               <?php $__currentLoopData = $salary_structures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
          </div>
          <div>
          <div>
                   <label for="">Select Month</label>
                   <select name="month" id="" class="form-control">
                       <option value="january">January</option>
                       <option value="february">February</option>
                       <option value="March">March</option>
                       <option value="April">April</option>
                       <option value="May">May</option>
                       <option value="June">June</option>
                       <option value="July">July</option>
                       <option value="August">August</option>
                       <option value="September">September</option>
                       <option value="October">October</option>
                       <option value="November">November</option>
                       <option value="December">December</option>
                   </select>
               </div>
               
               
             

                <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

           </div>
           <div class="col-md-2"></div>

       </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spring-2023\hr-management-system\resources\views/backend/payroll/form.blade.php ENDPATH**/ ?>