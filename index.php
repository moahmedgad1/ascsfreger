
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- Block Robots from crawling this page -->
    <meta name="robots" content="noindex">
    <meta name="description" content="Description">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Give the page a title -->
    <title></title>

    <!-- Include our jQuery version -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Include our Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700|Roboto:400,700" rel="stylesheet">

    <!-- Include FontAwesome -->
    <link href="https://d266key948fg17.cloudfront.net/themes/startui/css/lib/font-awesome/font-awesome.min.css" rel="stylesheet" />

    <!-- Sweet Alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.css">

    <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

    <!-- Color Picker -->
    <script src="https://d266key948fg17.cloudfront.net/themes/startui/css/lib/colorpicker/js/colorpicker.js"></script>
    <link rel="stylesheet" type="text/css" href="https://d266key948fg17.cloudfront.net/themes/startui/css/lib/colorpicker/css/colorpicker.css" />

    <!-- Our Application's CSS stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://d266key948fg17.cloudfront.net/uploads/assets/151981978211ad81ad9b8c843e4b3c3052a8d6138c.css" />

    <script>

        // What's the XRF token?
        var xrfToken = "%XRF_TOKEN%";

        // What Locker Settings were saved?
        var savedLockerSettings = {"css":{"pc":{"body":{"background":{"color":"#ffffff","horizontal":"left","image":"","size":"cover","vertical":"top"}},"body-human-verification":{"background":{"color":"#cfcfcf","horizontal":"left","image":"","size":"cover","vertical":"top"},"background-hover":{"color":"#ffffff","horizontal":"left","image":"","size":"cover","vertical":"top"},"border-radius":"4","border-color":"#ffffff","border-color-hover":"#cf0ccf","border-width":"1","font-color":"#ffffff","font-color-hover":"#565656","font-size":"14","font-weight":"normal","margin-bottom":"79","margin-top":"84","padding-top":"8","padding-bottom":"8"},"body-offers":{"text-bottom-align":"center","text-bottom-color":"#969696","text-bottom-padding-bottom":"31","text-bottom-padding-top":"18","text-bottom-shadow":"transparent","text-bottom-size":"13","text-bottom-weight":"normal","text-top-align":"center","text-top-color":"#525252","text-top-padding-bottom":"27","text-top-padding-top":"14","text-top-shadow":"transparent","text-top-size":"21","text-top-weight":"normal"},"body-offers-list":{"align":"center","background":{"color":"#665066","horizontal":"left","image":"","size":"cover","vertical":"top"},"background-hover":{"color":"#ffffff","horizontal":"left","image":"","size":"cover","vertical":"top"},"border-color":"#000000","border-radius":"3","border-width":"1","font-color":"#000000","font-color-hover":"#9e069e","font-size":"13","font-weight":"bold","margin-bottom":"5","margin-top":"0","padding-bottom":"10","padding-top":"13","text-align":"center","width":"95"},"header":{"background":{"color":"#ffffff","horizontal":"left","image":"","size":"cover","vertical":"top"},"border-color":"transparent","border-width":"1","border-box-shadow":"transparent","display":"block","font-align":"center","font-color":"#000000","font-size":"17","font-weight":"normal","padding-bottom":"0","padding-top":"28"},"footer":{"background":{"color":"#ffffff","horizontal":"left","image":"","size":"cover","vertical":"top"},"border-color":"#ffffff","border-width":"1","border-box-shadow":"#d1d1d1","display":"none","font-align":"center","font-color":"#5f5f5f","font-size":"10","font-weight":"normal","padding-bottom":"11","padding-top":"13"},"locker":{"border-radius":"10","box-shadow":"#292929","font":"Roboto","width":"600"},"page":{"background":{"color":"#464141","horizontal":"left","image":"","size":"cover","vertical":"top"},"opacity":"65"}},"phone":{"body":{},"body-human-verification":{"border-radius":"4","border-width":"1","font-size":"11","font-weight":"normal","margin-bottom":"57","margin-top":"60","padding-top":"8","padding-bottom":"8"},"body-offers":{"text-bottom-padding-bottom":"20","text-bottom-padding-top":"13","text-bottom-size":"11","text-bottom-weight":"normal","text-top-padding-bottom":"27","text-top-padding-top":"9","text-top-size":"17","text-top-weight":"normal"},"body-offers-list":{"border-width":"1","font-size":"13","font-weight":"bold","margin-bottom":"5","margin-top":"0","padding-bottom":"10","padding-top":"12","width":"95"},"header":{"border-width":"1","font-size":"13","font-weight":"normal","padding-bottom":"5","padding-top":"2"},"footer":{"border-width":"1","font-size":"9","font-weight":"normal","padding-bottom":"8","padding-top":"5"},"locker":{},"page":{}}},"css-custom":"@import url('https://fonts.googleapis.com/css?family=Raleway:400,700');\n\n#my-locker {\n    font-family: 'Raleway', sans-serif !important;\n}\n\n#my-locker #my-locker-top span img {\n}\n\n#my-locker .my-locker-body-text-top {\n    font-weight: 700 !important;\n}\n\n#my-locker .my-locker-body-text-top font {\n    color: inherit;\n}\n\nbody.mobile #my-locker #my-locker-top span img {\n    height: 65px;\n    margin-top: 25px;\n}\n\n#heading-big {\n    font-size: 31px;\n    letter-spacing: -1px;\n    margin-bottom: 12px;\n}\n\n#heading-small {\n    color: #525252;\n    font-size: 18px;\n    font-weight: 300;\n}\n\n#waiting {\n    background: #000000;\n    border-radius: 5px;\n    color: #fff;\n    display: inline-block;\n    font-size: 18px;\n    margin: 0 auto;\n    padding: 15px 20px 13px;\n}\n\nbody.mobile #waiting {\n    font-size: 15px;\n}\n\n#waiting i {\n    margin-right: 3px;\n}\n\n#my-locker-body-offers-list a {\n    background: #eeeeee !important;\n    background: -moz-linear-gradient(top, #eeeeee 0%, #ffffff 100%) !important;\n    background: -webkit-linear-gradient(top, #eeeeee 0%,#ffffff 100%) !important;\n    background: linear-gradient(to bottom, #eeeeee 0%,#ffffff 100%) !important;\n    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#ffffff',GradientType=0 ) !important;\n}\n\n#my-locker-body-offers-list a:hover {\n    background: #eeeeee !important;\n}","google":{"analytics-tracking-id":"","event-tracking":"disabled","translate":"enabled"},"instructions":"- To change the Header text: Click \"Design Your Content Locker\", choose \"Body > Offers\", and change \"Top Text\" (be careful to only modify the text)\n\n- To change the \"Waiting for Verification\" text: Click \"Design Your Content Locker\", choose \"Footer\", and change \"Text\" (be careful to only modify the text)\n\n- To change the \"Waiting for verification\" background color: Click \"Custom CSS & JavaScript\", choose \"CSS\", and change the background color on line #36, then click the green \"Apply\" button","javascript-custom":"","offers":{"display":"4","min-offers":"1","min-payout":"1","on-complete":"redirect","redirect-url":"http://d33tpwuz8an60z.cloudfront.net/public/redirect.php?lead_id=%lead_id%","show-tooltips":"disabled"},"other":{"alert-before-leaving":"disabled","disable-right-click":"enabled","esc-key-close":"disabled","human-verification":"disabled"},"text":{"header":"","human-verification":"Verify Through Survey","body-top":"<p style=\"text-align: center;\"><img src=\"https://i.imgur.com/H86sRrT.png=\" border=\"0\" /></p> <div style=\"text-align: center;\"><span style=\"color: #e03e2d;\"><strong><span style=\"font-size: 18pt;\">Human verification</span></strong></span></div> <p style=\"text-align: center;\"><span style=\"font-size: 18pt;\"><strong>You must complete one of the following offers to get the CP</strong></span></p>","body-bottom":"<div id=\"waiting\"><i class=\"fa fa-spin fa-circle-o-notch\"></i> Waiting for verification</div>","footer":"All trademarks are property of their respective owners."}};

        // Our live Offers.
        var liveOffers = [{"id":"53433526","name":"Surveoo - Questionnaire","anchor":"Complete the survey and earn great rewards","conversion":"Complete with valid info","category_id":"5","network_icon":"https:\/\/affise-media-service-prod.s3.eu-central-1.amazonaws.com\/affise-media-service-prod\/offers\/959\/22792\/4021774529.200x200.200x200.png","user_payout":"0.62","payout":"0.62","user_enabled":"1","url":"\/public\/dynamo\/lockerClick.php?offer=53433526&offer_position=1&it=4205637&m=0&visitor_id=Vdbcfa9906ca70&hash=8a688c21b0c990df2f82a54b0425875e"},{"id":"53380751","name":"PrizeO - Win iPhone 14 Pro","anchor":"\u0623\u062f\u062e\u0644 \u0631\u0642\u0645 \u0627\u0644\u062a\u0639\u0631\u064a\u0641 \u0627\u0644\u0634\u062e\u0635\u064a \u0627\u0644\u0622\u0646 \u0644\u062a\u0631\u0628\u062d \u062c\u0647\u0627\u0632 iPhone 14 Pro \u062c\u062f\u064a\u062f!","conversion":"Enter your mobile number","category_id":"1","network_icon":"https:\/\/i.gyazo.com\/1902affe184bf6985d16af534d8948a1.png","user_payout":"0.32","payout":"0.32","user_enabled":"1","url":"\/public\/dynamo\/lockerClick.php?offer=53380751&offer_position=2&it=4205637&m=0&visitor_id=Vdbcfa9906ca70&hash=cd9655caf95fe6d6394645c5704ab6ba"},{"id":"53358208","name":"Funcool - iPhone14 Pro","anchor":"\u0627\u0631\u0628\u062d iPhone \u0627\u0644\u064a\u0648\u0645","conversion":"Enter your mobile number","category_id":"1","network_icon":"https:\/\/affise-media-service-prod.s3.eu-central-1.amazonaws.com\/affise-media-service-prod\/offers\/959\/20488\/440409317.200x200.png","user_payout":"0.20","payout":"0.20","user_enabled":"1","url":"\/public\/dynamo\/lockerClick.php?offer=53358208&offer_position=3&it=4205637&m=0&visitor_id=Vdbcfa9906ca70&hash=3bcc48e55baeb7a6e7465df1cde738bc"},{"id":"53421774","name":"HappyCloud - iPhone 15 Pro Download","anchor":"\u0641\u0631\u0635\u0629 \u0644\u0644\u0641\u0648\u0632 \u0628\u062c\u0647\u0627\u0632 iPhone 15 \u0627\u0644\u0622\u0646!","conversion":"Enter your mobile number","category_id":"1","network_icon":"https:\/\/i.gyazo.com\/5278682a7ae33ea8b81190281bee1da4.png","user_payout":"0.32","payout":"0.32","user_enabled":"1","url":"\/public\/dynamo\/lockerClick.php?offer=53421774&offer_position=4&it=4205637&m=0&visitor_id=Vdbcfa9906ca70&hash=f594dc2ede1fecc40177c2bf64b1d0d3"},{"id":"53383257","name":"TikTok Android CPI","anchor":"\u0642\u0645 \u0628\u062a\u062b\u0628\u064a\u062a \u0648\u0641\u062a\u062d TikTok","conversion":"Install + open and run for 30sec","category_id":"2","network_icon":"https:\/\/affise-media-service-prod.s3.eu-central-1.amazonaws.com\/affise-media-service-prod\/offers\/959\/20706\/273427322.200x200.200x200.200x200.png","user_payout":"0.39","payout":"0.39","user_enabled":"1","url":"\/public\/dynamo\/lockerClick.php?offer=53383257&offer_position=5&it=4205637&m=0&visitor_id=Vdbcfa9906ca70&hash=b4422511b86fb412e6a8beb62ab98059"},{"id":"53382768","name":"FunCool - Win iPhone 15 Pro","anchor":"\u0622\u064a\u0641\u0648\u0646 15 \u0628\u0631\u0648 \u0647\u0646\u0627! \u0623\u0631\u0633\u0644 \u0631\u0642\u0645 \u0627\u0644\u062a\u0639\u0631\u064a\u0641 \u0627\u0644\u0634\u062e\u0635\u064a \u0644\u062a\u0633\u062a\u0642\u0628\u0644\u0647 \u0627\u0644\u0622\u0646!","conversion":"Enter your mobile number","category_id":"1","network_icon":"https:\/\/i.gyazo.com\/2713d7ff119abf2b89472ea3004524c1.png","user_payout":"0.32","payout":"0.32","user_enabled":"1","url":"\/public\/dynamo\/lockerClick.php?offer=53382768&offer_position=6&it=4205637&m=0&visitor_id=Vdbcfa9906ca70&hash=2bf7b5c80768f81c4861fe86ba284713"},{"id":"53313490","name":"FunCool - Download Green","anchor":"\u062a\u062d\u0645\u064a\u0644\u0643 \u062c\u0627\u0647\u0632! \u0623\u0631\u0633\u0644 \u0631\u0642\u0645 \u0627\u0644\u062a\u0639\u0631\u064a\u0641 \u0627\u0644\u0634\u062e\u0635\u064a \u0644\u0644\u062a\u0646\u0632\u064a\u0644 \u0627\u0644\u0622\u0646!","conversion":"Enter your mobile number","category_id":"1","network_icon":"https:\/\/i.gyazo.com\/da39c93b8f9ab359c0554ce63e860997.png","user_payout":"0.32","payout":"0.32","user_enabled":"1","url":"\/public\/dynamo\/lockerClick.php?offer=53313490&offer_position=7&it=4205637&m=0&visitor_id=Vdbcfa9906ca70&hash=191b741dc37394a999d91fdc98e73e79"},{"id":"53356117","name":"Apps4All - Download Content","anchor":"\u0645\u0644\u0641\u0643 \u062c\u0627\u0647\u0632! \u0623\u0631\u0633\u0644 \u0631\u0642\u0645 \u0627\u0644\u062a\u0639\u0631\u064a\u0641 \u0627\u0644\u0634\u062e\u0635\u064a \u0644\u0644\u062a\u0646\u0632\u064a\u0644 \u0627\u0644\u0622\u0646!","conversion":"Enter your mobile number","category_id":"1","network_icon":"https:\/\/i.gyazo.com\/74b5cdf062ab648c70f3b5e68e9f92f0.png","user_payout":"0.10","payout":"0.10","user_enabled":"1","url":"\/public\/dynamo\/lockerClick.php?offer=53356117&offer_position=8&it=4205637&m=0&visitor_id=Vdbcfa9906ca70&hash=dce8547a2d963a127447573ae424cdd7"},{"id":"53431091","name":"FaBuLous - Download Games","anchor":"\u0623\u062f\u062e\u0644 \u0631\u0642\u0645 \u0627\u0644\u062a\u0639\u0631\u064a\u0641 \u0627\u0644\u0634\u062e\u0635\u064a \u0627\u0644\u0622\u0646 \u0644\u062a\u0646\u0632\u064a\u0644 \u0627\u0644\u0645\u062d\u062a\u0648\u0649 \u0627\u0644\u062e\u0627\u0635 \u0628\u0643!","conversion":"Enter your mobile number","category_id":"1","network_icon":"https:\/\/i.gyazo.com\/6d429ca3a1c911117445c3af22ac424d.png","user_payout":"0.19","payout":"0.19","user_enabled":"1","url":"\/public\/dynamo\/lockerClick.php?offer=53431091&offer_position=9&it=4205637&m=0&visitor_id=Vdbcfa9906ca70&hash=48656db702421840d502bd7631390cd5"},{"id":"53374605","name":"FaBuLous - Fast Download","anchor":"\u0627\u0644\u0645\u062d\u062a\u0648\u0649 \u0627\u0644\u062e\u0627\u0635 \u0628\u0643 \u062c\u0627\u0647\u0632! \u0623\u0631\u0633\u0644 \u0631\u0642\u0645 \u0627\u0644\u062a\u0639\u0631\u064a\u0641 \u0627\u0644\u0634\u062e\u0635\u064a \u0644\u0644\u062a\u0646\u0632\u064a\u0644 \u0627\u0644\u0622\u0646!","conversion":"Enter your mobile number","category_id":"1","network_icon":"https:\/\/i.gyazo.com\/35efa3d61f6ad8a5daf6ce24776c2bca.png","user_payout":"0.19","payout":"0.19","user_enabled":"1","url":"\/public\/dynamo\/lockerClick.php?offer=53374605&offer_position=10&it=4205637&m=0&visitor_id=Vdbcfa9906ca70&hash=6abd2603dc513544fd682526140d5928"}];

        // Some test Offers.
        var testOffers = [{"id":"152916","name":"LifeScript - Travel Box","anchor":"Get your FREE Travel Samples!","conversion":"Get your FREE Travel Samples!","network_icon":"","user_payout":"1.20","user_enabled":"1","url":"\/public\/click.php"},{"id":"171613","name":"National Consumer Center - Amazon Holiday $1000","anchor":"Get Your $1000 Amazon Giftcard!","conversion":"Get Your $1000 Amazon Giftcard!","network_icon":"","user_payout":"1.40","user_enabled":"1","url":"\/public\/click.php"},{"id":"144872","name":"LifeScript - Sephora","anchor":"Get your Free Sephora Products!","conversion":"Get your Free Sephora Products!","network_icon":"","user_payout":"1.84","user_enabled":"1","url":"\/public\/click.php"},{"id":"210961","name":"National Consumer Center - Coke vs Pepsi $100","anchor":"Get Your $100 Giftcard!","conversion":"Get Your $100 Giftcard!","network_icon":"","user_payout":"1.40","user_enabled":"1","url":"\/public\/click.php"},{"id":"144863","name":"LifeScript -Netflix","anchor":"Get your FREE month of Netflix!","conversion":"Get your FREE month of Netflix!","network_icon":"","user_payout":"1.76","user_enabled":"1","url":"\/public\/click.php"},{"id":"200844","name":"CRC Target - US","anchor":"$500 Target Gift Card! ","conversion":"$500 Target Gift Card! ","network_icon":"","user_payout":"1.12","user_enabled":"1","url":"\/public\/click.php"},{"id":"152914","name":"Lab42 Survey Router - US","anchor":"Earn Cash, Sweepstakes, and Prizes!","conversion":"Earn Cash, Sweepstakes, and Prizes!","network_icon":"","user_payout":"0.72","user_enabled":"1","url":"\/public\/click.php"},{"id":"203625","name":"LG TV - US","anchor":"Join the 4K revolution, Get your new LG UHD TV with a prepaid Visa Gift Card! ","conversion":"Join the 4K revolution, Get your new LG UHD TV with a prepaid Visa Gift Card! ","network_icon":"","user_payout":"0.96","user_enabled":"1","url":"\/public\/click.php"},{"id":"200841","name":"Android vs iPhone - US","anchor":"$500 Visa Gift Card! ","conversion":"$500 Visa Gift Card! ","network_icon":"","user_payout":"0.96","user_enabled":"1","url":"\/public\/click.php"},{"id":"210184","name":"LifeScript - L'Oreal (email submit)","anchor":"Get FREE L'Oreal Samples!","conversion":"Get FREE L'Oreal Samples!","network_icon":"","user_payout":"1.20","user_enabled":"1","url":"\/public\/click.php"}];

        // Capture some of the custom variable data.
        var editing = false;

        // Determine which Offers to use.
        var useOffers = (editing === true ? testOffers : liveOffers);

        // What default variables were provided to us?
        var baseLockerSettings = {
            'css': {
                'pc': {
                    'body': {
                        'background': {
                            'color': '#ffffff',
                            'horizontal': 'left',
                            'image': '',
                            'size': 'cover',
                            'vertical': 'top'
                        }
                    },
                    'body-human-verification': {
                        'background': {
                            'color': '#fbfbfb',
                            'horizontal': 'left',
                            'image': '',
                            'size': 'cover',
                            'vertical': 'top'
                        },
                        'background-hover': {
                            'color': '#b1b1b1',
                            'horizontal': 'left',
                            'image': '',
                            'size': 'cover',
                            'vertical': 'top'
                        },
                        'border-radius': '4',
                        'border-color': '#b9b9b9',
                        'border-color-hover': '#b9b9b9',
                        'border-width': '1',
                        'font-color': '#9c9c9c',
                        'font-color-hover': '#565656',
                        'font-size': '14',
                        'font-weight': 'normal',
                        'margin-bottom': '79',
                        'margin-top': '84',
                        'padding-top': '8',
                        'padding-bottom': '8'
                    },
                    'body-offers': {
                        'text-bottom-align': 'center',
                        'text-bottom-color': '#959595',
                        'text-bottom-padding-bottom': '17',
                        'text-bottom-padding-top': '12',
                        'text-bottom-shadow': 'transparent',
                        'text-bottom-size': '13',
                        'text-bottom-weight': 'normal',
                        'text-top-align': 'center',
                        'text-top-color': '#696969',
                        'text-top-padding-bottom': '20',
                        'text-top-padding-top': '21',
                        'text-top-shadow': 'transparent',
                        'text-top-size': '15',
                        'text-top-weight': 'normal'
                    },
                    'body-offers-list': {
                        'align': 'center',
                        'background': {
                            'color': '#fbfbfb',
                            'horizontal': 'left',
                            'image': '',
                            'size': 'cover',
                            'vertical': 'top'
                        },
                        'background-hover': {
                            'color': '#b1b1b1',
                            'horizontal': 'left',
                            'image': '',
                            'size': 'cover',
                            'vertical': 'top'
                        },
                        'border-color': '#b9b9b9',
                        'border-radius': '3',
                        'border-width': '1',
                        'font-color': '#9c9c9c',
                        'font-color-hover': '#565656',
                        'font-size': '13',
                        'font-weight': 'normal',
                        'margin-bottom': '4',
                        'margin-top': '0',
                        'padding-bottom': '9',
                        'padding-top': '9',
                        'text-align': 'center',
                        'width': '50'
                    },
                    'header': {
                        'background': {
                            'color': '#ffffff',
                            'horizontal': 'left',
                            'image': '',
                            'size': 'cover',
                            'vertical': 'top'
                        },
                        'border-color': '#ffffff',
                        'border-width': '1',
                        'border-box-shadow': '#d1d1d1',
                        'display': 'block',
                        'font-align': 'center',
                        'font-color': '#5f5f5f',
                        'font-size': '17',
                        'font-weight': 'normal',
                        'padding-bottom': '18',
                        'padding-top': '21'
                    },
                    'footer': {
                        'background': {
                            'color': '#ffffff',
                            'horizontal': 'left',
                            'image': '',
                            'size': 'cover',
                            'vertical': 'top'
                        },
                        'border-color': '#ffffff',
                        'border-width': '1',
                        'border-box-shadow': '#d1d1d1',
                        'display': 'block',
                        'font-align': 'center',
                        'font-color': '#5f5f5f',
                        'font-size': '10',
                        'font-weight': 'normal',
                        'padding-bottom': '11',
                        'padding-top': '13'
                    },
                    'locker': {
                        'border-radius': '2',
                        'box-shadow': '#292929',
                        'font': 'Montserrat',
                        'width': '800'
                    },
                    'page': {
                        'background': {
                            'color': '#464141',
                            'horizontal': 'left',
                            'image': '',
                            'size': 'cover',
                            'vertical': 'top'
                        },
                        'opacity': '65'
                    }
                },
                'phone': {
                    'body': {},
                    'body-human-verification': {
                        'border-radius': '4',
                        'border-width': '1',
                        'font-size': '11',
                        'font-weight': 'normal',
                        'margin-bottom': '57',
                        'margin-top': '60',
                        'padding-top': '8',
                        'padding-bottom': '8'
                    },
                    'body-offers': {
                        'text-bottom-padding-bottom': '15',
                        'text-bottom-padding-top': '9',
                        'text-bottom-size': '10',
                        'text-bottom-weight': 'normal',
                        'text-top-padding-bottom': '15',
                        'text-top-padding-top': '19',
                        'text-top-size': '11',
                        'text-top-weight': 'normal'
                    },
                    'body-offers-list': {
                        'border-width': '1',
                        'font-size': '9',
                        'font-weight': 'normal',
                        'margin-bottom': '4',
                        'margin-top': '0',
                        'padding-bottom': '5',
                        'padding-top': '6',
                        'width': '50'
                    },
                    'header': {
                        'border-width': '1',
                        'font-size': '13',
                        'font-weight': 'normal',
                        'padding-bottom': '10',
                        'padding-top': '13'
                    },
                    'footer': {
                        'border-width': '1',
                        'font-size': '9',
                        'font-weight': 'normal',
                        'padding-bottom': '8',
                        'padding-top': '5'
                    },
                    'locker': {},
                    'page': {}
                }
            },
            'css-custom': '',
            'google': {
                'analytics-tracking-id': '',
                'event-tracking': 'disabled',
                'translate': 'enabled'
            },
            'javascript-custom': '',
            'offers': {
                'display': '5',
                'min-offers': '1',
                'min-payout': '1',
                'on-complete': 'redirect',
                'redirect-url': 'https://google.com',
                'show-tooltips': 'disabled'
            },
            'other': {
                'alert-before-leaving': 'disabled',
                'disable-right-click': 'enabled',
                'esc-key-close': 'disabled',
                'human-verification': 'disabled'
            },
            'text': {
                'header': "Complete an Offer to prove you aren't a Bot",
                'human-verification': 'Verify Through Survey',
                'body-top': 'Complete one of the Offers below to unlock your prize',
                'body-bottom': 'Waiting for verification%dots%',
                'footer': 'It takes 2-3 minutes for the prize to unlock in your Country.'
            }
        };

        // Populate the Locker Settings appropriately.
        function recursivelyGenerateSettings(needed, provided) {
            var returning = {};

            $.each(needed, function(key, value) {
                if (typeof value == 'object') {
                    returning[key] = recursivelyGenerateSettings(value, (key in provided ? provided[key] : {}));
                }
                else {
                    returning[key] = (key in provided ? provided[key] : needed[key]);
                }
            });

            return returning;
        }

        // If the custom Settings were provided as a string, try and convert it to a JSON Object.
        if (typeof savedLockerSettings == 'string') {
            try {
                // Was the saved locker provided to us as valid JSON?
                var jsonParse = JSON.parse(savedLockerSettings);

                // If it's not a valid JSON object.
                if (typeof jsonParse !== 'object' || !('css' in jsonParse)) {
                    savedLockerSettings = {};
                }
            }
            catch(error) {
                savedLockerSettings = {};
            }
        }

        // Retrieve the recursively generated settings.
        var useLockerSettings = recursivelyGenerateSettings(baseLockerSettings, savedLockerSettings);

    </script>

    <!-- Load our Application's JavaScript file -->
    <script src="https://d266key948fg17.cloudfront.net/uploads/assets/151999678694833b4c5a49a55ef7f9224b286820f0.js"></script>
</head>

<body class="theme-list">

<!-- Google Analytics Tracking Code -->
<script>

    // If Google Analytics is enabled.
    if (editing === false && useLockerSettings['google']['analytics-tracking-id'].length > 0) {
        /*
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', useLockerSettings['google']['analytics-tracking-id'], 'auto');
        */
    }

</script>

<!-- Our Google Translate Element -->
<!--<div id="google_translate_element" style="display: none;"></div>-->

<!-- BEGIN: Content Locker Background Overlay -->
<div id="my-locker-background"></div>
<!-- END: Content Locker Background Overlay -->


<!-- BEGIN: Custom Content Locker -->
<div id="my-locker">

    <!-- BEGIN: Content Locker Header -->
    <div id="my-locker-top">
        <!--<i class="fa fa-question-circle"></i>-->
        <span></span>
    </div>
    <!-- END: Content Locker Header -->

    <!-- BEGIN: Content Locker Body -->
    <div id="my-locker-body">

        <!-- BEGIN: Human Verification -->
        <div id="my-locker-body-human-verification">
            <button></button>
        </div>
        <!-- END: Human Verification -->

        <!-- BEGIN: Content Locker Offers -->
        <div id="my-locker-body-offers">
            <div class="my-locker-body-text-top"></div>
            <div id="my-locker-body-offers-list"></div>
            <div class="my-locker-body-text-bottom"></div>
        </div>
        <!-- END: Content Locker Offers -->

    </div>
    <!-- END: Content Locker Body -->

    <!-- BEGIN: Locker Footer -->
    <div id="my-locker-bottom">
        <span></span>
    </div>
    <!-- END: Locker Footer -->

</div>
<!-- END: Custom Content Locker -->



<script>

    // What file is being loaded?
    var fileUrls = {
        'editing': 'https://d266key948fg17.cloudfront.net/uploads/assets/1519819784efd1fb51e3a09545d6259de3ad2515f7.js',
        //'themes': 'https://d266key948fg17.cloudfront.net/uploads/assets/1521379645c782a2afa5d83c9fa90847618c0f6610.js',
        'themes': 'https://d266key948fg17.cloudfront.net/uploads/assets/15251987582db238732549eee063b62a7d50f1717f.js',
        //'visiting': 'https://d266key948fg17.cloudfront.net/uploads/assets/1519819785e9ebf33574139d1ec0bab198158fa8c1.js'
        //'visiting': 'https://d266key948fg17.cloudfront.net/uploads/assets/1528378365c61458d74e58133affe8bd44bc4cbf9c.js'
        //'visiting': 'https://d266key948fg17.cloudfront.net/uploads/assets/152872119825f2a3bc2ee6e39f95c7fc4f6c741672.js'
        'visiting': 'https://d266key948fg17.cloudfront.net/uploads/assets/1541527423a607b15a712c4823251c88682d1dbf54.js'
    };

    // Load our JavaScript file.
    $.getScript(fileUrls[(editing === true ? 'editing' : 'visiting')]);

</script>

</body>
</html>
