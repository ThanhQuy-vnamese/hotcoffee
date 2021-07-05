<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.png')}}" />
    <title>Hot Coffee &#8211; Just another WordPress site</title>
    <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Grand+Hotel|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i|Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=latin-ext" type='text/css' media='all' >
    <link rel='stylesheet' href="{{asset('template/js/vendor/revslider/settings.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/js/vendor/woo/woocommerce-layout.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/js/vendor/woo/woocommerce-smallscreen.css')}}" type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' href="{{asset('template/js/vendor/woo/woocommerce.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/css/fontello/css/fontello.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/css/style.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/css/core.animation.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/css/shortcodes.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/js/vendor/woo/plugin.woocommerce.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/css/skin.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/css/doc-style.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/css/responsive.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/css/skin.responsive.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/js/vendor/comp/comp.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/css/custom.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/css/core.messages.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('template/css/core.portfolio.css')}}" type='text/css' media='all' />
</head>

<body class="home page body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide preloader vc_responsive">
<div id="page_preloader"></div>
<a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
<div class="body_wrap">
    <div class="page_wrap">
        <div class="top_panel_fixed_wrap"></div>
        @include('layouts.header')
        @include('layouts.header_mobile')
        @yield('content')
        @include('layouts.footer')
        @include('layouts.copyright')
    </div>
</div>
<div id="popup_registration" class="popup_wrap popup_registration bg_tint_light">
    <a href="#" class="popup_close"></a>
    <div class="form_wrap">
        <form name="registration_form" method="post" class="popup_form registration_form">
            <input type="hidden" name="redirect_to" value="#" />
            <div class="form_left">
                <div class="popup_form_field login_field iconed_field icon-user">
                    <input type="text" id="registration_username" name="registration_username" value="" placeholder="User name (login)">
                </div>
                <div class="popup_form_field email_field iconed_field icon-mail">
                    <input type="text" id="registration_email" name="registration_email" value="" placeholder="E-mail">
                </div>
                <div class="popup_form_field agree_field">
                    <input type="checkbox" value="agree" id="registration_agree" name="registration_agree">
                    <label for="registration_agree">I agree with</label>
                    <a href="#">Terms &amp; Conditions</a>
                </div>
                <div class="popup_form_field submit_field">
                    <input type="submit" class="submit_button" value="Sign Up">
                </div>
            </div>
            <div class="form_right">
                <div class="popup_form_field password_field iconed_field icon-lock">
                    <input type="password" id="registration_pwd" name="registration_pwd" value="" placeholder="Password">
                </div>
                <div class="popup_form_field password_field iconed_field icon-lock">
                    <input type="password" id="registration_pwd2" name="registration_pwd2" value="" placeholder="Confirm Password">
                </div>
                <div class="popup_form_field description_field">Minimum 6 characters</div>
            </div>
        </form>
        <div class="result message_block"></div>
    </div>
</div>
<div id="popup_login" class="popup_wrap popup_login bg_tint_light">
    <a href="#" class="popup_close"></a>
    <div class="form_wrap">
        <div class="form_left">
            <form action="#" method="post" name="login_form" class="popup_form login_form">
                <input type="hidden" name="redirect_to" value="#">
                <div class="popup_form_field login_field iconed_field icon-user">
                    <input type="text" id="log" name="log" value="" placeholder="Login or Email">
                </div>
                <div class="popup_form_field password_field iconed_field icon-lock">
                    <input type="password" id="password" name="pwd" value="" placeholder="Password">
                </div>
                <div class="popup_form_field remember_field">
                    <a href="#" class="forgot_password">Forgot password?</a>
                    <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                    <label for="rememberme">Remember me</label>
                </div>
                <div class="popup_form_field submit_field">
                    <input type="submit" class="submit_button" value="Login">
                </div>
            </form>
        </div>
        <div class="form_right">
            <div class="login_socials_title">You can login using your social profile</div>
            <div class="login_socials_list">
                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_facebook">
                            <span class="icon-facebook"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_twitter">
                            <span class="icon-twitter"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_gplus">
                            <span class="icon-gplus"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="login_socials_problem"><a href="#">Problem with login?</a></div>
            <div class="result message_block"></div>
        </div>
    </div>
</div>

<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
<div class="custom_html_section"></div>

<script type='text/javascript' src="{{asset('template/js/vendor/jquery/jquery.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/vendor/jquery/jquery-migrate.min.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/custom/custom.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/vendor/esg/jquery.themepunch.tools.min.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/vendor/revslider/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/js/vendor/revslider/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/js/vendor/revslider/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/js/vendor/revslider/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/js/vendor/revslider/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/vendor/modernizr.min.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/vendor/ui/core.min.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/vendor/superfish.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/custom/jquery.slidemenu.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/custom/core.utils.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/custom/core.init.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/custom/init.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/custom/embed.min.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/custom/shortcodes.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/custom/core.messages.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/vendor/comp/comp_front.min.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/vendor/isotope.pkgd.min.js')}}"></script>
<script type='text/javascript' src="{{asset('template/js/vendor/jquery.hoverdir.js')}}"></script>

</body>

</html>
