<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    function setLocale($locale)
    {
        if (in_array($locale, \Config::get('app.locales'))) {   # Проверяем, что у пользователя выбран доступный язык 
            Session::put('locale', $locale);                    # И устанавливаем его в сессии под именем locale
        }
        return redirect()->back();  
    }
}
