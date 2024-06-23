<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'nik' => ['required', 'string', 'max:16'],
            'nama' => ['required', 'string', 'max:100'],
            'tanggal_lahir' => ['required', 'date'],
            'jenis_kelamin' => ['required', 'string', 'in:Laki-laki,Perempuan'],
            'alamat' => ['required', 'string'],
            'no_hp' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'pendidikan' => ['required', 'string', 'max:50'],
            'departemen' => ['required', 'string', 'max:50'],
            'jabatan' => ['required', 'string', 'max:50'],
            'status' => ['required', 'string', 'in:Tetap,Kontrak'],
            'gaji' => ['required', 'string', 'max:20'],
            'tanggal_masuk' => ['required', 'date'],
            'foto' => ['image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'updated_by' => ['required', 'string'],
        ];
    }
}
