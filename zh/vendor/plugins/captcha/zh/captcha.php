<?php

return [
    'settings' => [
        'title' => '驗證碼',
        'description' => 'reCAPTCHA 是 Google 的免費服務，有助於保護網站免受垃圾郵件和濫用行為的侵害。'."\n"
            .' <br/><br/> 數學驗證碼讓您可以使用簡單的數學問題來測試網站使用者以證明他們的人類身份。',
        'panel_description' => '查看並更新 reCAPTCHA 和數學驗證碼',
        'recaptcha_site_key' => 'reCAPTCHA 站點金鑰',
        'recaptcha_secret' => 'reCAPTCHA 秘密',
        'enable_recaptcha' => '啟用驗證碼？',
        'recaptcha_score' => '分數',
        'recaptcha_credential_helper' => '取得您的 Google reCAPTCHA 憑證：連結。',
        'recaptcha_credential_helper_here' => '這裡',
        'recaptcha_warning' => '必須在憑證設定中使用 reCAPTCHA。請注意，錯誤的設定會導致登入系統中斷。',
        'hide_badge' => '隱藏 reCAPTCHA 徽章？',
        'show_disclaimer' => '顯示 reCAPTCHA 免責聲明？',
        'type' => '類型',
        'v2_description' => 'V2（使用挑戰驗證請求）',
        'v3_description' => 'V3（使用分數驗證請求）',
        'enable_math_captcha' => '啟用數學驗證碼？',
        'enable_for_form' => '啟用 :form?',
    ],
    'numbers' => [
        '0',
        2 => '2',
        12 => '12',
        1 => '1',
        3 => '3',
        4 => '4',
        5 => '5',
        6 => '6',
        7 => '7',
        8 => '8',
        9 => '9',
        10 => '10',
        11 => '11',
    ],
    'operands' => [
        '+' => '加',
        '-' => '減',
        '*' => '次',
        '/' => '除以',
    ],
    'recaptcha_disclaimer_message_with_link' => '本網站受 reCAPTCHA 保護，並適用於 Google :privacyLink 和 :termsLink。',
    'privacy_policy' => '隱私權政策',
    'terms_of_service' => '服務條款',
    'admin_login_form' => '管理員登入表單',
    'admin_forgot_password_form' => '管理者忘記密碼表格',
    'admin_reset_password_form' => '管理者重置密碼表格',
];
