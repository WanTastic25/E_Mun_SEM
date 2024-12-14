<?php

namespace App\Http\Controllers\ManageMarriageApplication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarriageApplicationController extends Controller
{
  
    public function indexPemohon() //view the Marriage Application Applicant's Form page
    {
        return view('ManageMarriageApplication.user.MarriageApplicationPemohon');
    }
  
    public function indexPasangan() //view the Marriage Application Partner's Form page
    {
        return view('ManageMarriageApplication.user.MarriageApplicationPasangan');
    }
  
    public function indexPerkahwinan() //view the Marriage Application Marriage details's Form page
    {
        return view('ManageMarriageApplication.user.MarriageApplicationPerkahwinan');
    }
    public function indexConsent() //view the Marriage Application Marriage details's Form page
    {
        return view('ManageMarriageApplication.user.MarriageApplicationConsent');
    }

    public function indexHiv() //view the Marriage Application HIV's Form page
    {
        return view('ManageMarriageApplication.user.MarriageApplicationHiv');
    }

    public function indexResident() //view the Marriage Application Resident's Form page
    {
        return view('ManageMarriageApplication.user.MarriageApplicationResident');
    }

    public function indexPermission() //view the Marriage Application Marriage Permission's Form page
    {
        return view('ManageMarriageApplication.user.MarriageApplicationPermission');
    }

    public function indexChecklist() //view the checklist dan the upload file form
    {
        return view('ManageMarriageApplication.user.MarriageApplicationChecklist');
    }

    public function indexApplicantList() //view the Applicant's list page
    {
        return view('ManageMarriageApplication.staff.MarriageApplicationList');
    }

    public function indexApplicantStatus() //view the Applicant's list and the application's status page
    {
        return view('ManageMarriageApplication.staff.MarriageApplicationStatus');
    }
}


