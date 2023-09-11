<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use App\Models\User;
use App\Models\payment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Events\clientCreated;
use Illuminate\Support\Facades\DB;

class dashController extends Controller
{

public function index()
    {
        $cliente = Clients::orderBy('id','asc')->paginate(10);
        return view('members' , compact('cliente'));

    }

public function indexActive_clients()
{
        $cliente = Clients::orderBy('id','asc')->where('Membership_ends', '>', Now())->paginate(10);
        return view('members' , compact('cliente'));
}

public function indexInactive_clients()
{
        $cliente = Clients::orderBy('id','asc')->where('Membership_ends','=', NULL )->paginate(10);
        return view('members' , compact('cliente'));

}





public function indexPayment()
{
    $payments = payment::orderBy('id','asc')->paginate(10);
    return view('payment' , compact('payments'));

}


 
 public function edit(Clients $clients)
{
        return view('edit',compact('clients'));
}




public function store(Request $request)
{ 
        $Client = new Clients;
        $Client->First_name=$request->First;
        $Client->Last_Name=$request->Last;
        $Client->Email=$request->Email;
        $Client->Phone=$request->Phone;



        if ($request->input('amount') ==5000){
            $duration = 1;
            $end = Carbon::now()->addMonths(1);
            $Client->Membership_ends = $end;
           

        }

        if ($request->input('amount') ==10000){
            $duration = 2;
            $end = Carbon::now()->addMonths(2);
            $Client->Membership_ends = $end;
          
        }

        if ($request->input('amount') == 15000){
            $duration = 3;
            $end = Carbon::now()->addMonths(3);
            $Client->Membership_ends = $end;
           
        }
        if ($request->input('amount') ==20000){
            $duration = 4;
            $end = Carbon::now()->addMonths(4);
            $Client->Membership_ends = $end;
        }

        if ($request->input('amount') ==25000){
            $duration = 5;
            $end = Carbon::now()->addMonths(5);
            $Client->Membership_ends = $end;
        }

        if ($request->input('amount') ==30000){
            $duration = 6;
            $end = Carbon::now()->addMonths(6);
            $Client->Membership_ends = $end;
        }

        $Client->save();


       $payment = new payment;
       $payment->amount= $request->input('amount');
       $payment->client_id = $Client->id;
       $payment->save();
   
    
       return redirect()->route('members')->with('Record inserted succesfully');
    }
 




    public function destroy($id)
    {
       DB::delete('delete from clients where id = ?' , [$id]);
        return redirect('/members')->with('success','post has been deleted successfully');
    }


  
}
