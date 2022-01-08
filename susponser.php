<html>
<head>
<title>Club --Susponser</title>

<link rel="icon" type="image/png" href="images/susponser.png">
<link rel="stylesheet" type="text/css" href="css/indexs.css">

<style>
 select

        {
            color:white;
            font-size: 12px;
            padding: 10px 0px 10px 0px;
            width: 270px;
            height: 40px;
            background: #000033;
            border-bottom: 1px solid green; 
        }

h1{
  font-family: cursive; 
  font-size: 30px;
  text-align: left;
}

p{
  font-size: 20px;
  font-stretch: expanded;

}
    form { padding: 3.5em; }
    .group {position: relative; margin-bottom: 2.4em; }

     div#main label {

      color: white;
      font-size: 15px;
      font-family: comic;
      font-weight: normal;
      font-family: cursive;
      position: absolute;
      pointer-events: none;
      top: 2px;
      transition: 0.2s ease all;
    } 
    

        div#main input[type="text"],input[type="password"] {
      color: white;
      font-size: 17px;
      padding: 20px 0px 10px 0px;
      display: block;
      background: #000033;
      outline: none;
      border: none;
      width: 300px;
      height: 3px;
      border-bottom: 1px solid white; 
    }
     div#main input[type="submit"]{
            color: white;
      font-size: 17px;
      background: #000033;
      font-family: cursive;
      width: 150px;
      height: 50px;
      position: center;
    }
    input [type="checkbox"]{
      background: #000066;
    }
    div#input .bar{position: relative; display: block; width: 300px; }

    div#input .bar:before, .bar:after{
      content: "";
      height: 2px;
      width: 0;
      bottom: -1px;
      position: absolute;
      background: green;
      transition: 0.2s ease all;
    }
    div#input .bar:before {left: 50%; }
    div#input .bar:after {right: 50%; }

    div#input input:valid {border-bottom: 1px solid #4fc24f; }

    div#input input:valid ~ .bar:before,
    div#input input:valid ~ .bar:after{
      background-color: green !important;
    }

    div#input input:focus ~ label,
    div#input input.used ~ label {
      top: -20px;
      font-size: 15px;
      color: green;
    }

    div#input input:valid ~ label,
    div#input input:valid.used ~ label{
      color: #4fc24f;
    }
    div#input input:focus ~ .bar:before,
    div#input input:focus ~ .bar:after{
      width: 50%;
    }
    
    .login{
      font-size: 20px;
      font-family: cursive;
      list-style: none;
      color: green;

    }
    .district{
    color: white;

    }


div#main{
  margin:10px auto;
  width:50%;
  min-width: 900px;
  min-height: 100px;
  border:1px solid gray;
  border-radius:0px;
  background: #000033;

}
div#main .header{
  width:100%;
  min-height: 100px;
  margin-top: -60px;
  color: white;
  font-family: whitrabt; 
  background:blue;
  opacity: none;
}

a{
  font-size: 30px;
  font-family: cursive;
  position: relative;
  color: white;
}

.accept{
  color: white;
  font-size:17px; 
  font-family: cursive;
}
.accept a{
  font-size: 13px;
}

 .rwema{

    background: white;
    background: -webkit-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: -moz-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: -o-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: -ms-linear-gradient(top, blue 0%,#00CCCC  100%);
    background: linear-gradient(top, blue 0%,#00CCCC  100%);
    -webkit-border-radius: none;
    -moz-border-radius: none;
    border-radius: none;
    z-index:2;
    border: 2px;
    color: white;
    text-align: center;
    font-family: cursive;
    font-size: 16px;
    width: 900px;
    height: 40px;
}

.body
{
    margin: 40px auto;
    margin-top: 10px;
    width: 900px;
}
</style>
<script src="validate/jquery-2.2.0.min.js"></script>
</head>

<body background="images/back.JPG">
<div class="body">
<table border="0" align="center"  width="680">

<tr><td colspan="3"> <center><img src="images/ramos.jpg" width="900" height="140"></center> </td></tr>

<tr><td align="center" colspan="3">

<ul class="menu">
    <li><a href="index.php">Who we are</a></li>
    <li><a href="membership.php">registration & login</a></li>
  <li><a href="direction.php">Administration</a></li>
    <li><a href="news.php">Unity Club News</a></li>
   <li><a href="susponser.php">Sponsors form</a></li>
    <li><a href="contactus.php">Contact Us</a></li>
</ul>
</td></tr>
</table>

<div id="main">
<div class="header">
<img src="images/sponsor.jpg">
</div>
<form method="POST">

<?php

include("connect.php");

 if(isset($_POST['register']))

 {

  $names=$_POST['names'];
  $mail=$_POST['mail'];
  $address=$_POST['address'];
  $country=$_POST['country'];
  $sex=$_POST['sex'];
  $work=$_POST['work'];
 
  $query="INSERT INTO susponser(names,mail,address,country,sex,work) VALUES('$names','$mail','$address','$country','$sex','$work')";
  $result = $conn->query($query);

    echo '<center class=success><img src="images/registered.png"></center></center>';

    echo "<META http-equiv=refresh content=10;URL=susponser.php>";

   }
  
  ?>
  
<br>
<table border="0" align="center"  width="680">
    <tr>
<td>
    <div id="input">
          <div class="group">
<input type="text" pattern="[(a-z) (A-Z)\s]+$" minlength="10" maxlength="20" autocomplete="off" name="names" required>
<label>Full Name</label>
<span class="bar"></span>
</div>
    </td>
      <td>
<div id="input">
<div class="group">
<input type="text" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" autocomplete="off" maxlength="30" required>
<label>E-mail</label>
<span class="bar"></span>
</div>
    </td>
</tr>

   <tr>
   <td>
   <div id="input">
          <div class="group">
<input type="text" name="address" pattern="[(a-z\s) (A-Z\s) (0-9)]+$"  min="7" autocomplete="off" maxlength="30" required>
<label>Address / Number</label>
<span class="bar"></span>
</div>
    </td>
    <td><div class="district">Country</div>
  <div class="group">
<select name="country" required>
<option ></option>              
              <option >Afghanistan</option>
              <option >Åland Islands</option>
              <option > Albania</option>           
              <option > Algeria</option>
               <option > American Samoa </option>
                <option >Andorra</option>
              
                <option value="+323" >   Angola </option>
              
                <option  >Anguilla </option>
              
                <option  > Antarctica  </option>
              
                <option  >  Antigua &amp; Barbuda</option>
              
                <option >  Argentina  </option>
              
                <option  >  Armenia </option>
              
                <option  >                  Aruba                </option>
              
                <option  >                  Ascension Island                </option>
              
                <option  >                  Australia                </option>
              
                <option  >                  Austria                </option>
              
                <option  >                  Azerbaijan              </option>
              
                <option >                  Bahamas              </option>
              
                <option  >                  Bahrain                </option>
                <option  >                  Bangladesh                </option>          
                <option  >                  Barbados                </option>            
                <option  >                  Belarus                </option>              
                <option  >                  Belgium              </option>                
                <option  >                  Belize                </option>            
                <option  >                  Benin                </option>              
                <option  >                  Bermuda                </option>            
                <option  >                  Bhutan                </option>                 
                <option  >                  Bolivia                </option>        
                <option  >                  Bosnia &amp; Herzegovina                </option>              
                <option  >                  Botswana              </option>
                <option  >                  Bouvet Island                </option>            
                <option  >                  Brazil                </option>              
                <option  >                  British Indian Ocean Territory                </option>              
                <option  >                  British Virgin Islands                </option>              
                <option  >                  Brunei                </option>              
                <option  >                  Bulgaria                </option>              
                <option  >                  Burkina Faso                </option>              
                <option  >                  Burundi                </option>              
                <option  >                  Cambodia                </option>              
                <option  >                  Cameroon                </option>              
                <option  >                  Canada              </option>              
                <option  >                  Cape Verde                </option>              
                <option  >                  Caribbean Netherlands                </option>              
                <option  >                  Cayman Islands                </option>              
                <option  >                  Central African Republic                </option>              
                <option  >                  Chad                </option>              
                <option  >                  Chile                </option>              
                <option >                  China                </option>              
                <option  >                  Christmas Island                </option>              
                <option  >                  Cocos [Keeling] Islands                </option>              
                <option  >                  Colombia                </option>              
                <option  >                  Comoros                </option>              
                <option  >                  Congo [DRC]                </option>              
                <option >                  Congo [Republic]                </option>              
                <option  >                  Cook Islands                </option>              
                <option  >                  Costa Rica                </option>              
                <option  >                  Côte d’Ivoire                </option>              
                <option  >                  Croatia              </option>              
                <option  >                  Curaçao                </option>              
                <option  >                  Cyprus                </option>          
                <option  >                  Czech Republic                </option>              
                <option  >                  Denmark                </option>              
                <option  >                  Djibouti                </option>              
                <option >                  Dominica                </option>              
                <option  >                  Dominican Republic                </option>            
                <option  >                  Ecuador                </option>              
                <option  >                  Egypt                </option>            
                <option  >                  El Salvador                </option>              
                <option  >                  Equatorial Guinea                </option>              
                <option  >                  Eritrea                </option>              
                <option  >                  Estonia                </option>              
                <option  >                  Ethiopia                </option>              
                <option >                  Falkland Islands [Islas Malvinas]                </option>              
                <option  >                  Faroe Islands                </option>            
                <option  >                  Fiji                </option>              
                <option  >                  Finland                </option>              
                <option >                  France                </option>              
                <option >                  French Guiana                </option>              
                <option >
                  French Polynesia
                </option>
              
                <option >
                  French Southern Territories
                </option>
              
                <option  >
                  Gabon
                </option>
              
                <option  >
                  Gambia
                </option>
              
                <option  >
                  Georgia
                </option>
              
                <option  >
                  Germany
                </option>
              
                <option  >
                  Ghana
                </option>
              
                <option  >
                  Gibraltar
                </option>
              
                <option >
                  Greece
                </option>
              
                <option  >
                  Greenland
                </option>
              
                <option  >
                  Grenada
                </option>
              
                <option  >
                  Guadeloupe
                </option>
              
                <option >
                  Guam
                </option>
              
                <option  >
                  Guatemala
                </option>
              
                <option  >
                  Guernsey
                </option>
              
                <option  >
                  Guinea
                </option>
              
                <option  >
                  Guinea-Bissau
                </option>
              
                <option  >
                  Guyana
                </option>
              
                <option  >
                  Haiti
                </option>
              
                <option  >
                  Heard &amp; McDonald Islands
                </option>
              
                <option  >
                  Honduras
                </option>
              
                <option  >
                  Hong Kong
                </option>
              
                <option  >
                  Hungary
                </option>
              
                <option >
                  Iceland
                </option>
              
                <option  >
                  India
                </option>
              
                <option  >
                  Indonesia
                </option>
              
                <option  >
                  Iran
                </option>
              
                <option >
                  Iraq
                </option>
              
                <option  >
                  Ireland
                </option>
              
                <option  >
                  Isle of Man
                </option>
              
                <option >
                  Israel
                </option>
              
                <option  >
                  Italy
                </option>
              
                <option  >
                  Jamaica
                </option>
              
                <option  >
                  Japan
                </option>
              
                <option >
                  Jersey
                </option>
              
                <option  >
                  Jordan
                </option>
              
                <option >
                  Kazakhstan
                </option>
              
                <option  >
                  Kenya
                </option>
              
                <option  >
                  Kiribati
                </option>
              
                <option  >
                  Kosovo
                </option>
              
                <option >
                  Kuwait
                </option>
              
                <option  >
                  Kyrgyzstan
                </option>
              
                <option  >
                  Laos
                </option>
              
                <option  >
                  Latvia
                </option>
              
                <option >
                  Lebanon
                </option>
              
                <option >
                  Lesotho
                </option>
              
                <option  >
                  Liberia
                </option>
              
                <option  >
                  Libya
                </option>
              
                <option  >
                  Liechtenstein
                </option>
              
                <option  >
                  Lithuania
                </option>
              
                <option  >
                  Luxembourg
                </option>
              
                <option  >
                  Macau
                </option>
              
                <option >
                  Macedonia [FYROM]
                </option>
              
                <option >
                  Madagascar
                </option>
              
                <option  >
                  Malawi
                </option>
              
                <option  >
                  Malaysia
                </option>
              
                <option  >
                  Maldives
                </option>
              
                <option  >
                  Mali
                </option>
              
                <option >
                  Malta
                </option>
              
                <option >
                  Marshall Islands
                </option>
              
                <option >
                  Martinique
                </option>
              
                <option  >
                  Mauritania
                </option>
              
                <option  >
                  Mauritius
                </option>
              
                <option >
                  Mayotte
                </option>
              
                <option >
                  Mexico
                </option>
              
                <option  >
                  Micronesia
                </option>
              
                <option  >
                  Moldova
                </option>
              
                <option >
                  Monaco
                </option>
              
                <option  >
                  Mongolia
                </option>
              
                <option  >
                  Montenegro
                </option>
              
                <option  >
                  Montserrat
                </option>
              
                <option >
                  Morocco
                </option>
              
                <option  >
                  Mozambique
                </option>
              
                <option >
                  Myanmar [Burma]
                </option>
              
                <option  >
                  Namibia
                </option>
              
                <option  >
                  Nauru
                </option>
              
                <option  >
                  Nepal
                </option>
              
                <option  >
                  Netherlands
                </option>
              
                <option  >
                  New Caledonia
                </option>
              
                <option  >
                  New Zealand
                </option>
              
                <option >
                  Nicaragua
                </option>
              
                <option  >
                  Niger
                </option>
              
                <option >
                  Nigeria
                </option>
              
                <option  >
                  Niue
                </option>
              
                <option >
                  Norfolk Island
                </option>
              
                <option >
                  Northern Mariana Islands
                </option>
              
                <option >
                  Norway
                </option>
              
                <option >
                  Oman
                </option>
              
                <option >
                  Pakistan
                </option>
              
                <option >
                  Palau
                </option>
              
                <option >
                  Palestine
                </option>
              
                <option >
                  Panama
                </option>
              
                <option >
                  Papua New Guinea
                </option>
              
                <option >
                  Paraguay
                </option>
              
                <option >
                  Peru
                </option>
              
                <option >
                  Philippines
                </option>
              
                <option >
                  Pitcairn Islands
                </option>
              
                <option >
                  Poland
                </option>
              
                <option >
                  Portugal
                </option>
              
                <option >
                  Puerto Rico
                </option>
              
                <option >
                  Qatar
                </option>
              
                <option >
                  Réunion
                </option>
              
                <option >
                  Romania
                </option>
              
                <option>
                  Russia
                </option>
              
                <option >
                  Rwanda
                </option>
              
                <option >
                  Samoa
                </option>
              
                <option >
                  San Marino
                </option>
              
                <option >
                  São Tomé &amp; Príncipe
                </option>
              
                <option >
                  Saudi Arabia
                </option>
              
                <option >
                  Senegal
                </option>
              
                <option >
                  Serbia
                </option>
              
                <option >
                  Seychelles
                </option>
              
                <option >
                  Sierra Leone
                </option>
              
                <option >
                  Singapore
                </option>
              
                <option >
                  Sint Maarten
                </option>
              
                <option >
                  Slovakia
                </option>
              
                <option >
                  Slovenia
                </option>
              
                <option >
                  Solomon Islands
                </option>
              
                <option >
                  Somalia
                </option>
              
                <option >
                  South Africa
                </option>
              
                <option >
                  South Georgia &amp; South Sandwich Islands
                </option>
              
                <option >
                  South Korea
                </option>
              
                <option >
                  South Sudan
                </option>
              
                <option >
                  Spain
                </option>
              
                <option >
                  Sri Lanka
                </option>
              
                <option >
                  St. Barthélemy
                </option>
              
                <option >
                  St. Helena
                </option>
              
                <option >
                  St. Kitts &amp; Nevis
                </option>
              
                <option >
                  St. Lucia
                </option>
              
                <option >
                  St. Martin
                </option>
              
                <option >
                  St. Pierre &amp; Miquelon
                </option>
              
                <option >
                  St. Vincent &amp; Grenadines
                </option>
              
                <option >
                  Suriname
                </option>
              
                <option >
                  Svalbard &amp; Jan Mayen
                </option>
              
                <option >
                  Swaziland
                </option>
              
                <option >
                  Sweden
                </option>
              
                <option >
                  Switzerland
                </option>
              
                <option >
                  Taiwan
                </option>
              
                <option >
                  Tajikistan
                </option>
              
                <option >
                  Tanzania
                </option>
              
                <option >
                  Thailand
                </option>
              
                <option >
                  Timor-Leste
                </option>
              
                <option >
                  Togo
                </option>
              
                <option >
                  Tokelau
                </option>
              
                <option >
                  Tonga
                </option>
              
                <option >
                  Trinidad &amp; Tobago
                </option>
              
                <option >
                  Tristan da Cunha
                </option>
              
                <option >
                  Tunisia
                </option>
              
                <option >
                  Turkey
                </option>
              
                <option >
                  Turkmenistan
                </option>
              
                <option >
                  Turks &amp; Caicos Islands
                </option>
              
                <option >
                  Tuvalu
                </option>
              
                <option >
                  U.S. Outlying Islands
                </option>
              
                <option >
                  U.S. Virgin Islands
                </option>
              
                <option >
                  Uganda
                </option>
              
                <option >
                  Ukraine
                </option>
              
                <option >
                  United Arab Emirates
                </option>
              
                <option >
                  United Kingdom
                </option>
              
                <option >
                  United States
                </option>
              
                <option >
                  Uruguay
                </option>
              
                <option >
                  Uzbekistan
                </option>
              
                <option >
                  Vanuatu
                </option>
              
                <option >
                  Vatican City
                </option>
              
                <option >
                  Venezuela
                </option>
              
                <option >
                  Vietnam
                </option>
              
                <option >
                  Wallis &amp; Futuna
                </option>
              
                <option >
                  Western Sahara
                </option>
              
                <option >
                  Yemen
                </option>
              
                <option >
                  Zambia
                </option>
              
                <option >
                  Zimbabwe
                </option>">England</option>
</select>
<span class="bar"></span>
</div>
</td>
</tr>
</tr>
   <tr>
<td class="accept">Male <input type="radio" name="sex" value="Male" required/></button>
&nbsp&nbsp&nbsp
Female <input type="radio" name="sex" value="Female" required/></button>
    </td>
      <td><div id="input">
          <div class="group">
<input type="text" name="work" pattern="[(a-z\s) (A-Z\s)]+$" autocomplete="off" maxlength="30" required>
<label>Your Work</label>
<span class="bar"></span>
</div>
    </td>
</tr>
</div>
<tr>
<td class="accept">
<a href="http://www.unitysite/Benefitstosupportclub.co.rw/section/read/213065/" >Benefits To Support This Club<input type="checkbox" required>
</td>
  <td>
  <span><input type="submit" name="register" value="Register"></span></td>
  </div>
</tr>
</table>
</form>
</a></td></tr></td></tr></div>
<button class="rwema"><font size="2" color="white">&copy by | Bagirishya Rwema Dominique | 2017.</button>
<script>
  
  $(document).ready(function() {

    $('input').blur(function() {

      if ($(this).val())
        $(this).addClass('used');
      else
        $(this).removeClass('used')

    });


  });


</script>
</font></button></td></tr></div></td></div></td></tr></table></form></body>

</html>