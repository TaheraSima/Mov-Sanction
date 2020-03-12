<?php

namespace App\Http\Controllers;

use App\GroupMov;
use App\GroupMovDetails;
use App\Category;
use App\Product;
use App\User;
use App\Originator;
use Illuminate\Http\Request;

class GroupMovController extends Controller
{
    public function index()
    {
        $categoryObj    = new Category();
        $categorylist   = $categoryObj->get();
        $productObj     = new Product();
        $productlist    = $productObj->get();
        $userObj        = new User();
        $userlist       = $userObj->get();
        $originatorObj  = new Originator();
        $originatorlist = $originatorObj->get();
        $movcreate      = GroupMov::orderBy('id', 'desc')->get();
        // dd("dhukse");
        return view ('movcreate', compact('categorylist', 'productlist', 'movcreate', 'originatorlist'));
    }
    public function moveDetails()
    {
        $movcreate    = GroupMov::orderBy('id', 'desc')->get();
        $movId = 0;
        foreach ($movcreate as $mvc) {
            $movId = $mvc->id;
        }
        $categoryObj    = new Category();
        $categorylist   = $categoryObj->get();
        $productObj     = new Product();
        $productlist    = $productObj->get();
        $moveDetails    = GroupMovDetails::where('group_mov_id', $movId)->get();
        // dd($moveDetails);
        return view ('moveDetails', compact('movcreate', 'moveDetails', 'categorylist', 'productlist'));
    }
    public function movSearch()
    {
        return view ('movsearch');
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $groupMov = new GroupMov;
        $groupMov->sanction_no = $request->sanction_no;
        $groupMov->reference_no = $request->reference_no;
        $groupMov->unit = $request->unit;
        $groupMov->telephone = $request->telephone;
        $groupMov->extension = $request->extension;
        $groupMov->cantt = $request->cantt;
        $groupMov->brigadier = $request->brigadier;
        $groupMov->division = $request->division;
        $groupMov->place = $request->place;
        $groupMov->purpose = $request->purpose;
        $groupMov->reference = $request->reference;
        $groupMov->comment = $request->comment;
        $groupMov->date_mov = $request->date_mov;
        $groupMov->date_return = $request->date_return;
        $groupMov->time_mov = $request->time_mov;
        $groupMov->return_time = $request->return_time;
        $groupMov->made_journey = $request->made_journey;
        $groupMov->made_return_jurney = $request->made_return_jurney;
        $groupMov->route_incl = $request->route_incl;
        $groupMov->route_return_incl = $request->route_return_incl;
        $groupMov->command = $request->command;
        $groupMov->return_command = $request->return_command;
        $groupMov->command_no = $request->command_no;
        $groupMov->return_command_no = $request->return_command_no;
        $groupMov->other_equipment = $request->other_equipment;
        $groupMov->other_info = $request->other_info;
        $groupMov->extarnal_act = $request->extarnal_act;
        $groupMov->extarnal_action = $request->extarnal_action;
        $groupMov->extl_info = $request->extl_info;
        $groupMov->extl_email = $request->extl_email;
        $groupMov->internal_act = $request->internal_act;
        $groupMov->internal_action = $request->internal_action;
        $groupMov->intl_info = $request->intl_info;
        $groupMov->intl_email = $request->intl_email;
        $groupMov->sender_id = $request->sender_id;

        $groupMov->save();

        $group_mov_id = $groupMov->id;
        $category_id = $request->category_id;
        $product_id = $request->product_id;
        $expected_qty = $request->expected_qty;

        $category_id_r = $request->category_id_r;
        $product_id_r = $request->product_id_r;
        $expected_qty_r = $request->expected_qty_r;

        for ($i=0; $i<count($product_id); $i++ ) {
            $groupmovDetails = new GroupMovDetails;
            $groupmovDetails->group_mov_id = $group_mov_id;
            $groupmovDetails->category_id = $category_id[$i];
            $groupmovDetails->product_id = $product_id[$i];
            $groupmovDetails->quantity = $expected_qty[$i];
            $groupmovDetails->record_type = 'Out';

            $groupmovDetails->save();
        }

        for ($i=0; $i<count($product_id); $i++ ) {
            $groupmovDetails = new GroupMovDetails;
            $groupmovDetails->group_mov_id = $group_mov_id;
            $groupmovDetails->category_id = $category_id_r[$i];
            $groupmovDetails->product_id = $product_id_r[$i];
            $groupmovDetails->quantity = $expected_qty_r[$i];
            $groupmovDetails->record_type = 'Return';

            $groupmovDetails->save();
        }

        return redirect()->route('moveDetails');
    }

    public function show(GroupMov $groupMov)
    {
        //
    }

    public function printpreview($id)
    {
        $catId = 0;
        $movcreate = GroupMov::findorfail($id);
        $record_type = 'Out';
        $record_type_r = 'Return';

        $categoryObj            = new Category();
        $categorylist           = $categoryObj->get();
        $productObj             = new Product();
        $productlist            = $productObj->get();   

        $moveDetails            = GroupMovDetails::where([
            ['group_mov_id', $movcreate->id],
            ['record_type', $record_type],
        ])->groupby('category_id')->get();

        foreach ($moveDetails as $mvdetails) {
            $detailsCategoryId = $mvdetails->category_id;
            $detailsProductId = GroupMovDetails::where([
                ['group_mov_id', $movcreate->id],
                ['record_type', $record_type],
                ['category_id', $detailsCategoryId],
            ])->get();

            $multipleProduct[] = array('product' =>  $detailsProductId);
        }
        // dd($multipleProduct);
        // dd( $multipleProduct[0]['product'] );
         // foreach( $multipleProduct[0]['product'] as $item ) {
         //    dump( $item->quantity );
         // }
         // exit;

        $moveDetails_r            = GroupMovDetails::where([
            ['group_mov_id', $movcreate->id],
            ['record_type', $record_type_r],
        ])->groupby('category_id')->get();
      

        foreach ($moveDetails_r as $mvdetails_r) {
            $detailsCategoryId = $mvdetails_r->category_id;
            $detailsProductId = GroupMovDetails::where([
                ['group_mov_id', $movcreate->id],
                ['record_type', $record_type_r],
                ['category_id', $detailsCategoryId],
            ])->get();

            $multipleProduct_r[] = array('product' =>  $detailsProductId);
          }

            return view ('movprintpreview', compact('movcreate', 'moveDetails', 'moveDetails_r', 'categorylist', 'productlist', 'multipleProduct', 'multipleProduct_r', 'id'));
    }

    public function edit($id)
    {
        $catId = 0;
        $movcreate = GroupMov::findorfail($id);
        $record_type = 'Out';
        $record_type_r = 'Return';

        $categoryObj            = new Category();
        $categorylist           = $categoryObj->get();
        $productObj             = new Product();
        $productlist            = $productObj->get(); 
        $userObj        = new User();
        $userlist       = $userObj->get();
        $originatorObj  = new Originator();
        $originatorlist = $originatorObj->get();  

        $moveDetails            = GroupMovDetails::where([
            ['group_mov_id', $movcreate->id],
            ['record_type', $record_type],
        ])->get();

        $moveDetails_r            = GroupMovDetails::where([
            ['group_mov_id', $movcreate->id],
            ['record_type', $record_type_r],
        ])->get();

        foreach ($moveDetails as $mvdetails) {
             $catId             = $mvdetails->category_id;
             $prcId             = $mvdetails->product_id;
             $productQuantity   = $mvdetails->quantity;
          }
            $category           = Category::findorfail($catId);
            $product            = Product::findorfail($prcId);

        foreach ($moveDetails_r as $mvdetails_r) {
             $catId_r             = $mvdetails_r->category_id;
             $prcId_r             = $mvdetails_r->product_id;
             $productQuantity_r   = $mvdetails_r->quantity;
          }

            return view ('movcreate', compact('movcreate', 'moveDetails', 'moveDetails_r', 'categorylist', 'productlist', 'category', 'product', 'id', 'originatorlist'));
    }

    public function update(Request $request, $id)
    {


        $groupMov = Groupmov::find($request->id);


        $groupMov->sanction_no = $request->sanction_no;
        $groupMov->reference_no = $request->reference_no;
        $groupMov->unit = $request->unit;
        $groupMov->telephone = $request->telephone;
        $groupMov->extension = $request->extension;
        $groupMov->cantt = $request->cantt;
        $groupMov->brigadier = $request->brigadier;
        $groupMov->division = $request->division;
        $groupMov->place = $request->place;
        $groupMov->purpose = $request->purpose;
        $groupMov->reference = $request->reference;
        $groupMov->comment = $request->comment;
        $groupMov->date_mov = $request->date_mov;
        $groupMov->date_return = $request->date_return;
        $groupMov->time_mov = $request->time_mov;
        $groupMov->return_time = $request->return_time;
        $groupMov->made_journey = $request->made_journey;
        $groupMov->made_return_jurney = $request->made_return_jurney;
        $groupMov->route_incl = $request->route_incl;
        $groupMov->route_return_incl = $request->route_return_incl;
        $groupMov->command = $request->command;
        $groupMov->return_command = $request->return_command;
        $groupMov->command_no = $request->command_no;
        $groupMov->return_command_no = $request->return_command_no;
        $groupMov->other_equipment = $request->other_equipment;
        $groupMov->other_info = $request->other_info;
        $groupMov->extarnal_act = $request->extarnal_act;
        $groupMov->extarnal_action = $request->extarnal_action;
        $groupMov->extl_info = $request->extl_info;
        $groupMov->extl_email = $request->extl_email;
        $groupMov->internal_act = $request->internal_act;
        $groupMov->internal_action = $request->internal_action;
        $groupMov->intl_info = $request->intl_info;
        $groupMov->intl_email = $request->intl_email;

        $groupMov->save();

        $group_mov_id = $groupMov->id;
        $category_id = $request->category_id;
        $product_id = $request->product_id;
        $expected_qty = $request->expected_qty;

        $category_id_r = $request->category_id_r;
        $product_id_r = $request->product_id_r;
        $expected_qty_r = $request->expected_qty_r;
        // for ($i=0; $i<count($product_id); $i++ ) {
        //     $groupmovDetails = GroupMovDetails::find($request->detl_id);
        //     $groupmovDetails->group_mov_id = $group_mov_id;
        //     $groupmovDetails->category_id = $category_id[$i];
        //     $groupmovDetails->product_id = $product_id[$i];
        //     $groupmovDetails->quantity = $expected_qty[$i];
        //     $groupmovDetails->record_type = 'Out';

        //     $groupmovDetails->save();
        // }

         $groupMovDetailsList = GroupMovDetails::where( 'group_mov_id', $request->group_mov_id )->where( 'record_type', 'Out' )->get();
         foreach( $groupMovDetailsList as $groupMovDetails ) {
            $groupmovDetails = GroupMovDetails::where( 'id', $groupMovDetails->id )->where( 'record_type', 'Out' )->first();
            $groupmovDetails->category_id = $category_id[$groupMovDetails->id];
            $groupmovDetails->product_id = $product_id[$groupMovDetails->id];
            $groupmovDetails->quantity = $expected_qty[$groupMovDetails->id];
            $groupmovDetails->record_type = 'Out';

            $groupmovDetails->save();
         }

        $groupMovDetailsList_r = GroupMovDetails::where( 'group_mov_id', $request->group_mov_id )->where( 'record_type', 'Return' )->get();
        // for ($i=0; $i<count($product_id_r); $i++ ) {
        foreach( $groupMovDetailsList_r as $groupMovDetails ) {
            // $groupmovDetails = GroupMovDetails::find($request->detl_id_r);
        $groupmovDetails = GroupMovDetails::where( 'id', $groupMovDetails->id )->where( 'record_type', 'Return' )->first();

            // $groupmovDetails->group_mov_id = $group_mov_id;
            // $groupmovDetails->category_id = $category_id_r[$i];
            // $groupmovDetails->product_id = $product_id_r[$i];
            // $groupmovDetails->quantity = $expected_qty_r[$i];
            $groupmovDetails->category_id = $category_id_r[$groupMovDetails->id];
            $groupmovDetails->product_id = $product_id_r[$groupMovDetails->id];
            $groupmovDetails->quantity = $expected_qty_r[$groupMovDetails->id];
            $groupmovDetails->record_type = 'Return';

            $groupmovDetails->save();
        }

        return redirect()->route('moveDetails');
    }

    public function sendedit($id)
    {
        $movcreate = Groupmov::findorfail($id);
        return view ('movcreate')->with('movcreate', $movcreate);
    }

    public function sendupdate(Request $request, $id)
    {
        $movcreate = Groupmov::find($id);
        $movcreate->status = 1;
        $movcreate->save();

        return redirect()->route('moveDetails');
    }


    public function destroy(GroupMov $groupMov)
    {
        //
    }
}
