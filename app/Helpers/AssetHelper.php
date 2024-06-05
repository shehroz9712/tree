<?php

use App\Models\Service;
use App\Models\Setting;

function userFile($file = '')
{
    return url('assets/user/' . $file);
}

function getServices()
{
    return Service::where('status', 1)->get();
}

function getTitle()
{
    return Setting::value('title');
}

function getEmail()
{
    return Setting::value('email');
}

function getPhone()
{
    return Setting::value('phone');
}

function getAddress()
{
    return Setting::value('address');
}

function getWebsite()
{
    return Setting::value('website');
}

function getLogo()
{
    return url('assets/uploads/logo/' . Setting::value('logo'));
}

function getDarkLogo()
{
    return url('assets/uploads/logo/' . Setting::value('dark-logo'));
}
function getFavicon()
{
    return url('assets/uploads/' . Setting::value('favicon'));
}


function getFacebook()
{
    return Setting::value('facebook');
}

function getTwitter()
{
    return Setting::value('twitter');
}

function getInstagram()
{
    return Setting::value('instagram');
}

function getLinkedin()
{
    return Setting::value('linkedin');
}
function getAppStoreLink()
{
    return Setting::value('app-store-link');
}

function getPlayStoreLink()
{
    return Setting::value('play-store-link');
}


function getFooterScripts()
{
    return Setting::value('footer_scripts');
}

function getFooterSentence()
{
    return Setting::value('footer_sentence');
}

function getCopyright()
{
    return Setting::value('copyright');
}

function uploads($path, $name)
{
    $filePath = public_path('assets/uploads/' . $path . '/' . $name);

    if ($name && file_exists($filePath)) {
        return url('assets/uploads/' . $path . '/' . $name);
    } else {
        return url('assets/uploads/dummy.png');
    }
}

function uploadImage($image, $folder)
{
    if ($image  && $image != null) {
        $getClientMimeType = explode('/', $image->getClientMimeType());
        $extension = $image->getClientOriginalExtension();

        // Generate a unique image name using a random string and the current timestamp
        $image_name =  time() . '.' . $extension;

        // Move the image to the desired folder
        $image->move(public_path('uploads/' . $folder), $image_name);
    } else {
        $image_name = 'no-image.png';
    }
    return $image_name;
}

function dateformat($date, $format)
{
    return $date ? $date->format($format) : '00:00';
}


function checkData($data, $route)
{
    if (empty($data)) {
        return redirect()->route($route)->with('error', 'No data found');
    }
}
