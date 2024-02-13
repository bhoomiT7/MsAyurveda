<?php

namespace App\Http\Controllers;

use App\Models\patient_analysis;
use Illuminate\Http\Request;
use App\Models\patients;
use PDF;

class AnalysisController extends Controller
{
    public function create(Request $request){    
    
        $data=new patients();
        $data->firstname=$request->firstname;
        $data->lastname=$request->lastname;
        $data->city=$request->city;
        $data->contactno=$request->contact;
        $data->gender=$request->gender;
        $data->age=$request->age;
        $data->email=$request->email;

        $data->save();
        return view('patient');
    }
    public function create_analysis(Request $request){
        
        //dd($request->BodyFrame);
        
        $data=new patient_analysis();
        $data->patient_id=1;
        $data->bodyframe=$request->BodyFrame1;
        $data->typeofhair=$request->BodyFrame2;
        $data->colorofhair=$request->BodyFrame3;
        $data->skin=$request->BodyFrame4;
        $data->complexion=$request->BodyFrame5;
        $data->bodyweight=$request->BodyFrame6;
        $data->nails=$request->BodyFrame7;
        $data->sizeandcoloroftheteeth=$request->BodyFrame8;
        $data->paceofperformingwork=$request->BodyFrame9;
        $data->mentalactivity=$request->BodyFrame10;
        $data->memory=$request->BodyFrame11;
        $data->sleeppattern=$request->BodyFrame12;
        $data->weatherconditions=$request->BodyFrame13;
        $data->reactionsunderadversesituation=$request->BodyFrame14;
        $data->mood=$request->BodyFrame15;
        $data->eatinghabit=$request->BodyFrame16;
        $data->hunger=$request->BodyFrame17;
        $data->bodytemperature=$request->BodyFrame18;
        $data->joints=$request->BodyFrame19;
        $data->nature=$request->BodyFrame20;
        $data->bodyenergy=$request->BodyFrame21;
        $data->qualityofvoice=$request->BodyFrame22;
        $data->dreams=$request->BodyFrame23;
        $data->socialrelations=$request->BodyFrame24;
        $data->wealth=$request->BodyFrame25;
        $data->bowelmovement=$request->BodyFrame26;
        $data->communicationskill=$request->BodyFrame27;
        $data->save();
        return back();
    }
    public function view()
    {
        $data = patient_analysis::latest()->first();
        $pdf = PDF::loadView('Ticket.view', $data);
        return $pdf->stream('document.pdf');
    }
}
