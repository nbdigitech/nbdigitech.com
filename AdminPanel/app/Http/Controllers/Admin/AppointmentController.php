<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RefUser;
use App\ApplyUser;

//e91e63
class AppointmentController extends Controller
{
    public function index(){
        $applyuser = ApplyUser::orderBy('id','desc')->get();
        return view('Admin.Appointment.Index',compact('applyuser'));
    }


     public function ref($id){
       $userid = ApplyUser::where('Email',$id)->first();
       $ref_user = RefUser::where('UserId',$userid->id)->get();
       return view('Admin.Appointment.Ref',compact('ref_user'));
    }


    public function update(request $request){
    	
    } 
    public function Calendars(request $request){
      $events = [];
        $data = Appointment::where("Status", '=', 1)->get();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->Name ." ". $value->Time,
                    true,
                    new \DateTime($value->Date),
                    new \DateTime($value->Date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#f05050',
                        'url' => 'http://paperplanesstudy.com/Admin/Appointments/RescheduledAppointment/'.$value->id,
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('Admin/Appointment/Calendars', compact('calendar')); 
    }

    /*####### EMAIL FUNCTION STARTS #######*/
  

/*####### EMAIL FUNCTION STARTS #######*/
public function UpdateSchedule(Request $request){
    $date = $request->Date;
    $time = $request->Time;
    $id = $request->User_id;

    $update = Appointment::where('id',$id)->first();

    $update->Date = $request->Date;
    $update->Time = $request->Time;
    $update->Description = $request->Description;
    $update->save();
    Session::put('User_id', $update->id);
    

    $data = array(
        'name'  =>  $request->Name,
        'email'  =>  $request->Email,
        'message'  =>  $request->Description,
        'date'  =>  $request->Date,
        'time'  =>  $request->Time,
    );
    Mail::to($request->Email)->send(new SendMail($data));


        $mobileNo= $request->Phone;
        $message = urlencode("Hello, ".$request->Name. "Your Appoinment is confirmed and scheduled for date :- ". $date ."at:- " .$time);
        $authKey = "189400AwWCrhndiT2E5bea73cc";
        $senderId = "NBDTID";
        $route = "4";
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNo,
            'message' => $message,
            'sender' => $senderId,
            'route' => $route,
            'country'=>'0'
        );
        $url="https://control.msg91.com/api/sendhttp.php";
        $ch = curl_init();
            curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
        ));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $output = curl_exec($ch);
        if(curl_errno($ch))
        {
            echo 'error:' . curl_error($ch);
        }
        curl_close($ch);


    
    
    return redirect()->route('Admin/Appointments/Calendar');
    //return view('Admin/Appointments/Calendar', compact('calendar'));
}


    public function calendar(){
        $id = Session::get('User_id');
        $events = [];
        $data = Appointment::where('id',$id)->first();
        
        $Name = $data->Name. " " .$data->Time;
            
                $events[] = Calendar::event(
                    
                    $Name ,
                    true,
                    
                    new \DateTime($data->Date),
                    new \DateTime($data->Date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#f05050',
                        'url' => 'http://paperplanesstudy.com/Admin/Appointments/RescheduledAppointment/'.$data->id,
                    ]
                );
            
        
        $calendar = Calendar::addEvents($events);
        
        return view('Admin/Appointment/Calendar', compact('calendar'));

    }
    /*####### EMAIL FUNCTION ENDS #######*/

public function RescheduledAppointment($id){
    $data = Appointment::where('id',$id)->first();
    return view('Admin/Appointment/Reschedule', compact('data'));
}



    /*#####  REMARK FUNCTION STARTS FROM HERE  ##### */
    public function EditRemarkSession(Request $request){
        $id = $request->EditRemarkId;
        $update = ApplyUser::where('id',$id)->first();

        $update->Remark = $request->Remark;
        $update->save();
        return back()->with('success', 'Remark Successfully Done.');
    }


    public function RefEditRemarkSession(Request $request){
        $id = $request->EditRemarkId;
        $update = RefUser::where('id',$id)->first();

        $update->Remark = $request->Remark;
        $update->save();
        return back()->with('success', 'Remark Successfully Done.');
    }
    /*#####  REMARK FUNCTION ENDS FROM HERE  ##### */

/*#####  Appointment Done FUNCTION STARTS FROM HERE  ##### */
public function AppointmentDone(Request $request){
    $id = $request->AppointmentDone;

    $update = Appointment::where('id',$id)->first();
    $update->Status = "Done";
    $update->save();
    return back()->with('success', 'Appointment Successfully Done.');
}
/*#####  Appointment Done FUNCTION ENDS FROM HERE  ##### */
   
}
