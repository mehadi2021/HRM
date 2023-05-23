<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ApplyForm;
use App\Models\Circular;
use App\Models\Result;
use App\Models\Exam;
use App\Models\JobApply;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function website()
    {
        return view('frontend.fixed.home');
    }
    public function websiteCircular()

    {

        $jobs = Circular::all();
        return view('frontend.fixed.job-circular',compact('jobs'));
    }

    public function websiteLogin()
    {


        return view('frontend.fixed.login');
    }

    public function reg()
    {
        return view('frontend.fixed.registration');
    }


    public function loginProcess(Request $request)
    {

        //dd($request->all());

        $login = $request->except('_token');
        $authentication = auth()->attempt($login);
        //dd($authentication);
        if ($authentication) {

            toastr()->success('Login Success');
            return redirect()->route('website');

        }else{

            toastr()->error('please, Signin');
            return redirect()->route('website');

        }
    }


    public function logout()
    {


        Auth::logout();
        toastr()->success('logout success');
        return back();
    }

    public function registerStore(Request $request)


    {
        //dd($request->all());

        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request['password']),
            'mobile'=>$request->mobile,
            'Address'=>$request->Address,
            'role' => 'applicant'

        ]);
        toastr()->success('Registration Successfull');
        return redirect()->route('website');
    }
    public function placeJob($id){

    //    dd($id);

        $jobs = Circular::find($id);

        // dd($request);
        return view('frontend.fixed.applyform',compact('jobs'));
    }




    public function applyForm(){

        // $apply= User::all();
        //dd($apply->all());
        return view('frontend.fixed.applyform');
    }

    public function applyFormStore(Request $request){

       // ($request->all());

        $files=[];
        if($request->file('photo'))
        $files[]=$request->file('photo');
        if($request->file('cv'))
        $files[]=$request->file('cv');
        foreach($files as $file)
        {
            $filename = "";
                        $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                        $file->storeAs('/uploads', $filename);
                 
                    $data[]=$filename;   
                 }
       

        //  $filename = "";
        //             if($request->hasFile('photo'))
        //             {
        //                 $file= $request->file('photo');
        //                 $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
        //                 $file->storeAs('/uploads', $filename);
        //             }

        //    $filename2 = "";
        //             if($request->hasFile('cv'))
        //             {
        //                 $file= $request->file('cv');
        //                 $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
        //                 $file->storeAs('/uploads', $filename);
        //             }

        ApplyForm::create([

            'apply_id'=>auth()->user()->id,
            'tittle'=>$request->tittle,
            'name'=>$request->name,
            'fname'=>$request->fname,
            'mname'=>$request->mname,
            'date'=>$request->date,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'photo'=>$data[0],
            'cv'=>$data[1],
            'address'=>$request->address,
            'status'=>'pending'

        ]);
        toastr()->success('Apply Successfull');
        return redirect()->route('website');



    }

      public function edit($id){

    //    dd($id);

        $apply = ApplyForm::find($id);

        // dd($request);
        return view('backend.apply.edit',compact('apply'));
    }

    public function update(Request $request,$id)
    {
//        dd($request->all());
        $department=ApplyForm::find($id);
        $department->update([
        'status'=>$request->status

        ]);


            return redirect()->route('circular.apply')->with('message',' updated successfully.');
    }

    public function Applylist()

{
   if(!auth()->user())
   return redirect()->route('website.Login');
   else
   $lists= ApplyForm::where('apply_id',auth()->user()->id)->get();
   return view('frontend.fixed.applylist',compact('lists'));



}




public function expage()
 {


    $lists = Exam::all();

    return view('frontend.fixed.expage',compact('lists'));

}
  public function store(Request $request)
      {
 Result::create([


            'user_name'=>auth()->user()->name,
            'ra'=>$request->ra,
            'rb'=>$request->rb,
            'rc'=>$request->rc,
            'rd'=>$request->rd,
            're'=>$request->re,
            'rf'=>$request->rf,
            'rg'=>$request->rg,
            'rh'=>$request->rh,
            'ri'=>$request->ri,
            'rj'=>$request->rj,
            'result'=>'pending'

        ]);
        toastr()->success('Apply Successfull');
        return redirect()->back();
    }


 public function cletter(){

    //    dd($id);

        $apply = Result::where('user_name',auth()->user()->name)->get();

        // dd($request);
        return view('frontend.fixed.cletter',compact('apply'));
    }
   


}