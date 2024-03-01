<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['code' => 'P01D01', 'name' => 'Ilam', 'province_id' => 1],
            ['code' => 'P01D02', 'name' => 'Udayapur', 'province_id' => 1],
            ['code' => 'P01D03', 'name' => 'Okhaldhunga', 'province_id' => 1],
            ['code' => 'P01D04', 'name' => 'Khotang', 'province_id' => 1],
            ['code' => 'P01D05', 'name' => 'Jhapa', 'province_id' => 1],
            ['code' => 'P01D06', 'name' => 'Taplejung', 'province_id' => 1],
            ['code' => 'P01D07', 'name' => 'Terhathum', 'province_id' => 1],
            ['code' => 'P01D08', 'name' => 'Dhankuta', 'province_id' => 1],
            ['code' => 'P01D09', 'name' => 'Panchthar', 'province_id' => 1],
            ['code' => 'P01D10', 'name' => 'Bhojpur', 'province_id' => 1],
            ['code' => 'P01D11', 'name' => 'Morang', 'province_id' => 1],
            ['code' => 'P01D12', 'name' => 'Sankhuwasabha', 'province_id' => 1],
            ['code' => 'P01D13', 'name' => 'Sunsari', 'province_id' => 1],
            ['code' => 'P01D14', 'name' => 'Solukhumbu', 'province_id' => 1],
            ['code' => 'P02D01', 'name' => 'Dhanusha', 'province_id' => 2],
            ['code' => 'P02D02', 'name' => 'Parsa', 'province_id' => 2],
            ['code' => 'P02D03', 'name' => 'Bara', 'province_id' => 2],
            ['code' => 'P02D04', 'name' => 'Mahottari', 'province_id' => 2],
            ['code' => 'P02D05', 'name' => 'Rautahat', 'province_id' => 2],
            ['code' => 'P02D06', 'name' => 'Saptari', 'province_id' => 2],
            ['code' => 'P02D07', 'name' => 'Sarlahi', 'province_id' => 2],
            ['code' => 'P02D08', 'name' => 'Siraha', 'province_id' => 2],
            ['code' => 'P03D01', 'name' => 'Kathmandu', 'province_id' => 3],
            ['code' => 'P03D02', 'name' => 'Kabhrepalanchok', 'province_id' => 3],
            ['code' => 'P03D03', 'name' => 'Chitawan', 'province_id' => 3],
            ['code' => 'P03D04', 'name' => 'Dolakha', 'province_id' => 3],
            ['code' => 'P03D05', 'name' => 'Dhading', 'province_id' => 3],
            ['code' => 'P03D06', 'name' => 'Nuwakot', 'province_id' => 3],
            ['code' => 'P03D07', 'name' => 'Bhaktapur', 'province_id' => 3],
            ['code' => 'P03D08', 'name' => 'Makawanpur', 'province_id' => 3],
            ['code' => 'P03D09', 'name' => 'Rasuwa', 'province_id' => 3],
            ['code' => 'P03D10', 'name' => 'Ramechhap', 'province_id' => 3],
            ['code' => 'P03D11', 'name' => 'Lalitpur', 'province_id' => 3],
            ['code' => 'P03D12', 'name' => 'Sindhupalchok', 'province_id' => 3],
            ['code' => 'P03D13', 'name' => 'Sindhuli', 'province_id' => 3],
            ['code' => 'P04D01', 'name' => 'Kaski', 'province_id' => 4],
            ['code' => 'P04D02', 'name' => 'Gorkha', 'province_id' => 4],
            ['code' => 'P04D03', 'name' => 'Tanahu', 'province_id' => 4],
            ['code' => 'P04D04', 'name' => 'Nawalparasi_E', 'province_id' => 4],
            ['code' => 'P04D05', 'name' => 'Parbat', 'province_id' => 4],
            ['code' => 'P04D06', 'name' => 'Baglung', 'province_id' => 4],
            ['code' => 'P04D07', 'name' => 'Manang', 'province_id' => 4],
            ['code' => 'P04D08', 'name' => 'Mustang', 'province_id' => 4],
            ['code' => 'P04D09', 'name' => 'Myagdi', 'province_id' => 4],
            ['code' => 'P04D10', 'name' => 'Lamjung', 'province_id' => 4],
            ['code' => 'P04D11', 'name' => 'Syangja', 'province_id' => 4],
            ['code' => 'P05D01', 'name' => 'Arghakhanchi', 'province_id' => 5],
            ['code' => 'P05D02', 'name' => 'Kapilbastu', 'province_id' => 5],
            ['code' => 'P05D03', 'name' => 'Gulmi', 'province_id' => 5],
            ['code' => 'P05D04', 'name' => 'Dang', 'province_id' => 5],
            ['code' => 'P05D05', 'name' => 'Nawalparasi_W', 'province_id' => 5],
            ['code' => 'P05D06', 'name' => 'Palpa', 'province_id' => 5],
            ['code' => 'P05D07', 'name' => 'Pyuthan', 'province_id' => 5],
            ['code' => 'P05D08', 'name' => 'Bardiya', 'province_id' => 5],
            ['code' => 'P05D09', 'name' => 'Banke', 'province_id' => 5],
            ['code' => 'P05D10', 'name' => 'Rukum_E', 'province_id' => 5],
            ['code' => 'P05D11', 'name' => 'Rupandehi', 'province_id' => 5],
            ['code' => 'P05D12', 'name' => 'Rolpa', 'province_id' => 5],
            ['code' => 'P06D01', 'name' => 'Kalikot', 'province_id' => 6],
            ['code' => 'P06D02', 'name' => 'Jajarkot', 'province_id' => 6],
            ['code' => 'P06D03', 'name' => 'Jumla', 'province_id' => 6],
            ['code' => 'P06D04', 'name' => 'Dolpa', 'province_id' => 6],
            ['code' => 'P06D05', 'name' => 'Dailekh', 'province_id' => 6],
            ['code' => 'P06D06', 'name' => 'Mugu', 'province_id' => 6],
            ['code' => 'P06D07', 'name' => 'Rukum_W', 'province_id' => 6],
            ['code' => 'P06D08', 'name' => 'Salyan', 'province_id' => 6],
            ['code' => 'P06D09', 'name' => 'Surkhet', 'province_id' => 6],
            ['code' => 'P06D10', 'name' => 'Humla', 'province_id' => 6],
            ['code' => 'P07D01', 'name' => 'Achham', 'province_id' => 7],
            ['code' => 'P07D02', 'name' => 'Kanchanpur', 'province_id' => 7],
            ['code' => 'P07D03', 'name' => 'Kailali', 'province_id' => 7],
            ['code' => 'P07D04', 'name' => 'Dadeldhura', 'province_id' => 7],
            ['code' => 'P07D05', 'name' => 'Doti', 'province_id' => 7],
            ['code' => 'P07D06', 'name' => 'Darchula', 'province_id' => 7],
            ['code' => 'P07D07', 'name' => 'Bajhang', 'province_id' => 7],
            ['code' => 'P07D08', 'name' => 'Bajura', 'province_id' => 7],
            ['code' => 'P07D09', 'name' => 'Baitadi', 'province_id' => 7],
        ];
        District::insert($data);
    
    }
}
