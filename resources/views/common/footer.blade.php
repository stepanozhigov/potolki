@include('common.form-request-open')
<div class="popup" id="popup_callback">
    @include('common.forms.callback')
</div>
<footer class="footer {{ !empty($class) ? $class:'' }}">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__contacts">
                <svg class="footer__logo" viewBox="0 0 147 39" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 46.2 (44496) - http://www.bohemiancoding.com/sketch -->
                    <title>Logo light</title>
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="GUI" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-944.000000, -1017.000000)" id="Logo-light" fill="#F8F8F8">
                            <g transform="translate(944.000000, 1017.000000)">
                                <path d="M49.1295759,14.3048775 L49.1295759,25.8195492 L46.9845784,25.8195492 L46.9845784,14.3048775 L43.3913043,14.3048775 L43.3913043,12.2817263 L52.7045718,12.2817263 L52.7045718,14.3048775 L49.1295759,14.3048775 Z M63.617717,21.8305059 C63.617717,22.3413459 63.5403036,22.8364678 63.3833263,23.3136261 C63.2263491,23.7919072 62.9908832,24.2174201 62.6769287,24.5912877 C62.3640493,24.9640325 61.9748317,25.2626774 61.5103511,25.4849771 C61.0469456,25.7072767 60.513653,25.8195492 59.9115484,25.8195492 L54.0786604,25.8195492 L54.0786604,12.2817263 L59.6857592,12.2817263 C60.300766,12.2817263 60.8437353,12.3794035 61.3135919,12.5758804 C61.7834485,12.7723573 62.1715909,13.0384433 62.4801695,13.3718927 C62.7876729,13.7053422 63.018838,14.0893142 63.1758153,14.5215635 C63.3327926,14.9538128 63.4112812,15.4118848 63.4112812,15.8969021 C63.4112812,16.4200922 63.2865595,16.9410368 63.0349658,17.4586132 C62.7844473,17.9761896 62.3769516,18.3983343 61.8114033,18.7261702 C62.4382372,19.0528832 62.8962667,19.5087098 63.185492,20.0914042 C63.473642,20.6740987 63.617717,21.253425 63.617717,21.8305059 L63.617717,21.8305059 Z M61.2275769,16.0540837 C61.2275769,15.4511802 61.0501711,15.0088263 60.6889084,14.7270223 C60.3308712,14.4452182 59.8298342,14.3048775 59.1900981,14.3048775 L56.2236579,14.3048775 L56.2236579,17.7830808 L59.2847145,17.7830808 C59.8491876,17.7830808 60.3158186,17.6315129 60.6803069,17.3306225 C61.0469456,17.0297321 61.2275769,16.6030964 61.2275769,16.0540837 L61.2275769,16.0540837 Z M61.3985316,21.781106 C61.3985316,21.1557479 61.1942462,20.6617487 60.7867504,20.2946175 C60.3781794,19.9308545 59.892195,19.7478503 59.327722,19.7478503 L56.2236579,19.7478503 L56.2236579,23.7952753 L59.3470754,23.7952753 C60.024443,23.7952753 60.5351567,23.6156393 60.8802916,23.2586126 C61.2254266,22.897095 61.3985316,22.406464 61.3985316,21.781106 L61.3985316,21.781106 Z M75.1716736,21.437552 C75.1716736,22.144869 75.0469519,22.7803316 74.7964334,23.3439397 C74.5448397,23.9075479 74.1997048,24.3824607 73.7545775,24.7675555 C73.3094502,25.1537731 72.7879846,25.4490499 72.1966319,25.6511404 C71.5999033,25.8554765 70.9666183,25.9565217 70.2892507,25.9565217 C69.5989808,25.9565217 68.9592447,25.8554765 68.3635913,25.6511404 C67.7700882,25.4490499 67.2561489,25.1537731 66.8239239,24.7675555 C66.3906236,24.3824607 66.0519398,23.9075479 65.8003461,23.3439397 C65.5498276,22.7803316 65.4251059,22.144869 65.4251059,21.437552 L65.4251059,16.6233055 C65.4251059,15.9159885 65.5530531,15.2872622 65.8100228,14.7371268 C66.0669924,14.1869914 66.4132025,13.7188149 66.8518787,13.3325973 C67.2905549,12.9463798 67.8055693,12.651103 68.3915461,12.4490124 C68.9807484,12.2446764 69.6108079,12.1436311 70.2892507,12.1436311 C70.9537161,12.1436311 71.5805499,12.2480446 72.1772786,12.4579942 C72.772932,12.6679439 73.2900968,12.9654661 73.7352241,13.3516837 C74.1803514,13.7390239 74.5297871,14.2105686 74.7867568,14.7674404 C75.0426512,15.3231895 75.1716736,15.9552839 75.1716736,16.6637236 L75.1716736,21.437552 Z M73.0266761,16.9960503 C73.0266761,16.5121557 72.951413,16.0933791 72.8008869,15.7397206 C72.6503607,15.3849394 72.4471504,15.0941535 72.1966319,14.8651175 C71.9450382,14.6360815 71.6536626,14.4687954 71.3171292,14.364382 C70.9848965,14.2588458 70.6397616,14.2072004 70.2892507,14.2072004 C69.9247624,14.2072004 69.5764019,14.2588458 69.2506203,14.364382 C68.9216132,14.4687954 68.6356135,14.6360815 68.3915461,14.8651175 C68.1474787,15.0941535 67.9453436,15.3849394 67.7958927,15.7397206 C67.6442913,16.0933791 67.5701034,16.5121557 67.5701034,16.9960503 L67.5701034,21.1041026 C67.5701034,21.6014699 67.6442913,22.0269828 67.7958927,22.3806413 C67.9453436,22.7342998 68.1496291,23.0228403 68.4001476,23.2451399 C68.6517413,23.4674395 68.9431169,23.6313574 69.2699737,23.7357709 C69.5968304,23.8413071 69.9376646,23.8929525 70.2892507,23.8929525 C70.6397616,23.8929525 70.9848965,23.8413071 71.3171292,23.7357709 C71.6536626,23.6313574 71.9450382,23.4674395 72.1966319,23.2451399 C72.4471504,23.0228403 72.6503607,22.7342998 72.8008869,22.3806413 C72.951413,22.0269828 73.0266761,21.6014699 73.0266761,21.1041026 L73.0266761,16.9960503 Z M85.2203687,16.1517608 C84.9687751,16.5840101 84.715031,17.0128912 84.4580614,17.4395268 C84.2010917,17.8650398 83.9398214,18.2871845 83.6764006,18.7059611 C83.5893105,18.8507927 83.4323332,19.1056513 83.206544,19.4727825 C82.9807548,19.8399138 82.7205596,20.2620585 82.4259584,20.7392168 C82.1313573,21.2186205 81.8174028,21.7260924 81.4851701,22.2627552 C81.1529374,22.7994179 80.8357573,23.3080125 80.5336298,23.7851708 C80.2336527,24.2634518 79.970232,24.6855966 79.7444427,25.0527278 C79.5186535,25.4187363 79.3627515,25.6747177 79.2745861,25.8195492 L77.2983929,25.8195492 L77.2983929,12.2817263 L79.4433905,12.2817263 L79.4433905,21.9090967 L79.5380069,21.9090967 L85.4644361,12.2817263 L87.4782609,12.2817263 L87.4782609,25.8195492 L85.3321882,25.8195492 L85.3321882,16.1517608 L85.2203687,16.1517608 Z M82.3603721,11.7315909 C81.8335306,11.7315909 81.3970047,11.6395274 81.0518698,11.4554005 C80.7078101,11.2723962 80.4250359,11.0433602 80.2056979,10.7682925 C79.9863598,10.4932248 79.8293825,10.197948 79.7347661,9.88358489 C79.6401496,9.56922178 79.5885407,9.27506772 79.5745632,9 L81.1174562,9 C81.1303584,9.13135887 81.1647644,9.26833137 81.2217493,9.41316295 C81.277659,9.5568718 81.3593732,9.69159885 81.4668919,9.81509864 C81.5722602,9.93972116 81.7012826,10.0452573 81.8518087,10.1294618 C82.0023349,10.2147889 82.1722144,10.2574524 82.3603721,10.2574524 C82.573259,10.2574524 82.7581911,10.2147889 82.9140932,10.1294618 C83.0721457,10.0452573 83.2033184,9.93972116 83.3108371,9.81509864 C83.4172806,9.69159885 83.494694,9.5568718 83.5452278,9.41316295 C83.5957616,9.26833137 83.6204909,9.13135887 83.6204909,9 L85.1451057,9 C85.1193012,9.27506772 85.0569404,9.56922178 84.956948,9.88358489 C84.8558804,10.197948 84.7021287,10.4932248 84.4956929,10.7682925 C84.289257,11.0433602 84.0129341,11.2723962 83.6677991,11.4554005 C83.3226642,11.6395274 82.8872135,11.7315909 82.3603721,11.7315909 L82.3603721,11.7315909 Z" id="Fill-7"></path>
                                <path d="M98.9527857,12.3913043 C100.35664,12.3913043 101.543844,12.750298 102.514397,13.4672073 L101.825052,14.5043001 C101.442084,14.2153803 100.998934,13.9943782 100.494509,13.8434499 C99.9900843,13.6935997 99.476906,13.6181356 98.9527857,13.6181356 C98.5315199,13.6181356 98.1222903,13.680663 97.7272852,13.8057179 C97.3322802,13.9318508 96.9733836,14.1269795 96.6538781,14.3911039 C96.3354668,14.6552284 96.080519,14.9980512 95.8879403,15.4195723 C95.6964559,15.8410934 95.6012607,16.3467031 95.6012607,16.9385575 L95.6012607,21.089085 C95.6012607,21.6798614 95.6997384,22.1854711 95.8977881,22.6080702 C96.0969319,23.0285133 96.3518798,23.3745702 96.6637259,23.6451631 C96.9766662,23.9157559 97.3322802,24.117353 97.7272852,24.2488762 C98.1222903,24.3814774 98.5194838,24.447239 98.9144888,24.447239 C99.4506453,24.447239 99.9747656,24.3750091 100.484661,24.2294711 C100.995651,24.0860892 101.455214,23.8499943 101.863349,23.5222643 L102.532998,24.5421082 C102.163159,24.8310281 101.6653,25.0886842 101.039419,25.3150766 C100.414633,25.541469 99.7187235,25.6546652 98.9527857,25.6546652 C98.2754779,25.6546652 97.653974,25.5544057 97.0849917,25.3517306 C96.5171035,25.1512116 96.0225265,24.8622918 95.6012607,24.4849711 C95.1799949,24.1065724 94.8517359,23.6548656 94.6153893,23.1266167 C94.3790428,22.5983677 94.2608696,22.0065133 94.2608696,21.3532095 L94.2608696,16.655028 C94.2608696,16.0135829 94.3823254,15.431431 94.6252371,14.9096504 C94.8681488,14.3878698 95.1985963,13.9383191 95.6209563,13.5609984 C96.0422221,13.1836778 96.536799,12.8947579 97.1046872,12.6931609 C97.6725754,12.4915638 98.2897024,12.3913043 98.9527857,12.3913043 L98.9527857,12.3913043 Z M108.738188,13.7496588 L108.738188,25.523142 L107.397797,25.523142 L107.397797,13.7496588 L103.413826,13.7496588 L103.413826,12.5239056 L112.682768,12.5239056 L112.682768,13.7496588 L108.738188,13.7496588 Z M115.555035,23.2010027 L117.948043,19.5787242 L122.639959,12.5239056 L123.961749,12.5239056 L123.961749,25.523142 L122.621358,25.523142 L122.621358,14.7867516 L122.544764,14.7867516 L119.997474,18.6548276 L115.440144,25.523142 L114.118354,25.523142 L114.118354,12.5239056 L115.45984,12.5239056 L115.45984,23.2010027 L115.555035,23.2010027 Z M128.940345,13.7302537 L128.940345,18.4101082 C128.940345,19.5420702 128.867034,20.5220259 128.720411,21.3532095 C128.572695,22.183315 128.362609,22.8937559 128.087966,23.4845323 C127.814416,24.0763867 127.471933,24.5701378 127.063797,24.9657854 C126.654568,25.3614331 126.189534,25.6923973 125.665414,25.9565217 L125.053758,24.8245597 C125.473929,24.5733719 125.841579,24.283374 126.153426,23.9567221 C126.46746,23.6300702 126.732256,23.2139394 126.948907,22.7115639 C127.165558,22.2081103 127.329687,21.5882264 127.436919,20.8529901 C127.546338,20.1177538 127.599954,19.2154183 127.599954,18.1449057 L127.599954,12.5239056 L135.547106,12.5239056 L135.547106,25.523142 L134.206715,25.523142 L134.206715,13.7302537 L128.940345,13.7302537 Z M146.826087,21.8243213 C146.826087,22.3407116 146.74074,22.8247601 146.567856,23.2775449 C146.394973,23.7303297 146.146591,24.1238213 145.823803,24.4558635 C145.497732,24.7900618 145.096162,25.0509521 144.620186,25.2396125 C144.142022,25.4282728 143.597112,25.523142 142.98655,25.523142 L137.806622,25.523142 L137.806622,12.5239056 L139.147013,12.5239056 L139.147013,18.1643107 L143.05439,18.1643107 C143.662764,18.1643107 144.200014,18.2721166 144.661766,18.4844943 C145.127893,18.699028 145.521804,18.9782453 145.845687,19.3253803 C146.168475,19.6703592 146.414669,20.0606166 146.57661,20.4939964 C146.742928,20.9284542 146.826087,21.3715365 146.826087,21.8243213 L146.826087,21.8243213 Z M145.485696,21.8243213 C145.485696,21.0696799 145.237313,20.4756694 144.742736,20.0422896 C144.244877,19.6078318 143.590547,19.3911419 142.776464,19.3911419 L139.147013,19.3911419 L139.147013,24.3157158 L142.814761,24.3157158 C143.194448,24.3157158 143.548967,24.2618129 143.873944,24.155085 C144.196732,24.0483572 144.476846,23.8898825 144.713193,23.6828951 C144.946257,23.4748297 145.134459,23.2171736 145.274516,22.9099268 C145.415667,22.6016019 145.485696,22.239374 145.485696,21.8243213 L145.485696,21.8243213 Z" id="Fill-8"></path>
                                <path d="M32.4900079,7.6309787 L33.0652174,9.0239608 C22.9946597,13.9491669 18.1015366,24.4441258 17.3737429,39 C16.8128038,39 16.2529625,38.9994561 15.6914745,38.9994561 C14.9636808,24.4441258 10.0711066,13.948623 0,9.0239608 L0.575758396,7.63043478 C10.9492891,12.1406291 22.1159283,12.1406291 32.4900079,7.6309787 Z M16.532352,0 C18.6389988,0 20.3478261,1.70861729 20.3478261,3.81521739 C20.3478261,5.92181749 18.6389988,7.63043478 16.532352,7.63043478 C14.4257053,7.63043478 12.7173913,5.92181749 12.7173913,3.81521739 C12.7173913,1.70861729 14.4257053,0 16.532352,0 Z" id="Combined-Shape"></path>
                            </g>
                        </g>
                    </g>
                </svg>
                <div class="footer__contacts-content">
                    <div class="footer__contacts-item">
                        <svg class="footer__contacts-number" viewBox="0 0 11 19" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 47 (45396) - http://www.bohemiancoding.com/sketch -->
                            <title>Combined Shape</title>
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Menu-/-1440-/-Footer" transform="translate(-130.000000, -129.000000)" fill="#FFFFFF">
                                    <g id="Group-18" transform="translate(130.000000, 122.000000)">
                                        <g id="Group-16">
                                            <path d="M4.09911811,7.2476114 C4.03151738,7.19982296 4.05767341,7.1032076 4.14082051,7.09324768 C4.4244541,7.05543351 4.67543998,7.02706226 4.85917199,7.00776324 C5.27745254,6.90696614 5.92868216,7.79945642 6.31469472,9.00179189 C6.70070728,10.2041274 6.67601124,11.2600024 6.25773068,11.3607995 C6.25169675,11.3621997 6.24639901,11.3624956 6.24036507,11.3638958 C6.2255497,11.3682672 6.20872302,11.3731054 6.19263253,11.3768392 C5.94583302,11.4257086 5.68777404,11.4799912 5.44386644,11.5347238 C5.38855538,11.5475589 5.3415345,11.4931279 5.36997649,11.4491894 C5.59275356,11.0997191 5.54791116,10.1953325 5.2235338,9.18872326 C4.92649742,8.26351485 4.47988402,7.51676932 4.09911811,7.2476114 Z M8.46975864,20.9554806 C8.71151052,20.8937806 8.96471914,20.8238213 9.20559042,20.7557914 C9.22141145,20.7511866 9.2377714,20.7483237 9.25413136,20.7454608 C9.25915964,20.7442939 9.26465464,20.7411519 9.27068858,20.7397517 C9.68796347,20.639188 10.3404682,21.5323158 10.7264808,22.7346513 C11.1124933,23.9369867 11.0867916,24.9930952 10.6692473,25.092788 C10.5000663,25.1591173 10.2684097,25.2464785 10.0025608,25.3417742 C9.92480298,25.3691527 9.84489844,25.299016 9.87457685,25.2277202 C10.0405459,24.8270234 9.97701515,23.9876486 9.67997877,23.0624402 C9.35687653,22.0564685 8.85654432,21.2615136 8.45716221,21.0610845 C8.40743252,21.0362194 8.4157227,20.9689533 8.46975864,20.9554806 Z M8.44628133,25.7171021 C8.44628133,25.7171021 6.81735511,26.1203028 6.49737213,25.9639908 C4.54405161,25.0086711 2.68946871,22.0767039 1.63177897,18.9682165 L0.772197195,16.2944903 C-0.175139888,13.1594617 -0.335212341,9.82027643 0.768621653,8.12753108 C0.948377325,7.85151938 2.58423742,7.46724586 2.58423742,7.46724586 C2.58423742,7.46724586 2.79086355,7.41743072 2.90523883,7.38995614 C3.32351939,7.28915904 3.97771311,8.19122956 4.36722872,9.40488714 C4.75748051,10.6174404 4.73447345,11.6822582 4.3161929,11.7830553 L4.09374574,11.8374752 C4.02938377,11.8524106 3.97269188,11.8851688 3.93036798,11.9295283 C3.08972658,12.8181636 2.81895065,14.2979926 3.2157767,15.7059807 L4.07435282,18.3799403 C4.57449193,19.7630209 5.68801777,20.9094836 6.93850967,21.2932625 C7.00077396,21.3133519 7.06925009,21.3151976 7.13361205,21.3002622 L7.35605922,21.2458423 C7.77360358,21.1461495 8.4285335,22.0471157 8.8180491,23.2607733 C9.2075647,24.4744309 9.1855633,25.5390153 8.76728275,25.6398124 C8.65290747,25.667287 8.44628133,25.7171021 8.44628133,25.7171021 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <a href="tel:88002220971" class="footer__contacts-link">8 800 333-97-16</a>
                        <span class="footer__contacts-text">Круглосуточно | Бесплатно</span>
                    </div>
                    <div class="footer__contacts-item">
                        <svg class="footer__contacts-mail" viewBox="0 0 13 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 47 (45396) - http://www.bohemiancoding.com/sketch -->
                            <title></title>
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Menu-/-1440-/-Footer" transform="translate(-130.000000, -191.000000)" fill="#FFFFFF">
                                    <g id="Group-12" transform="translate(130.000000, 187.000000)">
                                        <path d="M13,7.29352679 L13,13.0535714 C13,13.6919643 12.4776786,14.2142857 11.8392857,14.2142857 L1.16071429,14.2142857 C0.522321429,14.2142857 0,13.6919643 0,13.0535714 L0,7.29352679 C0.217633929,7.53292411 0.464285714,7.74330357 0.732700893,7.92466518 C1.93694196,8.74441964 3.15569196,9.56417411 4.33816964,10.4274554 C4.94754464,10.8772321 5.70200893,11.4285714 6.49274554,11.4285714 L6.50725446,11.4285714 C7.29799107,11.4285714 8.05245536,10.8772321 8.66183036,10.4274554 C9.84430804,9.57142857 11.063058,8.74441964 12.2745536,7.92466518 C12.5357143,7.74330357 12.7823661,7.53292411 13,7.29352679 Z M13,5.16071429 C13,5.97321429 12.3978795,6.70591518 11.7594866,7.1484375 C10.6277902,7.93191964 9.48883929,8.71540179 8.36439732,9.50613839 C7.89285714,9.83258929 7.09486607,10.5 6.50725446,10.5 L6.49274554,10.5 C5.90513393,10.5 5.10714286,9.83258929 4.63560268,9.50613839 C3.51116071,8.71540179 2.37220982,7.93191964 1.24776786,7.1484375 C0.732700893,6.80022321 0,5.98046875 0,5.3203125 C0,4.609375 0.384486607,4 1.16071429,4 L11.8392857,4 C12.4704241,4 13,4.52232143 13,5.16071429 Z" id=""></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <a href="mailto:sochi@mail-ts.ru" class="footer__contacts-link">sochi@mail-ts.ru</a>
                    </div>
                    <div class="footer__contacts-item">
                        <svg class="footer__contacts-path" viewBox="0 0 13 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 47 (45396) - http://www.bohemiancoding.com/sketch -->
                            <title></title>
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <g id="Symbols" stroke="none" stroke-width="1" fill="" fill-rule="evenodd">
                                <g id="Menu-/-1440-/-Footer" transform="translate(-130.000000, -235.000000)" fill="">
                                    <g id="Group-13" transform="translate(130.000000, 235.000000)">
                                        <path d="M9.45454545,6.5 C9.45454545,4.87269176 8.12730824,3.54545455 6.5,3.54545455 C4.87269176,3.54545455 3.54545455,4.87269176 3.54545455,6.5 C3.54545455,8.12730824 4.87269176,9.45454545 6.5,9.45454545 C8.12730824,9.45454545 9.45454545,8.12730824 9.45454545,6.5 Z M13,5.90909091 C13,6.61310369 12.9111328,7.34019886 12.5810547,7.97496449 L7.95996094,16.907848 C7.69335938,17.4156605 7.109375,17.7272727 6.5,17.7272727 C5.890625,17.7272727 5.30664062,17.4156605 5.05273438,16.907848 L0.418945312,7.97496449 C0.0888671875,7.34019886 0,6.61310369 0,5.90909091 C0,2.64293324 2.90722656,0 6.5,0 C10.0927734,0 13,2.64293324 13,5.90909091 Z" id=""></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <a href="javascript:void(0)" class="footer__contacts-text">Наши офисы</a>
                    </div>
                </div>
            </div>
            <div class="footer__content">
                <div class="footer__header">
                    <div class="footer__item">
                        <a href="javascript:void(0);" class="footer__title">Каталог</a>
                        <a href="javascript:void(0);" class="footer__link">Окна</a>
                        <a href="javascript:void(0);" class="footer__link">Балконы</a>
                        <a href="javascript:void(0);" class="footer__link">Двери</a>
                        <a href="javascript:void(0);" class="footer__link">Перегородки</a>
                        <a href="javascript:void(0);" class="footer__link">Жалюзи</a>
                    </div>
                    <div class="footer__item">
                        <a href="javascript:void(0);" class="footer__title">Услуги</a>
                        <a href="javascript:void(0);" class="footer__link">Бесплатный замер</a>
                        <a href="javascript:void(0);" class="footer__link">Изготовление</a>
                        <a href="javascript:void(0);" class="footer__link">Доставка</a>
                        <a href="javascript:void(0);" class="footer__link">Установка</a>
                        <a href="javascript:void(0);" class="footer__link">Обслуживание</a>
                    </div>
                    <div class="footer__item ">
                        <a href="javascript:void(0);" class="footer__title ">О компании</a>
                        <a href="javascript:void(0);" class="footer__link">Написать директору</a>
                        <a href="javascript:void(0);" class="footer__link">Сотрудники</a>
                        <a href="javascript:void(0);" class="footer__link">Отзывы</a>
                        <a href="javascript:void(0);" class="footer__link">Вакансии</a>
                    </div>
                    <div class="footer__item">
                        <a href="javascript:void(0);" class="footer__title">Наши работы</a>
                        <a href="javascript:void(0);" class="footer__link">Окна и балконы</a>
                        <a href="javascript:void(0);" class="footer__link">Перегородки</a>
                        <a href="javascript:void(0);" class="footer__link">Двери</a>
                    </div>
                </div>
                <div class="footer__footer">
                    <div class="footer__item">
                        <a href="javascript:void(0);" class="footer__title">Вопрос-ответ</a>
                    </div>
                    <div class="footer__item">
                        <a href="javascript:void(0);" class="footer__title">Рассрочка</a>
                    </div>
                    <div class="footer__item">
                        <a href="javascript:void(0);" class="footer__title">Скидки</a>
                    </div>
                    <div class="footer__item">
                        <a href="javascript:void(0);" class="footer__social footer__social_vk"></a>
                        <a href="javascript:void(0);" class="footer__social footer__social_ok"></a>
                        <a href="javascript:void(0);" class="footer__social footer__social_fb"></a>
                        <a href="javascript:void(0);" class="footer__social footer__social_insta"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <div class="container">
            <div class="footer__copyright-content">
                <p class="footer__copyright-text">&copy;  2003-2016  ООО «Твой Стиль»  Все права защищены</p>
                <div class="footer__developer">
                    <div class="footer__developer-content">
                        <p class="footer__developer-text">Разработка и продвижение – <a href="javascript:void(0);" class="footer__developer-link" target="_blank">
                            TREND PRO</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
