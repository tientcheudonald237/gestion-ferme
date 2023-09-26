<?php

Breadcrumbs::for('home', function ($trail) {
    $trail->push('home', route('home'));
});

