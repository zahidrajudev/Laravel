<?php

namespace App\Http\Controllers;

use App\Models\resume;
use App\Models\pdfmodel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class ResumeCvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userdata()
    {
        $user = Auth::user();
        $resume = resume::where('user_id', $user->id)->first();
        $contact_status = "$resume->contact_status";
        $education_status = "$resume->education_status";
        $skill_status = "$resume->skill_status";
        $personal_status = "$resume->personal_status";
        $selected = request('name');
        $score = '10%';
        if ('completed' == $contact_status) {
            $score = '30%';
        }
        if ('completed' == $contact_status && 'completed' == $education_status) {
            $score = '50%';
        }
        if ('completed' == $contact_status && 'completed' == $education_status && 'completed' == $skill_status) {
            $score = '65%';
        }
        if ('completed' == $contact_status && 'completed' == $education_status && 'completed' == $skill_status && 'completed' == $personal_status) {
            $score = '100%';
        }
        return view('resume.userdata', compact('contact_status', 'education_status', 'skill_status', 'personal_status', 'score', 'resume', 'selected'));
    }

    public function create()
    {
        $user = Auth::user();
        $resume = resume::where('user_id', $user->id)->first();
        View::share('resume', $resume);

        $data = [
            'foo' => 'bar'
        ];
        $user_sname = str::replace(' ', '-', $user->name);
        $path = "uploads/pdf/$user_sname";
        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        };

        $save_path = $path;
        $fileName = uniqid() . $user_sname . ".pdf";
        $pdf = PDF::loadView('resume.htmlpdf', $data);
        $pdf->save($save_path . '/' . $fileName);

        pdfmodel::create([
            'pdf_path' => $save_path . '/' . $fileName,
            'user_id' => $user->id,
            'pdf_name' => $fileName
        ]);

        return back()->with('status', 'CV generated Succesfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //user data store started
    public function contactStore(Request $request)
    {
        //Validation
        $request->validate([
            'care_of' => ['required'],
            'village' => ['required'],
            'post_office' => ['required'],
            'upazila' => ['required'],
            'district' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],

            'career' => ['required', 'min:100', 'max:500'],
        ], [
            'care_of.required' => 'Care Of Field is Required',
            'village.required' => 'Village Field is Required',
            'post_office.required' => 'Post Office Field is Required',
            'upazila.required' => 'Present Upazilla Field is Required',
            'district.required' => 'Present District Field is Required',
            'phone.required' => 'Phone Number Field is Required',
            'email.required' => 'Email Field is Required',

            'career.required' => 'Career Object Field is Required',
        ]);
        $user = Auth::user();
        $resume = resume::where('user_id', $user->id);
        $resume->update([
            'user_id' => $user->id,
            'care_of' => request('care_of'),
            'village' => request('village'),
            'post_office' => request('post_office'),
            'upazila' => request('upazila'),
            'district' => request('district'),
            'phone' => request('phone'),
            'email' => request('email'),
            'career' => request('career'),
            'contact_status' => 'completed',
            'education_status' => 'start',
        ]);
        return back()->with('status', 'Successfully Stored Your Contact Info');
    }

    public function educationStore(Request $request)
    {
        $request->validate([
            'honours_institue' => ['required'],
            'honours_versity' => ['required'],
            'honours_subject' => ['required'],
            'honours_result' => ['required'],
            'honours_passing' => ['required'],

            'hsc_institue' => ['required'],
            'hsc_board' => ['required'],
            'hsc_result' => ['required'],
            'hsc_group' => ['required'],
            'hsc_passing' => ['required'],

            'ssc_institue' => ['required'],
            'ssc_board' => ['required'],
            'ssc_group' => ['required'],
            'ssc_result' => ['required'],
            'ssc_passing' => ['required'],

        ], [
            'honours_institue.required' => 'Honours Institution Field is Required',
            'honours_versity.required' => 'Honours University Field is Required',
            'honours_subject.required' => 'Honours Subject Field is Required',
            'honours_result.required' => 'Honours Result Field is Required',
            'honours_passing.required' => 'Honours Passing Year Field is Required',

            'hsc_institue.required' => 'HSC Institution Field is Required',
            'hsc_board.required' => 'HSC Board Field is Required',
            'hsc_result.required' => 'HSC Result Field is Required',
            'hsc_group.required' => 'HSC Group Field is Required',
            'hsc_passing.required' => 'HSC Passing Year Field is Required',

            'ssc_institue.required' => 'SSC Institution Field is Required',
            'ssc_board.required' => 'SSC Board Field is Required',
            'ssc_group.required' => 'SSC Group Field is Required',
            'ssc_result.required' => 'SSC Result Field is Required',
            'ssc_passing.required' => 'SSC Passing Year Field is Required',
        ]);
        $user = Auth::user();
        $resume = resume::where('user_id', $user->id);
        $resume->update([
            'honours_institue' => request('honours_institue'),
            'honours_versity' => request('honours_versity'),
            'honours_subject' => request('honours_subject'),
            'honours_result' => request('honours_result'),
            'honours_passing' => request('honours_passing'),
            'hsc_institue' => request('hsc_institue'),
            'hsc_board' => request('hsc_board'),
            'hsc_result' => request('hsc_result'),
            'hsc_group' => request('hsc_group'),
            'hsc_passing' => request('hsc_passing'),
            'ssc_institue' => request('ssc_institue'),
            'ssc_board' => request('ssc_board'),
            'ssc_group' => request('ssc_group'),
            'ssc_result' => request('ssc_result'),
            'ssc_passing' => request('ssc_passing'),
            'education_status' => 'completed',
            'skill_status' => 'start'
        ]);

        return back()->with('status', 'Succesfully Stored Your Educational Info.');
    }

    public function skillStore(Request $request)
    {
        $request->validate([
            'computer_ms' => ['required'],
            'internet' => ['required'],

            'english' => ['required'],
            'bangla' => ['required'],
        ], [
            'computer_ms.required' => 'MS Office Field is Required',
            'internet.required' => 'Internet Skill Field is Required',

            'english.required' => 'English Language Field is Required',
            'bangla.required' => 'Bangla Language Field is Required',
        ]);

        $user = Auth::user();
        $resume = resume::where('user_id', $user->id);
        $resume->update([
            'computer_ms' => request('computer_ms'),
            'internet' => request('internet'),
            'english' => request('english'),
            'bangla' => request('bangla'),
            'skill_status' => 'completed',
            'personal_status' => 'start'
        ]);
        return back()->with('status', 'Succesfully Stored Your Skills Info.');
    }
    public function personalStore(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'father_name' => ['required'],
            'mother_name' => ['required'],
            'birth_date' => ['required'],
            'nationality' => ['required'],
            'religion' => ['required'],
            'sex' => ['required'],
            'marital_status' => ['required'],
            'height' => ['required'],
            'weight' => ['required'],
            'nid' => ['required'],
            'blood_group' => ['required'],

            'pa_care_of' => ['required'],
            'pa_village' => ['required'],
            'pa_post_office' => ['required'],
            'pa_upazila' => ['required'],
            'pa_district' => ['required'],
        ], [

            'name.required' => 'Full Name Field is Required',
            'father_name.required' => 'Fathers Name Field is Required',
            'mother_name.required' => 'Mothers Name Field is Required',
            'birth_date.required' => 'Birth Date Field is Required',
            'nationality.required' => 'Nationality Field is Required',
            'religion.required' => 'Religion Field is Required',
            'sex.required' => 'Gender Field is Required',
            'marital_status.required' => 'Marital Status Field is Required',
            'height.required' => 'Height Field is Required',
            'weight.required' => 'Weight Field is Required',
            'nid.required' => 'NID Number Field is Required',
            'blood_group.required' => 'Blood Group Field is Required',

            'pa_care_of.required' => 'Permanent Care of Field is Required',
            'pa_village.required' => 'Permanent Village Field is Required',
            'pa_post_office.required' => 'Permanent Post Office Field is Required',
            'pa_upazila.required' => 'Permanent Upazilla Field is Required',
            'pa_district.required' => 'Permanent District Field is Required',

        ]);

        $user = Auth::user();
        $resume = resume::where('user_id', $user->id);
        $resume->update([
            'name' => request('name'),
            'father_name' => request('father_name'),
            'mother_name' => request('mother_name'),
            'birth_date' => request('birth_date'),
            'nationality' => request('nationality'),
            'religion' => request('religion'),
            'sex' => request('sex'),
            'marital_status' => request('marital_status'),
            'height' => request('height'),
            'weight' => request('weight'),
            'nid' => request('nid'),
            'blood_group' => request('blood_group'),
            'pa_care_of' => request('pa_care_of'),
            'pa_village' => request('pa_village'),
            'pa_post_office' => request('pa_post_office'),
            'pa_upazila' => request('pa_upazila'),
            'pa_district' => request('pa_district'),
            'personal_status' => 'completed'
        ]);

        return back()->with('status', 'Successfully Stored Your Personal Info.');
    }
    //user data store End
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        $resume = resume::where('user_id', $user->id)->first();;
        return view('resume.alldata', compact('resume'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //user data Edit start
    public function contactEdit()
    {
        $user = Auth::user();
        $resume = resume::where('user_id', $user->id)->first();;
        return view('resume.edit.contactedit', compact('resume'));
    }

    public function educationEdit()
    {
        $user = Auth::user();
        $resume = resume::where('user_id', $user->id)->first();;
        return view('resume.edit.educationedit', compact('resume'));
    }
    public function skillEdit()
    {
        $user = Auth::user();
        $resume = resume::where('user_id', $user->id)->first();;
        return view('resume.edit.skilledit', compact('resume'));
    }
    public function personalEdit()
    {
        $user = Auth::user();
        $resume = resume::where('user_id', $user->id)->first();;
        return view('resume.edit.personaledit', compact('resume'));
    }
    //user data Edit End


    //user data Update start
    public function contactUpdate(Request $request)
    {
        $request->validate([
            'care_of' => ['required'],
            'village' => ['required'],
            'post_office' => ['required'],
            'upazila' => ['required'],
            'district' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],

            'career' => ['required', 'min:100', 'max:500'],
        ], [
            'care_of.required' => 'Care Of Field is Required',
            'village.required' => 'Village Field is Required',
            'post_office.required' => 'Post Office Field is Required',
            'upazila.required' => 'Present Upazilla Field is Required',
            'district.required' => 'Present District Field is Required',
            'phone.required' => 'Phone Number Field is Required',
            'email.required' => 'Email Field is Required',

            'career.required' => 'Career Object Field is Required',
        ]);
        $user = Auth::user();
        $resume = resume::where('user_id', $user->id);
        $resume->update([
            'user_id' => $user->id,
            'care_of' => request('care_of'),
            'village' => request('village'),
            'post_office' => request('post_office'),
            'upazila' => request('upazila'),
            'district' => request('district'),
            'phone' => request('phone'),
            'email' => request('email'),
            'career' => request('career'),
        ]);
        return redirect('/resume/data')->with('status', 'Successfully Edited Your Contact Info');
    }

    public function educationUpdate(Request $request)
    {
        $request->validate([
            'honours_institue' => ['required'],
            'honours_versity' => ['required'],
            'honours_subject' => ['required'],
            'honours_result' => ['required'],
            'honours_passing' => ['required'],

            'hsc_institue' => ['required'],
            'hsc_board' => ['required'],
            'hsc_result' => ['required'],
            'hsc_group' => ['required'],
            'hsc_passing' => ['required'],

            'ssc_institue' => ['required'],
            'ssc_board' => ['required'],
            'ssc_group' => ['required'],
            'ssc_result' => ['required'],
            'ssc_passing' => ['required'],

        ], [
            'honours_institue.required' => 'Honours Institution Field is Required',
            'honours_versity.required' => 'Honours University Field is Required',
            'honours_subject.required' => 'Honours Subject Field is Required',
            'honours_result.required' => 'Honours Result Field is Required',
            'honours_passing.required' => 'Honours Passing Year Field is Required',

            'hsc_institue.required' => 'HSC Institution Field is Required',
            'hsc_board.required' => 'HSC Board Field is Required',
            'hsc_result.required' => 'HSC Result Field is Required',
            'hsc_group.required' => 'HSC Group Field is Required',
            'hsc_passing.required' => 'HSC Passing Year Field is Required',

            'ssc_institue.required' => 'SSC Institution Field is Required',
            'ssc_board.required' => 'SSC Board Field is Required',
            'ssc_group.required' => 'SSC Group Field is Required',
            'ssc_result.required' => 'SSC Result Field is Required',
            'ssc_passing.required' => 'SSC Passing Year Field is Required',
        ]);
        $user = Auth::user();
        $resume = resume::where('user_id', $user->id);
        $resume->update([
            'honours_institue' => request('honours_institue'),
            'honours_versity' => request('honours_versity'),
            'honours_subject' => request('honours_subject'),
            'honours_result' => request('honours_result'),
            'honours_passing' => request('honours_passing'),
            'hsc_institue' => request('hsc_institue'),
            'hsc_board' => request('hsc_board'),
            'hsc_result' => request('hsc_result'),
            'hsc_group' => request('hsc_group'),
            'hsc_passing' => request('hsc_passing'),
            'ssc_institue' => request('ssc_institue'),
            'ssc_board' => request('ssc_board'),
            'ssc_group' => request('ssc_group'),
            'ssc_result' => request('ssc_result'),
            'ssc_passing' => request('ssc_passing'),
        ]);

        return redirect('/resume/data')->with('status', 'Succesfully Edited Your Educational Info.');
    }
    public function skillUpdate(Request $request)
    {
        $request->validate([
            'computer_ms' => ['required'],
            'internet' => ['required'],

            'english' => ['required'],
            'bangla' => ['required'],
        ], [
            'computer_ms.required' => 'MS Office Field is Required',
            'internet.required' => 'Internet Skill Field is Required',

            'english.required' => 'English Language Field is Required',
            'bangla.required' => 'Bangla Language Field is Required',
        ]);

        $user = Auth::user();
        $resume = resume::where('user_id', $user->id);
        $resume->update([
            'computer_ms' => request('computer_ms'),
            'internet' => request('internet'),
            'english' => request('english'),
            'bangla' => request('bangla'),
        ]);
        return redirect('/resume/data')->with('status', 'Succesfully Edited Your Skills Info.');
    }
    public function personalUpdate(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'father_name' => ['required'],
            'mother_name' => ['required'],
            'birth_date' => ['required'],
            'nationality' => ['required'],
            'religion' => ['required'],
            'sex' => ['required'],
            'marital_status' => ['required'],
            'height' => ['required'],
            'weight' => ['required'],
            'nid' => ['required'],
            'blood_group' => ['required'],

            'pa_care_of' => ['required'],
            'pa_village' => ['required'],
            'pa_post_office' => ['required'],
            'pa_upazila' => ['required'],
            'pa_district' => ['required'],
        ], [

            'name.required' => 'Full Name Field is Required',
            'father_name.required' => 'Fathers Name Field is Required',
            'mother_name.required' => 'Mothers Name Field is Required',
            'birth_date.required' => 'Birth Date Field is Required',
            'nationality.required' => 'Nationality Field is Required',
            'religion.required' => 'Religion Field is Required',
            'sex.required' => 'Gender Field is Required',
            'marital_status.required' => 'Marital Status Field is Required',
            'height.required' => 'Height Field is Required',
            'weight.required' => 'Weight Field is Required',
            'nid.required' => 'NID Number Field is Required',
            'blood_group.required' => 'Blood Group Field is Required',

            'pa_care_of.required' => 'Permanent Care of Field is Required',
            'pa_village.required' => 'Permanent Village Field is Required',
            'pa_post_office.required' => 'Permanent Post Office Field is Required',
            'pa_upazila.required' => 'Permanent Upazilla Field is Required',
            'pa_district.required' => 'Permanent District Field is Required',

        ]);

        $user = Auth::user();
        $resume = resume::where('user_id', $user->id);
        $resume->update([
            'name' => request('name'),
            'father_name' => request('father_name'),
            'mother_name' => request('mother_name'),
            'birth_date' => request('birth_date'),
            'nationality' => request('nationality'),
            'religion' => request('religion'),
            'sex' => request('sex'),
            'marital_status' => request('marital_status'),
            'height' => request('height'),
            'weight' => request('weight'),
            'nid' => request('nid'),
            'blood_group' => request('blood_group'),
            'pa_care_of' => request('pa_care_of'),
            'pa_village' => request('pa_village'),
            'pa_post_office' => request('pa_post_office'),
            'pa_upazila' => request('pa_upazila'),
            'pa_district' => request('pa_district'),
        ]);

        return redirect('/resume/data')->with('status', 'Successfully Edited Your Personal Info.');
    }

    //user data Update start
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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