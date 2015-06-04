<?php
/**
 * Created by PhpStorm.
 * User: EDGAR
 * Date: 04/06/2015
 * Time: 10:49 AM
 */

use Illuminate\Database\Seeder;

class CountyTableSeeder extends Seeder {

    public function run()
    {
        $tasks = [
            ['name' => 'Amazonas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Antioquia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Arauca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Atlántico', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Bolívar', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Boyacá', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Caldas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Caquetá', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Casanare', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Cauca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Cesar', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Chocó', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Córdoba', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Cundinamarca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Guainía', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Guaviare', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Huila', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'La Guajira', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Magdalena', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Meta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Nariño', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Norte de Santander', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Putumayo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Quindío', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Risaralda', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'San Andrés y Providencia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Santander', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Sucre', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Tolima', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Valle del Cauca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Vaupés', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Vichada', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ];
        DB::table('counties')->insert($tasks);
    }
}