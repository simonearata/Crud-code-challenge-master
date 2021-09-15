<?php

use App\Input;
use Illuminate\Database\Seeder;

class InputTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_input = config('input');
        foreach($array_input as $input_item){

            $new_input = new Input();
            $new_input->title = $input_item['titolo'];
            $new_input->content = $input_item['testo'];
            $new_input->url = $input_item['url'];
            $new_input->save();
        }
    }
}
