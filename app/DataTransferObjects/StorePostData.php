<?php

namespace App\DataTransferObjects;

use Spatie\LaravelData\Data;

class StorePostData extends Data
{
    /**
     * @param string $name,
     * @param string $description,
     * @param string $address,
     * @param string $benefit,
     * @param string $created_by,
     * 
    */

    public function __construct(
        public readonly string $name,
        public readonly string $description,
        public readonly string $address,
        public readonly ?string $benefit,
        public readonly string $created_by,

    ){}
    /**
     * Get the validation rules that apply to the request.
     *
     * @return string[]
     */
    public static function rules(): array
    {
      return [
        "name" => "required|string",
        "description" => "required|string",
        "address" => "required|string",
        "benefit" => "required|string",
        "created_by" => "required|exists:profiles,id"
        
      ];
    }

}