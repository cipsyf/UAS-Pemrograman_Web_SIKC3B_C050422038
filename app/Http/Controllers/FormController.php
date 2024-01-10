<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\UpdateFormRequest;
use App\Models\Form;
use App\Http\Resources\FormResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index(Request $request)
    {
        $forms = DB::table('forms')
        ->when($request->input('nama'), function ($query, $nama) {
            return $query->where('nama', 'like', '%' . $nama . '%');
        })
        ->select('id', 'nama', 'kategori_sekolah', 'telp', 'perguruan_tinggi', DB::raw('DATE_FORMAT(created_at, "%d %M %Y") as created_at'))
        ->orderBy('id', 'asc')
        ->paginate(15);
            return view('pages.forms.index', compact('forms'));
    }

    public function create()
    {
        return view('pages.forms.create');
    }

    public function store(StoreFormRequest $request)
    {
        Form::create([
            'nama' => $request['nama'],
            'jabatan' => $request['jabatan'],
            'perguruan_tinggi' => $request['perguruan_tinggi'],
            'kategori_sekolah' => $request['kategori_sekolah'],
            'jalan' => $request['jalan'],
            'rt_rw_desa_kel' => $request['rt_rw_desa_kel'],
            'kecamatan' => $request['kecamatan'],
            'provinsi' => $request['provinsi'],
            'kabupaten_kota' => $request['kabupaten_kota'],
            'kode_pos' => $request['kode_pos'],
            'npsn' => $request['npsn'],
            'telp' => $request['telp'],
            'no_fax' => $request['no_fax'],
            'email' => $request['email'],
            'resi_pembayaran' => $request['resi_pembayaran'],
        ]);

        return redirect(route('form.index'))->with('success', 'Created new data succesfully!');
    }

    public function edit(Form $form)
    {
        return view('pages.forms.edit')->with('form', $form);
    }

    public function update(UpdateFormRequest $request, form $form)
    {
        $validate = $request->validated();
        $form->update($validate);
        return redirect()->route('form.index')->with('success', 'Updated data successfully!');
    }

    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('form.index')->with('success', 'Delete data successful!');
    }
}
