<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePmbmRequest extends FormRequest
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
            'full_name' => 'required|string|max:255',
            'nik' => 'required|digits:16|unique:pmbm_registrations,nik',
            'birth_date' => 'required|date|before:today',
            'birth_place' => 'required|string',
            'gender' => 'required|in:L,P',
            'parent_name' => 'required|string',
            'phone' => ['required', 'regex:/^08[0-9]{8,11}$/'],
            'email' => 'required|email',
            'previous_school' => 'required|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'full_name.required' => 'Nama lengkap wajib diisi.',
            'full_name.string' => 'Nama lengkap harus berupa teks.',
            'full_name.max' => 'Nama lengkap maksimal 255 karakter.',
            
            'nik.required' => 'NIK wajib diisi.',
            'nik.digits' => 'NIK harus berjumlah tepat 16 angka.',
            'nik.unique' => 'NIK ini sudah terdaftar pada sistem penerimaan santri baru sebelumnya.',
            
            'birth_date.required' => 'Tanggal lahir wajib diisi.',
            'birth_date.date' => 'Format tanggal lahir tidak valid.',
            'birth_date.before' => 'Tanggal lahir harus sebelum hari ini.',
            
            'birth_place.required' => 'Tempat lahir wajib diisi.',
            'birth_place.string' => 'Tempat lahir harus berupa teks.',
            
            'gender.required' => 'Jenis kelamin wajib dipilih.',
            'gender.in' => 'Pilihan jenis kelamin tidak valid (hanya Laki-laki atau Perempuan).',
            
            'parent_name.required' => 'Nama orang tua/wali wajib diisi.',
            'parent_name.string' => 'Nama orang tua/wali harus berupa teks.',
            
            'phone.required' => 'Nomor WhatsApp/Telepon wajib diisi.',
            'phone.regex' => 'Format nomor telepon tidak valid (harus diawali 08 dan berjumlah 10-13 digit).',
            
            'email.required' => 'Alamat email wajib diisi.',
            'email.email' => 'Format alamat email tidak valid.',
            
            'previous_school.required' => 'Asal sekolah sebelumnya wajib diisi.',
            'previous_school.string' => 'Asal sekolah harus berupa teks.',
        ];
    }
}
