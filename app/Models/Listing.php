<?php
namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing 1',
                'description' => 'Lorem ipsum dolor sit amet'
            ],
            [
                'id' => 2,
                'title' => 'Listing 2',
                'description' => 'Lorem ipsum dolor sit amet'
            ],
            [
                'id' => 2,
                'title' => 'Listing 2',
                'description' => 'Lorem ipsum dolor sit amet'
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) return $listing;
        }
    }
}
