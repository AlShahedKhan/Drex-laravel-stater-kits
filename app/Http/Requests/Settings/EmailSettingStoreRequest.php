<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class EmailSettingStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'mail_drive'         => 'required',
            'mail_host'          => 'required',
            'mail_port'          => 'required',
            'mail_address'       => 'required',
            'from_name'          => 'required',
            'mail_username'      => 'required',
            'mail_password'      => 'required',
            'encryption'         => 'required',
        ];
    }
}
