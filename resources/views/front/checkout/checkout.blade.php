@php
    $pagename = 'Checkout';
    $breadcrumbs = [['label' => 'Home', 'url' => url('/')], ['label' => 'Checkout', 'url' => route('blogs')]];
@endphp
@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ frontCss('checkout.css') }}">
    {{-- inner-banner Starts Here --}}
    <section class="inner-banner">
        <div class="inner_banner_wrapper">
            @include('layouts.front.partials.breadcrumbs', [
                'pagename' => $pagename,
                'breadcrumbs' => $breadcrumbs,
            ])
        </div>
    </section>
    {{-- inner-banner Ends Here --}}
    {{-- checkout starts here --}}
    <section class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="checkout-form-wrapper">
                        <form action="" class="form-floating">
                            <div class="contact-wrapper">
                                <div class="contact-heading-wrapper">
                                    <h5>Contact information</h5>
                                </div>
                                <div class="contact-txt-wrapper mt-4">
                                    <p>
                                        We'll use this email to send you details and updates about your order.
                                    </p>
                                </div>
                                <div class="contact-input-wrapper mt-3">
                                    <div class="form-floating mb-1 mt-3">
                                        <input type="text" class="form-control" id="email" placeholder="Enter email"
                                            name="email">
                                        <label for="email">Email</label>
                                    </div>
                                    <small>
                                        You are currently checking out as a guest.
                                    </small>
                                </div>
                            </div>
                            <div class="bill-wrapper pt-5">
                                <div class="bill-heading-wrapper">
                                    <h5>Billing address</h5>
                                </div>
                                <div class="bill-txt-wrapper mt-4">
                                    <p>
                                        Enter the billing address that matches your payment method.
                                    </p>
                                </div>
                                <div class="bill-fields-wrapper">
                                    <div class="form-floating mb-2 mt-3">
                                        <select class="form-select" id="sel1" name="sellist">
                                            <option value="AF" data-alternate-values="[Afghanistan]">Afghanistan
                                            </option>
                                            <option value="AX" data-alternate-values="[Åland Islands]">Åland Islands
                                            </option>
                                            <option value="AL" data-alternate-values="[Albania]">Albania</option>
                                            <option value="DZ" data-alternate-values="[Algeria]">Algeria</option>
                                            <option value="AS" data-alternate-values="[American Samoa]">American Samoa
                                            </option>
                                            <option value="AD" data-alternate-values="[Andorra]">Andorra</option>
                                            <option value="AO" data-alternate-values="[Angola]">Angola</option>
                                            <option value="AI" data-alternate-values="[Anguilla]">Anguilla</option>
                                            <option value="AQ" data-alternate-values="[Antarctica]">Antarctica</option>
                                            <option value="AG" data-alternate-values="[Antigua and Barbuda]">Antigua and
                                                Barbuda</option>
                                            <option value="AR" data-alternate-values="[Argentina]">Argentina</option>
                                            <option value="AM" data-alternate-values="[Armenia]">Armenia</option>
                                            <option value="AW" data-alternate-values="[Aruba]">Aruba</option>
                                            <option value="AU" data-alternate-values="[Australia]">Australia</option>
                                            <option value="AT" data-alternate-values="[Austria]">Austria</option>
                                            <option value="AZ" data-alternate-values="[Azerbaijan]">Azerbaijan</option>
                                            <option value="BS" data-alternate-values="[Bahamas]">Bahamas</option>
                                            <option value="BH" data-alternate-values="[Bahrain]">Bahrain</option>
                                            <option value="BD" data-alternate-values="[Bangladesh]">Bangladesh</option>
                                            <option value="BB" data-alternate-values="[Barbados]">Barbados</option>
                                            <option value="BY" data-alternate-values="[Belarus]">Belarus</option>
                                            <option value="PW" data-alternate-values="[Belau]">Belau</option>
                                            <option value="BE" data-alternate-values="[Belgium]">Belgium</option>
                                            <option value="BZ" data-alternate-values="[Belize]">Belize</option>
                                            <option value="BJ" data-alternate-values="[Benin]">Benin</option>
                                            <option value="BM" data-alternate-values="[Bermuda]">Bermuda</option>
                                            <option value="BT" data-alternate-values="[Bhutan]">Bhutan</option>
                                            <option value="BO" data-alternate-values="[Bolivia]">Bolivia</option>
                                            <option value="BQ"
                                                data-alternate-values="[Bonaire, Saint Eustatius and Saba]">Bonaire, Saint
                                                Eustatius and Saba</option>
                                            <option value="BA" data-alternate-values="[Bosnia and Herzegovina]">Bosnia
                                                and Herzegovina</option>
                                            <option value="BW" data-alternate-values="[Botswana]">Botswana</option>
                                            <option value="BV" data-alternate-values="[Bouvet Island]">Bouvet Island
                                            </option>
                                            <option value="BR" data-alternate-values="[Brazil]">Brazil</option>
                                            <option value="IO" data-alternate-values="[British Indian Ocean Territory]">
                                                British Indian Ocean Territory</option>
                                            <option value="BN" data-alternate-values="[Brunei]">Brunei</option>
                                            <option value="BG" data-alternate-values="[Bulgaria]">Bulgaria</option>
                                            <option value="BF" data-alternate-values="[Burkina Faso]">Burkina Faso
                                            </option>
                                            <option value="BI" data-alternate-values="[Burundi]">Burundi</option>
                                            <option value="KH" data-alternate-values="[Cambodia]">Cambodia</option>
                                            <option value="CM" data-alternate-values="[Cameroon]">Cameroon</option>
                                            <option value="CA" data-alternate-values="[Canada]">Canada</option>
                                            <option value="CV" data-alternate-values="[Cape Verde]">Cape Verde
                                            </option>
                                            <option value="KY" data-alternate-values="[Cayman Islands]">Cayman Islands
                                            </option>
                                            <option value="CF" data-alternate-values="[Central African Republic]">
                                                Central African Republic</option>
                                            <option value="TD" data-alternate-values="[Chad]">Chad</option>
                                            <option value="CL" data-alternate-values="[Chile]">Chile</option>
                                            <option value="CN" data-alternate-values="[China]">China</option>
                                            <option value="CX" data-alternate-values="[Christmas Island]">Christmas
                                                Island</option>
                                            <option value="CC" data-alternate-values="[Cocos (Keeling) Islands]">Cocos
                                                (Keeling) Islands</option>
                                            <option value="CO" data-alternate-values="[Colombia]">Colombia</option>
                                            <option value="KM" data-alternate-values="[Comoros]">Comoros</option>
                                            <option value="CG" data-alternate-values="[Congo (Brazzaville)]">Congo
                                                (Brazzaville)</option>
                                            <option value="CD" data-alternate-values="[Congo (Kinshasa)]">Congo
                                                (Kinshasa)</option>
                                            <option value="CK" data-alternate-values="[Cook Islands]">Cook Islands
                                            </option>
                                            <option value="CR" data-alternate-values="[Costa Rica]">Costa Rica
                                            </option>
                                            <option value="HR" data-alternate-values="[Croatia]">Croatia</option>
                                            <option value="CU" data-alternate-values="[Cuba]">Cuba</option>
                                            <option value="CW" data-alternate-values="[Curaçao]">Curaçao</option>
                                            <option value="CY" data-alternate-values="[Cyprus]">Cyprus</option>
                                            <option value="CZ" data-alternate-values="[Czech Republic]">Czech Republic
                                            </option>
                                            <option value="DK" data-alternate-values="[Denmark]">Denmark</option>
                                            <option value="DJ" data-alternate-values="[Djibouti]">Djibouti</option>
                                            <option value="DM" data-alternate-values="[Dominica]">Dominica</option>
                                            <option value="DO" data-alternate-values="[Dominican Republic]">Dominican
                                                Republic</option>
                                            <option value="EC" data-alternate-values="[Ecuador]">Ecuador</option>
                                            <option value="EG" data-alternate-values="[Egypt]">Egypt</option>
                                            <option value="SV" data-alternate-values="[El Salvador]">El Salvador
                                            </option>
                                            <option value="GQ" data-alternate-values="[Equatorial Guinea]">Equatorial
                                                Guinea</option>
                                            <option value="ER" data-alternate-values="[Eritrea]">Eritrea</option>
                                            <option value="EE" data-alternate-values="[Estonia]">Estonia</option>
                                            <option value="SZ" data-alternate-values="[Eswatini]">Eswatini</option>
                                            <option value="ET" data-alternate-values="[Ethiopia]">Ethiopia</option>
                                            <option value="FK" data-alternate-values="[Falkland Islands]">Falkland
                                                Islands</option>
                                            <option value="FO" data-alternate-values="[Faroe Islands]">Faroe Islands
                                            </option>
                                            <option value="FJ" data-alternate-values="[Fiji]">Fiji</option>
                                            <option value="FI" data-alternate-values="[Finland]">Finland</option>
                                            <option value="FR" data-alternate-values="[France]">France</option>
                                            <option value="GF" data-alternate-values="[French Guiana]">French Guiana
                                            </option>
                                            <option value="PF" data-alternate-values="[French Polynesia]">French
                                                Polynesia</option>
                                            <option value="TF" data-alternate-values="[French Southern Territories]">
                                                French Southern Territories</option>
                                            <option value="GA" data-alternate-values="[Gabon]">Gabon</option>
                                            <option value="GM" data-alternate-values="[Gambia]">Gambia</option>
                                            <option value="GE" data-alternate-values="[Georgia]">Georgia</option>
                                            <option value="DE" data-alternate-values="[Germany]">Germany</option>
                                            <option value="GH" data-alternate-values="[Ghana]">Ghana</option>
                                            <option value="GI" data-alternate-values="[Gibraltar]">Gibraltar</option>
                                            <option value="GR" data-alternate-values="[Greece]">Greece</option>
                                            <option value="GL" data-alternate-values="[Greenland]">Greenland</option>
                                            <option value="GD" data-alternate-values="[Grenada]">Grenada</option>
                                            <option value="GP" data-alternate-values="[Guadeloupe]">Guadeloupe
                                            </option>
                                            <option value="GU" data-alternate-values="[Guam]">Guam</option>
                                            <option value="GT" data-alternate-values="[Guatemala]">Guatemala</option>
                                            <option value="GG" data-alternate-values="[Guernsey]">Guernsey</option>
                                            <option value="GN" data-alternate-values="[Guinea]">Guinea</option>
                                            <option value="GW" data-alternate-values="[Guinea-Bissau]">Guinea-Bissau
                                            </option>
                                            <option value="GY" data-alternate-values="[Guyana]">Guyana</option>
                                            <option value="HT" data-alternate-values="[Haiti]">Haiti</option>
                                            <option value="HM"
                                                data-alternate-values="[Heard Island and McDonald Islands]">Heard Island
                                                and McDonald Islands</option>
                                            <option value="HN" data-alternate-values="[Honduras]">Honduras</option>
                                            <option value="HK" data-alternate-values="[Hong Kong]">Hong Kong</option>
                                            <option value="HU" data-alternate-values="[Hungary]">Hungary</option>
                                            <option value="IS" data-alternate-values="[Iceland]">Iceland</option>
                                            <option value="IN" data-alternate-values="[India]">India</option>
                                            <option value="ID" data-alternate-values="[Indonesia]">Indonesia</option>
                                            <option value="IR" data-alternate-values="[Iran]">Iran</option>
                                            <option value="IQ" data-alternate-values="[Iraq]">Iraq</option>
                                            <option value="IE" data-alternate-values="[Ireland]">Ireland</option>
                                            <option value="IM" data-alternate-values="[Isle of Man]">Isle of Man
                                            </option>
                                            <option value="IL" data-alternate-values="[Israel]">Israel</option>
                                            <option value="IT" data-alternate-values="[Italy]">Italy</option>
                                            <option value="CI" data-alternate-values="[Ivory Coast]">Ivory Coast
                                            </option>
                                            <option value="JM" data-alternate-values="[Jamaica]">Jamaica</option>
                                            <option value="JP" data-alternate-values="[Japan]">Japan</option>
                                            <option value="JE" data-alternate-values="[Jersey]">Jersey</option>
                                            <option value="JO" data-alternate-values="[Jordan]">Jordan</option>
                                            <option value="KZ" data-alternate-values="[Kazakhstan]">Kazakhstan
                                            </option>
                                            <option value="KE" data-alternate-values="[Kenya]">Kenya</option>
                                            <option value="KI" data-alternate-values="[Kiribati]">Kiribati</option>
                                            <option value="KW" data-alternate-values="[Kuwait]">Kuwait</option>
                                            <option value="KG" data-alternate-values="[Kyrgyzstan]">Kyrgyzstan
                                            </option>
                                            <option value="LA" data-alternate-values="[Laos]">Laos</option>
                                            <option value="LV" data-alternate-values="[Latvia]">Latvia</option>
                                            <option value="LB" data-alternate-values="[Lebanon]">Lebanon</option>
                                            <option value="LS" data-alternate-values="[Lesotho]">Lesotho</option>
                                            <option value="LR" data-alternate-values="[Liberia]">Liberia</option>
                                            <option value="LY" data-alternate-values="[Libya]">Libya</option>
                                            <option value="LI" data-alternate-values="[Liechtenstein]">Liechtenstein
                                            </option>
                                            <option value="LT" data-alternate-values="[Lithuania]">Lithuania</option>
                                            <option value="LU" data-alternate-values="[Luxembourg]">Luxembourg
                                            </option>
                                            <option value="MO" data-alternate-values="[Macao]">Macao</option>
                                            <option value="MG" data-alternate-values="[Madagascar]">Madagascar
                                            </option>
                                            <option value="MW" data-alternate-values="[Malawi]">Malawi</option>
                                            <option value="MY" data-alternate-values="[Malaysia]">Malaysia</option>
                                            <option value="MV" data-alternate-values="[Maldives]">Maldives</option>
                                            <option value="ML" data-alternate-values="[Mali]">Mali</option>
                                            <option value="MT" data-alternate-values="[Malta]">Malta</option>
                                            <option value="MH" data-alternate-values="[Marshall Islands]">Marshall
                                                Islands</option>
                                            <option value="MQ" data-alternate-values="[Martinique]">Martinique
                                            </option>
                                            <option value="MR" data-alternate-values="[Mauritania]">Mauritania
                                            </option>
                                            <option value="MU" data-alternate-values="[Mauritius]">Mauritius</option>
                                            <option value="YT" data-alternate-values="[Mayotte]">Mayotte</option>
                                            <option value="MX" data-alternate-values="[Mexico]">Mexico</option>
                                            <option value="FM" data-alternate-values="[Micronesia]">Micronesia
                                            </option>
                                            <option value="MD" data-alternate-values="[Moldova]">Moldova</option>
                                            <option value="MC" data-alternate-values="[Monaco]">Monaco</option>
                                            <option value="MN" data-alternate-values="[Mongolia]">Mongolia</option>
                                            <option value="ME" data-alternate-values="[Montenegro]">Montenegro
                                            </option>
                                            <option value="MS" data-alternate-values="[Montserrat]">Montserrat
                                            </option>
                                            <option value="MA" data-alternate-values="[Morocco]">Morocco</option>
                                            <option value="MZ" data-alternate-values="[Mozambique]">Mozambique
                                            </option>
                                            <option value="MM" data-alternate-values="[Myanmar]">Myanmar</option>
                                            <option value="NA" data-alternate-values="[Namibia]">Namibia</option>
                                            <option value="NR" data-alternate-values="[Nauru]">Nauru</option>
                                            <option value="NP" data-alternate-values="[Nepal]">Nepal</option>
                                            <option value="NL" data-alternate-values="[Netherlands]">Netherlands
                                            </option>
                                            <option value="NC" data-alternate-values="[New Caledonia]">New Caledonia
                                            </option>
                                            <option value="NZ" data-alternate-values="[New Zealand]">New Zealand
                                            </option>
                                            <option value="NI" data-alternate-values="[Nicaragua]">Nicaragua</option>
                                            <option value="NE" data-alternate-values="[Niger]">Niger</option>
                                            <option value="NG" data-alternate-values="[Nigeria]">Nigeria</option>
                                            <option value="NU" data-alternate-values="[Niue]">Niue</option>
                                            <option value="NF" data-alternate-values="[Norfolk Island]">Norfolk Island
                                            </option>
                                            <option value="KP" data-alternate-values="[North Korea]">North Korea
                                            </option>
                                            <option value="MK" data-alternate-values="[North Macedonia]">North
                                                Macedonia</option>
                                            <option value="MP" data-alternate-values="[Northern Mariana Islands]">
                                                Northern Mariana Islands</option>
                                            <option value="NO" data-alternate-values="[Norway]">Norway</option>
                                            <option value="OM" data-alternate-values="[Oman]">Oman</option>
                                            <option value="PK" data-alternate-values="[Pakistan]">Pakistan</option>
                                            <option value="PS" data-alternate-values="[Palestinian Territory]">
                                                Palestinian Territory</option>
                                            <option value="PA" data-alternate-values="[Panama]">Panama</option>
                                            <option value="PG" data-alternate-values="[Papua New Guinea]">Papua New
                                                Guinea</option>
                                            <option value="PY" data-alternate-values="[Paraguay]">Paraguay</option>
                                            <option value="PE" data-alternate-values="[Peru]">Peru</option>
                                            <option value="PH" data-alternate-values="[Philippines]">Philippines
                                            </option>
                                            <option value="PN" data-alternate-values="[Pitcairn]">Pitcairn</option>
                                            <option value="PL" data-alternate-values="[Poland]">Poland</option>
                                            <option value="PT" data-alternate-values="[Portugal]">Portugal</option>
                                            <option value="PR" data-alternate-values="[Puerto Rico]">Puerto Rico
                                            </option>
                                            <option value="QA" data-alternate-values="[Qatar]">Qatar</option>
                                            <option value="RE" data-alternate-values="[Reunion]">Reunion</option>
                                            <option value="RO" data-alternate-values="[Romania]">Romania</option>
                                            <option value="RU" data-alternate-values="[Russia]">Russia</option>
                                            <option value="RW" data-alternate-values="[Rwanda]">Rwanda</option>
                                            <option value="BL" data-alternate-values="[Saint Barthélemy]">Saint
                                                Barthélemy</option>
                                            <option value="SH" data-alternate-values="[Saint Helena]">Saint Helena
                                            </option>
                                            <option value="KN" data-alternate-values="[Saint Kitts and Nevis]">Saint
                                                Kitts and Nevis</option>
                                            <option value="LC" data-alternate-values="[Saint Lucia]">Saint Lucia
                                            </option>
                                            <option value="SX" data-alternate-values="[Saint Martin (Dutch part)]">
                                                Saint Martin (Dutch part)</option>
                                            <option value="MF" data-alternate-values="[Saint Martin (French part)]">
                                                Saint Martin (French part)</option>
                                            <option value="PM" data-alternate-values="[Saint Pierre and Miquelon]">
                                                Saint Pierre and Miquelon</option>
                                            <option value="VC"
                                                data-alternate-values="[Saint Vincent and the Grenadines]">Saint Vincent
                                                and the Grenadines</option>
                                            <option value="WS" data-alternate-values="[Samoa]">Samoa</option>
                                            <option value="SM" data-alternate-values="[San Marino]">San Marino
                                            </option>
                                            <option value="ST" data-alternate-values="[São Tomé and Príncipe]">São
                                                Tomé and Príncipe</option>
                                            <option value="SA" data-alternate-values="[Saudi Arabia]">Saudi Arabia
                                            </option>
                                            <option value="SN" data-alternate-values="[Senegal]">Senegal</option>
                                            <option value="RS" data-alternate-values="[Serbia]">Serbia</option>
                                            <option value="SC" data-alternate-values="[Seychelles]">Seychelles
                                            </option>
                                            <option value="SL" data-alternate-values="[Sierra Leone]">Sierra Leone
                                            </option>
                                            <option value="SG" data-alternate-values="[Singapore]">Singapore</option>
                                            <option value="SK" data-alternate-values="[Slovakia]">Slovakia</option>
                                            <option value="SI" data-alternate-values="[Slovenia]">Slovenia</option>
                                            <option value="SB" data-alternate-values="[Solomon Islands]">Solomon
                                                Islands</option>
                                            <option value="SO" data-alternate-values="[Somalia]">Somalia</option>
                                            <option value="ZA" data-alternate-values="[South Africa]">South Africa
                                            </option>
                                            <option value="GS"
                                                data-alternate-values="[South Georgia/Sandwich Islands]">South
                                                Georgia/Sandwich Islands</option>
                                            <option value="KR" data-alternate-values="[South Korea]">South Korea
                                            </option>
                                            <option value="SS" data-alternate-values="[South Sudan]">South Sudan
                                            </option>
                                            <option value="ES" data-alternate-values="[Spain]">Spain</option>
                                            <option value="LK" data-alternate-values="[Sri Lanka]">Sri Lanka</option>
                                            <option value="SD" data-alternate-values="[Sudan]">Sudan</option>
                                            <option value="SR" data-alternate-values="[Suriname]">Suriname</option>
                                            <option value="SJ" data-alternate-values="[Svalbard and Jan Mayen]">
                                                Svalbard and Jan Mayen</option>
                                            <option value="SE" data-alternate-values="[Sweden]">Sweden</option>
                                            <option value="CH" data-alternate-values="[Switzerland]">Switzerland
                                            </option>
                                            <option value="SY" data-alternate-values="[Syria]">Syria</option>
                                            <option value="TW" data-alternate-values="[Taiwan]">Taiwan</option>
                                            <option value="TJ" data-alternate-values="[Tajikistan]">Tajikistan
                                            </option>
                                            <option value="TZ" data-alternate-values="[Tanzania]">Tanzania</option>
                                            <option value="TH" data-alternate-values="[Thailand]">Thailand</option>
                                            <option value="TL" data-alternate-values="[Timor-Leste]">Timor-Leste
                                            </option>
                                            <option value="TG" data-alternate-values="[Togo]">Togo</option>
                                            <option value="TK" data-alternate-values="[Tokelau]">Tokelau</option>
                                            <option value="TO" data-alternate-values="[Tonga]">Tonga</option>
                                            <option value="TT" data-alternate-values="[Trinidad and Tobago]">Trinidad
                                                and Tobago</option>
                                            <option value="TN" data-alternate-values="[Tunisia]">Tunisia</option>
                                            <option value="TR" data-alternate-values="[Turkey]">Turkey</option>
                                            <option value="TM" data-alternate-values="[Turkmenistan]">Turkmenistan
                                            </option>
                                            <option value="TC" data-alternate-values="[Turks and Caicos Islands]">
                                                Turks and Caicos Islands</option>
                                            <option value="TV" data-alternate-values="[Tuvalu]">Tuvalu</option>
                                            <option value="UG" data-alternate-values="[Uganda]">Uganda</option>
                                            <option value="UA" data-alternate-values="[Ukraine]">Ukraine</option>
                                            <option value="AE" data-alternate-values="[United Arab Emirates]">United
                                                Arab Emirates</option>
                                            <option value="GB" data-alternate-values="[United Kingdom (UK)]">United
                                                Kingdom (UK)</option>
                                            <option value="US" data-alternate-values="[United States (US)]">United
                                                States (US)</option>
                                            <option value="UM"
                                                data-alternate-values="[United States (US) Minor Outlying Islands]">United
                                                States (US) Minor Outlying Islands</option>
                                            <option value="UY" data-alternate-values="[Uruguay]">Uruguay</option>
                                            <option value="UZ" data-alternate-values="[Uzbekistan]">Uzbekistan
                                            </option>
                                            <option value="VU" data-alternate-values="[Vanuatu]">Vanuatu</option>
                                            <option value="VA" data-alternate-values="[Vatican]">Vatican</option>
                                            <option value="VE" data-alternate-values="[Venezuela]">Venezuela</option>
                                            <option value="VN" data-alternate-values="[Vietnam]">Vietnam</option>
                                            <option value="VG" data-alternate-values="[Virgin Islands (British)]">
                                                Virgin Islands (British)</option>
                                            <option value="VI" data-alternate-values="[Virgin Islands (US)]">Virgin
                                                Islands (US)</option>
                                            <option value="WF" data-alternate-values="[Wallis and Futuna]">Wallis and
                                                Futuna</option>
                                            <option value="EH" data-alternate-values="[Western Sahara]">Western Sahara
                                            </option>
                                            <option value="YE" data-alternate-values="[Yemen]">Yemen</option>
                                            <option value="ZM" data-alternate-values="[Zambia]">Zambia</option>
                                            <option value="ZW" data-alternate-values="[Zimbabwe]">Zimbabwe</option>
                                        </select>
                                        <label for="sel1" class="form-label">Country/Region</label>
                                    </div>
                                    <div class="row mb-2 mt-3">
                                        <div class="col-lg-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="first"
                                                    placeholder="Enter First Name" name="first">
                                                <label for="first">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="last" name="last"
                                                    placeholder="Enter Last
                                                    name">
                                                <label for="last">Last
                                                    name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-2 mt-3">
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="Enter Address">
                                        <label for="address">Address</label>
                                    </div>
                                    <div class="form-floating mb-2 mt-3">
                                        <input type="text" class="form-control"
                                            placeholder="Enter Apartment, suite, etc. (optional)" id="Apartment"
                                            name="Apartment">
                                        <label for="Apartment">Apartment, suite, etc. (optional)</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-2 mt-3">
                                                <input type="text" class="form-control" placeholder="Enter the City"
                                                    id="city" name="city">
                                                <label for="city">City</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-2 mt-3">
                                                <select class="form-select" id="State" name="State">
                                                    <option>1</option>
                                                </select>
                                                <label for="State" class="form-label">State</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-2 mt-3">
                                                <input type="text" class="form-control" placeholder="Enter the ZIP"
                                                    id="ZIP" name="ZIP">
                                                <label for="ZIP">ZIP Code</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-2 mt-3">
                                                <input type="text" class="form-control" placeholder="Enter the Phone"
                                                    id="Phone" name="Phone">
                                                <label for="Phone">
                                                    Phone (optional)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="payment-options-wrapper pt-4">
                                <div class="payment-heading-wrapper">
                                    <h4>
                                        Payment options
                                    </h4>
                                </div>
                                <div class="payment-note-wrapper mt-4">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="addNoteCheck">
                                        <label class="form-check-label" for="addNoteCheck">
                                            Add a note to your order
                                        </label>
                                    </div>

                                    <div class="mb-3 d-none" id="noteBox">
                                        <label for="orderNote" class="form-label visually-hidden">Order Note</label>
                                        <textarea class="form-control" id="orderNote" rows="4" placeholder="Notes about your order."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="proceding-wrapper ">
                                <p>
                                    By proceeding with your purchase you agree to our Terms and Conditions and Privacy
                                    Policy
                                </p>
                            </div>
                            <div class="checkout-btn-wrapper mt-5">
                                <button type="submit" class="btn btn-primary"> Place Order</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="order-wrapper">
                        <div class="order-summary-wrapper">
                            <h6>Order summary</h6>
                        </div>
                        <div class="order-products-wrapper">
                            <div class="order-product-wrapper d-flex">
                                <div class="order-img-wrapper">
                                    <figure>
                                        <img src="{{ frontImage('book-icon.png') }}" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <div class="order-txt-wrapper">
                                    <h6>The Dope Breakthrough
                                        – Audiobook</h6>
                                    <h5>$99.00</h5>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                        egestas. Vestibulum tortor…
                                    </p>
                                </div>
                                <div class="order-price-wrapper">
                                    <h5>$99.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="order-coupon-wrapper">
                            <div class="order-coupon-heading-wrapper">
                                <h6>Add a coupon</h6>
                            </div>
                            <div class="order-field-coupon-wrapper pt-3 d-flex gap-2">
                                <input type="text" class="form-control">
                                <button class="btn btn-primary coupon-btn">Apply</button>
                            </div>
                        </div>
                        <div class="subtotal-wrapper d-flex justify-content-between">
                            <h6>Subtotal</h6>
                            <h5>
                                $99.00</h5>
                        </div>
                        <div class="total-wrapper d-flex justify-content-between">
                            <h3>Total</h3>
                            <h3>
                                $99.00</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- checkout ends here --}}
@endsection
