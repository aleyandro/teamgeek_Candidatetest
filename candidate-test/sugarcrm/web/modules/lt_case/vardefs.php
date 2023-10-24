<?php 

//This file was generated for you with lots of love from teamgeek

$moduleVardefs['lt_case'] = [

    'label' => 'Case',
    'detail_view_class' => 'CaseDetailView',
    'edit_view_class' => 'CaseEditView',
    'related_modules' => [
        //Define a many-to-one relationship where case belongs to customer
    'lt_case' => [
        'relationship_type' => 'many-to-one',
        'relation_key_lhs' => 'case_id',
    ],
    //Define a many-to-many relationship where a customer can have many cases and cases can be on many customers
    'lt_customer' => [
        'relationship_type' => 'many-to-many',
        'join_table' => 'customers_cases',
        'join_key_lhs' => 'case_id',
        'join_key_rhs' => 'customer_id',
    ],
    //Define a one-to-many relationship where a case has many policies
    'lt_policy' => [
        'relationship_type' => 'one-to-many',
        'relation_key_rhs' => 'case_id',
    ]


    ],
    /* Add all the fields for your module/table below */
    'fields' => [
        /*Any definitions added to the `id` field will be ignored, leave it as an empty array*/
        'id' => [],
        'case_id' => [
            'type' => 'integer',
            'null' => true,
            'length' => null,
            'default' => ''
        ],
        'policy_id' => [
            'type' => 'integer',
            'null' => true,
            'length' => null,
            'default' => ''
        ],
        'type' => [
            'type' => 'string',
            'null' => true,
            'length' => 20,
            'default' => ''
        ],
        'status' => [
            'type' => 'string',
            'null' => false,
            'length' => 6,
            'default' => 'open'
        ]
         //Add more fields here
    ],
    'detail_view_fields' => [
        ['name', 'description'],
    ],
    'edit_view_fields' => [
        ['name', 'description'],
    ],
    'list_view_fields' => ['name', 'description'],
];