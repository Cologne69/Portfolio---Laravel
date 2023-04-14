<div>
    <div class="hidden md:block fixed top-0 w-screen glass z-50">
        <div class="tabs tabs-horizontal">
            <a class="tab tab-lg flex-auto tab-bordered" id="btnAboutTab" href="/">{{ __('About Me') }}</a>
            <a class="tab tab-lg flex-auto tab-bordered" id="btnProjectTab" href="/project">{{ __('Projects') }}</a>
            <a class="tab tab-lg flex-auto tab-bordered" id="btnContactTab" href="/contact">{{ __('Contacts') }}</a>
        </div>
    </div>
    <script>
        var currentLink = window.location.pathname;

        if (currentLink == '/') {
            document.getElementById('btnAboutTab').classList.add('tab-active');
        } else if (currentLink == '/project') {
            document.getElementById('btnProjectTab').classList.add('tab-active');
        } else if (currentLink == '/contact') {
            document.getElementById('btnContactTab').classList.add('tab-active');
        }
    </script>
</div>
