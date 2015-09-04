<?php
## Print/Dump variable's contents and stop execution
echo "<pre/>";print_r($variable);exit;
### or ###
echo "<pre/>";print_r($variable);die;
### or ###
echo "<pre/>";var_dump($variable);die;
### or ###
echo "<pre/>";var_dump($variable);exit;
### or ###
var_export($variable);die;
### or ###
var_export($variable);exit;


## A nice debugging function & it's usage start
// Primitive debug message storage
// $level = "Info", "Warn", "Error", "Title"
function DebugPrint($toDump, $level = "Info") {
  global $debugMode, $debugDump, $debugCount;

  if ($debugMode != 'N') {
    $debugDump[$debugCount++] = "<div class='Dbg$level'>" . $toDump . "</div>\n";
  }
}

// Initialize debug information collection
$debugMode = 'N'; // N=no, desactivated, P=dump to Web page, F=dump to file
$debugSavePath = 'C:\www\App\log_debug.txt'; // If mode F
$debugDump = array();
$debugCount = 0;

// Primitive debug message dump
function DebugDump() {
  global $debugMode, $debugSavePath, $debugDump, $debugCount;

  if ($debugMode == 'F') {
    $fp = fopen($debugSavePath, "a"); #open for writing
  }
  if ($debugCount > 0) {
    switch ($debugMode) {
    case 'P':
        echo '<div style="color: red; background: #8FC; font-size: 24px;">Debug:<br />
';
        for ($i = 0; $i < $debugCount; $i++) {
            echo $debugDump[$i];
        }
        echo '</div>
';
        break;
    case 'F':
        for ($i = 0; $i < $debugCount; $i++) {
            fputs($fp, $debugDump[$i]);
        }
        break;
//~         default:
//~             echo "debugMode = $debugMode<br />\n";
    }
  }
  if ($fp != null) {
    fputs($fp, "-----\n");
    fclose($fp);
  }
}

// Pre array dump
function DebugArrayPrint($array) {
global $debugMode;

  if ($debugMode != 'N') {
    return "<pre class='ArrayPrint'>" . print_r($array, true) . "</pre>";
  } else return "";    // Gain some microseconds...
}
## A nice debugging function & it's usage finish

## Workaround for "Nesting level too deep..." error for long objects
ob_start();
var_dump($obj);
$dataDump = ob_get_clean();
echo $dataDump;exit

## Latest Indian States PHPArray
$statesArr = array(
	1 => 'Andaman and Nicobar Island',
	2 => 'Andhra Pradesh',
	3 => 'Arunachal Pradesh',
	4 => 'Assam',
	5 => 'Bihar',
	6 => 'Chandigarh',
	7 => 'Chhattisgarh',
	8 => 'Dadra and Nagar Haveli',
	9 => 'Daman and Diu',
	10 => 'Delhi',
	11 => 'Goa',
	12 => 'Gujarat',
	13 => 'Haryana',
	14 => 'Himachal Pradesh',
	15 => 'Jammu and Kashmir',
	16 => 'Jharkhand',
	17 => 'Karnataka',
	18 => 'Kerala',
	19 => 'Lakshadweep',
	20 => 'Madhya Pradesh',
	21 => 'Maharashtra',
	22 => 'Manipur',
	23 => 'Meghalaya',
	24 => 'Mizoram',
	25 => 'Nagaland',
	26 => 'Odisha',
	27 => 'Puducherry',
	28 => 'Punjab',
	29 => 'Rajasthan',
	30 => 'Sikkim',
	31 => 'Tamil Nadu',
	32 => 'Telangana',
	33 => 'Tripura',
	34 => 'Uttar Pradesh',
	35 => 'Uttarakhand',
	36 => 'West Bengal'
);

$countriesArr = array(
	'AFGHANISTAN' => 'AF',
	'ÅLAND ISLANDS' => 'AX',
	'ALBANIA' => 'AL',
	'ALGERIA' => 'DZ',
	'AMERICAN SAMOA' => 'AS',
	'ANDORRA' => 'AD',
	'ANGOLA' => 'AO',
	'ANGUILLA' => 'AI',
	'ANTARCTICA' => 'AQ',
	'ANTIGUA AND BARBUDA' => 'AG',
	'ARGENTINA' => 'AR',
	'ARMENIA' => 'AM',
	'ARUBA' => 'AW',
	'AUSTRALIA' => 'AU',
	'AUSTRIA' => 'AT',
	'AZERBAIJAN' => 'AZ',
	'BAHAMAS' => 'BS',
	'BAHRAIN' => 'BH',
	'BANGLADESH' => 'BD',
	'BARBADOS' => 'BB',
	'BELARUS' => 'BY',
	'BELGIUM' => 'BE',
	'BELIZE' => 'BZ',
	'BENIN' => 'BJ',
	'BERMUDA' => 'BM',
	'BHUTAN' => 'BT',
	'BOLIVIA, PLURINATIONAL STATE OF' => 'BO',
	'BONAIRE, SINT EUSTATIUS AND SABA' => 'BQ',
	'BOSNIA AND HERZEGOVINA' => 'BA',
	'BOTSWANA' => 'BW',
	'BOUVET ISLAND' => 'BV',
	'BRAZIL' => 'BR',
	'BRITISH INDIAN OCEAN TERRITORY' => 'IO',
	'BRUNEI DARUSSALAM' => 'BN',
	'BULGARIA' => 'BG',
	'BURKINA FASO' => 'BF',
	'BURUNDI' => 'BI',
	'CAMBODIA' => 'KH',
	'CAMEROON' => 'CM',
	'CANADA' => 'CA',
	'CAPE VERDE' => 'CV',
	'CAYMAN ISLANDS' => 'KY',
	'CENTRAL AFRICAN REPUBLIC' => 'CF',
	'CHAD' => 'TD',
	'CHILE' => 'CL',
	'CHINA' => 'CN',
	'CHRISTMAS ISLAND' => 'CX',
	'COCOS (KEELING) ISLANDS' => 'CC',
	'COLOMBIA' => 'CO',
	'COMOROS' => 'KM',
	'CONGO' => 'CG',
	'CONGO, THE DEMOCRATIC REPUBLIC OF THE' => 'CD',
	'COOK ISLANDS' => 'CK',
	'COSTA RICA' => 'CR',
	'CÔTE D\'IVOIRE' => 'CI',
	'CROATIA' => 'HR',
	'CUBA' => 'CU',
	'CURAÇAO' => 'CW',
	'CYPRUS' => 'CY',
	'CZECH REPUBLIC' => 'CZ',
	'DENMARK' => 'DK',
	'DJIBOUTI' => 'DJ',
	'DOMINICA' => 'DM',
	'DOMINICAN REPUBLIC' => 'DO',
	'ECUADOR' => 'EC',
	'EGYPT' => 'EG',
	'EL SALVADOR' => 'SV',
	'EQUATORIAL GUINEA' => 'GQ',
	'ERITREA' => 'ER',
	'ESTONIA' => 'EE',
	'ETHIOPIA' => 'ET',
	'FALKLAND ISLANDS (MALVINAS)' => 'FK',
	'FAROE ISLANDS' => 'FO',
	'FIJI' => 'FJ',
	'FINLAND' => 'FI',
	'FRANCE' => 'FR',
	'FRENCH GUIANA' => 'GF',
	'FRENCH POLYNESIA' => 'PF',
	'FRENCH SOUTHERN TERRITORIES' => 'TF',
	'GABON' => 'GA',
	'GAMBIA' => 'GM',
	'GEORGIA' => 'GE',
	'GERMANY' => 'DE',
	'GHANA' => 'GH',
	'GIBRALTAR' => 'GI',
	'GREECE' => 'GR',
	'GREENLAND' => 'GL',
	'GRENADA' => 'GD',
	'GUADELOUPE' => 'GP',
	'GUAM' => 'GU',
	'GUATEMALA' => 'GT',
	'GUERNSEY' => 'GG',
	'GUINEA' => 'GN',
	'GUINEA-BISSAU' => 'GW',
	'GUYANA' => 'GY',
	'HAITI' => 'HT',
	'HEARD ISLAND AND MCDONALD ISLANDS' => 'HM',
	'HOLY SEE (VATICAN CITY STATE)' => 'VA',
	'HONDURAS' => 'HN',
	'HONG KONG' => 'HK',
	'HUNGARY' => 'HU',
	'ICELAND' => 'IS',
	'INDIA' => 'IN',
	'INDONESIA' => 'ID',
	'IRAN, ISLAMIC REPUBLIC OF' => 'IR',
	'IRAQ' => 'IQ',
	'IRELAND' => 'IE',
	'ISLE OF MAN' => 'IM',
	'ISRAEL' => 'IL',
	'ITALY' => 'IT',
	'JAMAICA' => 'JM',
	'JAPAN' => 'JP',
	'JERSEY' => 'JE',
	'JORDAN' => 'JO',
	'KAZAKHSTAN' => 'KZ',
	'KENYA' => 'KE',
	'KIRIBATI' => 'KI',
	'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF' => 'KP',
	'KOREA, REPUBLIC OF' => 'KR',
	'KUWAIT' => 'KW',
	'KYRGYZSTAN' => 'KG',
	'LAO PEOPLE\'S DEMOCRATIC REPUBLIC' => 'LA',
	'LATVIA' => 'LV',
	'LEBANON' => 'LB',
	'LESOTHO' => 'LS',
	'LIBERIA' => 'LR',
	'LIBYA' => 'LY',
	'LIECHTENSTEIN' => 'LI',
	'LITHUANIA' => 'LT',
	'LUXEMBOURG' => 'LU',
	'MACAO' => 'MO',
	'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF' => 'MK',
	'MADAGASCAR' => 'MG',
	'MALAWI' => 'MW',
	'MALAYSIA' => 'MY',
	'MALDIVES' => 'MV',
	'MALI' => 'ML',
	'MALTA' => 'MT',
	'MARSHALL ISLANDS' => 'MH',
	'MARTINIQUE' => 'MQ',
	'MAURITANIA' => 'MR',
	'MAURITIUS' => 'MU',
	'MAYOTTE' => 'YT',
	'MEXICO' => 'MX',
	'MICRONESIA, FEDERATED STATES OF' => 'FM',
	'MOLDOVA, REPUBLIC OF' => 'MD',
	'MONACO' => 'MC',
	'MONGOLIA' => 'MN',
	'MONTENEGRO' => 'ME',
	'MONTSERRAT' => 'MS',
	'MOROCCO' => 'MA',
	'MOZAMBIQUE' => 'MZ',
	'MYANMAR' => 'MM',
	'NAMIBIA' => 'NA',
	'NAURU' => 'NR',
	'NEPAL' => 'NP',
	'NETHERLANDS' => 'NL',
	'NEW CALEDONIA' => 'NC',
	'NEW ZEALAND' => 'NZ',
	'NICARAGUA' => 'NI',
	'NIGER' => 'NE',
	'NIGERIA' => 'NG',
	'NIUE' => 'NU',
	'NORFOLK ISLAND' => 'NF',
	'NORTHERN MARIANA ISLANDS' => 'MP',
	'NORWAY' => 'NO',
	'OMAN' => 'OM',
	'PAKISTAN' => 'PK',
	'PALAU' => 'PW',
	'PALESTINE, STATE OF' => 'PS',
	'PANAMA' => 'PA',
	'PAPUA NEW GUINEA' => 'PG',
	'PARAGUAY' => 'PY',
	'PERU' => 'PE',
	'PHILIPPINES' => 'PH',
	'PITCAIRN' => 'PN',
	'POLAND' => 'PL',
	'PORTUGAL' => 'PT',
	'PUERTO RICO' => 'PR',
	'QATAR' => 'QA',
	'RÉUNION' => 'RE',
	'ROMANIA' => 'RO',
	'RUSSIAN FEDERATION' => 'RU',
	'RWANDA' => 'RW',
	'SAINT BARTHÉLEMY' => 'BL',
	'SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA' => 'SH',
	'SAINT KITTS AND NEVIS' => 'KN',
	'SAINT LUCIA' => 'LC',
	'SAINT MARTIN (FRENCH PART)' => 'MF',
	'SAINT PIERRE AND MIQUELON' => 'PM',
	'SAINT VINCENT AND THE GRENADINES' => 'VC',
	'SAMOA' => 'WS',
	'SAN MARINO' => 'SM',
	'SAO TOME AND PRINCIPE' => 'ST',
	'SAUDI ARABIA' => 'SA',
	'SENEGAL' => 'SN',
	'SERBIA' => 'RS',
	'SEYCHELLES' => 'SC',
	'SIERRA LEONE' => 'SL',
	'SINGAPORE' => 'SG',
	'SINT MAARTEN (DUTCH PART)' => 'SX',
	'SLOVAKIA' => 'SK',
	'SLOVENIA' => 'SI',
	'SOLOMON ISLANDS' => 'SB',
	'SOMALIA' => 'SO',
	'SOUTH AFRICA' => 'ZA',
	'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS' => 'GS',
	'SOUTH SUDAN' => 'SS',
	'SPAIN' => 'ES',
	'SRI LANKA' => 'LK',
	'SUDAN' => 'SD',
	'SURINAME' => 'SR',
	'SVALBARD AND JAN MAYEN' => 'SJ',
	'SWAZILAND' => 'SZ',
	'SWEDEN' => 'SE',
	'SWITZERLAND' => 'CH',
	'SYRIAN ARAB REPUBLIC' => 'SY',
	'TAIWAN, PROVINCE OF CHINA' => 'TW',
	'TAJIKISTAN' => 'TJ',
	'TANZANIA, UNITED REPUBLIC OF' => 'TZ',
	'THAILAND' => 'TH',
	'TIMOR-LESTE' => 'TL',
	'TOGO' => 'TG',
	'TOKELAU' => 'TK',
	'TONGA' => 'TO',
	'TRINIDAD AND TOBAGO' => 'TT',
	'TUNISIA' => 'TN',
	'TURKEY' => 'TR',
	'TURKMENISTAN' => 'TM',
	'TURKS AND CAICOS ISLANDS' => 'TC',
	'TUVALU' => 'TV',
	'UGANDA' => 'UG',
	'UKRAINE' => 'UA',
	'UNITED ARAB EMIRATES' => 'AE',
	'UNITED KINGDOM' => 'GB',
	'UNITED STATES' => 'US',
	'UNITED STATES MINOR OUTLYING ISLANDS' => 'UM',
	'URUGUAY' => 'UY',
	'UZBEKISTAN' => 'UZ',
	'VANUATU' => 'VU',
	'VENEZUELA, BOLIVARIAN REPUBLIC OF' => 'VE',
	'VIETNAM' => 'VN',
	'VIRGIN ISLANDS, BRITISH' => 'VG',
	'VIRGIN ISLANDS, U.S.' => 'VI',
	'WALLIS AND FUTUNA' => 'WF',
	'WESTERN SAHARA' => 'EH',
	'YEMEN' => 'YE',
	'ZAMBIA' => 'ZM',
	'ZIMBABWE' => 'ZW',
);
