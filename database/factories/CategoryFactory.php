<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;
    public function definition()
    {
        $category_name=$this->faker->name();
        $slug=Str::slug($category_name, '-');
        return [
            'category_name'=>$category_name,
            'slug'=>$slug,
        ];
    }
}
