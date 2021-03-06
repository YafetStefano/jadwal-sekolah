<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJurusanRequest extends FormRequest
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
            'kode' => 'required',
            'nama' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'kode.required' => 'Kode jurusan harus diisi.',
            'nama.required' => 'Nama jurusan harus diisi.',
        ];
    }
}
