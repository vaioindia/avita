<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Grid;

class GridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grids = Grid::all();
        return view('admin.grid.index', compact('grids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.grid.create');
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
            'image'    =>  'required|image|max:5000',
            'url'      =>  'required',
            'type'     =>   'required'
        ]);


        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/grid'), $new_name);
        $form_data = array(
            'title'     =>   $request->title,
            'url'       =>   $request->url,
            'type'       =>   $request->type,
            'image'     =>   $new_name
        );

        $grids = Grid::select("*")->where("type", $request->type)->exists();

        if ($grids)
         {
            // dd('Record is available.');
            return redirect()->route('grid.index')->with('success', 'Record is available.');
        }
        else
        {
            Grid::create($form_data);
            return redirect()->route('grid.index')->with('success', 'Data Added successfully.');
        }

        return redirect()->route('grid.index')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Grid $grid)
    {
        return view('admin.grid.show',compact('grid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Grid $grid, $id)
    {
        $grid = Grid::findOrFail($id);
        return view('admin.grid.edit',compact('grid'));

        // return $this->formView($grid);
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title'    =>  'required',
                'image'    =>  'required|image|max:5000',
                'url'      =>  'required',
                'type'     =>   'required'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/grid'), $image_name);
        }

        else
        {
            $request->validate([
                'title'    =>  'required',
                'url'      =>  'required',
                'type'     =>   'required'
            ]);
        }

        $form_data = array(
            'title'       =>   $request->title,
            'url'         =>   $request->url,
            'type'        =>   $request->type,
            'image'       =>   $image_name
        );

        Grid::whereId($id)->update($form_data);

        return redirect()->route('grid.index')->with('success', 'Data is successfully updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id grid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grid = Grid::find($id);
        //delete
        $grid->delete();
        return redirect()->route('grid.index');
    }
}
