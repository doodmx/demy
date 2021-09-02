<?php

return [
    'contact'  => [
        'title'   => '¿Quieres saber más sobre Academy?',
        'success' => 'Hemos recibido tu mensaje, en un momento nos comunicaremos contigo.',
        'error'   => 'Ocurrio un error intente mas tarde',
        'action'  => 'Conectar',
        'fields'  => [
            'email'    => [
                'placeholder' => 'Correo Electrónico'
            ],
            'whatsapp' => [
                'placeholder' => 'WhatsApp'
            ]
        ]
    ],
    'schedule' => [
        'title'  => 'Agenda una cita personalizada.',
        'success' => 'Hemos recibido tu solicitud para agendar una cita, en breve nos comunicaremos contigo.',
        'error'   => 'Ocurrio un error intente mas tarde',
        'action' => 'Enviar',
        'fields' => [
            'name'     => [
                'placeholder' => 'Nombre'
            ],
            'lastname' => [
                'placeholder' => 'Apellidos'
            ],
            'email'    => [
                'placeholder' => 'Correo Electrónico'
            ],
            'whatsapp' => [
                'placeholder' => 'WhatsApp'
            ]
        ]
    ],
    'register' => [
        'title'  => 'Regístrate para iniciar tu capacitación',
        'action' => 'Enviar solicitud',
        'fields' => [
            'name'            => [
                'placeholder'  => 'Nombre',
            ],
            'lastname'        => [
                'placeholder'  => 'Apellidos',
            ],
            'email'           => [
                'placeholder'  => 'Correo Electrónico',
            ],
            'whatsapp'        => [
                'placeholder'  => 'WhatsApp',
            ],
            'password'           => [
                'placeholder'  => 'Contraseña',
            ],
            'password_confirmation'           => [
                'placeholder'  => 'Confirmar Contraseña',
            ],
            'terms'           => [
                'placeholder'  => 'Acepto y conozco el aviso de privacidad.',
            ]
        ]
    ]
];
