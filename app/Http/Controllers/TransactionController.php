<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd();
        $user = Auth::user();
        return view('transaksi', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user=Auth::user();
        
        $validator = Validator::make($request->all(), [
            'amount'=>['required', 'integer', 'min:10000'],
            'metode_pembayaran'=>['required', 'in:ovo,gopay,shopeepay,dana']
        ]);

        // if($validator->fails()){
        //     return redirect()->route('transaksi.index')->withErrors($validator);
        // }

    //    dd($request);
        if(Donations::where('user_id', $user->id)->exists()){
            $donation = Donations::where('user_id', $user->id)->first();
            $donation->amount = $donation->amount + $request->amount;   
        }
        Donations::create([
            'user_id' => $user->id,
            'amount' => $request->amount,
            'payment_method'=>$request->metode_pembayaran,
        ]);
        
        return redirect()->route('donate')->with('success', 'Donation successfull');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
