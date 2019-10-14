<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Mail\RegistrationConfirmed;
use App\Mail\RegistrationSubmitted;
use App\Models\Organisation;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\DataTables;

class RegistrationController extends Controller {

    public function registrants() {
        return View('registrations.registrants');
    }

    public function dataAjaxSearch(Request $request) {
        $keyword = $request->input('keyword');
        if (empty($keyword)) {
            $temp = $request->input('search');
            if (!empty($temp['value'])) {
                $keyword = $temp['value'];
            }
        }

        if (empty($keyword)) {
            $keyword = "";
        }

        $datasearch = Registration::searchAjax($keyword);

        return DataTables::of($datasearch)
            ->addColumn('action', function ($datasearch) {

                $link = "";

                if ($datasearch->status == "unconfirmed") {
                    $link = '<a href=' .
                        route('registrations/confirm',$datasearch->id) .
                        ' class="btn-small waves-effect waves-light materialize-blue dark-5 confirm  btn-block" role="button">
                                            <i class="glyphicon glyphicon-remove"></i> Confirm</a>';
                }
                return $link;
            })
            ->setRowId('id')
            ->make(true);
    }

    public function create() {
        return view('registrations.create');
    }

    public function store(RegistrationRequest $request) {

        $registration = new Registration();
        $registration->first_name = $request->first_name;
        $registration->last_name = $request->last_name;
        $registration->email = $request->email;
        $registration->mobile_number = $request->mobile_number;
        $registration->dive_center = $request->dive_center;
        $registration->bank = $request->bank;
        $registration->transaction_number = $request->transaction_number;
        $registration->status = "unconfirmed";

        if ($registration->save()) {
            Mail::to("dspot.id@gmail.com")->send(new RegistrationSubmitted($registration));

            return Redirect::route('registrations/complete')->with('success', "Registration Succeed");
        } else {
            return Redirect::back()->withInput()->withErrors("Failed save your input");
        }
    }

    public function complete() {
        return view('registrations.thank_you');
    }

    public function confirm($id, Request $request) {

        $registration = Registration::where('id', $id)->first();

        if (empty($registration)) {
            return Redirect::back()->withInput()->withErrors("Failed");
        }
        $registration->status = "confirmed";

        if ($registration->save()) {
            Mail::to($registration->email)->send(new RegistrationConfirmed($registration));

            return Redirect::route('registrants')->with('success', "Registration Confirmed");
        } else {
            return Redirect::back()->withInput()->withErrors("Failed save your input");
        }
    }
}
