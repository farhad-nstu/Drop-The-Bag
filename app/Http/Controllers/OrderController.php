<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function giveOrder(Request $request, $loc_id)
    {
    	$loc_id = $loc_id;

    	$start_date_time = $request->start_date.' '.$request->start_time;
    	$start_timestamp = strtotime($start_date_time);
    	$end_date_time = $request->end_date.' '.$request->end_time;
    	$end_timestamp = strtotime($end_date_time)-1;
    	$bag = $request->bag;

        /*$sql_order = Order::where(`start_timestamp` <= $start_timestamp and `end_timestamp` >= $end_timestamp)->get();
        dd($sql_order);
    	foreach($sql_order as $key => $value){
		  	$rows[] = $value;
		}

		if(count($rows) > 0){
			$max_bag = 0;
			while ( $start_timestamp <= $end_timestamp) {
				$temp_max_bag = 0;
				$temp_end_time = $start_timestamp+899;
				for ($i=0; $i < count($rows); $i++) { 
					if(($rows[$i]['start_timestamp'] <= $start_timestamp) && ($rows[$i]['end_timestamp'] >= $temp_end_time)){
						$temp_max_bag += $rows[$i]['bag'];
					}
				}
				if ($max_bag < $temp_max_bag) {
					$max_bag = $temp_max_bag;
				}
				
				// var_dump($max_bag);
				$start_timestamp = $temp_end_time+1;
			}

			$sql = Location_detail::where(`loc_id`, $loc_id)->get();
			foreach($sql as $key => $value){
				$rows = $value;
			}

			if($rows > 0){
				foreach($rows as $key => $value){
					$capacity_of_bag = $value->capacity_of_bag;
				}
				if($capacity_of_bag >= $max_bag){

					$orders = new Order();
					$orders->start_date_time = $start_date_time;
					$orders->end_date_time = $end_date_time;
					$orders->start_timestamp = $start_timestamp;
					$orders->end_timestamp  = $end_timestamp;
					$orders->loc_id = $loc_id;
					$orders->user_id = 10;
					$orders->bag  = $bag;
					$orders->price = $request->price;
					$orders->trx_id = 1;
					$orders->save();

					if ($orders) {
						$last_id = $orders->id;
						return redirect()->route('payment', $last_id);
					} else {
						echo "error here";
					}

				} else{
					echo 'Not Enough space now.';
				}
			}
	    } else{ */
			$orders = new Order();
			$orders->start_date_time = $start_date_time;
			$orders->end_date_time = $end_date_time;
			$orders->start_timestamp = $start_timestamp;
			$orders->end_timestamp  = $end_timestamp;
			$orders->loc_id = $loc_id;
			$orders->user_id = 10;
			$orders->bag  = $bag;
			$orders->price = $request->price;
			$orders->trx_id = 1;
			$orders->save();

			if ($orders) {
				$last_id = $orders->id;
				return redirect()->route('payment', $last_id);
			} else {
				echo "errror here";
			}
	    //}
    	
    }

    public function payment($last_id)
    {
    	
    	$order_id = $last_id;
    	$rows = Order::where('id', $order_id)->get();
    	/*foreach ($rows as $key => $value) {
    		$ids = $value->id;
    	}*/
    	
    	return view('front.payment', compact('rows'));
    }


    public function allOrder()
    {
    	$allOrder = Order::all();
    	return view('front.user-order-list', compact('allOrder'));
    }
}
