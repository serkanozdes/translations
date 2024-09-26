<?php

return [
    'name' => 'Kişiler',
    'contact_form' => 'İletişim Formu',
    'menu' => 'İletişim',
    'edit' => 'İletişimi gör',
    'tables' => [
        'phone' => 'Telefon',
        'email' => 'E-posta',
        'full_name' => 'Ad Soyad',
        'time' => 'Zaman',
        'address' => 'Adres',
        'subject' => 'Konu',
        'content' => 'İçerik',
    ],
    'contact_information' => 'İletişim bilgileri',
    'replies' => 'Yanıtlar',
    'email' => [
        'header' => 'E-posta',
        'title' => 'Sitenize yeni iletişim',
    ],
    'form' => [
        'name' => [
            'required' => 'İsim gereklidir',
        ],
        'email' => [
            'required' => 'E-posta gereklidir',
            'email' => 'E-posta adresi geçersiz',
        ],
        'content' => [
            'required' => 'İçerik gereklidir',
        ],
    ],
    'contact_sent_from' => 'Bu iletişim bilgileriyle gönder',
    'sender' => 'Gönderici',
    'sender_email' => 'E-posta',
    'sender_address' => 'Adres',
    'sender_phone' => 'Telefon',
    'message_content' => 'Mesaj içeriği',
    'sent_from' => 'E-posta gönderen',
    'form_name' => 'Ad',
    'form_email' => 'E-posta',
    'form_address' => 'Adres',
    'form_subject' => 'Konu',
    'form_phone' => 'Telefon',
    'form_message' => 'Mesaj',
    'form_content' => 'İçerik',
    'required_field' => 'Gerekli alan: (<span style="color: red">*</span>)',
    'send_btn' => 'Mesaj gönder',
    'new_msg_notice' => '<span class="bold">:count</span> Yeni Mesaj',
    'view_all' => 'Hepsini gör',
    'statuses' => [
        'read' => 'Okunmuş',
        'unread' => 'Okunmamış',
    ],
    'phone' => 'Telefon',
    'address' => 'Adres',
    'message' => 'Mesaj',
    'settings' => [
        'email' => [
            'title' => 'İletişim',
            'description' => 'İletişim e-posta konfigürasyonları',
            'templates' => [
                'notice_title' => 'Admine bildirim gönder',
                'notice_description' => 'Sistem yeni kişi aldığında yöneticiye bildirim göndermek için e-posta şablonu',
            ],
        ],
        'title' => 'İletişim',
        'description' => 'İletişim eklentisi için ayarlar',
        'blacklist_keywords' => 'Kara listedeki kelimeler',
        'blacklist_keywords_placeholder' => 'kelimeler...',
        'blacklist_keywords_helper' => 'İçerik alanında bu anahtar sözcükleri içeriyorsa (virgülle ayırarak) kişi isteklerini kara listeye alın.',
        'blacklist_email_domains' => 'Kara liste e-posta alanları',
        'blacklist_email_domains_placeholder' => 'domain(alan adı)...',
        'blacklist_email_domains_helper' => 'E-posta etki alanı kara liste etki alanlarındaysa (virgülle ayrılmış) kara liste kişi istekleri.',
        'enable_math_captcha' => 'Matematik (aritmetik işlem) güvenlik kodunu etkinleştir?',
        'enable_math_captcha_in_contact_form' => 'İletişim formunda Math Captcha etkinleştirilsin mi?',
        'receiver_emails' => 'Alıcı e-postaları',
        'receiver_emails_placeholder' => 'Birden fazla e-posta girebilirsiniz (virgülle ayırarak)',
        'receiver_emails_helper' => 'Bu e-postalar iletişim formundan e-posta olarak alınacaktır. Boş bırakın, e-posta yönetici e-postasına gönderilecektir.',
    ],
    'no_reply' => 'Henüz yanıtlanmadı!',
    'reply' => 'Yanıtla',
    'send' => 'Gönder',
    'shortcode_name' => 'İletişim form',
    'shortcode_description' => 'İletişim formu ekle',
    'shortcode_content_description' => 'Editöre kısakod ekle [contact-form][/contact-form]',
    'message_sent_success' => 'Mesaj başarıyla gönderildi!',
    'dropdown_show_label' => 'Kişileri göster',
    'display_fields' => 'Alanları görüntüle',
    'mandatory_fields' => 'Zorunlu alanlar',
    'mandatory_fields_helper_text' => 'Boşsa varsayılan yapılandırmayla doğrulanacaktır. İsim ve Mesaj her zaman gereklidir.',
    'custom_field' => [
        'name' => 'Özel Alanlar',
        'create' => 'Özel Alan Oluştur',
        'type' => 'Tip',
        'required' => 'Gerekli',
        'placeholder' => 'Yer tutucu',
        'order' => 'Emir',
        'options' => 'Seçenekler',
        'option' => [
            'label' => 'Etiket',
            'value' => 'Değer',
            'add' => 'Yeni seçenek ekle',
        ],
        'enums' => [
            'types' => [
                'text' => 'Metin',
                'number' => 'Sayı',
                'dropdown' => 'Yıkılmak',
                'checkbox' => 'Onay kutusu',
                'radio' => 'Radyo',
                'textarea' => 'Metin alanı',
            ],
        ],
    ],
];
