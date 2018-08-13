<?php

namespace App\Http\Controllers;

use App\Tractor;
use Illuminate\Http\Request;

class TractorController extends Controller
{
    public function index()
    {
        $items = Tractor::get();

        return view('tractors.list', compact('items'));
    }

    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|max:24|unique:tractors',
            ]);

            $data = $request->all();

            $tractor = new Tractor;
            $tractor->name = $data['name'];

            $tractor->save();

            return redirect('/tractors')->with('flash_success_message', "Tractor $tractor->name has been created");
        }

        return view('tractors.add');
    }

    public function edit(Request $request, $id)
    {
        $tractor = Tractor::find($id);
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required|max:24|unique:tractors',
            ]);

            $data = $request->all();

            $tractor->name = $data['name'];

            $tractor->save();

            return redirect('/tractors')->with('flash_success_message', "Tractor $tractor->name has been updated");
        }

        return view('tractors.edit', compact('tractor'));
    }

    public function delete($id)
    {
        $tractor = Tractor::find($id);

        if ($tractor) {
            $tractor->delete();

            return redirect()->back()->with('flash_success_message', "Tractor $tractor->name has been deleted");
        }

        return redirect()->back()->with('flash_error_message', "There is no $tractor->name to delete");
    }
}
