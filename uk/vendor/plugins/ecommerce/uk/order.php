<?php

return [
    'statuses' => [
        'pending' => 'Очікування',
        'processing' => 'Обробка',
        'completed' => 'Завершено',
        'canceled' => 'Скасовано',
        'partial_returned' => 'Часткове повернення',
        'returned' => 'Повернено',
    ],
    'return_statuses' => [
        'pending' => 'Очікування',
        'processing' => 'Обробка',
        'completed' => 'Завершено',
        'canceled' => 'Скасовано',
    ],
    'menu' => 'Замовлення',
    'create' => 'Створити замовлення',
    'cancel_error' => 'Замовлення доставляється або не завершено',
    'cancel_success' => 'Замовлення успішно скасовано',
    'return_error' => 'Замовлення доставляється або не завершено',
    'return_success' => 'Запит на повернення продукту(ів) успішно прийнято!',
    'incomplete_order' => 'Незавершені замовлення',
    'order_id' => 'ID замовлення',
    'product_id' => 'ID продукту',
    'customer_label' => 'Клієнт',
    'tax_amount' => 'Сума податку',
    'shipping_amount' => 'Сума доставки',
    'payment_method' => 'Метод оплати',
    'payment_status_label' => 'Статус оплати',
    'manage_orders' => 'Управління замовленнями',
    'order_intro_description' => 'Коли ваш магазин отримує замовлення, це місце, де ви будете обробляти та відстежувати ці замовлення.',
    'create_new_order' => 'Створити нове замовлення',
    'manage_incomplete_orders' => 'Управління незавершеними замовленнями',
    'incomplete_orders_intro_description' => 'Незавершене замовлення - це замовлення, створене, коли клієнт додає продукт до кошика, заповнює інформацію про покупку, але не завершує процес оформлення замовлення.',
    'invoice_for_order' => 'Рахунок-фактура за замовленням',
    'created' => 'Створено',
    'invoice' => 'Рахунок-фактура',
    'return' => 'Запит на повернення замовлення',
    'restock_products' => 'Повернути на склад :count продукт(ів)?',
    'is_return' => 'Повернення',
    'total_refund_amount' => 'Загальна сума повернення',
    'total_amount_can_be_refunded' => 'Загальна сума, яку можна повернути',
    'refund_reason' => 'Причина повернення',
    'products' => 'продукт(и)',
    'default' => 'За замовчуванням',
    'system' => 'Система',
    'new_order_from' => 'Нове замовлення :order_id від :customer',
    'confirmation_email_was_sent_to_customer' => 'Підтверджувальний лист було надіслано клієнту',
    'create_order_from_payment_page' => 'Замовлення створено зі сторінки оформлення замовлення',
    'create_order_from_admin_page' => 'Замовлення створено зі сторінки адміністратора',
    'order_was_verified_by' => 'Замовлення було перевірено користувачем %user_name%',
    'new_order' => 'Нове замовлення :order_id',
    'payment_was_confirmed_by' => 'Оплата була підтверджена (сума :money) користувачем %user_name%',
    'edit_order' => 'Редагувати замовлення :code',
    'confirm_order_success' => 'Замовлення успішно підтверджено!',
    'error_when_sending_email' => 'Виникла помилка під час надсилання електронного листа',
    'sent_confirmation_email_success' => 'Підтверджувальний лист успішно надіслано!',
    'order_was_sent_to_shipping_team' => 'Замовлення було надіслано до команди доставки',
    'by_username' => 'користувачем %user_name%',
    'shipping_was_created_from' => 'Доставка була створена зі замовлення %order_id%',
    'shipping_was_canceled_success' => 'Доставка успішно скасована!',
    'shipping_was_canceled_by' => 'Доставка була скасована користувачем %user_name%',
    'update_shipping_address_success' => 'Адресу доставки успішно оновлено!',
    'order_was_canceled_by' => 'Замовлення було скасовано користувачем %user_name%',
    'order_was_returned_by' => 'Замовлення було повернено користувачем %user_name%',
    'confirm_payment_success' => 'Оплата успішно підтверджена!',
    'refund_amount_invalid' => 'Сума повернення повинна бути меншою або рівною :price',
    'number_of_products_invalid' => 'Кількість продуктів для повернення недійсна!',
    'cannot_found_payment_for_this_order' => 'Не знайдено оплату для цього замовлення!',
    'refund_success_with_price' => 'Повернення успішне :price',
    'refund_success' => 'Повернення успішно!',
    'order_is_not_existed' => 'Замовлення не існує!',
    'reorder' => 'Повторне замовлення',
    'sent_email_incomplete_order_success' => 'Нагадувальний лист про незавершене замовлення успішно надіслано!',
    'applied_coupon_success' => 'Купон ":code" успішно застосовано!',
    'new_order_notice' => 'У вас <span class="bold">:count</span> нове(і) замовлення(я)',
    'view_all' => 'Переглянути всі',
    'cancel_order' => 'Скасувати замовлення',
    'order_canceled' => 'Замовлення скасовано',
    'order_was_canceled_at' => 'Замовлення було скасовано о',
    'return_order' => 'Повернути замовлення',
    'order_returned' => 'Замовлення повернено',
    'order_was_returned_at' => 'Замовлення було повернено о',
    'completed' => 'Завершено',
    'uncompleted' => 'Не завершено',
    'sku' => 'SKU',
    'warehouse' => 'Склад',
    'sub_amount' => 'Проміжна сума',
    'coupon_code' => 'Купонний код: ":code"',
    'shipping_fee' => 'Вартість доставки',
    'tax' => 'Податок',
    'refunded_amount' => 'Сума повернення',
    'amount_received' => 'Фактично отримана сума',
    'download_invoice' => 'Завантажити рахунок-фактуру',
    'payment_proof' => 'Доказ оплати',
    'print_invoice' => 'Друкувати рахунок-фактуру',
    'add_note' => 'Додати примітку...',
    'order_was_confirmed' => 'Замовлення підтверджено',
    'confirm_order' => 'Підтвердити замовлення',
    'confirm' => 'Підтвердити',
    'order_was_canceled' => 'Замовлення скасовано',
    'pending_payment' => 'Очікує оплату',
    'payment_was_accepted' => 'Оплата :money прийнята',
    'payment_was_refunded' => 'Оплату повернено',
    'confirm_payment' => 'Підтвердити оплату',
    'refund' => 'Повернення',
    'all_products_are_not_delivered' => 'Всі продукти не доставлені',
    'delivery' => 'Доставка',
    'history' => 'Історія',
    'order_number' => 'Номер замовлення',
    'from' => 'від',
    'status' => 'Статус',
    'successfully' => 'Успішно',
    'transaction_type' => 'Тип транзакції',
    'staff' => 'Персонал',
    'refund_date' => 'Дата повернення',
    'n_a' => 'Н/Д',
    'payment_date' => 'Дата оплати',
    'payment_gateway' => 'Платіжний шлюз',
    'transaction_amount' => 'Сума транзакції',
    'resend' => 'Переслати',
    'default_store' => 'Магазин за замовчуванням',
    'update_address' => 'Оновити адресу',
    'have_an_account_already' => 'Вже є обліковий запис',
    'dont_have_an_account_yet' => 'Ще не маєте облікового запису',
    'mark_payment_as_confirmed' => 'Позначити <span>:method</span> як підтверджену',
    'resend_order_confirmation' => 'Переслати підтвердження замовлення',
    'resend_order_confirmation_description' => 'Підтверджувальний лист буде надіслано на <strong>:email</strong>?',
    'send' => 'Надіслати',
    'update' => 'Оновити',
    'cancel_shipping_confirmation' => 'Скасувати підтвердження доставки?',
    'cancel_shipping_confirmation_description' => 'Скасувати підтвердження доставки?',
    'cancel_order_confirmation' => 'Скасувати підтвердження замовлення?',
    'cancel_order_confirmation_description' => 'Ви впевнені, що хочете скасувати це замовлення? Ця дія не може бути скасована',
    'return_order_confirmation' => 'Підтвердження повернення замовлення?',
    'return_order_confirmation_description' => 'Ви впевнені, що хочете повернути це замовлення? Ця дія не може бути скасована',
    'confirm_payment_confirmation_description' => 'Оброблено за допомогою <strong>:method</strong>. Ви отримали оплату поза системою? Ця оплата не буде збережена в системі та не може бути повернена',
    'save_note' => 'Зберегти примітку',
    'order_note' => 'Примітка до замовлення',
    'order_note_placeholder' => 'Примітка про замовлення, наприклад: час або інструкція з доставки.',
    'order_amount' => 'Сума замовлення',
    'additional_information' => 'Додаткова інформація',
    'notice_about_incomplete_order' => 'Повідомлення про незавершене замовлення',
    'notice_about_incomplete_order_description' => 'Нагадувальний лист про незавершене замовлення буде надіслано на <strong>:email</strong>?',
    'incomplete_order_description_1' => 'Незавершене замовлення - це коли потенційний клієнт додає товари до кошика, проходить до сторінки оплати, але не завершує транзакцію.',
    'incomplete_order_description_2' => 'Якщо ви зв\'язалися з клієнтами, і вони хочуть продовжити покупку, ви можете допомогти їм завершити замовлення, перейшовши за посиланням:',
    'send_an_email_to_recover_this_order' => 'Надіслати клієнту електронного листа для відновлення цього замовлення',
    'see_maps' => 'Подивитися на карті',
    'one_or_more_products_dont_have_enough_quantity' => 'Одного або більше продуктів недостатньо на складі!',
    'cannot_send_order_recover_to_mail' => 'Електронна пошта не знайдена, тому неможливо надіслати лист для відновлення замовлення клієнту.',
    'payment_info' => 'Інформація про оплату',
    'payment_method_refund_automatic' => 'Вашому клієнту буде автоматично повернуто кошти за допомогою :method.',
    'order' => 'Замовлення',
    'order_information' => 'Інформація про замовлення',
    'create_a_new_product' => 'Створити новий продукт',
    'out_of_stock' => 'Немає в наявності',
    'products_available' => 'продукт(и) доступний(і)',
    'no_products_found' => 'Продуктів не знайдено!',
    'note' => 'Примітка',
    'note_for_order' => 'Примітка до замовлення...',
    'amount' => 'Сума',
    'add_discount' => 'Додати знижку',
    'discount' => 'Знижка',
    'add_shipping_fee' => 'Додати вартість доставки',
    'shipping' => 'Доставка',
    'total_amount' => 'Загальна сума',
    'confirm_payment_and_create_order' => 'Підтвердити оплату та створити замовлення',
    'paid' => 'Оплачено',
    'pay_later' => 'Оплатити пізніше',
    'customer_information' => 'Інформація про клієнта',
    'create_new_customer' => 'Створити нового клієнта',
    'no_customer_found' => 'Клієнтів не знайдено!',
    'customer' => 'Клієнт',
    'orders' => 'замовлення(я)',
    'shipping_address' => 'Адреса доставки',
    'shipping_info' => 'Інформація про доставку',
    'billing_address' => 'Адреса для виставлення рахунку',
    'see_on_maps' => 'Переглянути на карті',
    'name' => 'Ім\'я',
    'price' => 'Ціна',
    'product_name' => 'Назва продукту',
    'total' => 'Всього',
    'action' => 'Дія',
    'add_product' => 'Додати продукт',
    'enter_free_text' => 'Введіть довільний текст',
    'promotion_discount_amount' => 'Сума знижки за акцією',
    'add' => 'Додати',
    'store' => 'Магазин',
    'please_choose_product_option' => 'Будь ласка, виберіть опцію продукту',
    'sku_optional' => 'SKU (необов\'язково)',
    'with_storehouse_management' => 'З управлінням складом?',
    'quantity' => 'Кількість',
    'allow_customer_checkout_when_this_product_out_of_stock' => 'Дозволити клієнту оформити замовлення, коли цього продукту немає в наявності?',
    'address' => 'Адреса',
    'phone' => 'Телефон',
    'country' => 'Країна',
    'state' => 'Штат/Область',
    'city' => 'Місто',
    'zip_code' => 'Поштовий індекс',
    'discount_based_on' => 'Знижка на основі',
    'or_coupon_code' => 'Або купонний код',
    'description' => 'Опис',
    'how_to_select_configured_shipping' => 'Як вибрати налаштовану доставку?',
    'please_add_customer_information_with_the_complete_shipping_address_to_see_the_configured_shipping_rates' => 'Будь ласка, додайте інформацію про клієнта з повною адресою доставки, щоб побачити налаштовані тарифи на доставку',
    'please_products_and_customer_address_to_see_the_shipping_rates' => 'Будь ласка, додайте продукти та інформацію про клієнта з повною адресою доставки, щоб побачити налаштовані тарифи на доставку',
    'shipping_method_not_found' => 'Метод доставки не знайдено',
    'free_shipping' => 'Безкоштовна доставка',
    'custom' => 'Користувацький',
    'email' => 'Електронна пошта',
    'create_order' => 'Створити замовлення',
    'close' => 'Закрити',
    'confirm_payment_title' => 'Confirm payment is :status for this order',
    'confirm_payment_description' => 'Payment status of the order is :status. Once the order has been created, you cannot change the payment method or status',
    'select_payment_method' => 'Виберіть метод оплати',
    'cash_on_delivery_cod' => 'Оплата при доставці (COD)',
    'bank_transfer' => 'Банківський переказ',
    'paid_amount' => 'Оплачена сума',
    'update_email' => 'Оновити електронну пошту',
    'save' => 'Зберегти',
    'cancel' => 'Скасувати',
    'create_a_new_order' => 'Створити нове замовлення',
    'search_or_create_new_product' => 'Знайти або створити новий продукт',
    'search_or_create_new_customer' => 'Знайти або створити нового клієнта',
    'discount_description' => 'Опис знижки',
    'cant_select_out_of_stock_product' => 'Неможливо вибрати продукт, якого немає в наявності!',
    'referral' => 'Рефераль',
    'return_order_unique' => 'Той самий :attribute вже існує в попередньому запиті на повернення.',
    'total_return_amount' => 'Загальна сума повернення',
    'change_return_order_status' => 'Змінити статус повернення замовлення',
    'return_order_approve' => 'Затвердити',
    'return_order_reject' => 'Відхилити',
    'return_reason' => 'Причина повернення',
    'order_return_moderation' => [
        'approve_button' => 'Затвердити',
        'reject_button' => 'Відхилити',
        'approve_confirmation_title' => 'Затвердити повернення замовлення',
        'approve_confirmation_description' => 'Після затвердження цього повернення замовлення, статус буде змінено на "обробка", і клієнт отримає сповіщення. Ви впевнені, що хочете затвердити це повернення замовлення?',
        'reject_confirmation_title' => 'Відхилити повернення замовлення',
        'reject_confirmation_description' => 'Після відхилення цього повернення замовлення, статус буде змінено на "скасовано", і клієнт отримає сповіщення. Ви впевнені, що хочете відхилити це повернення замовлення?',
        'mark_as_completed_button' => 'Позначити як завершене',
        'mark_as_completed_confirmation_title' => 'Позначити повернення замовлення як завершене',
        'mark_as_completed_confirmation_description' => 'Після позначення цього повернення замовлення як завершене, статус буде змінено на "завершено", і клієнт отримає сповіщення. Ви впевнені, що хочете позначити це повернення замовлення як завершене?',
    ],
    'order_return_action' => [
        'created' => 'Створено',
        'approved' => 'Затверджено',
        'rejected' => 'Відхилено',
        'mark_as_completed' => 'Позначити як завершене',
    ],
    'referral_data' => [
        'ip' => 'IP',
        'landing_domain' => 'Домен посадкової сторінки',
        'landing_page' => 'Посадкова сторінка',
        'landing_params' => 'Параметри посадкової сторінки',
        'gclid' => 'Gclid',
        'fclid' => 'Fclid',
        'utm_source' => 'UTM джерело',
        'utm_campaign' => 'UTM кампанія',
        'utm_medium' => 'UTM медіа',
        'utm_term' => 'UTM термін',
        'utm_content' => 'UTM контент',
        'referral' => 'Рефераль',
        'referrer_url' => 'Реферальний URL',
        'referrer_domain' => 'Реферальний домен',
    ],
    'order_address_types' => [
        'shipping_address' => 'Адреса доставки',
        'billing_address' => 'Адреса для виставлення рахунку',
    ],
    'order_return_reasons' => [
        'damaged' => 'Пошкоджений продукт',
        'defective' => 'Дефектний',
        'incorrect_item' => 'Неправильний товар',
        'arrived_late' => 'Прибув із запізненням',
        'not_as_described' => 'Не відповідає опису',
        'no_longer_want' => 'Більше не потрібно',
        'other' => 'Інше',
    ],
    'order_return_reason' => 'Причина повернення',
    'notices' => [
        'update_return_order_status_error' => 'Неможливо оновити статус повернення замовлення! Можливо, статус повернення замовлення недійсний.',
        'update_return_order_status_success' => 'Статус повернення замовлення успішно оновлено!',
    ],
    'order_return' => 'Повернення замовлень',
    'edit_order_return' => 'Редагувати повернення замовлення :code',
    'order_return_items_count' => 'Продукт(и)',
    'new_order_notifications' => [
        'new_order' => 'Нове замовлення',
        'view' => 'Переглянути',
        'description' => ':customer замовив :quantity :product',
    ],
    'confirm_payment_notifications' => [
        'confirm_payment' => 'Підтвердити оплату',
        'description' => 'Оплата замовлення :order була підтверджена (сума :amount) користувачем :by',
    ],
    'update_shipping_status_notifications' => [
        'update_shipping_status' => 'Оновити статус доставки',
        'description' => 'Замовлення :order змінив статус доставки :description',
    ],
    'cancel_order_notifications' => [
        'cancel_order' => 'Скасувати замовлення',
        'description' => 'Замовлення :order було скасовано користувачем :customer',
    ],
    'return_order_notifications' => [
        'return_order' => 'Повернення замовлення',
        'description' => ':customer запросив повернення продукту(ів)',
    ],
    'order_completed_notifications' => [
        'order_completed' => 'Замовлення завершено',
        'description' => 'Замовлення :order було завершено',
    ],
    'tax_info' => [
        'name' => 'Податкова інформація',
        'update' => 'Оновити податкову інформацію',
        'update_success' => 'Податкову інформацію успішно оновлено!',
        'company_name' => 'Назва компанії',
        'company_address' => 'Адреса компанії',
        'company_tax_code' => 'Податковий код компанії',
        'company_email' => 'Електронна пошта компанії',
    ],
    'mark_as_completed' => [
        'name' => 'Позначити як завершене',
        'modal_title' => 'Позначити замовлення як завершене',
        'modal_description' => 'Ви впевнені, що хочете позначити це замовлення як завершене? Це змінить статус замовлення на завершене та не може бути скасовано.',
        'success' => 'Замовлення успішно позначено як завершене!',
        'history' => 'Замовлення позначено як завершене користувачем :admin о :time',
    ],
    'generate_invoice' => 'Створити рахунок-фактуру',
    'generated_invoice_successfully' => 'Рахунок-фактура успішно створена!',
    'order_cannot_be_canceled' => 'Замовлення обробляється або завершено, його не можна скасувати!',
    'cancellation_reason' => 'Причина: :reason',
    'order_cancellation_reason' => 'Причина скасування замовлення',
    'cancellation_reasons' => [
        'change-mind' => 'Передумав або більше не потрібен продукт',
        'found-better-price' => 'Знайшов кращу ціну в іншому місці',
        'out-of-stock' => 'Продукт відсутній на складі',
        'shipping-delays' => 'Затримки доставки',
        'incorrect-address' => 'Неправильна або неповна адреса доставки',
        'customer-requested' => 'Клієнт запитав скасування',
        'not-as-described' => 'Продукт не відповідає опису',
        'payment-issues' => 'Проблеми з оплатою або відхилена транзакція',
        'unforeseen-circumstances' => 'Непередбачені обставини або надзвичайні ситуації',
        'technical-issues' => 'Технічні проблеми під час процесу оформлення замовлення',
        'other' => 'Інше',
    ],
    'requires_products_to_create_order' => 'Будь ласка, виберіть принаймні один продукт, щоб створити замовлення',
    'transaction_id' => 'ID транзакції',
    'incomplete_order_transaction_id_placeholder' => 'Ви можете залишити це поле порожнім, якщо спосіб оплати – COD або банківський переказ',
    'digital_product_downloads' => [
        'title' => 'Завантаження цифрових продуктів',
        'download_count' => ':count download(s)',
        'first_download' => 'First download at :time',
        'not_downloaded_yet' => 'Ще не завантажено',
    ],
    'select_one' => 'Оберіть одне',
    'confirm_payment_is_paid_for_this_order' => 'Підтвердити, що оплата за це замовлення була здійснена',
    'payment_status_of_the_order_is_paid_once_the_order_has_been_created_you_cannot_change_the_payment_method_or_status' => 'Статус оплати замовлення: оплачено. Після створення замовлення ви не зможете змінити метод або статус оплати',
    'confirm_that_payment_for_this_order_will_be_paid_later' => 'Підтвердити, що оплата за це замовлення буде здійснена пізніше',
    'payment_status_of_the_order_is_pending_once_the_order_has_been_created_you_cannot_change_the_payment_method_or_status' => 'Статус оплати замовлення: очікує оплату. Після створення замовлення ви не зможете змінити метод або статус оплати',
    'pending_amount' => 'Очікувана сума',
];
