<?php
namespace App\Http\Controllers;

use Auth;
use Hash;
use Mail;
use Cache;
use Session;
use Validator;
use Carbon\Carbon;
use App\Http\Controllers;
use App\Model\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Redirect;

// session_start();




class PublicSslCommerzPaymentController extends Controller
{
    public function index(Request $request, UserPayment $payment) 
    {
            # Here you have to receive all the order data to initate the payment.
            # Lets your oder trnsaction informations are saving in a table called "orders"
            # In orders table order uniq identity is "order_id","order_status" field contain status of the transaction, "grand_total" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

// $payment->status = 'pending';
// $payment->membership_package_id = $package->id;
// $payment->package_title = $package->package_title;
// $payment->package_description = $package->package_description;
// $payment->package_amount = $package->package_amount;
// $payment->package_currency = $package->package_currency;
// $payment->package_duration = $package->package_duration;
// $payment->paid_amount = $request->paid_amount;
// $payment->paid_currency = $request->paid_currency;
// $payment->payment_method = $request->payment_method;
// $payment->payment_details = $request->payment_details;
// $payment->admin_comment = null;
// $payment->user_id = Auth::id();
// $payment->addedby_id = Auth::id();
// $payment->save();

            $post_data = array();
            $post_data['total_amount'] = $payment->paid_amount; # You cant not pay less than 10
            $post_data['currency'] = $payment->paid_currency;
            $post_data['tran_id'] = $payment->id; // tran_id must be unique
            #Start to save these value  in session to pick in success page.
            // $_SESSION['payment_values']['tran_id']=$post_data['tran_id']; 

            #End to save these value  in session to pick in success page.
            $server_name=$request->root()."/ssl/";
            $post_data['success_url'] = $server_name . "success";
            $post_data['fail_url'] = $server_name . "fail";
            $post_data['cancel_url'] = $server_name . "cancel";
            # CUSTOMER INFORMATION
            $post_data['cus_name'] = $payment->user->name ?: 'no name';
            $post_data['cus_email'] = $payment->user->email;
            $post_data['cus_add1'] = $payment->user->location;
            $post_data['cus_add2'] = "";
            $post_data['cus_city'] = "";
            $post_data['cus_state'] = "";
            $post_data['cus_postcode'] = "";
            $post_data['cus_country'] = $payment->user->country;
            $post_data['cus_phone'] = $payment->user->mobile;
            $post_data['cus_fax'] = "";
            # SHIPMENT INFORMATION
            $post_data['ship_name'] = 'ship_name';
            $post_data['ship_add1 '] = 'Ship_add1';
            $post_data['ship_add2'] = "";
            $post_data['ship_city'] = "";
            $post_data['ship_state'] = "";
            $post_data['ship_postcode'] = "";
            $post_data['ship_country'] = "Bangladesh";
            # OPTIONAL PARAMETERS
            $post_data['value_a'] = "ref001";
            $post_data['value_b'] = "ref002";
            $post_data['value_c'] = "ref003";
            $post_data['value_d'] = "ref004";
            
            #Before  going to initiate the payment order status need to update as Pending.


            /*$update_product = DB::table('orders')
                                    ->where('order_id', $post_data['tran_id'])
                                    ->update(['order_status' => 'Pending','currency' => $post_data['currency']]);
            */

            $sslc = new SSLCommerz();
            # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )


            $payment_options = $sslc->initiate($post_data, false);
            if (!is_array($payment_options)) {
                print_r($payment_options);
                $payment_options = array();
            }
    }
    public function success(Request $request) 
    {
        echo "Transaction is Successful";
        $sslc = new SSLCommerz();
        #Start to received these value from session. which was saved in index function.
        // $tran_id = $_SESSION['payment_values']['tran_id'];
        // $tran_id = $_SESSION['payment_values']['tran_id'];

        $tran_id = $request->session()->get('trid');
 
            
            
 
        #End to received these value from session. which was saved in index function.
        #Check order status in order tabel against the transaction id or order id.
        

        /*$order_detials = DB::table('orders')
                            ->where('order_id', $tran_id)
                            ->select('order_id', 'order_status','currency','grand_total')->first();
        */

        $payment = UserPayment::whereId($tran_id)->first();
        if(!$payment)
        {
           echo 'Payment is succussfull, please contact admin to update your membership package.';
        }

        if($payment->status == 'pending' || $payment->status == 'inactive')
        {

            
            // $validation = $sslc->orderValidate($tran_id, $payment->package_amount, $payment->package_currency, $request->all());
            // if($validation == TRUE) 
            // {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                in order table as Processing or Complete.
                Here you can also sent sms or email for successfull transaction to customer
                */ 
                
                // $update_product = DB::table('orders')
                //             ->where('order_id', $tran_id)
                //             ->update(['order_status' => 'Processing']);
                

            $payment->status = 'paid';
            $payment->payment_method = 'online';

            $payment->paid_amount = $payment->paid_amount;


          // $payment->payment_method = "Payment Card: ".$wmx_response->payment_card . ", Payment Method: " . $wmx_response->payment_method;
          // $payment->payment_details = "Payable Ammount: BDT" .$wmx_response->merchant_amount_bdt . ", Gateway Charge: " . $wmx_response->service_ratio . "%, Total Paid To Bank BDT " . $wmx_response->bank_amount_bdt . ". Payment ID: " . $wmx_response->merchant_order_id. ", Card Details: " . $wmx_response->card_details;
          // $payment->admin_comment = null;
          $payment->editedby_id = Auth::id();
          $payment->updated_at = Carbon::now();
          $payment->save();

          $user = $payment->user;
          $user->package = $payment->membership_package_id;
          $expired_at = $user->expired_at;
          if($expired_at > Carbon::now())
          {
              $user->expired_at = $expired_at->addDays($payment->package_duration);
          }else
          {
              $user->expired_at = Carbon::now()->addDays($payment->package_duration);
          }

          $user->save();

          // dd($sslc->getResultData());

                echo "<br >Transaction is successfully Complete";
                return redirect()->route('welcome.welcome')->with('success', 'Your payment process successfully completed. Your membership package updated. Thank you.');
            // }
            // else
            // {
            //     /*
            //     That means IPN did not work or IPN URL was not set in your merchant panel and Transation validation failed.
            //     Here you need to update order status as Failed in order table.
            //     */ 
            //     // $update_product = DB::table('orders')
            //     //             ->where('order_id', $tran_id)
            //     //             ->update(['order_status' => 'Failed']);
            //     // $payment->delete();
            //     echo "validation Fail";
            // }    
        }
        else if($payment->status == 'processing' || $payment->status == 'complete')
        {
            /*
             That means through IPN Order status already updated. Now you can just show the customer that transaction is completed. No need to udate database.
             */
            echo "Transaction is successfully Complete";
        }
        else
        {
             #That means something wrong happened. You can redirect customer to your product page.
            echo "Invalid Transaction";
        }    
         
        return redirect()->route('welcome.welcome');
    }
    public function fail(Request $request) 
    {
         // $tran_id = $_SESSION['payment_values']['tran_id'];
         //$tran_id = $request->session()->get('trid');
         $tran_id = $request->tran_id;
         $payment = UserPayment::whereId($tran_id)->first();

         if(!$payment)
        {
           echo 'Transaction is failed, please contact admin for further procedure.';
        }

         // $order_detials = DB::table('orders')
         //                    ->where('order_id', $tran_id)
         //                    ->select('order_id', 'order_status','currency','grand_total')->first();


        if($payment->status == 'pending' || $payment->status == 'inactive')
        {
            // $update_product = DB::table('orders')
            //                 ->where('order_id', $tran_id)
            //                 ->update(['order_status' => 'Failed']);
            echo "Transaction is Falied";                
        }
         else if($payment->status =='processing' || $payment->status =='complete')
        {
            echo "Transaction is already Successful";
        }  
        else
        {
            echo "Transaction is Invalid"; 
        }
        return redirect()->route('welcome.welcome');
                            
    }
     public function cancel(Request $request) 
    {
        // $tran_id = $_SESSION['payment_values']['tran_id'];

        //$tran_id = $request->session()->get('trid');
        $tran_id = $request->tran_id;
         $payment = UserPayment::find($tran_id);

         if(!$payment)
        {
           echo 'Transaction is failed, please contact admin for further procedure.';
        }
         

        // $order_detials = DB::table('orders')
        //                     ->where('order_id', $tran_id)
        //                     ->select('order_id', 'order_status','currency','grand_total')->first();


        if($payment->status =='pending' || $payment->status == 'inactive')
        {
            // $update_product = DB::table('orders')
            //                 ->where('order_id', $tran_id)
            //                 ->update(['order_status' => 'Canceled']);
            echo "Transaction is Cancel";                
        }
         else if($payment->status == 'processing' || $payment->status == 'complete')
        {
            echo "Transaction is already Successful";
        }  
        else
        {
            echo "Transaction is Invalid"; 
        }
        return redirect()->route('welcome.welcome');
        
    }
     public function ipn(Request $request) 
    {
        #Received all the payement information from the gateway  
      if($request->input('tran_id')) #Check transation id is posted or not.
      {
          $tran_id = $request->input('tran_id');
        #Check order status in order tabel against the transaction id or order id.
         // $order_details = DB::table('orders')
         //                    ->where('order_id', $tran_id)
         //                    ->select('order_id', 'order_status','currency','grand_total')->first();

          $payment = UserPayment::find($tran_id);

                if($payment->status =='pending' || $payment->status == 'inactive')
                {
                    $sslc = new SSLCommerz();
                    $validation = $sslc->orderValidate($tran_id, $payment->paid_amount, $payment->paid_currency, $request->all());
                    if($validation == TRUE) 
                    {
                        /*
                        That means IPN worked. Here you need to update order status
                        in order table as Processing or Complete.
                        Here you can also sent sms or email for successfull transaction to customer
                        */ 

                        // $update_product = DB::table('orders')
                        //             ->where('order_id', $tran_id)
                        //             ->update(['order_status' => 'Processing']);
                                    
                        echo "Transaction is successfully Complete";
                    }
                    else
                    {
                        /*
                        That means IPN worked, but Transation validation failed.
                        Here you need to update order status as Failed in order table.
                        */ 

                        // $update_product = DB::table('orders')
                        //             ->where('order_id', $tran_id)
                        //             ->update(['order_status' => 'Failed']);
                                    
                        echo "validation Fail";
                    } 
                     
                }
                else if($payment->status == 'processing' || $payment->status =='complete')
                {
                    
                  #That means Order status already updated. No need to udate database.
                     
                    echo "Transaction is already successfully Complete";
                }
                else
                {
                   #That means something wrong happened. You can redirect customer to your product page.
                     
                    echo "Invalid Transaction";
                }  
        }
        else
        {
            echo "Inavalid Data";
        }      
    }
}