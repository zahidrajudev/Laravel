<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $resume->name }}</title>
    @include('resume.css')

</head>

<body>
    <div class="container">
        <div class="text-center lh-1">
            <h1><b>CURRICULUM VITAE</b></h1>
            <h2><b>OF</b></h2>
            <h2><b>{{ $resume->name }}</b></h2>
        </div>
        <h3 class="lh-1"><b><u>Contact:</u></b></h3>
        <div class="text-left" style="font-size: 17px;">
            <table>
                <tr>
                    <td>Care of</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->care_of }},</td>
                </tr>
                <tr>
                    <td>Village</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->village }},</td>
                </tr>
                <tr>
                    <td>Post O.</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->post_office }},</td>
                </tr>
                <tr>
                    <td>Upazila</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->upazila }},</td>
                </tr>
                <tr>
                    <td>District</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->district }},</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->phone }},</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->email }},</td>
                </tr>
            </table>
        </div>
        <h3 class="bg-silver p-6 border-r-1 lh-1 "><b><u>Career Objective:</u></b></h3>
        <p style="font-size: 17px;">{{ $resume->career }}</p>
        <h3><b><u>Academic Qualification:</u></b></h3>
        <h3 class="bg-silver p-6 border-r-1 border-black-1"><b>
                ::: Honours Examination
            </b></h3>
        <div class="pl-11 " style="font-size: 17px;">
            <table>
                <tr>
                    <td>Name of Institute</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->honours_institue }},</td>
                </tr>
                <tr>
                    <td>University</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->honours_versity }},</td>
                </tr>
                <tr>
                    <td>Subject</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->honours_subject}},</td>
                </tr>
                <tr>
                    <td>Result</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->honours_result }}</td>
                </tr>
                <tr>
                    <td>Passing Year</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->honours_passing }},</td>
                </tr>
            </table>
        </div>
        <h3 class="bg-silver p-6 border-r-1 border-black-1"><b>
                ::: HSC Examination
            </b></h3>
        <div class="pl-11" style="font-size: 17px;">
            <table>
                <tr>
                    <td>Name of Institute</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->hsc_institue }},</td>
                </tr>
                <tr>
                    <td>Board</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->hsc_board }},</td>
                </tr>
                <tr>
                    <td>Group</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->hsc_group }},</td>
                </tr>
                <tr>
                    <td>Result</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->hsc_result }},</td>
                </tr>
                <tr>
                    <td>Passing Year</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->hsc_passing }},</td>
                </tr>
            </table>
        </div>
        <h3 class="bg-silver p-6 border-r-1 border-black-1"><b>
                ::: SSC Examination
            </b></h3>
        <div class="pl-11" style="font-size: 17px;">
            <table>
                <tr>
                    <td>Name of Institute</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->ssc_institue }},</td>
                </tr>
                <tr>
                    <td>Board</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->ssc_board }},</td>
                </tr>
                <tr>
                    <td>Group</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->ssc_group }},</td>
                </tr>
                <tr>
                    <td>Result</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->ssc_result }}</td>
                </tr>
                <tr>
                    <td>Passing Year</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->ssc_passing }},</td>
                </tr>
            </table>
        </div>

        <div class="page-break"></div>
        <h3 class="bg-silver p-6 border-r-1 border-black-1"><b>
                ::: Computer Literacy
            </b></h3>
        <ul>
            <li>{{ $resume->computer_ms }}</li>
            <li>{{ $resume->internet }}</li>
        </ul>
        <h3 class="bg-silver p-6 border-r-1 border-black-1"><b>
                ::: Language Skills
            </b></h3>
        <ul>
            <li>{{ $resume->bangla }}</li>
            <li>{{ $resume->english }}</li>
        </ul>
        <h3 class="bg-silver p-6 border-r-1 border-black-1"><b>
                ::: Personal Details
            </b></h3>
        <div class="pl-11" style="font-size: 17px;">
            <table>
                <tr>
                    <td>Name</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->name }},</td>
                </tr>
                <tr>
                    <td>Father’s Name</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->father_name }},</td>
                </tr>
                <tr>
                    <td>Mother’s Name</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->mother_name }},</td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->birth_date }},</td>
                </tr>
                <tr>
                    <td>Nationality</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->nationality }},</td>
                </tr>
                <tr>
                    <td>Religion</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->religion }},</td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->sex }},</td>
                </tr>
                <tr>
                    <td>Marital Status</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->marital_status }},</td>
                </tr>
                <tr>
                    <td>Height</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->height }},</td>
                </tr>
                <tr>
                    <td>Weight</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->weight }},</td>
                </tr>
                <tr>
                    <td>NID</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->nid }},</td>
                </tr>
                <tr>
                    <td>Blood Group</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->blood_group }},</td>
                </tr>
                <p style="padding-top: 5px; font-size:18px;"><u>Permanent Address</u></p>
                <tr>
                    <td>Care of</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->pa_care_of }},</td>
                </tr>
                <tr>
                    <td>Village</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->pa_village }},</td>
                </tr>
                <tr>
                    <td>Post O.</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->pa_post_office }},</td>
                </tr>
                <tr>
                    <td>Upazila</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->pa_upazila }},</td>
                </tr>
                <tr>
                    <td>District</td>
                    <td class="pl-10 pr-5">:</td>
                    <td>{{ $resume->pa_district }},</td>
                </tr>
            </table>
        </div>
        <h3 class="bg-silver p-6 border-r-1 border-black-1"><b>
                ::: Declaration
            </b></h3>
        <div class="pl-11">
            <p style="font-size: 17px;"> I hereby declare that all the information given above is absolutely
                true and
                correct to the best of my knowledge and
                belief.</p>

            <p class="lh-1 text-left" style="padding-top: 5px; margin-bottom: -8px;">___________________</p>
            <h3 class="lh-1 text-left pl-12 lh-1"><b>{{ $resume->name }}</b></h3>
            <p class="lh-1 text-left" style="padding-top: 20px;">Date.........................</p>
        </div>
</body>

</html>