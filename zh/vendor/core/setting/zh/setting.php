<?php

return [
    'title' => '設定',
    'general_setting' => '基礎設定',
    'menu' => '全部設定',
    'email_setting_title' => 'Email 設定',
    'email_setting_description' => '配置 Email 設定',
    'general' => [
        'theme' => '主題',
        'title' => '基本資料',
        'description' => '查看並更新網站資訊',
        'rich_editor' => '編輯器',
        'site_title' => '網站標題',
        'admin_email' => '管理員 Email',
        'seo_block' => 'SEO 配置',
        'seo_title' => 'SEO 標題',
        'seo_description' => 'SEO 描述',
        'webmaster_tools_block' => 'Google Webmaster Tools',
        'placeholder' => [
            'site_title' => '網站標題（最多 120 個字元）',
            'admin_email' => '管理員 Email',
            'seo_title' => 'SEO 標題（最多 120 個字元 )',
            'seo_description' => 'SEO 描述（最多 120 個字元）',
            'google_analytics' => 'Google Analytics',
        ],
        'enable_send_error_reporting_via_email' => '是否能夠透過電子郵件發送錯誤報告？',
        'time_zone' => '時區',
        'enable' => '同意',
        'disable' => '關閉',
        'enable_cache' => '啟用緩存？',
        'disable_cache_in_the_admin_panel' => '在管理面板中禁用緩存？',
        'disabled_helper' => '無法停用此電子郵件範本！',
        'cache_time' => '緩存時間（分鐘）',
        'enable_cache_site_map' => '啟用緩存網站地圖嗎？',
        'cache_time_site_map' => '緩存時間站點地圖（分鐘）',
        'admin_logo' => '管理員標誌',
        'admin_favicon' => '管理員圖示',
        'admin_title' => '管理員標題',
        'admin_title_placeholder' => '標題顯示到瀏覽器的標籤',
        'admin_appearance_title' => '管理員外觀',
        'admin_appearance_description' => '設定管理外觀，例如編輯器、語言...',
        'seo_block_description' => '設定網站標題、網站元描述、網站關鍵字以優化 SEO',
        'webmaster_tools_description' => 'Google 網站管理員工具 (GWT) 是一款免費軟體，可協助您管理網站的技術面',
        'yes' => '是的',
        'no' => 'No',
        'show_on_front' => '您的主頁顯示',
        'select' => '- 選擇 -',
        'show_site_name' => '在頁面標題後顯示網站名稱，並以「-」分隔？',
        'locale' => '網站語言',
        'locale_direction' => '前端語言方向',
        'minutes' => '分鐘',
        'redirect_404_to_homepage' => '將所有未找到的請求重定向到主頁？',
    ],
    'admin_appearance' => [
        'title' => '管理員外觀',
        'description' => '查看並更新標誌、網站圖標、佈局……',
        'layout' => '佈局',
        'horizontal' => '水平的',
        'vertical' => '垂直的',
        'show_menu_item_icon' => '顯示選單項目圖示？',
        'language' => '管理員面板中的語言',
        'theme_mode' => '主題模式',
        'dark' => '黑色的',
        'light' => '白色的',
        'container_width' => [
            'title' => '貨櫃寬度',
            'default' => '預設',
            'large' => '大的',
            'full' => '滿的',
        ],
        'form' => [
            'admin_logo' => '管理員標誌',
            'admin_favicon' => '管理圖示',
            'admin_title' => '管理人員名稱',
            'admin_title_placeholder' => '標題顯示到瀏覽器的標籤',
            'admin_login_screen_backgrounds' => '登入畫面背景 (~1366x768)',
            'admin_locale' => '管理員語言',
            'admin_locale_direction' => '管理語言方向',
            'rich_editor' => 'Rich 編輯器',
            'show_admin_bar' => '顯示管理列（當管理員登入時，仍在網站中顯示管理列）？',
            'show_guidelines' => '顯示指南？',
            'primary_font' => '主要字體',
            'primary_color' => '原色',
            'secondary_color' => '次要顏色',
            'heading_color' => '標題顏色',
            'text_color' => '文字顏色',
            'link_color' => '連結顏色',
            'link_hover_color' => '連結懸停顏色',
            'show_menu_item_icon' => '顯示選單項目圖示？',
            'custom_css' => 'Custom CSS',
            'custom_js' => 'Custom JS',
            'custom_header_js' => 'Header JS',
            'custom_header_js_placeholder' => 'JS在頁面頭部，將其包裹在<script></script>中',
            'custom_body_js' => 'Body JS',
            'custom_body_js_placeholder' => 'JS 在頁面主體中，將其包裹在 <script></script> 中',
            'custom_footer_js' => 'Footer JS',
            'custom_footer_js_placeholder' => 'JS 在頁面頁腳，將其包裹在 <script></script> 中',
        ],
    ],
    'datatable' => [
        'title' => '數據表',
        'description' => '數據表的設定',
        'form' => [
            'show_column_visibility' => '預設顯示列可見性？',
            'show_export_button' => '預設顯示導出按鈕？',
            'pagination_type' => '分頁類型',
            'default' => '預設',
            'dropdown' => '下拉式選單',
        ],
    ],
    'email' => [
        'subject' => '主題',
        'content' => '內容',
        'title' => '電子郵件範本設定',
        'description' => '使用 HTML 和系統變數的電子郵件範本。',
        'reset_to_default' => '重設為預設值',
        'back' => '返回設定',
        'reset_success' => '成功重置回預設值',
        'confirm_reset' => '確認重置電子郵件範本？',
        'confirm_message' => '您確實想將此電子郵件範本重設為預設值嗎？',
        'continue' => '繼續',
        'sender_name' => '寄件人名稱',
        'sender_name_placeholder' => '名稱',
        'sender_email' => '寄件人 email',
        'mailer' => '收件人',
        'port' => 'Port',
        'port_placeholder' => 'Ex: 587',
        'host' => 'Host',
        'host_placeholder' => 'Ex: smtp.gmail.com',
        'username' => '使用者名稱',
        'username_placeholder' => '用於登錄郵件伺服器的使用者',
        'password' => '密碼',
        'password_placeholder' => '登入郵件伺服器的密碼',
        'encryption' => '加密',
        'mail_gun_domain' => '網址',
        'mail_gun_domain_placeholder' => '網址',
        'mail_gun_secret' => '秘密',
        'mail_gun_secret_placeholder' => '秘密',
        'mail_gun_endpoint' => '端點',
        'mail_gun_endpoint_placeholder' => '端點',
        'log_channel' => '日誌頻道',
        'sendmail_path' => '發送郵件路徑',
        'encryption_placeholder' => '加密: ssl or tls',
        'local_domain' => '本地網域',
        'local_domain_placeholder' => '它可以是空的。使用 SMTP 中繼時需要設定為您的網域。例如。 your-domain.com',
        'ses_key' => 'Key',
        'ses_key_placeholder' => 'Key',
        'ses_secret' => '秘密',
        'ses_secret_placeholder' => '秘密',
        'ses_region' => '地區',
        'ses_region_placeholder' => '地區',
        'postmark_token' => 'Token',
        'postmark_token_placeholder' => 'Token',
        'email_templates' => 'Email模板',
        'email_templates_description' => '使用 HTML 和系統變數的Email範本。',
        'email_template_settings' => 'Email範本設定',
        'email_template_settings_description' => '查看並更新您的Email模板設定',
        'email_rules' => 'Email 規則',
        'email_rules_description' => '設定Email規則以進行驗證',
        'base_template' => '基礎模板',
        'base_template_description' => '所有Email的基本模板',
        'template_header' => 'Email範本標題',
        'template_header_description' => 'Email標題模板',
        'template_footer' => 'Email範本頁尾',
        'template_footer_description' => 'Email頁尾模板',
        'default' => '預設',
        'template_off_status_helper' => '此Email範本已關閉',
        'blacklist_email_domains' => '列入黑名單的Email網域',
        'blacklist_email_domains_helper' => '輸入要列入黑名單的Email網域清單。例如。 gmail.com、yahoo.com。',
        'blacklist_specified_emails' => '列入黑名單的Email地址',
        'blacklist_specified_emails_helper' => '輸入要列入黑名單的特定Email地址的清單。例如。郵件@example.com。',
        'exception_emails' => '例外Email',
        'exception_emails_helper' => '這些Email將被排除在驗證規則之外。',
        'email_rules_strict' => '嚴格的Email驗證',
        'email_rules_strict_helper' => '使用嚴格的規則執行類似 RFC 的Email驗證。',
        'email_rules_dns' => 'DNS 檢查驗證',
        'email_rules_dns_helper' => '檢查是否有表示伺服器接受電子郵件的 DNS 記錄。',
        'email_rules_spoof' => '欺騙檢測',
        'email_rules_spoof_helper' => '檢測潛在的Email欺騙嘗試。',
        'template_turn_off' => '按一下可關閉此Email模板',
        'template_turn_on' => '按一下以啟用此Email模板',
        'turn_on_success_message' => '成功開啟Email模板！',
        'turn_off_success_message' => '成功關閉Email模板！',
        'email_template_status' => 'Email範本狀態',
        'email_template_status_description' => '開啟/關閉Email模板',
        'email_template_logo' => 'Logo',
        'email_template_logo_helper_text' => '如果不設置，則從管理員->設定->管理員外觀->標誌中取得管理員徽標。',
        'email_template_copyright_text_helper_text' => '如果不設置，則從管理->外觀->主題選項->常規->版權中的主題選項版權中取得。',
        'email_template_email_contact' => '聯絡Email',
        'email_template_email_contact_helper_text' => '如果不設定，將從管理員 -> 設定 -> 電子郵件中的寄件者Email獲取',
        'email_template_social_links' => '社群連結',
        'email_template_copyright_text' => '版權',
        'image_upload_supported' => '僅支援 PNG、JPG、JPEG 和 GIF 格式。',
        'email_template_custom_css' => '電子郵件範本自訂 CSS',
        'social_links' => [
            'name' => '名稱',
            'icon' => 'Icon',
            'icon_image' => '圖標圖像（僅支援 PNG、JPG、JPEG 和 GIF 格式。）',
            'url' => '網址',
            'image' => '圖片',
        ],
    ],
    'media' => [
        'bunnycdn_zone' => '區域名稱（您的儲存區域的名稱）',
        'max_upload_filesize_helper' => '您的伺服器允許上傳檔案最大：大小，您可以變更此值以限制上傳檔案大小。',
        'width' => '寬度',
        'user_can_only_view_own_media_helper' => '當啟用此功能時，使用者僅能查看自己的媒體，而超級管理員則可以查看所有媒體。',
        'watermark_position_y' => '水印垂直位置 Y',
        'watermark_position_x' => '水印水平位置 X',
        'wasabi_access_key_id' => 'Wasabi 存取金鑰 ID',
        'wasabi_bucket' => 'Wasabi 儲存桶',
        'wasabi_default_region' => 'Wasabi 預設區域',
        'wasabi_root' => 'Wasabi 根目錄',
        'wasabi_secret_key' => 'Wasabi 密鑰',
        'watermark_source' => '水印圖片',
        'watermark_opacity' => '水印不透明度 (%',
        'watermark_position' => '水印位置',
        'user_can_only_view_own_media' => '使用者只能查看自己的媒體',
        'use_path_style_endpoint' => '使用路徑樣式端點？',
        'use_original_name_for_file_path' => '使用原始名稱作為檔案路徑',
        'turn_off_automatic_url_translation_into_latin' => '關閉自動將網址翻譯為拉丁語',
        'title' => '媒體',
        'driver' => '驅動',
        'description' => '媒體設定',
        'wasabi_root_helper' => '要重複使用現有圖像，只需將 Wasabi 根指定為“/”，然後將所有當前檔案從 public/storage 上傳到您的 Wasabi 根目錄即可。',
        'default_placeholder_image' => '預設佔位符影像',
        'enable_chunk' => '啟用區塊大小上傳？',
        'chunk_size' => '區塊大小（位元組）',
        'chunk_size_placeholder' => '預設值：1048576 ~ 1MB',
        'max_file_size' => '區塊最大檔案大小 (MB)',
        'max_file_size_placeholder' => '預設值: 1048576 ~ 1GB',
        'enable_watermark' => '啟用浮水印？',
        'watermark_size' => '水印大小(%)',
        'watermark_size_placeholder' => '預設值：10（%）',
        'watermark_opacity_placeholder' => '預設值：70（%）',
        'watermark_position_top_left' => '左上',
        'watermark_position_top_right' => '右上',
        'watermark_position_bottom_left' => '左下角',
        'watermark_position_bottom_right' => '右下角',
        'watermark_position_center' => '中間',
        'bunnycdn_hostname' => '主機名稱',
        'bunnycdn_key' => 'FTP和API存取密碼（儲存區API存取密碼）',
        'bunnycdn_region' => '區域（儲存區區域）',
        'optional' => '選擇',
        'sizes' => '媒體縮圖尺寸',
        'media_sizes_helper' => '如果您只想按寬度或高度裁剪，請將寬度或高度設為 0。',
        'height' => '高度',
        'default_size_value' => '預設值：大小',
        'all' => '全部',
        'all_helper_text' => '如果取消選取所有資料夾，它將套用至所有資料夾。',
        'media_folders_can_add_watermark' => '為資料夾中的影像添加浮水印：',
        'max_upload_filesize' => '最大上傳檔案大小 (MB)',
        'max_upload_filesize_placeholder' => '預設值：:size，必須小於:size',
        'image_processing_library' => '影像處理庫',
        'keep_original_file_size_and_quality' => '保持原始文件大小和質量',
        'update_thumbnail_sizes_warning' => '調整縮圖大小後，必須按一下「:button_text」按鈕來刷新它們。',
        'thumbnail_crop_position' => '縮圖裁切位置',
        'thumbnail_crop_position_left' => '左',
        'thumbnail_crop_position_center' => '中間',
        'thumbnail_crop_position_right' => '右',
        'thumbnail_crop_position_top' => '上',
        'thumbnail_crop_position_bottom' => '下',
        'thumbnail_crop_position_helper' => '此設定用於在生成縮圖時裁剪影像。它將從此位置被裁剪，直到圖像被填滿。',
        'enable_thumbnail_sizes' => '啟用縮圖大小',
        'enable_thumbnail_sizes_helper' => '啟用此選項可以產生影像的縮圖。如果停用，系統將不會產生影像縮圖並始終使用全尺寸影像。',
    ],
    'license' => [
        'purchase_code' => '購買代碼',
        'buyer' => '買家',
    ],
    'field_type_not_exists' => '該字段類型不存在',
    'save_settings' => '儲存設定',
    'template' => '範本',
    'description' => '描述',
    'enable' => '可執行',
    'send' => '傳出',
    'test_email_description' => '若要傳送測試Email，請確保您已更新發送Email的配置！',
    'test_email_input_placeholder' => '輸入您要傳送測試電子郵件的Email地址。',
    'test_email_modal_title' => '發送測試Email',
    'test_send_mail' => '發送測試郵件',
    'test_email_send_success' => '發送Email成功！',
    'locale_direction_ltr' => '從左到右',
    'locale_direction_rtl' => '從右到左',
    'emails_warning' => '您可以新增最多 :count 封Email',
    'email_add_more' => '添加更多',
    'generate' => '產生',
    'generate_thumbnails' => '產生縮圖',
    'generate_thumbnails_success' => '成功產生縮圖。 :count 個檔案已產生！',
    'generate_thumbnails_error' => '我們無法重新生成這些檔案的縮圖：'."\n"
        .'個檔案！',
    'generate_thumbnails_description' => '您確定要重新產生所有影像的縮圖嗎？這需要時間，所以請不要離開此頁面，等待它完成。',
    'enable_chunk_description' => '區塊大小上傳用於上傳大檔案。',
    'watermark_description' => '警告：水印僅會添加到新上傳的圖片中，不會添加到現有圖片上。禁用水印不會移除現有圖片上的水印。',
    'submit' => '提交',
    'back' => '後退',
    'enter_sample_value' => '輸入測試樣本值',
    'preview' => '預覽',
    'media_size_width' => ':size 尺寸寬度必須大於0',
    'media_size_height' => ':size尺寸高度必須大於0',
    'cronjob' => [
        'name' => '定時任務',
        'description' => 'Cronjob 可讓您自動執行網站上的某些指令或腳本。',
        'is_not_ready' => '若要執行 cronjob，請按照以下說明操作。',
        'is_working' => '恭喜！你的 cronjob 正在運作。',
        'is_not_working' => '您的 cronjob 沒有運作。請檢查您伺服器的 cronjob。',
        'last_checked' => '上次檢查時間：time。',
        'copy_button' => '複製',
        'setup' => [
            'name' => '設定定時任務',
            'connect_to_server' => '透過 SSH 或任何首選方法連接到您的伺服器。',
            'open_crontab' => '使用文字編輯器開啟 crontab 檔案（例如“crontab -e”）。',
            'add_cronjob' => '將以上指令加入crontab檔案並儲存。',
            'done' => 'cronjob 現在將每分鐘運行一次並執行指定的命令。',
            'learn_more' => '您可以從 Laravel :documentation 中了解有關 cronjob 的更多信息',
            'documentation' => '文件',
            'copied' => '已複製',
        ],
    ],
    'cache' => [
        'title' => '緩存',
        'description' => '為系統配置緩存以優化速度',
        'form' => [
            'enable_cache' => '啟用緩存？',
            'cache_time' => '緩存時間（分鐘）',
            'disable_cache_in_the_admin_panel' => '在管理面板中禁用緩存？',
            'cache_admin_menu' => '緩存管理選單？',
            'enable_cache_site_map' => '啟用緩存網站地圖嗎？',
            'cache_time_site_map' => '緩存時間站點地圖（分鐘）',
        ],
    ],
    'appearance' => [
        'title' => '外觀',
    ],
    'panel' => [
        'common' => '常見的',
        'general' => '一般',
        'general_description' => '查看並更新您的一般設定並啟用授權',
        'email' => 'Email',
        'email_description' => '查看並更新您的Email設定和Email模板',
        'media' => '媒體',
        'media_description' => '查看並更新您的媒體設定',
        'system' => '系統',
        'system_updater' => '系統更新程式',
        'system_updater_description' => '將您的系統更新到最新版本',
        'others' => '其它',
    ],
    'saving' => '儲存...',
    'generating_media_thumbnails' => '正在產生媒體縮圖...',
    'test_email_template' => '測試Email模板',
    'select_email_template' => '選擇Email模板',
];
