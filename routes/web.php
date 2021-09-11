<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    


/*Route::get('/formations', function () {
    return view('admin.formation');
});*/



Route::get('/formations',[PostController::class,'getAllFormation'])->name('formation.getallformation');
Route::get('/formations/create',[PostController::class,'createFormation'])->name('formation.createformation');
Route::post('/formation/create1',[PostController::class,'store'])->name('formation.store');
Route::delete('/formation/{formation}',[PostController::class,'delete'])->name('formation.supprimer');
Route::put('/formation/{formations}',[PostController::class,'update'])->name('formation.update');
Route::get('/formation/{formations}',[PostController::class,'edit'])->name('formation.edit');


/*Route::get('/formations','App\Http\Controllers\PostController@getAllFormation');

Route::get('/edit-formation/{id}','App\Http\Controllers\PostController@edit');
Route::get('/update-formation/{id}','App\Http\Controllers\PostController@update');
*/

Route::get('/chefs','App\Http\Controllers\Admin\ChefController@index');
Route::get('/save-chef','App\Http\Controllers\Admin\ChefController@store');
Route::get('/edit-chef/{id}','App\Http\Controllers\Admin\ChefController@edit');
Route::get('/update-chef/{id}','App\Http\Controllers\Admin\ChefController@updatechef');
Route::DELETE('delete-chef/{id}','App\Http\Controllers\Admin\ChefController@deletechef');

Route::get('/rep-participants', function () {
    return view('admin.reponse-participant');
});


Route::get('/fiche', function () {
    return view('admin.fiche');
});
Route::get('/question', function () {
    return view('admin.questions');
});

Route::get('/participants','App\Http\Controllers\Admin\ParticipantController@index');
Route::get('/save-participant','App\Http\Controllers\Admin\ParticipantController@store');
Route::get('/edit-participant/{id}','App\Http\Controllers\Admin\ParticipantController@edit');
Route::get('/update-participant/{id}','App\Http\Controllers\Admin\ParticipantController@updateparticipant');
Route::DELETE('delete-participant/{id}','App\Http\Controllers\Admin\ParticipantController@deleteparticipant');


Route::get('/formulaire', function () {
    return view('formulaire');
});
Route::get('/search','App\Http\Controllers\SearchController@index');
Route::get('/search1','App\Http\Controllers\SearchController@index1');

Route::get('/participant','App\Http\Controllers\RepParticipantController@index');
/*Route::get('/fiche','App\Http\Controllers\ParticipantsController@fiche');*/
/*Route::get('/edit-fiche/{participant_id}','App\Http\Controllers\ParticipantsController@edit');*/
Route::get('/edit-fiche/{participant_id}','App\Http\Controllers\RepParticipantController@edit');
Route::get('edit-fiche/download-pdf/{participant_id}','App\Http\Controllers\RepParticipantController@downloadPDF');

Route::get('/save-rep','App\Http\Controllers\RepParticipantController@store');
Route::get('/save-rep-chef','App\Http\Controllers\RepChefController@store');

Route::get('/send-email','App\Http\Controllers\Admin\ParticipantController@sendEmail');
Route::get('/send-email1/{id}','App\Http\Controllers\Admin\ParticipantController@sendEmail1');
Route::delete('/test','App\Http\Controllers\Admin\ParticipantController@sentMailCheckedStudents')->name('deleteSelected');

Route::get('/reponseschefs','App\Http\Controllers\RepChefController@index');
Route::get('/bye', function () {
    return view('Bye');
});
Route::get('/search2','App\Http\Controllers\SearchController@index2');
Route::get('/search3','App\Http\Controllers\SearchController@index3');
Route::get('/search4','App\Http\Controllers\SearchController@index4');
