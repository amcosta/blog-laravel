<?php


namespace App\Services\Builders;


use App\Entities\Author;
use Illuminate\Http\Request;

class AuthorBuilder
{
    public function buildFromRequest(Request $request, Author $author = null)
    {
        $author = $author ?? new Author();
        $author->setName($request->input('name'));

        return $author;
    }
}
