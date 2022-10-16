<?php

namespace App\Http\Controllers;

use App\Models\Bride;
use App\Models\Detail;
use App\Models\Wedding;
use App\Models\Gift;
use App\Models\Wishes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $to         = $request->to;
        $wedding    = Wedding::all();
        $bride      = Bride::all();
        $detail     = Detail::all();
        $gift       = Gift::all();
        $wish       = Wishes::all();
        $bank       = Bride::select('brides.name', 'brides.acc_name', 'brides.acc_number', 'brides.bank_id', 'banks.name as bank_name', 'banks.logo')->join('banks', 'banks.id', 'brides.bank_id')->get();

        return view('home', compact('bride', 'detail', 'wedding', 'gift', 'bank', 'to','wish'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'name'     => 'required',
            'comment'     => 'required',
            'wedding_id'   => 'required'
        ]);

        //create post
        Wishes::create([
            'name'     => $request->name,
            'comment'     => $request->comment,
            'wedding_id'   => $request->wedding_id
        ]);

        //redirect to index
        // return redirect()->route('home.index')->with(['success' => 'Data Berhasil Disimpan!']);
        $to         = $request->to;
        $wedding    = Wedding::all();
        $bride      = Bride::all();
        $detail     = Detail::all();
        $gift       = Gift::all();
        $wish       = Wishes::all();
        $bank       = Bride::select('brides.name', 'brides.acc_name', 'brides.acc_number', 'brides.bank_id', 'banks.name as bank_name', 'banks.logo')->join('banks', 'banks.id', 'brides.bank_id')->get();

        return view('home', compact('bride', 'detail', 'wedding', 'gift', 'bank', 'to', 'wish'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

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
