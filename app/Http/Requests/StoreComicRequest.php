<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' =>'required|max:5000',
            'thumb' => 'nullable',
            'price' => 'max:255|nullable',
            'series' => 'max:255|nullable',
            'sale_date' => 'required|date|nullable',
            'type' => 'required|max:255|nullable',
            'artists' => 'max:2000|nullable',
            'writers' => 'required|max:3000|nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Il campo :attribute deve essere inserito',
            'sale_date.date' => 'La data di vendita deve essere valida',
            'max' => 'Il campo :attribute deve essere :max caratteri',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'titolo',
            'description' => 'descrizione',
            'thumb' => 'copertina',
            'price' => 'prezzo',
            'serie' => 'serie',
            'sale_date' => 'data di uscita',
            'type' => 'tipo',
            'artists' => 'artisti',
            'writers' => 'scrittori',
        ];
    }
}
