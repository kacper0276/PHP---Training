<?php

declare(strict_types=1);

namespace App;

class View {
    public function render(string $page, array $param): void {
        require_once('templates/layout.php');
    }
}