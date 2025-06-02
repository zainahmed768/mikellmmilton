<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // $faqs     = Faq::count();
        // $mappings = UserMapping::count();
        return view('admin.dashboard.index');
    }

}
