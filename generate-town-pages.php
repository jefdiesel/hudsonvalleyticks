<?php
/**
 * TOWN PAGE GENERATOR SCRIPT
 *
 * Run this script once to generate all individual town pages.
 * After running, you can delete this file.
 *
 * Usage: php generate-town-pages.php
 */

include_once __DIR__ . '/towns-data.php';

$baseDir = __DIR__;

// Get all town slugs
$townSlugs = getAllTownSlugs();

$tickPreventionCount = 0;
$lymeCount = 0;

foreach ($townSlugs as $slug) {
    // Generate tick prevention page
    $tickPreventionFile = $baseDir . '/' . $slug . '-tick-prevention.php';
    $tickPreventionContent = <<<PHP
<?php
/**
 * {$towns[$slug]['name']} Tick Prevention Guide
 * Auto-generated programmatic SEO page
 */
\$townSlug = '$slug';
include __DIR__ . '/town-tick-prevention-template.php';
PHP;

    if (file_put_contents($tickPreventionFile, $tickPreventionContent)) {
        echo "Created: {$slug}-tick-prevention.php\n";
        $tickPreventionCount++;
    } else {
        echo "FAILED: {$slug}-tick-prevention.php\n";
    }

    // Generate Lyme disease page
    $lymeFile = $baseDir . '/' . $slug . '-lyme-disease.php';
    $lymeContent = <<<PHP
<?php
/**
 * Lyme Disease in {$towns[$slug]['name']}, NY
 * Auto-generated programmatic SEO page
 */
\$townSlug = '$slug';
include __DIR__ . '/town-lyme-disease-template.php';
PHP;

    if (file_put_contents($lymeFile, $lymeContent)) {
        echo "Created: {$slug}-lyme-disease.php\n";
        $lymeCount++;
    } else {
        echo "FAILED: {$slug}-lyme-disease.php\n";
    }
}

echo "\n========================================\n";
echo "Generation Complete!\n";
echo "Tick Prevention Pages: $tickPreventionCount\n";
echo "Lyme Disease Pages: $lymeCount\n";
echo "Total Pages: " . ($tickPreventionCount + $lymeCount) . "\n";
echo "========================================\n";
?>
