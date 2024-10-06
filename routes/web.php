<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\GlobalController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (!Auth::check())
        return redirect()->route('login');
    else
        return redirect()->route('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('dashboard', [GlobalController::class, 'segregate'])->name('dashboard');

    Route::middleware('VerifyRole:admin')->group(function () {
        // Route::group(['middleware' => ['VerifyRole:admin']], function () {
        Route::prefix('admin')->group(function () {
            Route::name('admin.')->group(function () {

                Route::get('/dashboard', function () {
                    return view('admin/dashboard'); //towards admin dashboard
                })->name('dashboard');

                Route::prefix('users')->group(function () {
                    Route::name('users.')->group(function () {
                        Route::controller(UsersController::class)->group(function () {

                            Route::get('/view', 'show')->name('view');
                            Route::get('/create', 'create')->name('create');
                            Route::post('/create', 'store')->name('create');
                            Route::get('/edit/{id}', 'edit')->name('edit');
                            Route::post('/edit', 'update')->name('edit');

                        });
                    });
                });

                Route::prefix('tickets')->group(function () {
                    Route::name('tickets.')->group(function () {
                        Route::controller(TicketController::class)->group(function () {
                            Route::get('/create', 'create')->name('create');
                            Route::post('/create', 'store')->name('create');
                        });
                    });
                });

                Route::post('/admin/customers/delete', [CustomerController::class, 'destory'])->name('admin.customers.delete');

            });
        });
    });

    Route::middleware('VerifyRole:admin,employee')->group(function () {

        Route::prefix('customers')->group(function () {
            Route::name('customers.')->group(function () {
                Route::controller(CustomerController::class)->group(function () {

                    Route::get('/view', 'show')->name('view');
                    Route::get('/create', 'create')->name('create');
                    Route::post('/create', 'store')->name('create');
                    Route::get('/edit/{id}', 'edit')->name('edit');
                    Route::post('/edit', 'update')->name('edit');

                });
            });
        });

    });
});





// Dont chnage anything above
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Umer Routes
Route::get('/edashboard', function () {
    return view('employee/edashboard'); //towards employee dashboard
})->name('edashboard');

Route::get('/streamticket', function () {
    return view('employee.streamticket');
})->name('streamticket');

Route::get('/openticket', function () {
    return view('employee.openticket');
})->name('openticket');

Route::get('/progopenticket', function () {
    return view('employee.progopenticket');
})->name('progopenticket');
