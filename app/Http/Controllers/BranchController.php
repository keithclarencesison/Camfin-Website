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
                'business-address' => '2nd Floor Azure Business Center, 1197 EDSA, Munoz, Quezon City, Metro Manila, Philippines',
                'maps-address-link' => 'https://maps.app.goo.gl/PayRKfzTaFRUrjDM7'
            ],
             'urdaneta' => [
                'name' => 'Urdaneta',
                'business-address' => '2nd Floor Azure Business Center, 1197 EDSA, Munoz, Quezon City, Metro Manila, Philippines',
                'maps-address-link' => 'https://maps.app.goo.gl/PayRKfzTaFRUrjDM7'
            ],
             'calasiao' => [
                'name' => 'Calasiao',
                'business-address' => '2nd Floor Azure Business Center, 1197 EDSA, Munoz, Quezon City, Metro Manila, Philippines',
                'maps-address-link' => 'https://maps.app.goo.gl/PayRKfzTaFRUrjDM7'
            ],
             'san-carlos' => [
                'name' => 'San Carlos',
                'business-address' => '2nd Floor Azure Business Center, 1197 EDSA, Munoz, Quezon City, Metro Manila, Philippines',
                'maps-address-link' => 'https://maps.app.goo.gl/PayRKfzTaFRUrjDM7'
            ],
             'la-trinidad' => [
                'name' => 'La Trinidad',
                'business-address' => '2nd Floor Azure Business Center, 1197 EDSA, Munoz, Quezon City, Metro Manila, Philippines',
                'maps-address-link' => 'https://maps.app.goo.gl/PayRKfzTaFRUrjDM7'
            ],
             'isabela' => [
                'name' => 'Isabela',
                'business-address' => '2nd Floor Azure Business Center, 1197 EDSA, Munoz, Quezon City, Metro Manila, Philippines',
                'maps-address-link' => 'https://maps.app.goo.gl/PayRKfzTaFRUrjDM7'
            ],
             'tarlac' => [
                'name' => 'Tarlac',
                'business-address' => '2nd Floor Azure Business Center, 1197 EDSA, Munoz, Quezon City, Metro Manila, Philippines',
                'maps-address-link' => 'https://maps.app.goo.gl/PayRKfzTaFRUrjDM7'
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
