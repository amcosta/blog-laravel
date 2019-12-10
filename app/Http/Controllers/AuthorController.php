<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Repositories\AuthorRepository;
use App\Services\Builders\AuthorBuilder;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(AuthorRepository $repository)
    {
        $authors = $repository->findAll();

        return view('author.index', ['authors' => $authors]);
    }

    public function create()
    {
        return view('author.create');
    }

    public function store(AuthorRequest $request, AuthorBuilder $builder, AuthorRepository $repository)
    {
        $author = $builder->buildFromRequest($request);
        $repository->save($author);
        return redirect()->route('author-index');
    }
}
