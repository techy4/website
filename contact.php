<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Techy4 | Web and Mobile Development</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" id="bootstrap-main-style-css"  href="css/bootstrap.min.css" type="text/css" media="screen" />
<link rel="stylesheet" id="bootstrap-responsive-css"  href="css/bootstrap-responsive.min.css" type="text/css" />
<link rel="stylesheet" id="font-awesome-style-css"  href="css/font-awesome.min.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans|Open+Sans+Condensed:300,700|Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" id="normal-css"  href="css/style.css" type="text/css"  />
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.hoverdir.js"></script>
<script src="js/script.js"></script>
</head>
<body>
<div class="mainframe">
  <div class="header">
    <!-- Start: Navigation -->
    <?php include('include/header.php'); ?>
    <!-- End: Navigation -->
    <!-- Start: Banner -->
    <div class="banner-wrapper innerbanner">
      <div class="container-fluid">
        <div class="row-fluid feature-head">
          <div>
            <h2>Get in touch with us!</h2>
            <p>24/7 supports & services</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End: Banner -->
  </div>
  <!-- End: Header -->  

<div class="container-fluid">
  <div class="row-fluid">
    <h3>Contact Us</h3>
    <p>Thank you for your interest in Techy4 and our services. Please fill out the form below, or e-mail us at techy4.2012@gmail.com and we will get back to you promptly regarding your request.</p>
  </div>
</div>
<!-- Start: contact section -->
<div class="contact-form">
  <div class="container-fluid">
    <div class="row-fluid"> </div>
    <form  method="post" name="ordernow"  onsubmit="return validateContact()">
            <div class="row-fluid controls">
        <div class="span6">
          <label>Your Name: *</label>
          <input class="span12" type="text" name="name" id="name">
          <div class="error" id="name_error"></div>
        </div>
        <div class="span6">
          <label>E-mail Address: *</label>
          <input class="span12" name="email" id="email" type="text"/>
          <div class="error" id="email_error"></div>
        </div>
      </div>
      <div class="row-fluid controls">
        <div class="span6">
          <label>Mobile Number: </label>
          <input class="span12" type="text" name="mobile" id="mobile">
          <div class="error" id="mobile_error"></div>
        </div>
        <div class="span6">
          <label>Country: *</label>
          <select class="span12" id="country" name="country">
            <option value="">--Select Country--</option>
                        <option value="1">Andorra</option>
                        <option value="2">United Arab Emirates</option>
                        <option value="3">Afghanistan</option>
                        <option value="4">Antigua and Barbuda</option>
                        <option value="5">Anguilla</option>
                        <option value="6">Albania</option>
                        <option value="7">Armenia</option>
                        <option value="8">Netherlands Antilles</option>
                        <option value="9">Angola</option>
                        <option value="10">Antarctica</option>
                        <option value="11">Argentina</option>
                        <option value="12">American Samoa</option>
                        <option value="13">Austria</option>
                        <option value="14">Australia</option>
                        <option value="15">Aruba</option>
                        <option value="16">Azerbaijan</option>
                        <option value="17">Bosnia and Herzegovina</option>
                        <option value="18">Barbados</option>
                        <option value="19">Bangladesh</option>
                        <option value="20">Belgium</option>
                        <option value="21">Burkina Faso</option>
                        <option value="22">Bulgaria</option>
                        <option value="23">Bahrain</option>
                        <option value="24">Burundi</option>
                        <option value="25">Benin</option>
                        <option value="26">Bermuda</option>
                        <option value="27">Brunei Darussalam</option>
                        <option value="28">Bolivia</option>
                        <option value="29">Brazil</option>
                        <option value="30">Bahamas</option>
                        <option value="31">Bhutan</option>
                        <option value="32">Bouvet Island</option>
                        <option value="33">Botswana</option>
                        <option value="34">Belarus</option>
                        <option value="35">Belize</option>
                        <option value="36">Canada</option>
                        <option value="37">Cocos (Keeling) Islands</option>
                        <option value="38">Congo, the Democratic Republic of the</option>
                        <option value="39">Central African Republic</option>
                        <option value="40">Congo</option>
                        <option value="41">Switzerland</option>
                        <option value="42">Cote D'Ivoire</option>
                        <option value="43">Cook Islands</option>
                        <option value="44">Chile</option>
                        <option value="45">Cameroon</option>
                        <option value="46">China</option>
                        <option value="47">Colombia</option>
                        <option value="48">Costa Rica</option>
                        <option value="49">Serbia and Montenegro</option>
                        <option value="50">Cuba</option>
                        <option value="51">Cape Verde</option>
                        <option value="52">Christmas Island</option>
                        <option value="53">Cyprus</option>
                        <option value="54">Czech Republic</option>
                        <option value="55">Germany</option>
                        <option value="56">Djibouti</option>
                        <option value="57">Denmark</option>
                        <option value="58">Dominica</option>
                        <option value="59">Dominican Republic</option>
                        <option value="60">Algeria</option>
                        <option value="61">Ecuador</option>
                        <option value="62">Estonia</option>
                        <option value="63">Egypt</option>
                        <option value="64">Western Sahara</option>
                        <option value="65">Eritrea</option>
                        <option value="66">Spain</option>
                        <option value="67">Ethiopia</option>
                        <option value="68">Finland</option>
                        <option value="69">Fiji</option>
                        <option value="70">Falkland Islands (Malvinas)</option>
                        <option value="71">Micronesia, Federated States of</option>
                        <option value="72">Faroe Islands</option>
                        <option value="73">France</option>
                        <option value="74">Gabon</option>
                        <option value="75">United Kingdom</option>
                        <option value="76">Grenada</option>
                        <option value="77">Georgia</option>
                        <option value="78">French Guiana</option>
                        <option value="79">Ghana</option>
                        <option value="80">Gibraltar</option>
                        <option value="81">Greenland</option>
                        <option value="82">Gambia</option>
                        <option value="83">Guinea</option>
                        <option value="84">Guadeloupe</option>
                        <option value="85">Equatorial Guinea</option>
                        <option value="86">Greece</option>
                        <option value="87">South Georgia and the South Sandwich Islands</option>
                        <option value="88">Guatemala</option>
                        <option value="89">Guam</option>
                        <option value="90">Guinea-Bissau</option>
                        <option value="91">Guyana</option>
                        <option value="92">Hong Kong</option>
                        <option value="93">Heard Island and Mcdonald Islands</option>
                        <option value="94">Honduras</option>
                        <option value="95">Croatia</option>
                        <option value="96">Haiti</option>
                        <option value="97">Hungary</option>
                        <option value="98">Indonesia</option>
                        <option value="99">Ireland</option>
                        <option value="100">Israel</option>
                        <option value="101">India</option>
                        <option value="102">British Indian Ocean Territory</option>
                        <option value="103">Iraq</option>
                        <option value="104">Iran, Islamic Republic of</option>
                        <option value="105">Iceland</option>
                        <option value="106">Italy</option>
                        <option value="107">Jamaica</option>
                        <option value="108">Jordan</option>
                        <option value="109">Japan</option>
                        <option value="110">Kenya</option>
                        <option value="111">Kyrgyzstan</option>
                        <option value="112">Cambodia</option>
                        <option value="113">Kiribati</option>
                        <option value="114">Comoros</option>
                        <option value="115">Saint Kitts and Nevis</option>
                        <option value="116">Korea, Democratic People's Republic of</option>
                        <option value="117">Korea, Republic of</option>
                        <option value="118">Kuwait</option>
                        <option value="119">Cayman Islands</option>
                        <option value="120">Kazakhstan</option>
                        <option value="121">Lao People's Democratic Republic</option>
                        <option value="122">Lebanon</option>
                        <option value="123">Saint Lucia</option>
                        <option value="124">Liechtenstein</option>
                        <option value="125">Sri Lanka</option>
                        <option value="126">Liberia</option>
                        <option value="127">Lesotho</option>
                        <option value="128">Lithuania</option>
                        <option value="129">Luxembourg</option>
                        <option value="130">Latvia</option>
                        <option value="131">Libyan Arab Jamahiriya</option>
                        <option value="132">Morocco</option>
                        <option value="133">Monaco</option>
                        <option value="134">Moldova, Republic of</option>
                        <option value="135">Madagascar</option>
                        <option value="136">Marshall Islands</option>
                        <option value="137">Macedonia, the Former Yugoslav Republic of</option>
                        <option value="138">Mali</option>
                        <option value="139">Myanmar</option>
                        <option value="140">Mongolia</option>
                        <option value="141">Macao</option>
                        <option value="142">Northern Mariana Islands</option>
                        <option value="143">Martinique</option>
                        <option value="144">Mauritania</option>
                        <option value="145">Montserrat</option>
                        <option value="146">Malta</option>
                        <option value="147">Mauritius</option>
                        <option value="148">Maldives</option>
                        <option value="149">Malawi</option>
                        <option value="150">Mexico</option>
                        <option value="151">Malaysia</option>
                        <option value="152">Mozambique</option>
                        <option value="153">Namibia</option>
                        <option value="154">New Caledonia</option>
                        <option value="155">Niger</option>
                        <option value="156">Norfolk Island</option>
                        <option value="157">Nigeria</option>
                        <option value="158">Nicaragua</option>
                        <option value="159">Netherlands</option>
                        <option value="160">Norway</option>
                        <option value="161">Nepal</option>
                        <option value="162">Nauru</option>
                        <option value="163">Niue</option>
                        <option value="164">New Zealand</option>
                        <option value="165">Oman</option>
                        <option value="166">Panama</option>
                        <option value="167">Peru</option>
                        <option value="168">French Polynesia</option>
                        <option value="169">Papua New Guinea</option>
                        <option value="170">Philippines</option>
                        <option value="171">Pakistan</option>
                        <option value="172">Poland</option>
                        <option value="173">Saint Pierre and Miquelon</option>
                        <option value="174">Pitcairn</option>
                        <option value="175">Puerto Rico</option>
                        <option value="176">Palestinian Territory, Occupied</option>
                        <option value="177">Portugal</option>
                        <option value="178">Palau</option>
                        <option value="179">Paraguay</option>
                        <option value="180">Qatar</option>
                        <option value="181">Reunion</option>
                        <option value="182">Romania</option>
                        <option value="183">Russian Federation</option>
                        <option value="184">Rwanda</option>
                        <option value="185">Saudi Arabia</option>
                        <option value="186">Solomon Islands</option>
                        <option value="187">Seychelles</option>
                        <option value="188">Sudan</option>
                        <option value="189">Sweden</option>
                        <option value="190">Singapore</option>
                        <option value="191">Saint Helena</option>
                        <option value="192">Slovenia</option>
                        <option value="193">Svalbard and Jan Mayen</option>
                        <option value="194">Slovakia</option>
                        <option value="195">Sierra Leone</option>
                        <option value="196">San Marino</option>
                        <option value="197">Senegal</option>
                        <option value="198">Somalia</option>
                        <option value="199">Suriname</option>
                        <option value="200">Sao Tome and Principe</option>
                        <option value="201">El Salvador</option>
                        <option value="202">Syrian Arab Republic</option>
                        <option value="203">Swaziland</option>
                        <option value="204">Turks and Caicos Islands</option>
                        <option value="205">Chad</option>
                        <option value="206">French Southern Territories</option>
                        <option value="207">Togo</option>
                        <option value="208">Thailand</option>
                        <option value="209">Tajikistan</option>
                        <option value="210">Tokelau</option>
                        <option value="211">Timor-Leste</option>
                        <option value="212">Turkmenistan</option>
                        <option value="213">Tunisia</option>
                        <option value="214">Tonga</option>
                        <option value="215">Turkey</option>
                        <option value="216">Trinidad and Tobago</option>
                        <option value="217">Tuvalu</option>
                        <option value="218">Taiwan, Province of China</option>
                        <option value="219">Tanzania, United Republic of</option>
                        <option value="220">Ukraine</option>
                        <option value="221">Uganda</option>
                        <option value="222">United States Minor Outlying Islands</option>
                        <option value="223">United States</option>
                        <option value="224">Uruguay</option>
                        <option value="225">Uzbekistan</option>
                        <option value="226">Holy See (Vatican City State)</option>
                        <option value="227">Saint Vincent and the Grenadines</option>
                        <option value="228">Venezuela</option>
                        <option value="229">Virgin Islands, British</option>
                        <option value="230">Virgin Islands, U.s.</option>
                        <option value="231">Viet Nam</option>
                        <option value="232">Vanuatu</option>
                        <option value="233">Wallis and Futuna</option>
                        <option value="234">Samoa</option>
                        <option value="235">Yemen</option>
                        <option value="236">Mayotte</option>
                        <option value="237">South Africa</option>
                        <option value="238">Zambia</option>
                        <option value="239">Zimbabwe</option>
                      </select>
          <div class="error" id="country_error"></div>
        </div>
      </div>
      <div class="row-fluid controls">
        <div class="span12">
          <label>Comments: *</label>
          <textarea class="span12" name="notes" id="notes" rows="4"></textarea>
          <div class="error" id="comment_error"></div>
        </div>
      </div>
      <div class="row-fluid controls">
        <div class="span2">
          <input value="Contact Now" name="contactUs" type="submit">
        </div>
      </div>
    </form>
  </div>
</div>
  
  <!-- Start: Footer -->
  <?php include('include/footer.php'); ?>
  <!-- End: Footer -->
</div>
</body>
</html>