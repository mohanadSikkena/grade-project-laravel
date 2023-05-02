<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WorkOrder;
use Carbon\Carbon;

class WorkOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workOrder = new WorkOrder;
        $workOrder-> problem_description ='p_description 1';
        $workOrder-> work_status_id ='1';
        $workOrder-> work_type_id ='1';
        $workOrder-> work_trade_id ='1';
        $workOrder-> machine_id ='1';
        $workOrder-> requster_id ='1';
        $workOrder-> work_priority_id ='1';
        $workOrder-> assign_to ='1';
        $workOrder-> failure_cause ='1';
        $workOrder-> received_date =Carbon::parse('2023-01-01');
        $workOrder-> requirements ='requirement1 ';
        $workOrder->save();

        $workOrder = new WorkOrder;
        $workOrder-> problem_description ='p_description 2';
        $workOrder-> work_status_id ='2';
        $workOrder-> work_type_id ='2';
        $workOrder-> work_trade_id ='2';
        $workOrder-> machine_id ='2';
        $workOrder-> requster_id ='2';
        $workOrder-> work_priority_id ='2';
        $workOrder-> assign_to ='2';
        $workOrder-> failure_cause ='2';
        $workOrder-> received_date =Carbon::parse('2023-01-01');
        $workOrder-> requirements ='requirement2';
        $workOrder->save();

        $workOrder = new WorkOrder;
        $workOrder-> problem_description ='p_description 3';
        $workOrder-> work_status_id ='3';
        $workOrder-> work_type_id ='3';
        $workOrder-> work_trade_id ='3';
        $workOrder-> machine_id ='3';
        $workOrder-> requster_id ='3';
        $workOrder-> work_priority_id ='3';
        $workOrder-> assign_to ='3';
        $workOrder-> failure_cause ='3';
        $workOrder-> received_date =Carbon::parse('2023-01-01');
        $workOrder-> requirements ='requirement3';
        $workOrder->save();

        $workOrder = new WorkOrder;
        $workOrder-> problem_description ='p_description 4';
        $workOrder-> work_status_id ='4';
        $workOrder-> work_type_id ='4';
        $workOrder-> work_trade_id ='4';
        $workOrder-> machine_id ='4';
        $workOrder-> requster_id ='4';
        $workOrder-> work_priority_id ='4';
        $workOrder-> assign_to ='4';
        $workOrder-> failure_cause ='4';
        $workOrder-> received_date =Carbon::parse('2023-01-01');
        $workOrder-> requirements ='requirement4';
        $workOrder->save();

        $workOrder = new WorkOrder;
        $workOrder-> problem_description ='p_description 5';
        $workOrder-> work_status_id ='5';
        $workOrder-> work_type_id ='5';
        $workOrder-> work_trade_id ='5';
        $workOrder-> machine_id ='5';
        $workOrder-> requster_id ='5';
        $workOrder-> work_priority_id ='5';
        $workOrder-> assign_to ='5';
        $workOrder-> failure_cause ='5';
        $workOrder-> received_date =Carbon::parse('2023-01-01');
        $workOrder-> requirements ='requirement5';
        $workOrder->save();

        $workOrder = new WorkOrder;
        $workOrder-> problem_description ='p_description 6';
        $workOrder-> work_status_id ='6';
        $workOrder-> work_type_id ='6';
        $workOrder-> work_trade_id ='6';
        $workOrder-> machine_id ='6';
        $workOrder-> requster_id ='6';
        $workOrder-> work_priority_id ='6';
        $workOrder-> assign_to ='6';
        $workOrder-> failure_cause ='6';
        $workOrder-> received_date =Carbon::parse('2023-01-01');
        $workOrder-> requirements ='requirement6';
        $workOrder->save();

        $workOrder = new WorkOrder;
        $workOrder-> problem_description ='p_description 7';
        $workOrder-> work_status_id ='7';
        $workOrder-> work_type_id ='7';
        $workOrder-> work_trade_id ='7';
        $workOrder-> machine_id ='7';
        $workOrder-> requster_id ='7';
        $workOrder-> work_priority_id ='7';
        $workOrder-> assign_to ='7';
        $workOrder-> failure_cause ='7';
        $workOrder-> received_date =Carbon::parse('2023-01-01');
        $workOrder-> requirements ='requirement7';
        $workOrder->save();

        $workOrder = new WorkOrder;
        $workOrder-> problem_description ='p_description 8';
        $workOrder-> work_status_id ='8';
        $workOrder-> work_type_id ='8';
        $workOrder-> work_trade_id ='8';
        $workOrder-> machine_id ='8';
        $workOrder-> requster_id ='8';
        $workOrder-> work_priority_id ='8';
        $workOrder-> assign_to ='8';
        $workOrder-> failure_cause ='8';
        $workOrder-> received_date =Carbon::parse('2023-01-01');
        $workOrder-> requirements ='requirement8';
        $workOrder->save();

        $workOrder = new WorkOrder;
        $workOrder-> problem_description ='p_description 9';
        $workOrder-> work_status_id ='9';
        $workOrder-> work_type_id ='9';
        $workOrder-> work_trade_id ='9';
        $workOrder-> machine_id ='9';
        $workOrder-> requster_id ='9';
        $workOrder-> work_priority_id ='9';
        $workOrder-> assign_to ='9';
        $workOrder-> failure_cause ='9';
        $workOrder-> received_date =Carbon::parse('2023-01-01');
        $workOrder-> requirements ='requirement9';
        $workOrder->save();

    }
}
