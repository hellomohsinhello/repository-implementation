<?php

namespace App\Repository\Interfaces;

interface PostRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function update(array $data, string $id);
    public function delete(string $id);
    public function show(string $id);
}
