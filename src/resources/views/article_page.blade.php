<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.head')
@include('components.header')
@include('signup.user')
@include(
    'article_page.article_detail',
    ['article' => $article]
)
</html>
