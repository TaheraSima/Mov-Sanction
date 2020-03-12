<?php

use Illuminate\Database\Seeder;

class GroupMovTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('group_movs')->delete();

        $group_mov = [
        	[
        		'id'=>1, 
        		'sanction_no'=>'584', 
        		'reference_no'=>'45', 
        		'unit'=>'hgfh', 
        		'telephone'=>'58448484', 
        		'extension'=>'58484', 
        		'cantt'=>'fgfhfghgjh', 
        		'brigadier'=>'hghjhgj', 
        		'division'=>'fgfghdsgd', 
        		'place'=>'oipp', 
        		'purpose'=>'mcndjf', 
        		'reference'=>'cnbvhdg', 
        		'comment'=>'oiyumcjhg', 
        		'date_mov'=>'2020-02-22', 
        		'date_return'=>'2020-02-21', 
        		'time_mov'=>'12:00 AM', 
        		'return_time'=>'02:00 AM', 
        		'made_journey'=>'jhfduighg', 
        		'made_return_jurney'=>'cvcfseg', 
        		'route_incl'=>'gfhgfgh', 
        		'route_return_incl'=>'lqcxdofi', 
        		'command'=>'pouofihrgf', 
        		'return_command'=>'jhfuighduighg', 
        		'command_no'=>'8', 
        		'return_command_no'=>'7', 
        		'other_equipment'=>'kfjoijg', 
        		'other_info'=>'fgjghfudhg', 
        		'extarnal_act'=>'oifrutdngnj', 
        		'extarnal_action'=>'iodjfoidhg', 
        		'extl_info'=>'oiuihfbdsf', 
        		'extl_email'=>'jfdhgf', 
        		'internal_act'=>'hfuidhfgd', 
        		'internal_action'=>'fdfdgfg', 
        		'intl_info'=>'ghgjgj', 
        		'intl_email'=>'vcnbghn',
                'status' =>0,
        		'created_at'=> date("Y-m-d H:i:s"), 
        		'updated_at'=>date("Y-m-d H:i:s") 
        	]
        ];

       DB::table('group_movs')->insert($group_mov);
    }
}
