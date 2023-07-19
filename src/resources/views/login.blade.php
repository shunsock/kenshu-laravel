<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @csrf
    @include('components.head')
    @include('components.header')
    @includeWhen(
        $message != '',
        'components.message',
        ['message' => $message]
    )
    @include('login.form')
</html>
