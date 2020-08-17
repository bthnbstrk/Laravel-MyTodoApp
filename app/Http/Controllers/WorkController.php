<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    public function index()
    {

        $data['allWork'] = DB::table('work')->get();
        return view('work', compact('data'));
    }


    public function workInsert()
    {
        return view('workInsert');
    }

    public function workInsertPost(Request $request)
    {
        $request->validate([
            'work_owner' => 'required',
            'work_detail' => 'required'
        ]);


        $work = DB::table('work')->insert(
            [
                'work_owner' => $request->work_owner,
                'work_detail' => $request->work_detail
            ]
        );

        if ($work) {
            return back()->with('status', 'Kayıt Başarılı');
        }

    }

    public function workUpdate($id)
    {
        $work = DB::table('work')
            ->where('id', $id)
            ->first();

        // alternative query-> $work= DB::table('work')->find($id);

        return view('workUpdate', compact('work'));
    }

    public function workUpdatePost(Request $request, $id)
    {
        $request->validate([
            'work_owner' => 'required',
            'work_detail' => 'required'
        ]);


        $work = DB::table('work')
            ->where('id', $id)
            ->update(
                [
                    'work_owner' => $request->work_owner,
                    'work_detail' => $request->work_detail
                ]
            );

        if ($work) {
            return back()->with('status', 'İş Güncellemeniz Başarılı');
        }

    }

    public function workDelete($id)
    {

//       DB::table('work')
//            ->where('id',$id)
//            ->Delete($id);
// alternative query

        DB::table('work')
            ->Delete($id);
        return back();

    }
}
