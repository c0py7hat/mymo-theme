<script type='text/javascript'>
    /* <![CDATA[ */
    var mymo = {
        "ajax_search_url": "{{ route('search') }}",
        "ajax_notification_url": "",
        "ajax_remove_all_notification_url": "",
        "ajax_popular_movies_url": "",
        "ajax_get_movies_by_genre_url": "",
        "ajax_filter_form_url": "",
        "light_mode":"0",
        "light_mode_btn":"1",
        "ajax_live_search":"1",
        "sync":null,
        "db_redirect_url":"{{ url()->current() }}",
        "languages": {
            'notification': '@lang('theme::app.notification')',
            'nothing_found': '@lang('theme::app.nothing_found')',
            'remove_all': '@lang('theme::app.remove_all')',
            'bookmark': '@lang('theme::app.bookmark')',
        }
    };

    var langs = {
        'data_error': '@lang('theme::app.data_error')'
    };
    /* ]]> */
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var ajax_auth_object = {
        "logined": "{{ Auth::check() ? '1' : '0' }}",
        "login_url": "",
        "user_registration": "{{ get_config('user_registration') }}",
        "register_url": "",
        "forgot_password_url": "",
        "redirecturl":"{{ url()->current() }}",
        "loadingmessage":"{{ trans('theme::app.please_wait') }}",
        "recaptcha":"{{ get_config('google_recaptcha') }}",
        "sitekey":"{{ get_config('google_recaptcha_key') }}",
        "languages":{
            "login":"@lang('theme::app.login')",
            "register":"@lang('theme::app.register')",
            "forgotpassword":"@lang('theme::app.forgot_password')?",
            "already_account":"@lang('theme::app.already_have_an_account')",
            "create_account":"@lang('theme::app.create_account')",
            "reset_captcha":"@lang('theme::app.reset_captcha')",
            "username":"@lang('theme::app.name')",
            "email":"@lang('theme::app.email')",
            "username_email":"@lang('theme::app.email')",
            "password":"@lang('theme::app.password')",
            "reset_password":"@lang('theme::app.reset_password')",
            "login_with":"@lang('theme::app.login_with')",
            "register_with":"@lang('theme::app.register_with')",
            "or":"@lang('theme::app.or')",
            "apparently_there_are_no_posts_to_show": "{{ trans('theme::app.apparently_there_are_no_posts_to_show') }}"
        }
    };
    /* ]]> */
</script>

<style type="text/css">
    #header .site-title {
        background: url({{ upload_url(get_config('logo')) }}) no-repeat top left;
        text-indent: -9999px;
    }
</style>