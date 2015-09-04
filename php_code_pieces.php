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

## Latest States Array
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

