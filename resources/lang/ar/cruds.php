<?php

return [
    'userManagement' => [
        'title'          => 'إدارة المستخدمين',
        'title_singular' => 'إدارة المستخدمين',
    ],
    'permission' => [
        'title'          => 'الصلاحيات',
        'title_singular' => 'الصلاحية',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'المجموعات',
        'title_singular' => 'مجموعة',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'المستخدمين',
        'title_singular' => 'مستخدم',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'expenseManagement' => [
        'title'          => 'المصاريف',
        'title_singular' => 'المصاريف',
    ],
    'expenseCategory' => [
        'title'          => 'تصنيف النفقات',
        'title_singular' => 'تصنيف المصاريف',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'incomeCategory' => [
        'title'          => 'تصنيفات الإيراد',
        'title_singular' => 'الإيراد حسب التصنيف',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'expense' => [
        'title'          => 'المصروفات',
        'title_singular' => 'المصروف',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'expense_category'        => 'Expense Category',
            'expense_category_helper' => ' ',
            'entry_date'              => 'Entry Date',
            'entry_date_helper'       => ' ',
            'amount'                  => 'Amount',
            'amount_helper'           => ' ',
            'description'             => 'Description',
            'description_helper'      => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated At',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted At',
            'deleted_at_helper'       => ' ',
        ],
    ],
    'income' => [
        'title'          => 'الإيرادات',
        'title_singular' => 'الإيرادات',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'income_category'        => 'Income Category',
            'income_category_helper' => ' ',
            'entry_date'             => 'Entry Date',
            'entry_date_helper'      => ' ',
            'description'            => 'Description',
            'description_helper'     => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated At',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted At',
            'deleted_at_helper'      => ' ',
            'client'                 => 'ايرادات العميل',
            'client_helper'          => ' ',
        ],
    ],
    'expenseReport' => [
        'title'          => 'تقرير شهري',
        'title_singular' => 'تقرير شهري',
        'reports'        => [
            'title'             => 'التقارير',
            'title_singular'    => 'تقرير',
            'incomeReport'      => 'تقرير الإيرادات',
            'incomeByCategory'  => 'الإيراد حسب التصنيف',
            'expenseByCategory' => 'المصروف حسب التصنيف',
            'income'            => 'الإيرادات',
            'expense'           => 'المصروف',
            'profit'            => 'ربح',
        ],
    ],
    'course' => [
        'title'          => 'الكورس',
        'title_singular' => 'الكورس',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'price'                => 'السعر',
            'price_helper'         => ' ',
            'duration'             => 'مدة الكورس',
            'duration_helper'      => ' ',
            'course_days'          => 'عدد ايام الكورس',
            'course_days_helper'   => ' ',
            'course_type'          => 'نوع الكورس',
            'course_type_helper'   => ' ',
            'training_type'        => 'نوع التدريب',
            'training_type_helper' => ' ',
        ],
    ],
    'client' => [
        'title'          => 'العملاء',
        'title_singular' => 'العملاء',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'written_at'               => 'تحرر في',
            'written_at_helper'        => ' ',
            'name'                     => 'الأسم',
            'name_helper'              => ' ',
            'address'                  => 'العنوان',
            'address_helper'           => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'course_required'          => 'الكورس المطلوب',
            'course_required_helper'   => ' ',
            'required_training'        => 'التدريب المطلوب',
            'required_training_helper' => ' ',
            'number_of_days'           => 'عدد أيام الكورس',
            'number_of_days_helper'    => ' ',
            'amount_paid'              => 'المبلغ المدفوع',
            'amount_paid_helper'       => ' ',
            'remainig_amount'          => 'المبلغ المتبقي',
            'remainig_amount_helper'   => ' ',
            'amount_total'             => 'المبلغ الإجمالي',
            'amount_total_helper'      => ' ',
            'learn_before'             => 'هل سبق التعليم',
            'learn_before_helper'      => ' ',
            'where'                    => 'أين',
            'where_helper'             => ' ',
            'how_you_know_us'          => 'ماهي طريقة معرفتك بنا؟',
            'how_you_know_us_helper'   => ' ',
            'contract'                 => 'رقم العقد',
            'contract_helper'          => ' ',
            'telephone'                => 'رقم التليفون',
            'telephone_helper'         => ' ',
        ],
    ],
    'employee' => [
        'title'          => 'الموظفين',
        'title_singular' => 'الموظفين',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => ' ',
            'name'                       => 'الأسم',
            'name_helper'                => ' ',
            'email'                      => 'الايميل',
            'email_helper'               => ' ',
            'phone'                      => 'رقم التليفون',
            'phone_helper'               => ' ',
            'working_name'               => 'المسمي_الوظيفي',
            'working_name_helper'        => ' ',
            'created_at'                 => 'Created at',
            'created_at_helper'          => ' ',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => ' ',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => ' ',
            'working_days'               => 'السبت',
            'working_days_helper'        => ' ',
            'working_days_1'             => 'الأحد',
            'working_days_1_helper'      => ' ',
            'working_days_2'             => 'الأثنين',
            'working_days_2_helper'      => ' ',
            'working_day_3'              => 'الثلاثاء',
            'working_day_3_helper'       => ' ',
            'working_days_4'             => 'الأربعاء',
            'working_days_4_helper'      => ' ',
            'working_days_5'             => 'الخميس',
            'working_days_5_helper'      => ' ',
            'from'                       => 'من الساعة',
            'from_helper'                => ' ',
            'to'                         => 'حتي الساعة',
            'to_helper'                  => ' ',
            'from_1'                     => 'من الساعة',
            'from_1_helper'              => ' ',
            'to_1'                       => 'حتي الساعة',
            'to_1_helper'                => ' ',
            'from_2'                     => 'من الساعة',
            'from_2_helper'              => ' ',
            'to_3'                       => 'حتي الساعة',
            'to_3_helper'                => ' ',
            'from_3'                     => 'من الساعة',
            'from_3_helper'              => ' ',
            'to_4'                       => 'حتي الساعة',
            'to_4_helper'                => ' ',
            'from_4'                     => 'من الساعة',
            'from_4_helper'              => ' ',
            'to_5'                       => 'حتي الساعة',
            'to_5_helper'                => ' ',
            'from_5'                     => 'من الساعة',
            'from_5_helper'              => ' ',
            'to_6'                       => 'حتي الساعة',
            'to_6_helper'                => ' ',
            'salary'                     => 'المرتب',
            'salary_helper'              => ' ',
            'contract_percentage'        => 'نسبة العقد',
            'contract_percentage_helper' => 'يوضع صفر في حالة عدم وجود نسبة',
            'commission'                 => 'الزيادة في المرتب',
            'commission_helper'          => ' ',
        ],
    ],
    'appointment' => [
        'title'          => 'المواعيد',
        'title_singular' => 'المواعيد',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'client_name'           => 'أسم العميل',
            'client_name_helper'    => ' ',
            'course'                => 'أسم الكورس',
            'course_helper'         => ' ',
            'employee'              => 'أسم المدرب',
            'employee_helper'       => ' ',
            'start_time'            => 'وقت البدأ',
            'start_time_helper'     => ' ',
            'end_time'              => 'وقت الإنتهاء',
            'end_time_helper'       => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'session_number'        => 'رقم الحصة',
            'session_number_helper' => ' ',
            'session_type'          => '(لكل حصة)نوع التدريب',
            'session_type_helper'   => ' ',
            'session_date'          => 'تاريخ الحصة',
            'session_date_helper'   => ' ',
        ],
    ],
    'reservation' => [
        'title'          => 'الحجوزات',
        'title_singular' => 'الحجوزات',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'client'            => 'عميل',
            'client_helper'     => ' ',
            'course'            => 'الكورس',
            'course_helper'     => ' ',
            'employee'          => 'الموظف',
            'employee_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contactManagement' => [
        'title'          => 'Contact management',
        'title_singular' => 'Contact management',
    ],
    'contactCompany' => [
        'title'          => 'Companies',
        'title_singular' => 'Company',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'company_name'           => 'Company name',
            'company_name_helper'    => ' ',
            'company_address'        => 'Address',
            'company_address_helper' => ' ',
            'company_website'        => 'Website',
            'company_website_helper' => ' ',
            'company_email'          => 'Email',
            'company_email_helper'   => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated At',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted At',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'contactContact' => [
        'title'          => 'Contacts',
        'title_singular' => 'Contact',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'company'                   => 'Company',
            'company_helper'            => ' ',
            'contact_first_name'        => 'First name',
            'contact_first_name_helper' => ' ',
            'contact_last_name'         => 'Last name',
            'contact_last_name_helper'  => ' ',
            'contact_phone_1'           => 'Phone 1',
            'contact_phone_1_helper'    => ' ',
            'contact_phone_2'           => 'Phone 2',
            'contact_phone_2_helper'    => ' ',
            'contact_email'             => 'Email',
            'contact_email_helper'      => ' ',
            'contact_skype'             => 'Skype',
            'contact_skype_helper'      => ' ',
            'contact_address'           => 'Address',
            'contact_address_helper'    => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated At',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted At',
            'deleted_at_helper'         => ' ',
        ],
    ],
    'asset' => [
        'title'          => 'رأس المال',
        'title_singular' => 'رأس المال',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'التوصيف',
            'name_helper'       => ' ',
            'price'             => 'السعر',
            'price_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];
