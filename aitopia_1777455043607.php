// database/migrations/xxxx_xx_xx_create_services_table.php
Schema::create('services', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description');
    $table->string('image')->nullable();
    $table->timestamps();
});
