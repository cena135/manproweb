<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {    
        Schedule::create([
            'tanggal' => '2025-04-22',
            'waktu' => '08:00 - 10:00',
            'mata_kuliah' => 'Deep Learning',
            'ruangan' => 'P202',
            'pengawas' => ['John', 'Jane'],
            'jumlah_pengawas' => 3,
        ]);

        Schedule::create([
            'tanggal' => '2025-04-22',
            'waktu' => '10:30 - 12:30',
            'mata_kuliah' => 'Computer Vision',
            'ruangan' => 'P203',
            'pengawas' => ['Alice', 'Bob'],
            'jumlah_pengawas' => 2,
        ]);

        Schedule::create([
            'tanggal' => '2025-04-23',
            'waktu' => '09:00 - 11:00',
            'mata_kuliah' => 'Natural Language Processing',
            'ruangan' => 'P204',
            'pengawas' => ['Charlie', 'Dana'],
            'jumlah_pengawas' => 2,
        ]);

        Schedule::create([
            'tanggal' => '2025-04-24',
            'waktu' => '13:00 - 15:00',
            'mata_kuliah' => 'Reinforcement Learning',
            'ruangan' => 'P205',
            'pengawas' => ['Eve', 'Frank', 'Grace'],
            'jumlah_pengawas' => 3,
        ]);

        Schedule::create([
            'tanggal' => '2025-04-25',
            'waktu' => '15:30 - 17:30',
            'mata_kuliah' => 'Machine Learning',
            'ruangan' => 'P206',
            'pengawas' => ['Hank', 'Ivy'],
            'jumlah_pengawas' => 2,
        ]);
    }
}
