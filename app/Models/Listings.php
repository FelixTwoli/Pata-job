<?php
namespace App\Models;

class Listings {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'description' => 'We are looking for a software engineer to join our team.',
                'company' => 'Google',
                'location' => 'Kenya',
            ],
            [
                'id' => 2,
                'title' => 'Software Engineer',
                'description' => 'We are looking for a software engineer to join our team.',
                'company' => 'Google',
                'location' => 'Kenya',
            ]
        ];
    }
    
    public static function find($id) {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing ['id'] == $id) {
                return $listing;
            }
        }
        
    
    }
}