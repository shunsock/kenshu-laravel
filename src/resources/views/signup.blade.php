<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components.head')
    @include('components.header')
    @includeWhen(
        $message != '',
        'components.message',
        ['message' => $message]
    )
    @include('signup.form')
</html>
