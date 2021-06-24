<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Cart;
use Carbon\Carbon;
use App\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class BillController extends Controller
{
    public function paid(){
         $unpaid = DB::table('bills')->where('status', '=', 1)->orderby('id','desc')->get();
         return view('admin-pages.paid', array(
              'unnn' => $unpaid
         ));
    }

    public function unpaid(){
         $unpaid = DB::table('bills')->where('status', '=', 0)->orderby('id','desc')->get();
         return view('admin-pages.unpaid', array(
              'unnn' => $unpaid
         ));
    }
    public function BillSuccess(){
         $unpaid = DB::table('bills')->where('status', '=', 2)->orderby('id','desc')->get();
         return view('admin-pages.BillSuccess', array(
              'unnn' => $unpaid
         ));
    }
    public function GuiAnhThanhToan(Request $request){
          $cart = Cart::content(); 
          $cart_priceTotal = Cart::priceTotal();
          //dd(floatval($cart_priceTotal));
          //dd((float)str_replace(',', '', $cart_priceTotal));
          //vong lap chi chay 1 lan do ci gui 1 anh
          $imageName = "";
          if($request->hasFile('image'))
          {
              $imageName = time().'_'.$request->image->getClientOriginalName();
               $request->image->move(public_path('\img\image_bill'), $imageName);
               DB::table('bills')->insert(
                  [
                       'price'=>(float)str_replace(',', '', $cart_priceTotal),
                       'create_date'=>Carbon::now()->format('Y-m-d'),
                       'status'=>0,
                       'image_check_out'=>$imageName,
                       'address'=>$request->DiaChi,
                       'user_id'=>Auth::user()->id
                   ]
              );
              $bill = DB::table('bills')->orderBy('id', 'DESC')->first();
              foreach($cart as $item){
                    $check = DB::table('detail_bills')->insert(
                         [
                              'bill_id'=>$bill->id,
                              'product_id'=>$item->id,
                              'count_product'=>(int)$item->qty,
                              'count_price'=>(float)$item->price * (int)$item->qty
                         ]
                    );
               }
          }
         return redirect('/');
    }

    public function XacNhanDonHang($id){
         DB::table('bills')->where('id', $id)->update([
               'status'=>1
         ]);
         return redirect('/bill/unpaid');
    }
    public function HoanThanhDonHang($id){
         DB::table('bills')->where('id', $id)->update([
               'status'=>2
         ]);
         //danh sach chi tiet don hàng
         $DSChiTietDonHang = DB::table('detail_bills')->where('bill_id',$id)->get();
         //tinh lai so luong da ban
         foreach($DSChiTietDonHang as $item){
               $DSChiTiet = DB::table('detail_bills')->where('product_id',$item->product_id)->get();
               $SoLuongBan = 0;
               foreach($DSChiTiet as $chitiet){
                    $SoLuongBan += $chitiet->count_product;
               }
               DB::table('products')->where('id', $item->product_id)->update([
                         'sold'=>$SoLuongBan
               ]);
          }
         return redirect('/bill/paid');
    }
    public function AddComment(Request $request){
         $rate = $request->rate == null ? 1 : $request->rate;
         $ProductID = $request->ProductID;
         $Comment = $request->Comment;
         DB::table('comment')->insert([
              'rate'=>$rate,
              'comment'=>$Comment,
              'user_id'=>Auth::user()->id,
              'product_id'=>$ProductID,
              'createDate'=>Carbon::now()->format('Y-m-d')
         ]);
         return redirect('shop-single-product?id='.$ProductID);
    }
}
