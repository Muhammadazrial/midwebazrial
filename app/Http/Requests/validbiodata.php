<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
class validbiodata extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required|max:50|regex:/^[a-zA-ZÑñ\s]+$/',
            'nim' => 'numeric',
            'jenis-kelamin' => 'required',
            'tgl-lahir' => 'required',
            'alamat' => 'required|email:rfc,dns|regex:/(.+)@(.+)\.(.+)/i',
        ];
    }
    public function messages()
    {
       return [
        'nama.required'=> 'Nama wajib diisi',
        'nama.max'=> 'Nama maksimal 50 karakter',
        'nama.regex' => 'harus format teks',
        'nim.numeric'=> 'wajib dalam bentuk angka',
        'jenis-kelamin.required'=> 'jenis wajib diisi',
        'tgl-lahir.required'=> 'tanggal lahir wajib diisi',
        'alamat.required'=> 'Alamat Email wajib diisi',
        'alamat.email' => 'Email tidak terdaftar',
        'alamat.regex' => 'salah formatnya',
       ];
    }
}
