<x-mail::message>
Prosoft - New Form Entry

<h2>Hello ,</h2>
<p>You got a new query from <b>{{$body['name']}}</b></p>
<br>
<p>Phone : {{$body['phone']}}</p>
<br>
<p>Email : {{$body['email']}}</p>
<br>
<p>Message : {{$body['message']}}</p>
 
 
<!-- <x-mail::button :url="''">
Button Text
</x-mail::button> -->

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
