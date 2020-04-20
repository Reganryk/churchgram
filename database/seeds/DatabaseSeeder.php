<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\Church;
use App\Music;
use App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
         Admin::insert([
            [
                'name'            => 'Developer',
                'email'           => 'developer@dcin.com',
                'password'        => bcrypt('developer'),
                'remember_token'  => str_random(10),
                'created_at'      => date("Y-m-d H:i:s")
            ]
        ]);

          Church::insert([
            [
                'name'            => 'Full Gospel Church Kabale',
                'email'           => 'fullgospel@gmail.com',
                'uname'           => 'Fullgospel Kabale',
                'password'        => bcrypt('developer'),
                'remember_token'  => str_random(10),
                'created_at'      => date("Y-m-d H:i:s")
            ]
        ]);




           Music::insert([
            [
                'name'            => 'Byansi James',
                'email'           => 'byansi@gmail.com',
                'uname'           => 'Jamzey',
                'password'        => bcrypt('developer'),
                'remember_token'  => str_random(10),
                'created_at'      => date("Y-m-d H:i:s")
            ]
             ]);

          User::insert([
            [
              'fname' => 'Rumanzi',
              'lname' => 'Regan',
              'uname' => 'Reganryk',
              'email' => 'reganryk6@gmail.com',
              'uphone' => '0701026913',
              'sex' => 'male',
              'password' => Hash::make('manzidad'),
              'dob' => '12/09/2010',
              'uchurch' => 'Living Word Assembly',
              'city' => 'Kampala',
              'country' => 'Uganda',
            ]
        ]);

          User::insert([
              [
              'fname' => 'Deepcode',
              'lname' => 'Innovations',
              'uname' => 'Deepcodein',
              'email' => 'deepcodeinnovations@gmail.com',
              'uphone' => '0779254408',
              'sex' => 'female',
              'password' => Hash::make('manzidad'),
              'dob' => '12/09/2010',
              'uchurch' => 'Living Word Assembly',
              'city' => 'Kampala',
              'country' => 'Uganda',
            ]
        ]);

       //Empty the countries table
        DB::table(\Config::get('countries.table_name'))->delete();

        //Get all of the countries
        $countries = Countries::getList();
        foreach ($countries as $countryId => $country){
            DB::table(\Config::get('countries.table_name'))->insert(array(
                'id' => $countryId,
                'capital' => ((isset($country['capital'])) ? $country['capital'] : null),
                'citizenship' => ((isset($country['citizenship'])) ? $country['citizenship'] : null),
                'country_code' => $country['country-code'],
                'currency' => ((isset($country['currency'])) ? $country['currency'] : null),
                'currency_code' => ((isset($country['currency_code'])) ? $country['currency_code'] : null),
                'currency_sub_unit' => ((isset($country['currency_sub_unit'])) ? $country['currency_sub_unit'] : null),
                'currency_decimals' => ((isset($country['currency_decimals'])) ? $country['currency_decimals'] : null),
                'full_name' => ((isset($country['full_name'])) ? $country['full_name'] : null),
                'iso_3166_2' => $country['iso_3166_2'],
                'iso_3166_3' => $country['iso_3166_3'],
                'name' => $country['name'],
                'region_code' => $country['region-code'],
                'sub_region_code' => $country['sub-region-code'],
                'eea' => (bool)$country['eea'],
                'calling_code' => $country['calling_code'],
                'currency_symbol' => ((isset($country['currency_symbol'])) ? $country['currency_symbol'] : null),
                'flag' =>((isset($country['flag'])) ? $country['flag'] : null),
            ));
        }
    }
}
