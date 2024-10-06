<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\User;
use App\Http\Requests\AppointmentRequest;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    
    public function show() {
       
        $user = Auth::user();
        $appointments = $user->appointments()->with('service')->get();
        
        return view('appointment.show', compact('appointments'));
    }
    
    

    public function create($id)
    {
    
    $service = Service::findOrFail($id);
    return view('appointment.book', compact('service'));
    }


    public function store(AppointmentRequest $request)
    {
    
    $appointment = new Appointment();
    

    $appointment->user_id = Auth::id();
    $appointment->service_id = $request->service_id;
   

    $service = Service::findOrFail($request->service_id);
    $appointment->service = $service->name; 
    $appointment->appointment_date = $request->date;

    $appointment->save();

    return redirect()->route('appointment.show');
    }
    

    public function delete(Request $request, $id)
    {
        $appointment = Appointment::find($id);
    
        if (!$appointment) {
            return back()->with('error', 'Appointment not found.');
        }
    
        $appointment->delete();
    
        return back()->with('success', 'Appointment deleted successfully.');
    }
    
}
