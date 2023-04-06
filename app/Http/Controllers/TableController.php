<?php

namespace App\Http\Controllers;
use App\Models\Table;
use App\Http\Requests\TableRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TableController extends Controller
{

    public function index()
    {
        $table = Table::all();
        return view('admin.table.index',compact('table'));
    }

    public function create()
    {
        return view('admin.table.create');
    }


    public function store(TableRequest $request)
    {
        $data = $request->validated();
        $table = new Table;
        $table->tablename = $data['tablename'];
        $table->save();

        return redirect('/admin/table')->with('message', 'Table added successfully');
    }

    public function edit($table_id){
        $table = Table::find($table_id);
        return view('admin.table.edit', compact('table'));
    }

    public function update(TableRequest $request, $table_id){
        $data = $request->validated();
        $table = Table::find($table_id);
        $table->tablename = $data['tablename'];
        $table->update();

        return redirect('/admin/table')->with('message', 'Table Updated successfully');
    }

    public function destroy($table_id){
        $data = Table::find ($table_id);
        $data->delete();
        return redirect('admin/table');
    }


}
