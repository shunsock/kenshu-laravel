<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.head')
@include('components.header')
@include('signup.user')
@include(
    'create_article.form',
    ['username'=>$username]
)
</html>
