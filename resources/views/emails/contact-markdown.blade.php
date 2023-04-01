<x-mail::message>
    ### A new message from {{ config('app.seo_name') }}'s website.

    **Name:** {{ $data?->name }}\
    **Email:** {{ $data?->email }}\
    **Phone:** {{ $data?->phone }}\
    **Message:** {{ $data?->message }}

    <x-mail::button :url="''">
        Mark Read
    </x-mail::button>

    Thanks,<br>
    {{ config('app.seo_name') }}
</x-mail::message>
