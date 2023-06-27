<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    
    public function index() {
        $doctor = Doctor::paginate(3);
        return view('userpage.index', compact('doctor'));
    }
  
    public function redirect() {

        $usertype = Auth::user()->usertype;
        if($usertype == '0') {
           $doctor = Doctor::paginate(3);
           $appointment = Appointment::all();
           return view('userpage.index', compact('doctor'));
        } else {
           return view('admin.home');

        }

    }

    public function make_appaintment(Request $request) {
         if(Auth::id()) {
         $data = new Appointment;

         $data->name     = $request->name; 
         $data->email    = $request->email; 
         $data->phone   = $request->number; 
         $data->doctor   = $request->doctor; 
         $data->date     = $request->date; 
         $data->duration = $request->duration; 
         $data->time     = $request->time; 

         $data->status     = 'In progress'; 
         if(Auth::id()) {
               $data->user_id = Auth::user()->id;
         } 

         $data->save();

          return redirect()->back()->with('message', 'Appointment Request Successfull. We will contact with you soon');
         } else {
            return redirect('register');
         }  

    }

    public function my_appointment() {
        if(Auth::id()) {
           $user_id = Auth::id();
           $appoint = Appointment::where('user_id', $user_id)->get();
           return view('userpage.my_appointment', compact('appoint'));
        } else {
           return redirect('login');
        }
                
    }

    public function cancel_appointment($id) {
        $data = Appointment::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Delete Your Appointment Successfull');
    }


}
