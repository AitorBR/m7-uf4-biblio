<?php

namespace App\Http\Controllers;

class CatalogController extends Controller {
    private $llibres = [
        [
            'title' => 'Harry Potter y la piedra filosofal',
            'author' => 'J.K. Rowling',
            'ISBN' => '978-8498386943',
            'poster' => 'https://m.media-amazon.com/images/I/517DxWbJNZL.jpg',
            'rented' => false
        ],
        [
            'title' => 'La viajera del tiempo',
            'author' => 'La viajera del tiempo',
            'ISBN' => '978-1542045438',
            'poster' => 'https://m.media-amazon.com/images/I/51cuIOKdL4L._SY346_.jpg',
            'rented' => true
        ],
        [
            'title' => 'Narrativa completa',
            'author' => 'H.P. Lovecraft',
            'ISBN' => '978-8417477646',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/91U2ClefRRL.jpg',
            'rented' => false
        ],
        [
            'title' => 'Anna Karenina',
            'author' => 'Anna Karenina',
            'ISBN' => '978-8415618881',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/716nD8GbvkL.jpg',
            'rented' => false
        ],
        [
            'title' => 'Cuentos completos',
            'author' => 'Cuentos completos',
            'ISBN' => '978-8417477684',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/91NHyTnnSfL.jpg',
            'rented' => false
        ],
        [
            'title' => 'Dune (Las Crónicas de Dune) ',
            'author' => 'Frank Herbert',
            'ISBN' => '978-6073194648',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71azCXdgZGL.jpg',
            'rented' => false
        ],
    ];

    public function index() {
        return view('catalog.index', ['llibres' => $this->llibres]);
    }

    public function show($id) {
        return view('catalog.show', ['id' => $id, 'llibre' => $this->llibres[$id]]);
    }

    public function create() {
        return view('catalog.create');
    }

    public function edit($id) {
        return view('catalog.edit', ['id' => $id]);
    }
}
