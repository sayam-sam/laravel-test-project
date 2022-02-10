<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Record;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RecordController extends Controller
{
    public function index()
    {
        $title = "Record";
        $cCount=Record::select('*')->count();
        $records=Record::select('records.*')
           ->orderBy('id','DESC')
        ->sortable()->paginate(10);
        return view('admin.records.list',compact('title','records','cCount'));
    }

    public function create()
    {
        $title = "Create New Record";
        return view('admin.records.add',compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'category' => ['required'],
            'sale' => ['required'],
   
        ]);

        $image_name='';

        if ($request->hasFile('myImage')) {
            $file = $request->file('myImage');
            $extension = $file->getClientOriginalExtension(); // getting image extension
                if($extension=='png' || $extension=='jpg' || $extension=='jpeg')
                {
      
                        $image_name ='record_img_'.time().'.'.$extension;
                        $destinationPath = public_path('/uploads/record');
                        $file->move($destinationPath, $image_name);
                }
                else
                {
                    return redirect()->back()->with('error','Invalid file attached! Please updload the image!');
                }
           
        }
        $record = Record::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'sale' => $request->sale,
            'price' => $request->price,
            'img' =>  $image_name,
        ]);
        return redirect(route('records.list'))->with('success', 'Record Successfully Added!');
  
    }
    public function edit(Request $request, $id)
    {
        $title = "Update Record";
    
        $records=Record::where('id',$id)->first();
          return view('admin.records.edit',compact('title','records','id'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'category' => ['required'],
            'sale' => ['required'],
        
        ]);

        $image_name='';

        if ($request->hasFile('myImage')) {
            $file = $request->file('myImage');
            $extension = $file->getClientOriginalExtension(); // getting image extension
                if($extension=='png' || $extension=='jpg' || $extension=='jpeg')
                {
      
                        $image_name ='record_img_'.time().'.'.$extension;
                        $destinationPath = public_path('/uploads/record');
                        $file->move($destinationPath, $image_name);
                }
                else
                {
                    return redirect()->back()->with('error','Invalid file attached! Please updload the image!');
                }
           
        }

        $record = Record::where('id',$id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'sale' => $request->sale,
            'price' => $request->price,
            'img' =>  $image_name,
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
      
        return redirect(route('records.list'))->with('success', 'Record Successfully Updated!');
  
    }
    public function destroy(Request $request)
    {
        $id=$request->id; 

        $delete = Record::where('id', $id)->delete();
        if ($delete){
    
               
              return ['success' => 1, 'Record Successfully Deleted!'];
              
            }
            else
                {
                    return ['success' => 0, 'Error Occured!'];
             
                }
     
    }
}
