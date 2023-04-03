<?php

use App\Models\User;
use msztorc\LaravelEnv\Env;
use App\Models\ClassRoutine;
use Illuminate\Http\Request;
use App\Models\StudentAttendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    $user = User::whereEmail('adm2in@mail.com')->first();
    return Hash::check('passwordd', $user->password);
    return $user->password;





    $filePath =  base_path("/resources/js/locales");

    return $files = \File::files($filePath);

    // return 123;

    $env = new Env();
    $val = $env->setValue('APP_NAME', 'Schooling - School Management');

    echo $val; // Laravel App



    // return auth()->user()->student->id;
    $session_id = adminSetting()->default_session_id;
    return $student_attendance = StudentAttendance::where('student_id', auth()->user()->student->id)->get();
    
    
    
    
$con = mysqli_connect("localhost","loyaleadsta","loyaleadsta","loyaleadsta");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  date_default_timezone_set('Asia/Manila');

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$rem="Login".$user;
$date_added=date("Y-m-d H:i:s");
		  mysqli_query($con,"INSERT INTO logs(user_id,remarks,date_added,ip) VALUES('$session_id','$rem','$date_added','$ip')")or die(mysqli_error($con));

    
});

Auth::routes();
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

include(base_path('routes/payment.php'));

// ====================Artisan command======================
Route::middleware('auth:sanctum')->group(function () {
    Route::get('route-clear', function () {
        \Artisan::call('route:clear');
        dd("Route Cleared");
    });
    Route::get('optimize', function () {
        \Artisan::call('optimize');
        dd("Optimized");
    });
    Route::get('view-clear', function () {
        \Artisan::call('view:clear');
        dd("View Cleared");
    });
    Route::get('view-cache', function () {
        \Artisan::call('view:cache');
        dd("View cleared and cached again");
    });
    Route::get('config-cache', function () {
        \Artisan::call('config:cache');
        dd("configuration cleared and cached again");
    });
    Route::get('storage-link', function () {
        $path = public_path()."/storage";
        if (file_exists($path)) {
            unlink($path);
        }
        \Artisan::call('storage:link');
        dd("storage link created");
    });
});

Route::get('/{any?}', function () {
    return view('app');
})->where('any', '[\/\w\.-]*');
