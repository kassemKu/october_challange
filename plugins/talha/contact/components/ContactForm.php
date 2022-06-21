<?php

namespace Talha\Contact\Components;

use Cms\Classes\ComponentBase;
use Validator;
use ValidationException;
use Input;
use Flash;
use Redirect;
use Talha\Contact\Models\Contact;

class ContactForm extends ComponentBase
{
    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'Simple constant form'
        ];
    }

    /**
     *
     */
    public function onSend()
    {
        $data = post();
        $rules = [
            'member_name' => ['required', 'string', 'max:199', 'min:3'],
            'phone_number' => ['required', 'integer'],
            'content' => ['required', 'string', 'min:3'],
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            throw new ValidationException($validator);
            return Redirect::back()->withErrors($validator);
        } else {
            Contact::create([
                'member_name' => Input::get('member_name'),
                'phone_number' => Input::get('phone_number'),
                'content' => Input::get('content')
            ]);
            Flash::success('message sended successfully');
            return Redirect::back();
        }
    }
}
