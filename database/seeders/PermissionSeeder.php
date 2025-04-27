<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array menu yang ada
        $menus = [
            'Dashboard',
            'Master Data',
            'Berita',
            'Programs',
            'Content',
            'Manajemen Kategory',
            'Kategori Konten',
            'Kategori Berita',
            'Kategori Programs',
            'Jabatan Guru',
            'Guru',
            'Manajemen Guru',
            'Achievement',
            'Landingpage Management',
            'Management Menu',
            'User Management',
            'Contact',
            'Slider',
            'Role',
            'Gallery'
        ];

        // Iterasi setiap menu untuk membuat 4 permission
        foreach ($menus as $index => $menu) {
            // Generate ID unik berdasarkan tahun, bulan, hari, dan urutan menu
            $now = Carbon::now();
            $uniqueIdPrefix = $now->format('Ymd'); // Format: TahunBulanHari
            $menuIndex = str_pad($index + 1, 2, '0', STR_PAD_LEFT); // Menu urutan

            // 4 permission untuk setiap menu
            DB::table('permissions')->insert([
                [
                    'id' => $uniqueIdPrefix . $menuIndex . '01',
                    'name' => strtolower($menu) . '-view',
                    'guard_name' => 'web',
                    'created_at' => $now,
                ],
                [
                    'id' => $uniqueIdPrefix . $menuIndex . '02',
                    'name' => strtolower($menu) . '-create',
                    'guard_name' => 'web',
                    'created_at' => $now,
                ],
                [
                    'id' => $uniqueIdPrefix . $menuIndex . '03',
                    'name' => strtolower($menu) . '-edit',
                    'guard_name' => 'web',
                    'created_at' => $now,
                ],
                [
                    'id' => $uniqueIdPrefix . $menuIndex . '04',
                    'name' => strtolower($menu) . '-delete',
                    'guard_name' => 'web',
                    'created_at' => $now,
                ],
            ]);
        }
        // 2. Buat role SUPERADMIN
        $superAdminRole = Role::firstOrCreate([
            'name' => 'superadmin',
            'guard_name' => 'web',
        ]);

        // 3. Ambil semua permissions
        $allPermissions = Permission::pluck('name')->toArray();

        // 4. Assign semua permission ke SUPERADMIN
        $superAdminRole->syncPermissions($allPermissions);

        // 5. Buat User SUPERADMIN
        $superAdminUser = User::firstOrCreate(
            ['email' => 'admin@exxample.com'], // Ubah kalau mau
            [
                'name' => 'Superadmin',
                'password' => Hash::make('password'), // Password default
                'email_verified_at' => now(),
            ]
        );

        // 6. Assign Role ke User SUPERADMIN
        $superAdminUser->assignRole($superAdminRole);
    }
}
