<?php
require_once __DIR__ . '/partials/header.html';

if (isset($_GET['page'])) {
    require_once __DIR__ . '/pages/' . $_GET['page'] . '.html';
} else {
    require_once __DIR__ . '/pages/home_p.html';
}

require_once __DIR__ . '/partials/footer.html';