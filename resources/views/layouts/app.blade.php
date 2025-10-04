    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'App' }}</title>

        {{-- Styles Livewire --}}
        @livewireStyles
    </head>
    <body>
        {{-- Konten halaman --}}
        {{ $slot }}

        {{-- Scripts Livewire --}}
        @livewireScripts
    </body>
    </html>
