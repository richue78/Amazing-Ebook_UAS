<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EbookController extends Controller
{
    //

    public function show($id){
        $ebookdetail = Ebook::find($id);
        return view('bookdetail', compact('ebookdetail'));
    }

    public function addToCart(Ebook $ebook){

        Order::create([
            'ebook_id' => $ebook->id,
            'account_id' => Auth::user()->id,
            'order_date' => date("Y/m/d"),
        ]);

        return redirect()->back();
    }


    public function showCart(User $user){
        $carts = Order::with('ebook')
            ->where('account_id', Auth::user()->id)
            ->get();

        return view('/cart',compact('carts'));
    }

    public function destroy(Order $order){
        Order::destroy($order->id);
        
        return redirect()->back();
        
    }

    public function submit(){
        Order::where('account_id', Auth::user()->id)->delete();

        return redirect('/success');
    }
}
