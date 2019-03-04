@component('mail::message')

    Ciao, è arrivata una nuova lead da {{ $lead->name }} con email: {{ $lead->email }} e con questo messaggio: {{ $lead->message }}

@endcomponent
