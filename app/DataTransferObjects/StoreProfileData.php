<?php

namespace app\DataTransferObjects;
use Spatie\LaravelData\Data;



class StoreProfileData extends Data
{
    /**
     * @param string $name,
     * @param string $email,
     * @param string $password,
     * @param string $birthday,
     * 
    */

    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password,
        public readonly ?string $birthday,

    ){
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return string[]
     */
    public static function rules(): array
    {
      return [
        "name" => "required|string",
        "email" => "required|string",
        "password" => "required|string|min:8",
        "birthday" => "string",
        
      ];
    }

    
}