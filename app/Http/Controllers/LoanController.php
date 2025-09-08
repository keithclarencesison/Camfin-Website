<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class LoanController extends Controller
{
    public function create($client_type){
        return view('pages.loan.application', compact('client_type'));
    }

    public function store(Request $request){
        
        $validate = $request->validate([
            'first_name'    =>  'required|string|max:100',
            'last_name'     =>  'required|string|max:100',
            'middle_name'   =>  'nullable|string|max:100',
            'suffix'        =>  'nullable|string|max:10',
            'date_of_birth' =>  'required|date',
            'mobile_number' =>  'required|string|max:15',
            'email'         =>  'required|email|unique:loans,email',
            'client_type'   =>  'required|in:Agent,Loan Applicant',
        ]);

        Loan::create($validate);

        return redirect()->route('loan.success');

    }

    public function selectClientType(){
        return view('pages.loan.select_client_type');
    }

    public function chooseClientType(Request $request){
        $validated = $request->validate([
            'client_type' => 'required|in:Agent,Loan Applicant',
        ]);

        return redirect()->route('loan.create', ['client_type' => $validated['client_type']]);
    }

    public function success()
    {
        return view('pages.loan.success');
    }


}
