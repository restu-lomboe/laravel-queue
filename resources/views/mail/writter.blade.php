@component('mail::message')
# Introduction

Selamat Saudara/i <b>{{ $blog->user->name }}</b> , blog Anda yang berjudul<blockquote><b>{{ $blog->title }}</b></blockquote>akan kami review. Kami akan mengirimkan email kepada Anda jika blog Anda sudah berhasil dipublish

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

<br>Thanks,<br>
{{ config('app.name') }}
@endcomponent
