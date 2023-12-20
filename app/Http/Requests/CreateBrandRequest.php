<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBrandRequest extends FormRequest
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
            'brands' => 'required|string|min:2|max:191',
            'headquarter' => 'required|string|min:2|max:191',
            'area' => 'required|string|min:2|max:191',
            'year' => 'required|numeric',
            'html' => 'required|string|min:2|max:255'
        ];
    }
    public function messages()
    {
        return[
            "brands.required" => "品牌 為必填",
            "brands.min" => "品牌 至少需要2個字",
            "headquarter.required" => "總部 為必填",
            "headquarter.min" => "總部 至少需要1個字",
            "area.required" => "行政區域 為必填",
            "area.min" => "行政區域 至少需要1個字",
            "year.required" => "成立時間 為必填",
            "year.numeric" => "成立時間 必須為數值",
            "html.required" => "官方網址 為必填",
            "html.min" => "官方網址 至少需要2個字"

        ];
    }
}
