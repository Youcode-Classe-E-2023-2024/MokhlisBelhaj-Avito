<?php require APPROOT . '/views/inc/header.php';
?>
<div class="flex  mt-3 justify-center">
    
    <div class="bg-white w-6/12 flex flex-col justify-center   ">
   
        <a class="flex   justify-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="<?php echo URL ?>pages/dashboard">
        << back
        </a>
            

  <form class="bg-white w-full shadow-md rounded px-8 pt-6 pb-8 mb-4"  action="<?php echo URL; ?>/posts/send" method="post">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        name hhh
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="productname" type="text" placeholder="name">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
        description 
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="productdescription" type="text" placeholder="product description">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
        image 
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="productimage" type="file">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="prix">
        prix 
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="productprix" type="number"  placeholder="product prix">
    </div>
    
      
    <div class="flex items-center justify-center">
      <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        add
      </button>
  </form>
  <p class="text-center text-gray-500 text-xs">
    
  </p>
</div>
</div>