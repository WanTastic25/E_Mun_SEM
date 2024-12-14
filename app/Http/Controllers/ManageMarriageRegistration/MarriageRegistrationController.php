<?php

namespace App\Http\Controllers\ManageMarriageRegistration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarriageRegistrationController extends Controller
{
    public function indexRegister()
    {
        return view('ManageMarriageRegistration.MarriageRegistrationForm');
    }

    public function indexList()
    {
        return view('ManageMarriageRegistration.MarriageRegistrationList');
    }

    public function indexForm()
    {
        return view('ManageMarriageRegistration.MarriageRegistrationFormNew');
    }
    public function indexFormPasangan()
    {
        return view('ManageMarriageRegistration.MarriageRegistrationFormPasangan');
    }

    public function indexMaklumat() 
    {
        return view('ManageMarriageRegistration.MarriageRegistrationFormMaklumat');
    }

    public function indexMaklumat2() 
    {
        return view('ManageMarriageRegistration.MarriageRegistrationFormMaklumat2');
    }

    public function indexMaklumat3() 
    {
        return view('ManageMarriageRegistration.MarriageRegistrationFormMaklumat3');
    }

    public function indexApproval()
    {
        return view('ManageMarriageRegistration.ApprovalMarriage');
    }

    public function indexApprovalInfo()
    {
        return view('ManageMarriageRegistration.ApprovalMarriageInfo');
    }

    public function indexApprovalDoc()
    {
        return view('ManageMarriageRegistration.ApprovalMarriageDoc');
    }
}


