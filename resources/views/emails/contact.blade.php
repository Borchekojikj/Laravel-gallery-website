<x-mail::message>
    # Hello, you got an new E-Mail!

    Company: {{ $data['company'] }}
    Email: {{ $data['email'] }}
    Phone: {{ $data['phone'] }}



    Thanks,
    {{ config('app.name') }}
</x-mail::message>