<?php

return [
    'name' => 'Para Çekme',
    'edit' => 'Para çekme işlemini düzenle',
    'statuses' => [
        'pending' => 'Beklemede',
        'processing' => 'Processing',
        'completed' => 'Tamamlandı',
        'canceled' => 'İptal edildi',
        'refused' => 'Reddedildi',
    ],
    'amount' => 'Tutar',
    'customer' => 'Müşteri',
    'vendor' => 'Satıcı',
    'currency' => 'Para Birimi',
    'forms' => [
        'amount' => 'Tutar',
        'amount_placeholder' => 'Çekmek istediğiniz tutar',
        'fee' => 'Fee',
        'fee_helper' => 'Para çekerken bir ücret ödemek zorundasınız: :fee',
        'pending_status_helper' => 'Para çekme işlemini tamamlamak için lütfen durumu işlem tamamlandı olarak güncelleyin',
        'payment_channel' => 'Ödeme Kanalı',
        'payment_channel_placeholder' => 'Ödeme Kanalı',
        'transaction_id' => 'İşlem Kimliği',
        'transaction_id_placeholder' => 'İşlem Kimliği',
        'amount_with_balance' => 'Tutar (bakiye: :balance)',
    ],
    'new_withdrawal_request_notifications' => [
        'new_withdrawal_request' => 'Yeni para çekme talebi',
        'view' => 'Görüntüle',
        'description' => ':customer para çekme talebinde bulunmuştur',
    ],
   'invoice' => [
        'invoice_template_label' => 'Ödeme Faturası',
        'title' => 'Ödeme Faturası',
        'created_at' => 'Düzenlendi',
        'customer_name' => 'Fatura Adresi',
        'payment_method' => 'Ödeme Yöntemi',
        'earnings' => 'Kazançlar',
        'fee' => 'Çekme Ücreti',
        'total' => 'Toplam',
        'total_due' => 'Toplam Ödenecek Tutar',
        'notes' => 'Notlar',
        'payment_instructions' => 'Ödeme Talimatları',
        'bank_name' => 'Banka Adı',
        'bank_account_name' => 'Hesap Adı',
        'bank_account_number' => 'Hesap Numarası',
        'variables' => [
        'company_logo' => 'Şirket logosu',
        'company_name' => 'Şirket adı',
        'company_address' => 'Şirket adresi',
        'company_state' => 'Şirket eyaleti',
        'company_city' => 'Şirket şehri',
        'company_zipcode' => 'Şirket posta kodu',
        'company_phone' => 'Şirket telefonu',
        'company_email' => 'Şirket e-postası',
        'company_tax_id' => 'Şirket vergi kimliği',
        'withdrawal_id' => 'Çekme kimliği',
        'withdrawal_created_at' => 'Çekme oluşturma tarihi',
        'withdrawal_customer_name' => 'Müşteri adı',
        'withdrawal_payment_channel' => 'Ödeme kanalı',
        'withdrawal_amount' => 'Çekme tutarı',
        'withdrawal_fee' => 'Çekme ücreti',
        'withdrawal_fee_percentage' => 'Çekme ücreti yüzdesi',
        'withdrawal_status' => 'Çekme durumu',
        'withdrawal_description' => 'Çekme açıklaması',
        'withdrawal_bank_info_name' => 'Banka adı',
        'withdrawal_bank_info_number' => 'Banka hesap numarası',
        'withdrawal_bank_info_full_name' => 'Hesap sahibinin adı',
        ],
    ],
];