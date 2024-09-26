<?php

return [
    'settings' => 'إعدادات',
    'name' => 'التجارة الإلكترونية',
    'phone' => 'هاتف',
    'email' => 'بريد إلكتروني',
    'country' => 'دولة',
    'state' => 'ولاية',
    'city' => 'مدينة',
    'address' => 'عنوان',
    'company' => 'شركة',
    'tax_id' => 'الرقم الضريبي',
    'store_address' => 'عنوان المتجر',
    'store_phone' => 'تخزين الهاتف',
    'order_id' => 'رقم التعريف الخاص بالطلب',
    'order_token' => 'رمز الطلب',
    'customer_name' => 'اسم الزبون',
    'customer_email' => 'البريد الإلكتروني للعميل',
    'customer_phone' => 'هاتف العميل',
    'customer_address' => 'عنوان العميل',
    'product_list' => 'قائمة المنتجات بالترتيب',
    'order_note' => 'ملاحظة الطلب',
    'payment_detail' => 'تفاصيل الدفع',
    'shipping_method' => 'طريقة الشحن',
    'payment_method' => 'طريقة الدفع او السداد',
    'select_state' => 'اختر ولايه...',
    'select_city' => 'اختر مدينة...',
    'theme_options' => [
        'name' => 'التجارة الإلكترونية',
        'description' => 'خيارات الموضوع للتجارة الإلكترونية',
        'number_products_per_page' => 'عدد المنتجات في كل صفحة',
        'number_of_cross_sale_product' => 'عدد منتجات البيع المتبادل في صفحة تفاصيل المنتج',
        'max_price_filter' => 'الحد الأقصى لسعر التصفية',
        'logo_in_the_checkout_page' => 'الشعار في صفحة الخروج (الافتراضي هو الشعار الرئيسي)',
        'logo_in_invoices' => 'Logo in invoices (Default is the main logo)',
        'slug_name' => 'عناوين URL للتجارة الإلكترونية',
        'slug_description' => 'تخصيص البزاقات المستخدمة لصفحات التجارة الإلكترونية. كن حذرًا عند التعديل لأنه قد يؤثر على تحسين محركات البحث وتجربة المستخدم. إذا حدث خطأ ما، يمكنك إعادة التعيين إلى الوضع الافتراضي عن طريق كتابة القيمة الافتراضية أو تركها فارغة.',
        'page_slug_name' => ':page page slug',
        'page_slug_description' => 'It will look like :slug when you access the page. Default value is :default.',
        'page_slug_already_exists' => 'The :slug page slug is already in use. Please choose another one.',
        'page_slugs' => [
            'login' => 'تسجيل الدخول',
            'register' => 'يسجل',
            'reset_password' => 'إعادة تعيين كلمة المرور',
            'product_listing' => 'قائمة المنتجات',
            'cart' => 'عربة التسوق',
            'checkout' => 'الدفع',
            'order_tracking' => 'تتبع الطلب',
            'wishlist' => 'قائمة الرغبات',
            'compare' => 'يقارن',
            'customer_overview' => 'نظرة عامة على العملاء',
            'customer_address' => 'عنوان العميل',
            'customer_change_password' => 'تغيير كلمة المرور للعميل',
            'customer_downloads' => 'تنزيلات العملاء',
            'customer_edit_account' => 'حساب تحرير العملاء',
            'customer_order_returns' => 'إرجاع طلب العميل',
            'customer_orders' => 'طلبات العملاء',
            'customer_product_reviews' => 'مراجعات العملاء للمنتج',
        ],
        'login_background_image' => 'صورة خلفية تسجيل الدخول',
        'register_background_image' => 'تسجيل صورة الخلفية',
        'term_and_privacy_policy_url' => 'الشروط وسياسة الخصوصية URL',
    ],
    'basic_settings' => 'الإعدادات الأساسية',
    'general_settings' => 'عام',
    'general_setting_description' => 'عرض وتحديث الإعدادات العامة الخاصة بك',
    'advanced_settings' => 'إعدادات متقدمة',
    'product_review_list' => 'قائمة مراجعة المنتجات',
    'forms' => [
        'duplicate' => 'ينسخ',
        'duplicate_success_message' => 'تم تكرار المنتج بنجاح!',
    ],
    'duplicate_modal' => 'منتج مكرر',
    'duplicate_modal_description' => 'هل أنت متأكد أنك تريد تكرار هذا المنتج؟',
    'wishlist' => 'قائمة الرغبات',
    'product' => 'منتج',
    'sort_order' => 'امر ترتيب',
    'order_link' => 'رابط تفاصيل الطلب',
    'payment_link' => 'رابط تفاصيل الدفع',
    'or' => 'أو',
    'update' => 'تحديث',
    'download_link' => 'رابط التحميل',
    'update_time' => 'حان الوقت للتحديث',
    'product_files' => 'ملفات المنتج',
    'setting' => [
        'email' => [
            'title' => 'E-commerce',
            'description' => 'Ecommerce email config',
            'order_confirm_subject' => 'Subject of order confirmation email',
            'order_confirm_subject_placeholder' => 'The subject of email confirmation send to the customer',
            'order_confirm_content' => 'Content of order confirmation email',
            'order_status_change_subject' => 'Subject of email when changing order\'s status',
            'order_status_change_subject_placeholder' => 'Subject of email when changing order\'s status send to customer',
            'order_status_change_content' => 'Content of email when changing order\'s status',
            'from_email' => 'Email from',
            'from_email_placeholder' => 'Email from address to display in mail. Ex: example@gmail.com',
        ],
        'title' => 'Basic information',
        'state' => 'State',
        'city' => 'City',
        'country' => 'Country',
        'select country' => 'Select a country...',
        'weight_unit_gram' => 'Gram (g)',
        'weight_unit_kilogram' => 'Kilogram (kg)',
        'weight_unit_lb' => 'Pound (lb)',
        'weight_unit_oz' => 'Ounce (oz)',
        'height_unit_cm' => 'Centimeter (cm)',
        'height_unit_m' => 'Meter (m)',
        'height_unit_inch' => 'Inch',
        'store_locator_title' => 'Store locators',
        'store_locator_description' => 'All the lists of your chains, main stores, branches, etc. The locations can be used to track sales and to help us configure tax rates to charge when selling products.',
        'phone' => 'Phone',
        'address' => 'Address',
        'is_primary' => 'Primary?',
        'add_new' => 'Add new',
        'or' => 'Or',
        'change_primary_store' => 'change default store locator',
        'other_settings' => 'Other settings',
        'other_settings_description' => 'Settings for cart, review...',
        'enable_cart' => 'Enable shopping cart?',
        'enable_tax' => 'Enable tax?',
        'display_product_price_including_taxes' => 'Display product price including taxes?',
        'enable_review' => 'Enable review?',
        'enable_quick_buy_button' => 'Enable quick buy button?',
        'quick_buy_target' => 'Quick buy target page?',
        'checkout_page' => 'Checkout page',
        'cart_page' => 'Cart page',
        'add_location' => 'Add location',
        'edit_location' => 'Edit location',
        'delete_location' => 'Delete location',
        'change_primary_location' => 'Change primary location',
        'delete_location_confirmation' => 'Are you sure you want to delete this location? This action cannot be undo.',
        'save_location' => 'Save location',
        'accept' => 'Accept',
        'select_country' => 'Select country',
        'zip_code_enabled' => 'Enable Zip Code?',
        'thousands_separator' => 'Thousands separator',
        'decimal_separator' => 'Decimal separator',
        'separator_period' => 'Period (.)',
        'separator_comma' => 'Comma (,)',
        'separator_space' => 'Space ( )',
        'available_countries' => 'Available countries',
        'all' => 'All',
        'verify_customer_email' => 'Verify customer\'s email?',
        'minimum_order_amount' => 'Minimum order amount to place an order (:currency).',
        'enable_guest_checkout' => 'Enable guest checkout?',
    ],
    'standard_and_format' => 'Standard & Format',
    'standard_and_format_description' => 'Standards and formats are used to calculate things like product prices, shipping weights, and order times.',
    'change_order_format' => 'Edit order code format (optional)',
    'change_order_format_description' => 'The default order code starts at: number. You can change the start or end string to create the order code you want, for example "DH-: number" or ": number-A"',
    'start_with' => 'Start with',
    'end_with' => 'End with',
    'order_will_be_shown' => 'Your order code will be shown',
    'weight_unit' => 'Unit of weight',
    'height_unit' => 'Unit length / height',
];
