<?php require APPROOT . '/views/inc/header.php';
?>
<h1>
    <br>
    <?php foreach ($data['post'] as $post) : ?>


        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="<?php echo $post->image; ?>" alt="product image" />
            </a>
            <div class="px-5 pb-5 text-center">
                <a href="#">
                    <h5 class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"><?php echo $post->name; ?></h5>
                </a>
                <p class=" font-bold text-gray-600 dark:text-white"><?php echo $post->desc; ?></p>

                <div class="flex justify-center ">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white"><?php echo $post->prix; ?></span>
                </div>
            </div>
        </div>


    <?php endforeach; ?>

</h1>
<?php require APPROOT . '/views/inc/footer.php';
?>