@extends('layouts.app')

@section('title', 'Договор оферты')

@section('content')
    <h1>Договор оферты</h1>
    <p>Здесь будет информация о "Договор оферты".</p>
    <div id="allrecords" class="t-records t-records_animated t-records_visible"
         data-hook="blocks-collection-content-node" data-tilda-project-id="4769346" data-tilda-page-id="46882297"
         data-tilda-page-alias="offerta" data-tilda-formskey="df53bda489944ccefcc4f9467e8842d6" data-tilda-lazy="yes"
         data-tilda-root-zone="com" data-tilda-project-headcode="yes">
        <div id="rec824519255" class="r t-rec t-rec_pb_60" style="padding-bottom:60px; " data-animationappear="off"
             data-record-type="257"> <!-- T228 -->
            <div id="nav824519255marker"></div>
            <div class="tmenu-mobile">
                <div class="tmenu-mobile__container">
                    <div class="tmenu-mobile__text t-name t-name_md" field="menu_mob_title">&nbsp;</div>
                    <button type="button" class="t-menuburger t-menuburger_first " aria-label="Навигационное меню"
                            aria-expanded="false"><span style="background-color:#ffffff;"></span> <span
                            style="background-color:#ffffff;"></span> <span style="background-color:#ffffff;"></span>
                        <span style="background-color:#ffffff;"></span></button>
                    <script>function t_menuburger_init(recid) {
                            var rec = document.querySelector('#rec' + recid);
                            if (!rec) return;
                            var burger = rec.querySelector('.t-menuburger');
                            if (!burger) return;
                            var isSecondStyle = burger.classList.contains('t-menuburger_second');
                            if (isSecondStyle && !window.isMobile && !('ontouchend' in document)) {
                                burger.addEventListener('mouseenter', function () {
                                    if (burger.classList.contains('t-menuburger-opened')) return;
                                    burger.classList.remove('t-menuburger-unhovered');
                                    burger.classList.add('t-menuburger-hovered');
                                });
                                burger.addEventListener('mouseleave', function () {
                                    if (burger.classList.contains('t-menuburger-opened')) return;
                                    burger.classList.remove('t-menuburger-hovered');
                                    burger.classList.add('t-menuburger-unhovered');
                                    setTimeout(function () {
                                        burger.classList.remove('t-menuburger-unhovered');
                                    }, 300);
                                });
                            }
                            burger.addEventListener('click', function () {
                                if (!burger.closest('.tmenu-mobile') && !burger.closest('.t450__burger_container') && !burger.closest('.t466__container') && !burger.closest('.t204__burger') && !burger.closest('.t199__js__menu-toggler')) {
                                    burger.classList.toggle('t-menuburger-opened');
                                    burger.classList.remove('t-menuburger-unhovered');
                                }
                            });
                            var menu = rec.querySelector('[data-menu="yes"]');
                            if (!menu) return;
                            var menuLinks = menu.querySelectorAll('.t-menu__link-item');
                            var submenuClassList = ['t978__menu-link_hook', 't978__tm-link', 't966__tm-link', 't794__tm-link', 't-menusub__target-link'];
                            Array.prototype.forEach.call(menuLinks, function (link) {
                                link.addEventListener('click', function () {
                                    var isSubmenuHook = submenuClassList.some(function (submenuClass) {
                                        return link.classList.contains(submenuClass);
                                    });
                                    if (isSubmenuHook) return;
                                    burger.classList.remove('t-menuburger-opened');
                                });
                            });
                            menu.addEventListener('clickedAnchorInTooltipMenu', function () {
                                burger.classList.remove('t-menuburger-opened');
                            });
                        }

                        t_onReady(function () {
                            t_onFuncLoad('t_menuburger_init', function () {
                                t_menuburger_init('824519255');
                            });
                        });</script>
                    <style>.t-menuburger {
                            position: relative;
                            flex-shrink: 0;
                            width: 28px;
                            height: 20px;
                            padding: 0;
                            border: none;
                            background-color: transparent;
                            outline: none;
                            -webkit-transform: rotate(0deg);
                            transform: rotate(0deg);
                            transition: transform .5s ease-in-out;
                            cursor: pointer;
                            z-index: 999;
                        }

                        .t-menuburger span {
                            display: block;
                            position: absolute;
                            width: 100%;
                            opacity: 1;
                            left: 0;
                            -webkit-transform: rotate(0deg);
                            transform: rotate(0deg);
                            transition: .25s ease-in-out;
                            height: 3px;
                            background-color: #000;
                        }

                        .t-menuburger span:nth-child(1) {
                            top: 0px;
                        }

                        .t-menuburger span:nth-child(2), .t-menuburger span:nth-child(3) {
                            top: 8px;
                        }

                        .t-menuburger span:nth-child(4) {
                            top: 16px;
                        }

                        .t-menuburger__big {
                            width: 42px;
                            height: 32px;
                        }

                        .t-menuburger__big span {
                            height: 5px;
                        }

                        .t-menuburger__big span:nth-child(2), .t-menuburger__big span:nth-child(3) {
                            top: 13px;
                        }

                        .t-menuburger__big span:nth-child(4) {
                            top: 26px;
                        }

                        .t-menuburger__small {
                            width: 22px;
                            height: 14px;
                        }

                        .t-menuburger__small span {
                            height: 2px;
                        }

                        .t-menuburger__small span:nth-child(2), .t-menuburger__small span:nth-child(3) {
                            top: 6px;
                        }

                        .t-menuburger__small span:nth-child(4) {
                            top: 12px;
                        }

                        .t-menuburger-opened span:nth-child(1) {
                            top: 8px;
                            width: 0%;
                            left: 50%;
                        }

                        .t-menuburger-opened span:nth-child(2) {
                            -webkit-transform: rotate(45deg);
                            transform: rotate(45deg);
                        }

                        .t-menuburger-opened span:nth-child(3) {
                            -webkit-transform: rotate(-45deg);
                            transform: rotate(-45deg);
                        }

                        .t-menuburger-opened span:nth-child(4) {
                            top: 8px;
                            width: 0%;
                            left: 50%;
                        }

                        .t-menuburger-opened.t-menuburger__big span:nth-child(1) {
                            top: 6px;
                        }

                        .t-menuburger-opened.t-menuburger__big span:nth-child(4) {
                            top: 18px;
                        }

                        .t-menuburger-opened.t-menuburger__small span:nth-child(1), .t-menuburger-opened.t-menuburger__small span:nth-child(4) {
                            top: 6px;
                        }

                        @media (hover),(min-width: 0\0
                        ) {
                            .t-menuburger_first:hover span:nth-child(1) {
                                transform: translateY(1px);
                            }

                            .t-menuburger_first:hover span:nth-child(4) {
                                transform: translateY(-1px);
                            }

                            .t-menuburger_first.t-menuburger__big:hover span:nth-child(1) {
                                transform: translateY(3px);
                            }

                            .t-menuburger_first.t-menuburger__big:hover span:nth-child(4) {
                                transform: translateY(-3px);
                            }
                        }

                        .t-menuburger_second span:nth-child(2), .t-menuburger_second span:nth-child(3) {
                            width: 80%;
                            left: 20%;
                            right: 0;
                        }

                        @media (hover),(min-width: 0\0
                        ) {
                            .t-menuburger_second.t-menuburger-hovered span:nth-child(2), .t-menuburger_second.t-menuburger-hovered span:nth-child(3) {
                                animation: t-menuburger-anim 0.3s ease-out normal forwards;
                            }

                            .t-menuburger_second.t-menuburger-unhovered span:nth-child(2), .t-menuburger_second.t-menuburger-unhovered span:nth-child(3) {
                                animation: t-menuburger-anim2 0.3s ease-out normal forwards;
                            }
                        }

                        .t-menuburger_second.t-menuburger-opened span:nth-child(2), .t-menuburger_second.t-menuburger-opened span:nth-child(3) {
                            left: 0;
                            right: 0;
                            width: 100% !important;
                        }

                        .t-menuburger_third span:nth-child(4) {
                            width: 70%;
                            left: unset;
                            right: 0;
                        }

                        @media (hover),(min-width: 0\0
                        ) {
                            .t-menuburger_third:not(.t-menuburger-opened):hover span:nth-child(4) {
                                width: 100%;
                            }
                        }

                        .t-menuburger_third.t-menuburger-opened span:nth-child(4) {
                            width: 0 !important;
                            right: 50%;
                        }

                        .t-menuburger_fourth {
                            height: 12px;
                        }

                        .t-menuburger_fourth.t-menuburger__small {
                            height: 8px;
                        }

                        .t-menuburger_fourth.t-menuburger__big {
                            height: 18px;
                        }

                        .t-menuburger_fourth span:nth-child(2), .t-menuburger_fourth span:nth-child(3) {
                            top: 4px;
                            opacity: 0;
                        }

                        .t-menuburger_fourth span:nth-child(4) {
                            top: 8px;
                        }

                        .t-menuburger_fourth.t-menuburger__small span:nth-child(2), .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                            top: 3px;
                        }

                        .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                            top: 6px;
                        }

                        .t-menuburger_fourth.t-menuburger__small span:nth-child(2), .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                            top: 3px;
                        }

                        .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                            top: 6px;
                        }

                        .t-menuburger_fourth.t-menuburger__big span:nth-child(2), .t-menuburger_fourth.t-menuburger__big span:nth-child(3) {
                            top: 6px;
                        }

                        .t-menuburger_fourth.t-menuburger__big span:nth-child(4) {
                            top: 12px;
                        }

                        @media (hover),(min-width: 0\0
                        ) {
                            .t-menuburger_fourth:not(.t-menuburger-opened):hover span:nth-child(1) {
                                transform: translateY(1px);
                            }

                            .t-menuburger_fourth:not(.t-menuburger-opened):hover span:nth-child(4) {
                                transform: translateY(-1px);
                            }

                            .t-menuburger_fourth.t-menuburger__big:not(.t-menuburger-opened):hover span:nth-child(1) {
                                transform: translateY(3px);
                            }

                            .t-menuburger_fourth.t-menuburger__big:not(.t-menuburger-opened):hover span:nth-child(4) {
                                transform: translateY(-3px);
                            }
                        }

                        .t-menuburger_fourth.t-menuburger-opened span:nth-child(1), .t-menuburger_fourth.t-menuburger-opened span:nth-child(4) {
                            top: 4px;
                        }

                        .t-menuburger_fourth.t-menuburger-opened span:nth-child(2), .t-menuburger_fourth.t-menuburger-opened span:nth-child(3) {
                            opacity: 1;
                        }

                        @keyframes t-menuburger-anim {
                            0% {
                                width: 80%;
                                left: 20%;
                                right: 0;
                            }
                            50% {
                                width: 100%;
                                left: 0;
                                right: 0;
                            }
                            100% {
                                width: 80%;
                                left: 0;
                                right: 20%;
                            }
                        }

                        @keyframes t-menuburger-anim2 {
                            0% {
                                width: 80%;
                                left: 0;
                            }
                            50% {
                                width: 100%;
                                right: 0;
                                left: 0;
                            }
                            100% {
                                width: 80%;
                                left: 20%;
                                right: 0;
                            }
                        }</style>
                </div>
            </div>
            <style>.tmenu-mobile {
                    background-color: #111;
                    display: none;
                    width: 100%;
                    top: 0;
                    z-index: 990;
                }

                .tmenu-mobile_positionfixed {
                    position: fixed;
                }

                .tmenu-mobile__text {
                    color: #fff;
                }

                .tmenu-mobile__container {
                    min-height: 64px;
                    padding: 20px;
                    position: relative;
                    box-sizing: border-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-align-items: center;
                    -ms-flex-align: center;
                    align-items: center;
                    -webkit-justify-content: space-between;
                    -ms-flex-pack: justify;
                    justify-content: space-between;
                }

                .tmenu-mobile__list {
                    display: block;
                }

                .tmenu-mobile__burgerlogo {
                    display: inline-block;
                    font-size: 24px;
                    font-weight: 400;
                    white-space: nowrap;
                    vertical-align: middle;
                }

                .tmenu-mobile__imglogo {
                    height: auto;
                    display: block;
                    max-width: 300px !important;
                    box-sizing: border-box;
                    padding: 0;
                    margin: 0 auto;
                }

                @media screen and (max-width: 980px) {
                    .tmenu-mobile__menucontent_hidden {
                        display: none;
                        height: 100%;
                    }

                    .tmenu-mobile {
                        display: block;
                    }
                }

                @media screen and (max-width: 980px) {
                    #rec824519255 .tmenu-mobile {
                        background-color: #0f3f73;
                    }

                    #rec824519255 .t-menuburger {
                        -webkit-order: 1;
                        -ms-flex-order: 1;
                        order: 1;
                    }
                }</style>

            <style>@media screen and (max-width: 980px) {
                    #rec824519255 .t228__leftcontainer {
                        padding: 20px;
                    }

                    #rec824519255 .t228__imglogo {
                        padding: 20px 0;
                    }

                    #rec824519255 .t228 {
                        position: static;
                    }
                }</style>
            <script>window.addEventListener('resize', t_throttle(function () {
                    t_onFuncLoad('t_menu__setBGcolor', function () {
                        t_menu__setBGcolor('824519255', '.t228');
                    });
                }));
                t_onReady(function () {
                    t_onFuncLoad('t_menu__highlightActiveLinks', function () {
                        t_menu__highlightActiveLinks('.t228__list_item a');
                    });
                    t_onFuncLoad('t228__init', function () {
                        t228__init('824519255');
                    });
                    t_onFuncLoad('t_menu__setBGcolor', function () {
                        t_menu__setBGcolor('824519255', '.t228');
                    });
                    t_onFuncLoad('t_menu__interactFromKeyboard', function () {
                        t_menu__interactFromKeyboard('824519255');
                    });
                    t_onFuncLoad('t_menu__createMobileMenu', function () {
                        t_menu__createMobileMenu('824519255', '.t228');
                    });
                });</script>
            <!--[if IE 8]>
            <style>#rec824519255 .t228 {
                filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D9ffffff', endColorstr='#D9ffffff');
            }</style> <![endif]-->
            <style>#rec824519255 .t-menu__link-item {
                }

                @supports (overflow:-webkit-marquee) and (justify-content:inherit) {
                    #rec824519255 .t-menu__link-item, #rec824519255 .t-menu__link-item.t-active {
                        opacity: 1 !important;
                    }
                }</style>
            <style> #rec824519255 a.t-menu__link-item {
                    font-size: 21px;
                    color: #0f3f73;
                    font-weight: 400;
                    font-family: 'Ubuntu';
                }

                #rec824519255 .t228__right_langs_lang a {
                    font-size: 21px;
                    color: #0f3f73;
                    font-weight: 400;
                    font-family: 'Ubuntu';
                }</style>
        </div>
        <div id="rec824518820" class="r t-rec t-rec_pt_45 t-rec_pb_45 r_showed r_anim"
             style="padding-top:45px;padding-bottom:45px; " data-record-type="113">
            <div style="height:28px;"></div>
        </div>
        <div id="rec731907525" class="r t-rec" style=" " data-animationappear="off" data-record-type="131">
            <!-- T123 -->
            <div class="t123">
                <div class="t-container_100 ">
                    <div class="t-width t-width_100 "> <!-- nominify begin -->
                        <center>
                            <iframe src="https://drive.google.com/file/d/1DNJ4iIORjmsagtBOVceiNJ3MSZ5gBahS/preview"
                                    width="100%" height="1200" allow="autoplay"></iframe>
                        </center> <!-- nominify end --> </div>
                </div>
            </div>
        </div>
    </div>
@endsection
