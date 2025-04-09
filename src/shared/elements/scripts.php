<?php
$scripts = [
    'lib/jquery/jquery.min.js',
    'vendor/bootstrap/dist/js/bootstrap.bundle.min.js',
    'vendor/fomantic-ui/dist/semantic.min.js',
    'lib/lodash/lodash.min.js',
    'assets/js/theme.min.js',
    'assets/js/scripts.js',
];

foreach ($scripts as $script) {
    echo '<script src="' . statf($script) . '"></script>';
}
?>

<script>
    $(function () {
        // Custom js here...
    });
</script>