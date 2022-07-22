<?php

namespace App\Http\Request;

use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundaation\Response;
use Illuminate\Validation\Rule;

class UpdateTask extends FormRequest
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
      'photo' => [
        'nullable', 'file', 'max:1024',
      ],
      'title' => [
        'required', 'string', 'max:255',
      ],
      'description' => [
        'nullable', 'string', 'max:5000',
      ],
      'status' => [
        'required', 'integer', 'max:100',
      ],
    ];
  }
}
