<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model {
    protected $table = 'registrations';


    public static function searchAjax($keyword)
    {
        $keyword = trim($keyword);

        $registrations = Registration::where(function ($query) use ($keyword) {
                $query->where('id', 'like', '%' . $keyword . '%')
                    ->orWhere('first_name', 'like', '%' . $keyword . '%')
                    ->orWhere('last_name', 'like', '%' . $keyword . '%')
                    ->orWhere('email', 'like', '%' . $keyword . '%')
                    ->orWhere('mobile_number', 'like', '%' . $keyword . '%')
                    ->orWhere('dive_center', 'like', '%' . $keyword . '%')
                    ->orWhere('bank', 'like', '%' . $keyword . '%')
                    ->orWhere('transaction_number', 'like', '%' . $keyword . '%');
            });

        return $registrations->get();
    }

}
