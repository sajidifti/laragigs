<?php

namespace App\Models;

class Listing
{
    public static function all()
    {

        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'loremfjdbjbsdfjkgbdfsjkvb kjdf kjdf dfkhsk wk kikdf'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'loremfjdbjbsdfjkgbdfsjkvb kjdf kjdf dfkhsk wk kikdf'
            ],
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}

?>