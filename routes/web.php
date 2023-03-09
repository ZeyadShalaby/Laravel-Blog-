<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(["auth"])->group(function() {
    Route::get("/dashboard", function () {
        return redirect("/dashboard/blogs");
    })->name("dashboard");

    Route::get("/dashboard/users", function () {
        return view("dashboard.users.main", [
            "title" => "Users"
        ]);
    });

    Route::get("/dashboard/blogs", function () {
        return view("dashboard.blogs.main", [
            "title" => "Blogs"
        ]);
    });
});

Route::middleware(["web"])->group(function () {
    Route::get("/", [HomeController::class, "home"]);
    Route::get("/login", [AuthController::class, "loginView"])->name("login");
    Route::get("{blogUrl}", [HomeController::class, "getByUrl"]);
});

?>