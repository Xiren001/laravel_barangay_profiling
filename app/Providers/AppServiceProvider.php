<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Clearance;
use App\Models\Residence;
use App\Models\Indegency;
use App\Models\Id;
use App\Models\Bussiness;
use App\Models\Resident;
use App\Models\Blotter;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot()
{
    $clearanceCount = Clearance::count();
    $residencesCount = Residence::count(); // Assuming Residences is another model
    $indegencysCount = Indegency::count(); // Assuming Indegencies is another model
    $idCount = Id::count(); // Assuming ID is another model
    $bussinessCount = Bussiness::count(); // Assuming Business is another model
    $residentCount = Resident::count(); // Assuming Business is another model
    $residentMCount = Resident::where('gender', 'male')->count();
    $residentFCount = Resident::where('gender', 'female')->count();
    $statusACounts = Blotter::count(); // Assumin
    
    View::share([
        'clearanceCount' => $clearanceCount,
        'residencesCount' => $residencesCount,
        'indegencysCount' => $indegencysCount,
        'idCount' => $idCount,
        'bussinessCount' => $bussinessCount,
        'residentCount' => $residentCount,
        'residentMCount' => $residentMCount,
        'residentFCount' => $residentFCount,
        'statusACounts' => $statusACounts

    ]);
}
}
