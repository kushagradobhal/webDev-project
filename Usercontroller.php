<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Imports\UserImport;

use Excel;
use Session;
use Alert;

class Usercontroller extends Controller
{
    public function import_excel()
    {
        return view('adminHome');
    }
    public function import_excel_post(Request $request)
    {
      
        Excel::import(new UserImport, $request->file("excel_file"));
        session()->flash('alert.message', 'You have successfully added the data!');
        Alert::success('Successfully!','Uploaded');
        return redirect()->back();
    }
}
