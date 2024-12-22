<?php

return [
    'models' => [
        'reaction' => BalajiDharma\LaravelReaction\Models\Reaction::class,
    ],

    'table_names' => [
        'reactions' => 'reactions',
    ],

    'reaction_types' => [
       [
           'name' => 'likes',
           'unique' => true,
           'options' => [
                [
                    'name' => 'like',
                    'value' => 1,
                ],
                [
                    'name' => 'dislike',
                    'value' => -1,
                ]
           ]
        ],
        [
            'name' => 'stars',
            'unique' => true,
            'options' => [
               [
                   'name' => 'star',
                   'value' => 1,
                   'min' => 1,
                   'max' => 5
               ]
            ]
        ],
        [
            'name' => 'comment_reaction',
            'unique' => true,
            'options' => [
                [
                    'name' => 'like',
                    'value' => 1,
                ],
                [
                    'name' => 'helpful',
                    'value' => 1,
                ],
                [
                    'name' => 'funny',
                    'value' => 1,
                ],
                [
                    'name' => 'dislike',
                    'value' => -1,
                ]
            ]
        ]
    ],
];