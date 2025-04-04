<?php

$scripts = [
    'lib/jquery/jquery.min.js',
    'vendor/bootstrap/dist/js/bootstrap.bundle.min.js',
    'vendor/fomantic-ui/dist/semantic.min.js',
    // 'assets/js/theme.min.js',
    // 'lib/lodash/lodash.min.js',
    // 'assets/js/scripts.js',
];

foreach ($scripts as $script) {
    echo '<script src="' . static_file($script) . '"></script>';
}

?>

<script>
    $(function () {
        // Custom js here...
    });
</script>