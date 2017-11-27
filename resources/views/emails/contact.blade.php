@component('mail::message')
# Introduction

First Name: {{$contact->firstname}}<br/>

Last Name: {{$contact->lastname}}<br/>

Message: {{$contact->subject}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
