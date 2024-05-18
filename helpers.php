<?php
// declare(strict_types=1);

/**
 * Get the base path
 *
 * @param string $path
 * @return string
 */
function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * Load a view
 *
 * @param string $name
 * @return void
 *
 */
function loadView($name) {
    $viewPath = basePath("views/{$name}.view.php");

//    file_exists($viewPath) ? require $viewPath : echo "View '{$name} not found.'";

    if (file_exists($viewPath)) {
        require_once $viewPath;
    } else {
        echo "View $name not found";
    }

}

/**
 * Load a partial
 *
 * @param string $name
 * @return void
 *
 */
function loadPartial($name) {
    $partialPath = basePath("views/partials/{$name}.php");

//    file_exists($partialPath) ? require $partialPath : echo "Partial '{$name} not found.'";


    if (file_exists($partialPath)) {
        require_once $partialPath;
    } else {
        echo "Partial $name not found!";
    }
}