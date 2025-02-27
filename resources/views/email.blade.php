{{$data['name']}} <br> {{$data['surname']}}<br>
Email: {{$data['email']}}.  <br>
Numero di telefono: 
@if (!$data['phone'])
   Non inserito
@else {{$data['phone']}} <br>
@endif

Il contenuto del messaggio è: <br>
 {{$data['message']}}.