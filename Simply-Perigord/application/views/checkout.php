<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title>Checkout 
    </title>
    <?php $this->load->view("common/header-links.php");?>
  </head>
  <body class="page-template-default page page-id-7 logged-in mkd-core-1.0 mkdf-social-login-1.0 mkd-re-1.1.1 woocommerce-checkout woocommerce-page zuhaus child-child-ver-1.0.0 zuhaus-ver-1.1.1 mkdf-grid-1200 mkdf-sticky-header-on-scroll-up mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-woocommerce-page mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-below-image mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header wpb-js-composer js-comp-ver-5.4.4 vc_responsive" itemscope itemtype="http://schema.org/WebPage">
    <div class="mkdf-wrapper">
      <div class="mkdf-wrapper-inner">
        <?php $this->load->view("common/header2");?>
        <div class="mkdf-content" >
          <div class="mkdf-content-inner">
            <div class="mkdf-title-holder mkdf-centered-type mkdf-preload-background mkdf-has-bg-image mkdf-bg-parallax" style="height: 340px;background-image:url(images/dashboard-title-img.jpg);" data-height="340">
              <div class="mkdf-title-image">
                <img itemprop="image" src="images/dashboard-title-img.jpg" alt="a" />
              </div>
              <div class="mkdf-title-wrapper" style="height: 340px">
                <div class="mkdf-title-inner">
                  <div class="mkdf-grid">
                    <h1 class="mkdf-page-title entry-title" style="color: #ffffff">Checkout
                    </h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="mkdf-container mkdf-default-page-template">
              <div class="mkdf-container-inner clearfix">
                <div class="mkdf-grid-row">
                  <div class="mkdf-page-content-holder mkdf-grid-col-12">
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1509636271201" >
                      <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                          <div class="wpb_wrapper">
                            <div class="woocommerce">
                              <div class="woocommerce-info">Have a coupon?
                                <a href="#" class="showcoupon">Click here to enter your code
                                </a>
                              </div>
                              <form class="checkout_coupon" method="post" style="display:none">
                                <p class="form-row form-row-first">
                                  <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="" />
                                </p>
                                <p class="form-row form-row-last">
                                  <input type="submit" class="button" name="apply_coupon" value="Apply coupon" />
                                </p>
                                <div class="clear">
                                </div>
                              </form>
                              <form name="checkout" method="post" class="checkout woocommerce-checkout" action="" enctype="multipart/form-data">
                                <div class="col2-set" id="customer_details">
                                  <div class="col-1">
                                    <div class="woocommerce-billing-fields">
                                      <h3>Billing details
                                      </h3>
                                      <div class="woocommerce-billing-fields__field-wrapper">
                                        <p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10">
                                          <label for="billing_first_name" class="">First name 
                                            <abbr class="required" title="required">*
                                            </abbr>
                                          </label>
                                          <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder=""  value="" autocomplete="given-name" autofocus="autofocus" />
                                        </p>
                                        <p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                          <label for="billing_last_name" class="">Last name 
                                            <abbr class="required" title="required">*
                                            </abbr>
                                          </label>
                                          <input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder=""  value="" autocomplete="family-name" />
                                        </p>
                                        <p class="form-row form-row-wide" id="billing_company_field" data-priority="30">
                                          <label for="billing_company" class="">Company name
                                          </label>
                                          <input type="text" class="input-text " name="billing_company" id="billing_company" placeholder=""  value="" autocomplete="organization" />
                                        </p>
                                        <p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field" data-priority="40">
                                          <label for="billing_country" class="">Country 
                                            <abbr class="required" title="required">*
                                            </abbr>
                                          </label>
                                          <select name="billing_country" id="billing_country" class="country_to_state country_select " autocomplete="country">
                                            <option value="">Select a country&hellip;
                                            </option>
                                            <option value="AX" >&#197;land Islands
                                            </option>
                                            <option value="AF" >Afghanistan
                                            </option>
                                            <option value="AL" >Albania
                                            </option>
                                            <option value="DZ" >Algeria
                                            </option>
                                            <option value="AS" >American Samoa
                                            </option>
                                            <option value="AD" >Andorra
                                            </option>
                                            <option value="AO" >Angola
                                            </option>
                                            <option value="AI" >Anguilla
                                            </option>
                                            <option value="AQ" >Antarctica
                                            </option>
                                            <option value="AG" >Antigua and Barbuda
                                            </option>
                                            <option value="AR" >Argentina
                                            </option>
                                            <option value="AM" >Armenia
                                            </option>
                                            <option value="AW" >Aruba
                                            </option>
                                            <option value="AU" >Australia
                                            </option>
                                            <option value="AT" >Austria
                                            </option>
                                            <option value="AZ" >Azerbaijan
                                            </option>
                                            <option value="BS" >Bahamas
                                            </option>
                                            <option value="BH" >Bahrain
                                            </option>
                                            <option value="BD" >Bangladesh
                                            </option>
                                            <option value="BB" >Barbados
                                            </option>
                                            <option value="BY" >Belarus
                                            </option>
                                            <option value="PW" >Belau
                                            </option>
                                            <option value="BE" >Belgium
                                            </option>
                                            <option value="BZ" >Belize
                                            </option>
                                            <option value="BJ" >Benin
                                            </option>
                                            <option value="BM" >Bermuda
                                            </option>
                                            <option value="BT" >Bhutan
                                            </option>
                                            <option value="BO" >Bolivia
                                            </option>
                                            <option value="BQ" >Bonaire, Saint Eustatius and Saba
                                            </option>
                                            <option value="BA" >Bosnia and Herzegovina
                                            </option>
                                            <option value="BW" >Botswana
                                            </option>
                                            <option value="BV" >Bouvet Island
                                            </option>
                                            <option value="BR" >Brazil
                                            </option>
                                            <option value="IO" >British Indian Ocean Territory
                                            </option>
                                            <option value="VG" >British Virgin Islands
                                            </option>
                                            <option value="BN" >Brunei
                                            </option>
                                            <option value="BG" >Bulgaria
                                            </option>
                                            <option value="BF" >Burkina Faso
                                            </option>
                                            <option value="BI" >Burundi
                                            </option>
                                            <option value="KH" >Cambodia
                                            </option>
                                            <option value="CM" >Cameroon
                                            </option>
                                            <option value="CA" >Canada
                                            </option>
                                            <option value="CV" >Cape Verde
                                            </option>
                                            <option value="KY" >Cayman Islands
                                            </option>
                                            <option value="CF" >Central African Republic
                                            </option>
                                            <option value="TD" >Chad
                                            </option>
                                            <option value="CL" >Chile
                                            </option>
                                            <option value="CN" >China
                                            </option>
                                            <option value="CX" >Christmas Island
                                            </option>
                                            <option value="CC" >Cocos (Keeling) Islands
                                            </option>
                                            <option value="CO" >Colombia
                                            </option>
                                            <option value="KM" >Comoros
                                            </option>
                                            <option value="CG" >Congo (Brazzaville)
                                            </option>
                                            <option value="CD" >Congo (Kinshasa)
                                            </option>
                                            <option value="CK" >Cook Islands
                                            </option>
                                            <option value="CR" >Costa Rica
                                            </option>
                                            <option value="HR" >Croatia
                                            </option>
                                            <option value="CU" >Cuba
                                            </option>
                                            <option value="CW" >Cura&ccedil;ao
                                            </option>
                                            <option value="CY" >Cyprus
                                            </option>
                                            <option value="CZ" >Czech Republic
                                            </option>
                                            <option value="DK" >Denmark
                                            </option>
                                            <option value="DJ" >Djibouti
                                            </option>
                                            <option value="DM" >Dominica
                                            </option>
                                            <option value="DO" >Dominican Republic
                                            </option>
                                            <option value="EC" >Ecuador
                                            </option>
                                            <option value="EG" >Egypt
                                            </option>
                                            <option value="SV" >El Salvador
                                            </option>
                                            <option value="GQ" >Equatorial Guinea
                                            </option>
                                            <option value="ER" >Eritrea
                                            </option>
                                            <option value="EE" >Estonia
                                            </option>
                                            <option value="ET" >Ethiopia
                                            </option>
                                            <option value="FK" >Falkland Islands
                                            </option>
                                            <option value="FO" >Faroe Islands
                                            </option>
                                            <option value="FJ" >Fiji
                                            </option>
                                            <option value="FI" >Finland
                                            </option>
                                            <option value="FR" >France
                                            </option>
                                            <option value="GF" >French Guiana
                                            </option>
                                            <option value="PF" >French Polynesia
                                            </option>
                                            <option value="TF" >French Southern Territories
                                            </option>
                                            <option value="GA" >Gabon
                                            </option>
                                            <option value="GM" >Gambia
                                            </option>
                                            <option value="GE" >Georgia
                                            </option>
                                            <option value="DE" >Germany
                                            </option>
                                            <option value="GH" >Ghana
                                            </option>
                                            <option value="GI" >Gibraltar
                                            </option>
                                            <option value="GR" >Greece
                                            </option>
                                            <option value="GL" >Greenland
                                            </option>
                                            <option value="GD" >Grenada
                                            </option>
                                            <option value="GP" >Guadeloupe
                                            </option>
                                            <option value="GU" >Guam
                                            </option>
                                            <option value="GT" >Guatemala
                                            </option>
                                            <option value="GG" >Guernsey
                                            </option>
                                            <option value="GN" >Guinea
                                            </option>
                                            <option value="GW" >Guinea-Bissau
                                            </option>
                                            <option value="GY" >Guyana
                                            </option>
                                            <option value="HT" >Haiti
                                            </option>
                                            <option value="HM" >Heard Island and McDonald Islands
                                            </option>
                                            <option value="HN" >Honduras
                                            </option>
                                            <option value="HK" >Hong Kong
                                            </option>
                                            <option value="HU" >Hungary
                                            </option>
                                            <option value="IS" >Iceland
                                            </option>
                                            <option value="IN"  selected='selected'>India
                                            </option>
                                            <option value="ID" >Indonesia
                                            </option>
                                            <option value="IR" >Iran
                                            </option>
                                            <option value="IQ" >Iraq
                                            </option>
                                            <option value="IE" >Ireland
                                            </option>
                                            <option value="IM" >Isle of Man
                                            </option>
                                            <option value="IL" >Israel
                                            </option>
                                            <option value="IT" >Italy
                                            </option>
                                            <option value="CI" >Ivory Coast
                                            </option>
                                            <option value="JM" >Jamaica
                                            </option>
                                            <option value="JP" >Japan
                                            </option>
                                            <option value="JE" >Jersey
                                            </option>
                                            <option value="JO" >Jordan
                                            </option>
                                            <option value="KZ" >Kazakhstan
                                            </option>
                                            <option value="KE" >Kenya
                                            </option>
                                            <option value="KI" >Kiribati
                                            </option>
                                            <option value="KW" >Kuwait
                                            </option>
                                            <option value="KG" >Kyrgyzstan
                                            </option>
                                            <option value="LA" >Laos
                                            </option>
                                            <option value="LV" >Latvia
                                            </option>
                                            <option value="LB" >Lebanon
                                            </option>
                                            <option value="LS" >Lesotho
                                            </option>
                                            <option value="LR" >Liberia
                                            </option>
                                            <option value="LY" >Libya
                                            </option>
                                            <option value="LI" >Liechtenstein
                                            </option>
                                            <option value="LT" >Lithuania
                                            </option>
                                            <option value="LU" >Luxembourg
                                            </option>
                                            <option value="MO" >Macao S.A.R., China
                                            </option>
                                            <option value="MK" >Macedonia
                                            </option>
                                            <option value="MG" >Madagascar
                                            </option>
                                            <option value="MW" >Malawi
                                            </option>
                                            <option value="MY" >Malaysia
                                            </option>
                                            <option value="MV" >Maldives
                                            </option>
                                            <option value="ML" >Mali
                                            </option>
                                            <option value="MT" >Malta
                                            </option>
                                            <option value="MH" >Marshall Islands
                                            </option>
                                            <option value="MQ" >Martinique
                                            </option>
                                            <option value="MR" >Mauritania
                                            </option>
                                            <option value="MU" >Mauritius
                                            </option>
                                            <option value="YT" >Mayotte
                                            </option>
                                            <option value="MX" >Mexico
                                            </option>
                                            <option value="FM" >Micronesia
                                            </option>
                                            <option value="MD" >Moldova
                                            </option>
                                            <option value="MC" >Monaco
                                            </option>
                                            <option value="MN" >Mongolia
                                            </option>
                                            <option value="ME" >Montenegro
                                            </option>
                                            <option value="MS" >Montserrat
                                            </option>
                                            <option value="MA" >Morocco
                                            </option>
                                            <option value="MZ" >Mozambique
                                            </option>
                                            <option value="MM" >Myanmar
                                            </option>
                                            <option value="NA" >Namibia
                                            </option>
                                            <option value="NR" >Nauru
                                            </option>
                                            <option value="NP" >Nepal
                                            </option>
                                            <option value="NL" >Netherlands
                                            </option>
                                            <option value="NC" >New Caledonia
                                            </option>
                                            <option value="NZ" >New Zealand
                                            </option>
                                            <option value="NI" >Nicaragua
                                            </option>
                                            <option value="NE" >Niger
                                            </option>
                                            <option value="NG" >Nigeria
                                            </option>
                                            <option value="NU" >Niue
                                            </option>
                                            <option value="NF" >Norfolk Island
                                            </option>
                                            <option value="KP" >North Korea
                                            </option>
                                            <option value="MP" >Northern Mariana Islands
                                            </option>
                                            <option value="NO" >Norway
                                            </option>
                                            <option value="OM" >Oman
                                            </option>
                                            <option value="PK" >Pakistan
                                            </option>
                                            <option value="PS" >Palestinian Territory
                                            </option>
                                            <option value="PA" >Panama
                                            </option>
                                            <option value="PG" >Papua New Guinea
                                            </option>
                                            <option value="PY" >Paraguay
                                            </option>
                                            <option value="PE" >Peru
                                            </option>
                                            <option value="PH" >Philippines
                                            </option>
                                            <option value="PN" >Pitcairn
                                            </option>
                                            <option value="PL" >Poland
                                            </option>
                                            <option value="PT" >Portugal
                                            </option>
                                            <option value="PR" >Puerto Rico
                                            </option>
                                            <option value="QA" >Qatar
                                            </option>
                                            <option value="RE" >Reunion
                                            </option>
                                            <option value="RO" >Romania
                                            </option>
                                            <option value="RU" >Russia
                                            </option>
                                            <option value="RW" >Rwanda
                                            </option>
                                            <option value="ST" >S&atilde;o Tom&eacute; and Pr&iacute;ncipe
                                            </option>
                                            <option value="BL" >Saint Barth&eacute;lemy
                                            </option>
                                            <option value="SH" >Saint Helena
                                            </option>
                                            <option value="KN" >Saint Kitts and Nevis
                                            </option>
                                            <option value="LC" >Saint Lucia
                                            </option>
                                            <option value="SX" >Saint Martin (Dutch part)
                                            </option>
                                            <option value="MF" >Saint Martin (French part)
                                            </option>
                                            <option value="PM" >Saint Pierre and Miquelon
                                            </option>
                                            <option value="VC" >Saint Vincent and the Grenadines
                                            </option>
                                            <option value="WS" >Samoa
                                            </option>
                                            <option value="SM" >San Marino
                                            </option>
                                            <option value="SA" >Saudi Arabia
                                            </option>
                                            <option value="SN" >Senegal
                                            </option>
                                            <option value="RS" >Serbia
                                            </option>
                                            <option value="SC" >Seychelles
                                            </option>
                                            <option value="SL" >Sierra Leone
                                            </option>
                                            <option value="SG" >Singapore
                                            </option>
                                            <option value="SK" >Slovakia
                                            </option>
                                            <option value="SI" >Slovenia
                                            </option>
                                            <option value="SB" >Solomon Islands
                                            </option>
                                            <option value="SO" >Somalia
                                            </option>
                                            <option value="ZA" >South Africa
                                            </option>
                                            <option value="GS" >South Georgia/Sandwich Islands
                                            </option>
                                            <option value="KR" >South Korea
                                            </option>
                                            <option value="SS" >South Sudan
                                            </option>
                                            <option value="ES" >Spain
                                            </option>
                                            <option value="LK" >Sri Lanka
                                            </option>
                                            <option value="SD" >Sudan
                                            </option>
                                            <option value="SR" >Suriname
                                            </option>
                                            <option value="SJ" >Svalbard and Jan Mayen
                                            </option>
                                            <option value="SZ" >Swaziland
                                            </option>
                                            <option value="SE" >Sweden
                                            </option>
                                            <option value="CH" >Switzerland
                                            </option>
                                            <option value="SY" >Syria
                                            </option>
                                            <option value="TW" >Taiwan
                                            </option>
                                            <option value="TJ" >Tajikistan
                                            </option>
                                            <option value="TZ" >Tanzania
                                            </option>
                                            <option value="TH" >Thailand
                                            </option>
                                            <option value="TL" >Timor-Leste
                                            </option>
                                            <option value="TG" >Togo
                                            </option>
                                            <option value="TK" >Tokelau
                                            </option>
                                            <option value="TO" >Tonga
                                            </option>
                                            <option value="TT" >Trinidad and Tobago
                                            </option>
                                            <option value="TN" >Tunisia
                                            </option>
                                            <option value="TR" >Turkey
                                            </option>
                                            <option value="TM" >Turkmenistan
                                            </option>
                                            <option value="TC" >Turks and Caicos Islands
                                            </option>
                                            <option value="TV" >Tuvalu
                                            </option>
                                            <option value="UG" >Uganda
                                            </option>
                                            <option value="UA" >Ukraine
                                            </option>
                                            <option value="AE" >United Arab Emirates
                                            </option>
                                            <option value="GB" >United Kingdom (UK)
                                            </option>
                                            <option value="US" >United States (US)
                                            </option>
                                            <option value="UM" >United States (US) Minor Outlying Islands
                                            </option>
                                            <option value="VI" >United States (US) Virgin Islands
                                            </option>
                                            <option value="UY" >Uruguay
                                            </option>
                                            <option value="UZ" >Uzbekistan
                                            </option>
                                            <option value="VU" >Vanuatu
                                            </option>
                                            <option value="VA" >Vatican
                                            </option>
                                            <option value="VE" >Venezuela
                                            </option>
                                            <option value="VN" >Vietnam
                                            </option>
                                            <option value="WF" >Wallis and Futuna
                                            </option>
                                            <option value="EH" >Western Sahara
                                            </option>
                                            <option value="YE" >Yemen
                                            </option>
                                            <option value="ZM" >Zambia
                                            </option>
                                            <option value="ZW" >Zimbabwe
                                            </option>
                                          </select>
                                          <noscript>
                                            <input type="submit" name="woocommerce_checkout_update_totals" value="Update country" />
                                          </noscript>
                                        </p>
                                        <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
                                          <label for="billing_address_1" class="">Street address 
                                            <abbr class="required" title="required">*
                                            </abbr>
                                          </label>
                                          <input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="House number and street name"  value="" autocomplete="address-line1" />
                                        </p>
                                        <p class="form-row form-row-wide address-field" id="billing_address_2_field" data-priority="60">
                                          <input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)"  value="" autocomplete="address-line2" />
                                        </p>
                                        <p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-priority="70">
                                          <label for="billing_city" class="">Town / City 
                                            <abbr class="required" title="required">*
                                            </abbr>
                                          </label>
                                          <input type="text" class="input-text " name="billing_city" id="billing_city" placeholder=""  value="" autocomplete="address-level2" />
                                        </p>
                                        <p class="form-row form-row-wide address-field validate-required validate-state" id="billing_state_field" data-priority="80">
                                          <label for="billing_state" class="">State / County 
                                            <abbr class="required" title="required">*
                                            </abbr>
                                          </label>
                                          <select name="billing_state" id="billing_state" class="state_select " autocomplete="address-level1" data-placeholder="">
                                            <option value="">Select a state&hellip;
                                            </option>
                                            <option value="AP" >Andhra Pradesh
                                            </option>
                                            <option value="AR" >Arunachal Pradesh
                                            </option>
                                            <option value="AS" >Assam
                                            </option>
                                            <option value="BR" >Bihar
                                            </option>
                                            <option value="CT" >Chhattisgarh
                                            </option>
                                            <option value="GA" >Goa
                                            </option>
                                            <option value="GJ" >Gujarat
                                            </option>
                                            <option value="HR" >Haryana
                                            </option>
                                            <option value="HP" >Himachal Pradesh
                                            </option>
                                            <option value="JK" >Jammu and Kashmir
                                            </option>
                                            <option value="JH" >Jharkhand
                                            </option>
                                            <option value="KA" >Karnataka
                                            </option>
                                            <option value="KL" >Kerala
                                            </option>
                                            <option value="MP" >Madhya Pradesh
                                            </option>
                                            <option value="MH" >Maharashtra
                                            </option>
                                            <option value="MN" >Manipur
                                            </option>
                                            <option value="ML" >Meghalaya
                                            </option>
                                            <option value="MZ" >Mizoram
                                            </option>
                                            <option value="NL" >Nagaland
                                            </option>
                                            <option value="OR" >Orissa
                                            </option>
                                            <option value="PB" >Punjab
                                            </option>
                                            <option value="RJ" >Rajasthan
                                            </option>
                                            <option value="SK" >Sikkim
                                            </option>
                                            <option value="TN" >Tamil Nadu
                                            </option>
                                            <option value="TS" >Telangana
                                            </option>
                                            <option value="TR" >Tripura
                                            </option>
                                            <option value="UK" >Uttarakhand
                                            </option>
                                            <option value="UP" >Uttar Pradesh
                                            </option>
                                            <option value="WB" >West Bengal
                                            </option>
                                            <option value="AN" >Andaman and Nicobar Islands
                                            </option>
                                            <option value="CH" >Chandigarh
                                            </option>
                                            <option value="DN" >Dadra and Nagar Haveli
                                            </option>
                                            <option value="DD" >Daman and Diu
                                            </option>
                                            <option value="DL" >Delhi
                                            </option>
                                            <option value="LD" >Lakshadeep
                                            </option>
                                            <option value="PY" >Pondicherry (Puducherry)
                                            </option>
                                          </select>
                                        </p>
                                        <p class="form-row form-row-wide address-field validate-required validate-postcode" id="billing_postcode_field" data-priority="90">
                                          <label for="billing_postcode" class="">Postcode / ZIP 
                                            <abbr class="required" title="required">*
                                            </abbr>
                                          </label>
                                          <input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder=""  value="" autocomplete="postal-code" />
                                        </p>
                                        <p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-priority="100">
                                          <label for="billing_phone" class="">Phone 
                                            <abbr class="required" title="required">*
                                            </abbr>
                                          </label>
                                          <input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder=""  value="" autocomplete="tel" />
                                        </p>
                                        <p class="form-row form-row-last validate-required validate-email" id="billing_email_field" data-priority="110">
                                          <label for="billing_email" class="">Email address 
                                            <abbr class="required" title="required">*
                                            </abbr>
                                          </label>
                                          <input type="email" class="input-text " name="billing_email" id="billing_email" placeholder=""  value="xeneration90@gmail.com" autocomplete="email username" />
                                        </p>	
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-2">
                                    <div class="woocommerce-shipping-fields">
                                    </div>
                                    <div class="woocommerce-additional-fields">
                                      <h3>Additional information
                                      </h3>
                                      <div class="woocommerce-additional-fields__field-wrapper">
                                        <p class="form-row notes" id="order_comments_field" data-priority="">
                                          <label for="order_comments" class="">Order notes
                                          </label>
                                          <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery."  rows="2" cols="5">
                                          </textarea>
                                        </p>					
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <h3 id="order_review_heading">Your order
                                </h3>
                                <div id="order_review" class="woocommerce-checkout-review-order">
                                  <table class="shop_table woocommerce-checkout-review-order-table">
                                    <thead>
                                      <tr>
                                        <th class="product-name">Product
                                        </th>
                                        <th class="product-total">Total
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr class="cart_item mkdf-product-type-package">
                                        <td class="product-name">
                                          Medium&nbsp;							 
                                          <strong class="product-quantity">&times; 1
                                          </strong>													
                                        </td>
                                        <td class="product-total">
                                          <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">&#36;
                                            </span>24.00
                                          </span>						
                                        </td>
                                      </tr>
                                      <tr class="cart_item mkdf-product-type-package">
                                        <td class="product-name">
                                          Standard&nbsp;							 
                                          <strong class="product-quantity">&times; 1
                                          </strong>													
                                        </td>
                                        <td class="product-total">
                                          <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">&#36;
                                            </span>36.00
                                          </span>						
                                        </td>
                                      </tr>
                                    </tbody>
                                    <tfoot>
                                      <tr class="cart-subtotal">
                                        <th>Subtotal
                                        </th>
                                        <td>
                                          <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">&#36;
                                            </span>60.00
                                          </span>
                                        </td>
                                      </tr>
                                      <tr class="order-total">
                                        <th>Total
                                        </th>
                                        <td>
                                          <strong>
                                            <span class="woocommerce-Price-amount amount">
                                              <span class="woocommerce-Price-currencySymbol">&#36;
                                              </span>60.00
                                            </span>
                                          </strong> 
                                        </td>
                                      </tr>
                                    </tfoot>
                                  </table>
                                  <Style>
                                    .blockUI {
                                      width:0px !important;
                                    }
                                    .blockOverlay{
                                      width:0px !important;
                                    }
                                    </style>
                                  <div id="" class="woocommerce-checkout-payment">
                                    <ul class="wc_payment_methods payment_methods methods">
                                      <li class="wc_payment_method payment_method_cheque">
                                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque"  checked='checked' data-order_button_text="" />
                                        <label for="payment_method_cheque">
                                          Check payments 	
                                        </label>
                                        <div class="payment_box payment_method_cheque" >
                                          <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                          </p>
                                        </div>
                                      </li>
                                      <li class="wc_payment_method payment_method_paypal">
                                        <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal"  data-order_button_text="Proceed to PayPal" />
                                        <label for="payment_method_paypal">
                                          PayPal 
                                          <img src="images/AM_mc_vs_dc_ae.jpg" alt="PayPal acceptance mark" />
                                          <a href="#" class="about_paypal" onclick="">What is PayPal?
                                          </a>	
                                        </label>
                                        <div class="payment_box payment_method_paypal" style="display:none;">
                                          <p>Pay via PayPal; you can pay with your credit card if you don&#8217;t have a PayPal account.
                                          </p>
                                        </div>
                                      </li>
                                    </ul>
                                    <div class="form-row place-order">
                                      <noscript>
                                        Since your browser does not support JavaScript, or it is disabled, please ensure you click the 
                                        <em>Update Totals
                                        </em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.			
                                        <br/>
                                        <input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" />
                                      </noscript>
                                      <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order" />
                                      <input type="hidden" id="_wpnonce" name="_wpnonce" value="6a3bd62095" />
                                      <input type="hidden" name="_wp_http_referer" value="/checkout/" />	
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <!-- close div.content_inner -->
        </div>  
        <!-- close div.content -->
        <?php $this->load->view("common/footer");?>
      </div> 
      <!-- close div.mkdf-wrapper-inner  -->
    </div> 
    <!-- close div.mkdf-wrapper -->
    <?php $this->load->view("common/footer");?>
    </div> 
  <!-- close div.mkdf-wrapper-inner  -->
  </div> 
<!-- close div.mkdf-wrapper -->		
<?php $this->load->view("common/footer-links");?>
</body>
</html>
