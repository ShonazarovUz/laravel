
<?php if (isset($component)) { $__componentOriginal8a240419d16b3c1a159498153f053ed2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a240419d16b3c1a159498153f053ed2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<section class="relative md:py-24 pt-24 pb-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-7">
                <div class="grid grid-cols-1 relative">
                    <div class="tiny-one-item">
                        <div class="tiny-slide">


                        </div>

                        <div class="tiny-slide">
                            <img src="assets/images/property/single/2.jpg"
                                 class="rounded-md shadow dark:shadow-gray-700" alt="">
                        </div>

                        <div class="tiny-slide">
                            <img src="assets/images/property/single/3.jpg"
                                 class="rounded-md shadow dark:shadow-gray-700" alt="">
                        </div>

                        <div class="tiny-slide">
                            <img src="assets/images/property/single/4.jpg"
                                 class="rounded-md shadow dark:shadow-gray-700" alt="">
                        </div>

                        <div class="tiny-slide">
                            <img src="assets/images/property/single/5.jpg"
                                 class="rounded-md shadow dark:shadow-gray-700" alt="">
                        </div>
                    </div>
                </div>

                <h4 class="text-2xl font-medium mt-6 mb-3"><?php echo e($ad->title); ?>


                <ul class="py-6 flex items-center list-none">
                    <li class="flex items-center lg:me-6 me-4">
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                        <i class="fas fa-map-marker-alt g:text-3xl text-2xl me-2 text-green-600"></i>
                        <span class="lg:text-xl"><?= $ad->address;?></span>
                    </li>


                    <li class="flex items-center lg:me-6 me-4">
                        <i class="uil uil-bed-double lg:text-3xl text-2xl me-2 text-green-600"></i>
                        <span class="lg:text-xl"><?= $ad->rooms;?> xona</span>
                    </li>

                    <li class="flex items-center me-4">
                        <i class="uil uil-users-alt icons text-2xl me-2 text-green-600"></i>
                        <span><?php echo e($ad->gender); ?> </span>
                    </li>

                </ul>

                <p class="text-slate-400"><?= $ad->description;?></p>

                <div class="w-full leading-[0] border-0 mt-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                            style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-5">
                <div class="sticky top-20">
                    <div class="rounded-md bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700">
                        <div class="p-6">
                            <h5 class="text-2xl font-medium">Narxi: <?= $ad->price;?>$</h5>

                            <div class="flex justify-between items-center mt-4">

                            </div>

                            <ul class="list-none mt-4">
                                <li class="flex justify-between items-center">
                                    <span class="text-slate-400 text-sm">Status</span>
                                    <span class="font-medium text-sm"><?php echo e($ad->status_id); ?></span>
                                </li>

                                <li class="flex justify-between items-center mt-2">
                                    <span class="text-slate-400 text-sm">Filial:</span>
                                    <span class="font-medium text-sm"> <?php echo e($ad->branch_id); ?></span>
                                </li>

                                <li class="flex justify-between items-center mt-2">
                                    <span class="text-slate-400 text-sm">User:</span>
                                    <span class="font-medium text-sm"><?php echo e($ad->user_id); ?> </span>
                                </li>

                                <li class="flex justify-between items-center mt-2">
                                    <span class="text-slate-400 text-sm">Sana:</span>
                                    <span class="font-medium text-sm"><?php echo e($ad->created_at); ?></span>

                                <li class="flex justify-between items-center mt-2">
                                    <span class="text-slate-400 text-sm">Telifon nommer:</span>
                                    <span class="font-medium text-sm"><?php echo e($ad->phone); ?></span>
                                </li>
                            </ul>
                        </div>

                        <div class="flex">
                            <div class="p-1 w-1/2">
                                <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Book
                                    Now</a>
                            </div>
                            <div class="p-1 w-1/2">
                                <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Offer
                                    Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 text-center">
                        <h3 class="mb-6 text-xl leading-normal font-medium text-black dark:text-white">Have Question ?
                            Get in touch!</h3>

                        <div class="mt-6">
                            <a href="contact.html"
                               class="btn bg-transparent hover:bg-green-600 border border-green-600 text-green-600 hover:text-white rounded-md"><i
                                    class="uil uil-phone align-middle me-2"></i> Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End -->
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $attributes = $__attributesOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__attributesOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $component = $__componentOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__componentOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php /**PATH /var/www/resources/views/components/single-ad.blade.php ENDPATH**/ ?>