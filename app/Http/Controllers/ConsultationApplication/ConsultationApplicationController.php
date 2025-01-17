<?php

namespace App\Http\Controllers\ConsultationApplication;

use App\Http\Controllers\Controller;
use App\Models\Consultation_Application;
use Illuminate\Http\Request;

class ConsultationApplicationController extends Controller
{

    public function indexConsultApplication()
    {
        return view('ManageConsultationApplication.user.Consultation_Application');
    }

    public function indexConsultApplicationStatus()
    {
        $applications = Consultation_Application::all();
        return view('ManageConsultationApplication.user.ConsultationApplicationStatus', compact('applications'));
    }

    public function indexConsultComplaint()
    {
        return view('ManageConsultationApplication.user.ConsultationComplaint');
    }

    // Staff section for Consultation Application

    public function indexConsultApproval()
    {
        return view('ManageConsultationApplication.staff.ConsultationApplicationApproval');
    }

    public function deleteApplication($id)
    {
        try {
            $application = Consultation_Application::findOrFail($id);
            $application->delete();
            
            return redirect()->route('user.ConsultationApplicationStatus')
                ->with('success', 'Application deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('user.ConsultationApplicationStatus')
                ->with('error', 'Failed to delete application');
        }
    }

    public function updateApplication(Request $request, $id)
    {
        try {
            $application = Consultation_Application::findOrFail($id);
            
            $application->update([
                'wife_name' => $request->wife_name,
                'wife_ic' => $request->wife_ic,
                'registration_no' => $request->registration_no,
                'complaint_detail' => $request->complaint_detail,
            ]);
            
            return response()->json([
                'success' => true,
                'message' => 'Application updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update application'
            ], 500);
        }
    }

}
