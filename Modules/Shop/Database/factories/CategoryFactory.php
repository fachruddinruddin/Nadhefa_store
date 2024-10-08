<?php

namespace Modules\Shop\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
   
    protected $model = \Modules\Shop\Entities\Category::class;

   
    public function definition(): array
    {
        $name = fake()->sentence(2);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];

    }
}

