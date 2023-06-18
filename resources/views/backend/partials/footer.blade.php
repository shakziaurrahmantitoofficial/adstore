@php
    $setting = App\Models\Setting::where('id',1)->first();
@endphp
<footer>
    <div class="footer-area">
        @if(isset($setting->header_logo))
            <p>&copy; {{ asset($setting->copyright_text) }}</p>
        @endif
    </div>
</footer>