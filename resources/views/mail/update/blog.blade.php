@component('mail::message')
# Introduction

@if ($blog->publish == 1) Selamat @else Maaf @endif Saudara/i <b>{{ $blog->user->name }}</b> , blog Anda yang berjudul<blockquote><b>{{ $blog->title }}</b></blockquote>telah @if ($blog->publish == 1) dipublish @else takedown @endif oleh team review. untuk info lebih lanjut silahkan hubungi team admin kami

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

<br>Thanks,<br>
{{ config('app.name') }}
@endcomponent
