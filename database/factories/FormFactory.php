<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form>
 */
class FormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'jabatan' => $this->faker->word(),
            'perguruan_tinggi' => $this->faker->word(),
            'kategori_sekolah' => $this->faker->randomElement(['SMA', 'SMK', 'MAN', 'KULIAH', 'SMP']),
            'jalan' => $this->faker->streetName(),
            'rt_rw_desa_kel' => $this->faker->word(),
            'kecamatan' => $this->faker->word(),
            'provinsi' => $this->faker->randomElement(['Kalimantan Selatan', 'Kalimantan Barat', 'Kalimantan Timur', 'Kalimantan Utara', 'Kalimantan Tengah']),
            'kabupaten_kota' => $this->faker->randomElement(['Kabupaten Balangan', 'Kabupaten Banjar', 'Kabupaten Barito Kuala', 'Kabupaten Hulu Sungai Selatan', 'Kabupaten Hulu Sungai Tengah', 'Kabupaten Hulu Sungai Utara', 'Kabupaten Kotabaru', 'Kabupaten Tabalong', 'Kabupaten Tanah Bumbu', 'Kabupaten Tapin', 'Kota Banjarbaru', 'Kota Banjarmasin', 'Paringin', 'Martapura', 'Marabahan', 'Kandangan', 'Barabai', 'Amuntai', 'Kotabaru', 'Tanjung', 'Batulicin', 'Pelaihari', 'Rantau']),
            'kode_pos' => $this->faker->randomNumber(5),
            'npsn' => $this->faker->numberBetween(10000000, 99999999),
            'telp' => $this->faker->numberBetween(000000000000, 999999999999),
            'no_fax' => $this->faker->numberBetween(0000, 9999),
            'email' => $this->faker->unique()->safeEmail,
            'resi_pembayaran' => $this->faker->numberBetween(000000, 999999),
            'created_by' => $this->faker->name(),
            'updated_by' => $this->faker->name(),
        ];
    }
}
