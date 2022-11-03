<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Slider;
use Image;
use Str;
use File;
use Session;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders = Slider::orderby('id', 'desc')->get();
        return view('backend/pages/slider/manage', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/pages/slider/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'      =>  ['required', 'string', 'max:255'],
            'top_subtitle'    =>  ['required', 'string'],
            'bottom_subtitle'    =>  ['required', 'string'],
            'button_text'    =>  ['required', 'string'],
            'status'    =>  ['required', 'not_in:0'],
            'image'     =>  ['required', 'mimes:jpg,jpeg,png,gif|max:1024']
        ]);

        $slider = new Slider;

        $slider->title              =   $request->title;
        $slider->top_subtitle       =   $request->top_subtitle;
        $slider->bottom_subtitle    =   $request->bottom_subtitle;
        $slider->button_text        =   $request->button_text;
        $slider->button_link        =   $request->button_link;
        $slider->status             =   $request->status;
    
        $image = $request->file('image');
            if( !is_null($image) ){
                // Delete Existing Image
                if( File::exists('backend/assets/images/slider/' . $slider->image) ) {
                    File::delete('backend/assets/images/slider/' . $slider->image);
                }
                
                $img = rand() . '.' . $image->getClientOriginalExtension();
                $location = public_path('backend/assets/images/slider/' . $img);

                Image::make($image)->save($location);
                $slider->image = $img;
            }


        $slider->save();

        $notification = session()->flash("success", "slider Create Successfully");

        return redirect()->route('slider.index')->with($notification);
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
        $slider = Slider::where('id', $id)->first();
        return view('backend/pages/slider/edit', compact('slider'));

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
        $slider = Slider::find($id);

        $slider->title              =   $request->title;
        $slider->top_subtitle       =   $request->top_subtitle;
        $slider->bottom_subtitle    =   $request->bottom_subtitle;
        $slider->button_text        =   $request->button_text;
        $slider->button_link        =   $request->button_link;
        $slider->status             =   $request->status;

        $image = $request->file('image');
            if( !is_null($image) ){
                // Delete Existing Image
                if( File::exists('backend/assets/images/slider/' . $slider->image) ) {
                    File::delete('backend/assets/images/slider/' . $slider->image);
                }
                
                $img = rand() . '.' . $image->getClientOriginalExtension();
                $location = public_path('backend/assets/images/slider/' . $img);

                Image::make($image)->save($location);
                $slider->image = $img;
            }


        $slider->save();

        $notification = session()->flash("success", "slider Update Successfully");

        return redirect()->route('slider.index')->with($notification);
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
        $subcat = Slider::where('parent_cat', $id)->get();
        if(!empty($subcat)) {
            foreach($subcat as $cat) {
                if( File::exists('backend/assets/images/slider/' . $cat->image) ) {
                    File::delete('backend/assets/images/slider/' . $cat->image);
                }
                $cat->delete();
            }
        }

        $delete = Slider::where('id', $id)->delete();

        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "ডিলেট সম্পন্ন হয়েছে!!!";
            
        } else {
            $success = true;
            $message = "ডিলেটে ত্রুটি রয়েছে!!!";
        }

        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}
