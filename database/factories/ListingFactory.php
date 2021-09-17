<?php

namespace Database\Factories;
use App\Models\Listing;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Listing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $title=$this->faker->sentence(rand(5,7));
        $datetime=$this->faker->dateTimeBetween('-1 month','now');
        return [
            'user_id'=>rand(1,10),
            'title'=>$title,
            'slug'=>Str::slug($title),
            'company'=>$this->faker->company,
            'location'=>$this->faker->country,
            'logo'=>basename($this->faker->image(storage_path('app/public'))),
            'is_highlighted'=>(rand(1,9)>7),
            'content'=>$title,
            'apply_link'=>$this->faker->url,
            'created_at'=>$datetime,
            'updated_at'=>$datetime
        ];
    }
}
