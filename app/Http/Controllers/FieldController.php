<?php

namespace App\Http\Controllers;

use App\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index()
    {
        $items = Field::get();

        return view('fields.list', compact('items'));
    }

    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|max:24|unique:fields',
                'culture' => 'required|max:24',
                'area' => 'required|integer|between:10,200',
            ]);

            $data = $request->all();

            $field = new Field;
            $field->name = $data['name'];
            $field->culture = $data['culture'];
            $field->area = $data['area'];

            $field->save();

            return redirect('/fields')->with('flash_success_message', "Field $field->name has been created");
        }

        return view('fields.add');
    }

    public function edit(Request $request, $id)
    {
        $field = Field::find($id);
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required|max:24|unique:fields',
                'culture' => 'required|max:24',
                'area' => 'required|integer|between:10,200',
            ]);

            $data = $request->all();

            $field->name = $data['name'];
            $field->culture = $data['culture'];
            $field->area = $data['area'];

            $field->save();

            return redirect('/fields')->with('flash_success_message', "Field $field->name has been updated");
        }

        return view('fields.edit', compact('field'));
    }

    public function delete($id)
    {
        $field = Field::find($id);

        if ($field) {
            $field->delete();

            return redirect()->back()->with('flash_success_message', "Field $field->name has been deleted");
        }

        return redirect()->back()->with('flash_error_message', "There is no $field->name to delete");
    }
}
