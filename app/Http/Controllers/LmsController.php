<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartialInformation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class LmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('here');
    $user =Auth::user();
    // dd($user->partial);
    if(!$user->partial){
        return redirect()->route('user.create');
    }
    return view('user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $user=Auth::user();
        if($user->partial)
        {
            return redirect()->route('user.index');
        }
        // return view('user.index',compact('user'));Same Above bas or condition  ak mint jana nai 
        return view('user.create',compact('user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=Auth::user();
        {
            $request->validate([
                'phone' => "required|unique:partial_information",
                'cnic' => "required|unique:partial_information",
                'address' => "required",
                'file' => "required",
            ]);
            $user = Auth::user();
            if ($request->hasFile('file')) {
                $path = $request->file('file');
                $target = 'public/profiles';
                $file = Storage::putFile($target, $path);
                $file = substr($file, 7, strlen($file) - 7);
            }

            PartialInformation::create([
                'user_id' => $user->id,
                'phone' => $request->phone,
                'cnic' => $request->cnic,
                'address' => $request->address,
                'avatar' =>  $file,
            ]);

            return redirect()->route('user.store')->withErrors('Data Enter Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    return view('user.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Auth::user();
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $user=Auth::user();

            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'phone' => "required",
                'cnic' => "required",
                'address' => "required",
                // 'file' => "required",
            ]);
            $data=User::where('id', $id)->first();
            $data->name=$request->name;
            $data->email=$request->email;
            $data->save();
            $data = PartialInformation::where('user_id', $user->id)->first();

            $data->phone=$request->phone;
            $data->cnic =$request->cnic;
            $data->address= $request->address;
            if ($request->hasFile('file'))
            {
                $path = $request->file('file');
                $target = 'public/profiles';
                $file = Storage::putFile($target, $path);
                $file = substr($file, 7, strlen($file) - 7);
                $data->avatar=$file;
            }
            $data->save();
            return redirect()->route('user.index')->withErrors('Data Edit Successfully');
        }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
