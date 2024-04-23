<?php

return [
    'themeConfig' => [
        'resetClasses' => true,

        'formTitle' => [
            'attributes' => [
                'class' => 'text-lg leading-6 font-medium text-gray-900',
            ],
        ],

        'alertError' => [
            'attributes' => [
                'class' => 'rounded-md bg-red-50 border border-red-200 text-sm text-red-700 p-4 mb-4',
            ],
        ],

        'alertSuccess' => [
            'attributes' => [
                'class' => 'rounded-md bg-green-50 border border-green-200 text-sm text-green-700 p-4 mb-4',
            ],
        ],

        'buttonWrapper' => [
            'attributes' => [
                'class' => [
                    'flex justify-start -mx-2',
                    "{{ buttonsPosition == 'right' ? 'justify-end' }}",
                    "{{ buttonsPosition == 'center' ? 'justify-center' }}",
                    "{{ buttonsPosition == 'left-right' ? 'justify-between' }}",
                    "{{ buttonsPosition == 'right-save-left' ? 'justify-start flex-row-reverse' }}",
                    "{{ buttonsPosition == 'center-save-left' ? 'justify-center flex-row-reverse' }}",
                    "{{ buttonsPosition == 'center-save-right' ? 'justify-center' }}",
                    "{{ buttonsPosition == 'save-right' ? 'justify-between' }}",
                    "{{ buttonsPosition == 'save-left' ? 'justify-between flex-row-reverse' }}",
                ],
            ],
        ],

        'buttonContainer' => [
            'attributes' => [
                'class' => 'flex justify-start',
            ],
        ],

        'saveButton' => [
            'attributes' => [
                'class' => [
                    'inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-indigo-600 hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500',
                    'mx-2',
                ],
            ],
        ],

        'backButton' => [
            'attributes' => [
                'class' => [
                    'inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-slate-700 bg-slate-200 hover:bg-slate-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-500',
                    'mx-2',
                ],
            ],
        ],

        'submitButton' => [
            'attributes' => [
                'class' => [
                    'inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500',
                    'mx-2 order-10',
                ],
            ],
        ],

        'page' => [
            'attributes' => [
                'class' => [
                    "{{ form.hasMultiplePages() and page.id != currentPage.id ? 'hidden' : false }}",
                ],
            ],
        ],

        'pageTabs' => [
            'attributes' => [
                'class' => 'border-b border-gray-200 -mb-px flex space-x-8 mb-6',
            ],
        ],

        'pageTab' => [
            'attributes' => [
                'class' => 'py-4 px-1',
            ],
        ],

        'pageTabLink' => [
            'attributes' => [
                'class' => [
                    'whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm',
                    "{{ (page.id == currentPage.id) ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}",
                    "{{ page.getFieldErrors(submission) ? 'text-red-500' : false }}",
                ],
            ],
        ],

        'pageTitle' => [
            'attributes' => [
                'class' => 'text-lg leading-6 font-medium text-gray-900 mb-4',
            ],
        ],

        'progress' => [
            'attributes' => [
                'class' => 'flex h-[1.2rem] text-sm text-white bg-slate-200 mt-4',
            ],
        ],

        'progressContainer' => [
            'attributes' => [
                'class' => 'flex flex-col justify-center text-center font-medium bg-indigo-600',
            ],
        ],

        'subFieldRow' => [
            'attributes' => [
                'class' => 'flex flex-wrap -mx-4 mb-4 last:mb-0',
            ],
        ],

        'nestedFieldRows' => [
            'attributes' => [
                'class' => 'border py-4',
            ],
        ],

        'nestedFieldRow' => [
            'attributes' => [
                'class' => 'flex flex-wrap mb-4 last:mb-0',
            ],
        ],

        'row' => [
            'attributes' => [
                'class' => [
                    'flex flex-wrap -mx-4 mb-4',
                    "{{ not craft.formie.getVisibleFields(row) ? 'hidden' }}",
                ],
            ],
        ],

        'field' => [
            'attributes' => [
                'class' => 'px-4 flex-1',
            ],
        ],

        'fieldLabel' => [
            'attributes' => [
                'class' => 'mb-1 block text-sm font-medium text-gray-700',
            ],
        ],

        'fieldRequired' => [
            'attributes' => [
                'class' => 'text-red-500',
            ],
        ],

        'fieldInstructions' => [
            'attributes' => [
                'class' => 'mb-1 text-sm text-gray-500',
            ],
        ],

        'fieldInput' => [
            'attributes' => [
                'class' => [
                    'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md',
                    "{{ (submission.getErrors(field.handle) ?? null) ? 'border-red-300' }}",
                ],
            ],
        ],

        'fieldError' => [
            'attributes' => [
                'class' => 'text-red-500 text-sm mt-1',
            ],
        ],

        'fieldAddButton' => [
            'attributes' => [
                'class' => 'inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-slate-700 bg-slate-200 hover:bg-slate-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-500',
            ],
        ],

        'fieldRemoveButton' => [
            'attributes' => [
                'class' => 'inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-slate-700 bg-slate-200 hover:bg-slate-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-500',
            ],
        ],

        'fieldLimit' => [
            'attributes' => [
                'class' => 'mt-2 text-sm text-gray-500',
            ],
        ],

        'agree' => [
            'fieldOption' => [
                'attributes' => [
                    'class' => 'flex items-start mb-2',
                ],
            ],

            'fieldOptionLabel' => [
                'attributes' => [
                    'class' => 'ml-2 text-sm leading-4',
                ],
            ],

            'fieldInput' => [
                'resetClass' => true,

                'attributes' => [
                    'class' => 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded',
                ],
            ],
        ],

        'checkboxes' => [
            'fieldOption' => [
                'attributes' => [
                    'class' => [
                        "{{ field.layout == 'horizontal' ? 'inline-block mr-4' : 'flex items-start mb-2' }}",
                    ],
                ],
            ],

            'fieldOptionLabel' => [
                'attributes' => [
                    'class' => 'ml-2 text-sm leading-4',
                ],
            ],

            'fieldInput' => [
                'resetClass' => true,

                'attributes' => [
                    'class' => 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded',
                ],
            ],
        ],

        'dropdown' => [
            'fieldInput' => [
                'resetClass' => true,

                'attributes' => [
                    'class' => 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md',
                ],
            ],
        ],

        'fileUpload' => [
            'fieldInput' => [
                'resetClass' => true,

                'attributes' => [
                    'class' => 'block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-slate-200 file:text-slate-700 hover:file:bg-slate-300',
                ],
            ],
        ],

        'hiddenField' => [
            'field' => [
                'resetClass' => true,

                'attributes' => [
                    'class' => 'hidden',
                ],
            ],
        ],

        'radioButtons' => [
            'fieldOption' => [
                'attributes' => [
                    'class' => [
                        "{{ field.layout == 'horizontal' ? 'inline-block mr-4' : 'flex items-start mb-2' }}",
                    ],
                ],
            ],

            'fieldOptionLabel' => [
                'attributes' => [
                    'class' => 'ml-2 text-sm leading-4',
                ],
            ],

            'fieldInput' => [
                'resetClass' => true,

                'attributes' => [
                    'class' => 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300',
                ],
            ],
        ],

        'recipients' => [
            'field' => [
                'attributes' => [
                    'class' => [
                        "{{ field.getIsHidden() ? 'hidden' : false }}",
                    ],
                ],
            ],
        ],

        'repeater' => [
            'nestedField' => [
                'attributes' => [
                    'class' => 'relative',
                ],
            ],

            'nestedFieldWrapper' => [
                'attributes' => [
                    'class' => 'mb-4',
                ],
            ],

            'fieldRemoveButton' => [
                'attributes' => [
                    'class' => 'absolute top-0 right-0 m-1 inline-flex items-center px-2 py-1.5 border border-transparent text-xs font-medium rounded-md text-slate-700 bg-slate-200 hover:bg-slate-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-500',
                ],
            ],
        ],

        'signature' => [
            'fieldInputContainer' => [
                'attributes' => [
                    'class' => 'relative',
                ],
            ],

            'fieldCanvas' => [
                'attributes' => [
                    'class' => 'w-full h-[8rem] border bg-slate-100',
                ],
            ],

            'fieldRemoveButton' => [
                'attributes' => [
                    'class' => 'absolute top-0 right-0 m-1 inline-flex items-center px-2 py-1 border border-slate-300 text-xs font-medium rounded-md text-slate-700 bg-slate-200 hover:bg-slate-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-500',
                ],
            ],
        ],

        'table' => [
            'fieldTable' => [
                'attributes' => [
                    'class' => 'min-w-full divide-y divide-gray-300',
                ],
            ],

            'fieldTableHeaderColumn' => [
                'attributes' => [
                    'class' => 'px-3 py-3.5 text-left text-sm font-semibold text-gray-900',
                ],
            ],

            'fieldTableBody' => [
                'attributes' => [
                    'class' => 'divide-y divide-gray-200 bg-white',
                ],
            ],

            'fieldTableBodyColumn' => [
                'attributes' => [
                    'class' => 'whitespace-nowrap px-3 py-4 text-sm text-gray-500',
                ],
            ],
        ],
    ],
];
