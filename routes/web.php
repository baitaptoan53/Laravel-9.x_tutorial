<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\UriController;
use App\Http\Controllers\UserRegistration;
use App\Http\Controllers\CookieController;
use Illuminate\Http\Request;
use App\Models\User;
use Whoops\Run;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get($path,$callback)
// Route::post('unicode', function () {
//     return 'Phuong thuc post cua path/ unicode';
// });
// Route::put('unicode', function () {
//     return 'phuong thuc put cua unicode';
// });
// Route::delete('unicode', function () {
//     return 'phuong thuc delete cua unicode';
// });
// gop tat ca cac routes 

// Route::match(['get','post'], 'unicode', function(){
//     return $_SERVER['REQUEST_METHOD'];
// });
// Route::any('unicode',function(Request $request)
// {
//     return $request->method();
// });

// Route::redirect('unicode','google.com');


// Route::get('/', function () {
//     return view('home');
// })->name('home');

//cach goi get bang controller
// Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
// Route::get('/tin-tuc', 'App\Http\Controllers\HomeController@GetNew')->name('news');
// Route::get('/chuyen-muc', [HomeController::class, 'getCategories']);
// // chi ho tro get-git
// // Route::view('show-form', 'form');


// // Route::view('/welcome', 'welcome');
// // Route::view('/welcome', 'welcome', ['name' => 'Lê Chí Huy']);
// Route::prefix('admin')->group(function () {
//     Route::get('/tin-tuc/{slug?}-{id?}.html', function ($slug = null, $id = null) {
//         $content = 'phuong thuc get cua path/unicode voi tham so: ';
//         $content .= 'id=' . $id . '<br>';
//         $content .= 'slug=' . $slug;
//         return $content;
//     })->where(
//         [
//             'slug' => '.+',
//             'id' => '[0-9]+'
//         ]
//     )->name('admin.tin-tuc');
//     Route::get('/show-form', function () {
//         return view('form');
//     })->name('admin.show-form');
//     Route::prefix('/product')->group(function () {
//         Route::get('/', function () {
//             return 'Danh sach san pham';
//         });
//         Route::get('/add', function () {
//             return 'Them san pham';
//         });
//         Route::get('/edit', function () {
//             return 'Sua san pham';
//         });
//         Route::get('/delete', function () {
//             return 'Xoa san pham';
//         });
//     });
// });

Route::get('/', function () {
                   $title = "Nguyen xuan ngoc";
                   $title_2 = " Khoa K62";
                   return view('home', compact('title', 'title_2'));
})->name('home');
Route::prefix('categories')->group(function () {
                   //Danh sach chuyen muc
                   Route::get('/', [CategoriesController::class, 'index']);

                   //lay chi tiet 1 chuyen muc (ap dung show-form sua chuyem muc)
                   Route::get('/edit/{id}', [CategoriesController::class, 'getCategories'])->name('Categories.edit');

                   //xu ly uppdate chuyen muc
                   Route::post('/update/{id}', [CategoriesController::class, 'updateCategories'])->name('Categories.update');

                   //hien thi form add du lieu
                   Route::get('/add', [CategoriesController::class, 'addCategories'])->name('Categories.add');

                   //Xu ly them chuyen muc
                   Route::post('/add', [CategoriesController::class, 'handCategories'])->name('Categories.add');

                   //Xoa chuyen muc
                   Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategories'])->name('Categories.delete');
});
Route::prefix('admin')->group(function () {
                   Route::get('/', [DashboardController::class, 'index']);

                   Route::resource('products', ProductsController::class);
});
Route::get('/foo/bar', [UriController::class, 'index']);


Route::get('/register', function () {
                   return view('register');
});

Route::post('user/register', array('uses' => 'UserRegistration@postRegister'));

Route::get('/cookie/set', [CookieController::class, 'setCookie']);
Route::get('/cookie/get', [CookieController::class, 'getCookie']);
Route::get('/', [HomeController::class, 'index'])->name('home');
//cu phap template blade
Route::get('/products', [HomeController::class, 'products'])->name('products');
