<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Items;

use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        Stripe::setApiKey('sk_test_51IQ1qOIifUdmh3jmnxCY1TadmCMd26xBLG7JVBIX0864QguNS7X4K5NFS88KyI2l4DDOvNzr5hFSakDpEzHcD0eu00vYBX95tx');
 
        $charge = Charge::create(array(
            'amount' => $request->price,
            'currency' => 'jpy',
            'source'=> request()->stripeToken,
        ));

        $item = Items::find($request->item_id);
        $item->sold_check = now();
        $item->buyer_id= Auth::user()->id;
        $item->save();

        return redirect("/message/$request->item_id");
        // return back();
    }
}
