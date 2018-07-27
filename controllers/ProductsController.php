<?php

namespace App\Controllers;

use App\Core\App;

class ProductsController
{
    public function index()
    {
        $products = App::get('database')->getAll("products");

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        App::get('database')->addNew('products', $_POST);
        return redirect('/admin/products');
    }

    public function show()
    {
        $product = App::get('database')->getOne('products', $_GET['id']);
        return view('products.show', compact('product'));
    }

    public function edit()
    {
        $product = App::get('database')->getOne('products', $_GET['id']);
        return view('products.edit', compact('product'));
    }

    public function update()
    {
        App::get('database')->update('products', $_POST);
        return redirect('/admin/products');
    }

    public function destroy()
    {
        App::get('database')->destroy('products', $_POST['id']);
        return redirect('/admin/products');
    }
}