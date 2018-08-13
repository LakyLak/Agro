<?php

namespace App\Http\Controllers;

use App\Tractor;
use App\Field;
use App\Farming;
use Illuminate\Http\Request;
use Log;

class FarmingController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();

        $conditions = filter_conditions($data);

        $items = Farming::with(['tractor', 'field'])->where($conditions)->get();
        $farmed_area = 0;
        foreach ($items as $item) {
            // // Log::info("item->farming_area\n" . print_r($item->farming_area, true));
            $farmed_area += $item->farming_area; 
        }

        Log::info("farmed_area\n" . print_r($farmed_area, true));

        return view('farmings.list', compact(['items', 'data', 'farmed_area']));
    }

    public function add(Request $request)
    {
        $tractors = Tractor::select('id', 'name')->get();
        $fields = Field::select('id', 'name', 'area')->where('id', '>', 0)->get();
        
        if ($request->isMethod('post')) {
            $selected_field_area = 200;
            if ($request['field']) {
                $selected_field_area = Field::find($request['field'])->area;
            }
            
            $this->validate($request, [
                'tractor' => 'required|exists:tractors,id',
                'field' => 'required|exists:fields,id',
                'date' => 'required|date|date_format:format',
                'farming_area' => "required|integer|between:1,$selected_field_area",
            ]);

            $data = $request->all();

            $farming = new Farming;
            $farming->tractor_id = $data['tractor'];
            $farming->field_id = $data['field'];
            $farming->date = $data['date'];
            $farming->farming_area = $data['farming_area'];

            $farming->save();

            return redirect('/farmings')->with('flash_success_message', "Farming has been created");
        }

        return view('farmings.add', compact(['tractors', 'fields']));
    }

    public function edit(Request $request, $id)
    {
        $farming = Farming::find($id);
        $tractors = Tractor::select('id', 'name')->get();
        $fields = Field::select('id', 'name', 'area')->where('id', '>', 0)->get();

        if ($request->isMethod('post')) {
            $selected_field_area = 200;
            if ($request['field']) {
                $selected_field_area = Field::find($request['field'])->area;
            }

            $this->validate($request, [
                'tractor' => 'required|exists:tractors,id',
                'field' => 'required|exists:fields,id',
                'date' => 'required|date|date_format:format',
                'farming_area' => "required|integer|between:1,$selected_field_area",
            ]);

            $data = $request->all();

            $farming->tractor_id = $data['tractor'];
            $farming->field_id = $data['field'];
            $farming->farming_area = $data['farming_area'];
            $farming->date = $data['date'];

            $farming->save();

            return redirect('/farmings')->with('flash_success_message', "Farming has been updated");
        }

        return view('farmings.edit', compact(['farming', 'tractors', 'fields']));
    }

    public function delete($id)
    {
        $farming = Farming::find($id);

        if ($farming) {
            $farming->delete();

            return redirect()->back()->with('flash_success_message', "Farming has been deleted");
        }

        return redirect()->back()->with('flash_error_message', "There is no such a Farming to delete");
    }
}
