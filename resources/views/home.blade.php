<x-layout>

    <x-header
        :contacts='$contacts'
    ></x-header>

    <x-main></x-main>

    <x-about
        :about='$about'
    ></x-about>

    <x-directions
        :directions='$directions'
    ></x-directions>

    <x-services
        :services='$services'
    ></x-services>

    <x-doctors
        :doctors='$doctors'
    ></x-doctors>

{{--    <x-reviews--}}
{{--        :sections='$sections'--}}
{{--    ></x-reviews>--}}

{{--    <x-contacts--}}
{{--        :sections='$sections'--}}
{{--    ></x-contacts>--}}

</x-layout>
