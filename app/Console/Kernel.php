<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\Http\Controllers\WebNotificationController;
use App\Models\Machine;
use App\Models\User;
use App\Models\WorkOrder;
use Carbon\Carbon;


class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function(){
             $machines = Machine::where('contract_expiry_date', '<', Carbon::now())->get();
             $users = User::where('id', 10)->get();
            foreach ($machines as $machine) {
                $workOrder = new WorkOrder();
                $machine->contract_expiry_date = Carbon::now()->addYears(1);
                $machine->save();
                $workOrder-> problem_description ='p_description 1';
                $workOrder-> work_type_id ='5';
                $workOrder-> work_trade_id =$machine->category_id;
                $workOrder-> machine_id = $machine->id;
                $workOrder-> work_priority_id ='4';
                $workOrder-> assign_to = $users->random()->id; // randomly select a user id from the list
                $workOrder-> received_date = Carbon::parse(Carbon::now());
                $workOrder-> requirements = $machine->notes_to_technection;
                $workOrder->fault = 0;
                $workOrder->save();
                $FcmToken = User::whereNotNull('device_key')
                ->where("id",$workOrder->assign_to)
                ->pluck('device_key');
                 if(count($FcmToken)==0){
                    
                }
                else{
                    $data = [
                        "registration_ids" => $FcmToken,
                       "notification" => [
                       "title" => "Work Order Recieved",
                           // title =>workrequest =>
                           "body" => "الفرعون العاشق جاهز للاحتفال",
               ]
           ];
               $notificationController =new WebNotificationController;
               $notificationController->sendWebNotification($data);
                }

        
    }
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
    protected $routeMiddleware = [
        // ...
        'role_and_permission' => \App\Http\Middleware\CheckRoleAndPermission::class,
    ];
}
