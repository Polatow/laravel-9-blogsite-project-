<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        $title=$this->faker->sentence(rand(1,5));
        $slug=Str::slug($title, '-');
        return [
            'title'=>$title,
            'slug'=>$slug,
            'image'=>'digital_'.$this->faker->unique()->numberBetween(1,22).'.jpg',
            'category_id'=>rand(1,6),
            'user_id'=>rand(1,6),
            'description'=>$this->faker->text(500),
        ];
    }
}
