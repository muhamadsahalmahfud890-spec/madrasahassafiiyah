<?php
$files = array_merge(
    glob(__DIR__ . '/app/Filament/Resources/*.php'),
    glob(__DIR__ . '/app/Filament/Pages/*.php')
);

foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Fix navigation properties by using the exact union types for Filament v3.x/v5.x
    $content = preg_replace('/protected static (.*?) \$navigationIcon = (.*?);/', 'protected static \BackedEnum|string|null $navigationIcon = $2;', $content);
    $content = preg_replace('/protected static (.*?) \$navigationGroup = (.*?);/', 'protected static \UnitEnum|string|null $navigationGroup = $2;', $content);
    $content = preg_replace('/protected static (.*?) \$navigationLabel = (.*?);/', 'protected static string|null $navigationLabel = $2;', $content);

    // Some versions use BackedEnum for Icon but maybe string for Label.
    // Actually, setting them all to match the error exactly is best.

    file_put_contents($file, $content);
}
echo "Done.";
