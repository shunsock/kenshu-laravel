<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.head')
@include('components.header')
@include('signup.user')
@include(
    'edit_page.form',
    ['article' => $article]
)
</html>
