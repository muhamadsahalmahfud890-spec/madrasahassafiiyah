<?php
$files = array_merge(
    glob(__DIR__ . '/app/Filament/Resources/*.php'),
    glob(__DIR__ . '/app/Filament/Pages/*.php')
);

foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Replace use Filament\Forms\Form with use Filament\Schemas\Schema
    $content = str_replace('use Filament\Forms\Form;', 'use Filament\Schemas\Schema;', $content);
    
    // Replace public static function form(Form $form): Form
    $content = str_replace('public static function form(Form $form): Form', 'public static function form(Schema $schema): Schema', $content);
    
    // For Pages (like ManageSettings)
    $content = str_replace('public function form(Form $form): Form', 'public function form(Schema $schema): Schema', $content);
    
    // Replace return $form with return $schema
    $content = str_replace('return $form', 'return $schema', $content);
    
    file_put_contents($file, $content);
}
echo "Done.";
