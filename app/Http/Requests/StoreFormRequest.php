<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'perguruan_tinggi' => 'required|string',
            'kategori_sekolah' => 'required|string',
            'jalan' => 'required|string',
            'rt_rw_desa_kel' => 'required|string',
            'kecamatan' => 'required|string',
            'provinsi' => 'required|string',
            'kabupaten_kota' => 'required|string',
            'kode_pos' => 'required|string',
            'npsn' => 'string',
            'telp' => 'required|string',
            'no_fax' => 'string',
            'email' => 'required|string',
            'resi_pembayaran' => 'required|string',
        ];
    }
}
