<?php

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
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\BloggerDashboard;
use App\Http\Controllers\BloggerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Models\Post;
use App\Models\category;
use App\Models\comment;


Auth::routes();



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', PostsController::class);

//for yajra tables for user case
Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');
Route::get('/user-data', [App\Http\Controllers\HomeController::class, 'userdata'])->name('get-user-data');
Route::delete('/deleteuser/{id}', [App\Http\Controllers\HomeController::class, 'deleteuser'])->name('deleteuser');
Route::get('/updateuser/{id}', [App\Http\Controllers\HomeController::class, 'updateuser'])->name('updateuser');
Route::get('Register-user',[HomeController::class,'RegisterUser']);

//import and Export data in excel , pdf
Route::get('/export',[HomeController::class,'export']);
Route::get('/downlaodpdf', [PostsController::class, 'generatePDF']);

//for yajra tables for Article case
Route::get('/articles', [App\Http\Controllers\ArticleController::class, 'index'])->name('articles');
Route::get('/articles-data', [App\Http\Controllers\ArticleController::class, 'articlesdata'])->name('get-articles-data');

//search

Route::get('/search', [PostsController::class, 'search']);
Route::get('/action', [PostsController::class, 'action'])->name('action');
Route::get('/editarticle/{id}', [PostsController::class, 'editarticle'])->name('editarticle');
Route::post('/savearticle/{id}', [PostsController::class, 'savearticle'])->name('savearticle');
Route::delete('/deletepost/{id}', [App\Http\Controllers\PostsController::class, 'deletepost'])->name('deletepost');
//for admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin', [App\Http\Controllers\AdminDashboard::class, 'index']);
    Route::get('/subscriber', [App\Http\Controllers\AdminDashboard::class, 'show']);
    Route::get('/bloggers', [App\Http\Controllers\AdminDashboard::class, 'showblogger']);
    Route::get('/delblogger/{id}', [App\Http\Controllers\AdminDashboard::class, 'destroy']);
    Route::resource('Categorie', CategoryController::class);

    
    
});

//for Blogger
Route::middleware(['auth:sanctum','verified','authblogger'])->group(function(){

    Route::get('/blog', [App\Http\Controllers\BloggerDashboard::class, 'index']);
    
});

//for subscriber
Route::middleware(['auth:sanctum','verified','authsubscriber'])->group(function(){

    Route::get('/subs', [App\Http\Controllers\SubscriberController::class, 'index']);
    Route::get('/follow/{id}', [App\Http\Controllers\SubscriberController::class, 'store']);
    Route::get('/sposts', [App\Http\Controllers\SubscriberController::class,'sshow']);
});

//Submit comment

Route::post('/comment', [App\Http\Controllers\commentController::class,'store']);


//Blogger routes
 Route::get('/mybloggers', [App\Http\Controllers\BloggerController::class,'index']);
 Route::get('/bloggers/{id}', [App\Http\Controllers\BloggerController::class,'show']);


Route::post('save-post',[PostsController::class,'savePost']);


//understanding

Route::get('/test', function(){
    $posts = App\Models\Post::with('category')->with('user')->get();
    foreach ($posts as $post)
    {
        // dump($post);
        dump('Title : '.$post->title.' | Category : '. $post->category->CategoryName.' | User : '. $post->user->name);
    }
});

//showing specfic post with commnets
Route::get('/test1', function(){
    $comments =post::find(1)->comment;
    
    foreach ($comments as $comment)
    {
         
        dump('Title : '.$comment->body.' | Category : '. $comment->id.' | User : '. $comment->post->body);
    }
});


//shoiwng post with user and post title
Route::get('/1', function(){
    $comments =post::find(25)->comment;
    
    foreach ($comments as $comment)
    {
         
        dump('Comment : '.$comment->body.' | Comment_id : '. $comment->user->name.' | Post title : '. $comment->post->title);
    }
});

//showing  post with category and user
Route::get('/2', function(){
    $posts =post::where('id',1)->with('category')->with('user')->with('Comment')->get();
    
    // dd($posts);
    
    foreach ($posts as $post)
    {
         
        dump('post id  : '.$post->comment.' | user name  : '. $post->user->name.' | Post title : '.$post->title);
    }
    


});

//getting post with category and user 

Route::get('/3', function(){
    $comments =comment::where('id',1)->with('post')->get();
    
    

    
    foreach ($comments as $comment)
    {
        dump('post id  : '.$comment->post->id.' | user name  : '. $comment->user->name.' | Post title : '.$comment->post->title);
         
    //     dump('post id  : '.$category->post.' | user name  : '. $category->id.' | Post title : '.$category->name);
    }
    


});