<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class BranchController extends Controller
{
 public function show($branch)
    {
        $branches = [
            'head-office' => [
                'name' => 'Head Office',
            ],
             'calasiao' => [
                'name' => 'Calasiao Branch',
            ],
             'urdaneta' => [
                'name' => 'Urdaneta Branch',
             ],
        ];

        if (!array_key_exists($branch, $branches)) {
            abort(404);
        }

        return view('pages.branches', [
            'branchData' => $branches[$branch],
        ]);
    }
}
