window.addEventListener("load", function () {
    function addMenuClickListener() {
        document.querySelector('[href="#cookie"]').addEventListener('click', function (e) {
            e.preventDefault();
            window.cookieconsent.showSettings();
        });
    }

    function initScrollListener() {
        let lastScrollTop = 0

        window.addEventListener('scroll', function () {
            const st = window.pageYOffset || document.documentElement.scrollTop

            if (st > lastScrollTop && st > 110) {
                document.querySelector('header.bp-page-header').classList.add('scrolled')
            } else {
                document.querySelector('header.bp-page-header').classList.remove('scrolled')
            }

            lastScrollTop = st <= 0 ? 0 : st
        }, false)

    }

    window.cookieconsent = initCookieConsent();

    window.cookieconsent.run({
        // autorun: window.location.href.indexOf('impressum') === -1 && window.location.href.indexOf('datenschutz') === -1,
        current_lang: 'de',
        autoclear_cookies: true, // default: false
        page_scripts: true, // default: false
        force_consent: true,
        hide_from_bots: true,
        cookie_name: 'cc_settings',

        gui_options: {
            consent_modal: {
                layout: 'box', // box/cloud/bar
                position: 'middle center', // bottom/middle/top + left/right/center
                transition: 'slide', // zoom/slide
                swap_buttons: true
            },
            settings_modal: {
                layout: 'box', // box/bar
                transition: 'slide', // zoom/slide
            },
        },
        languages: {
            de: {
                consent_modal: {
                    title: 'Cookie-Präferenzen verwalten',
                    description: 'Diese Website verwendet essenzielle Cookies, um ihren ordnungsgemäßen Betrieb zu gewährleisten, und Tracking-Cookies, um zu verstehen, wie Sie mit ihr interagieren. Letztere werden nur nach Zustimmung gesetzt. <button type="button" data-cc="c-settings" class="cc-link">Anpassen</button>',
                    primary_btn: {
                        text: 'Alle akzeptieren',
                        role: 'accept_all', // 'accept_selected' or 'accept_all'
                    },
                    secondary_btn: {
                        text: 'Alle ablehnen',
                        role: 'accept_necessary', // 'settings' or 'accept_necessary'
                    },
                },
                settings_modal: {
                    title: 'Cookie Einstellungen',
                    save_settings_btn: 'Einstellungen speichern',
                    accept_all_btn: 'Alle akzeptieren',
                    reject_all_btn: 'Alle ablehnen',
                    close_btn_label: 'Schließen',
                    cookie_table_headers: [
                        {
                            col1: 'Name'
                        },
                        {
                            col2: 'Domain'
                        },
                        {
                            col3: 'Ablaufdatum'
                        },
                        {
                            col4: 'Beschreibung'
                        },
                    ],
                    blocks: [
                        {
                            title: 'Cookie Verwendung',
                            description: 'Wir verwenden Cookies, um die grundlegenden Funktionen der Website zu gewährleisten und um Ihr Online-Erlebnis zu verbessern. Sie können für jede Kategorie wählen, ob Sie sich an- oder abmelden möchten. Für weitere Einzelheiten zu Cookies und anderen sensiblen Daten lesen Sie bitte die vollständige&nbsp;<a href="/datenschutz" class="cc-link">Datenschutzerklärung</a>.',
                        }, {
                            title: 'Streng notwendige Cookies',
                            description: 'Diese Cookies sind für das ordnungsgemäße Funktionieren meiner Website unerlässlich. Ohne diese Cookies würde die Website nicht richtig funktionieren',
                            toggle: {
                                value: 'necessary',
                                enabled: true,
                                readonly: true, // cookie categories with readonly=true are all treated as "necessary cookies"
                            },
                        }, {
                            title: 'Leistungs- und Analyse-Cookies',
                            description: 'Diese Cookies ermöglichen es der Website, sich an die von Ihnen in der Vergangenheit getroffenen Auswahlen zu erinnern',
                            toggle: {
                                value: 'analytics', // your cookie category
                                enabled: false,
                                readonly: false,
                            },
                            cookie_table: [ // list of all expected cookies
                                {
                                    col1: '_ga',
                                    col2: 'google.com',
                                    col3: '2 Jahre',
                                    col4: 'Registriert eine eindeutige ID für einen Website- Besucher, die protokolliert, wie der Besucher die Website verwendet. Die Daten werden für Statistiken verwendet.',
                                    is_regex: true,
                                }, {
                                    col1: '^_ga_',
                                    col2: 'google.com',
                                    col3: '2 Jahre',
                                    col4: 'Dieses Cookie speichert eine eindeutige ID für einen Website-Besucher und verfolgt, wie der Besucher die Website nutzt. Die Daten werden für Statistiken verwendet.',
                                }, {
                                    col1: '_gid',
                                    col2: 'google.com',
                                    col3: '1 Tag',
                                    col4: 'Registriert eine eindeutige ID, die verwendet wird, um statistische Daten dazu, wie der Besucher die Website nutzt, zu generieren.',
                                },
                            ],
                        }, {
                            title: 'Cookies für Werbung und Zielgruppenansprache',
                            description: 'Diese Cookies sammeln Informationen darüber, wie Sie die Website nutzen, welche Seiten Sie besucht und welche Links Sie angeklickt haben. Alle Daten sind anonymisiert und können nicht verwendet werden, um Sie zu identifizieren',
                            toggle: {
                                value: 'targeting',
                                enabled: false,
                                readonly: false,
                            },
                        }, {
                            title: 'Mehr Informationen',
                            description: 'Bei Fragen zu unserer Politik in Bezug auf Cookies und Ihre Wahlmöglichkeiten <a class="cc-link" href="/kontakt">wenden Sie sich bitte an uns</a> oder schauen Sie unser unsere <a class="cc-link" href="/datenschutz">Datenschutzerklärung</a>.',
                        },
                    ],
                },
            },
        }
    });

    // new WOW().init();
    addMenuClickListener();
    initScrollListener();
})
