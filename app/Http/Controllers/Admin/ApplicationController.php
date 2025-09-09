<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Loan;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ApplicationExport;

class ApplicationController extends Controller
{
    public function index(){
        $applications = Loan::latest()->paginate(10);

        return view('admin.application.index', compact('applications'));
    }

    public function export(Loan $application)
    {
        return Excel::download(
            new ApplicationExport($application), 
            'loan_application_' . $application->id . '.xlsx'
        );
    }
}   