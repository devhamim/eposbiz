<!DOCTYPE html>
<html lang="en-US" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @if($setting->first()->title != null)
        <title>{{$setting->first()->title}}</title>
    @endif
    <link rel="stylesheet" type="text/css" href="{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/eh03duwi/a3jsn.css"
        media="all" />
    <style id='jetpack-sharing-buttons-style-inline-css' type='text/css'>
        .jetpack-sharing-buttons__services-list {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 0;
            list-style-type: none;
            margin: 5px;
            padding: 0
        }

        .jetpack-sharing-buttons__services-list.has-small-icon-size {
            font-size: 12px
        }

        .jetpack-sharing-buttons__services-list.has-normal-icon-size {
            font-size: 16px
        }

        .jetpack-sharing-buttons__services-list.has-large-icon-size {
            font-size: 24px
        }

        .jetpack-sharing-buttons__services-list.has-huge-icon-size {
            font-size: 36px
        }

        @media print {
            .jetpack-sharing-buttons__services-list {
                display: none !important
            }
        }

        .editor-styles-wrapper .wp-block-jetpack-sharing-buttons {
            gap: 0;
            padding-inline-start: 0
        }

        ul.jetpack-sharing-buttons__services-list.has-background {
            padding: 1.25em 2.375em
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/1y6plmk/5ukdx.css"
        media="all" />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/14oboyxa/5ukdx.css"
        media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/2c3d52n2/5ukdx.css"
        media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" type="text/css" href="{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/buoawj8/5ukdx.css"
        media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/78qfj7b0/5u9rb.css"
        media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/7xzwkiy0/5ukdx.css"
        media="all" />
    <link rel='stylesheet' id='elementor-post-2283-css'
        href='{{ asset('landingpage/sharee') }}/wp-content/uploads/elementor/css/post-2283eefd.css?ver=1715248386' type='text/css'
        media='all' />
    <link rel="stylesheet" type="text/css" href="{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/6zsossqs/5ukdx.css"
        media="all" />
    <link rel='stylesheet' id='elementor-post-2325-css'
        href='{{ asset('landingpage/sharee') }}/wp-content/uploads/elementor/css/post-23252ee6.css?ver=1715511391' type='text/css'
        media='all' />
    <link rel="stylesheet" type="text/css" href="{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/qa9ezqp0/5ukdx.css"
        media="all" />
    <style id='dashicons-inline-css' type='text/css'>
        [data-font="Dashicons"]:before {
            font-family: 'Dashicons' !important;
            content: attr(data-icon) !important;
            speak: none !important;
            font-weight: normal !important;
            font-variant: normal !important;
            text-transform: none !important;
            line-height: 1 !important;
            font-style: normal !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/7ll98hwt/5ukdx.css"
        media="all" />
    <link rel='stylesheet' id='flatsome-googlefonts-css'
        href='http://fonts.googleapis.com/css?family=Lato%3Aregular%2C700%2C400%2C700%7CDancing+Script%3Aregular%2C400&amp;display=swap&amp;ver=3.9'
        type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHind+Siliguri%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.5.3'
        type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src='{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/mob3d79n/5u9rb.js' type="text/javascript"></script>

    <script src='{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/quq3qn0g/5u9rb.js' type="text/javascript"></script>

    <script src='{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/pxrbfce/5ukdy.js' type="text/javascript"></script>

    <script src='{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/7io3j6c5/5ukdy.js' type="text/javascript"></script>

    <script src='{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/2nytrlxg/5ukdy.js' type="text/javascript"></script>

    <script src='{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/e5xv04yd/5ukdy.js' type="text/javascript"></script>

    <script src='{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/2z65b5dc/5ukdy.js' type="text/javascript"></script>

    <script src='{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/fpauzlgh/5ukdy.js' type="text/javascript"></script>

    <script src='{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/5awtn25/5ukdy.js' type="text/javascript"></script>

    <script src='{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/g38vfwxl/4euc4.js' type="text/javascript"></script>


    <script src='{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/dq7tdaz1/a3jsn.js' type="text/javascript"></script>

    <script src='{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/kc8sjhif/5ukdy.js' type="text/javascript"></script>

    <style>
        img#wpstats {
            display: none
        }
    </style>
    <style>
        .bg {
            opacity: 0;
            transition: opacity 1s;
            -webkit-transition: opacity 1s;
        }

        .bg-loaded {
            opacity: 1;
        }
    </style>
    @if($setting->first()->favicon != null)
        <link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    @endif

    <style id="custom-css" type="text/css">
        :root {
            --primary-color: #f88613;
        }

        .header-main {
            height: 84px
        }

        #logo img {
            max-height: 84px
        }

        #logo {
            width: 251px;
        }

        .header-bottom {
            min-height: 33px
        }

        .header-top {
            min-height: 30px
        }

        .has-transparent+.page-title:first-of-type,
        .has-transparent+#main>.page-title,
        .has-transparent+#main>div>.page-title,
        .has-transparent+#main .page-header-wrapper:first-of-type .page-title {
            padding-top: 164px;
        }

        .header.show-on-scroll,
        .stuck .header-main {
            height: 70px !important
        }

        .stuck #logo img {
            max-height: 70px !important
        }

        .search-form {
            width: 93%;
        }

        .header-bottom {
            background-color: #f88613
        }

        .stuck .header-main .nav>li>a {
            line-height: 50px
        }

        .header-bottom-nav>li>a {
            line-height: 47px
        }

        @media (max-width: 549px) {
            .header-main {
                height: 70px
            }

            #logo img {
                max-height: 70px
            }
        }

        .nav-dropdown-has-arrow li.has-dropdown:before {
            border-bottom-color: #FFFFFF;
        }

        .nav .nav-dropdown {
            border-color: #FFFFFF
        }

        .nav-dropdown {
            font-size: 100%
        }

        .nav-dropdown-has-arrow li.has-dropdown:after {
            border-bottom-color: #FFFFFF;
        }

        .nav .nav-dropdown {
            background-color: #FFFFFF
        }

        .header-top {
            background-color: #F7F7F7 !important;
        }

        /* Color */
        .accordion-title.active,
        .has-icon-bg .icon .icon-inner,
        .logo a,
        .primary.is-underline,
        .primary.is-link,
        .badge-outline .badge-inner,
        .nav-outline>li.active>a,
        .nav-outline>li.active>a,
        .cart-icon strong,[data-color='primary'],
        .is-outline.primary {
            color: #f88613;
        }

        /* Color !important */[data-text-color="primary"]{color: #f88613!important;}/* Background Color */[data-text-bg="primary"]{background-color: #f88613;}/* Background */
        .scroll-to-bullets a,
        .featured-title,
        .label-new.menu-item>a:after,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,button[type="submit"],
        .button.wc-forward:not(.checkout):not(.checkout-button),
        .button.submit-button,
        .button.primary:not(.is-outline),
        .featured-table .title,
        .is-outline:hover,
        .has-icon:hover .icon-label,
        .nav-dropdown-bold .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold>li>a:hover,
        .nav-dropdown-bold.dark .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
        .is-outline:hover,
        .tagcloud a:hover,
        .grid-tools a,
        input[type='submit']:not(.is-form),
        .box-badge:hover .box-text,
        input.button.alt,
        .nav-box>li>a:hover,
        .nav-box>li.active>a,
        .nav-pills>li.active>a,
        .current-dropdown .cart-icon strong,
        .cart-icon:hover strong,
        .nav-line-bottom>li>a:before,
        .nav-line-grow>li>a:before,
        .nav-line>li>a:before,
        .banner,
        .header-top,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover,
        .button.primary:not(.is-outline),
        input[type='submit'].primary,
        input[type='submit'].primary,
        input[type='reset'].button,
        input[type='button'].primary,
        .badge-inner {
            background-color: #f88613;
        }

        /* Border */
        .nav-vertical.nav-tabs>li.active>a,
        .scroll-to-bullets a.active,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        .accordion-title.active,
        .featured-table,
        .is-outline:hover,
        .tagcloud a:hover,
        blockquote,
        .has-border,
        .cart-icon strong:after,
        .cart-icon strong,
        .blockUI:before,
        .processing:before,
        .loading-spin,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover {
            border-color: #f88613
        }

        .nav-tabs>li.active>a {
            border-top-color: #f88613
        }

        .widget_shopping_cart_content .blockUI.blockOverlay:before {
            border-left-color: #f88613
        }

        .woocommerce-checkout-review-order .blockUI.blockOverlay:before {
            border-left-color: #f88613
        }

        /* Fill */
        .slider .flickity-prev-next-button:hover svg,
        .slider .flickity-prev-next-button:hover .arrow {
            fill: #f88613;
        }

        /* Background Color */
        [data-icon-label]:after,
        .secondary.is-underline:hover,
        .secondary.is-outline:hover,
        .icon-label,
        .button.secondary:not(.is-outline),
        .button.alt:not(.is-outline),
        .badge-inner.on-sale,
        .button.checkout,
        .single_add_to_cart_button {
            background-color: #f88613;

            }[data-text-bg="secondary"] {
                background-color: #f88613;
            }

            /* Color */
            .secondary.is-underline,
            .secondary.is-link,
            .secondary.is-outline,
            .stars a.active,
            .star-rating:before,
            .woocommerce-page .star-rating:before,
            .star-rating span:before,
            .color-secondary {
                color: #f88613
            }

            /* Color !important */[data-text-color="secondary"]{color: #f88613!important;}/* Border */
            .secondary.is-outline:hover {
                border-color: #f88613
            }

            .alert.is-underline:hover,
            .alert.is-outline:hover,
            .alert {
                background-color: #dd3333
            }

            .alert.is-link,
            .alert.is-outline,
            .color-alert {
                color: #dd3333;
            }

            /* Color !important */[data-text-color="alert"]{color: #dd3333!important;}/* Background Color */[data-text-bg="alert"]{background-color: #dd3333;}body{font-size: 100%;}body{font-family:"Lato", sans-serif}body{font-weight: 400}body{color: #2b2a2a}.nav > li > a {font-family:"Lato", sans-serif;}.nav > li > a {font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: "Lato", sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font{color: #555555;}.alt-font{font-family: "Dancing Script", sans-serif;}.alt-font{font-weight: 400!important;}.current .breadcrumb-step, [data-icon-label]:after, .button#place_order,.button.checkout,.checkout-button,.single_add_to_cart_button.button{background-color: #f88613!important }@media screen and (min-width: 550px){.products .box-vertical .box-image{min-width: 300px!important;width: 300px!important;}}.footer-1{background-color: #e5e5e5}.footer-2{background-color: #0a0a0a}.absolute-footer, html{background-color: #f88613}.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}
    </style>

    <!-- Meta Pixel Code -->
    @if ($markatingsetting->first()->fb_pixel != null)
        {!! $markatingsetting->first()->fb_pixel !!}
    @endif
    {{-- <!-- End Meta Pixel Code --> --}}

    <!-- googletag Code -->
    @if ($markatingsetting->first()->google_tag != null)
        {!! $markatingsetting->first()->google_tag !!}
    @endif
    <!-- End googletag Code -->
</head>

<body
    class="cartflows_step-template cartflows_step-template-cartflows-canvas single single-cartflows_step postid-2325 theme-flatsome woocommerce-checkout woocommerce-page woocommerce-no-js woo-variation-swatches wvs-behavior-blur wvs-theme-flatsome wvs-show-label wvs-tooltip lightbox nav-dropdown-has-arrow cartflows-2.0.6  cartflows-pro-2.0.4 elementor-default elementor-kit-2283 elementor-page elementor-page-2325 cartflows-canvas">
    <div class="cartflows-container">
        <div data-elementor-type="wp-post" data-elementor-id="2325" class="elementor elementor-2325"
            data-elementor-post-type="cartflows_step">
            <div class="elementor-element elementor-element-a9c6b75 e-flex e-con-boxed e-con e-parent"
                data-id="a9c6b75" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-514ca3e elementor-headline--style-rotate elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-animated-headline"
                        data-id="514ca3e" data-element_type="widget"
                        data-settings="{&quot;headline_style&quot;:&quot;rotate&quot;,&quot;rotating_text&quot;:&quot;\u09e9 \u09a6\u09bf\u09a8\u09c7\u09b0 \u099c\u09a8\u09cd\u09af \u09aa\u09cd\u09b0\u09af\u09cb\u099c\u09cd\u09af&quot;,&quot;animation_type&quot;:&quot;typing&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;rotate_iteration_delay&quot;:2500}"
                        data-widget_type="animated-headline.default">
                        <div class="elementor-widget-container">
                            <link rel="stylesheet" type="text/css"
                                href="{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/zixf9ao/5ukdx.css" media="all" />
                            <h3
                                class="elementor-headline elementor-headline-animation-type-typing elementor-headline-letters">
                                <span class="elementor-headline-plain-text elementor-headline-text-wrapper">হোম
                                    ডেলিভারি ফ্রি </span>
                                <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                                    <span class="elementor-headline-dynamic-text elementor-headline-text-active">
                                        ৩&nbsp;দিনের&nbsp;জন্য&nbsp;প্রযোজ্য </span>
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-14a677d elementor-widget-mobile__width-initial elementor-widget__width-initial elementor-countdown--label-block elementor-widget elementor-widget-countdown"
                        data-id="14a677d" data-element_type="widget" data-widget_type="countdown.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! pro-elements - v3.21.0 - 30-04-2024 */
                                .elementor-widget-countdown .elementor-countdown-expire--message {
                                    display: none;
                                    padding: 20px;
                                    text-align: center
                                }

                                .elementor-widget-countdown .elementor-countdown-wrapper {
                                    flex-direction: row
                                }

                                .elementor-widget-countdown .elementor-countdown-item {
                                    padding: 20px 0;
                                    text-align: center;
                                    color: #fff
                                }

                                .elementor-widget-countdown .elementor-countdown-digits,
                                .elementor-widget-countdown .elementor-countdown-label {
                                    line-height: 1
                                }

                                .elementor-widget-countdown .elementor-countdown-digits {
                                    font-size: 69px
                                }

                                .elementor-widget-countdown .elementor-countdown-label {
                                    font-size: 19px
                                }

                                .elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-wrapper {
                                    display: flex;
                                    justify-content: center;
                                    margin-right: auto;
                                    margin-left: auto
                                }

                                .elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-digits,
                                .elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-label {
                                    display: block
                                }

                                .elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-item {
                                    flex-basis: 0;
                                    flex-grow: 1
                                }

                                .elementor-widget-countdown.elementor-countdown--label-inline {
                                    text-align: center
                                }

                                .elementor-widget-countdown.elementor-countdown--label-inline .elementor-countdown-item {
                                    display: inline-block;
                                    padding-left: 5px;
                                    padding-right: 5px
                                }
                            </style>
                            <div data-expire-actions="[{&quot;type&quot;:&quot;hide&quot;}]"
                                class="elementor-countdown-wrapper" data-date="1718259900">
                                <div class="elementor-countdown-item"><span
                                        class="elementor-countdown-digits elementor-countdown-hours"></span> <span
                                        class="elementor-countdown-label">Hours</span></div>
                                <div class="elementor-countdown-item"><span
                                        class="elementor-countdown-digits elementor-countdown-minutes"></span> <span
                                        class="elementor-countdown-label">Minutes</span></div>
                                <div class="elementor-countdown-item"><span
                                        class="elementor-countdown-digits elementor-countdown-seconds"></span> <span
                                        class="elementor-countdown-label">Seconds</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-fe03454 e-con-full e-flex e-con e-parent"
                data-id="fe03454" data-element_type="container">
                <div class="elementor-element elementor-element-eecf8aa elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="eecf8aa" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;wd-anim-top-flip-x&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <style>
                            /*! elementor - v3.21.0 - 08-05-2024 */
                            .elementor-heading-title {
                                padding: 0;
                                margin: 0;
                                line-height: 1
                            }

                            .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                color: inherit;
                                font-size: inherit;
                                line-height: inherit
                            }

                            .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                font-size: 15px
                            }

                            .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                font-size: 19px
                            }

                            .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                font-size: 29px
                            }

                            .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                font-size: 39px
                            }

                            .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                font-size: 59px
                            }
                        </style>
                        <h2 class="elementor-heading-title elementor-size-default">
                            ”দেখতে অসম্ভব সুন্দর এই গ্রাউন+ওড়না  সেট খুবই প্রিমিয়াম ও আরামদায়ক।
                        </h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-078d25b elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                    data-id="078d25b" data-element_type="widget"
                    data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;speed&quot;:5000,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;}"
                    data-widget_type="image-carousel.default">
                    <div class="elementor-widget-container">
                        <style>
                            /*! elementor - v3.21.0 - 08-05-2024 */
                            .elementor-widget-image-carousel .swiper,
                            .elementor-widget-image-carousel .swiper-container {
                                position: static
                            }

                            .elementor-widget-image-carousel .swiper-container .swiper-slide figure,
                            .elementor-widget-image-carousel .swiper .swiper-slide figure {
                                line-height: inherit
                            }

                            .elementor-widget-image-carousel .swiper-slide {
                                text-align: center
                            }

                            .elementor-image-carousel-wrapper:not(.swiper-container-initialized):not(.swiper-initialized) .swiper-slide {
                                max-width: calc(100% / var(--e-image-carousel-slides-to-show, 3))
                            }
                        </style>
                        <div class="elementor-image-carousel-wrapper swiper" dir="ltr">
                            <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                                <div class="swiper-slide" role="group" aria-roledescription="slide"
                                    aria-label="1 of 3">
                                    <figure class="swiper-slide-inner"><img decoding="async"
                                            class="swiper-slide-image"
                                            src="{{ asset('landingpage/sharee/image/3-1.jpg') }}"
                                            alt="1.jpg" /></figure>
                                </div>
                                <div class="swiper-slide" role="group" aria-roledescription="slide"
                                    aria-label="2 of 3">
                                    <figure class="swiper-slide-inner"><img decoding="async"
                                            class="swiper-slide-image"
                                            src="{{ asset('landingpage/sharee/image/3-4.jpg') }}" /></figure>
                                </div>
                                <div class="swiper-slide" role="group" aria-roledescription="slide"
                                    aria-label="3 of 3">
                                    <figure class="swiper-slide-inner"><img decoding="async"
                                            class="swiper-slide-image"
                                            src="{{ asset('landingpage/sharee/image/3-6.jpg') }}"
                                            alt="3.jpg" /></figure>
                                </div>
                                <div class="swiper-slide" role="group" aria-roledescription="slide"
                                    aria-label="3 of 3">
                                    <figure class="swiper-slide-inner"><img decoding="async"
                                            class="swiper-slide-image"
                                            src="{{ asset('landingpage/sharee/image/3-7.jpg') }}"
                                            alt="4.jpg" /></figure>
                                </div>
                            </div>
                            <div class="elementor-swiper-button elementor-swiper-button-prev" role="button"
                                tabindex="0">
                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-left"
                                    viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                    </path>
                                </svg>
                            </div>
                            <div class="elementor-swiper-button elementor-swiper-button-next" role="button"
                                tabindex="0">
                                <svg aria-hidden="true" class="e-font-icon-svg e-eicon-chevron-right"
                                    viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M696 533C708 521 713 504 713 487 713 471 708 454 696 446L400 146C388 133 375 125 354 125 338 125 325 129 313 142 300 154 292 171 292 187 292 204 296 221 308 233L563 492 304 771C292 783 288 800 288 817 288 833 296 850 308 863 321 871 338 875 354 875 371 875 388 867 400 854L696 533Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-e0c25d4 elementor-mobile-align-center elementor-widget-mobile__width-initial elementor-hidden-desktop elementor-hidden-tablet elementor-widget__width-initial elementor-widget elementor-widget-button"
                    data-id="e0c25d4" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-pulse-grow"
                                href="#chackout">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-icon elementor-align-icon-left">
                                        <i aria-hidden="true" class="icon icon-bag"></i> </span>
                                    <span class="elementor-button-text">অর্ডার করতে চাই</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-278d1b5 elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                    data-id="278d1b5" data-element_type="widget"
                    data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;lazyload&quot;:&quot;yes&quot;,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500}"
                    data-widget_type="image-carousel.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-image-carousel-wrapper swiper" dir="rtl">
                            <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                                <div class="swiper-slide" role="group" aria-roledescription="slide"
                                    aria-label="1 of 3">
                                    <figure class="swiper-slide-inner"><img class="swiper-slide-image swiper-lazy"
                                            data-src="{{ asset('landingpage/sharee/image/3-2.jpg') }}"
                                            alt="11.jpg" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </figure>
                                </div>
                                <div class="swiper-slide" role="group" aria-roledescription="slide"
                                    aria-label="2 of 3">
                                    <figure class="swiper-slide-inner"><img class="swiper-slide-image swiper-lazy"
                                            data-src="{{ asset('landingpage/sharee/image/3-5.jpg') }}"
                                            alt="22.jpg" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </figure>
                                </div>
                                <div class="swiper-slide" role="group" aria-roledescription="slide"
                                    aria-label="3 of 3">
                                    <figure class="swiper-slide-inner"><img class="swiper-slide-image swiper-lazy"
                                            data-src="{{ asset('landingpage/sharee/image/3-3.jpg') }}"
                                            alt="33.jpg" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </figure>
                                </div>
                                <div class="swiper-slide" role="group" aria-roledescription="slide"
                                    aria-label="3 of 3">
                                    <figure class="swiper-slide-inner"><img class="swiper-slide-image swiper-lazy"
                                            data-src="{{ asset('landingpage/sharee/image/3-8.jpg') }}"
                                            alt="44.jpg" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </figure>
                                </div>
                            </div>
                            <div class="elementor-swiper-button elementor-swiper-button-prev" role="button"
                                tabindex="0">
                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-left"
                                    viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                    </path>
                                </svg>
                            </div>
                            <div class="elementor-swiper-button elementor-swiper-button-next" role="button"
                                tabindex="0">
                                <svg aria-hidden="true" class="e-font-icon-svg e-eicon-chevron-right"
                                    viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M696 533C708 521 713 504 713 487 713 471 708 454 696 446L400 146C388 133 375 125 354 125 338 125 325 129 313 142 300 154 292 171 292 187 292 204 296 221 308 233L563 492 304 771C292 783 288 800 288 817 288 833 296 850 308 863 321 871 338 875 354 875 371 875 388 867 400 854L696 533Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-82347ec elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                    data-id="82347ec" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">১০০% কোয়ালিটিফুল</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-dda0f6e elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                    data-id="dda0f6e" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default"> ১০০% কালার গ্যারান্টি</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4370643 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="4370643" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">প্রিমিয়াম কোয়ালিটির নিশ্চয়তা</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-a428d27 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                    data-id="a428d27" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <style>
                            /*! elementor - v3.21.0 - 08-05-2024 */
                            .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                background-color: #69727d;
                                color: #fff
                            }

                            .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                color: #69727d;
                                border: 3px solid;
                                background-color: transparent
                            }

                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                margin-top: 8px
                            }

                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                width: 1em;
                                height: 1em
                            }

                            .elementor-widget-text-editor .elementor-drop-cap {
                                float: left;
                                text-align: center;
                                line-height: 1;
                                font-size: 50px
                            }

                            .elementor-widget-text-editor .elementor-drop-cap-letter {
                                display: inline-block
                            }
                        </style>
                        <p><span style="font-weight: 400;">&#8221;দেখতে অসম্ভব সুন্দর এই জামা + ওড়না সেট </span><span style="font-weight: 400;">খুবই প্রিমিয়াম ও আরামদায়ক&#8221;</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-2928c85 e-flex e-con-boxed e-con e-parent"
                data-id="2928c85" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-71c4e31 elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                        data-id="71c4e31" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">প্রডাক্টের <span
                                    style="color: #FFCB00">"ভিডিও দেখুন" </span> </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-69ca886 elementor-widget__width-initial elementor-widget elementor-widget-video"
                        data-id="69ca886" data-element_type="widget"
                        data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com\/watch?v=kexiKp1W2FY&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}"
                        data-widget_type="video.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.21.0 - 08-05-2024 */
                                .elementor-widget-video .elementor-widget-container {
                                    overflow: hidden;
                                    transform: translateZ(0)
                                }

                                .elementor-widget-video .elementor-wrapper {
                                    aspect-ratio: var(--video-aspect-ratio)
                                }

                                .elementor-widget-video .elementor-wrapper iframe,
                                .elementor-widget-video .elementor-wrapper video {
                                    height: 100%;
                                    width: 100%;
                                    display: flex;
                                    border: none;
                                    background-color: #000
                                }

                                @supports not (aspect-ratio:1/1) {
                                    .elementor-widget-video .elementor-wrapper {
                                        position: relative;
                                        overflow: hidden;
                                        height: 0;
                                        padding-bottom: calc(100% / var(--video-aspect-ratio))
                                    }

                                    .elementor-widget-video .elementor-wrapper iframe,
                                    .elementor-widget-video .elementor-wrapper video {
                                        position: absolute;
                                        top: 0;
                                        right: 0;
                                        bottom: 0;
                                        left: 0
                                    }
                                }

                                .elementor-widget-video .elementor-open-inline .elementor-custom-embed-image-overlay {
                                    position: absolute;
                                    top: 0;
                                    right: 0;
                                    bottom: 0;
                                    left: 0;
                                    background-size: cover;
                                    background-position: 50%
                                }

                                .elementor-widget-video .elementor-custom-embed-image-overlay {
                                    cursor: pointer;
                                    text-align: center
                                }

                                .elementor-widget-video .elementor-custom-embed-image-overlay:hover .elementor-custom-embed-play i {
                                    opacity: 1
                                }

                                .elementor-widget-video .elementor-custom-embed-image-overlay img {
                                    display: block;
                                    width: 100%;
                                    aspect-ratio: var(--video-aspect-ratio);
                                    -o-object-fit: cover;
                                    object-fit: cover;
                                    -o-object-position: center center;
                                    object-position: center center
                                }

                                @supports not (aspect-ratio:1/1) {
                                    .elementor-widget-video .elementor-custom-embed-image-overlay {
                                        position: relative;
                                        overflow: hidden;
                                        height: 0;
                                        padding-bottom: calc(100% / var(--video-aspect-ratio))
                                    }

                                    .elementor-widget-video .elementor-custom-embed-image-overlay img {
                                        position: absolute;
                                        top: 0;
                                        right: 0;
                                        bottom: 0;
                                        left: 0
                                    }
                                }

                                .elementor-widget-video .e-hosted-video .elementor-video {
                                    -o-object-fit: cover;
                                    object-fit: cover
                                }

                                .e-con-inner>.elementor-widget-video,
                                .e-con>.elementor-widget-video {
                                    width: var(--container-widget-width);
                                    --flex-grow: var(--container-widget-flex-grow)
                                }
                            </style>
                            <div class="elementor-wrapper elementor-open-inline">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/jljVgfuDj74?si=RPmeS624-foqQkPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-5ae27e9 e-con-full e-flex e-con e-parent"
                data-id="5ae27e9" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-element elementor-element-2120b29 e-con-full e-flex e-con e-child"
                    data-id="2120b29" data-element_type="container">
                    <div class="elementor-element elementor-element-449a027 elementor-widget elementor-widget-heading"
                        data-id="449a027" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">পুতুল ড্রেস
                                টু পিস >গ্রাউন+ওড়না ।
                            </h2>
                        </div>
                    </div>

                    <div class="elementor-element elementor-element-022d10a elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                        data-id="022d10a" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">গের ১২০" লং ৪৮" বডি ফ্রি সাইজ।</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">কোমরে ফিতা আছে বড় ছোট করতে পারবেন।</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">ডিজিটাল আফসান প্রিন্ট করা।</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">ফেব্রিক্স ইন্ডিয়ান চোষা কাপড়।</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">পায়জামার কাপড় থাকবে না।</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">ওড়নার কাপড় দেওয়া আছে ৫ হাত।</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">ডেলিভারি ম্যানের সামনে দেখে নিয়ে পারবেন।</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">কোন অগ্রিম পেমেন্ট করতে হবে না।</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                            </path>
                                        </svg> </span>
                                    <span class="elementor-icon-list-text">দুই সেট নিলে ডেলিভারি চার্জ।</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-5cfe451 elementor-mobile-align-center elementor-widget-mobile__width-initial elementor-widget__width-initial elementor-widget elementor-widget-button"
                        data-id="5cfe451" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-pulse-grow"
                                    href="#chackout">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-icon elementor-align-icon-left">
                                            <i aria-hidden="true" class="icon icon-bag"></i> </span>
                                        <span class="elementor-button-text">অর্ডার করতে চাই</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9011660 e-con-full e-flex e-con e-child"
                    data-id="9011660" data-element_type="container">
                    <div class="elementor-element elementor-element-703b89f elementor-widget__width-initial elementor-widget elementor-widget-heading"
                        data-id="703b89f" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">সবগুলো ছবি একসাথে দেখুন</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-d879611 elementor-widget-mobile__width-initial elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                        data-id="d879611" data-element_type="widget"
                        data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500}"
                        data-widget_type="image-carousel.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-image-carousel-wrapper swiper" dir="ltr">
                                <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                                    <div class="swiper-slide" role="group" aria-roledescription="slide"
                                        aria-label="1 of 6">
                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                class="swiper-slide-image"
                                                src="{{ asset('landingpage/sharee/image/3-1.jpg') }}"
                                                alt="1.webp" /></figure>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-roledescription="slide"
                                        aria-label="2 of 6">
                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                class="swiper-slide-image"
                                                src="{{ asset('landingpage/sharee/image/3-2.jpg') }}" /></figure>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-roledescription="slide"
                                        aria-label="3 of 6">
                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                class="swiper-slide-image"
                                                src="{{ asset('landingpage/sharee/image/3-3.jpg') }}"
                                                alt="5.webp" /></figure>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-roledescription="slide"
                                        aria-label="4 of 6">
                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                class="swiper-slide-image"
                                                src="{{ asset('landingpage/sharee/image/3-4.jpg') }}"
                                                alt="4.webp" /></figure>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-roledescription="slide"
                                        aria-label="5 of 6">
                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                class="swiper-slide-image"
                                                src="{{ asset('landingpage/sharee/image/3-5.jpg') }}"
                                                alt="3.webp" /></figure>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-roledescription="slide"
                                        aria-label="6 of 6">
                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                class="swiper-slide-image"
                                                src="{{ asset('landingpage/sharee/image/3-6.jpg') }}"
                                                alt="2.webp" /></figure>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-roledescription="slide"
                                        aria-label="6 of 6">
                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                class="swiper-slide-image"
                                                src="{{ asset('landingpage/sharee/image/3-7.jpg') }}"
                                                alt="2.webp" /></figure>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-roledescription="slide"
                                        aria-label="6 of 6">
                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                class="swiper-slide-image"
                                                src="{{ asset('landingpage/sharee/image/3-8.jpg') }}"
                                                alt="2.webp" /></figure>
                                    </div>
                                </div>
                                <div class="elementor-swiper-button elementor-swiper-button-prev" role="button"
                                    tabindex="0">
                                    <svg aria-hidden="true" class="e-font-icon-svg e-eicon-chevron-left"
                                        viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M646 125C629 125 613 133 604 142L308 442C296 454 292 471 292 487 292 504 296 521 308 533L604 854C617 867 629 875 646 875 663 875 679 871 692 858 704 846 713 829 713 812 713 796 708 779 692 767L438 487 692 225C700 217 708 204 708 187 708 171 704 154 692 142 675 129 663 125 646 125Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="elementor-swiper-button elementor-swiper-button-next" role="button"
                                    tabindex="0">
                                    <svg aria-hidden="true" class="e-font-icon-svg e-eicon-chevron-right"
                                        viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M696 533C708 521 713 504 713 487 713 471 708 454 696 446L400 146C388 133 375 125 354 125 338 125 325 129 313 142 300 154 292 171 292 187 292 204 296 221 308 233L563 492 304 771C292 783 288 800 288 817 288 833 296 850 308 863 321 871 338 875 354 875 371 875 388 867 400 854L696 533Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-42bc362 e-flex e-con-boxed e-con e-parent"
                data-id="42bc362" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-2eb5ba3 elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                        data-id="2eb5ba3" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">-------বিঃদ্রঃ------</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7b4be82 elementor-widget elementor-widget-text-editor"
                        data-id="7b4be82" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>বাজারে সবার চেয়ে কম প্রাইজে অর্ডার করতে চাইলে এখনি অর্ডার করুন কারন * আমরা নিজস্ব কারখানায় ২০১২ সাল থেকে ইসলামপুরে পোশাক তৈরি করে আসছি।* আমাদের সকল কাপড় প্রস্তুত করি।জামা ও ওড়নার কাপড় সম্পুর্ন সুতি।</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-a7a7989 e-con-full e-flex e-con e-parent"
                data-id="a7a7989" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-element elementor-element-561989e elementor-widget elementor-widget-heading"
                    data-id="561989e" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">
                            ”দেখতে অসম্ভব সুন্দর এই গ্রাউন+ওড়না  সেট খুবই প্রিমিয়াম ও আরামদায়ক।
                        </h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9353576 elementor-widget-divider--separator-type-pattern elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                    data-id="9353576" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider"
                            style="--divider-pattern-url: url(_data_image/svg%2bxml%2c_svg%20xmlns%3dhttp_/www.w3.org/2000/svg%20preserveAspectRatio%3dnone%20overflow%3dvisible%20h/__/svg_-2.html);">
                            <span class="elementor-divider-separator">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5219f14 elementor-mobile-align-center elementor-widget-mobile__width-initial elementor-align-center elementor-widget__width-initial elementor-widget elementor-widget-button"
                    data-id="5219f14" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-pulse-grow"
                                href="#chackout">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-icon elementor-align-icon-left">
                                        <i aria-hidden="true" class="icon icon-bag"></i> </span>
                                    <span class="elementor-button-text">অর্ডার করতে চাই</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-e6e60b8 e-con-full e-flex e-con e-parent"
                data-id="e6e60b8" data-element_type="container">
                <div class="elementor-element elementor-element-1fc5908 elementor-widget-mobile__width-initial elementor-widget__width-initial elementor-widget elementor-widget-heading"
                    data-id="1fc5908" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">অর্ডার করতে নিচের ফর্মটি সঠিক ভাবে
                            পুরন করুন</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-02908c6 elementor-widget-mobile__width-initial elementor-widget elementor-widget-checkout-form"
                    data-id="02908c6" data-element_type="widget" id="chackout"
                    data-widget_type="checkout-form.default">
                    <div class="elementor-widget-container">
                        <div class = "wcf-el-checkout-form cartflows-elementor__checkout-form">
                            <div id="wcf-embed-checkout-form"
                                class="wcf-embed-checkout-form wcf-embed-checkout-form-one-column  wcf-field-default">
                                <!-- CHECKOUT SHORTCODE -->
                                <div class="woocommerce">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <form action="{{ route('putul.order.store') }}" method="POST">
                                        @csrf
                                        <div class="wcf-product-option-wrap wcf-yp-skin-classic wcf-product-option-before-customer">
                                            <h3 id="your_products_heading"> নিচে আপনার প্রোডাক্টটি নিবার্চন করুন </h3>
                                            <!-- Product Options Table -->
                                            <div class="wcf-qty-options">
                                                <div class="wcf-qty-row wcf-qty-table-titles">
                                                    <div class="wcf-qty-header wcf-item">
                                                        <div class="wcf-field-label">Product</div>
                                                    </div>
                                                    <div class="wcf-qty-header wcf-qty ">
                                                        <div class="wcf-field-label">Quantity</div>
                                                    </div>
                                                    <div class="wcf-qty-header wcf-price">
                                                        <div class="wcf-field-label">Price</div>
                                                    </div>
                                                </div>
                                                <div class="wcf-qty-row wcf-qty-row-2276">
                                                    <!-- Product Row 1 -->
                                                    <div class="wcf-item">
                                                        <div class="wcf-item-selector wcf-item-single-sel">
                                                            <input class="wcf-single-sel" type="radio" id="product_1" name="radio_btn" value="1" data-product-name="প্রিমিয়াম - টু পিচ সেট গ্রাউন+ওড়না" data-quantity="1" data-price="1350" data-image="" checked="checked">
                                                        </div>
                                                        <div class="wcf-item-image" style="">
                                                            <img fetchpriority="high" decoding="async" width="300" height="300" src="{{ asset('landingpage/sharee/image/3-7.jpg') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                                                        </div>
                                                        <div class="wcf-item-all-text">
                                                            <div class="wcf-item-wrap">
                                                                <span class="wcf-display-title">প্রিমিয়াম - টু পিচ সেট গ্রাউন+ওড়না
                                                                </span><span
                                                                    class="wcf-display-title-quantity"><span
                                                                        class="dashicons dashicons-no-alt"></span><span
                                                                        class="wcf-display-quantity">1</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wcf-qty">
                                                        <div class="wcf-qty-selection-wrap">
                                                            <input type="number" id="quantity" value="1" step="1" min="1" name="quantity" class="wcf-qty-selection" placeholder="1">
                                                        </div>
                                                    </div>
                                                    <div class="wcf-price">
                                                        <div class="wcf-display-price wcf-field-label">
                                                            <label for="product_1" id="subtotal">৯৫০৳</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wcf-col2-set col2-set" id="customer_details">
                                            <div class="wcf-col-1 col-1">
                                                <div class="woocommerce-billing-fields">
                                                    <h3 id="billing_fields_heading">Billing details</h3>
                                                    <div class="woocommerce-billing-fields__field-wrapper">
                                                        <p class="form-row form-row-first thwcfd-required thwcfd-field-wrapper thwcfd-field-text wcf-column-100 validate-required" id="billing_first_name_field" data-priority="10">
                                                            <label for="name" class="">আপনার নাম&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text " name="name" id="name" placeholder="সম্পূর্ন নামটি লিখুন" value="" autocomplete="given-name" required />
                                                            </span>
                                                        </p>
                                                        @error('name')
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                        @enderror
                                                        <p class="form-row address-field form-row-first thwcfd-required thwcfd-field-wrapper thwcfd-field-text wcf-column-100 validate-required" id="billing_address_1_field" data-priority="20">
                                                            <label for="address" class="">আপনার সম্পূর্ণ ঠিকানা&nbsp;
                                                                <abbr class="required" title="required">*</abbr>
                                                            </label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text " name="address" id="address" placeholder="আপনার সম্পূর্ণ ঠিকানা লিখুন" value="" autocomplete="address-line1" required />
                                                            </span>
                                                        </p>
                                                        @error('address')
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                        @enderror
                                                        <p class="form-row form-row-wide thwcfd-required thwcfd-field-wrapper thwcfd-field-tel wcf-column-100 validate-required validate-phone" id="billing_phone_field" data-priority="30">
                                                            <label for="mobile" class="">আপনার ফোন নাম্বার&nbsp;
                                                                <abbr class="required" title="required">*</abbr>
                                                            </label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="tel" class="input-text " name="mobile" id="mobile" placeholder="আপনার ফোন নাম্বার লিখুন" value="" autocomplete="tel" required />
                                                            </span>
                                                        </p>
                                                        @error('mobile')
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                        @enderror
                                                        @error('mobile')
                                                            <script>
                                                                Swal.fire({
                                                                    icon: "error",
                                                                    title: "Oops...",
                                                                    text: "Something went wrong!",
                                                                });
                                                            </script>
                                                        @enderror
                                                        <p class="form-row address-field form-row-first thwcfd-required thwcfd-field-wrapper thwcfd-field-text wcf-column-100 validate-required" id="billing_address_1_field" data-priority="20">
                                                            <label for="color" class="">পছন্দের কালারটি সিলেক্ট করুন&nbsp;
                                                                <abbr class="required" title="required">*</abbr>
                                                            </label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <select name="color" id="color" class="input-text" required>
                                                                    <option value="সাদা">সাদা</option>
                                                                    <option value="আকাশী">আকাশী</option>
                                                                </select>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wcf-col-2 col-2">
                                                <div class="">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table table-bordered woocommerce-checkout-review-order-table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-name">Product</th>
                                                                    <th class="product-total">Subtotal</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- Sample Product Row -->
                                                                <tr class="cart_item">
                                                                    <td class="product-name">
                                                                        <div class="wcf-product-image">
                                                                            <div class="wcf-product-thumbnail">
                                                                                <img width="80" height="80"
                                                                                    src="{{ asset('landingpage/sharee/image/3-7.jpg') }}"
                                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                    alt="">
                                                                                <a href="#" rel="nofollow"
                                                                                    class="wcf-remove-product cartflows-icon cartflows-circle-cross"
                                                                                    data-id="138"
                                                                                    data-item-key="013d407166ec4fa56eb1e1f8cbe183b9"></a>
                                                                            </div>
                                                                            <div class="wcf-product-name">প্রিমিয়াম - টু পিচ সেট গ্রাউন+ওড়না x 1</div>
                                                                        </div>
                                                                        <strong class="product-quantity"></strong>
                                                                    </td>
                                                                    <td class="product-total">
                                                                        <span class="woocommerce-Price-amount amount"><bdi >1350
                                                                            <span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <!-- Add more product rows as needed -->
                                                            </tbody>
                                                            <tfoot>
                                                                <tr class="cart-subtotal">
                                                                    <th>Subtotal</th>
                                                                    <td>
                                                                        <input type="hidden" name="sub_total" value="1350" id="sub_total_input">
                                                                        <span class="woocommerce-Price-amount amount"><bdi id="subtotal_footer">1350<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                                                                    </td>
                                                                </tr>
                                                                <!-- Shipping Options -->
                                                                <tr class="woocommerce-shipping-totals shipping">
                                                                    <th>Shipping</th>
                                                                    <td data-title="Shipping">
                                                                        <!-- Shipping Methods -->
                                                                        <ul id="shipping_method" class="woocommerce-shipping-methods">
                                                                            <!-- Sample Shipping Method 1 -->
                                                                            <li>
                                                                                <input type="radio" name="shipping_cost" data-index="0" id="shipping_method_0_flat_rate2" value="60" class="shipping_method" checked="checked">
                                                                                <label for="shipping_method_0_flat_rate2">ঢাকার ভিতরে: <span class="woocommerce-Price-amount amount"><bdi>60<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></label>
                                                                            </li>
                                                                            <!-- Sample Shipping Method 2 -->
                                                                            <li>
                                                                                <input type="radio" name="shipping_cost" data-index="0" id="shipping_method_0_local_pickup3" value="120" class="shipping_method">
                                                                                <label for="shipping_method_0_local_pickup3">ঢাকার বাহিরে: <span class="woocommerce-Price-amount amount"><bdi>120<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></label>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <!-- End Shipping Options -->
                                                                <!-- Order Total -->
                                                                <tr class="order-total">
                                                                    <th>Total</th>
                                                                    <td>
                                                                        <input type="hidden" name="total" value="1350" id="total_input">
                                                                        <strong><span class="woocommerce-Price-amount amount"><bdi id="total">1350<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></strong>
                                                                    </td>
                                                                </tr>
                                                                <!-- End Order Total -->
                                                            </tfoot>
                                                        </table>
                                                    </div>

                                                    <!-- Payment Section -->
                                                    <div id="payment" class="woocommerce-checkout-payment">
                                                        <!-- Payment Methods -->
                                                        <ul class="wc_payment_methods payment_methods methods">
                                                            <!-- Cash on Delivery (COD) Method -->
                                                            <li class="wc_payment_method payment_method_bacs">
                                                                <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text="" style="display: none;">

                                                                <label for="payment_method_bacs">
                                                                    ক্যাশঅন ডেলিভারি 	</label>
                                                                        <div class="payment_box payment_method_bacs">
                                                                        <p>Pay with cash upon delivery.</p>
                                                                    </div>
                                                            </li>
                                                            <!-- Add more payment methods as needed -->
                                                        </ul>

                                                        <!-- Terms and Conditions -->
                                                        <div class="form-row place-order">
                                                            <!-- Place Order Button -->
                                                            <button type="submit"
                                                                class="btn btn-warning w-100 mt-3 py-2 text-white mobile_btn"
                                                                style="background-color: #D01D3D;"
                                                                value="অর্ডার করুন">অর্ডার করুন</button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- END CHECKOUT SHORTCODE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Sidebar -->
    {{-- <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
        <div class="sidebar-menu no-scrollbar ">
            <ul class="nav nav-sidebar  nav-vertical nav-uppercase">
                <li class="header-search-form search-form html relative has-icon">
                    <div class="header-search-form-wrapper">
                        <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                            <form role="search" method="get" class="searchform"
                                action="https://baharicolor.online/">
                                <div class="flex-row relative">
                                    <div class="flex-col search-form-categories">
                                        <select class="search_categories resize-select mb-0" name="product_cat">
                                            <option value="" selected='selected'>All</option>
                                            <option value="couple-dress">Couple Dress</option>
                                            <option value="couple-set">Couple Set</option>
                                            <option value="shari">Shari</option>
                                            <option value="silk-saree">Silk Saree</option>
                                        </select>
                                    </div><!-- .flex-col -->
                                    <div class="flex-col flex-grow">
                                        <label class="screen-reader-text"
                                            for="woocommerce-product-search-field-0">Search for:</label>
                                        <input type="search" id="woocommerce-product-search-field-0"
                                            class="search-field mb-0" placeholder="Search&hellip;" value=""
                                            name="s" />
                                        <input type="hidden" name="post_type" value="product" />
                                    </div><!-- .flex-col -->
                                    <div class="flex-col">
                                        <button type="submit" value="Search"
                                            class="ux-search-submit submit-button secondary button icon mb-0">
                                            <i class="icon-search"></i> </button>
                                    </div><!-- .flex-col -->
                                </div><!-- .flex-row -->
                                <div class="live-search-results text-left z-top"></div>
                            </form>
                        </div>
                    </div>
                </li>
                <li id="menu-item-1428"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-1428">
                    <a href="https://baharicolor.online/product-category/couple-dress/" class="nav-top-link">Couple
                        Dress</a>
                    <ul class=children>
                        <li id="menu-item-1429"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1429"><a
                                href="https://baharicolor.online/product-category/couple-dress/couple-shari-panjabi/">Couple
                                Set (Shari + Panjabi)</a></li>
                        <li id="menu-item-1430"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1430"><a
                                href="https://baharicolor.online/product-category/couple-dress/couple-two-pieces/">Couple
                                Set (Two-Piece)</a></li>
                        <li id="menu-item-1727"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1727"><a
                                href="https://baharicolor.online/product-category/couple-set/">Couple Set</a></li>
                    </ul>
                </li>
                <li id="menu-item-1431"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1431"><a
                        href="https://baharicolor.online/product-category/mens-shirt/" class="nav-top-link">Mens
                        Shirt</a></li>
                <li id="menu-item-1432"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1432"><a
                        href="https://baharicolor.online/product-category/panjabi/" class="nav-top-link">Panjabi</a>
                </li>
                <li id="menu-item-1433"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-1433">
                    <a href="https://baharicolor.online/product-category/shari/" class="nav-top-link">Shari</a>
                    <ul class=children>
                        <li id="menu-item-1435"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1435"><a
                                href="https://baharicolor.online/product-category/shari/digital-print-shari/">Digital
                                Print Shari</a></li>
                        <li id="menu-item-1434"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1434"><a
                                href="https://baharicolor.online/product-category/shari/boutique-shari/">Boutique
                                Shari</a></li>
                        <li id="menu-item-1798"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1798"><a
                                href="https://baharicolor.online/product-category/silk-saree/">Silk Saree</a></li>
                    </ul>
                </li>
                <li id="menu-item-2247"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2247"><a
                        href="https://baharicolor.online/product-category/islamic-wear/"
                        class="nav-top-link">Islamic Wear</a></li>
            </ul>
        </div><!-- inner -->
    </div> --}}
    <!-- #mobile-menu -->

<link rel="stylesheet" type="text/css" href="{{ asset('landingpage/sharee') }}/wp-content/cache/wpfc-minified/78qrtsnc/5ukdx.css"
        media="all" />

{{-- main js --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantityInput = document.getElementById('quantity');
        const shippingMethods = document.querySelectorAll('.shipping_method');
        const subtotalElement = document.getElementById('subtotal');
        const subtotalFooterElement = document.getElementById('subtotal_footer');
        const totalElement = document.getElementById('total');
        const productPrice = 1350;
        let shippingCost = 60;

        function updateSubtotalAndTotal() {
            const quantity = parseInt(quantityInput.value);
            const subtotal = productPrice * quantity;
            const total = subtotal + shippingCost;

            subtotalElement.textContent = subtotal + '৳';
            subtotalFooterElement.textContent = subtotal + '৳';
            totalElement.textContent = total + '৳';

            document.getElementById('sub_total_input').value = subtotal;
            document.getElementById('total_input').value = total;
        }

        quantityInput.addEventListener('input', function() {
            updateSubtotalAndTotal();
        });

        shippingMethods.forEach(function(method) {
            method.addEventListener('change', function() {
                shippingCost = parseInt(this.value);
                updateSubtotalAndTotal();
            });
        });

        // Initial update
        updateSubtotalAndTotal();
    });
</script>

        @if (session('success'))
            {
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Success...",
                    text: "Your order have been success",
                });
            </script>
            }
        @endif
        @if (session('error'))
            {
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                    footer: '<a href="#">Why do I have this issue?</a>'
                });
            </script>
            }
        @endif
{{-- main js end --}}

    <script type="text/javascript" id="woo-variation-swatches-js-extra">
        /* <![CDATA[ */
        var woo_variation_swatches_options = {
            "show_variation_label": "1",
            "clear_on_reselect": "",
            "variation_label_separator": ":",
            "is_mobile": "",
            "show_variation_stock": "",
            "stock_label_threshold": "5",
            "cart_redirect_after_add": "no",
            "enable_ajax_add_to_cart": "yes",
            "cart_url": "https:\/\/baharicolor.online\/cart\/",
            "is_cart": ""
        };
        /* ]]> */
    </script>

    <script type="text/javascript" id="flatsome-js-js-extra">
        /* <![CDATA[ */
        var flatsomeVars = {
            "ajaxurl": "https:\/\/baharicolor.online\/wp-admin\/admin-ajax.php",
            "rtl": "",
            "sticky_height": "70",
            "lightbox": {
                "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
                "close_btn_inside": false
            },
            "user": {
                "can_edit_pages": false
            }
        };
        /* ]]> */
    </script>

    <script type="text/javascript" id="jetpack-stats-js-after">
        /* <![CDATA[ */
        _stq = window._stq || [];
        _stq.push(["view", JSON.parse(
            "{\"v\":\"ext\",\"blog\":\"233461444\",\"post\":\"2325\",\"tz\":\"6\",\"srv\":\"baharicolor.online\",\"j\":\"1:13.4.3\"}"
            )]);
        _stq.push(["clickTrackerInit", "233461444", "2325"]);
        /* ]]> */
    </script>
    <script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_variation_params = {
            "wc_ajax_url": "\/step\/silk-sharee\/?wc-ajax=%%endpoint%%&wcf_checkout_id=2325",
            "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
            "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
            "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{ asset('landingpage/sharee') }}/wp-content/plugins/pro-elements/assets/js/webpack-pro.runtime.min08e6.js?ver=3.21.2"
        id="elementor-pro-webpack-runtime-js"></script>
    <script type="text/javascript" src="{{ asset('landingpage/sharee') }}/wp-content/plugins/elementor/assets/js/webpack.runtime.min63aa.js?ver=3.21.5"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="{{ asset('landingpage/sharee') }}/wp-content/plugins/elementor/assets/js/frontend-modules.min63aa.js?ver=3.21.5"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" id="elementor-pro-frontend-js-before">
        /* <![CDATA[ */
        var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/baharicolor.online\/wp-admin\/admin-ajax.php",
            "nonce": "a0f15a11d7",
            "urls": {
                "assets": "https:\/\/baharicolor.online\/wp-content\/plugins\/pro-elements\/assets\/",
                "rest": "https:\/\/baharicolor.online\/wp-json\/"
            },
            "shareButtonsNetworks": {
                "facebook": {
                    "title": "Facebook",
                    "has_counter": true
                },
                "twitter": {
                    "title": "Twitter"
                },
                "linkedin": {
                    "title": "LinkedIn",
                    "has_counter": true
                },
                "pinterest": {
                    "title": "Pinterest",
                    "has_counter": true
                },
                "reddit": {
                    "title": "Reddit",
                    "has_counter": true
                },
                "vk": {
                    "title": "VK",
                    "has_counter": true
                },
                "odnoklassniki": {
                    "title": "OK",
                    "has_counter": true
                },
                "tumblr": {
                    "title": "Tumblr"
                },
                "digg": {
                    "title": "Digg"
                },
                "skype": {
                    "title": "Skype"
                },
                "stumbleupon": {
                    "title": "StumbleUpon",
                    "has_counter": true
                },
                "mix": {
                    "title": "Mix"
                },
                "telegram": {
                    "title": "Telegram"
                },
                "pocket": {
                    "title": "Pocket",
                    "has_counter": true
                },
                "xing": {
                    "title": "XING",
                    "has_counter": true
                },
                "whatsapp": {
                    "title": "WhatsApp"
                },
                "email": {
                    "title": "Email"
                },
                "print": {
                    "title": "Print"
                },
                "x-twitter": {
                    "title": "X"
                },
                "threads": {
                    "title": "Threads"
                }
            },
            "woocommerce": {
                "menu_cart": {
                    "cart_page_url": "https:\/\/baharicolor.online\/cart\/",
                    "checkout_page_url": "https:\/\/baharicolor.online\/checkout\/",
                    "fragments_nonce": "be5424afce"
                },
                "productAddedToCart": true
            },
            "facebook_sdk": {
                "lang": "en_US",
                "app_id": ""
            },
            "lottie": {
                "defaultAnimationUrl": "https:\/\/baharicolor.online\/wp-content\/plugins\/pro-elements\/modules\/lottie\/assets\/animations\/default.json"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('landingpage/sharee') }}/wp-content/plugins/pro-elements/assets/js/frontend.min08e6.js?ver=3.21.2"
        id="elementor-pro-frontend-js"></script>
    <script type="text/javascript"
        src="{{ asset('landingpage/sharee') }}/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script type="text/javascript" src="{{ asset('landingpage/sharee') }}/wp-content/plugins/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js">
    </script>

    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.21.5",
            "is_static": false,
            "experimentalFeatures": {
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "e_font_icon_svg": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "e_swiper_latest": true,
                "container_grid": true,
                "theme_builder_v2": true,
                "home_screen": true,
                "ai-layout": true,
                "landing-pages": true,
                "display-conditions": true,
                "form-submissions": true,
                "taxonomy-filter": true
            },
            "urls": {
                "assets": "https:\/\/baharicolor.online\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description",
                "woocommerce_notices_elements": []
            },
            "post": {
                "id": 2325,
                "title": "silk-Sharee%20-%20Bahari%20Color",
                "excerpt": "",
                "featuredImage": false
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('landingpage/sharee') }}/wp-content/plugins/elementor/assets/js/frontend.min63aa.js?ver=3.21.5"
        id="elementor-frontend-js"></script>
    <script type="text/javascript"
        src="{{ asset('landingpage/sharee') }}/wp-content/plugins/pro-elements/assets/js/elements-handlers.min08e6.js?ver=3.21.2"
        id="pro-elements-handlers-js"></script>

</body>
</html>
