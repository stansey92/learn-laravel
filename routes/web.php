<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    //when hitting the welcome route return the welcome view
    return view('welcome');
});

Route::get('/test', function () {
    //grabs name from url ex. /test/?name=Jerry and drops name variable into view
    // $name = request('name');
    
    // return view('test', [
    //     'name' => $name
    // ]);

    //more effiecent way to write it:
    return view('test', [
        'name' => request('name')
    ]);
});


//create a wildcard for dynamic routes (posts) and set the post that is entered into the url as a variable that is passed to the funciton
// Route::get('/posts/{post}', function ($post) {
//     //arrat that acts as a dummy db
    // $posts = [
    //     'my-first-post' => 'Hello, this is my first blog post',
    //     'my-second-post' => 'Now I am geting the hang of this bloggin.'
    // ];

    // //checks if the post/$post url input == any of the db data, if not renders 404
    // if (!array_key_exists($post, $posts)) {
    //     abort(404, 'Sorry, post doesnt exist');
    // }

    // //returns post view, with a post variable which is pulled from the dummy db
    // return view('post', [
    //     'post' => $posts[$post]
    // ]);
// });

//same route as above but with a controller
// hits the @show method on the post controller
Route::get('/posts/{slug}', 'PostsController@show');
