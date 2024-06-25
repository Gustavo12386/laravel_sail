<?php

use App\RoleEnum;
use Illuminate\Foundation\Http\FormRequest;

class BrandStoreRequest extends FormRequest{
   
    public function authorize(): bool
    {
      return auth()->user()->role_id == RoleEnum::ADMIN;
    }

    public function rules(): array
    {
       return [
           'name' => 'required|string|max:255|unique:brands',
           'is_featured' => 'nullable|boolean',
       ];
    }

}









