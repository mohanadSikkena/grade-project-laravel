<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Machine;
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
            $users = User::where('role_id', 3)->get();
            foreach ($machines as $machine) {
                $workOrder = new WorkOrder();
                $machine->contract_expiry_date = Carbon::now()->addYears(1);
                $machine->save();
                $workOrder-> problem_description ='p_description 1';
                $workOrder-> work_status_id ='1';
                $workOrder-> work_type_id ='1';
                $workOrder-> work_trade_id ='1';
                $workOrder-> machine_id = $machine->id;
                $workOrder-> work_priority_id ='1';
                $workOrder-> assign_to = $users->random()->id; // randomly select a user id from the list
                $workOrder-> failure_cause ='1';
                $workOrder-> received_date = Carbon::parse('2023-01-01');
                $workOrder-> requirements ='requirement1 ';
                $workOrder->save();
                $FcmToken = User::whereNotNull('device_key')
                ->where("id",$fworkOrder->assign_to)
                ->pluck('device_key');
                 if(count($FcmToken)==0){
                    return ;
                }
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
        })->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
