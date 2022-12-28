<?php
include_once 'includes/header.php';
?>
<div class="w-full top-14 bg-gray-800 flex fixed justify-center">
  <a id="btnCommands" class="border cursor-pointer border-solid hover:bg-gray-600 border-gray-600 w-fit text-gray-200 flex my-auto p-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 my-auto text-white mx-2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
    </svg>
    <span class="max-sm:hidden">Commands</span>

  </a>
  <a id="btnClients" class="border cursor-pointer border-solid hover:bg-gray-600 border-gray-600 w-fit text-gray-200 flex my-auto p-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 w-4 h-4 my-auto text-white mx-2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
    </svg>
    <span class="max-sm:hidden">Clients</span>
  </a>
  <a id="btnProducts" class="border cursor-pointer border-solid hover:bg-gray-600 border-gray-600 w-fit text-gray-200 flex my-auto p-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 w-4 h-4 my-auto text-white mx-2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
    </svg>
    <span class="max-sm:hidden">Products</span>

  </a>
  <a id="btnCategories" class="border cursor-pointer hover:bg-gray-600 border-solid border-gray-600 w-fit text-gray-200 flex my-auto p-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 w-4 h-4 my-auto text-white mx-2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
    </svg>
    <span class="max-sm:hidden">Categories</span>

  </a>
</div>

</header>

<main class="all m-14 mt-28">
  <div class="text-center mt-20">
    <img src="public/img/Profile/321059533_1093486834655909_8466472925953741460_n.jpg" class="rounded-full w-32 mb-4 mx-auto" alt="Avatar" />
    <h5 class="text-xl font-medium leading-tight mb-2">Mohcine Khribech</h5>
    <p class="text-gray-500 flex justify-center">Welcome <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
      </svg>
    </p>
    <hr class="color-gray-900 mt-4">
  </div>

  <div id="Commands" class="hidden">
    <p class="font-medium text-lg text-center color-gray-500 mt-4">Your Commands</p>
    <hr class="color-gray-900 mt-4">
    <div class="flex justify-between p-4">
      <p class="text-md font-medium hover:font-bold"><a href="">Command N°1</a> </p>
      <p class="text-md text-gray-400">18/03/2003</p>
      <p>Total Price : <span class="text-md font-semibold text-lime-500">999 DH</span></p>
      <p class="text-md font-semibold text-red-500 hover:font-bold"><a href="">Cancel</a></p>
    </div>
    <hr class="color-gray-900">

    <div class="flex justify-between p-4">
      <p class="text-md font-medium hover:font-bold"><a href="">Command N°2</a> </p>
      <p class="text-md text-gray-400">18/03/2003</p>
      <p>Total Price : <span class="text-md font-semibold text-lime-500">999 DH</span></p>
      <p class="text-md font-semibold text-red-500 hover:font-bold"><a href="">Cancel</a></p>
    </div>
    <hr class="color-gray-900">

    <div class="flex justify-between p-4">
      <p class="text-md font-medium hover:font-bold"><a href="">Command N°3</a> </p>
      <p class="text-md text-gray-400">18/03/2003</p>
      <p>Total Price : <span class="text-md font-semibold text-lime-500">999 DH</span></p>
      <p class="text-md font-semibold text-red-500 hover:font-bold"><a href="">Cancel</a></p>
    </div>
    <hr class="color-gray-900">

    <div class="flex justify-between p-4">
      <p class="text-md font-medium hover:font-bold"><a href="">Command N°4</a> </p>
      <p class="text-md text-gray-400">18/03/2003</p>
      <p>Total Price : <span class="text-md font-semibold text-lime-500">999 DH</span></p>
      <p class="text-md font-semibold text-red-500 hover:font-bold"><a href="">Cancel</a></p>
    </div>
    <hr class="color-gray-900">

    <div class="flex justify-between p-4">
      <p class="text-md font-medium hover:font-bold"><a href="">Command N°5</a> </p>
      <p class="text-md text-gray-400">18/03/2003</p>
      <p>Total Price : <span class="text-md font-semibold text-lime-500">999 DH</span></p>
      <p class="text-md font-semibold text-red-500 hover:font-bold"><a href="">Cancel</a></p>
    </div>
    <hr class="color-gray-900">

    <div class="flex justify-between p-4">
      <p class="text-md font-medium hover:font-bold"><a href="">Command N°6</a> </p>
      <p class="text-md text-gray-400">18/03/2003</p>
      <p>Total Price : <span class="text-md font-semibold text-lime-500">999 DH</span></p>
      <p class="text-md font-semibold text-red-500 hover:font-bold"><a href="">Cancel</a></p>
    </div>
    <hr class="color-gray-900">

    <div class="flex justify-between p-4">
      <p class="text-md font-medium hover:font-bold"><a href="">Command N°7</a> </p>
      <p class="text-md text-gray-400">18/03/2003</p>
      <p>Total Price : <span class="text-md font-semibold text-lime-500">999 DH</span></p>
      <p class="text-md font-semibold text-red-500 hover:font-bold"><a href="">Cancel</a></p>
    </div>
    <hr class="color-gray-900">
  </div>

  <div id="Clients" class="hidden">
    <p class="font-medium text-lg text-center color-gray-500 mt-4">Your Clients</p>
    <hr class="color-gray-900 mt-4">
    <?php
    $test3 = new clientController;
    $post = $test3->getClient();
    $i = 1;
    foreach ($post as $key => $value) { ?>

      <div class="flex justify-between p-4 max-sm:flex-col">
        <p class="text-md font-medium my-auto">#<?= $i; ?></p>
        <p class="text-md font-medium hover:font-bold my-auto"><?= $value['fullName'] ?></p>
        <p class="text-md text-gray-400 my-auto"><?= $value['phoneNumber'] ?></p>
        <p class="text-md text-gray-400 my-auto"><?= $value['email'] ?></p>
      </div>
      <hr class="color-gray-900">

    <?php
      $i++;
    }
    ?>
  </div>

  <div id="Products" class="hidden">
    <p class="font-medium text-lg text-center color-gray-500 mt-4">Your Products</p>
    <hr class="color-gray-900 my-4">
    <center>
      <a href="?p=AddProductForm" class="flex w-fit mt-4 mb-6 hover:bg-lime-200 bg-lime-500 p-2 rounded-lg hover:text-lime-500 text-white font-bold text-md">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
        </svg>
        Add Product
      </a>

    </center>
    <div class="Home-Category">
      <?php
      $test2 = new productController;
      $post = $test2->getproducts();
      foreach ($post as $key => $value) { ?>
        <div class="product h-80 w-60 border-2 border-solid mx-auto border-amber-100 bg-gray-50">
          <a href="?p=ProductInfo&id=<?= $value['productId'] ?>">

            <img src="<?= $value['productPic'] ?>" alt="" class="w-5/6 rounded-sm h-3/6 mx-6 my-4">
            <h3 class="text-center text-l font-semibold"><?= $value['productName'] ?></h3>
            <p class="text-sm font-light p-4"><span class="font-medium">Category : </span> <?= $value['productCategory'] ?></p>
            <div class="flex justify-between mr-4 items-center">
              <p class="font-bold px-4 text-lime-500"><?= $value['finalPrice'] ?> DH</p>
              <?php if ($value['hide'] == 0) { ?>
                <a href="?p=Dashboard&a=hide&id=<?= $value['productId'] ?>" class="Masquer p-2 w-fit text-white rounded-xl hover:text-red-500 hover:bg-red-200 bg-red-500">
                  <svg class="w-6 h-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                  </svg>

                </a>
              <?php } else if ($value['hide'] == 1) { ?>
                <a href="?p=Dashboard&a=show&id=<?= $value['productId'] ?>" class="Masquer p-2 w-fit text-white rounded-xl hover:text-blue-500 hover:bg-blue-200 bg-blue-400">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>

                </a>
              <?php } ?>
              <a href="?p=updateProductForm&id=<?= $value['productId'] ?>" class="shop p-2 w-fit text-white rounded-xl hover:text-lime-500 hover:bg-lime-200 bg-lime-500">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
              </a>
            </div>
          </a>
        </div>

      <?php
      }
      ?>
    </div>
  </div>

  <div id="Categories" class="hidden">
    <p class="font-medium text-lg text-center color-gray-500 mt-4">Your Categories</p>
    <hr class="color-gray-900 my-4">
    <center>
      <a href="?p=AddCategoryForm" class="flex transition w-fit ease-linear mt-4 mb-6 hover:bg-lime-200 bg-lime-500 p-2 rounded-lg hover:text-lime-500 text-white font-bold text-md">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
        </svg>
        Add Category
      </a>
    </center>
    <div class="categories">
      <?php
      $test = new categoryController;
      $post = $test->getCategories();
      foreach ($post as $key => $value) { ?>
        <div class="category">
          <img class="mx-auto" src="<?= $value['categoryPic'] ?>" alt="">
          <p class="Category-Name"><?= $value['categoryName'] ?></p>
          <p class="Category-description text-sm text-center font-light p-4"><?= $value['categoryDescription'] ?></p>
          <div class="flex space-x-4 p-2">
            <?php if ($value['hide'] == 0) { ?>
              <a href="?p=Dashboard&a=hideC&id=<?= $value['categoryId'] ?>" class="Masquer p-2 w-fit text-white rounded-xl hover:text-red-500 hover:bg-red-200 bg-red-500">
                <svg class="w-6 h-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                </svg>
              </a>
            <?php } else if ($value['hide'] == 1) { ?>
              <a href="?p=Dashboard&a=showC&id=<?= $value['categoryId'] ?>" class="Masquer p-2 w-fit text-white rounded-xl hover:text-blue-500 hover:bg-blue-200 bg-blue-400">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
              </a>
            <?php } ?>
            <a href="?p=updateCategory&id=<?= $value['categoryId'] ?>" class="shop p-2 w-fit text-white rounded-xl hover:text-lime-500 hover:bg-lime-200 bg-lime-500">
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
              </svg>
            </a>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  </div>
</main>

<?php
include_once 'includes/footer.php'
?>