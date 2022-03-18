<?php

use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ManageGalleryController;
use App\Http\Controllers\Admin\ManageRolesController;
use App\Http\Controllers\Admin\ManageUsersController;
use App\Http\Controllers\CommonControllers\DashboardController;
use App\Http\Controllers\CommonControllers\EditProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::view('/','welcome');
Route::view('/about','web.about.about')->name('about');
Route::view('/contact','web.contact.contact')->name('contact');
Route::view('/events','web.events.events')->name('events');
Route::view('/event-details','web.events.event-details')->name('event_details');
Route::get('/alumni',[\App\Http\Controllers\CommonControllers\AlumniController::class, 'getAlumniFrontEnd'])->name('alumni');
Route::get('/alumni/{alumni_id}',[\App\Http\Controllers\CommonControllers\AlumniController::class, 'getSingleAlumniFrontEnd'])->name('front_alumni');

Route::get('/clear-all/{id}', function($id) {
    if ($id == 'admin1234') {
        $exitCode = Artisan::call('cache:clear');
        $exitCode = Artisan::call('config:clear');
        $exitCode = Artisan::call('view:clear');
        $exitCode = Artisan::call('route:clear');
        return 'Cache,config,view,route clear done!';
    }
    else{
        return 'Sorry, wrong pin.';
    }
});


Auth::routes(['verify' => true]);

/*
-----------------------------------------------------------
 ==== Dashboard Routes Start  Here  ===
-----------------------------------------------------------
*/
Route::GET('/dashboard', [DashboardController::class,'index'])->name('dashboard')->middleware('auth');
Route::POST('/profile_photo_upload', [DashboardController::class, 'profile_photo_upload'])->name('profile_photo_upload')->middleware('auth');




/*
-----------------------------------------------------------
 ==== Edit Profile Start  Here  ===
-----------------------------------------------------------
*/
Route::GET('/edit-user-profile', [EditProfileController::class, 'index'])->name('edit_user_profile')->middleware('auth');
Route::POST('/update-user-password',[EditProfileController::class, 'update_user_password'])->name('update_user_password')->middleware('auth');
Route::POST('/update-user-other-info',[EditProfileController::class, 'update_user_other_info'])->name('update_user_other_info')->middleware('auth');







/*
-----------------------------------------------------------
 ==== Spatie Role Permission starts Here  ===
-----------------------------------------------------------
*/
Route::group(['middleware' => ['auth']], function() {
    Route::resource('manage_roles', ManageRolesController::class);
    Route::resource('manage_users', ManageUsersController::class);

});


/*
-----------------------------------------------------------
 ==== Manage Alumni starts Here  ===
-----------------------------------------------------------
*/
Route::GET('/manage-alumni/create/{user_id}', [\App\Http\Controllers\CommonControllers\AlumniController::class, 'create'])->name('manage_alumni.create_non_resource')->middleware('auth');
Route::resource('manage_alumni', \App\Http\Controllers\CommonControllers\AlumniController::class)->middleware('auth');
Route::get('/search', [\App\Http\Controllers\CommonControllers\AlumniController::class,'action'])->name('live_search.action');



/*
-----------------------------------------------------------
 ==== Manage ExStudents starts Here  ===
-----------------------------------------------------------
*/

Route::get('/manage-ex-students-list', [ExStudentController::class,'index'])->middleware('auth')->name('manage_ex_students');
Route::POST('/manage-ex-students/update-alumni-status', [ExStudentController::class,'update_alumni_status'])->middleware('auth')->name('manage_ex_students.update_alumni_status');


/*
-----------------------------------------------------------
 ==== Manage Blogs Here  ===
-----------------------------------------------------------
*/

Route::resource('/blogs', BlogController::class)->middleware('auth');
Route::resource('blog_categories', BlogCategoryController::class)->middleware('auth');
Route::get('/blogs-front', [BlogController::class,'home_blogs'])->name('blogs_front');
Route::get('/blog/{blog_id}', [BlogController::class, 'single_blog'])->name('single_blog');


/*
-----------------------------------------------------------
 ==== Manage Gallery Here  ===
-----------------------------------------------------------
*/

//Route::resource('/gallery', ManageGalleryController::class)->middleware('auth');

Route::GET('/gallery-index', [ManageGalleryController::class,'index'])->name('gallery_index');
Route::post('/create-photo-album',[ManageGalleryController::class,'create'])->name('create_photo_album');
Route::post('/edit-photo-album',[\App\Http\Controllers\Admin\ManageGalleryController::class,'update'])->name('edit_photo_album');
Route::GET('/gallery-show/{id}', [\App\Http\Controllers\Admin\ManageGalleryController::class,'show'])->name('gallery_show');
Route::GET('/gallery-upload-page/{id}', [\App\Http\Controllers\Admin\ManageGalleryController::class,'goto_upload'])->name('gallery_upload');
Route::post('/delete-photo-album', [\App\Http\Controllers\Admin\ManageGalleryController::class,'destroy'])->name('delete_photo_album');
Route::post('/photo-upload/', [\App\Http\Controllers\Admin\ManageGalleryController::class,'store'])->name('photo_upload');
Route::post('/delete-photo', [\App\Http\Controllers\Admin\ManageGalleryController::class,'delete_photo'])->name('delete_photo');
Route::GET('/gallery-show-frontend/{id}', [\App\Http\Controllers\LandingControllers\GalleryController::class,'showIndividualAlbum'])->name('gallery_show_frontend');
