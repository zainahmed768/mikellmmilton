<?php

use App\Models\SiteSetting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

if (! function_exists('site_settings')) {
    function site_settings()
    {
        return SiteSetting::first();
    }
}

if (! function_exists('uploadsDir')) {
    function uploadsDir($path = '')
    {
        return $path != '' ? 'uploads/' . $path . '/' : 'uploads/';
    }
}

if (! function_exists('uploadsUrl')) {
    function uploadsUrl($file = '')
    {
        return $file != '' && file_exists(uploadsDir('users') . $file) ? uploadsDir('users') . $file : 'avatar.jpg';
    }
}

if (! function_exists('matchChecked')) {
    function matchChecked($param1, $param2)
    {
        return $param1 == $param2 ? ' checked="checked" ' : '';
    }
}

if (! function_exists('pageStatuses')) {
    function pageStatuses($status = '')
    {
        $data = [
            'published' => 'Published',
            'draft'     => 'Draft',
        ];

        return isset($status) && ! empty($status) ? $data[$status] : $data;
    }
}

if (! function_exists('matchSelected')) {
    function matchSelected($param1, $param2)
    {
        return $param1 == $param2 ? ' selected="selected" ' : '';
    }
}

if (! function_exists('loginUser')) {
    function loginUser()
    {
        return User::find(Auth::user()->id);
    }
}

if (! function_exists('getMasterTypesMenu')) {
    /**
     * Generate dynamic menu for master types.
     *
     * @return array
     */
    function getMasterTypesMenu(): array
    {
        return [
            'designation'   => [
                'title'  => 'Designations',
                'icon'   => 'feather icon-users',
                'routes' => [
                    'create' => route('admin.master-data.create', 'designation'),
                    'index'  => route('admin.master-data.index', 'designation'),
                ],
            ],
            'industry_type' => [
                'title'  => 'Industry Types',
                'icon'   => 'feather icon-briefcase',
                'routes' => [
                    'create' => route('admin.master-data.create', 'industry_type'),
                    'index'  => route('admin.master-data.index', 'industry_type'),
                ],
            ],
        ];
    }
}
