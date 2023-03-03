<div class="tabs tabs-boxed">
    <a class="tab tab-lg @if (request()->is('/')) tab-active @endif flex-auto"
        href="/">{{ __('About Me') }}</a>
    <a class="tab tab-lg  @if (request()->is('project')) tab-active @endif flex-auto"
        href="/project">{{ __('Projects') }}</a>
    <a class="tab tab-lg  @if (request()->is('contact')) tab-active @endif flex-auto"
        href="/contact">{{ __('Contacts') }}</a>
</div>
