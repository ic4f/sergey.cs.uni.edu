<?php
$basePath = '';
$sitePath = '';
setPaths($basePath, $sitePath);

//get physical path and check if file exists
$physicalPath = getPhysicalPath($sitePath);

if (!file_exists($physicalPath)) {
    header('Location: ' . $basePath . '/404.php');
}

$html_lastmodified = date("F d Y H:i:s", @filemtime($physicalPath));

//to get valid keys, remove trailing slash (if URL points to a directory)
$sitePath = rtrim($sitePath, '/');

$arr = explode('/', $sitePath);
$html_localCSS = makeLocalCSS($arr, $basePath);

require "config.php";

$bc = getBreadcrumbsArray($arr, $basePath, $site);

$html_page_title = getPageTitle($bc);
$html_head_title = $html_page_title;
if ($html_head_title === '') {
    $html_head_title = 'Sergey Golitsynskiy';
}

$html_showHeader = false;
$html_showBreadcrumbs = true;

$html_section_title_l = '';
$html_section_title_l_href = '';
$html_section_title_r = '';

if (count($arr) == 1) {
    //this is the homepage
    $html_section_title_l = 'Sergey Golitsynskiy';
    $html_showBreadcrumbs = false;
}
//TODO add redirect handling as separate function or config file
else {
    if ($arr[1] === 'courses') {
        processCourses(
            $arr, 
            $html_section_title_l, 
            $html_section_title_l_href, 
            $html_section_title_r);
    }
    elseif ($arr[1] === 'research') {
        //process research content
    }
    elseif ($arr[1] === 'personal') {
        //process personal content
    }
    elseif ($arr[1] === 'mediacomputation') {
        header('Location: courses/cs1120/spring2017/');
        exit;
    }
    elseif ($arr[1] === 'cs1120') {
        header('Location: courses/cs1120/spring2017/');
        exit;
    }
    elseif ($arr[1] === 'clientside') {
        header('Location: courses/cs1100/fall2016/');
        exit;
    }
    elseif ($arr[1] === 'comm2555') {
        header('Location: courses/comm2555/fall2017/');
        exit;
    }
    elseif ($arr[1] === 'cs1510') {
        header('Location: courses/cs1510/fall2017/');
        exit;
    }
    //don't display page title if same as section_l title    
    if (strcmp($html_section_title_l, $html_page_title) === 0) {
        $html_page_title = '';
    }

    $html_breadcrumbs = getBreadcrumbsHTML($bc);
}

$homePath = $basePath;
if ($homePath == '') {
    $homePath = '/';
}

require 'template.php';


/******************* functions **************************/

/*
 * add myindex.php if dir; add .php if file
 */
function getPhysicalPath($sitePath) {
    if (substr($sitePath, -1) === '/') {
        $pathToFile = $sitePath . 'myindex.php';
    }
    else {
        $pathToFile = $sitePath . '.php';
    }
    return substr($pathToFile, 1);
}


function processCourses($arr, &$title_l, &$title_l_href, &$title_r ) {
    $course = $arr[2];

    if (count($arr) > 3) {
        $semester = $arr[3];
        $title_r = getSemesterTitle($semester);
        $title_l_href = '/courses/' . $course . '/' . $semester;
    }
    else {
        $title_l_href = '/courses/' . $course;
    }

    if ($course == 'cs1100') {
        $title_l = 'CS 1100: Web Development: Client-Side Coding';
    }
    elseif ($course === 'cs1120') {
        $title_l = 'CS 1120: Media Computation';
    }
    elseif ($course == 'comm2555') {
        $title_l = 'COMM 2555: Interactive Digital Communication';
    }
    elseif ($course == 'cs1510') {
        $title_l = 'CS 1510: Introduction to Computing';
    }
    elseif ($arr[2] == 'digital_history') {
        $title_l = 'COMM/HIST 4159/5159: Digital History';
    }
} 


function getSemesterTitle($url_fragment) {
    $title = '';
    $pattern = '/^(fall|spring|summer)(20\d\d)$/';
    preg_match($pattern, $url_fragment, $result);
    if (!empty($result)) {
        $title = ucwords($result[1]) . " " . $result[2];
    }
    return $title;
}


/*
 *   if url is host.address/staging/some/path/to/file , then:
 *     basePath = /staging
 *     sitePath = /some/path/to/file
 */
function setPaths(&$basePath, &$sitePath) {
    $script = $_SERVER['SCRIPT_NAME']; //front controller file
    $pos = strrpos($script, '/');
    $request = $_SERVER['REQUEST_URI'];
    $basePath = substr($request, 0, $pos);
    $sitePath = substr($request, $pos);
}


function getBreadcrumbsArray($arr, $basePath, $site) {
    $bc = array();

    $homeKey = '/';
    if ($basePath != '') {
        $homeKey = $basePath;
    }
    $bc[$homeKey] = $site['/']; //preload 'Home'
    
    $key = '';

    for ($i=1; $i<count($arr); $i++) { //start with 1
        $key .= '/' . $arr[$i];
        if (array_key_exists($key, $site)) {
            $bc[$basePath . $key] = $site[$key];
        }
    }
    return $bc;
}

function getPageTitle($bc) {
//load page title only if it's not the home page (not needed on homepage)
    if(count($bc) > 1) { 
        $keys = array_keys($bc);
        $lastKeyIndex = count($keys)-1;   
        $lastKey = $keys[$lastKeyIndex];
        return $bc[$lastKey]; 
    }
    return '';
}

function getBreadcrumbsHTML($bc) {
    $html = "";
    $i = 0;
    $end = count($bc) - 1;
    foreach ($bc as $href => $text) {
        $html .= "\t\t" . '<a href="' . $href . '">' . $text . '</a>';
        if ($i < $end) {
            $html .= '&nbsp;&nbsp;>&nbsp;';
        }
        $html .= "\n";
        $i++;
    }
    return $html;
}

function makeLocalCSS($arr, $basePath) {
    if (count($arr) > 3 and $arr[1] === 'courses') {
        return "\t\t" . '<link rel="stylesheet" href="' . $basePath . '/courses/' . $arr[2] . '/' . $arr[3] . '/semester.css">';
    }
    return "";
}


