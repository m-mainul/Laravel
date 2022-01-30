@if(isset($userAuth->lang) && !empty($userAuth->lang))
    {{-- */$lang=$userAuth->lang;/* --}}
@elseif(Session::has('language'))
    {{-- */$lang=Session::get('language');/* --}}
@else
    {{-- */$lang='nl';/* --}}
@endif
<script type="text/javascript">
    $.cookie('googtrans', '/nl/{{ $lang == 'nl' ? '' : $lang }}' );
</script>
<div id="google_translate_element" style="display: none"></div><script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'nl', includedLanguages: 'be,de,en,fr,nl', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>