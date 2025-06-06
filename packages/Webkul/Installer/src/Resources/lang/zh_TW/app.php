<?php

return [
    'seeders' => [
        'attribute' => [
            'attribute-families' => '屬性家族',
            'attribute-groups'   => [
                'description'      => '描述',
                'general'          => '一般',
                'inventories'      => '庫存',
                'meta-description' => 'Meta 描述',
                'price'            => '價格',
                'technical'        => '技術',
                'shipping'         => '運送',
            ],
            'attributes' => [
                'brand'                => '品牌',
                'color'                => '顏色',
                'cost'                 => '成本',
                'description'          => '描述',
                'featured'             => '推薦',
                'guest-checkout'       => '訪客結帳',
                'height'               => '高度',
                'length'               => '長度',
                'manage-stock'         => '管理庫存',
                'meta-description'     => 'Meta 描述',
                'meta-keywords'        => 'Meta 關鍵字',
                'meta-title'           => 'Meta 標題',
                'name'                 => '名稱',
                'new'                  => '新',
                'price'                => '價格',
                'product-number'       => '產品編號',
                'short-description'    => '簡短描述',
                'size'                 => '尺寸',
                'sku'                  => 'SKU',
                'special-price-from'   => '特價從',
                'special-price-to'     => '特價至',
                'special-price'        => '特價',
                'status'               => '狀態',
                'tax-category'         => '稅務類別',
                'url-key'              => 'URL 鍵',
                'visible-individually' => '單獨顯示',
                'weight'               => '重量',
                'width'                => '寬度',
            ],
            'attribute-options' => [
                'black'  => '黑色',
                'green'  => '綠色',
                'l'      => '大',
                'm'      => '中',
                'red'    => '紅色',
                's'      => '小',
                'white'  => '白色',
                'xl'     => '超大',
                'yellow' => '黃色',
            ],
        ],
        'category' => [
            'categories' => [
                'description' => '分類描述',
                'name'        => '主要分類',
            ],
            'category_fields' => [
                'name'        => '名稱',
                'description' => '描述',
            ],
        ],
        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => '關於我們的內容',
                    'title'   => '關於我們',
                ],
                'contact-us' => [
                    'content' => '聯繫我們的內容',
                    'title'   => '聯絡我們',
                ],
                'customer-service' => [
                    'content' => '客服中心內容',
                    'title'   => '客戶服務',
                ],
                'payment-policy' => [
                    'content' => '付款政策內容',
                    'title'   => '付款政策',
                ],
                'privacy-policy' => [
                    'content' => '隱私政策內容',
                    'title'   => '隱私政策',
                ],
                'refund-policy' => [
                    'content' => '退款政策內容',
                    'title'   => '退款政策',
                ],
                'return-policy' => [
                    'content' => '退貨政策內容',
                    'title'   => '退貨政策',
                ],
                'shipping-policy' => [
                    'content' => '運送政策內容',
                    'title'   => '運送政策',
                ],
                'terms-conditions' => [
                    'content' => '條款和條件內容',
                    'title'   => '條款與條件',
                ],
                'terms-of-use' => [
                    'content' => '使用條款內容',
                    'title'   => '使用條款',
                ],
                'whats-new' => [
                    'content' => '最新內容',
                    'title'   => '最新消息',
                ],
            ],
        ],
        'core' => [
            'channels' => [
                'meta-title'       => '商店展示',
                'meta-keywords'    => '商店展示的 meta 關鍵字',
                'meta-description' => '商店展示的 meta 描述',
                'name'             => '標準',
            ],
            'currencies' => [
                'AED' => '阿聯酋迪拉姆',
                'AFN' => '阿富汗尼',
                'CNY' => '人民幣',
                'EUR' => '歐元',
                'GBP' => '英鎊',
                'INR' => '印度盧比',
                'IRR' => '伊朗里亞爾',
                'JPY' => '日元',
                'RUB' => '俄羅斯盧布',
                'SAR' => '沙特里亞爾',
                'TRY' => '土耳其里拉',
                'UAH' => '烏克蘭赫夫尼亞',
                'USD' => '美元',
            ],
        ],
        'customer' => [
            'customer-groups' => [
                'general'   => '一般',
                'guest'     => '訪客',
                'wholesale' => '批發',
            ],
        ],
        'inventory' => [
            'inventory-sources' => [
                'name' => '標準',
            ],
        ],
        'shop' => [
            'theme-customizations' => [
                'all-products' => [
                    'name'    => '所有產品',
                    'options' => [
                        'title' => '所有產品',
                    ],
                ],
                'bold-collections' => [
                    'content' => [
                        'btn-title'   => '查看所有',
                        'description' => '探索我們的新穎集合！提升你的風格，增加鮮艷的顏色和大膽的設計。豐富你的衣櫥，使用鮮明的印花和飽和的顏色。準備開始一次大膽的旅程！',
                        'title'       => '準備迎接我們的新大膽系列！',
                    ],
                    'name' => '大膽系列',
                ],
                'categories-collections' => [
                    'name' => '按分類集合',
                ],
                'featured-collections' => [
                    'name'    => '特色系列',
                    'options' => [
                        'title' => '特色產品',
                    ],
                ],
                'footer-links' => [
                    'name'    => '頁腳連結',
                    'options' => [
                        'about-us'         => '關於我們',
                        'contact-us'       => '聯繫我們',
                        'customer-service' => '客戶服務',
                        'payment-policy'   => '付款政策',
                        'privacy-policy'   => '隱私政策',
                        'refund-policy'    => '退款政策',
                        'return-policy'    => '退貨政策',
                        'shipping-policy'  => '運送政策',
                        'terms-conditions' => '條款與條件',
                        'terms-of-use'     => '使用條款',
                        'whats-new'        => '最新消息',
                    ],
                ],
                'game-container' => [
                    'content' => [
                        'sub-title-1' => '我們的系列',
                        'sub-title-2' => '我們的系列',
                        'title'       => '玩新產品吧！',
                    ],
                    'name' => '遊戲容器',
                ],
                'image-carousel' => [
                    'name'    => '圖片輪播',
                    'sliders' => [
                        'title' => '準備迎接新系列',
                    ],
                ],
                'new-products' => [
                    'name'    => '新產品',
                    'options' => [
                        'title' => '新產品',
                    ],
                ],
                'offer-information' => [
                    'content' => [
                        'title' => '開始瀏覽 %40 折扣，第一筆購買！',
                    ],
                    'name' => '優惠信息',
                ],
                'services-content' => [
                    'description' => [
                        'emi-available-info'   => '所有主要信用卡均提供免費金融機構',
                        'free-shipping-info'   => '所有訂單免費配送',
                        'product-replace-info' => '產品替換簡單！',
                        'time-support-info'    => '24/7在線聊天和電子郵件專屬支持',
                    ],
                    'name'  => '服務內容',
                    'title' => [
                        'emi-available'   => '免費金融機構',
                        'free-shipping'   => '免費配送',
                        'product-replace' => '產品替換',
                        'time-support'    => '24/7 支持',
                    ],
                ],
                'top-collections' => [
                    'content' => [
                        'sub-title-1' => '我們的系列',
                        'sub-title-2' => '我們的系列',
                        'sub-title-3' => '我們的系列',
                        'sub-title-4' => '我們的系列',
                        'sub-title-5' => '我們的系列',
                        'sub-title-6' => '我們的系列',
                        'title'       => '玩新產品吧！',
                    ],
                    'name' => '特色系列',
                ],
            ],
        ],
        'user' => [
            'roles' => [
                'description' => '此角色將獲得所有功能的訪問權限',
                'name'        => '管理員',
            ],
            'users' => [
                'name' => '示例',
            ],
        ],
    ],
    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin'            => '管理員',
                'unopim'           => 'UnoPim',
                'confirm-password' => '確認密碼',
                'email-address'    => 'admin@example.com',
                'email'            => '電子郵件',
                'password'         => '密碼',
                'title'            => '建立管理員',
            ],

            'environment-configuration' => [
                'allowed-currencies'  => '允許的貨幣',
                'allowed-locales'     => '允許的地區',
                'application-name'    => '應用名稱',
                'unopim'              => 'UnoPim',
                'chinese-yuan'        => '人民幣 (CNY)',
                'database-connection' => '資料庫連線',
                'database-hostname'   => '資料庫主機名稱',
                'database-name'       => '資料庫名稱',
                'database-password'   => '資料庫密碼',
                'database-port'       => '資料庫埠',
                'database-prefix'     => '資料庫前綴',
                'database-username'   => '資料庫使用者名稱',
                'default-currency'    => '預設貨幣',
                'default-locale'      => '預設地區',
                'default-timezone'    => '預設時區',
                'default-url-link'    => 'https://localhost',
                'default-url'         => '預設網址',
                'dirham'              => '迪拉姆 (AED)',
                'euro'                => '歐元 (EUR)',
                'iranian'             => '伊朗里亞爾 (IRR)',
                'israeli'             => '以色列謝克爾 (ILS)',
                'japanese-yen'        => '日圓 (JPY)',
                'mysql'               => 'MySQL',
                'pgsql'               => 'pgSQL',
                'pound'               => '英鎊 (GBP)',
                'rupee'               => '印度盧比 (INR)',
                'russian-ruble'       => '俄羅斯盧布 (RUB)',
                'saudi'               => '沙烏地里亞爾 (SAR)',
                'select-timezone'     => '選擇時區',
                'sqlsrv'              => 'SQLSRV',
                'title'               => '資料庫配置',
                'turkish-lira'        => '土耳其里拉 (TRY)',
                'ukrainian-hryvnia'   => '烏克蘭格里夫納 (UAH)',
                'usd'                 => '美元 (USD)',
                'warning-message'     => '警告！這些配置為永久設定，無法更改。',
            ],

            'installation-processing' => [
                'unopim'      => '正在安裝 UnoPim',
                'unopim-info' => '正在建立資料庫表，這可能需要幾分鐘。',
                'title'       => '安裝中',
            ],

            'installation-completed' => [
                'admin-panel'               => '管理面板',
                'unopim-forums'             => 'UnoPim 論壇',
                'explore-unopim-extensions' => '探索 UnoPim 擴展功能',
                'title-info'                => 'UnoPim 已成功安裝。',
                'title'                     => '安裝完成',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => '建立資料庫表',
                'install-info-button'     => '點擊下面的按鈕開始',
                'install-info'            => '安裝 UnoPim',
                'install'                 => '安裝',
                'populate-database-table' => '填充資料庫表',
                'start-installation'      => '開始安裝',
                'title'                   => '準備安裝',
            ],

            'start' => [
                'locale'        => '地區',
                'main'          => '主頁',
                'select-locale' => '選擇地區',
                'title'         => '您的 UnoPim 安裝',
                'welcome-title' => '歡迎來到 UnoPim :version',
            ],

            'server-requirements' => [
                'calendar'    => '日曆',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'DOM',
                'fileinfo'    => '文件資訊',
                'filter'      => '過濾器',
                'gd'          => 'GD',
                'hash'        => '雜湊',
                'intl'        => '國際化',
                'json'        => 'JSON',
                'mbstring'    => 'MbString',
                'openssl'     => 'OpenSSL',
                'pcre'        => 'PCRE',
                'pdo'         => 'PDO',
                'php-version' => '8.2 或更高版本',
                'php'         => 'PHP',
                'session'     => '會話',
                'title'       => '系統需求',
                'tokenizer'   => '分詞器',
                'xml'         => 'XML',
            ],

            'back'                     => '返回',
            'unopim-info'              => '社區項目',
            'unopim-logo'              => 'UnoPim 標誌',
            'unopim'                   => 'UnoPim',
            'continue'                 => '繼續',
            'installation-description' => 'UnoPim 的安裝過程包括幾個步驟。以下是概述：',
            'wizard-language'          => '安裝嚮導語言',
            'installation-info'        => '我們很高興見到您！',
            'installation-title'       => '安裝 UnoPim',
            'save-configuration'       => '保存配置',
            'skip'                     => '跳過',
            'title'                    => 'UnoPim 安裝程序',
            'webkul'                   => 'Webkul',
        ],
    ],
];
