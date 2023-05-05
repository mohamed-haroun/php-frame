<?php
declare(strict_types=1);
namespace controllers;

class DataLoader
{

    public function data()
    {
        include __DIR__ . '/../views/data.php';
    }
}