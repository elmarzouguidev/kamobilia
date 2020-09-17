<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BanqRequest extends FormRequest
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
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'cartnational' => 'required|file|mimes:pdf,docx,jpeg,png,jpg|max:2048',
            'email' => 'required|email',
            'tele' => 'required|phone:MA|numeric',
            // 'ville' => 'nullable|string',
            'address' => 'required|string',
            // 'message' => 'nullable|string',
            'product' => 'required|alpha_dash|string',
            'totalPriceer' => 'nullable|numeric',
            'totalQtee' => 'nullable|numeric|min:1',
        ];
    }

    public function messages()
    {
        return [
            'cartnational.required' => 'veuillez uploader votre cart national on respecte les formats valides'
        ];
    }
}
