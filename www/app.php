<?php
$arrPath = splitURL();
$basePath = $arrPath[0]; 
$sitePath = $arrPath[1];
$pathToFile = getPathToFile($sitePath);

$physicalPath = substr($pathToFile, 1);
if (!file_exists($physicalPath)) {
    header('Location: ' . $basePath . '/404.php');
}

//to get valid keys, remove trailing slash (if URL points to a directory)
$sitePath = rtrim($sitePath, '/');

require "config.php";

$arr = explode('/', $sitePath);

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
    $html_section_title_l = 'Sergey Golitsynskiy';
    $html_showBreadcrumbs = false;
}
else {
    $html_breadcrumbs = getBreadcrumbsHTML($bc);
    
    if ($arr[1] == 'courses' && count($arr) > 2) {
        $titles = processCourses($arr, $html_section_title_l, $html_section_title_r);
    }
    elseif ($arr[1] == 'research') {
        //set research titles
    }
    elseif ($arr[1] == 'personal') {
        //set personal titles
    }
}

$homePath = $basePath;
if ($homePath == '') {
    $homePath = '/';
}


require 'template.php';



function processCourses($arr, &$html_section_title_l, $html_section_title_r ) {
    $course = $arr[2];

    //do not display course title on course main page
    if (count($arr) === 3) {
        $html_page_title = '';
    }

    if ($arr[2] == 'cs1120') {
        $html_section_title_l = 'CS 1120: Media Computation';
        $html_section_title_r = 'Spring 2016';
        $html_section_title_l_href = '/courses/cs1120';
    }
    elseif ($arr[2] == 'comm3159') {
        $html_section_title_l = 'COMM 3159: Communication & Code';
        $html_section_title_r = 'Fall 2015';
    }
    elseif ($arr[2] == 'comm2555') {
        $html_section_title_l = 'COMM 2555: Interactive Digital Communication';
        $html_section_title_r = 'Spring 2016';
    }
    elseif ($arr[2] == 'cs3110') {
        $html_section_title_l = 'CS 3110: Web Application Development';
        $html_section_title_r = '2017 (tentative)';
    }
    elseif ($arr[2] == 'digital_history') {
        $html_section_title_l = 'COMM/HIST 4159/5159: Digital History';
        $html_section_title_r = 'Fall 2016';
    }
    $html_section_title_r = getSemesterTitle($arr[3]);
    $html
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
 * returns an array with 2 parts: 
 *   if url is host.address/staging/some/path/to/file , then:
 *     basePath = /staging
 *     sitePath = /some/path/to/file
 */
function splitURL() {
    $script = $_SERVER['SCRIPT_NAME']; //front controller file
    $pos = strrpos($script, '/');
    $request = $_SERVER['REQUEST_URI'];
    $basePath = substr($request, 0, $pos);
    $sitePath = substr($request, $pos);
    return array($basePath, $sitePath);
}

/*
 * add index.php if dir; add .php if file
 */
function getPathToFile($sitePath) {
    if (substr($sitePath, -1) === '/') {
        return $sitePath . 'myindex.php';
    }
    return $sitePath . '.php';
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

