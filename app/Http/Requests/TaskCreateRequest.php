<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskCreateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'strTitle' => 'required|min:4',
            'strDescription'=> 'required',
            'intUserID' => 'required|integer',
            'intAdminID' => 'required|integer',
        ];
    }

    public function messages() {
        return [
            'strTitle.required' => 'Task title is required.',
            'strTitle.min' => 'Task title must be more that 4 chars.',
            'strDescription' => 'Description is required.',
            'intUserID.required' => 'Assigned to user is required.',
            'intAdminID.required' => 'Assigned by admin is required.',
            'intUserID.integer' => 'User id must be integer.',
            'intAdminID.integer' => 'Admin id must be integer.'
        ];
    }
}
