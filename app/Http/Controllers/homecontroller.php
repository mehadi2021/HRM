<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Exam;
use App\Models\leave;
use App\Models\Notice;
use App\Models\Salary;
use App\Models\Employee;
use App\Models\movement;
use App\Models\Result;
use App\Models\addsalary;
use App\Models\ApplyForm;
use App\Models\Leaveform;
use App\Models\attendance;
use App\Models\Attendence;
use App\Models\Circular;
use App\Models\department;
use App\Models\Designation;
use App\Models\payroll;
use Illuminate\Http\Request;
use App\Models\SalaryStructure;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class homecontroller extends Controller
{
    public function home(){
        $ApplyList = ApplyForm::all();
        $LeaveList = leave::all();
        $totalApply = ApplyForm::get()->count();
         $totalLeave = leave::where('status','approve')->count();
        return view('backend.layout.home',compact('totalApply','ApplyList','totalLeave','LeaveList'));
    }


    // frontend

    public function  master(){
        return view('backend.partial.frontend.master');
    }


    public function attendance(){
        $attendences=attendance::where('user_id',auth()->user()->id)->get();
        //  dd($request->all());
        return view('backend.partial.frontend.attendance',compact('attendences'));
    }
    public function _attendance(Request $request){
    //   dd($request->all());
        attendance::create([
             // first name from db || second name for blade
             'employee_id'=>$request->employee_id,
             'date'=>$request->date,
             'in_time'=>$request->in_time,
             'out_time'=>$request->out_time
         ]);
         return redirect()->back();
        }



    public function  department(){
        $request=department::all();
        return view('backend.partial.frontend.department',compact('request'));
    }
    public function _department(Request $request){
       department::create([
            // first name from db || second name for blade
            'employee_name'=>$request->name,
            "department_id" => $request->department_id,
            'employee_id'=>$request->id,
            'department_name'=>$request->department
        ]);
        return redirect()->back();
    }

    public function  designation(){
        $designations=Designation::all();
        return view('backend.partial.frontend.designation',compact('designations'));

    }
    public function _designation(Request $request){

        $data = Designation::create([
             // first name from db || second name for blade
            'employee_name'=>$request->name,
            'employee_id'=>$request->id,
            'designation_status'=>$request->designation
         ]);


         return redirect()->route("designation");
     }




    public function  list(){
        $ing=SalaryStructure::all();
        // dd($info->all());
        return view('backend.salary.table',compact('ing'));
    }



    public function  add(){
        $ing=SalaryStructure::all();
        // dd($info->all());
        return view('backend.salary.form',compact('ing'));
    }
    public function submit(Request $request){
        SalaryStructure::create([
            // first name from db || second name for blade
            'name'=>$request->name,
            'home_allowence'=>$request->home_allowence,
            'basic_allowence'=>$request->basic_allowence,
            'medical_allowence'=>$request->medical_allowence,
            'status'=>$request->status
        ]);
        return redirect()->route('list.salary');
    }


    public function notice(){
        $ing=Notice::all();
        return view('backend.partial.frontend.notice',compact('ing'));
    }
    public function _notice(Request $request){
        Notice::create([
            // first name from db || second name for blade
            'date'=>$request->date,
            'tittle'=>$request->tittle,
            'notice'=>$request->notice

        ]);
    }

    public function movement(){
        $request=movement::all();
        return view('backend.partial.frontend.movement',compact('request'));
    }
    public function _movement(Request $request){

        //    dd($request->all);
      movement::create([
        // first name from db || second name for blade

        'employee_id'=>$request->employee_id,
        'movement_date'=>$request->movement_date,
        'movement_type'=>$request->movement_type,
        'movement_time'=>$request->movement_time



    ]);
    return redirect()->back();
}




    public function leave()
    {
        $leaves=Leave::with("user","leavetype")->get();
       return view('backend.pages.leave.list',compact('leaves'));
    }
    public function create()
    {
        $users=User::all();
        $leavetypes=LeaveBalance::with('leavetype')->where('user_id',auth()->user()->id)->get();
        // dd($leavetypes);
        return view('backend.pages.leave.create',compact('users','leavetypes'));
    }


       public function  employee(){
        $request=User::all();
        //  dd($request->all());
        $grades=SalaryStructure::all();
        return view('backend.partial.employee.employee',compact('request','grades'));
    }
    public function _employee(Request $request){
        // dd($request->all());
       User::create([
            // first name from db || second name for blade
            'name'=>$request->name,
            'employee_id'=>$request->id,
            'grade_id'=>$request->grade_id,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'Address'=>$request->address,
            'password'=>bcrypt($request->password)

        ]);
        return redirect()->back();
    }


    public function  login(){

        return view('backend.partial.login');
    }

    public function  _login(Request $request)
    {
        $credentials=$request->except('_token');

        if(Auth::attempt($credentials))
        {
            return redirect()->route('home');
            //user logged in
        }
        return redirect()->back()->with('message','invalid user info.');
    }
        //    {
        //        Auth::logout();
        //        return redirect()->route('');
        //    }


            // user logged in

        //  }

        // return redirect()->back()->with('message','invalid user info.');

    // }

    // Delete


    public function delete($id)
    {


        $employee=User::find($id);
        // dd($employee);
        if($employee)
        {


            $employee->delete();
            return redirect()->back()->with('message','deleted successfully.');

        }
        return redirect()->back()->with('message','no data found.');

    }



    public function department_delete($id)
    {

    //   dd($id);
        $department=department::find($id);

        if($department)
        {


            $department->delete();
            return redirect()->back()->with('message','deleted successfully.');

        }
        return redirect()->back()->with('message','no data found.');

    }

    public function notice_delete($id)
    {

    //   dd($id);
        $notice=Notice::find($id);

        if($notice)
        {


            $notice->delete();
            return redirect()->back()->with('message','deleted successfully.');

        }
        return redirect()->back()->with('message','no data found.');

    }

    public function attendance_delete($id)
    {

    //   dd($id);
        $notice=attendance::find($id);

        if($notice)
        {


            $notice->delete();
            return redirect()->back()->with('message','deleted successfully.');

        }
        return redirect()->back()->with('message','no data found.');

    }

    public function salary_delete($id)
    {

    //   dd($id);
        $notice=Salary::find($id);

        if($notice)
        {


            $notice->delete();
            return redirect()->back()->with('message','deleted successfully.');

        }
        return redirect()->back()->with('message','no data found.');

    }
    public function leave_delete($id)
    {

    //   dd($id);
        $notice=leave::find($id);

        if($notice)
        {


            $notice->delete();
            return redirect()->back()->with('message','deleted successfully.');

        }
        return redirect()->back()->with('message','no data found.');

    }

    public function movement_delete($id)
    {

    //   dd($id);
        $notice=movement::find($id);

        if($notice)
        {


            $notice->delete();
            return redirect()->back()->with('message','deleted successfully.');

        }
        return redirect()->back()->with('message','no data found.');

    }

    public function designation_delete($id)
    {

    //   dd($id);
        $notice=designation::find($id);

        if($notice)
        {


            $notice->delete();
            return redirect()->back()->with('message','deleted successfully.');

        }
        return redirect()->back()->with('message','no data found.');


    }

    // end delete




    public function designation_edit($id)
    {
        $department=designation::find($id);
        // dd($department);
        $request=designation::all();
        // dd($request);
        return view('backend.partial.edit.designationedit',compact('request'),compact('department'));

    }
    public function designation_update(Request $request,$id)
    {
//        dd($request->all());
        $department=designation::find($id);
        $department->update([
            'employee_name'=>$request->name,
             'employee_id'=>$request->id,
             'designation_status'=>$request->designation
        ]);

        return redirect()->route('_designation')->with('message',' updated successfully.');
    }


    public function department_update(Request $request,$id)
    {
//        dd($request->all());
        $department=department::find($id);
        $department->update([
            'employee_name'=>$request->name,
            'employee_id'=>$request->id,
            'department_name'=>$request->department
        ]);

        return redirect()->route('_department')->with('message',' updated successfully.');
    }

    public function department_edit($id)
    {
        $department=department::find($id);
        // dd($department);
        $request=department::all();
        // dd($request);
        return view('backend.partial.edit.departmentedit',compact('request'),compact('department'));

    }

    public function notice_edit($id)
    {
        $notice=Notice::find($id);
        // dd($notice);

        // dd($request);
        $ing=Notice::all();
        return view('backend.partial.edit.noticeedit',compact('notice'),compact($ing));

    }
    public function notice_update(Request $request,$id)
    {
//        dd($request->all());
        $notice=Notice::find($id);
        $notice->update([
            'date'=>$request->date,
            'tittle'=>$request->tittle,
            'notice'=>$request->notice
        ]);

        return redirect()->route('_notice')->with('message',' updated successfully.');
    }
    // public function salary_edit($id)
    // {
    //     $salary=Salary::find($id);
    //     // dd($department);
    //     $ing=Salary::all();
    //     // dd($ing);
    //     return view('backend.partial.edit.salaryedit',compact('ing'),compact('salary'));

    // }
//     public function salary_update(Request $request,$id)
//     {
// //        dd($request->all());
//         $salary=Salary::find($id);
//         $salary->update([
//             'name'=>$request->name,
//             'amount'=>$request->amount,
//             'status'=>$request->status
//         ]);

//         return redirect()->route('salary')->with('message',' updated successfully.');
//     }

public function attendance_edit($id)
    {
        $attendance=attendance::find($id);
        // dd($department);
        $request=attendance::all();
        // dd($request);
        return view('backend.partial.edit.attendanceedit',compact('request'),compact('attendance'));

    }

    public function attendance_update(Request $request,$id)
    {
//        dd($request->all());
        $attendance=attendance::find($id);
        $attendance->update([
            'employee_id'=>$request->employee_id,
            'date'=>$request->date,
            'in_time'=>$request->in_time,
            'out_time'=>$request->out_time
        ]);

        return redirect()->route('_attendance')->with('message',' updated successfully.');
    }

//     public function employee_edit($id)
//     {
//         $employee=User::all();
//         // dd($employee);
//         $request=User::all();
//         // dd($request);
//         return view('backend.partial.edit.employeeedit',compact('request'),compact('employee'));

//     }
//     public function employee_update(Request $request,$id)
//     {
// //        dd($request->all());
//         $employee=attendance::find($id);
//         $employee->update([
//             'name'=>$request->name,
//             'employee_id'=>$request->id,
//             'mobile'=>$request->mobile,
//             'email'=>$request->email,
//             'Address'=>$request->address
//         ]);

//         return redirect()->route('_employee')->with('message',' updated successfully.');
//     }
public function checkin(){
  $isAttendence =Attendence ::whereDate("date",now())->where("user_id",auth()->user()->id)->first();

    if($isAttendence){

        return redirect()->back();
    }
    Attendence::create([
        'in_time'=>now(),
        'date'=>date('y-m-d'),
        'user_id'=>auth()->user()->id,
    ]);


    return redirect()->back()->with('message','Already Checkedin');
}


 public function checkout(Request $request){
    $attendence = Attendence::whereDate("date",now())->where("user_id",auth()->user()->id)->first();

    if(isset($attendence->out_time)){

        return redirect()->back();
    }
    $attendence->update([
      'out_time'=>now()
    ]);
    return redirect()->back();
  }

  public function leaveform(){

    if(auth()->user()->role=='admin')
    {
        $leaveApplications=leave::all();
    }else

    {
        $leaveApplications=leave::where('user_id',auth()->user()->id)->get();
    }


    return view('backend.partial.frontend.leave',compact('leaveApplications'));
  }
  public function leaveFormSubmit(Request $request){


    $validation = Validator::make($request->all(),[
        'from_Date'=>'required|date|after:' . date('Y-m-d'),
        'to_date'=>'required|date|after_or_equal:fromdate',
    ]);


   if($validation->fails())
   {
    // dd($validation->getMessageBag());

    toastr()->error('Check all input is correct');

    return redirect()->back();
   }

    $fdate=$request->fromdate;
    $tdate=$request->todate;

    $datetime1 = new DateTime($fdate);
    $datetime2 = new DateTime($tdate);
    $leaveExistFromDate=Leave::whereDate('from_date','>=',$datetime1)->whereDate('from_date','<=',$datetime2)->where('user_id',auth()->user()->id)->first();
    $leaveExistToDate=Leave::whereDate('to_date','>=',$datetime1)->whereDate('to_date','<=',$datetime2)->where('user_id',auth()->user()->id)->first();
    if($leaveExistFromDate OR $leaveExistToDate)
    {
     // dd($validation->getMessageBag());

     toastr()->error('Check all input is correct');

     return redirect()->back();
    }
    $days = $datetime2->diff($datetime1)->format('%a');



        // dd($request->all());
        Leave::create([
            'user_id'=>auth()->user()->id,
            'title'=>$request->title,
            'from_date'=>$request->from_Date,
            'to_date'=>$request->to_date,
            'leave_type'=>$request->leave_type,
            'emergency_contact'=>$request->emergency_contact,
            'status'=>'pending',

        ]);


        //message : leave applied success
        toastr()->success('Data has been saved successfully!', 'Congrats');

        return redirect()->back();

}

public function payroll()

    {
        $payrolls=Payroll::with('user','salarystructure')->get();
        return view('backend.payroll.table',compact('payrolls'));

    }
    public function payrollCreate()
    {
        $users = User::all();
        $salary_structures = SalaryStructure::all();

        return view('backend.payroll.form',compact('users','salary_structures'));
    }
    public function payrollStore(Request $request)
    {
     payroll::create([
        'user_id'=>$request->user_id,
        'salary_structure_id'=>$request->salary_structure_id,
        'month'=>$request->month,
        'status'=>'paid'

        ]);
        return redirect()->route('payroll');
    }


   public function leaveApprove($id){

      $leave=Leave::find($id);

      $leave->update([
'status'=>'approve'
      ]);

      return redirect()->back();
   }
   public function leaveReject($id){

    $leave=Leave::find($id);

    $leave->update([
'status'=>'reject'
    ]);

    return redirect()->back();



}
public function  circular(){
    $circulars = Circular::all();
    return view('backend.circular.circular', compact('circulars'));
}

public function jobstore(Request $request){
    // dd($request->all());

    Circular::create([

        'tittle'=>$request->tittle,
        'description'=>$request->description,
        'salary'=>$request->salary,
        'requirement'=>$request->requirement

    ]);

    toastr()->success('Success');
return redirect()->route('circular');



}
public function circularList(){


    $applys = ApplyForm::all();

    return view('backend.apply.applylist',compact('applys'));

}

  public function download($file)
    {
        return response()->download(public_path('/uploads/'.$file));

    }

public function jobCircularCreate(){
    return view ('backend.circular.create');
}

   public function page(){
return view ('backend.exam.exampage');
       }


        public function store(Request $request)
      {

 Exam::create([



            'qa'=>$request->qa,
            'qb'=>$request->qb,
            'qc'=>$request->qc,
            'qd'=>$request->qd,
            'qe'=>$request->qe,
            'qf'=>$request->qf,
            'qg'=>$request->qg,
            'qh'=>$request->qh,
            'qi'=>$request->qi,
            'qj'=>$request->qj,
            'to_time'=>$request->to_time,
            'end_time'=>$request->end_time,
            'exam_time'=>$request->exam_time

        ]);
        toastr()->success('Apply Successfull');
        return redirect()->back();
    }
public function examlist()
 {


    $lists = Exam::all();

    return view('backend.exam.exam',compact('lists'));

}



public function exam_delete($id)
    {

    //   dd($id);
        $notice=Exam::find($id);

        if($notice)
        {


            $notice->delete();
            return redirect()->route('exam.list')->with('message','deleted successfully.');

        }
        return redirect()->back()->with('message','no data found.');

    }

     public function resultpage()
 {

    $results=Result::all();
    $lists = Exam::all();

    return view('backend.exam.result',compact('lists','results'));

}

   public function resultedit($id)
 {

        $result = Result::find($id);

        // dd($request);
        return view('backend.exam.resultedit',compact('result'));

}
 public function resultupdate(Request $request,$id)
    {
//        dd($request->all());
        $department=Result::find($id);
        $department->update([
        'result'=>$request->result

        ]);


            return redirect()->back()->with('message',' updated successfully.');
    }


}