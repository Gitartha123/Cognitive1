<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\candidate;
use App\score;
use App\result;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class CreateResult extends Controller
{


    public function Result(Request $request)
    {
        //Variable for getting total capacity of each caste for a particular post

        $capacity = DB::table('post')->value('capacity');
        $gnm = DB::table('post')->value('gnm');
        $gnf = DB::table('post')->value('gnf');
        $obcm = DB::table('post')->value('obcm');
        $obcf = DB::table('post')->value('obcf');
        $stm = DB::table('post')->value('stm');
        $stf = DB::table('post')->value('stf');



        //Display qualified candidates of general male
            $candidate_gnm= DB::table('candidate')->where('gender', '=', 'm')->join('score', 'candidate.rollno', '=', 'score.rollno')->orderByDesc('mark')->orderByDesc('age')->orderByDesc('height')->get()->take($gnm);
            if(json_decode($candidate_gnm) == null){
                echo '';
            }
            foreach ($candidate_gnm as $c){
                $candidate[] = ['rollno'=>$c->rollno,'distid'=>$c->distid];
            }

            foreach ($candidate as $item ){
                DB::table('candidate')->where('rollno','=',$item['rollno'])->update(['status'=>'gnm','allocatedistid'=>$item['distid']]);
            }



         //Display qualified candidates of general female

            $candidate_gnf = DB::table('candidate')->where('gender','=','f')->join('score','candidate.rollno','=','score.rollno')->orderByDesc('mark')->orderByDesc('age')->orderByDesc('height')->get()->take($gnf);
            if(json_decode($candidate_gnf) == null){
                echo '';
            }
            else{
                foreach ($candidate_gnf as $d){
                    $candidate2[] = ['rollno'=>$d->rollno,'distid'=>$d->distid];
                }
                foreach ($candidate2 as $item2){
                    DB::table('candidate')->where('rollno','=',$item2['rollno'])->update(['status'=>'gnf','allocatedistid'=>$item2['distid']]);
                }
            }



        //Display qualified candidates OBC male

            $candidate_obc = DB::table('candidate')->where('caste','=','OBC')->where('gender','=','m')->where('status','!=','gnm')->join('score','candidate.rollno','=','score.rollno')->orderByDesc('mark')->orderByDesc('age')->orderByDesc('height')->get()->take($obcm);
            if(json_decode($candidate_obc) == null){
                echo '';
            }
            else{
                foreach ($candidate_obc as $obc){
                    $candidate3[] = ['rollno'=>$obc->rollno,'distid'=>$obc->distid];
                }
                foreach($candidate3 as $item3){
                    DB::table('candidate')->where('rollno','=',$item3['rollno'])->update(['status'=>'obcm','allocatedistid'=>$item3['distid']]);
                }
            }


        //Display qualified candidates OBC female


            $candidate_obcf = DB::table('candidate')->where('caste','=','OBC')->where('gender','=','f')->where('status','!=','gnf')->join('score','candidate.rollno','=','score.rollno')->orderByDesc('mark')->orderByDesc('age')->orderByDesc('height')->get()->take($obcf);
            if(json_decode($candidate_obcf) == null){
                echo '';
            }
            else{
                foreach ($candidate_obcf as $obcf) {
                    $candidate4[] = ['rollno' => $obcf->rollno,'distid'=>$obcf->distid];
                }
                foreach ($candidate4 as $item4) {
                    DB::table('candidate')->where('rollno', '=', $item4['rollno'])->update(['status' => 'obcf','allocatedistid'=>$item4['distid']]);
                }
            }



        //Display qualified candidates ST/SC male

            $candidate_st = DB::table('candidate')->where('caste','=','ST')->where('gender','=','m')->where('status','!=','gnm')->join('score','candidate.rollno','=','score.rollno')->orderByDesc('mark')->orderByDesc('age')->orderByDesc('height')->get()->take($stm);
            if(json_decode($candidate_st) == null){
                echo '';
            }
            else{
                foreach ($candidate_st as $st){
                    $candidate5[] = ['rollno'=>$st->rollno,'distid'=>$st->distid];
                }
                foreach($candidate5 as $item5){
                    DB::table('candidate')->where('rollno','=',$item5['rollno'])->update(['status'=>'stm','allocatedistid'=>$item5['distid']]);
                }
            }



        //Display qualified candidates ST/SC female

            $candidate_stf = DB::table('candidate')->where('caste','=','ST')->where('gender','=','f')->where('status','!=','gnf')->join('score','candidate.rollno','=','score.rollno')->orderByDesc('mark')->orderByDesc('age')->orderByDesc('height')->get()->take($stf);
            if(json_decode($candidate_stf) == null){
                echo '';
            }
            else{
                foreach ($candidate_stf as $stf){
                    $candidate6[] = ['rollno'=>$stf->rollno,'distid'=>$stf->distid];
                }
                foreach($candidate6 as $item6){
                    DB::table('candidate')->where('rollno','=',$item6['rollno'])->update(['status'=>'stf','allocatedistid'=>$item6['distid']]);
                }
            }


            return view('index', compact('candidate_gnm'), compact('candidate_gnf'))->with('candidate_obc', $candidate_obc)->with('candidate_obcf', $candidate_obcf)->with('candidate_st', $candidate_st)->with('candidate_stf', $candidate_stf);

    }







}
