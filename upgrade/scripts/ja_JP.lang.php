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
    'DEFAULT_CHARSET' => 'UTF-8',
    'LBL_DISABLED_TITLE' => 'SuiteCRMはインストール不可です',
    'LBL_DISABLED_TITLE_2' => 'SuiteCRMはインストール不可に設定されています',
    'LBL_DISABLED_DESCRIPTION' => 'インストーラは実行済みです。セキュリティ上の理由から再インストールの実行を無効にしています。再インストールしたい場合はconfig.phpファイル内の「installer_locked」を以下のように「false」に変更してください:',
    'LBL_DISABLED_DESCRIPTION_2' => '変更後、インストールを開始するには「開始」をクリックしてください。<i>インストール完了後は「installer_locked」を「true」にする必要があります。</i>',
    'LBL_DISABLED_HELP_1' => 'SuiteCRMインストールのヘルプは、SuiteCRM',
    'LBL_DISABLED_HELP_2' => 'サポートフォーラムでご覧いただけます。',

    'LBL_REG_TITLE' => '登録',
    'LBL_REG_CONF_1' => 'SuiteCRM に登録するために少々お時間をください。あなたの会社が SuiteCRM をどのように使用する計画なのかを私たちに教えていただくことで、私たちは常にあなたのビジネス ニーズに適した製品を確実に提供することができます。',
    'LBL_REG_CONF_2' => 'ご登録にはお名前とメールアドレスの入力が必要です。他の項目はオプションですが参考のためご記入をお願いいたします。ご提供いただいた情報を第三者に販売、貸出、譲渡することは一切ありません。',
    'LBL_REG_CONF_3' => 'ご登録ありがとうございました。完了ボタンをクリックし、SuiteCRMにログインしてください。初回は 「admin」 と、インストール時に設定したパスワードでログインいただけます。',


    'ERR_ADMIN_PASS_BLANK' => 'SuiteCRM 管理者パスワードを空白にすることはできません。',
    'ERR_CHECKSYS_CALL_TIME' => '関数呼び出し時の強制参照渡しをオフにすることを許可してください(php.ini で有効にしてください)',
    'ERR_CHECKSYS_CURL' => '見つかりません: SuiteCRMスケジューラの機能は制限付きで動作します。',
    'ERR_CHECKSYS_MEM_LIMIT_1' => '警告: $memory_limit (次の通り設定 ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M以上に設定してください。)',
    'ERR_CHECKSYS_NO_SESSIONS' => 'セション変数の読み込みと書き込みに失敗しました。インストールを続けることができません。',
    'ERR_CHECKSYS_NOT_VALID_DIR' => '正しいディレクトリではありません',
    'ERR_CHECKSYS_NOT_WRITABLE' => '警告: 書き込み不可',
    'ERR_CHECKSYS_PHP_INVALID_VER' => '無効な PHP のバージョンがインストール: ( ver',
    'ERR_CHECKSYS_PHP_UNSUPPORTED' => 'このPHPのバージョンはサポート外です:  ( ver',
    'ERR_CHECKSYS_SAFE_MODE' => 'セーフ モードがオン (php.ini で無効にしてください)',
    'ERR_DB_ADMIN' => 'データベース管理者のユーザー名および/またはパスワードが有効ではありません (エラー ',
    'ERR_DB_EXISTS_NOT' => '指定されたデータベースは存在しません。',
    'ERR_DB_EXISTS_WITH_CONFIG' => '設定データのあるデータベースが既に存在します。選択したデータベースのインストールを実行するにはインストールを再実行し、「既存のSuiteCRMテーブルを削除して新しく作成しなおしますか?」を選択してください。アップグレードするには、管理コンソールのアップグレード ウィザードを使用してください。 <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new"> こちらにある </a>アップグレードに関するドキュメントをお読みください。',
    'ERR_DB_EXISTS' => 'データベース名が既に存在します -- 同じ名前を持つ異なるデータベースは作成できません。',
    'ERR_DB_HOSTNAME' => 'ホスト名は空欄にできません。',
    'ERR_DB_INVALID' => '不正なデータベースタイプが選択されています。',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'SuiteCRM データベース ユーザー名および/またはパスワードが有効ではありません (エラー ',
    'ERR_DB_MYSQL_VERSION1' => 'MySQL バージョン ',
    'ERR_DB_MYSQL_VERSION2' => ' はサポートされていません。 MySQL 4.1.x 以降のみがサポートされています。',
    'ERR_DB_NAME' => 'データベース名は空欄にできません。',
    'ERR_DB_NAME2' => "「\\」、「/」、「.」を含むデータベース名を使用することはできません。",
    'ERR_DB_PASSWORD' => 'SuiteCRM 用のパスワードが一致しません。',
    'ERR_DB_PRIV_USER' => 'データベース管理者のユーザー名が必要です。',
    'ERR_DB_USER_EXISTS' => 'SuiteCRMのユーザー名が既に存在します -- 同じ名前を持つ異なるユーザーは作成できません。',
    'ERR_DB_USER' => 'SuiteCRM のユーザー名は空白にできません。',
    'ERR_DBCONF_VALIDATION' => '次へ進む前に以下のエラーを修正してください:',
    'ERR_ERROR_GENERAL' => '以下のエラーが見つかりました:',
    'ERR_LICENSE_MISSING' => '必須項目が入力されていません。',
    'ERR_LICENSE_NOT_FOUND' => 'ライセンスファイルが見つかりません！',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => '指定されたログディレクトリは正しくありません。',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => '指定されたログディレクトリは書き込み不可です。',
    'ERR_LOG_DIRECTORY_REQUIRED' => 'カスタムログディレクトリを使用したい場合はディレクトリパスの指定が必要です。',
    'ERR_NO_DIRECT_SCRIPT' => '直接スクリプトを実行できません。',
    'ERR_PASSWORD_MISMATCH' => 'SuiteCRM 管理者用のパスワードが一致しません。',
    'ERR_PERFORM_CONFIG_PHP_1' => '<span class=stop>config.php</span>ファイルに書き込みできません。',
    'ERR_PERFORM_CONFIG_PHP_2' => '以下に表示されている設定情報を記述したconfig.phpを手動で作成することでインストールを続行できますが、<strong>次のステップに進む前にconfig.phpを作成する</strong>必要があります。',
    'ERR_PERFORM_CONFIG_PHP_3' => 'config.phpファイルは作成済みですか?',
    'ERR_PERFORM_CONFIG_PHP_4' => '警告: config.phpファイルに書き込みできませんでした。config.phpがあるかどうか確認してください。',
    'ERR_PERFORM_HTACCESS_1' => '書き込み不可：',
    'ERR_PERFORM_HTACCESS_2' => 'ファイルに書き込みできません。',
    'ERR_PERFORM_HTACCESS_3' => 'ログファイルをブラウザからのアクセスからセキュアな状態にしたい場合は、以下のコードを記述した .htaccessファイルをログディレクトリ内に作成してください:',
    'ERR_PERFORM_NO_TCPIP' => '<b>インターネット接続を検出できませんでした。</b>接続ができましたら、SuiteCRM に登録するために<a href=\\"http://www.suitecrm.com\\"> http://www.suitecrm.com</a> をご覧ください。あなたの会社が SuiteCRM をどのように使用する計画なのかを私たちに教えていただくことで、私たちは常にあなたのビジネス ニーズに適した製品を確実に提供することができます。',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => '指定されたセションディレクトリは正しくありません。',
    'ERR_SESSION_DIRECTORY' => '指定されたセションディレクトリは書き込み不可です。',
    'ERR_SESSION_PATH' => 'カスタムセションディレクトリを使用したい場合は、ディレクトリの指定が必要です。',
    'ERR_SI_NO_CONFIG' => 'config_si.phpがドキュメントルートにないか、config.php内で$sugar_config_siが設定されていません。',
    'ERR_SITE_GUID' => 'カスタムアプリケーションIDを使用したい場合はIDを指定する必要があります。',
    'ERR_URL_BLANK' => 'URL を空にすることはできません。',
    'LBL_BACK' => '戻る',
    'LBL_CHECKSYS_1' => 'SuiteCRM のインストールが正常に機能するため、以下のすべてのシステム チェック 項目が緑色であることを確認してください。いずれかが赤の場合、それらの修正を行ってください。',
    'LBL_CHECKSYS_CACHE' => 'Cacheサブディレクトリへの書き込み',
    'LBL_CHECKSYS_CALL_TIME' => 'PHPは関数呼び出し時の強制参照渡しをオンにするのを許可します',
    'LBL_CHECKSYS_COMPONENT' => 'コンポーネント',
    'LBL_CHECKSYS_CONFIG' => 'SuiteCRM設定ファイル (config.php) への書き込み',
    'LBL_CHECKSYS_CURL' => 'cURL ライブラリ',
    'LBL_CHECKSYS_CUSTOM' => '書き込み可能なカスタム ディレクトリ',
    'LBL_CHECKSYS_DATA' => 'Dataサブディレクトリへの書き込み',
    'LBL_CHECKSYS_MEM_OK' => 'OK (無制限)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (無制限)',
    'LBL_CHECKSYS_MEM' => 'PHP のメモリ制限 >= ',
    'LBL_CHECKSYS_MODULE' => 'Modulesサブディレクトリ、ファイルへの書き込み',
    'LBL_CHECKSYS_NOT_AVAILABLE' => '問題あり',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => '<b>注意:</b>php の設定ファイル (php.ini) はここに配置されています:',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver',
    'LBL_CHECKSYS_PHPVER' => 'PHPバージョン',
    'LBL_CHECKSYS_RECHECK' => '再チェック',
    'LBL_CHECKSYS_SAFE_MODE' => 'PHPのSafe ModeをOffに設定',
    'LBL_CHECKSYS_SESSION' => 'セションディレクトリへの書き込み (',
    'LBL_CHECKSYS_STATUS' => 'ステータス',
    'LBL_CHECKSYS_TITLE' => 'システムチェック',
    'LBL_CHECKSYS_XML' => 'XMLのパース',
    'LBL_CLOSE' => '閉じる',
    'LBL_CONFIRM_BE_CREATED' => '作成',
    'LBL_CONFIRM_DB_TYPE' => 'データベースタイプ',
    'LBL_CONFIRM_DIRECTIONS' => '以下の設定を確認してください。設定を変更したい場合は「戻る」をクリックしてください。「次へ」をクリックしますとインストールが開始されます。',
    'LBL_CONFIRM_LICENSE_TITLE' => 'ライセンス情報',
    'LBL_CONFIRM_NOT' => '未',
    'LBL_CONFIRM_TITLE' => '設定の確認',
    'LBL_CONFIRM_WILL' => 'を',
    'LBL_DBCONF_CREATE_DB' => 'データベースを作成',
    'LBL_DBCONF_CREATE_USER' => 'ユーザーを作成',
    'LBL_DBCONF_DB_DROP_CREATE_WARN' => '警告(重要): ここをチェックするとすべてのSuiteCRMデータが削除されます。',
    'LBL_DBCONF_DB_DROP_CREATE' => '既存のSuiteCRMテーブルを削除して新しく作成しなおしますか?',
    'LBL_DBCONF_DB_NAME' => 'データベース名',
    'LBL_DBCONF_DB_PASSWORD' => 'データベースのパスワード',
    'LBL_DBCONF_DB_PASSWORD2' => 'データベース パスワードを再入力',
    'LBL_DBCONF_DB_USER' => 'データベース ユーザー名',
    'LBL_DBCONF_DEMO_DATA' => 'データベースにデモデータを追加しますか?',
    'LBL_DBCONF_HOST_NAME' => 'ホスト名',
    'LBL_DBCONF_INSTRUCTIONS' => 'データベース設定を以下に入力してください。よくわからない場合はデフォルト値の使用を推奨します。',
    'LBL_DBCONF_MB_DEMO_DATA' => 'デモデータにマルチバイトを使用?',
    'LBL_DBCONF_PRIV_PASS' => '特権ユーザーのパスワード',
    'LBL_DBCONF_PRIV_USER_2' => '上記のデータベースアカウントは特権ユーザーですか?',
    'LBL_DBCONF_PRIV_USER_DIRECTIONS' => 'このユーザーはデータベースを作成・削除し、他のユーザーを作成する権限を持った特権ユーザーである必要があります。このユーザーの情報は、インストール時においてこのステップのみでしか使用されません。権限を持ったユーザーであれば、上記で指定したユーザーと同じユーザーを使用してもかまいません。',
    'LBL_DBCONF_PRIV_USER' => '特権ユーザー名',
    'LBL_DBCONF_TITLE' => 'データベース設定',
    'LBL_HELP' => 'ヘルプ',
    'LBL_LICENSE_ACCEPTANCE' => 'ライセンス確認',
    'LBL_LICENSE_DIRECTIONS' => 'ライセンス情報をお持ちの場合は以下のフィールドに入力してください。',
    'LBL_LICENSE_DOWNLOAD_KEY' => 'ダウンロードキー',
    'LBL_LICENSE_EXPIRY' => '有効期限',
    'LBL_LICENSE_I_ACCEPT' => '同意します',
    'LBL_LICENSE_NUM_USERS' => 'ユーザー数',
    'LBL_LICENSE_OC_DIRECTIONS' => '購入したオフラインクライアントの数を入力してください。',
    'LBL_LICENSE_OC_NUM' => 'オフラインクライアントライセンスの数',
    'LBL_LICENSE_OC' => 'オフラインクライアントライセンス数',
    'LBL_LICENSE_PRINTABLE' => '印刷用',
    'LBL_LICENSE_TITLE' => 'ライセンス情報',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRMライセンス',
    'LBL_LICENSE_USERS' => 'ライセンスユーザー',
    'LBL_MYSQL' => 'MySQL',
    'LBL_NEXT' => '次へ',
    'LBL_NO' => 'いいえ',
    'LBL_ORACLE' => 'Oracle',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'サイト管理者のパスワードを設定しています',
    'LBL_PERFORM_AUDIT_TABLE' => '監査テーブル /',
    'LBL_PERFORM_CONFIG_PHP' => 'Suite設定ファイルを作成しています',
    'LBL_PERFORM_CREATE_DB_1' => 'データベースを作成する ',
    'LBL_PERFORM_CREATE_DB_2' => ' on ',
    'LBL_PERFORM_CREATE_DB_USER' => 'データベースのユーザー名・パスワードを作成しています...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'デフォルトのSuiteデータを作成しています',
    'LBL_PERFORM_CREATE_LOCALHOST' => 'ローカルホスト用データベースのユーザー名・パスワードを作成しています...',
    'LBL_PERFORM_CREATE_RELATIONSHIPS' => 'Suite関連テーブルを作成しています',
    'LBL_PERFORM_CREATING' => '作成中 /',
    'LBL_PERFORM_DEFAULT_REPORTS' => 'デフォルトのレポートを作成しています',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'デフォルトのスケジューラーを作成しています',
    'LBL_PERFORM_DEFAULT_SETTINGS' => 'デフォルトの設定を挿入しています',
    'LBL_PERFORM_DEFAULT_USERS' => 'デフォルトのユーザーを作成しています',
    'LBL_PERFORM_DEMO_DATA' => 'デモ データとデータベース テーブルを作成しています(少し時間がかかる場合があります)…',
    'LBL_PERFORM_DONE' => '完了<br>',
    'LBL_PERFORM_DROPPING' => '削除中 /',
    'LBL_PERFORM_FINISH' => '完了',
    'LBL_PERFORM_LICENSE_SETTINGS' => 'ライセンス情報をアップデートしています',
    'LBL_PERFORM_OUTRO_1' => 'SuiteCRM',
    'LBL_PERFORM_OUTRO_2' => ' が完了しました。',
    'LBL_PERFORM_OUTRO_3' => '実行時間:',
    'LBL_PERFORM_OUTRO_4' => '秒',
    'LBL_PERFORM_OUTRO_5' => 'メモリ使用: 約',
    'LBL_PERFORM_OUTRO_6' => 'バイト',
    'LBL_PERFORM_OUTRO_7' => 'システムのインストールと設定が完了しました。',
    'LBL_PERFORM_REL_META' => '関連メタ ...',
    'LBL_PERFORM_SUCCESS' => '成功！',
    'LBL_PERFORM_TABLES' => 'SuiteCRM アプリケーション テーブル、監査テーブル、およびリレーションシップ メタデータを作成しています…',
    'LBL_PERFORM_TITLE' => 'セットアップ実行',
    'LBL_PRINT' => '印刷',
    'LBL_REQUIRED' => '* 必須項目',
    'LBL_SITECFG_ADMIN_PASS_2' => 'SuiteCRM <em>管理者</em> のパスワードを再入力します',
    'LBL_SITECFG_ADMIN_PASS_WARN' => '警告（重要）: 再インストールの場合は前回設定した管理者のパスワードを上書きします。',
    'LBL_SITECFG_ADMIN_PASS' => 'SuiteCRM <em>管理者</em> パスワード',
    'LBL_SITECFG_APP_ID' => 'アプリケーションID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'SuiteCRM の 1 つのインスタンスからのセッションの別のインスタンスで使用されているを防ぐために自動生成されたアプリケーション ID をオーバーライドします。SuiteCRM インストールのクラスターがある場合は、それらはすべてが同じアプリケーション ID を共有する必要があります。',
    'LBL_SITECFG_CUSTOM_ID' => 'カスタムアプリケーションID',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'SuiteCRM ログが格納されている既定ディレクトリをオーバーライドします。ログ ファイルが存在する場所に関係なく、ブラウザーを介したそれへのアクセスは .htaccess リダイレクトによって制限されます。',
    'LBL_SITECFG_CUSTOM_LOG' => 'カスタムログディレクトリを使用',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'セッション データが共有サーバーにおいて脆弱性をもつことを防ぐために SuiteCRM セッション情報を保存するセキュリティで保護されたフォルダーを提供します。',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Suite用のカスタムセションディレクトリを使用',
    'LBL_SITECFG_DIRECTIONS' => '以下にサイト設定情報を入力してください。よくわからない場合はデフォルト値の使用を推奨します。',
    'LBL_SITECFG_FIX_ERRORS' => '次へ進む前に以下のエラーを修正してください:',
    'LBL_SITECFG_LOG_DIR' => 'ログディレクトリ',
    'LBL_SITECFG_SESSION_PATH' => 'セションディレクトリパス<br> (書き込み可である必要があります)',
    'LBL_SITECFG_SITE_SECURITY' => '高度なサイト セキュリティ',
    'LBL_SITECFG_SUGAR_UP_DIRECTIONS' => 'これを有効にすると、システムは定期的にインストールに関する匿名の統計情報を送信し、使用パターンの理解と製品の改善に役立ちます。 この情報に応じて、管理者は新しいバージョンまたは更新プログラムが利用可能になったときに更新通知を受け取ります。',
    'LBL_SITECFG_SUGAR_UP' => 'SuiteCRM の更新を有効にしますか？',
    'LBL_SITECFG_SUGAR_UPDATES' => 'Suiteアップデート設定',
    'LBL_SITECFG_TITLE' => 'サイト設定',
    'LBL_SITECFG_URL' => 'SuiteインスタンスURL',
    'LBL_SITECFG_USE_DEFAULTS' => 'デフォルトを使用?',
    'LBL_START' => '最初',
    'LBL_STEP' => 'ステップ',
    'LBL_TITLE_WELCOME' => 'SuiteCRMへようこそ',
    'LBL_WELCOME_1' => 'このインストーラはSuiteCRMデータベーステーブルを作成し、必要な変数を設定します。全プロセスを完了するのに必要な時間は10分程度です。',
    'LBL_WELCOME_2' => 'インストールのヘルプは SuiteCRM を訪れて<a href="https://suitecrm.com/suitecrm/forum/suite-forum" target="_blank"> サポート フォーラム</a> を参照してください。',
    'LBL_WELCOME_CHOOSE_LANGUAGE' => '言語の選択してください',
    'LBL_WELCOME_SETUP_WIZARD' => 'セットアップウィザード',
    'LBL_WELCOME_TITLE_WELCOME' => 'SuiteCRMへようこそ',
    'LBL_WELCOME_TITLE' => 'SuiteCRMセットアップウィザード',
    'LBL_WIZARD_TITLE' => 'SuiteCRM セットアップ ウィザード: ステップ ',
    'LBL_YES' => 'はい',
);
