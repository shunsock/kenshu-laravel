<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components.head')
    @include('components.header')
    @include('homepage.articleTable', ['articles' => $articles])
</html>
