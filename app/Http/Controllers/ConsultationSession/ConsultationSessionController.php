<?php

namespace App\Http\Controllers\ConsultationSession;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultationSessionController extends Controller
{
    public function indexConsultSession()
    {
        return view('ManageConsultationSession.user.ConsultationSessionApplication');
    }

    public function indexConsultSessionReview()
    {
        return view('ManageConsultationSession.user.ConsultationSessionReview');
    }

    public function indexConsultSessionStatus()
    {
        return view('ManageConsultationSession.user.ConsultationSessionStatus');
    }


    // Staff section 
    public function indexConsultSessionReview_s()
    {
        return view('ManageConsultationSession.staff.ConsultationSessionReview');
    }

    public function indexConsultSessionSchedule()
    {
        return view('ManageConsultationSession.staff.ConsultationSessionSchedule');
    }

    public function indexConsultSessionAddSchedule()
    {
        return view('ManageConsultationSession.staff.ConsultationSessionAddSchedule');
    }

    public function indexConsultSessionStatus_s()
    {
        return view('ManageConsultationSession.staff.ConsultationSessionStatus');
    }
}