<?php

$id = $_SESSION['id'];

$doc = "users/infos14.xml";


if (file_exists($doc)) {
            $dom = new DomDocument;
              $dom->load("users/infos14.xml");

              $infos = $dom->getElementsByTagName('name');
              foreach($infos as $name)
                $name=$name->firstChild->nodeValue;

              $infos = $dom->getElementsByTagName('first_name');
              foreach($infos as $first_name)
                $first_name=$first_name->firstChild->nodeValue;

              $infos = $dom->getElementsByTagName('email');
              foreach($infos as $email)
                $email=$email->firstChild->nodeValue;

              $infos = $dom->getElementsByTagName('city');
              foreach($infos as $city)
                $city=$city->firstChild->nodeValue;

              $infos = $dom->getElementsByTagName('date');
              foreach($infos as $date)
                $date=$date->firstChild->nodeValue;

              $infos = $dom->getElementsByTagName('high_school_name');
              foreach($infos as $high_school_name)
                $high_school_name=$high_school_name->firstChild->nodeValue;

              $infos = $dom->getElementsByTagName('high_school_graduation');
              foreach($infos as $high_school_graduation)
                $high_school_graduation=$high_school_graduation->firstChild->nodeValue;

              $infos = $dom->getElementsByTagName('high_school_description');
              foreach($infos as $high_school_description)
                $high_school_description=$high_school_description->firstChild->nodeValue;

              $infos = $dom->getElementsByTagName('upper_school_name');
              foreach($infos as $upper_school_name)
                $upper_school_name=$upper_school_name->firstChild->nodeValue;

              $infos = $dom->getElementsByTagName('upper_school_graduation');
              foreach($infos as $upper_school_graduation)
                $upper_school_graduation=$upper_school_graduation->firstChild->nodeValue;

              $infos = $dom->getElementsByTagName('upper_school_description');
              foreach($infos as $upper_school_description)
                $upper_school_description=$upper_school_description->firstChild->nodeValue;

              $infos = $dom->getElementsByTagName('twitter');
              foreach($infos as $twitter)
                $twitter=$twitter->firstChild->nodeValue;

              $infos = $dom->getElementsByTagName('facebook');
              foreach($infos as $facebook)
                $facebook=$facebook->firstChild->nodeValue;

              $infos = $dom->getElementsByTagName('google');
              foreach($infos as $google)
                $google=$google->firstChild->nodeValue;

              $infos = $dom->getElementsByTagName('instagram');
              foreach($infos as $instagram)
                $instagram=$instagram->firstChild->nodeValue;
} 

else {
    $name=" ";
              $first_name=" ";
              $city=" ";
              $high_school_name=" ";
              $high_school_graduation=" ";
              $high_school_description=" ";
              $upper_school_name=" ";
              $upper_school_graduation=" ";
              $upper_school_description=" ";
              $twitter=" ";
              $facebook=" ";
              $google=" ";
              $instagram=" ";
}
              
          
?>