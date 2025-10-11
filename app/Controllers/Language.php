<?php

namespace App\Controllers;

class Language extends BaseController
{
    public function switch($locale = 'en')
    {
        $session = session();
        $locale = in_array($locale, ['en', 'id']) ? $locale : 'en';
        $session->set('locale', $locale);
        return redirect()->back();
    }
}