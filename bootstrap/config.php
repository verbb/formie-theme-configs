<?php

return [
    'themeConfig' => [
        'resetClasses' => true,

        'formTitle' => [
            'attributes' => [
                'class' => 'h3',
            ],
        ],

        'alertError' => [
            'attributes' => [
                'class' => 'alert alert-danger',
            ],
        ],

        'alertSuccess' => [
            'attributes' => [
                'class' => 'alert alert-success',
            ],
        ],

        'buttonWrapper' => [
            'attributes' => [
                'class' => [
                    'd-flex justify-content-start mx-n2',
                    "{{ buttonsPosition == 'right' ? 'justify-content-end' }}",
                    "{{ buttonsPosition == 'center' ? 'justify-content-center' }}",
                    "{{ buttonsPosition == 'left-right' ? 'justify-content-between' }}",
                    "{{ buttonsPosition == 'right-save-left' ? 'justify-content-start flex-row-reverse' }}",
                    "{{ buttonsPosition == 'center-save-left' ? 'justify-content-center flex-row-reverse' }}",
                    "{{ buttonsPosition == 'center-save-right' ? 'justify-content-center' }}",
                    "{{ buttonsPosition == 'save-right' ? 'justify-content-between' }}",
                    "{{ buttonsPosition == 'save-left' ? 'justify-content-between flex-row-reverse' }}",
                ],
            ],
        ],

        'buttonContainer' => [
            'attributes' => [
                'class' => 'd-flex justify-content-start',
            ],
        ],

        'saveButton' => [
            'attributes' => [
                'class' => 'btn btn-link mx-2',
            ],
        ],

        'backButton' => [
            'attributes' => [
                'class' => 'btn btn-secondary mx-2',
            ],
        ],

        'submitButton' => [
            'attributes' => [
                'class' => 'btn btn-primary mx-2 order-5',
            ],
        ],

        'page' => [
            'attributes' => [
                'class' => [
                    "{{ form.hasMultiplePages() and page.id != currentPage.id ? 'd-none' : false }}",
                ],
            ],
        ],

        'pageTabs' => [
            'attributes' => [
                'class' => 'nav nav-tabs mb-3',
            ],
        ],

        'pageTab' => [
            'attributes' => [
                'class' => 'nav-item',
            ],
        ],

        'pageTabLink' => [
            'attributes' => [
                'class' => [
                    'nav-link',
                    "{{ (page.id == currentPage.id) ? 'active' : false }}",
                    "{{ page.getFieldErrors(submission) ? 'text-danger' : false }}",
                ],
            ],
        ],

        'progress' => [
            'attributes' => [
                'class' => 'progress mt-3',
            ],
        ],

        'progressContainer' => [
            'attributes' => [
                'class' => 'progress-bar',
            ],
        ],

        'subFieldRows' => [
            'attributes' => [
                'class' => 'mb-n3',
            ],
        ],

        'subFieldRow' => [
            'attributes' => [
                'class' => 'row gx-3 mb-3',
            ],
        ],

        'nestedFieldRows' => [
            'attributes' => [
                'class' => 'border px-3 mb-n3',
            ],
        ],

        'nestedFieldRow' => [
            'attributes' => [
                'class' => 'row gx-3 mb-3',
            ],
        ],

        'row' => [
            'attributes' => [
                'class' => [
                    'row gx-3 mb-3',
                    "{{ not craft.formie.getVisibleFields(row) ? ' d-none' }}",
                ],
            ],
        ],

        'field' => [
            'attributes' => [
                'class' => 'col',
            ],
        ],

        'fieldLabel' => [
            'attributes' => [
                'class' => 'form-label col-form-label',
            ],
        ],

        'fieldRequired' => [
            'attributes' => [
                'class' => 'text-danger',
            ],
        ],

        'fieldInstructions' => [
            'attributes' => [
                'class' => 'form-text mb-2',
            ],
        ],

        'fieldInput' => [
            'attributes' => [
                'class' => [
                    'form-control',
                    "{{ (submission.getErrors(field.handle) ?? null) ? 'border-danger' }}",
                ],
            ],
        ],

        'fieldErrors' => [
            'attributes' => [
                'class' => 'list-unstyled mb-0',
            ],
        ],

        'fieldError' => [
            'attributes' => [
                'class' => 'text-danger mt-2',
            ],
        ],

        'fieldAddButton' => [
            'attributes' => [
                'class' => 'btn btn-sm btn-secondary',
            ],
        ],

        'fieldRemoveButton' => [
            'attributes' => [
                'class' => 'btn btn-sm btn-secondary',
            ],
        ],

        'fieldLimit' => [
            'attributes' => [
                'class' => 'form-text',
            ],
        ],

        'agree' => [
            'fieldOption' => [
                'attributes' => [
                    'class' => 'form-check',
                ],
            ],

            'fieldOptionLabel' => [
                'attributes' => [
                    'class' => 'form-check-label',
                ],
            ],

            'fieldInput' => [
                'resetClass' => true,

                'attributes' => [
                    'class' => 'form-check-input',
                ],
            ],
        ],

        'checkboxes' => [
            'fieldOption' => [
                'attributes' => [
                    'class' => 'form-check',
                ],
            ],

            'fieldOptionLabel' => [
                'attributes' => [
                    'class' => 'form-check-label',
                ],
            ],

            'fieldInput' => [
                'resetClass' => true,

                'attributes' => [
                    'class' => 'form-check-input',
                ],
            ],
        ],

        'dropdown' => [
            'fieldInput' => [
                'resetClass' => true,

                'attributes' => [
                    'class' => 'form-select',
                ],
            ],
        ],

        'hiddenField' => [
            'field' => [
                'resetClass' => true,

                'attributes' => [
                    'class' => 'd-none',
                ],
            ],
        ],

        'radioButtons' => [
            'fieldOption' => [
                'attributes' => [
                    'class' => 'form-check',
                ],
            ],

            'fieldOptionLabel' => [
                'attributes' => [
                    'class' => 'form-check-label',
                ],
            ],

            'fieldInput' => [
                'resetClass' => true,

                'attributes' => [
                    'class' => 'form-check-input',
                ],
            ],
        ],

        'recipients' => [
            'field' => [
                'attributes' => [
                    'class' => [
                        "{{ field.getIsHidden() ? 'd-none' : false }}",
                    ],
                ],
            ],
        ],

        'repeater' => [
            'nestedFieldWrapper' => [
                'attributes' => [
                    'class' => 'position-relative mb-3',
                ],
            ],

            'fieldRemoveButton' => [
                'attributes' => [
                    'class' => 'position-absolute top-0 end-0 mt-1 me-1',
                ],
            ],
        ],

        'signature' => [
            'fieldInputContainer' => [
                'attributes' => [
                    'class' => 'position-relative',
                ],
            ],

            'fieldCanvas' => [
                'attributes' => [
                    'class' => 'w-100 border',
                    'style' => 'background-color => #e9ecef;',
                ],
            ],

            'fieldRemoveButton' => [
                'attributes' => [
                    'class' => 'position-absolute top-0 end-0 mt-1 me-1',
                ],
            ],
        ],

        'table' => [
            'fieldTable' => [
                'attributes' => [
                    'class' => 'table',
                ],
            ],
        ],
    ],
];
