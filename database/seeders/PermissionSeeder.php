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
            'Permission Role',
            'Gallery',
        ];

        // Iterasi setiap menu untuk membuat 4 permission
        foreach ($menus as $index => $menu) {
            $now = Carbon::now();
            $uniqueIdPrefix = $now->format('Ymd'); // Format: TahunBulanHari
            $menuIndex = str_pad($index + 1, 2, '0', STR_PAD_LEFT); // Menu urutan

            // Permissions to be inserted
            $permissions = [
                strtolower($menu) . '-view',
                strtolower($menu) . '-create',
                strtolower($menu) . '-edit',
                strtolower($menu) . '-delete',
            ];

            foreach ($permissions as $permission) {
                // Check if permission already exists before inserting
                if (!Permission::where('name', $permission)->exists()) {
                    DB::table('permissions')->insert([
                        'id' => $uniqueIdPrefix . $menuIndex . str_pad(array_search($permission, $permissions) + 1, 2, '0', STR_PAD_LEFT),
                        'name' => $permission,
                        'guard_name' => 'web',
                        'created_at' => $now,
                    ]);
                }
            }
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
            ['email' => 'admin@example.com'], // Ubah kalau mau
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
