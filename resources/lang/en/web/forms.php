<?php

return [
    'contact'  => [
        'title'   => 'Do you want to know more about Academy?',
        'success' => 'We have received your request',
        'error'   => 'There was an error sending your request, try later',
        'action'  => 'Submit',
        'fields'  => [
            'email'    => [
                'placeholder' => 'Email'
            ],
            'whatsapp' => [
                'placeholder' => 'WhatsApp'
            ]
        ]
    ],
    'schedule' => [
        'title'   => 'Make an appointment',
        'success' => 'We have received your request',
        'error'   => 'There was an error sending your request, try later',
        'action'  => 'Submit',
        'fields'  => [
            'name'     => [
                'placeholder' => 'First Name'
            ],
            'lastname' => [
                'placeholder' => 'Last Name'
            ],
            'email'    => [
                'placeholder' => 'Email'
            ],
            'whatsapp' => [
                'placeholder' => 'WhatsApp'
            ]
        ]
    ],
    'register' => [
        'title'  => 'Register now',
        'action' => 'Submit',
        'copy'   => 'Fill the data',
        'fields' => [
            'name'                  => [
                'placeholder' => 'First name',
            ],
            'lastname'              => [
                'placeholder' => 'Last name',
            ],
            'email'                 => [
                'placeholder' => 'Email',
            ],
            'whatsapp'              => [
                'placeholder' => 'WhatsApp',

            ],
            'password'              => [
                'placeholder' => 'Password',
            ],
            'password_confirmation' => [
                'placeholder' => 'Confirm your password',
            ],
            'terms'                 => [
                'placeholder' => 'I agree to privacy policy.',

            ]
        ]
    ]
];
