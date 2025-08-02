<x-layouts.app>
    <div class="overflow-x-hidden">
        @include('sections.navbar-section')
        @include('sections.welcome-carousel-page')
        <livewire:contact-form />
        
        @include('sections.loan-steps')
        @include('sections.loan-products')
        @include('sections.help-support-center')
        @include('sections.footer-section')
    </div>

</x-layouts.app>


