<!DOCTYPE html>
<html lang="ko">
<x-header title="{{ $title }}"/>
<body>
    <x-navbar />
    <div class="max-w-6xl mx-auto">
        {{ $slot }}
    </div>
    <x-footer />
</body>
</html>