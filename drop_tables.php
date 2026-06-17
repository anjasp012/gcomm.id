<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

Schema::disableForeignKeyConstraints();
$tables = DB::select('SHOW TABLES');
foreach ($tables as $table) {
    $array = (array) $table;
    $tableName = array_values($array)[0];
    Schema::drop($tableName);
    echo "Dropped " . $tableName . "\n";
}
Schema::enableForeignKeyConstraints();
