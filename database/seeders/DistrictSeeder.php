<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $wailaya = DB::table('commandes_wilayas')->where('code', 29)->first();
        DB::table('commandes_dairas')->insert([ 'code' => 29001, 'name' => 'Aïn Farès', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29002, 'name' => 'Aïn Fekan', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29003, 'name' => 'Aouf', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29004, 'name' => 'Bouhanifia', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29005, 'name' => 'El Bordj', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29006, 'name' => 'Ghriss', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29007, 'name' => 'Hachem', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29008, 'name' => 'Mascara', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29009, 'name' => 'Mohammedia', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29010, 'name' => 'Oggaz', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29011, 'name' => 'Ouled Attia', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29012, 'name' => 'Oued Taria', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29013, 'name' => 'Sig', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29014, 'name' => 'Tighenif', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29015, 'name' => 'Tizi', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_districts')->insert([ 'code' => 29016, 'name' => 'Zahana', 'wilaya_id' => $wailaya->id]);
    }
}
