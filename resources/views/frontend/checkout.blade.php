<html class="floating-labels">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="{{ $domain }} - Thanh toán đơn hàng">
    <title>{{ $domain }} - Thanh toán đơn hàng</title>

    <link rel="shortcut icon"
        href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/checkout_favicon.ico?1710378319730"
        type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css">

    <link rel="stylesheet" href="https://dola-watch.mysapo.net/dist/css/checkout.vendor.min.css?v=4fcd86c">


    <link rel="stylesheet" href="https://dola-watch.mysapo.net/dist/css/checkout.min.css?v=98da546">

    <!-- Begin checkout custom css -->
    <style>

    </style>
    <!-- End checkout custom css -->

    <script src="//bizweb.dktcdn.net/assets/themes_support/libphonenumber-v3.2.30.min.js?1710378319730"></script>

    <script src="https://dola-watch.mysapo.net/dist/js/checkout.vendor.min.js?v=11006c9"></script>



    <script src="https://dola-watch.mysapo.net/dist/js/checkout.min.js?v=4cdb0f8"></script>



    <script>
        var Bizweb = Bizweb || {};
        Bizweb.id = '487743';
        Bizweb.store = 'dola-watch.mysapo.net';

        Bizweb.template = 'checkout';
        Bizweb.Checkout = Bizweb.Checkout || {};
    </script>

    <script>
        window.BizwebAnalytics = window.BizwebAnalytics || {};
        window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
        window.BizwebAnalytics.meta.currency = 'VND';
        window.BizwebAnalytics.tracking_url = '/s';
        var meta = {};


        for (var attr in meta) {
            window.BizwebAnalytics.meta[attr] = meta[attr];
        }
    </script>


    <script src="https://dola-watch.mysapo.net/dist/js/stats.min.js?v=96f2ff2"></script>
    <script async="" src="//bizweb.dktcdn.net/web/assets/lib/js/fp.v3.3.0.min.js"></script>


    <style data-jss="" data-meta="MuiDialog">
        @media print {
            .MuiDialog-root {
                position: absolute !important;
            }
        }

        .MuiDialog-scrollPaper {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .MuiDialog-scrollBody {
            overflow-x: hidden;
            overflow-y: auto;
            text-align: center;
        }

        .MuiDialog-scrollBody:after {
            width: 0;
            height: 100%;
            content: "";
            display: inline-block;
            vertical-align: middle;
        }

        .MuiDialog-container {
            height: 100%;
            outline: 0;
        }

        @media print {
            .MuiDialog-container {
                height: auto;
            }
        }

        .MuiDialog-paper {
            margin: 32px;
            position: relative;
            overflow-y: auto;
        }

        @media print {
            .MuiDialog-paper {
                box-shadow: none;
                overflow-y: visible;
            }
        }

        .MuiDialog-paperScrollPaper {
            display: flex;
            max-height: calc(100% - 64px);
            flex-direction: column;
        }

        .MuiDialog-paperScrollBody {
            display: inline-block;
            text-align: left;
            vertical-align: middle;
        }

        .MuiDialog-paperWidthFalse {
            max-width: calc(100% - 64px);
        }

        .MuiDialog-paperWidthXs {
            max-width: 444px;
        }

        @media (max-width:507.95px) {
            .MuiDialog-paperWidthXs.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthSm {
            max-width: 600px;
        }

        @media (max-width:663.95px) {
            .MuiDialog-paperWidthSm.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthMd {
            max-width: 960px;
        }

        @media (max-width:1023.95px) {
            .MuiDialog-paperWidthMd.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthLg {
            max-width: 1280px;
        }

        @media (max-width:1343.95px) {
            .MuiDialog-paperWidthLg.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthXl {
            max-width: 1920px;
        }

        @media (max-width:1983.95px) {
            .MuiDialog-paperWidthXl.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperFullWidth {
            width: calc(100% - 64px);
        }

        .MuiDialog-paperFullScreen {
            width: 100%;
            height: 100%;
            margin: 0;
            max-width: 100%;
            max-height: none;
            border-radius: 0;
        }

        .MuiDialog-paperFullScreen.MuiDialog-paperScrollBody {
            margin: 0;
            max-width: 100%;
        }
    </style>
    <style>
        .swal2-popup.swal2-toast {
            box-sizing: border-box;
            grid-column: 1/4 !important;
            grid-row: 1/4 !important;
            grid-template-columns: min-content auto min-content;
            padding: 1em;
            overflow-y: hidden;
            background: #fff;
            box-shadow: 0 0 1px rgba(0, 0, 0, .075), 0 1px 2px rgba(0, 0, 0, .075), 1px 2px 4px rgba(0, 0, 0, .075), 1px 3px 8px rgba(0, 0, 0, .075), 2px 4px 16px rgba(0, 0, 0, .075);
            pointer-events: all
        }

        .swal2-popup.swal2-toast>* {
            grid-column: 2
        }

        .swal2-popup.swal2-toast .swal2-title {
            margin: .5em 1em;
            padding: 0;
            font-size: 1em;
            text-align: initial
        }

        .swal2-popup.swal2-toast .swal2-loading {
            justify-content: center
        }

        .swal2-popup.swal2-toast .swal2-input {
            height: 2em;
            margin: .5em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-validation-message {
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-footer {
            margin: .5em 0 0;
            padding: .5em 0 0;
            font-size: .8em
        }

        .swal2-popup.swal2-toast .swal2-close {
            grid-column: 3/3;
            grid-row: 1/99;
            align-self: center;
            width: .8em;
            height: .8em;
            margin: 0;
            font-size: 2em
        }

        .swal2-popup.swal2-toast .swal2-html-container {
            margin: .5em 1em;
            padding: 0;
            overflow: initial;
            font-size: 1em;
            text-align: initial
        }

        .swal2-popup.swal2-toast .swal2-html-container:empty {
            padding: 0
        }

        .swal2-popup.swal2-toast .swal2-loader {
            grid-column: 1;
            grid-row: 1/99;
            align-self: center;
            width: 2em;
            height: 2em;
            margin: .25em
        }

        .swal2-popup.swal2-toast .swal2-icon {
            grid-column: 1;
            grid-row: 1/99;
            align-self: center;
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0 .5em 0 0
        }

        .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
            display: flex;
            align-items: center;
            font-size: 1.8em;
            font-weight: bold
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            top: .875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: .3125em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: .3125em
        }

        .swal2-popup.swal2-toast .swal2-actions {
            justify-content: flex-start;
            height: auto;
            margin: 0;
            margin-top: .5em;
            padding: 0 .5em
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: .25em .5em;
            padding: .4em .6em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 1.6em;
            height: 3em;
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -0.8em;
            left: -0.5em;
            transform: rotate(-45deg);
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -0.25em;
            left: .9375em;
            transform-origin: 0 1.5em;
            border-radius: 0 4em 4em 0
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
            height: .3125em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
            animation: swal2-toast-animate-success-line-tip .75s
        }

        .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
            animation: swal2-toast-animate-success-line-long .75s
        }

        .swal2-popup.swal2-toast.swal2-show {
            animation: swal2-toast-show .5s
        }

        .swal2-popup.swal2-toast.swal2-hide {
            animation: swal2-toast-hide .1s forwards
        }

        div:where(.swal2-container) {
            display: grid;
            position: fixed;
            z-index: 1060;
            inset: 0;
            box-sizing: border-box;
            grid-template-areas: "top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";
            grid-template-rows: minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);
            height: 100%;
            padding: .625em;
            overflow-x: hidden;
            transition: background-color .1s;
            -webkit-overflow-scrolling: touch
        }

        div:where(.swal2-container).swal2-backdrop-show,
        div:where(.swal2-container).swal2-noanimation {
            background: rgba(0, 0, 0, .4)
        }

        div:where(.swal2-container).swal2-backdrop-hide {
            background: rgba(0, 0, 0, 0) !important
        }

        div:where(.swal2-container).swal2-top-start,
        div:where(.swal2-container).swal2-center-start,
        div:where(.swal2-container).swal2-bottom-start {
            grid-template-columns: minmax(0, 1fr) auto auto
        }

        div:where(.swal2-container).swal2-top,
        div:where(.swal2-container).swal2-center,
        div:where(.swal2-container).swal2-bottom {
            grid-template-columns: auto minmax(0, 1fr) auto
        }

        div:where(.swal2-container).swal2-top-end,
        div:where(.swal2-container).swal2-center-end,
        div:where(.swal2-container).swal2-bottom-end {
            grid-template-columns: auto auto minmax(0, 1fr)
        }

        div:where(.swal2-container).swal2-top-start>.swal2-popup {
            align-self: start
        }

        div:where(.swal2-container).swal2-top>.swal2-popup {
            grid-column: 2;
            align-self: start;
            justify-self: center
        }

        div:where(.swal2-container).swal2-top-end>.swal2-popup,
        div:where(.swal2-container).swal2-top-right>.swal2-popup {
            grid-column: 3;
            align-self: start;
            justify-self: end
        }

        div:where(.swal2-container).swal2-center-start>.swal2-popup,
        div:where(.swal2-container).swal2-center-left>.swal2-popup {
            grid-row: 2;
            align-self: center
        }

        div:where(.swal2-container).swal2-center>.swal2-popup {
            grid-column: 2;
            grid-row: 2;
            align-self: center;
            justify-self: center
        }

        div:where(.swal2-container).swal2-center-end>.swal2-popup,
        div:where(.swal2-container).swal2-center-right>.swal2-popup {
            grid-column: 3;
            grid-row: 2;
            align-self: center;
            justify-self: end
        }

        div:where(.swal2-container).swal2-bottom-start>.swal2-popup,
        div:where(.swal2-container).swal2-bottom-left>.swal2-popup {
            grid-column: 1;
            grid-row: 3;
            align-self: end
        }

        div:where(.swal2-container).swal2-bottom>.swal2-popup {
            grid-column: 2;
            grid-row: 3;
            justify-self: center;
            align-self: end
        }

        div:where(.swal2-container).swal2-bottom-end>.swal2-popup,
        div:where(.swal2-container).swal2-bottom-right>.swal2-popup {
            grid-column: 3;
            grid-row: 3;
            align-self: end;
            justify-self: end
        }

        div:where(.swal2-container).swal2-grow-row>.swal2-popup,
        div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup {
            grid-column: 1/4;
            width: 100%
        }

        div:where(.swal2-container).swal2-grow-column>.swal2-popup,
        div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup {
            grid-row: 1/4;
            align-self: stretch
        }

        div:where(.swal2-container).swal2-no-transition {
            transition: none !important
        }

        div:where(.swal2-container) div:where(.swal2-popup) {
            display: none;
            position: relative;
            box-sizing: border-box;
            grid-template-columns: minmax(0, 100%);
            width: 32em;
            max-width: 100%;
            padding: 0 0 1.25em;
            border: none;
            border-radius: 5px;
            background: #fff;
            color: #545454;
            font-family: inherit;
            font-size: 1rem
        }

        div:where(.swal2-container) div:where(.swal2-popup):focus {
            outline: none
        }

        div:where(.swal2-container) div:where(.swal2-popup).swal2-loading {
            overflow-y: hidden
        }

        div:where(.swal2-container) h2:where(.swal2-title) {
            position: relative;
            max-width: 100%;
            margin: 0;
            padding: .8em 1em 0;
            color: inherit;
            font-size: 1.875em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
            word-wrap: break-word
        }

        div:where(.swal2-container) div:where(.swal2-actions) {
            display: flex;
            z-index: 1;
            box-sizing: border-box;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: auto;
            margin: 1.25em auto 0;
            padding: 0
        }

        div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4
        }

        div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1))
        }

        div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2))
        }

        div:where(.swal2-container) div:where(.swal2-loader) {
            display: none;
            align-items: center;
            justify-content: center;
            width: 2.2em;
            height: 2.2em;
            margin: 0 1.875em;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            border-width: .25em;
            border-style: solid;
            border-radius: 100%;
            border-color: #2778c4 rgba(0, 0, 0, 0) #2778c4 rgba(0, 0, 0, 0)
        }

        div:where(.swal2-container) button:where(.swal2-styled) {
            margin: .3125em;
            padding: .625em 1.1em;
            transition: box-shadow .1s;
            box-shadow: 0 0 0 3px rgba(0, 0, 0, 0);
            font-weight: 500
        }

        div:where(.swal2-container) button:where(.swal2-styled):not([disabled]) {
            cursor: pointer
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #7066e0;
            color: #fff;
            font-size: 1em
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm:focus {
            box-shadow: 0 0 0 3px rgba(112, 102, 224, .5)
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-deny {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #dc3741;
            color: #fff;
            font-size: 1em
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-deny:focus {
            box-shadow: 0 0 0 3px rgba(220, 55, 65, .5)
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #6e7881;
            color: #fff;
            font-size: 1em
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel:focus {
            box-shadow: 0 0 0 3px rgba(110, 120, 129, .5)
        }

        div:where(.swal2-container) button:where(.swal2-styled).swal2-default-outline:focus {
            box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
        }

        div:where(.swal2-container) button:where(.swal2-styled):focus {
            outline: none
        }

        div:where(.swal2-container) button:where(.swal2-styled)::-moz-focus-inner {
            border: 0
        }

        div:where(.swal2-container) div:where(.swal2-footer) {
            margin: 1em 0 0;
            padding: 1em 1em 0;
            border-top: 1px solid #eee;
            color: inherit;
            font-size: 1em;
            text-align: center
        }

        div:where(.swal2-container) .swal2-timer-progress-bar-container {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            grid-column: auto !important;
            overflow: hidden;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px
        }

        div:where(.swal2-container) div:where(.swal2-timer-progress-bar) {
            width: 100%;
            height: .25em;
            background: rgba(0, 0, 0, .2)
        }

        div:where(.swal2-container) img:where(.swal2-image) {
            max-width: 100%;
            margin: 2em auto 1em
        }

        div:where(.swal2-container) button:where(.swal2-close) {
            z-index: 2;
            align-items: center;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            margin-top: 0;
            margin-right: 0;
            margin-bottom: -1.2em;
            padding: 0;
            overflow: hidden;
            transition: color .1s, box-shadow .1s;
            border: none;
            border-radius: 5px;
            background: rgba(0, 0, 0, 0);
            color: #ccc;
            font-family: monospace;
            font-size: 2.5em;
            cursor: pointer;
            justify-self: end
        }

        div:where(.swal2-container) button:where(.swal2-close):hover {
            transform: none;
            background: rgba(0, 0, 0, 0);
            color: #f27474
        }

        div:where(.swal2-container) button:where(.swal2-close):focus {
            outline: none;
            box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5)
        }

        div:where(.swal2-container) button:where(.swal2-close)::-moz-focus-inner {
            border: 0
        }

        div:where(.swal2-container) .swal2-html-container {
            z-index: 1;
            justify-content: center;
            margin: 1em 1.6em .3em;
            padding: 0;
            overflow: auto;
            color: inherit;
            font-size: 1.125em;
            font-weight: normal;
            line-height: normal;
            text-align: center;
            word-wrap: break-word;
            word-break: break-word
        }

        div:where(.swal2-container) input:where(.swal2-input),
        div:where(.swal2-container) input:where(.swal2-file),
        div:where(.swal2-container) textarea:where(.swal2-textarea),
        div:where(.swal2-container) select:where(.swal2-select),
        div:where(.swal2-container) div:where(.swal2-radio),
        div:where(.swal2-container) label:where(.swal2-checkbox) {
            margin: 1em 2em 3px
        }

        div:where(.swal2-container) input:where(.swal2-input),
        div:where(.swal2-container) input:where(.swal2-file),
        div:where(.swal2-container) textarea:where(.swal2-textarea) {
            box-sizing: border-box;
            width: auto;
            transition: border-color .1s, box-shadow .1s;
            border: 1px solid #d9d9d9;
            border-radius: .1875em;
            background: rgba(0, 0, 0, 0);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(0, 0, 0, 0);
            color: inherit;
            font-size: 1.125em
        }

        div:where(.swal2-container) input:where(.swal2-input).swal2-inputerror,
        div:where(.swal2-container) input:where(.swal2-file).swal2-inputerror,
        div:where(.swal2-container) textarea:where(.swal2-textarea).swal2-inputerror {
            border-color: #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important
        }

        div:where(.swal2-container) input:where(.swal2-input):focus,
        div:where(.swal2-container) input:where(.swal2-file):focus,
        div:where(.swal2-container) textarea:where(.swal2-textarea):focus {
            border: 1px solid #b4dbed;
            outline: none;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(100, 150, 200, .5)
        }

        div:where(.swal2-container) input:where(.swal2-input)::placeholder,
        div:where(.swal2-container) input:where(.swal2-file)::placeholder,
        div:where(.swal2-container) textarea:where(.swal2-textarea)::placeholder {
            color: #ccc
        }

        div:where(.swal2-container) .swal2-range {
            margin: 1em 2em 3px;
            background: #fff
        }

        div:where(.swal2-container) .swal2-range input {
            width: 80%
        }

        div:where(.swal2-container) .swal2-range output {
            width: 20%;
            color: inherit;
            font-weight: 600;
            text-align: center
        }

        div:where(.swal2-container) .swal2-range input,
        div:where(.swal2-container) .swal2-range output {
            height: 2.625em;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em
        }

        div:where(.swal2-container) .swal2-input {
            height: 2.625em;
            padding: 0 .75em
        }

        div:where(.swal2-container) .swal2-file {
            width: 75%;
            margin-right: auto;
            margin-left: auto;
            background: rgba(0, 0, 0, 0);
            font-size: 1.125em
        }

        div:where(.swal2-container) .swal2-textarea {
            height: 6.75em;
            padding: .75em
        }

        div:where(.swal2-container) .swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            background: rgba(0, 0, 0, 0);
            color: inherit;
            font-size: 1.125em
        }

        div:where(.swal2-container) .swal2-radio,
        div:where(.swal2-container) .swal2-checkbox {
            align-items: center;
            justify-content: center;
            background: #fff;
            color: inherit
        }

        div:where(.swal2-container) .swal2-radio label,
        div:where(.swal2-container) .swal2-checkbox label {
            margin: 0 .6em;
            font-size: 1.125em
        }

        div:where(.swal2-container) .swal2-radio input,
        div:where(.swal2-container) .swal2-checkbox input {
            flex-shrink: 0;
            margin: 0 .4em
        }

        div:where(.swal2-container) label:where(.swal2-input-label) {
            display: flex;
            justify-content: center;
            margin: 1em auto 0
        }

        div:where(.swal2-container) div:where(.swal2-validation-message) {
            align-items: center;
            justify-content: center;
            margin: 1em 0 0;
            padding: .625em;
            overflow: hidden;
            background: #f0f0f0;
            color: #666;
            font-size: 1em;
            font-weight: 300
        }

        div:where(.swal2-container) div:where(.swal2-validation-message)::before {
            content: "!";
            display: inline-block;
            width: 1.5em;
            min-width: 1.5em;
            height: 1.5em;
            margin: 0 .625em;
            border-radius: 50%;
            background-color: #f27474;
            color: #fff;
            font-weight: 600;
            line-height: 1.5em;
            text-align: center
        }

        div:where(.swal2-container) .swal2-progress-steps {
            flex-wrap: wrap;
            align-items: center;
            max-width: 100%;
            margin: 1.25em auto;
            padding: 0;
            background: rgba(0, 0, 0, 0);
            font-weight: 600
        }

        div:where(.swal2-container) .swal2-progress-steps li {
            display: inline-block;
            position: relative
        }

        div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step {
            z-index: 20;
            flex-shrink: 0;
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #2778c4;
            color: #fff;
            line-height: 2em;
            text-align: center
        }

        div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
            background: #2778c4
        }

        div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
            background: #add8e6;
            color: #fff
        }

        div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
            background: #add8e6
        }

        div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step-line {
            z-index: 10;
            flex-shrink: 0;
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #2778c4
        }

        div:where(.swal2-icon) {
            position: relative;
            box-sizing: content-box;
            justify-content: center;
            width: 5em;
            height: 5em;
            margin: 2.5em auto .6em;
            border: 0.25em solid rgba(0, 0, 0, 0);
            border-radius: 50%;
            border-color: #000;
            font-family: inherit;
            line-height: 5em;
            cursor: default;
            user-select: none
        }

        div:where(.swal2-icon) .swal2-icon-content {
            display: flex;
            align-items: center;
            font-size: 3.75em
        }

        div:where(.swal2-icon).swal2-error {
            border-color: #f27474;
            color: #f27474
        }

        div:where(.swal2-icon).swal2-error .swal2-x-mark {
            position: relative;
            flex-grow: 1
        }

        div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474
        }

        div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: 1.0625em;
            transform: rotate(45deg)
        }

        div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: 1em;
            transform: rotate(-45deg)
        }

        div:where(.swal2-icon).swal2-error.swal2-icon-show {
            animation: swal2-animate-error-icon .5s
        }

        div:where(.swal2-icon).swal2-error.swal2-icon-show .swal2-x-mark {
            animation: swal2-animate-error-x-mark .5s
        }

        div:where(.swal2-icon).swal2-warning {
            border-color: #facea8;
            color: #f8bb86
        }

        div:where(.swal2-icon).swal2-warning.swal2-icon-show {
            animation: swal2-animate-error-icon .5s
        }

        div:where(.swal2-icon).swal2-warning.swal2-icon-show .swal2-icon-content {
            animation: swal2-animate-i-mark .5s
        }

        div:where(.swal2-icon).swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee
        }

        div:where(.swal2-icon).swal2-info.swal2-icon-show {
            animation: swal2-animate-error-icon .5s
        }

        div:where(.swal2-icon).swal2-info.swal2-icon-show .swal2-icon-content {
            animation: swal2-animate-i-mark .8s
        }

        div:where(.swal2-icon).swal2-question {
            border-color: #c9dae1;
            color: #87adbd
        }

        div:where(.swal2-icon).swal2-question.swal2-icon-show {
            animation: swal2-animate-error-icon .5s
        }

        div:where(.swal2-icon).swal2-question.swal2-icon-show .swal2-icon-content {
            animation: swal2-animate-question-mark .8s
        }

        div:where(.swal2-icon).swal2-success {
            border-color: #a5dc86;
            color: #a5dc86
        }

        div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            transform: rotate(45deg);
            border-radius: 50%
        }

        div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -0.4375em;
            left: -2.0635em;
            transform: rotate(-45deg);
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em
        }

        div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -0.6875em;
            left: 1.875em;
            transform: rotate(-45deg);
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0
        }

        div:where(.swal2-icon).swal2-success .swal2-success-ring {
            position: absolute;
            z-index: 2;
            top: -0.25em;
            left: -0.25em;
            box-sizing: content-box;
            width: 100%;
            height: 100%;
            border: .25em solid rgba(165, 220, 134, .3);
            border-radius: 50%
        }

        div:where(.swal2-icon).swal2-success .swal2-success-fix {
            position: absolute;
            z-index: 1;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            transform: rotate(-45deg)
        }

        div:where(.swal2-icon).swal2-success [class^=swal2-success-line] {
            display: block;
            position: absolute;
            z-index: 2;
            height: .3125em;
            border-radius: .125em;
            background-color: #a5dc86
        }

        div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=tip] {
            top: 2.875em;
            left: .8125em;
            width: 1.5625em;
            transform: rotate(45deg)
        }

        div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=long] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            transform: rotate(-45deg)
        }

        div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-tip {
            animation: swal2-animate-success-line-tip .75s
        }

        div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-long {
            animation: swal2-animate-success-line-long .75s
        }

        div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-circular-line-right {
            animation: swal2-rotate-success-circular-line 4.25s ease-in
        }

        [class^=swal2] {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        .swal2-show {
            animation: swal2-show .3s
        }

        .swal2-hide {
            animation: swal2-hide .15s forwards
        }

        .swal2-noanimation {
            transition: none
        }

        .swal2-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll
        }

        .swal2-rtl .swal2-close {
            margin-right: initial;
            margin-left: 0
        }

        .swal2-rtl .swal2-timer-progress-bar {
            right: 0;
            left: auto
        }

        @keyframes swal2-toast-show {
            0% {
                transform: translateY(-0.625em) rotateZ(2deg)
            }

            33% {
                transform: translateY(0) rotateZ(-2deg)
            }

            66% {
                transform: translateY(0.3125em) rotateZ(2deg)
            }

            100% {
                transform: translateY(0) rotateZ(0deg)
            }
        }

        @keyframes swal2-toast-hide {
            100% {
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @keyframes swal2-toast-animate-success-line-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -0.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @keyframes swal2-toast-animate-success-line-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @keyframes swal2-show {
            0% {
                transform: scale(0.7)
            }

            45% {
                transform: scale(1.05)
            }

            80% {
                transform: scale(0.95)
            }

            100% {
                transform: scale(1)
            }
        }

        @keyframes swal2-hide {
            0% {
                transform: scale(1);
                opacity: 1
            }

            100% {
                transform: scale(0.5);
                opacity: 0
            }
        }

        @keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -0.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .8125em;
                width: 1.5625em
            }
        }

        @keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @keyframes swal2-rotate-success-circular-line {
            0% {
                transform: rotate(-45deg)
            }

            5% {
                transform: rotate(-45deg)
            }

            12% {
                transform: rotate(-405deg)
            }

            100% {
                transform: rotate(-405deg)
            }
        }

        @keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                transform: scale(0.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                transform: scale(0.4);
                opacity: 0
            }

            80% {
                margin-top: -0.375em;
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-icon {
            0% {
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @keyframes swal2-rotate-loading {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes swal2-animate-question-mark {
            0% {
                transform: rotateY(-360deg)
            }

            100% {
                transform: rotateY(0)
            }
        }

        @keyframes swal2-animate-i-mark {
            0% {
                transform: rotateZ(45deg);
                opacity: 0
            }

            25% {
                transform: rotateZ(-25deg);
                opacity: .4
            }

            50% {
                transform: rotateZ(15deg);
                opacity: .8
            }

            75% {
                transform: rotateZ(-5deg);
                opacity: 1
            }

            100% {
                transform: rotateX(0);
                opacity: 1
            }
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow: hidden
        }

        body.swal2-height-auto {
            height: auto !important
        }

        body.swal2-no-backdrop .swal2-container {
            background-color: rgba(0, 0, 0, 0) !important;
            pointer-events: none
        }

        body.swal2-no-backdrop .swal2-container .swal2-popup {
            pointer-events: all
        }

        body.swal2-no-backdrop .swal2-container .swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, .4)
        }

        @media print {
            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
                overflow-y: scroll !important
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
                display: none
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
                position: static !important
            }
        }

        body.swal2-toast-shown .swal2-container {
            box-sizing: border-box;
            width: 360px;
            max-width: 100%;
            background-color: rgba(0, 0, 0, 0);
            pointer-events: none
        }

        body.swal2-toast-shown .swal2-container.swal2-top {
            inset: 0 auto auto 50%;
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-top-end,
        body.swal2-toast-shown .swal2-container.swal2-top-right {
            inset: 0 0 auto auto
        }

        body.swal2-toast-shown .swal2-container.swal2-top-start,
        body.swal2-toast-shown .swal2-container.swal2-top-left {
            inset: 0 auto auto 0
        }

        body.swal2-toast-shown .swal2-container.swal2-center-start,
        body.swal2-toast-shown .swal2-container.swal2-center-left {
            inset: 50% auto auto 0;
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center {
            inset: 50% auto auto 50%;
            transform: translate(-50%, -50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center-end,
        body.swal2-toast-shown .swal2-container.swal2-center-right {
            inset: 50% 0 auto auto;
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-start,
        body.swal2-toast-shown .swal2-container.swal2-bottom-left {
            inset: auto auto 0 0
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom {
            inset: auto auto 0 50%;
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-end,
        body.swal2-toast-shown .swal2-container.swal2-bottom-right {
            inset: auto 0 0 auto
        }
    </style>
</head>

<body data-no-turbolink="">

    <header class="banner">
        <div class="wrap">
            <div class="logo logo--center">

                <a href="/">
                    <img class="logo__image  logo__image--medium " alt="Dola Watch"
                        src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/logo.png?1710378319730">
                </a>

            </div>
        </div>
    </header>
    <aside>
        <button class="order-summary-toggle" data-toggle="#order-summary"
            data-toggle-class="order-summary--is-collapsed">
            <span class="wrap">
                <span class="order-summary-toggle__inner">
                    <span class="order-summary-toggle__text expandable">
                        Đơn hàng (2 sản phẩm)
                    </span>
                    <span class="order-summary-toggle__total-recap" data-bind="getTextTotalPrice()">13.680.000₫</span>
                </span>
            </span>
        </button>
    </aside>




    <div data-tg-refresh="checkout" id="checkout" class="content" data-select2-id="select2-data-checkout">
        <form id="checkoutForm" method="post"
            data-define="{
				loadingShippingErrorMessage: 'Không thể load phí vận chuyển. Vui lòng thử lại',
				loadingReductionCodeErrorMessage: 'Có lỗi xảy ra khi áp dụng khuyến mãi. Vui lòng thử lại',
				submitingCheckoutErrorMessage: 'Có lỗi xảy ra khi xử lý. Vui lòng thử lại',
				requireShipping: true,
				requireDistrict: false,
				requireWard: false,
				shouldSaveCheckoutAbandon: true}"
            action="/checkout/1041d1c5a4cf4d21ba6e7ee372094961" data-bind-event-submit="handleCheckoutSubmit(event)"
            data-bind-event-keypress="handleCheckoutKeyPress(event)"
            data-bind-event-change="handleCheckoutChange(event)" data-select2-id="select2-data-checkoutForm">
            <input type="hidden" name="_method" value="patch">
            <div class="wrap" data-select2-id="select2-data-215-dt4t">
                <main class="main">
                    <header class="main__header">
                        <div class="logo logo--center">

                            <a href="/">
                                <img class="logo__image  logo__image--medium " alt="Dola Watch"
                                    src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/logo.png?1710378319730">
                            </a>

                        </div>
                    </header>
                    <div class="main__content" data-select2-id="select2-data-214-mefv">
                        <article class="animate-floating-labels row">
                            <div class="col col--two">
                                <section class="section" data-select2-id="select2-data-213-zzyp">
                                    <div class="section__header">
                                        <div class="layout-flex">
                                            <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                                <i
                                                    class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>

                                                Thông tin nhận hàng

                                            </h2>


                                            <a
                                                href="/account/login?returnUrl=/checkout/1041d1c5a4cf4d21ba6e7ee372094961">
                                               
                                                <span>Đăng nhập </span>
                                            </a>


                                        </div>
                                    </div>
                                    <div class="section__content" data-select2-id="select2-data-212-tafb">
                                        <div class="fieldset">




                                            <div class="field " data-bind-class="{'field--show-floating-label': email}">
                                                <div class="field__input-wrapper">
                                                    <label for="email" class="field__label">
                                                        Email
                                                    </label>
                                                    <input name="email" id="email" type="email"
                                                        class="field__input" data-bind="email" value="">
                                                </div>

                                            </div>



                                            <div class="field "
                                                data-bind-class="{'field--show-floating-label': billing.name}">
                                                <div class="field__input-wrapper">
                                                    <label for="billingName" class="field__label">Họ và tên</label>
                                                    <input name="billingName" id="billingName" type="text"
                                                        class="field__input" data-bind="billing.name" value="">
                                                </div>

                                            </div>

                                            <div class="field "
                                                data-bind-class="{'field--show-floating-label': billing.phone}">
                                                <div class="field__input-wrapper field__input-wrapper--connected"
                                                    data-define="{phoneInput: new InputPhone(this)}">
                                                    <label for="billingPhone" class="field__label">
                                                        Số điện thoại (tùy chọn)
                                                    </label>
                                                    <input name="billingPhone" id="billingPhone" type="tel"
                                                        class="field__input" data-bind="billing.phone"
                                                        value="">
                                                    <div class="field__input-phone-region-wrapper">
                                                        <select
                                                            class="field__input select-phone-region select2-hidden-accessible"
                                                            name="billingPhoneRegion" data-init-value="VN"
                                                            data-select2-id="select2-data-4-dqq1" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="AF"
                                                                data-select2-id="select2-data-6-tccg">Afghanistan (+93)
                                                            </option>
                                                            <option value="AL"
                                                                data-select2-id="select2-data-7-7jtr">Albania (+355)
                                                            </option>
                                                            <option value="DZ"
                                                                data-select2-id="select2-data-8-ve0v">Algeria (+213)
                                                            </option>
                                                            <option value="AD"
                                                                data-select2-id="select2-data-9-obla">Andorra (+376)
                                                            </option>
                                                            <option value="AO"
                                                                data-select2-id="select2-data-10-l0ty">Angola (+244)
                                                            </option>
                                                            <option value="AG"
                                                                data-select2-id="select2-data-11-r2du">Antigua and
                                                                Barbuda (+1)</option>
                                                            <option value="AR"
                                                                data-select2-id="select2-data-12-tskr">Argentina (+54)
                                                            </option>
                                                            <option value="AM"
                                                                data-select2-id="select2-data-13-uc3w">Armenia (+374)
                                                            </option>
                                                            <option value="AU"
                                                                data-select2-id="select2-data-14-wkcd">Australia (+61)
                                                            </option>
                                                            <option value="AT"
                                                                data-select2-id="select2-data-15-6n36">Austria (+43)
                                                            </option>
                                                            <option value="AZ"
                                                                data-select2-id="select2-data-16-3ouj">Azerbaijan
                                                                (+994)</option>
                                                            <option value="BS"
                                                                data-select2-id="select2-data-17-4jfm">Bahamas (+1)
                                                            </option>
                                                            <option value="BH"
                                                                data-select2-id="select2-data-18-kyxd">Bahrain (+973)
                                                            </option>
                                                            <option value="BD"
                                                                data-select2-id="select2-data-19-v1of">Bangladesh
                                                                (+880)</option>
                                                            <option value="BB"
                                                                data-select2-id="select2-data-20-s71t">Barbados (+1)
                                                            </option>
                                                            <option value="BY"
                                                                data-select2-id="select2-data-21-jpgp">Belarus (+375)
                                                            </option>
                                                            <option value="BE"
                                                                data-select2-id="select2-data-22-qhab">Belgium (+32)
                                                            </option>
                                                            <option value="BZ"
                                                                data-select2-id="select2-data-23-8ell">Belize (+501)
                                                            </option>
                                                            <option value="BJ"
                                                                data-select2-id="select2-data-24-7gmt">Benin (+229)
                                                            </option>
                                                            <option value="BT"
                                                                data-select2-id="select2-data-25-vac4">Bhutan (+975)
                                                            </option>
                                                            <option value="BO"
                                                                data-select2-id="select2-data-26-ay5v">Bolivia (+591)
                                                            </option>
                                                            <option value="BA"
                                                                data-select2-id="select2-data-27-xb8x">Bosnia and
                                                                Herzegovina (+387)</option>
                                                            <option value="BW"
                                                                data-select2-id="select2-data-28-0god">Botswana (+267)
                                                            </option>
                                                            <option value="BR"
                                                                data-select2-id="select2-data-29-7gti">Brazil (+55)
                                                            </option>
                                                            <option value="BN"
                                                                data-select2-id="select2-data-30-n2j4">Brunei (+673)
                                                            </option>
                                                            <option value="BG"
                                                                data-select2-id="select2-data-31-t154">Bulgaria (+359)
                                                            </option>
                                                            <option value="BF"
                                                                data-select2-id="select2-data-32-ij7g">Burkina Faso
                                                                (+226)</option>
                                                            <option value="BI"
                                                                data-select2-id="select2-data-33-c2e4">Burundi (+257)
                                                            </option>
                                                            <option value="KH"
                                                                data-select2-id="select2-data-34-7yev">Cambodia (+855)
                                                            </option>
                                                            <option value="CM"
                                                                data-select2-id="select2-data-35-oju2">Cameroon (+237)
                                                            </option>
                                                            <option value="CA"
                                                                data-select2-id="select2-data-36-xf3k">Canada (+1)
                                                            </option>
                                                            <option value="CV"
                                                                data-select2-id="select2-data-37-a0f1">Cape Verde
                                                                (+238)</option>
                                                            <option value="CF"
                                                                data-select2-id="select2-data-38-djao">Central African
                                                                Republic (+236)</option>
                                                            <option value="TD"
                                                                data-select2-id="select2-data-39-3l9x">Chad (+235)
                                                            </option>
                                                            <option value="CL"
                                                                data-select2-id="select2-data-40-ovw6">Chile (+56)
                                                            </option>
                                                            <option value="CO"
                                                                data-select2-id="select2-data-41-zrkj">Colombia (+57)
                                                            </option>
                                                            <option value="KM"
                                                                data-select2-id="select2-data-42-fr3e">Comoros (+269)
                                                            </option>
                                                            <option value="CG"
                                                                data-select2-id="select2-data-43-0kzd">
                                                                Congo-Brazzaville (+242)</option>
                                                            <option value="CK"
                                                                data-select2-id="select2-data-44-x0b3">Congo-Kinshasa
                                                                (+682)</option>
                                                            <option value="CR"
                                                                data-select2-id="select2-data-45-ivey">Costa Rica
                                                                (+506)</option>
                                                            <option value="CD"
                                                                data-select2-id="select2-data-46-hfrf">Côte d'Ivoire
                                                                (+243)</option>
                                                            <option value="HR"
                                                                data-select2-id="select2-data-47-kk6v">Croatia (+385)
                                                            </option>
                                                            <option value="CU"
                                                                data-select2-id="select2-data-48-o3ob">Cuba (+53)
                                                            </option>
                                                            <option value="CY"
                                                                data-select2-id="select2-data-49-yjkj">Cyprus (+357)
                                                            </option>
                                                            <option value="CZ"
                                                                data-select2-id="select2-data-50-1iu5">Czech Republic
                                                                (+420)</option>
                                                            <option value="DK"
                                                                data-select2-id="select2-data-51-nw9b">Denmark (+45)
                                                            </option>
                                                            <option value="DJ"
                                                                data-select2-id="select2-data-52-fxyk">Djibouti (+253)
                                                            </option>
                                                            <option value="DM"
                                                                data-select2-id="select2-data-53-6pi4">Dominica (+1)
                                                            </option>
                                                            <option value="DO"
                                                                data-select2-id="select2-data-54-b9r0">Dominican
                                                                Republic (+1)</option>
                                                            <option value="TL"
                                                                data-select2-id="select2-data-55-kpg6">East Timor
                                                                (+670)</option>
                                                            <option value="EC"
                                                                data-select2-id="select2-data-56-0rtk">Ecuador (+593)
                                                            </option>
                                                            <option value="EG"
                                                                data-select2-id="select2-data-57-iq7i">Egypt (+20)
                                                            </option>
                                                            <option value="SV"
                                                                data-select2-id="select2-data-58-k07d">El Salvador
                                                                (+503)</option>
                                                            <option value="GQ"
                                                                data-select2-id="select2-data-59-e8k7">Equatorial
                                                                Guinea (+240)</option>
                                                            <option value="ER"
                                                                data-select2-id="select2-data-60-3b8s">Eritrea (+291)
                                                            </option>
                                                            <option value="EE"
                                                                data-select2-id="select2-data-61-5dqv">Estonia (+372)
                                                            </option>
                                                            <option value="ET"
                                                                data-select2-id="select2-data-62-eamu">Ethiopia (+251)
                                                            </option>
                                                            <option value="FJ"
                                                                data-select2-id="select2-data-63-23g9">Fiji (+679)
                                                            </option>
                                                            <option value="FI"
                                                                data-select2-id="select2-data-64-km4q">Finland (+358)
                                                            </option>
                                                            <option value="FR"
                                                                data-select2-id="select2-data-65-thbz">France (+33)
                                                            </option>
                                                            <option value="GA"
                                                                data-select2-id="select2-data-66-szll">Gabon (+241)
                                                            </option>
                                                            <option value="GM"
                                                                data-select2-id="select2-data-67-brsi">Gambia (+220)
                                                            </option>
                                                            <option value="GE"
                                                                data-select2-id="select2-data-68-i6la">Georgia (+995)
                                                            </option>
                                                            <option value="DE"
                                                                data-select2-id="select2-data-69-hg58">Germany (+49)
                                                            </option>
                                                            <option value="GH"
                                                                data-select2-id="select2-data-70-cntq">Ghana (+233)
                                                            </option>
                                                            <option value="GR"
                                                                data-select2-id="select2-data-71-ei4h">Greece (+30)
                                                            </option>
                                                            <option value="GD"
                                                                data-select2-id="select2-data-72-jpsb">Grenada (+1)
                                                            </option>
                                                            <option value="GT"
                                                                data-select2-id="select2-data-73-73dm">Guatemala (+502)
                                                            </option>
                                                            <option value="GN"
                                                                data-select2-id="select2-data-74-s6dt">Guinea (+224)
                                                            </option>
                                                            <option value="GW"
                                                                data-select2-id="select2-data-75-7a6y">Guinea-Bissau
                                                                (+245)</option>
                                                            <option value="GY"
                                                                data-select2-id="select2-data-76-vct1">Guyana (+592)
                                                            </option>
                                                            <option value="HT"
                                                                data-select2-id="select2-data-77-e8t5">Haiti (+509)
                                                            </option>
                                                            <option value="HN"
                                                                data-select2-id="select2-data-78-en0d">Honduras (+504)
                                                            </option>
                                                            <option value="HK"
                                                                data-select2-id="select2-data-79-kvtv">Hong Kong (+852)
                                                            </option>
                                                            <option value="HU"
                                                                data-select2-id="select2-data-80-0dn2">Hungary (+36)
                                                            </option>
                                                            <option value="IS"
                                                                data-select2-id="select2-data-81-8goa">Iceland (+354)
                                                            </option>
                                                            <option value="IN"
                                                                data-select2-id="select2-data-82-3ea9">India (+91)
                                                            </option>
                                                            <option value="ID"
                                                                data-select2-id="select2-data-83-xy5f">Indonesia (+62)
                                                            </option>
                                                            <option value="IR"
                                                                data-select2-id="select2-data-84-yqc5">Iran (+98)
                                                            </option>
                                                            <option value="IQ"
                                                                data-select2-id="select2-data-85-bcd3">Iraq (+964)
                                                            </option>
                                                            <option value="IE"
                                                                data-select2-id="select2-data-86-p4a3">Ireland (+353)
                                                            </option>
                                                            <option value="IL"
                                                                data-select2-id="select2-data-87-8st7">Israel (+972)
                                                            </option>
                                                            <option value="IT"
                                                                data-select2-id="select2-data-88-w5vx">Italy (+39)
                                                            </option>
                                                            <option value="JM"
                                                                data-select2-id="select2-data-89-idsd">Jamaica (+1)
                                                            </option>
                                                            <option value="JP"
                                                                data-select2-id="select2-data-90-p0jc">Japan (Nippon)
                                                                (+81)</option>
                                                            <option value="JO"
                                                                data-select2-id="select2-data-91-1sty">Jordan (+962)
                                                            </option>
                                                            <option value="KZ"
                                                                data-select2-id="select2-data-92-5fkt">Kazakhstan (+7)
                                                            </option>
                                                            <option value="KE"
                                                                data-select2-id="select2-data-93-tkbq">Kenya (+254)
                                                            </option>
                                                            <option value="KI"
                                                                data-select2-id="select2-data-94-8a9h">Kiribati (+686)
                                                            </option>
                                                            <option value="KP"
                                                                data-select2-id="select2-data-95-ag69">North Korea
                                                                (+850)</option>
                                                            <option value="XK"
                                                                data-select2-id="select2-data-96-xpjb">Kosovo (+383)
                                                            </option>
                                                            <option value="KW"
                                                                data-select2-id="select2-data-97-z7v2">Kuwait (+965)
                                                            </option>
                                                            <option value="KG"
                                                                data-select2-id="select2-data-98-8owd">Kyrgyzstan
                                                                (+996)</option>
                                                            <option value="LA"
                                                                data-select2-id="select2-data-99-pokz">Laos (+856)
                                                            </option>
                                                            <option value="LV"
                                                                data-select2-id="select2-data-100-srr3">Latvia (+371)
                                                            </option>
                                                            <option value="LB"
                                                                data-select2-id="select2-data-101-9jz5">Lebanon (+961)
                                                            </option>
                                                            <option value="LS"
                                                                data-select2-id="select2-data-102-dc5f">Lesotho (+266)
                                                            </option>
                                                            <option value="LR"
                                                                data-select2-id="select2-data-103-229m">Liberia (+231)
                                                            </option>
                                                            <option value="LY"
                                                                data-select2-id="select2-data-104-fv7s">Libya (+218)
                                                            </option>
                                                            <option value="LI"
                                                                data-select2-id="select2-data-105-txkm">Liechtenstein
                                                                (+423)</option>
                                                            <option value="LT"
                                                                data-select2-id="select2-data-106-orr1">Lithuania
                                                                (+370)</option>
                                                            <option value="LU"
                                                                data-select2-id="select2-data-107-sdih">Luxembourg
                                                                (+352)</option>
                                                            <option value="MK"
                                                                data-select2-id="select2-data-108-23yv">Macedonia
                                                                (FYROM) (+389)</option>
                                                            <option value="MG"
                                                                data-select2-id="select2-data-109-bmwv">Madagascar
                                                                (+261)</option>
                                                            <option value="MW"
                                                                data-select2-id="select2-data-110-zmn3">Malawi (+265)
                                                            </option>
                                                            <option value="MY"
                                                                data-select2-id="select2-data-111-mdas">Malaysia (+60)
                                                            </option>
                                                            <option value="MV"
                                                                data-select2-id="select2-data-112-exk6">Maldives (+960)
                                                            </option>
                                                            <option value="ML"
                                                                data-select2-id="select2-data-113-i8mg">Mali (+223)
                                                            </option>
                                                            <option value="MT"
                                                                data-select2-id="select2-data-114-fxyu">Malta (+356)
                                                            </option>
                                                            <option value="MH"
                                                                data-select2-id="select2-data-115-wo6w">Marshall
                                                                Islands (+692)</option>
                                                            <option value="MR"
                                                                data-select2-id="select2-data-116-du5e">Mauritania
                                                                (+222)</option>
                                                            <option value="MU"
                                                                data-select2-id="select2-data-117-xofv">Mauritius
                                                                (+230)</option>
                                                            <option value="MX"
                                                                data-select2-id="select2-data-118-iqyi">Mexico (+52)
                                                            </option>
                                                            <option value="FM"
                                                                data-select2-id="select2-data-119-8lbh">Micronesia
                                                                (+691)</option>
                                                            <option value="MD"
                                                                data-select2-id="select2-data-120-ndwh">Moldova (+373)
                                                            </option>
                                                            <option value="MC"
                                                                data-select2-id="select2-data-121-u2qz">Monaco (+377)
                                                            </option>
                                                            <option value="MN"
                                                                data-select2-id="select2-data-122-ee4p">Mongolia (+976)
                                                            </option>
                                                            <option value="ME"
                                                                data-select2-id="select2-data-123-pwls">Montenegro
                                                                (+382)</option>
                                                            <option value="MA"
                                                                data-select2-id="select2-data-124-134i">Morocco (+212)
                                                            </option>
                                                            <option value="MZ"
                                                                data-select2-id="select2-data-125-usd7">Mozambique
                                                                (+258)</option>
                                                            <option value="MM"
                                                                data-select2-id="select2-data-126-kh9m">Myanmar (+95)
                                                            </option>
                                                            <option value="NA"
                                                                data-select2-id="select2-data-127-22go">Namibia (+264)
                                                            </option>
                                                            <option value="NR"
                                                                data-select2-id="select2-data-128-fla1">Nauru (+674)
                                                            </option>
                                                            <option value="NP"
                                                                data-select2-id="select2-data-129-dirl">Nepal (+977)
                                                            </option>
                                                            <option value="NL"
                                                                data-select2-id="select2-data-130-yw2x">Netherlands
                                                                (+31)</option>
                                                            <option value="NZ"
                                                                data-select2-id="select2-data-131-2xg2">New Zealand
                                                                (+64)</option>
                                                            <option value="NI"
                                                                data-select2-id="select2-data-132-adap">Nicaragua
                                                                (+505)</option>
                                                            <option value="NE"
                                                                data-select2-id="select2-data-133-3zec">Niger (+227)
                                                            </option>
                                                            <option value="NG"
                                                                data-select2-id="select2-data-134-0qgo">Nigeria (+234)
                                                            </option>
                                                            <option value="KR"
                                                                data-select2-id="select2-data-135-pgnh">South Korea
                                                                (+82)</option>
                                                            <option value="NC"
                                                                data-select2-id="select2-data-136-wnmw">New Caledonia
                                                                (+687)</option>
                                                            <option value="NO"
                                                                data-select2-id="select2-data-137-is2m">Norway (+47)
                                                            </option>
                                                            <option value="OM"
                                                                data-select2-id="select2-data-138-jpbb">Oman (+968)
                                                            </option>
                                                            <option value="PK"
                                                                data-select2-id="select2-data-139-c3s2">Pakistan (+92)
                                                            </option>
                                                            <option value="PW"
                                                                data-select2-id="select2-data-140-ypag">Palau (+680)
                                                            </option>
                                                            <option value="PS"
                                                                data-select2-id="select2-data-141-wicd">Palestine
                                                                (+970)</option>
                                                            <option value="PA"
                                                                data-select2-id="select2-data-142-82ul">Panama (+507)
                                                            </option>
                                                            <option value="PG"
                                                                data-select2-id="select2-data-143-c9ms">Papua New
                                                                Guinea (+675)</option>
                                                            <option value="PY"
                                                                data-select2-id="select2-data-144-gn0q">Paraguay (+595)
                                                            </option>
                                                            <option value="PE"
                                                                data-select2-id="select2-data-145-zvsy">Peru (+51)
                                                            </option>
                                                            <option value="PH"
                                                                data-select2-id="select2-data-146-8cb4">Philippines
                                                                (+63)</option>
                                                            <option value="PL"
                                                                data-select2-id="select2-data-147-mqa4">Poland (+48)
                                                            </option>
                                                            <option value="PT"
                                                                data-select2-id="select2-data-148-7k7p">Portugal (+351)
                                                            </option>
                                                            <option value="QA"
                                                                data-select2-id="select2-data-149-td25">Qatar (+974)
                                                            </option>
                                                            <option value="RO"
                                                                data-select2-id="select2-data-150-p7o9">Romania (+40)
                                                            </option>
                                                            <option value="RU"
                                                                data-select2-id="select2-data-151-hsnl">Russia (+7)
                                                            </option>
                                                            <option value="RW"
                                                                data-select2-id="select2-data-152-xp49">Rwanda (+250)
                                                            </option>
                                                            <option value="KN"
                                                                data-select2-id="select2-data-153-s12d">Saint Kitts and
                                                                Nevis (+1)</option>
                                                            <option value="LC"
                                                                data-select2-id="select2-data-154-lcl9">Saint Lucia
                                                                (+1)</option>
                                                            <option value="VC"
                                                                data-select2-id="select2-data-155-ebwo">Saint Vincent
                                                                and the Grenadines (+1)</option>
                                                            <option value="WS"
                                                                data-select2-id="select2-data-156-bobl">Samoa (+685)
                                                            </option>
                                                            <option value="SM"
                                                                data-select2-id="select2-data-157-8buq">San Marino
                                                                (+378)</option>
                                                            <option value="ST"
                                                                data-select2-id="select2-data-158-4cgg">Sao Tome and
                                                                Principe (+239)</option>
                                                            <option value="SA"
                                                                data-select2-id="select2-data-159-amdq">Saudi Arabia
                                                                (+966)</option>
                                                            <option value="SS"
                                                                data-select2-id="select2-data-160-lbs3">South Sudan
                                                                (+211)</option>
                                                            <option value="SN"
                                                                data-select2-id="select2-data-161-yn54">Senegal (+221)
                                                            </option>
                                                            <option value="RS"
                                                                data-select2-id="select2-data-162-g461">Serbia (+381)
                                                            </option>
                                                            <option value="SC"
                                                                data-select2-id="select2-data-163-d4q4">Seychelles
                                                                (+248)</option>
                                                            <option value="SL"
                                                                data-select2-id="select2-data-164-cyo6">Sierra Leone
                                                                (+232)</option>
                                                            <option value="SG"
                                                                data-select2-id="select2-data-165-rl65">Singapore (+65)
                                                            </option>
                                                            <option value="SH"
                                                                data-select2-id="select2-data-166-y43c">Saint Helena
                                                                (+290)</option>
                                                            <option value="SK"
                                                                data-select2-id="select2-data-167-ty2b">Slovakia (+421)
                                                            </option>
                                                            <option value="SI"
                                                                data-select2-id="select2-data-168-vaw2">Slovenia (+386)
                                                            </option>
                                                            <option value="SB"
                                                                data-select2-id="select2-data-169-6wbw">Solomon Islands
                                                                (+677)</option>
                                                            <option value="SO"
                                                                data-select2-id="select2-data-170-zb7b">Somalia (+252)
                                                            </option>
                                                            <option value="SJ"
                                                                data-select2-id="select2-data-171-d9lb">Svalbard and
                                                                Jan Mayen (+47)</option>
                                                            <option value="ZA"
                                                                data-select2-id="select2-data-172-bxke">South Africa
                                                                (+27)</option>
                                                            <option value="ES"
                                                                data-select2-id="select2-data-173-dh9b">Spain (+34)
                                                            </option>
                                                            <option value="LK"
                                                                data-select2-id="select2-data-174-popn">Sri Lanka (+94)
                                                            </option>
                                                            <option value="SD"
                                                                data-select2-id="select2-data-175-pb17">Sudan (+249)
                                                            </option>
                                                            <option value="SR"
                                                                data-select2-id="select2-data-176-zbqu">Suriname (+597)
                                                            </option>
                                                            <option value="SZ"
                                                                data-select2-id="select2-data-177-adxx">Swaziland
                                                                (+268)</option>
                                                            <option value="SE"
                                                                data-select2-id="select2-data-178-zwen">Sweden (+46)
                                                            </option>
                                                            <option value="CH"
                                                                data-select2-id="select2-data-179-zmr9">Switzerland
                                                                (+41)</option>
                                                            <option value="SY"
                                                                data-select2-id="select2-data-180-ulzt">Syria (+963)
                                                            </option>
                                                            <option value="TJ"
                                                                data-select2-id="select2-data-181-yr7p">Tajikistan
                                                                (+992)</option>
                                                            <option value="TZ"
                                                                data-select2-id="select2-data-182-dq4t">Tanzania (+255)
                                                            </option>
                                                            <option value="TH"
                                                                data-select2-id="select2-data-183-t48s">Thailand (+66)
                                                            </option>
                                                            <option value="TG"
                                                                data-select2-id="select2-data-184-z1ve">Togo (+228)
                                                            </option>
                                                            <option value="TO"
                                                                data-select2-id="select2-data-185-94o2">Tonga (+676)
                                                            </option>
                                                            <option value="TK"
                                                                data-select2-id="select2-data-186-byj7">Tokelau (+690)
                                                            </option>
                                                            <option value="TT"
                                                                data-select2-id="select2-data-187-yzql">Trinidad and
                                                                Tobago (+1)</option>
                                                            <option value="TN"
                                                                data-select2-id="select2-data-188-yd9m">Tunisia (+216)
                                                            </option>
                                                            <option value="TR"
                                                                data-select2-id="select2-data-189-s2gz">Turkey (+90)
                                                            </option>
                                                            <option value="CN"
                                                                data-select2-id="select2-data-190-y1c5">China (+86)
                                                            </option>
                                                            <option value="TM"
                                                                data-select2-id="select2-data-191-lwy6">Turkmenistan
                                                                (+993)</option>
                                                            <option value="TV"
                                                                data-select2-id="select2-data-192-kjc4">Tuvalu (+688)
                                                            </option>
                                                            <option value="UG"
                                                                data-select2-id="select2-data-193-e68f">Uganda (+256)
                                                            </option>
                                                            <option value="UA"
                                                                data-select2-id="select2-data-194-jfr7">Ukraine (+380)
                                                            </option>
                                                            <option value="AE"
                                                                data-select2-id="select2-data-195-qyf6">United Arab
                                                                Emirates (+971)</option>
                                                            <option value="GB"
                                                                data-select2-id="select2-data-196-o2y7">United Kingdom
                                                                (+44)</option>
                                                            <option value="US"
                                                                data-select2-id="select2-data-197-31oy">United States
                                                                (+1)</option>
                                                            <option value="UY"
                                                                data-select2-id="select2-data-198-knik">Uruguay (+598)
                                                            </option>
                                                            <option value="UZ"
                                                                data-select2-id="select2-data-199-76la">Uzbekistan
                                                                (+998)</option>
                                                            <option value="VU"
                                                                data-select2-id="select2-data-200-u9i9">Vanuatu (+678)
                                                            </option>
                                                            <option value="VA"
                                                                data-select2-id="select2-data-201-4jgi">Vatican (+39)
                                                            </option>
                                                            <option value="VE"
                                                                data-select2-id="select2-data-202-pt1m">Venezuela (+58)
                                                            </option>
                                                            <option value="VN"
                                                                data-select2-id="select2-data-203-ufmc">Vietnam (+84)
                                                            </option>
                                                            <option value="EH"
                                                                data-select2-id="select2-data-204-vcd4">Western Sahara
                                                                (+212)</option>
                                                            <option value="YE"
                                                                data-select2-id="select2-data-205-ouva">Yemen (+967)
                                                            </option>
                                                            <option value="ZM"
                                                                data-select2-id="select2-data-206-tl4o">Zambia (+260)
                                                            </option>
                                                            <option value="ZW"
                                                                data-select2-id="select2-data-207-ugd8">Zimbabwe (+263)
                                                            </option>
                                                            <option value="TW"
                                                                data-select2-id="select2-data-208-wwt3">Taiwan (+886)
                                                            </option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" data-select2-id="select2-data-5-wf3y"
                                                            style="width: 56px;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single select2-phone-region"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-disabled="false"
                                                                    aria-labelledby="select2-billingPhoneRegion-xv-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-billingPhoneRegion-xv-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="Vietnam (+84)"><span
                                                                            class="fi fi-vn"></span></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="field "
                                                data-bind-class="{'field--show-floating-label': billing.address}">
                                                <div class="field__input-wrapper">
                                                    <label for="billingAddress" class="field__label">
                                                        Địa chỉ (tùy chọn)
                                                    </label>
                                                    <input name="billingAddress" id="billingAddress" type="text"
                                                        class="field__input" data-bind="billing.address"
                                                        value="">
                                                </div>

                                            </div>


                                            <div class="field field--show-floating-label ">
                                                <div class="field__input-wrapper field__input-wrapper--select2"
                                                    data-select2-id="select2-data-211-nxoy">
                                                    <label for="billingProvince" class="field__label">Tỉnh
                                                        thành</label>
                                                    <select name="billingProvince" id="billingProvince"
                                                        size="1"
                                                        class="field__input field__input--select select2-hidden-accessible"
                                                        data-bind="billing.province" value=""
                                                        data-address-type="province" data-address-zone="billing"
                                                        data-select2-id="select2-data-billingProvince" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="" hidden=""
                                                            data-select2-id="select2-data-209-l7yr">---</option>
                                                        <option value="1"
                                                            data-select2-id="select2-data-216-lllp">Hà Nội</option>
                                                        <option value="2"
                                                            data-select2-id="select2-data-217-et66">TP Hồ Chí Minh
                                                        </option>
                                                        <option value="3"
                                                            data-select2-id="select2-data-218-gab0">An Giang</option>
                                                        <option value="4"
                                                            data-select2-id="select2-data-219-uc1d">Bà Rịa-Vũng Tàu
                                                        </option>
                                                        <option value="5"
                                                            data-select2-id="select2-data-220-d8nq">Bắc Giang</option>
                                                        <option value="6"
                                                            data-select2-id="select2-data-221-fsr3">Bắc Kạn</option>
                                                        <option value="7"
                                                            data-select2-id="select2-data-222-nhd8">Bạc Liêu</option>
                                                        <option value="8"
                                                            data-select2-id="select2-data-223-v5z7">Bắc Ninh</option>
                                                        <option value="9"
                                                            data-select2-id="select2-data-224-e5l6">Bến Tre</option>
                                                        <option value="10"
                                                            data-select2-id="select2-data-225-0ub1">Bình Dương</option>
                                                        <option value="11"
                                                            data-select2-id="select2-data-226-yzoi">Bình Định</option>
                                                        <option value="12"
                                                            data-select2-id="select2-data-227-yaqb">Bình Phước</option>
                                                        <option value="13"
                                                            data-select2-id="select2-data-228-0ev8">Bình Thuận</option>
                                                        <option value="14"
                                                            data-select2-id="select2-data-229-xcsg">Cà Mau</option>
                                                        <option value="15"
                                                            data-select2-id="select2-data-230-uwus">Cao Bằng</option>
                                                        <option value="16"
                                                            data-select2-id="select2-data-231-bt0h">Cần Thơ</option>
                                                        <option value="17"
                                                            data-select2-id="select2-data-232-79aj">Đà Nẵng</option>
                                                        <option value="18"
                                                            data-select2-id="select2-data-233-onpm">Đắk Lắk</option>
                                                        <option value="19"
                                                            data-select2-id="select2-data-234-utj0">Đắk Nông</option>
                                                        <option value="20"
                                                            data-select2-id="select2-data-235-pgfc">Điện Biên</option>
                                                        <option value="21"
                                                            data-select2-id="select2-data-236-xt6w">Đồng Nai</option>
                                                        <option value="22"
                                                            data-select2-id="select2-data-237-co2c">Đồng Tháp</option>
                                                        <option value="23"
                                                            data-select2-id="select2-data-238-z33a">Gia Lai</option>
                                                        <option value="24"
                                                            data-select2-id="select2-data-239-rz3t">Hà Giang</option>
                                                        <option value="25"
                                                            data-select2-id="select2-data-240-x31o">Hà Nam</option>
                                                        <option value="26"
                                                            data-select2-id="select2-data-241-liyr">Hà Tĩnh</option>
                                                        <option value="27"
                                                            data-select2-id="select2-data-242-wgj3">Hải Dương</option>
                                                        <option value="28"
                                                            data-select2-id="select2-data-243-ztjl">Hải Phòng</option>
                                                        <option value="29"
                                                            data-select2-id="select2-data-244-3gel">Hậu Giang</option>
                                                        <option value="30"
                                                            data-select2-id="select2-data-245-otea">Hòa Bình</option>
                                                        <option value="31"
                                                            data-select2-id="select2-data-246-u6ea">Hưng Yên</option>
                                                        <option value="32"
                                                            data-select2-id="select2-data-247-tgb5">Khánh Hòa</option>
                                                        <option value="33"
                                                            data-select2-id="select2-data-248-zzj4">Kiên Giang</option>
                                                        <option value="34"
                                                            data-select2-id="select2-data-249-cm0h">Kon Tum</option>
                                                        <option value="35"
                                                            data-select2-id="select2-data-250-lgy8">Lai Châu</option>
                                                        <option value="36"
                                                            data-select2-id="select2-data-251-6a9d">Lâm Đồng</option>
                                                        <option value="37"
                                                            data-select2-id="select2-data-252-g713">Lạng Sơn</option>
                                                        <option value="38"
                                                            data-select2-id="select2-data-253-nujv">Lào Cai</option>
                                                        <option value="39"
                                                            data-select2-id="select2-data-254-d1de">Long An</option>
                                                        <option value="40"
                                                            data-select2-id="select2-data-255-ij4e">Nam Định</option>
                                                        <option value="41"
                                                            data-select2-id="select2-data-256-znzh">Nghệ An</option>
                                                        <option value="42"
                                                            data-select2-id="select2-data-257-y7lx">Ninh Bình</option>
                                                        <option value="43"
                                                            data-select2-id="select2-data-258-jcw2">Ninh Thuận</option>
                                                        <option value="44"
                                                            data-select2-id="select2-data-259-nnzt">Phú Thọ</option>
                                                        <option value="45"
                                                            data-select2-id="select2-data-260-n0gz">Phú Yên</option>
                                                        <option value="46"
                                                            data-select2-id="select2-data-261-wi5i">Quảng Bình</option>
                                                        <option value="47"
                                                            data-select2-id="select2-data-262-81i8">Quảng Nam</option>
                                                        <option value="48"
                                                            data-select2-id="select2-data-263-vewp">Quảng Ngãi</option>
                                                        <option value="49"
                                                            data-select2-id="select2-data-264-qvkj">Quảng Ninh</option>
                                                        <option value="50"
                                                            data-select2-id="select2-data-265-3bcy">Quảng Trị</option>
                                                        <option value="51"
                                                            data-select2-id="select2-data-266-yeie">Sóc Trăng</option>
                                                        <option value="52"
                                                            data-select2-id="select2-data-267-aw7i">Sơn La</option>
                                                        <option value="53"
                                                            data-select2-id="select2-data-268-uu2o">Tây Ninh</option>
                                                        <option value="54"
                                                            data-select2-id="select2-data-269-3zes">Thái Bình</option>
                                                        <option value="55"
                                                            data-select2-id="select2-data-270-66xu">Thái Nguyên
                                                        </option>
                                                        <option value="56"
                                                            data-select2-id="select2-data-271-5fee">Thanh Hóa</option>
                                                        <option value="57"
                                                            data-select2-id="select2-data-272-ngs6">Thừa Thiên Huế
                                                        </option>
                                                        <option value="58"
                                                            data-select2-id="select2-data-273-d0s3">Tiền Giang</option>
                                                        <option value="59"
                                                            data-select2-id="select2-data-274-e66y">Trà Vinh</option>
                                                        <option value="60"
                                                            data-select2-id="select2-data-275-7wpt">Tuyên Quang
                                                        </option>
                                                        <option value="61"
                                                            data-select2-id="select2-data-276-2r6t">Vĩnh Long</option>
                                                        <option value="62"
                                                            data-select2-id="select2-data-277-i0rm">Vĩnh Phúc</option>
                                                        <option value="63"
                                                            data-select2-id="select2-data-278-hw92">Yên Bái</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default select2-container--below"
                                                        dir="ltr" data-select2-id="select2-data-1-dp2s"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-billingProvince-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-billingProvince-container"
                                                                    role="textbox" aria-readonly="true"
                                                                    title="---">---</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>

                                            </div>

                                            <div class="field field--show-floating-label ">
                                                <div class="field__input-wrapper field__input-wrapper--select2">
                                                    <label for="billingDistrict" class="field__label">
                                                        Quận huyện (tùy chọn)
                                                    </label>
                                                    <select name="billingDistrict" id="billingDistrict"
                                                        size="1"
                                                        class="field__input field__input--select select2-hidden-accessible"
                                                        value="" data-bind="billing.district"
                                                        data-address-type="district" data-address-zone="billing"
                                                        data-select2-id="select2-data-billingDistrict" tabindex="-1"
                                                        aria-hidden="true" disabled="disabled"></select><span
                                                        class="select2 select2-container select2-container--default select2-container--disabled"
                                                        dir="ltr" data-select2-id="select2-data-2-2gc0"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="-1"
                                                                aria-disabled="true"
                                                                aria-labelledby="select2-billingDistrict-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-billingDistrict-container"
                                                                    role="textbox" aria-readonly="true"></span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>

                                            </div>

                                            <div class="field field--show-floating-label ">
                                                <div class="field__input-wrapper field__input-wrapper--select2">
                                                    <label for="billingWard" class="field__label">
                                                        Phường xã (tùy chọn)
                                                    </label>
                                                    <select name="billingWard" id="billingWard" size="1"
                                                        class="field__input field__input--select select2-hidden-accessible"
                                                        value="" data-bind="billing.ward"
                                                        data-address-type="ward" data-address-zone="billing"
                                                        data-select2-id="select2-data-billingWard" tabindex="-1"
                                                        aria-hidden="true" disabled="disabled"></select><span
                                                        class="select2 select2-container select2-container--default select2-container--disabled"
                                                        dir="ltr" data-select2-id="select2-data-3-nthw"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="-1"
                                                                aria-disabled="true"
                                                                aria-labelledby="select2-billingWard-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-billingWard-container" role="textbox"
                                                                    aria-readonly="true"></span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>

                                            </div>




                                        </div>
                                    </div>
                                </section>

                                <div class="fieldset">
                                    <h3 class="visually-hidden">Ghi chú</h3>
                                    <div class="field " data-bind-class="{'field--show-floating-label': note}">
                                        <div class="field__input-wrapper">
                                            <label for="note" class="field__label">
                                                Ghi chú (tùy chọn)
                                            </label>
                                            <textarea name="note" id="note" class="field__input" data-bind="note"></textarea>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col col--two">








                                <section class="section" data-define="{shippingMethod: ''}">
                                    <div class="section__header">
                                        <div class="layout-flex">
                                            <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                                <i class="fa fa-truck fa-lg section__title--icon hide-on-desktop"></i>
                                                Vận chuyển
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="section__content" data-tg-refresh="refreshShipping"
                                        id="shippingMethodList"
                                        data-define="{isAddressSelecting: true, shippingMethods: []}">
                                        <div class="alert alert--loader spinner spinner--active hide"
                                            data-bind-show="isLoadingShippingMethod">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                                <use href="#spinner"></use>
                                            </svg>
                                        </div>


                                        <div class="alert alert--danger hide"
                                            data-bind-show="!isLoadingShippingMethod &amp;&amp; !isAddressSelecting &amp;&amp; !isLoadingShippingError">
                                            Khu vực không hỗ trợ vận chuyển
                                        </div>

                                        <div class="alert alert-retry alert--danger hide"
                                            data-bind-event-click="handleShippingMethodErrorRetry()"
                                            data-bind-show="!isLoadingShippingMethod &amp;&amp; !isAddressSelecting &amp;&amp; isLoadingShippingError">
                                            <span data-bind="loadingShippingErrorMessage">Không thể load phí vận
                                                chuyển. Vui lòng thử lại</span> <i class="fa fa-refresh"></i>
                                        </div>


                                        <div class="content-box hide"
                                            data-bind-show="!isLoadingShippingMethod &amp;&amp; !isAddressSelecting &amp;&amp; !isLoadingShippingError">


                                        </div>

                                        <div class="alert alert--info"
                                            data-bind-show="!isLoadingShippingMethod &amp;&amp; isAddressSelecting">
                                            Vui lòng nhập thông tin giao hàng
                                        </div>
                                    </div>
                                </section>

                                <section class="section">
                                    <div class="section__header">
                                        <div class="layout-flex">
                                            <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                                <i
                                                    class="fa fa-credit-card fa-lg section__title--icon hide-on-desktop"></i>
                                                Thanh toán
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="section__content">


                                        <div class="content-box" data-define="{paymentMethod: undefined}">


                                            <div class="content-box__row">
                                                <div class="radio-wrapper">
                                                    <div class="radio__input">
                                                        <input name="paymentMethod" id="paymentMethod-618857"
                                                            type="radio" class="input-radio"
                                                            data-bind="paymentMethod" value="618857"
                                                            data-provider-id="4">
                                                    </div>
                                                    <label for="paymentMethod-618857" class="radio__label">
                                                        <span class="radio__label__primary">Thanh toán khi giao hàng
                                                            (COD)</span>
                                                        


                                                    </label>
                                                </div>

                                                <div class="content-box__row__desc hide"
                                                    data-bind-show="paymentMethod == 618857" data-provider-id="4">
                                                    <p>Bạn chỉ phải thanh toán khi nhận được hàng</p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </section>
                            </div>
                        </article>
                        <div class="field__input-btn-wrapper field__input-btn-wrapper--vertical hide-on-desktop">
                            <button type="submit" class="btn btn-checkout spinner"
                                data-bind-class="{'spinner--active': isSubmitingCheckout}"
                                data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
                                <span class="spinner-label">ĐẶT HÀNG</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                    <use href="#spinner"></use>
                                </svg>
                            </button>

                            <a href="/cart" class="previous-link">
                                <i class="previous-link__arrow">❮</i>
                                <span class="previous-link__content">Quay về giỏ hàng</span>
                            </a>

                        </div>

                        <div id="common-alert" data-tg-refresh="refreshError">


                            <div class="alert alert--danger hide-on-desktop hide"
                                data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError"
                                data-bind="submitingCheckoutErrorMessage">Có lỗi xảy ra khi xử lý. Vui lòng thử lại
                            </div>
                        </div>
                    </div>

                </main>
                <aside class="sidebar">
                    <div class="sidebar__header">
                        <h2 class="sidebar__title">
                            Đơn hàng (2 sản phẩm)
                        </h2>
                    </div>
                    <div class="sidebar__content">
                        <div id="order-summary" class="order-summary order-summary--is-collapsed">
                            <div class="order-summary__sections">
                                <div
                                    class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
                                    <table class="product-table" id="product-table"
                                        data-tg-refresh="refreshDiscount">
                                        <caption class="visually-hidden">Chi tiết đơn hàng</caption>
                                        <thead class="product-table__header">
                                            <tr>
                                                <th>
                                                    <span class="visually-hidden">Ảnh sản phẩm</span>
                                                </th>
                                                <th>
                                                    <span class="visually-hidden">Mô tả</span>
                                                </th>
                                                <th>
                                                    <span class="visually-hidden">Sổ lượng</span>
                                                </th>
                                                <th>
                                                    <span class="visually-hidden">Đơn giá</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="product">
                                                <td class="product__image">
                                                    <div class="product-thumbnail">
                                                        <div class="product-thumbnail__wrapper" data-tg-static="">
                                                            <img src="//bizweb.dktcdn.net/thumb/thumb/100/487/743/products/59-srz520p1-699x699.png?v=1687060768163"
                                                                alt="" class="product-thumbnail__image">
                                                        </div>
                                                        <span class="product-thumbnail__quantity">2</span>
                                                    </div>
                                                </td>
                                                <th class="product__description">
                                                    <span class="product__description__name">
                                                        SEIKO SRZ520P1 – NỮ – QUARTZ (PIN) – MẶT SỐ 29MM, KÍNH CỨNG,
                                                        CHỐNG NƯỚC 5ATM
                                                    </span>



                                                </th>
                                                <td class="product__quantity visually-hidden"><em>Số lượng:</em> 2</td>
                                                <td class="product__price">

                                                    13.680.000₫

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="order-summary__section order-summary__section--discount-code"
                                    data-tg-refresh="refreshDiscount" id="discountCode">
                                    <h3 class="visually-hidden">Mã khuyến mại</h3>
                                    <div class="edit_checkout animate-floating-labels">
                                        <div class="fieldset">
                                            <div class="field ">
                                                <div class="field__input-btn-wrapper">
                                                    <div class="field__input-wrapper">
                                                        <label for="reductionCode" class="field__label">Nhập mã giảm
                                                            giá</label>
                                                        <input name="reductionCode" id="reductionCode" type="text"
                                                            class="field__input" autocomplete="off"
                                                            data-bind-disabled="isLoadingReductionCode"
                                                            data-bind-event-keypress="handleReductionCodeKeyPress(event)"
                                                            data-define="{reductionCode: null}"
                                                            data-bind="reductionCode">
                                                    </div>
                                                    <button class="field__input-btn btn spinner btn--disabled"
                                                        type="button"
                                                        data-bind-disabled="isLoadingReductionCode || !reductionCode"
                                                        data-bind-class="{'spinner--active': isLoadingReductionCode, 'btn--disabled': !reductionCode}"
                                                        data-bind-event-click="applyReductionCode()" disabled="">
                                                        <span class="spinner-label">Áp dụng</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="spinner-loader">
                                                            <use href="#spinner"></use>
                                                        </svg>
                                                    </button>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="order-summary__section order-summary__section--total-lines order-summary--collapse-element"
                                    data-define="{subTotalPriceText: '13.680.000₫'}"
                                    data-tg-refresh="refreshOrderTotalPrice" id="orderSummary">
                                    <table class="total-line-table">
                                        <caption class="visually-hidden">Tổng giá trị</caption>
                                        <thead>
                                            <tr>
                                                <td><span class="visually-hidden">Mô tả</span></td>
                                                <td><span class="visually-hidden">Giá tiền</span></td>
                                            </tr>
                                        </thead>
                                        <tbody class="total-line-table__tbody">
                                            <tr class="total-line total-line--subtotal">
                                                <th class="total-line__name">
                                                    Tạm tính
                                                </th>
                                                <td class="total-line__price">13.680.000₫</td>
                                            </tr>



                                            <tr class="total-line total-line--shipping-fee">
                                                <th class="total-line__name">
                                                    Phí vận chuyển
                                                </th>
                                                <td class="total-line__price">
                                                    <span class="origin-price"
                                                        data-bind="getTextShippingPriceOriginal()"></span>
                                                    <span data-bind="getTextShippingPriceFinal()">-</span>
                                                </td>
                                            </tr>



                                        </tbody>
                                        <tfoot class="total-line-table__footer">
                                            <tr class="total-line payment-due">
                                                <th class="total-line__name">
                                                    <span class="payment-due__label-total">
                                                        Tổng cộng
                                                    </span>
                                                </th>
                                                <td class="total-line__price">
                                                    <span class="payment-due__price"
                                                        data-bind="getTextTotalPrice()">13.680.000₫</span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div
                                    class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
                                    <button type="submit" class="btn btn-checkout spinner"
                                        data-bind-class="{'spinner--active': isSubmitingCheckout}"
                                        data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
                                        <span class="spinner-label">ĐẶT HÀNG</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                            <use href="#spinner"></use>
                                        </svg>
                                    </button>


                                    <a href="/cart" class="previous-link">
                                        <i class="previous-link__arrow">❮</i>
                                        <span class="previous-link__content">Quay về giỏ hàng</span>
                                    </a>

                                </div>
                                <div id="common-alert-sidebar" data-tg-refresh="refreshError">


                                    <div class="alert alert--danger hide-on-mobile hide"
                                        data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError"
                                        data-bind="submitingCheckoutErrorMessage">Có lỗi xảy ra khi xử lý. Vui lòng thử
                                        lại</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </form>


        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="spinner">
                <svg viewBox="0 0 30 30">
                    <circle stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                        stroke-dasharray="85%" cx="50%" cy="50%" r="40%">
                        <animateTransform attributeName="transform" type="rotate" from="0 15 15" to="360 15 15"
                            dur="0.7s" repeatCount="indefinite"></animateTransform>
                    </circle>
                </svg>
            </symbol>
        </svg>
    </div>


    <div id="FDA68A13-9347-90DF-60EB-BA840E499EF5"></div><a id="mycustomimage" href="#" download=""></a>
</body>

</html>
