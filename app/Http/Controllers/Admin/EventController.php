<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->paginate(5);
        return view('admin.event.index',compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'    =>  'required',
            'published_at'     =>  'required',
            'image'         =>  'required|image|max:7000',
            'desc'         =>  'required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/events'), $new_name);
        $form_data = array(
            'title'       =>   $request->title,
            'published_at'        =>   $request->published_at,
            'desc'        =>   $request->desc,
            'image'            =>   $new_name
        );

        Event::create($form_data);

        return redirect()->route('event.index')->with('success', 'Data Added successfully.');
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
        // return view('admin.event.edit',compact('event'));

        $event = Event::findOrFail($id);
        return view('admin.event.edit',compact('event'));
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
        // $request->validate([
        //     'title' => 'required',
        //     'published_at' => 'required',
        //     'image' => 'mimes:jpeg,png,jpg,gif,svg',
        //     'desc' => 'required',
        // ]);

        // if($request->hasFile('image')){
        //     $image = $request->file('image')->getClientOriginalName();
        //     $fileName = $request->image->move('images/events', $image);

        // }


        // $input['title'] = $request->title;
        // $input['desc'] = $request->url;
        // $input['published_at'] = $request->published_at;

        // Event::update($input);

        // return redirect()->route('event.index')
        // ->with('success','created successfully.');

        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title'    =>  'required',
                'published_at'     =>  'required',
                'desc'     =>  'required',
                'image'         =>  'image|max:7000'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/events'), $image_name);
        }
        else
        {
            $request->validate([
                'title'    =>  'required',
                'published_at'     =>  'required',
                'desc'     =>  'required',
            ]);
        }

        $form_data = array(
            'title'       =>   $request->title,
            'published_at'        =>   $request->published_at,
            'desc'        =>   $request->desc,
            'image'            =>   $image_name
        );

        Event::whereId($id)->update($form_data);

        return redirect()->route('event.index')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $event->delete();
        // return redirect()->route('event.index')
        //                 ->with('success','deleted successfully');

        $event = Event::find($id);
        //delete
        $event->delete();
        return redirect()->route('event.index');
    }
}
