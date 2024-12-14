<?php

namespace App\Http\Controllers\ConsultationApplication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultationApplicationController extends Controller
{

    public function indexConsultApplication()
    {
        return view('ManageConsultationApplication.user.ConsultationApplication');
    }

    public function indexConsultApplicationStatus()
    {
        return view('ManageConsultationApplication.user.ConsultationApplicationStatus');
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


}