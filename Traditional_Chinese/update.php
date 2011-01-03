<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'更新FluxBB',
'Update message'				=>	'您FluxBB數據庫已經過期的，必須升級才能繼續。如果您是論壇管理員，請按照下面的說明完成升級。',
'Note'							=>	'注意：',
'Members message'				=>	'這個過程是板administators只。如果你是會員，沒有什麼可擔心的 - 論壇將於回來不久！',
'Administrator only'			=>	'這一步是為論壇管理員只！',
'Database password info'		=>	'要執行數據庫更新，請輸入數據庫密碼，這 FluxBB安裝。如果你不能記住，這是儲存在你的\'的config.php\'文件。',
'Database password note'		=>	'如果您運行的是SQLite的（因此也沒有數據庫密碼），請使用該數據庫文件的名稱來代替。這必須完全匹配給定的數據庫文件名在配置文件中。',
'Database password'				=>	'數據庫密碼',
'Next'							=>	'下一頁',

'You are running error'			=>	'您正在運行 %1$s 版本 %2$s 。 FluxBB %3$s 至少需要 %1$s  %4$s 正常運行。您必須升級 %1$s 安裝後才能繼續。',
'Version mismatch error'		=>	'版本不匹配。數據庫\' %s \'不似乎運行 FluxBB數據庫架構支持此更新腳本。',
'Invalid file error'			=>	'無效的數據庫文件名。當使用SQLite數據庫文件的名稱必須輸入準確，因為它出現在你的\' %s \'',
'Invalid password error'		=>	'無效的資料庫密碼。要升級 FluxBB您必須輸入數據庫的密碼完全相同，因為它出現在你的\' %s \'',
'No password error'				=>	'沒有提供數據庫密碼',
'Script runs error'				=>	'看來升級腳本已經被其他人跑。如果不是這種情況，請手動刪除文件\' %s \'，然後再試一次',
'No update error'				=>	'您的論壇已升最新的腳本，因為這可以使它',

'Intro 1'						=>	'這個腳本將更新您的論壇的數據庫。更新過程可能需要任何東西，從一秒鐘時間取決於服務器的速度和大小論壇的數據庫。不要忘記將備份的數據庫，然後再繼續。',
'Intro 2'						=>	'你讀了更新說明文檔中？如果沒有，從這裡開始。',
'No charset conversion'			=>	'<strong>重要！FluxBB</strong>已檢測到的PHP環境沒有支持的編碼機制需要做的UTF - 8字符集的轉換，從以外的ISO - 8859 - 1。這意味著，如果當前字符集不是通過 ISO - 8859 - 1，FluxBB將無法轉換您的論壇的數據庫為 UTF - 8，你將不得不做手工。說明上工字符集的轉換中可以找到更新的指示。',
'Enable conversion'				=>	'<strong>啟用轉換：</strong>當啟用此更新腳本後，它已作出所需更改數據庫結構，轉換數據庫中的所有文本從當前字符集為UTF - 8。這種轉換是必需的，如果你升級到1.2版。',
'Current character set'			=>	'<strong>當前字符集：</strong>如果在您的論壇的主要語言是英語，你可以保留此默認值。但是，如果您的論壇非英語，你應該輸入的字符集使用的主要語言包了論壇。 <em>獲得這個錯誤可能會損壞你的數據庫，所以不要只是猜測！</em>注：這是必需的，即使舊的數據庫是UTF - 8。',
'Charset conversion'			=>	'字符集轉換',
'Enable conversion label'		=>	'<strong>啟用轉換</strong> （執行數據庫字符集轉換）。',
'Current character set label'	=>	'當前字符集',
'Current character set info'	=>	'接受默認為英語論壇否則字符集的主要語言包。',
'Start update'					=>	'開始更新',
'Error converting users'		=>	'用戶轉換錯誤',
'Error info 1'					=>	'有一些用戶錯誤轉換。轉換時可能發生這種情況，從 FluxBB 1.2如果有多個用戶已登記的用戶名非常相似，例如“bob”和“鮑勃”。',
'Error info 2'					=>	'下面是一個列表的用戶誰無法轉換。請選擇一個新的用戶名每個用戶。用戶誰是改名將自動發送一封電子郵件，提醒他們改變。',
'New username'					=>	'新的用戶名',
'Required'						=>	'（必填）',
'Correct errors'				=>	'下面的錯誤需要改正：',
'Rename users'					=>	'重命名用戶',
'Successfully updated'			=>	'你的論壇數據庫已成功更新。現在，您可以 %s 。',
'go to index'					=>	'到論壇首頁',

'Unable to lock error'			=>	'無法寫更新鎖。請確保 PHP有寫權限的目錄\' %s \'並沒有其他人目前正在運行更新腳本。',

'Converting'					=>	'轉換 %s ...',
'Converting item'				=>	'轉換 %1$s  %2$s ...',
'Preparsing item'				=>	'Preparsing %1$s  %2$s ...',
'Rebuilding index item'			=>	'重建索引 %1$s  %2$s ',

'ban'							=>	'禁令',
'categories'					=>	'類別',
'censor words'					=>	'檢查員的話',
'configuration'					=>	'配置',
'forums'						=>	'論壇',
'groups'						=>	'團體',
'post'							=>	'文章',
'ranks'							=>	'行列',
'report'						=>	'報告',
'topic'							=>	'主題',
'user'							=>	'用戶',
'signature'						=>	'簽名',

'Username too short error'		=>	'用戶名必須至少2個字符長。請選擇另一個（更長）的用戶名。',
'Username too long error'		=>	'用戶名不能超過 25個字符長。請選擇另一個（短）的用戶名。',
'Username Guest reserved error'	=>	'用戶名住客被保留。請選擇其他用戶名。',
'Username IP format error'		=>	'用戶名可能無法在一個 IP地址的形式。請選擇其他用戶名。',
'Username bad characters error'	=>	'用戶名可以不包含所有字符\'，“和[或]一次。請選擇其他用戶名。',
'Username BBCode error'			=>	'用戶名可以不包含任何文本格式標記（BBCode的），論壇的用途。請選擇其他用戶名。',
'Username duplicate error'		=>	'有人已註冊的用戶名 %s 。您輸入的用戶名是太相似了。用戶名必須不同於到至少一個字母數字字符（AZ或0-9）。請選擇一個不同的用戶名。',

'JavaScript disabled'			=>	'的JavaScript似乎已被關閉。 %s 。',
'Click here to continue'		=>	'點擊這裡繼續'

);
