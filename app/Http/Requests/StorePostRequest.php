<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:5',
            'body' => 'required',
            'published_at' => 'nullable|date',
            'summary' => 'required|max:50',
            'status' => 'required|in:published,draft,archived,pending',
            'reading_time' => 'required|integer|min:1|max:60',
            'slug' => 'required|string' // Add validation for slug
        ];
    }


    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->title),
        ]);
    }


    public function validated($key = null, $default = null): array
    {
        $validated = parent::validated();


        if (!isset($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        return $validated;
    }
}
