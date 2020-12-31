<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DairaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $wailaya = DB::table('commandes_wilayas')->where('code', 29)->first();
        DB::table('commandes_dairas')->insert([ 'code' => 29001, 'name' => 'Aïn Farès', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29002, 'name' => 'Aïn Fekan', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29003, 'name' => 'Aïn Ferah', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29004, 'name' => 'Aïn Fras', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29005, 'name' => 'Alaimia', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29006, 'name' => 'Aouf', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29007, 'name' => 'Beniane', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29008, 'name' => 'Bou Hanifia', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29009, 'name' => 'Bou Henni', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29010, 'name' => 'Chorfa', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29011, 'name' => 'El Bordj', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29012, 'name' => 'El Gaada', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29013, 'name' => 'El Ghomri', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29014, 'name' => 'Hachem', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29015, 'name' => 'El Keurt', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29016, 'name' => 'El Menaouer', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29017, 'name' => 'Ferraguig', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29018, 'name' => 'Froha', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29019, 'name' => 'Gharrous', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29020, 'name' => 'Guerdjoum', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29021, 'name' => 'Guittena', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29022, 'name' => 'Ghriss', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29023, 'name' => 'Mamounia', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29024, 'name' => 'Hacine', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29025, 'name' => 'Khalouia', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29026, 'name' => 'Makdha', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29027, 'name' => 'Maoussa', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29028, 'name' => 'Mascara', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29029, 'name' => 'Matemore', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29030, 'name' => 'Matemore', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29031, 'name' => 'Mohammadia', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29032, 'name' => 'Nesmoth', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29033, 'name' => 'Oggaz', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29034, 'name' => 'Oued El Abtal', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29035, 'name' => 'Oued Taria', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29036, 'name' => 'Ras Ain Amirouche', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29037, 'name' => 'Sedjerara', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29038, 'name' => 'Sehaîlia', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29039, 'name' => 'Sidi Abdeldjebar', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29040, 'name' => 'Sidi Abdelmoumen', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29041, 'name' => 'Sidi Kada', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29042, 'name' => 'Sidi Boussaid', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29043, 'name' => 'Sig', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29044, 'name' => 'Tighennif', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29045, 'name' => 'Tizi', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29046, 'name' => 'Zahana', 'wilaya_id' => $wailaya->id]);
        DB::table('commandes_dairas')->insert([ 'code' => 29047, 'name' => 'Zelameta', 'wilaya_id' => $wailaya->id]);

    }
}
