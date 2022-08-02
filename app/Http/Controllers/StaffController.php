<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use App\Models\Staff;

    class StaffController extends Controller
    {
        ///Store = Add data

        public function addStaff()
        {
            return view('add-staff');
        }
        public function storeStaff(Request $request)
        {
            $name =$request->name;
            $image =$request->file('file');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('image'),$imageName);

            ///Save data to table
            $staff = new Staff();
            $staff->name = $name;
            $staff->profileimage = $imageName;
            $staff->save();

            return back()->with('staff_added','staff record has been saved!');
        }
    }