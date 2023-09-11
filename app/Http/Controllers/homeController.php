<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\payment;
use App\Models\schedule;
use App\Models\trainer;
use Carbon\Carbon;
use DB;

class homeController extends Controller
{
   
    public function indexDashboard()
    {
        $total = DB::table('clients')->count();
        $active_clients = DB::table('clients')->where('Membership_ends','>', Now())->count();
        $total_amount = DB::table('payments')
        ->whereMonth('created_at', date('m'))
        ->sum('amount');
        $total_trainers = DB::table('trainers')->count();

        
        $users = Payment::select(DB::raw("sum(Amount) as count") , DB::raw("MONTHNAME(created_at) as month_name"))
       
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("month_name"))
        ->orderBy('id','ASC')
        ->pluck('count', 'month_name');

         $labels = $users->keys();
         $data = $users->values();

        return view('dashboards' , compact('total', 'active_clients','total_amount','total_trainers','labels', 'data'));
    }

}
