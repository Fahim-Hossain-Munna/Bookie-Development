<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class DashSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.setting.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(isset($_POST['infobtn'])){
            if($request->name){
                User::find(auth()->user()->id)->update([
                    "name" => $request->name,
                    'created_at' => now(),
                ]);
                return back()->with('update_info' , 'Information update successfully complete');
            }
            if($request->email){
                User::find(auth()->user()->id)->update([
                    "email" => $request->email,
                    'created_at' => now(),
                ]);
                return back()->with('update_info' , 'Information update successfully complete');
            }
            if($request->contact){
                User::find(auth()->user()->id)->update([
                    "contact" => $request->contact,
                    'created_at' => now(),
                ]);
                return back()->with('update_info' , 'Information update successfully complete');
            }
            if($request->designation){
                User::find(auth()->user()->id)->update([
                    "designation" => $request->designation,
                    'created_at' => now(),
                ]);
                return back()->with('update_info' , 'Information update successfully complete');
            }
            if($request->website){
                User::find(auth()->user()->id)->update([
                    "website" => $request->website,
                    'created_at' => now(),
                ]);
                return back()->with('update_info' , 'Information update successfully complete');
            }
        }

        $request->validate([
            'password' => 'required|min:8|confirmed'
        ]);

        if(isset($_POST['passbtn'])){
            if($request->currentpassword && $request->password && $request->password_confirmation){

                if(Hash::check($request->currentpassword,auth()->user()->password)){
                    if($request->password == $request->password_confirmation){
                        User::find(auth()->user()->id)->update([
                            "password" => $request->password,
                            'created_at' => now(),
                        ]);
                        return back()->with('update_info_pass' , 'Password update successfully complete');
                    }else{
                        return back()->with('update_error' , 'please re-check password again!!');
                    }
                }else{
                    return back()->with('update_error' , 'current password is not match with our record!!');
                }

                // User::find(auth()->user()->id)->update([
                //     "website" => $request->website,
                // ]);
            }else{
                return back()->with('update_error' , 'please fill all the input field!!');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(isset($_POST['imagebtn'])){
            $manager = new ImageManager(new Driver());
            if($request->hasFile('image')){
                $new_name = auth()->id().'-'.auth()->user()->name.'-'.now()->format('d-m-Y').'.'.$request->file('image')->getClientOriginalExtension();
                $img = $manager->read($request->file('image'))->scale(300, 200);
                $img->save(base_path('public/uploads/profile/'.$new_name), 80);

                User::findOrFail(auth()->id())->update([
                    'image' => $new_name,
                    'created_at' => now(),
                ]);
                return back()->with('update_info_image' , 'profile image update successfully complete');
            }
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
