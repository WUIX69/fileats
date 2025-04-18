<?php
// 1. Load jQuery first (classic script)
echo '<script src="' . asset('lib/jquery/jquery.min.js') . '"></script>';

// 2. Load cherry-picked Bootstrap modules (as ES modules)
$bootstrapModules = [
    'vendor/bootstrap/js/src/base-component.js',
    'vendor/bootstrap/js/src/button.js',
    'vendor/bootstrap/js/src/carousel.js',
    'vendor/bootstrap/js/src/collapse.js',
    'vendor/bootstrap/js/src/tab.js',
];
foreach ($bootstrapModules as $module) {
    echo '<script type="module" src="' . asset($module) . '"></script>';
}

// 3. Load optional scripts (classic scripts)
$optionalScripts = [
    'vendor/fomantic-ui/dist/semantic.min.js',
    'lib/lodash/lodash.min.js',
    'js/loader/window.js',
    'js/darkmode.js',
    'js/theme.min.js',
    'js/scripts.js',
];
foreach ($optionalScripts as $script) {
    echo '<script src="' . asset($script) . '"></script>';
}

$utils = [
    'js/validateHandler.js',
    'js/middleware.js',
];
foreach ($utils as $script) {
    echo '<script src="' . util($script, true) . '"></script>';
}

?>

<script>
    $(function () {
        // Custom js here...
    });
</script>