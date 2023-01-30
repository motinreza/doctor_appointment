<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use function Symfony\Component\HttpFoundation\Session\Storage\save;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                $doctor = Doctor::all();
                return view('user.home', compact('doctor'));
            }else{
                return view('admin.home');
            }
        }else{
            return redirect()->back();
        }
    }

    public function index(){
        $doctor = Doctor::all();
        return view('user.home', compact('doctor'));
    }

    public function appointment(Request $request){
        $data = new Appointment();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->doctor = $request->doctor;
        $data->status = 'In progress';

        if(Auth::id()){
            $data->user_id = Auth::user()->id;
        }

        $data->save();
        return redirect()->back()->with('message', 'Appointment request success. We will contact with you soon!');

    }

    public function myappointment(){

        if(Auth::id()){

            if(Auth::user()->usertype == 0){
                $userId = Auth::user()->id;
                $appoint = Appointment::where('user_id', $userId)->get();

                return view('user.my_appointment', compact('appoint'));
            }else{
                return redirect()->back();
            }

        }else{
            return redirect()->back();
        }

    }

    public function cancel_appoint($id){
        $data = Appointment::find($id);

        $data->delete();
        return redirect()->back();
    }

    public function about(){
        return view('user.about');
    }

    public function doctor_page(){
        $doctor = Doctor::all();
        return view('user.doctor_page', compact('doctor'));
    }

    public function blog(){
        return view('user.blog');
    }

    public function contact(){
        return view('user.contact');
    }
}



















