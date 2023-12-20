<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTypeRequest extends FormRequest
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
            'car_sample' => 'required|string|min:2|max:191',
            'bid' => 'required',
            'car_modle' => 'required|string|min:2|max:191',
            'type' => 'required|string|min:2|max:191',
            'power_type' => 'required|string|min:2|max:191',
            'price' => 'required|numeric',
            'origin' => 'required|string|min:2|max:191',
            'door' => 'numeric',
            'exhaust_volume' => 'numeric'
        ];
    }
    public function messages()
    {
        return[
            "car_sample.required" => "車型 為必填",
            "car_sample.min" => "車型 至少需要2個字",
            "bid.required" => "品牌 為必填",
            "car_modle.required" => "車款 為必填",
            "car_modle.min" => "車款 至少需要1個字",
            "type.required" => "型號 為必填",
            "type.min" => "型號 至少需要1個字",
            "power_type.required" => "種類 為必填",
            "power_type.min" => "種類 至少需要2個字",
            "price.required" => "價格 為必填",
            "price.numeric" => "價格 必須為數字",
            "origin.required" => "產地 為必填",
            "origin.min" => "產地 至少需要2個字",
            "door.numeric" => "車門 必須為數字",
            "exhaust_volume.numeric" => "排氣量 必須為數字",

        ];
    }
}
