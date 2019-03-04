<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => '高度な設定',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217通貨コード',
    'DEFAULT_CURRENCY_NAME' => '通貨名',
    'DEFAULT_CURRENCY_SYMBOL' => '通貨シンボル',
    'DEFAULT_DATE_FORMAT' => 'デフォルトの日付フォーマット',
    'DEFAULT_DECIMAL_SEP' => '小数点シンボル',
    'DEFAULT_LANGUAGE' => 'デフォルト言語',
    'DEFAULT_SYSTEM_SETTINGS' => 'ユーザーインターフェース',
    'DEFAULT_THEME' => 'デフォルトテーマ',
    'DEFAULT_TIME_FORMAT' => 'デフォルトの時間フォーマット',
    'DISPLAY_RESPONSE_TIME' => 'サーバー応答時間の表示',
    'IMAGES' => 'ロゴ',
    'LBL_ALLOW_USER_TABS' => 'ユーザーがタブを非表示に設定できる',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'システム設定',
    'LBL_LOGVIEW' => 'ログ設定',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP認証を使用？',
    'LBL_MAIL_SMTPPASS' => 'SMTPパスワード:',
    'LBL_MAIL_SMTPPORT' => 'SMTPポート番号:',
    'LBL_MAIL_SMTPSERVER' => 'SMTPサーバー名:',
    'LBL_MAIL_SMTPUSER' => 'SMTPユーザー名:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTPサーバー設定',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Eメールプロバイダを選択:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo!メールパスワード:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo!メールID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmailパスワード:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Eメールアドレス:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchangeパスワード:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchangeユーザー名:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchangeサーバーポート:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchangeサーバー:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'ユーザーがメールを送信する際にこのアカウントを使用可能:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'このオプションが選択された場合、すべてのユーザーがこのアカウントを用いて通知や通知を送信することが可能になります。選択しない場合は、ユーザーが個別に送信アカウントを設定することでメールを送信することが可能です。',
    'LBL_MAILMERGE' => 'メールマージ',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'ダッシュレットの最小更新間隔',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'ダッシュレットが自動的に更新する最小の間隔を指定します。「なし」に設定すると更新を行いません。',
    'LBL_MODULE_FAVICON' => 'モジュ－ルのアイコンをfaviconとして表示',
    'LBL_MODULE_FAVICON_HELP' => 'アイコンを持つモジュール内で操作している場合、テーマのfavconではなく、モジュールのアイコンをfaviconとして使います。',
    'LBL_MODULE_NAME' => 'システム設定',
    'LBL_MODULE_ID' => 'コンフィグレータ',
    'LBL_MODULE_TITLE' => 'ユーザーインターフェース',
    'LBL_NOTIFY_FROMADDRESS' => 'From（アドレス）:',
    'LBL_NOTIFY_SUBJECT' => 'メール件名:',
    'LBL_PROXY_AUTH' => '認証？',
    'LBL_PROXY_HOST' => 'プロキシホスト:',
    'LBL_PROXY_ON_DESC' => 'サーバー名と認証情報を設定します。',
    'LBL_PROXY_ON' => 'プロキシを利用',
    'LBL_PROXY_PASSWORD' => 'パスワード',
    'LBL_PROXY_PORT' => 'ポート:',
    'LBL_PROXY_TITLE' => 'プロキシ設定',
    'LBL_PROXY_USERNAME' => 'ユーザー名',
    'LBL_RESTORE_BUTTON_LABEL' => 'リストア',
    'LBL_SYSTEM_SETTINGS' => 'システム設定',
    'LBL_SKYPEOUT_ON_DESC' => 'SkypeOut&reg;を利用して、電話番号をクリックすると電話がかけられるように設定します。この機能を利用するためには、電話番号が正しく設定されている必要があります。番号は、+〔国番号〕〔電話番号〕です。例えば +1 (555) 555-1234 です。',
    'LBL_SKYPEOUT_ON' => '電話番号のClick-To-Callを有効にする',
    'LBL_SKYPEOUT_TITLE' => 'クリック-トゥ-コール',
    'LBL_USE_REAL_NAMES' => 'フルネームの表示（ログイン以外）',
    'LBL_USE_REAL_NAMES_DESC' => 'アサイン先フィールドにユーザー名ではなくユーザーのフルネームを表示します。',
    'LBL_DISALBE_CONVERT_LEAD' => '変換された潜在顧客に対するリード アクションの変換を無効にする',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'リードがすでに変換されている場合、このオプションを有効にすることでリード アクションの変換が削除されます',
    'LBL_ENABLE_ACTION_MENU' => 'メニュー内のアクションを表示する',
    'LBL_ENABLE_ACTION_MENU_DESC' => '表示するデータ ビューとドロップ ダウン メニュー内のサブパネル アクションを選択してください。選択しない場合、アクションは個別のボタンとして表示されます。',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'リスト ビュー上でのインライン編集を有効にします',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'リスト ビュー上のフィールドに対するインライン編集を有効化するかを選択してください。インライン編集を選択しない場合、リスト ビュー上では無効となります。',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => '詳細ビュー上でのインライン編集を有効にします',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => '詳細ビュー上のフィールドに対するインライン編集を有効化するかを選択してください。インライン編集を選択しない場合、詳細ビュー上では無効となります。',
    'LBL_HIDE_SUBPANELS' => '折りたたまれたサブパネル',
    'LIST_ENTRIES_PER_LISTVIEW' => 'ページごとに表示するアイテムの数',
    'LIST_ENTRIES_PER_SUBPANEL' => 'ページごとに表示するアイテムの数(サブパネル)',
    'LOG_MEMORY_USAGE' => 'メモリ使用状況のログ',
    'LOG_SLOW_QUERIES' => '遅延クエリのログ',
    'CURRENT_LOGO' => '現在のロゴ',
    'CURRENT_LOGO_HELP' => 'このロゴは各画面の左上に表示されます。',
    'NEW_LOGO' => '新たなロゴをアップロード（212×40）',
    'NEW_LOGO_HELP' => '画像のファイル形式は .png ファイルまたは .jpg のいずれでも可能です。高さの最大値は 170px、幅の最大値は 450px です。アップロードされたすべて画像はこれらの最大サイズに調整されます。',
    'NEW_LOGO_HELP_NO_SPACE' => '画像のファイル形式は .png ファイルまたは .jpg のいずれでも可能です。高さの最大値は 170px、幅の最大値は 450px です。アップロードされたすべて画像はこれらの最大サイズに調整されます。画像ファイル名にスペース文字を含むことはできません。',
    'SLOW_QUERY_TIME_MSEC' => '遅延クエリの閾値（ミリ秒）',
    'STACK_TRACE_ERRORS' => 'エラースタックトレースの表示',
    'UPLOAD_MAX_SIZE' => '最大アップロードサイズ(バイト)',
    'VERIFY_CLIENT_IP' => 'ユーザーのIPアドレスの正当性を確認',
    'LOCK_HOMEPAGE' => 'ユーザーがホームをカスタマイズすることを禁止',
    'LOCK_SUBPANELS' => 'ユーザーがサブパネルをカスタマイズすることを禁止',
    'MAX_DASHLETS' => 'ホームページ上の SuiteCRM ダッシュレットの最大数',
    'SYSTEM_NAME' => 'システム名',
    'SYSTEM_NAME_WIZARD' => '名前:',
    'SYSTEM_NAME_HELP' => 'これはブラウザのタイトルバーに表示される名前です。',
    'LBL_LDAP_TITLE' => 'LDAP認証',
    'LBL_LDAP_ENABLE' => 'LDAPを有効',
    'LBL_LDAP_SERVER_HOSTNAME' => 'サーバー名:',
    'LBL_LDAP_SERVER_PORT' => 'ポート番号:',
    'LBL_LDAP_ADMIN_USER' => '認証ユーザー名:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'LDAP ユーザーの検索に使用します。これは完全修飾である必要があります。',
    'LBL_LDAP_ADMIN_PASSWORD' => '認証パスワード:',
    'LBL_LDAP_AUTHENTICATION' => '認証:',
    'LBL_LDAP_AUTHENTICATION_DESC' => '特定のユーザーの資格情報を使用して LDAP サーバーにバインドします。提供されていない場合は匿名でバインドされます。',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'ユーザーを自動作成:',
    'LBL_LDAP_USER_DN' => 'ユーザーDN:',
    'LBL_LDAP_GROUP_DN' => 'グループDN:',
    'LBL_LDAP_GROUP_DN_DESC' => '例: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'ユーザーフィルタ:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'グループメンバーシップ:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'ユーザーは特定のグループのメンバーである必要があります。',
    'LBL_LDAP_GROUP_USER_ATTR' => 'ユーザー属性:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => '特定のグループのメンバーであることを確認するための識別子 例: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'ユーザー属性を検索する際に用いるグループ属性 例: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'グループ属性:',
    'LBL_LDAP_USER_FILTER_DESC' => 'ユーザー認証時に適用する任意の追加フィルタ パラメーター 例) <em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'ログイン属性:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'バインド属性:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'LDAPユーザーをバンドする例:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'LDAPユーザーを検索するための例:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => '例: ldap.example.com',
    'LBL_LDAP_SERVER_PORT_DESC' => '例: 389',
    'LBL_LDAP_GROUP_NAME' => 'グループ名:',
    'LBL_LDAP_GROUP_NAME_DESC' => '例 <em>cn = suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => '例: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => '認証されたユーザーが存在しない場合に作成されます。',
    'LBL_LDAP_ENC_KEY' => '暗号化キー:',
    'DEVELOPER_MODE' => '開発者モード',

    'SHOW_DOWNLOADS_TAB' => 'ダウンロードタブを表示',
    'SHOW_DOWNLOADS_TAB_HELP' => '選択された時、ユーザー設定にダウンロードタブが現れ、SuiteCRMのプラグインやその他利用可能なファイルへのアクセスをユーザーに提供します。',
    'LBL_LDAP_ENC_KEY_DESC' => 'LDAP使用時のSOAP認証用',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php.iniファイルのphp_mcryptエクステンションを有効にする必要があります。',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'openssl拡張はphh.iniファイル内で有効にする必要があります。',
    'LBL_ALL' => 'すべて',
    'LBL_MARK_POINT' => 'ポイントをマーク',
    'LBL_NEXT_' => '次へ>>',
    'LBL_REFRESH_FROM_MARK' => 'ポイントから再表示',
    'LBL_SEARCH' => '検索:',
    'LBL_REG_EXP' => '正規表現:',
    'LBL_IGNORE_SELF' => '自身のログを無視する:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'どこからログをスタートするかマークする',
    'LBL_DISPLAYING_LOG' => 'ログの表示',
    'LBL_YOUR_PROCESS_ID' => 'あなたのプロセスIDは',
    'LBL_YOUR_IP_ADDRESS' => 'あなたのIPアドレスは',
    'LBL_IT_WILL_BE_IGNORED' => '無視されます',
    'LBL_LOG_NOT_CHANGED' => 'ログに変更はありません',
    'LBL_ALERT_JPG_IMAGE' => '画像フォーマットはJPEGである必要があります。拡張子が.jpgのファイルを新たにアップロードしてください。',
    'LBL_ALERT_TYPE_IMAGE' => '画像ファイルのフォーマットはJPEGかPNGである必要があります。拡張子が.jpgか.pngのファイルを新しくアップロードしてください。',
    'LBL_ALERT_SIZE_RATIO' => '画像の縦横比は1:1と10:1の間になければなりません。画像のサイズは自動的に変更されます。',
    'ERR_ALERT_FILE_UPLOAD' => 'イメージをアップロード中にエラーが発生しました',
    'LBL_LOGGER' => 'ログ設定',
    'LBL_LOGGER_FILENAME' => 'ファイル名',
    'LBL_LOGGER_FILE_EXTENSION' => '拡張子',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'ファイルの最大サイズ',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'デフォルトの日付出力形式',
    'LBL_LOGGER_LOG_LEVEL' => 'ログレベル',
    'LBL_LEAD_CONV_OPTION' => 'リードの変換の選択肢',
    'LEAD_CONV_OPT_HELP' => "<b>コピー</b> - すべてのリードのアクティビティのコピーを作成し、変換中にユーザーによって選択された新しいレコードに関連付けます。コピーは選択されたレコードそれぞれに対して生成されます。<br><br><b>移動</b> - すべてのリードのアクティビティを、変換中にユーザーによって選択されたた新しいレコードに移動します。<br><br><b>何もしない</b> - 変換中にリードのアクティビティに対して何もしません。アクティビティはリードに対してだけ関連を維持します。",
    'LBL_CONFIG_AJAX' => 'AJAX ユーザー インターフェースの構成',
    'LBL_CONFIG_AJAX_DESC' => '特定のモジュールの AJAX UI の使用を有効/無効にします。',
    'LBL_LOGGER_MAX_LOGS' => 'ファイル最大数 (ローテーション前)',
    'LBL_LOGGER_FILENAME_SUFFIX' => '追加するサフィックス',
    'LBL_VCAL_PERIOD' => 'vCal更新の周期:',
    'LBL_IMPORT_MAX_RECORDS' => 'インポート - 行の最大数:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'インポート ファイル内にどれだけの行を許容するかを指定します。<br>インポート ファイル内の行数がこの値を超えた場合、ユーザーは警告を受けます。<br>数値が入力されない場合、許容する行数は無制限となります。',
    'vCAL_HELP' => 'この設定は、現在の日付から何か月先までの電話および会議の空き状況を公開かを決定する際に利用されます。</BR>空き状況を公開しない場合は、"0"を入力してください。最低期間は1ヶ月です。最大期間は12ヶ月です。',
    'LBL_PDFMODULE_NAME' => 'PDF設定',
    'SUGARPDF_BASIC_SETTINGS' => 'ドキュメント属性',
    'SUGARPDF_ADVANCED_SETTINGS' => '詳細設定',
    'SUGARPDF_LOGO_SETTINGS' => 'イメージ',

    'PDF_AUTHOR' => '著作者',
    'PDF_AUTHOR_INFO' => 'ドキュメントのプロパティに表示される著作者',

    'PDF_HEADER_LOGO' => '見積PDFドキュメント用',
    'PDF_HEADER_LOGO_INFO' => 'このイメージは、見積りPDFドキュメントのデフォルトヘッダ領域に表示されます。',

    'PDF_NEW_HEADER_LOGO' => '見積り用のイメージを選択してください。',
    'PDF_NEW_HEADER_LOGO_INFO' => 'ファイルフォーマットは、.jpgもしくは.pngである必要があります。（EZPDFの場合は.jpgのみ）<BR>推奨サイズは867x60 pxです。',

    'PDF_SMALL_HEADER_LOGO' => 'レポートのPDFドキュメント用',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'このイメージはリポート PDF ドキュメントのデフォルト ヘッダー内に表示されます。<br>また、このイメージはSuiteCRMアプリケーションの左上に表示されます。',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'レポート用のイメージを選択してください。',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'ファイルフォーマットは、.jpgもしくは.pngである必要があります。（EZPDFの場合は.jpgのみ）<BR>推奨サイズは212x40 pxです。',

    'PDF_FILENAME' => 'デフォルトファイル名',
    'PDF_FILENAME_INFO' => '生成されるPDFファイルのデフォルトファイル名',

    'PDF_TITLE' => 'タイトル',
    'PDF_TITLE_INFO' => 'ドキュメントプロパティにセットされるタイトル',

    'PDF_SUBJECT' => 'サブジェクト',
    'PDF_SUBJECT_INFO' => 'ドキュメントプロパティにセットされるサブジェクト名',

    'PDF_KEYWORDS' => 'キーワード',
    'PDF_KEYWORDS_INFO' => 'ドキュメントに付加されるキーワード。一般に"キーワード1 キーワード2..."と表記します。',

    'PDF_COMPRESSION' => '圧縮',
    'PDF_COMPRESSION_INFO' => 'ページの圧縮を有効もしくは無効にします。<br>有効にした場合、各ページの内部表現は圧縮率2で圧縮されて最終ドキュメント化されます。',

    'PDF_JPEG_QUALITY' => 'JPEG品質（1-100）',
    'PDF_JPEG_QUALITY_INFO' => 'デフォルトのJPEG圧縮率を指定してください。（1-100）',

    'PDF_PDF_VERSION' => 'PDFバージョン',
    'PDF_PDF_VERSION_INFO' => 'PDFバージョンを指定してください。（指定できる値についてはPDF関連ドキュメントを参照ください）',

    'PDF_PROTECTION' => 'ドキュメントのセキュリティ',
    'PDF_PROTECTION_INFO' => 'ドキュメントのセキュリティを設定してください。<br>- 内容のコピー: テキストやイメージをクリップボードにコピーできます。<br>- 印刷: ドキュメントを印刷できます。<br>- 編集: ドキュメントの編集ができます。（注釈とフォームを除きます）<br>- 注釈-フォーム: 注釈やフォームを追加できます。<br>注記: 編集に対するセキュリティは、Acrobat製品をすべて所有しているユ－ザ向けです。',

    'PDF_USER_PASSWORD' => 'ユーザーパスワード',
    'PDF_USER_PASSWORD_INFO' => 'パスワードを設定しない場合、通常通りにドキュメントを開くことができます。<br>パスワードを設定した場合、PDFを開く際にパスワードの入力を求められます。<br>マスターパスワードは、ユーザーパスワードと異なる場合にフルアクセスを与えることができます。',

    'PDF_OWNER_PASSWORD' => '所有者パスワード',
    'PDF_OWNER_PASSWORD_INFO' => 'パスワードを設定しない場合、通常通りにドキュメントを開くことができます。<br>パスワードを設定した場合、PDFを開く際にパスワードの入力を求められます。<br>マスターパスワードは、ユーザーパスワードと異なる場合にフルアクセスを与えることができます。',

    'PDF_ACL_ACCESS' => 'アクセスコントロール',
    'PDF_ACL_ACCESS_INFO' => 'PDF生成のためのデフォルトのアクセスコントロール',

    'K_CELL_HEIGHT_RATIO' => 'セルの高さの割合',
    'K_CELL_HEIGHT_RATIO_INFO' => 'セルの高さが（フォントの高さ×セルの高さの割合）より小さい場合、（フォントの高さ×セルの高さの割合）がセルの高さとして用いられます。<br>（フォントの高さ×セルの高さの割合）は、高さの指定がない時にも高さとして用いられます。',

    'K_SMALL_RATIO' => '小サイズフォント率',
    'K_SMALL_RATIO_INFO' => '小サイズのフォントに対する縮小率',

    'PDF_IMAGE_SCALE_RATIO' => 'イメージの拡大率',
    'PDF_IMAGE_SCALE_RATIO_INFO' => 'イメージを拡大縮小する場合の率',

    'PDF_UNIT' => '単位',
    'PDF_UNIT_INFO' => 'ドキュメントの単位',
    'PDF_GD_WARNING' => 'PHPのGDライブラリがインストールされていません。GDライブラリがない場合、PDFドキュメントにはJPEGのロゴだけが表示されます。',
    'ERR_EZPDF_DISABLE' => '注意：EZPDFクラスはconfigテーブルで無効にされています。このフォームを保存してTCPDFをPDFクラスとし、安定な状態に戻してください。',
    'LBL_IMG_RESIZED' => "（表示用にリサイズされています）",


    'LBL_FONTMANAGER_BUTTON' => 'PDFフォントマネージャ',
    'LBL_FONTMANAGER_TITLE' => 'PDFフォントマネージャ',
    'LBL_FONT_BOLD' => 'ボールド',
    'LBL_FONT_ITALIC' => 'イタリック',
    'LBL_FONT_BOLDITALIC' => 'ボールド/イタリック',
    'LBL_FONT_REGULAR' => '通常',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'Core',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Type1',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => '名前',
    'LBL_FONT_LIST_FILENAME' => 'ファイル名',
    'LBL_FONT_LIST_TYPE' => 'タイプ',
    'LBL_FONT_LIST_STYLE' => 'スタイル',
    'LBL_FONT_LIST_STYLE_INFO' => 'フォントのスタイル',
    'LBL_FONT_LIST_ENC' => 'エンコーディング',
    'LBL_FONT_LIST_EMBEDDED' => '埋め込み',
    'LBL_FONT_LIST_EMBEDDED_INFO' => 'フォントをPDFファイルに埋め込む際はチェックしてください。',
    'LBL_FONT_LIST_CIDINFO' => 'CID情報',
    'LBL_FONT_LIST_CIDINFO_INFO' => '例や詳細なヘルプ : www.tcpdf.org',
    'LBL_FONT_LIST_FILESIZE' => 'フォントサイズ（KB）',
    'LBL_ADD_FONT' => 'フォントを追加',
    'LBL_BACK' => '戻る',
    'LBL_REMOVE' => '削除', // PR 5451
    'LBL_JS_CONFIRM_DELETE_FONT' => 'このフォントを削除しても良いですか？',

    'LBL_ADDFONT_TITLE' => 'PDFフォントを追加',
    'LBL_PDF_ENCODING_TABLE' => 'エンコーディングテーブル',
    'LBL_PDF_ENCODING_TABLE_INFO' => 'エンコーディングテーブル名<br>このオプションは、TrueType Unicode、OpenType Unicode、シンボリックフォントの場合は無視されます。<br>エンコーディングは、コード（0から255まで）とフォントに含まれる文字との関連を定義します。<br>最初の128は固定でASCIIに対応します。',
    'LBL_PDF_FONT_FILE' => 'フォントファイル',
    'LBL_PDF_FONT_FILE_INFO' => '.ttfもしくは.otfもしくは .pfbファイル',
    'LBL_PDF_METRIC_FILE' => 'メトリックファイル',
    'LBL_PDF_METRIC_FILE_INFO' => '.afmもしくは.ufmファイル',
    'LBL_ADD_FONT_BUTTON' => '追加',
    'JS_ALERT_PDF_WRONG_EXTENSION' => 'このファイルは適切な拡張子を持っていません。',

    'ERR_MISSING_CIDINFO' => 'CID情報フィールドは空白にできません。',
    'LBL_ADDFONTRESULT_TITLE' => 'フォントの追加プロセスの結果',
    'LBL_STATUS_FONT_SUCCESS' => '成功：フォントが追加されました。',
    'LBL_STATUS_FONT_ERROR' => 'エラー：フォントは追加されませんでした。以下のログを参照してください。',

// Font manager
    'ERR_PDF_NO_UPLOAD' => 'フォントもしくはメトリックファイルのアップロード中にエラーが発生しました。',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'あなたのシナリオ',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'シナリオが構成されていません',
    'LBL_WIZARD_SCENARIOS_DESC' => 'インストールにどのシナリオを適応するかを選択してください。これらの選択肢はインストール後に変更することができます。',

    'LBL_WIZARD_TITLE' => '管理ウィザード',
    'LBL_WIZARD_WELCOME_TAB' => 'ようこそ',
    'LBL_WIZARD_WELCOME_TITLE' => 'SuiteCRMへようこそ！',
    'LBL_WIZARD_WELCOME' => 'ブランドに対しローカライズしてSuiteCRM を構成するために <b>次へ</b> をクリックします。SuiteCRM を後で構成する場合は <b>スキップ</b> をクリックします。',
    'LBL_WIZARD_NEXT_BUTTON' => '次へ >',
    'LBL_WIZARD_BACK_BUTTON' => '< 戻る',
    'LBL_WIZARD_SKIP_BUTTON' => 'スキップ',
    'LBL_WIZARD_CONTINUE_BUTTON' => '続ける',
    'LBL_WIZARD_FINISH_TITLE' => '基本的なシステム設定が完了しました。',
    'LBL_WIZARD_SYSTEM_TITLE' => '名称設定',
    'LBL_WIZARD_SYSTEM_DESC' => 'システム名とロゴを設定してください。',
    'LBL_WIZARD_LOCALE_DESC' => 'データを表示する形式を指定してください。ここで設定した内容はデフォルト値になりますが、ユーザーが個別に設定することも可能です。',
    'LBL_WIZARD_SMTP_DESC' => 'Eメールアカウントを設定してください。このアカウントからは、レコードがアサインされた際の通知やユーザーの新パスワードの連絡などが送信されます。また、SugteRMから送信されるEメールはこのアカウントから送信されます。',
    'LBL_LOADING' => '読み込み中...' /*for 508 compliance fix*/,
    'LBL_DELETE' => '削除' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'ようこそ' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'ロゴ' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'モジュールの履歴サブパネル内に関連するコンタクトEメールを表示する。',
);