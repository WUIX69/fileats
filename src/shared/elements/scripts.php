<?php
// 1. Load jQuery first (classic script)
echo '<script src="' . statf('lib/jquery/jquery.min.js') . '"></script>';

// 2. Load cherry-picked Bootstrap modules (as ES modules)
$bootstrapModules = [
    'vendor/bootstrap/js/src/base-component.js',
    'vendor/bootstrap/js/src/button.js',
    'vendor/bootstrap/js/src/carousel.js',
    'vendor/bootstrap/js/src/collapse.js',
    'vendor/bootstrap/js/src/tab.js',
];
foreach ($bootstrapModules as $module) {
    echo '<script type="module" src="' . statf($module) . '"></script>';
}

// 3. Load optional scripts (classic scripts)
$optionalScripts = [
    'vendor/fomantic-ui/dist/semantic.min.js',
    'lib/lodash/lodash.min.js',
    'assets/js/loader/window.js',
    'assets/js/darkmode.js',
    'assets/js/theme.min.js',
    'assets/js/scripts.js',
];
foreach ($optionalScripts as $script) {
    echo '<script src="' . statf($script) . '"></script>';
}
?>

<script>
    $(function () {
        // Custom js here...
    });
</script>