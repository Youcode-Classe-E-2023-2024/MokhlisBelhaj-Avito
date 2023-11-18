<?php require APPROOT . '/views/inc/header.php'; ?>
<h1 class="text-3xl p-4 font-bold text-gray-900 dark:text-white text-center uppercase">dashboard</h1>
<br>
<div class="flex justify-center">
    <a href="<?php echo URL ?>posts/add" class="  inline-flex items-center justify-between px-4 py-2  hover:bg-gray-300 text-gray-800 text-sm font-medium rounded-md bg-green-600" style="width: 130px;">
        <h1>add post</h1>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="20" height="20" viewBox="0 0 256 256" xml:space="preserve">
    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
        <path d="M 45 68.988 c -1.104 0 -2 -0.896 -2 -2 V 23.011 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 43.977 C 47 68.093 46.104 68.988 45 68.988 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
        <path d="M 66.988 47 H 23.011 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 h 43.977 c 1.104 0 2 0.896 2 2 S 68.093 47 66.988 47 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
        <path d="M 88 90 H 2 c -1.104 0 -2 -0.896 -2 -2 V 2 c 0 -1.104 0.896 -2 2 -2 h 86 c 1.104 0 2 0.896 2 2 v 86 C 90 89.104 89.104 90 88 90 z M 4 86 h 82 V 4 H 4 V 86 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
    </g>
    </svg>
</a>
</div>

<div class=" overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3">
                    image
                </th>
                <th scope="col" class="px-6 py-3">
                    description
                </th>
                <th scope="col" class="px-6 py-3">
                    prix
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($data['post'] as $post) : ?>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo $post->name; ?>
                    </th>
                    <td class="px-6 py-4">
                    <?php echo $post->image; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $post->desc; ?>
                    </td>
                    <td class="px-6 py-4">
                        $<?php echo $post->prix; ?>
                    </td>
                    <td class=" flex content-center justify-between ">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>