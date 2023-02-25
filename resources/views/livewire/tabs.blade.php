<div class="tabs border-xl">
    <a class="tab tab-lg tab-lifted @if (request()->is('/')) tab-active @endif flex-auto"
        href="/">{{ __('About Me') }}</a>
    <a class="tab tab-lg tab-lifted @if (request()->is('project')) tab-active @endif flex-auto"
        href="/project">{{ __('Projects') }}</a>
    <a class="tab tab-lg tab-lifted @if (request()->is('contact')) tab-active @endif flex-auto"
        href="/contact">{{ __('Contacts') }}</a>
</div>
