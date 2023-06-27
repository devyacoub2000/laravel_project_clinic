<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Doctor_Time;
use App\Models\Clinic;

class AdminController extends Controller
{
    // make function Doctor
    public function add_doctor() {
        $user = Auth::user()->usertype;
        if($user == '1') {
           return view('admin.add_doctor');
        }else {
           return abort(404);
        }
        
    }

    public function post_doctor(Request $request) {

        $data = new Doctor;
        $data->name       = $request->name;
        $data->phone      = $request->phone;
        $data->speciality = $request->speciality;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('doctors', $imagename);
        $data->image = $imagename; 

        $data->save();

        return redirect()->back()->with('message', 'ADDED DOCTOR SUCCESSFULLY..');

    }

    public function all_doctors() {
          $user = Auth::user()->usertype;
          if($user == '1') {
            $data = Doctor::orderby('id', 'desc')->get();
            return view('admin.all_doctors', compact('data'));
          } else {
           return abort(404);
          }
    }
 
   public function edit_doctor($id) {

         $user = Auth::user()->usertype;
          if($user == '1') {
            $data = Doctor::find($id);
            return view('admin.edit_doctor', compact('data'));
          } else {
           return abort(404);
          }
   } 

 public function updateeedoc(Request $request, $id) {

        $data = Doctor::find($id);
        $data->name       = $request->name;
        $data->phone      = $request->phone;
        $data->speciality = $request->speciality;

        $image = $request->image;
        if($image) {
              $imagename = time().'.'.$image->getClientOriginalExtension();
              $request->image->move('doctors', $imagename);
              $data->image = $imagename;
        
      }
        $data->save();

        return redirect()->back()->with('message', 'EDIT DOCTOR SUCCESSFULLY..');
   }

       public function remove_doctor($id) {
         $doctor = Doctor::find($id);
         $doctor->delete();
         return redirect()->back()->with('message', 'DELETED DOCTOR SUCCESSFULLY..');
       }
  

    // view Appointments 

    public function view_appointment() {
         
        $user = Auth::user()->usertype;
        if($user == '1') {
            $data = Appointment::all();
            return view('admin.view_appointment', compact('data'));
        } else {
            return abort(404); 
        }

    }

    public function approved($id) {

        $user = Auth::user()->usertype;
        if($user == '1') {
           $data = Appointment::find($id);
           $data->status = 'Approved';
           $data->save();
           return redirect()->back();
        }else {
          return abort(404);
        }
        
    }

    public function remove_appoint($id) {
        $user = Auth::user()->usertype;
        if($user == '1') {
           $data = Appointment::find($id);
           $data->status = 'Canceld';
           $data->save();
           return redirect()->back();
        }else {
          return abort(404);
        }
    }

    // ADD DOCTORS TIMES


    public function add_doctor_time() {
      
        $user = Auth::user()->usertype;
        if($user == '1') {
           $doctor = Doctor::all(); 
           return view('admin.add_doctor_time', compact('doctor'));
        } else {
          return abort(404);
        }
    }

    public function post_doctor_time(Request $request) {
 
      $data = new Doctor_Time;

      $data->doctor_name = $request->doctor_name;    
      $data->day = $request->day;    
      $data->date = $request->date;    
      $data->start_time = $request->start_time;    
      $data->end_time = $request->end_time;  
      if($data->start_time == 0) {
           $data->start_time = 'empty_time';
      }
      if($data->end_time == 0) {
           $data->end_time = 'empty_time';
      }
      $data->save();
      
      return redirect()->back()->with('message', 'ADDED DOCTOR Time SUCCESSFULLY..');
    }

    public function view_doctor_time() {
         $user = Auth::user()->usertype;
         if($user == '1') {
            $data = Doctor_Time::all();
            return view('admin.view_doctor_time', compact('data'));
         } else {
            return abort(404);
         }
    }

    public function delete_doctor_time($id) {

          $doctor = Doctor_Time::find($id);
          $doctor->delete();
          return redirect()->back()->with('message', 'DELETED DOCTOR Time SUCCESSFULLY..');
    }

    // view_patient_data


    public function view_patient_data() {

         $user = Auth::user()->usertype;
         if($user == '1') {
             $data = Appointment::all();
             return view('admin.view_patient_data', compact('data'));
         } else {
             return abort(404);
         }
    }

    // add_clinic

    public function add_clinic() {
         $user = Auth::user()->usertype;
         if($user == '1') {
             $doctor  = Doctor::all();
             $patient = Appointment::all();
             return view('admin.add_clinic', compact('doctor', 'patient'));
         } else {
            return redirect()->back();
         }
    }

   public function post_clinic(Request $request) {
     
      $data = new Clinic;

      $data->doctor_name     = $request->doctor_name;    
      $data->Patient_name    = $request->Patient_name   ;    
      $data->day = $request->day;    
      $data->date = $request->date;    
      $data->start_time = $request->start_time;    
      $data->end_time = $request->end_time;  
      if($data->start_time == 0) {
           $data->start_time = 'empty_time';
      }
      if($data->end_time == 0) {
           $data->end_time = 'empty_time';
      }
      $data->save();
      
      return redirect()->back()->with('message', 'ADDED SUCCESSFULLY..');

   }

   public function view_clinic() {
   
      $user = Auth::user()->usertype;
         if($user == '1') {
            $data = Clinic::all();
            return view('admin.view_clinic', compact('data'));
         } else {
            return redirect()->back(); 
         }
   }

   public function delete_clinic($id) {
        
         $doctor = Clinic::find($id);
         $doctor->delete();
         return redirect()->back()->with('message', 'DELETED Clinic Time SUCCESSFULLY..');

   }




    
}
