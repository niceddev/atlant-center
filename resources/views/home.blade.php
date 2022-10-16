<x-layout>

    <x-header
        :sectionsList='$sectionsList'
        :contacts='$contacts'
    ></x-header>

    <x-main></x-main>

    <x-about
        :aboutData='$sectionsList["about"]'
    ></x-about>

    <x-directions
        :directionsData='$sectionsList["directions"]'
        :directions="$directions"
    ></x-directions>

    <x-services
        :servicesData='$sectionsList["services"]'
        :services="$services"
    ></x-services>

{{--    <x-doctors--}}
{{--        :sections='$sections'--}}
{{--    ></x-doctors>--}}

{{--    <x-reviews--}}
{{--        :sections='$sections'--}}
{{--    ></x-reviews>--}}

{{--    <x-contacts--}}
{{--        :sections='$sections'--}}
{{--    ></x-contacts>--}}

</x-layout>
