@component('mail::message')
# Introduction

Ada artikel baru yang baru saja dibuat oleh <b>{{ $blog->user->name }}</b> dan editor disuruh untuk mereview blog tersebut.

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

<br>Thanks,<br>
{{ config('app.name') }}
@endcomponent
