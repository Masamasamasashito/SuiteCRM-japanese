<?php
/**
 * ç
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
    'LBL_BASIC_SEARCH' => 'クイック フィルタ',
    'LBL_ADVANCED_SEARCH' => '高度なフィルタ',
    'LBL_BASIC_TYPE' => '基本的な種類',
    'LBL_ADVANCED_TYPE' => '高度な種類',
    'LBL_SYSOPTS_2' => 'SuiteCRMインスタンスで使用するデータベースの種類を指定してください。',
    'LBL_SYSOPTS_DB' => 'データベースタイプの指定',
    'LBL_SYSOPTS_DB_TITLE' => 'データベースタイプ',
    'LBL_SYSOPTS_ERRS_TITLE' => '次へ進む前に以下のエラーを修正してください:',
    'ERR_DB_VERSION_FAILURE' => 'データベースのバージョンを確認できません。',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'SuiteCRM管理者のユーザーIDを入力してください。 ',
    'ERR_ADMIN_PASS_BLANK' => 'SuiteCRM管理者のパスワードを入力してください。',

    'ERR_CHECKSYS' => '整合性チェックの際にエラーが検出されました。SuiteCRMを正常に動作させるため、以下にリストされた問題を解決し、再チェックボタンを押下するか、インストールをやり直してください。',
    'ERR_CHECKSYS_CURL' => '見つかりません: SuiteCRMスケジューラの機能は制限付きで動作します。',
    'ERR_CHECKSYS_IMAP' => '見つかりません: 着信Eメールとキャンペーン(Eメール) を利用するためにはIMAPライブラリが必要です。この２つは動作しません。',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (これを設定 ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M以上に設定してください。)',
    'ERR_CHECKSYS_NOT_WRITABLE' => '警告: 書き込み不可',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'このPHPバージョンはサポートされません。SuiteCRMがサポートするバージョンをインストールしてください。リリースノートなどのサポートプラットフォーム一覧を参照ください。このPHPバージョンは',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'このIISのバージョンはサポートされません。SuiteCRMがサポートするバージョンをインストールしてください。サポートされるISSバージョンについてはリリースノートなどのサポートプラットフォーム一覧を参照ください。このIISバージョンは',
    'ERR_CHECKSYS_FASTCGI' => 'PHP用のFastCGIマッピングが使用されていません。SuiteCRMがサポートするバージョンをインストールし設定する必要があります。サポートされるバージョンについてはリリースノートなどのサポートプラットフォーム一覧を参照ください。詳細については<a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a>をご覧ください。',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'IIS/FastCGI SAPIを適切に未知いるためには、php.iniファイルで fastcgi.logging を 0 に設定してください。',
    'LBL_DB_UNAVAILABLE' => 'データベースが利用不可能です。',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'データベースのサポートレイヤが見つかりません。MySQL、MS SQL Server、Oracleなどのデータベースのドライバが適切にインストールされていることを確認してください。お使いのPHPのバージョンによっては、php.iniファイルの当該エクステンションの行のコメントをはずすか、PHPをコンパイルし直す必要があります。データベースをサポートする詳しい方法についてはPHPのマニュアルを参照ください。',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'XMLパーサライブラリに関連する機能が見つかりません。お使いのPHPのバージョンによっては、php.iniファイルの当該エクステンションの行のコメントをはずすか、PHPをコンパイルし直す必要があります。データベースをサポートする詳しい方法についてはPHPのマニュアルを参照ください。',
    'ERR_CHECKSYS_MBSTRING' => 'マルチバイトストリングをサポートするエクステンション（mbstring）が見つかりません。エクステンションがインストールされていないか、PHPがコンパイルされる際にmbstringモジュールが有効になっていない可能性があります。mbstringを有効にする方法についてはPHPのマニュアルを参照ください。',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'configファイルが存在しますが、書き込みができません。書き込みが可能になるように処理をしてください。OSに拠りますが、chmod 766などのパーミッションを変更するコマンドを実行したり、当該ファイルのプロパティで読み取り専用のチェックをはずす必要があります。',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => '設定は既存のファイルを上書きしますが、書き込み権限がありません。ファイルを書き込み可能にするために必要な手順に従って実施してください。オペレーティング システムによりますが、 chmod 766 を実行してアクセス許可を変更するか、右クリックしてプロパティにアクセスし読み取り専用のチェック ボックスをオフにする必要があります。',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'customディレクトリが存在しますが、書き込みができません。書き込みが可能になるように処理をしてください。OSに拠りますが、chmod 766などのパーミッションを変更するコマンドを実行したり、当該ファイルのプロパティで読み取り専用のチェックをはずす必要があります。',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "以下にリストされたディレクトリまたはファイルは書き込みができません。書き込みが可能になるように処理をしてください。OSに拠りますが、chmod 766などのパーミッションを変更するコマンドを実行したり、当該ファイルのプロパティで読み取り専用のチェックをはずす必要があります。",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => '設定の上書き',
    'ERR_CHECKSYS_SAFE_MODE' => 'Safe ModeがOnになっています（php.iniでOffに設定することができます）',
    'ERR_CHECKSYS_ZLIB' => '見つかりません: zlib圧縮はSuiteCRMのパフォーマンスを大きく向上させます。',
    'ERR_CHECKSYS_ZIP' => 'ZIPサポートが見つかりません：圧縮ファイルを処理するためにZIPサポートが必要です。',
    'ERR_CHECKSYS_PCRE' => 'PCRE ライブラリが見つかりません: SuiteCRM は Perl スタイルの正規表現パターン一致を処理するために PCRE ライブラリを必要とします。',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE ライブラリ バージョン: SuiteCRM は Perl スタイルの正規表現パターン一致を処理するために PCRE ライブラリ 7.0 以上を必要とします。',
    'ERR_DB_ADMIN' => '入力されたデータベースの管理者ユーザー名またはパスワードが不正なため、データベースとの接続を確立できません。正しいユーザー名とパスワードを入力してください。（エラー:',
    'ERR_DB_ADMIN_MSSQL' => '入力されたデータベースの管理者ユーザー名またはパスワードが不正なため、データベースとの接続を確立できません。正しいユーザー名とパスワードを入力してください。',
    'ERR_DB_EXISTS_NOT' => '指定されたデータベースは存在しません。',
    'ERR_DB_EXISTS_WITH_CONFIG' => '設定データのあるデータベースが既に存在します。選択したデータベースのインストールを実行するにはインストールを再実行し、「既存のSuiteCRMテーブルを削除して新しく作成しなおしますか?」を選択してください。アップグレードするには、管理コンソールのアップグレード ウィザードを使用してください。 <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new"> こちらにある </a>アップグレードに関するドキュメントをお読みください。',
    'ERR_DB_EXISTS' => '指定されたデータベース名は既に存在します。同一名称で同じデータベースは作成できません。',
    'ERR_DB_EXISTS_PROCEED' => '指定されたデータベース名は既に存在します。1. キャンセルボタンを押下してデータベースを新規に作成を選択するか、2. 許可を押下してこのまま進み、データベースを削除するか、のどちらかを選択できます。<strong>後者の場合、すべてのテーブルとデータが削除されます。</strong>',
    'ERR_DB_HOSTNAME' => 'ホスト名は空欄にできません。',
    'ERR_DB_INVALID' => '不正なデータベースタイプが選択されています。',
    'ERR_DB_LOGIN_FAILURE' => '入力されたデータベースのユーザー名もしくはパスワードが不正なため、データベースへの接続が確立できませんでした。正しいユーザー名とパスワードを入力してください。',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => '入力されたデータベースのユーザー名もしくはパスワードが不正なため、データベースへの接続が確立できませんでした。正しいユーザー名とパスワードを入力してください。',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => '入力されたデータベースのユーザー名もしくはパスワードが不正なため、データベースへの接続が確立できませんでした。正しいユーザー名とパスワードを入力してください。',
    'ERR_DB_MYSQL_VERSION' => 'MySQL のバージョン (%s) は、SuiteCRM によってサポートされていません。SuiteCRM アプリケーションと互換性があるバージョンをインストールする必要があります。サポートされているバージョンについて MySQL リリース ノートの互換性マトリックスを参照してください。',
    'ERR_DB_NAME' => 'データベース名は空欄にできません。',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "「\\」、「/」、「.」を含むデータベース名を使用することはできません。",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "「\"」、「&#39;」、「*」、「/」、「\\」、「?」、「:」、「<」、「>」、「-」を含むデータベース名を使用することはできません。",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "データベース名は英数文字と記号 '#'、'_'、'$' のみで構成されます",
    'ERR_DB_PASSWORD' => 'データベース管理者のパスワードが一致しません。再度入力してください。',
    'ERR_DB_PRIV_USER' => 'データベース管理者のユーザー名を入力してください。初期の接続時にユーザーを利用します。',
    'ERR_DB_USER_EXISTS' => 'SuiteCRMデータベースのユーザーは既に存在します。同一名称でユーザーを作成できません。新しいユーザー名を入力してください。',
    'ERR_DB_USER' => 'SuiteCRMデータベースの管理者ユーザーを入力してください。',
    'ERR_DBCONF_VALIDATION' => '次へ進む前に以下のエラーを修正してください:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'データベース ユーザーのパスワードが一致しません。再度入力してください。',
    'ERR_ERROR_GENERAL' => '以下のエラーが見つかりました:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'ファイルを削除できません:',
    'ERR_LANG_MISSING_FILE' => 'ファイルが見つかりません:',
    'ERR_LANG_NO_LANG_FILE' => 'include/language内に言語パックが見つかりません:',
    'ERR_LANG_UPLOAD_1' => 'アップロードに問題がありました。再度実行してください。',
    'ERR_LANG_UPLOAD_2' => '言語パックはZIPファイルである必要があります。',
    'ERR_LANG_UPLOAD_3' => 'PHPは仮ファイルをupgradeディレクトリへ移動できませんでした。',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => '指定されたログディレクトリは正しくありません。',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => '指定されたログディレクトリは書き込み不可です。',
    'ERR_NO_DIRECT_SCRIPT' => '直接スクリプトを実行できません。',
    'ERR_NO_SINGLE_QUOTE' => 'シングルクォーテーションマークは使用できません:',
    'ERR_PASSWORD_MISMATCH' => 'SuiteCRM管理者のパスワードが一致しません。再度入力してください。',
    'ERR_PERFORM_CONFIG_PHP_1' => '<span class=stop>config.php</span>ファイルに書き込みできません。',
    'ERR_PERFORM_CONFIG_PHP_2' => '以下に表示されている設定情報を記述したconfig.phpを手動で作成することでインストールを続行できますが、<strong>次のステップに進む前にconfig.phpを作成する</strong>必要があります。',
    'ERR_PERFORM_CONFIG_PHP_3' => 'config.phpファイルは作成済みですか?',
    'ERR_PERFORM_CONFIG_PHP_4' => '警告: config.phpファイルに書き込みできませんでした。config.phpがあるかどうか確認してください。',
    'ERR_PERFORM_HTACCESS_1' => '書き込み不可：',
    'ERR_PERFORM_HTACCESS_2' => 'ファイルに書き込みできません。',
    'ERR_PERFORM_HTACCESS_3' => 'ログファイルをブラウザからのアクセスからセキュアな状態にしたい場合は、以下のコードを記述した .htaccessファイルをログディレクトリ内に作成してください:',
    'ERR_PERFORM_NO_TCPIP' => '<b>インターネットの接続が検出できませんでした。</b>インターネットに接続されている場合は<a href="http://www.suitecrm.com/">http://www.suitecrm.com/</a>にアクセスして登録を行ってください。SuiteCRMの用途などをお知らせいただくことによって、今後ご要望に沿ったプロダクトを提供するための参考とさせていただきます。',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => '指定されたセションディレクトリは正しくありません。',
    'ERR_SESSION_DIRECTORY' => '指定されたセションディレクトリは書き込み不可です。',
    'ERR_SESSION_PATH' => 'カスタムセションディレクトリを使用したい場合は、ディレクトリの指定が必要です。',
    'ERR_SI_NO_CONFIG' => 'config_si.phpがドキュメントルートにないか、config.php内で$sugar_config_siが設定されていません。',
    'ERR_SITE_GUID' => 'カスタムアプリケーションIDを使用したい場合はIDを指定する必要があります。',
    'ERROR_SPRITE_SUPPORT' => "現在、GD ライブラリを見つけることができません。そのため CSS のスプライト機能を使用することができません。",
    'ERR_UPLOAD_MAX_FILESIZE' => '警告: PHPの設定を、最低でも20MBのファイルのアップロードを許可するように変更する必要があります。',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'アップロードファイルサイズ',
    'ERR_URL_BLANK' => 'SuiteCRMインスタンスのURLを入力してください。',
    'ERR_UW_NO_UPDATE_RECORD' => 'インストール情報が確認できません:',
    'ERROR_MANIFEST_TYPE' => 'マニフェストファイルはパッケージタイプを指定する必要があります。',
    'ERROR_PACKAGE_TYPE' => 'マニフェストファイルは不明のパッケージタイプを指定しています。',
    'ERROR_VERSION_INCOMPATIBLE' => 'アップロードされたファイルはこのSuiteCRMのバージョンと互換性がありません。',

    'LBL_BACK' => '戻る',
    'LBL_CANCEL' => 'キャンセル',
    'LBL_ACCEPT' => '許可',
    'LBL_CHECKSYS_CACHE' => 'Cacheサブディレクトリへの書き込み',
    'LBL_DROP_DB_CONFIRM' => '指定されたデータベース名は既に存在します。1. キャンセルボタンを押下してデータベースを新規に作成を選択するか、2. 許可を押下してこのまま進み、データベースを削除するか、のどちらかを選択できます。<strong>後者の場合、すべてのテーブルとデータが削除されます。</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'コンポーネント',
    'LBL_CHECKSYS_CONFIG' => 'SuiteCRM設定ファイル (config.php) への書き込み',
    'LBL_CHECKSYS_CURL' => 'cURLモジュール',
    'LBL_CHECKSYS_CUSTOM' => 'カスタムディレクトリへの書き込み',
    'LBL_CHECKSYS_DATA' => 'Dataサブディレクトリへの書き込み',
    'LBL_CHECKSYS_IMAP' => 'IMAPモジュール',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Stringsモジュール',
    'LBL_CHECKSYS_MEM_OK' => 'OK (無制限)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (無制限)',
    'LBL_CHECKSYS_MEM' => 'PHP Memory Limit >=',
    'LBL_CHECKSYS_MODULE' => 'Modulesサブディレクトリ、ファイルへの書き込み',
    'LBL_CHECKSYS_NOT_AVAILABLE' => '問題あり',
    'LBL_CHECKSYS_OK' => '了解',
    'LBL_CHECKSYS_PHP_INI' => '<b>備考: </b> PHP設定ファイル (php.ini) は以下の場所にあります:',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver',
    'LBL_CHECKSYS_PHPVER' => 'PHPバージョン',
    'LBL_CHECKSYS_IISVER' => 'IISバージョン',
    'LBL_CHECKSYS_RECHECK' => '再チェック',
    'LBL_CHECKSYS_STATUS' => 'ステータス',
    'LBL_CHECKSYS_TITLE' => 'システムチェック',
    'LBL_CHECKSYS_XML' => 'XMLのパース',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB圧縮モジュール',
    'LBL_CHECKSYS_ZIP' => 'ZIP処理モジュール',
    'LBL_CHECKSYS_PCRE' => 'PCRE ライブラリ',
    'LBL_CHECKSYS_FIX_FILES' => '進める前に以下のファイルやディレクトリを確定してください:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => '処理を進める前に、以下のモジュール内のディレクトリとファイルの問題を修正してください。:',
    'LBL_CHECKSYS_UPLOAD' => '書き込み可能なアップロード ディレクトリ',
    'LBL_CLOSE' => '完了',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => '作成',
    'LBL_CONFIRM_DB_TYPE' => 'データベースタイプ',
    'LBL_CONFIRM_NOT' => '未',
    'LBL_CONFIRM_TITLE' => '設定の確認',
    'LBL_CONFIRM_WILL' => 'を',
    'LBL_DBCONF_DB_DROP' => 'テーブルの削除',
    'LBL_DBCONF_DB_NAME' => 'データベース名',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRMデータベースのユーザー パスワード',
    'LBL_DBCONF_DB_PASSWORD2' => 'SuiteCRMデータベースのユーザー パスワードの再入力',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM データベース ユーザー',
    'LBL_DBCONF_SUGAR_DB_USER' => 'SuiteCRM データベース ユーザー',
    'LBL_DBCONF_DB_ADMIN_USER' => 'データベース管理者のユーザー名',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'データベース管理者のパスワード',
    'LBL_DBCONF_COLLATION' => '照合順序', // PR 6475
    'LBL_DBCONF_CHARSET' => '文字コードセット', // PR 6475
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => '高度なデータベースの設定', // PR 6475
    'LBL_DBCONF_DEMO_DATA' => 'データベースにデモデータを追加しますか?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'デモデータの選択（言語）',
    'LBL_DBCONF_HOST_NAME' => 'ホスト名',
    'LBL_DBCONF_HOST_INSTANCE' => 'ホスト インスタンス',
    'LBL_DBCONFIG_SECURITY' => 'セキュリティ確保のため、SuiteCRMデータベースにのみ接続する専用のユーザーを指定することができます。このユーザーはSuiteCRMデータベースへの書き込み、更新と読み込みができる必要があります。',
    'LBL_DBCONFIG_PROVIDE_DD' => '既存ユーザーを指定',
    'LBL_DBCONFIG_CREATE_DD' => '作成するためにユーザーを定義',
    'LBL_DBCONFIG_SAME_DD' => '管理者ユーザーと同じ',
    'LBL_DBCONF_TITLE' => 'データベース設定',
    'LBL_DBCONF_TITLE_NAME' => 'データベース名の入力',
    'LBL_DBCONF_TITLE_USER_INFO' => 'データベース ユーザーの情報',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'パスワード',
    'LBL_DISABLED_DESCRIPTION_2' => '変更後、インストールを開始するには「開始」をクリックしてください。<i>インストール完了後は「installer_locked」を「true」にする必要があります。</i>',
    'LBL_DISABLED_DESCRIPTION' => 'インストーラは実行済みです。セキュリティ上の理由から再インストールの実行を無効にしています。再インストールしたい場合はconfig.phpファイル内の「installer_locked」を以下のように「false」に変更してください:',
    'LBL_DISABLED_HELP_1' => 'SuiteCRMインストールのヘルプは、SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://suitecrm.com/suitecrm/forum/suite-forum',
    'LBL_DISABLED_HELP_2' => 'サポートフォーラムでご覧いただけます。',
    'LBL_DISABLED_TITLE_2' => 'SuiteCRMはインストール不可に設定されています',
    'LBL_HELP' => 'ヘルプ',
    'LBL_INSTALL' => 'インストール',
    'LBL_INSTALL_TYPE_TITLE' => 'インストールオプション',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'インストールタイプの選択',
    'LBL_INSTALL_TYPE_TYPICAL' => '<b>通常インストール</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => '<b>カスタムインストール</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'インストールのための最小限の情報を入力します。初めてインストールするユーザー向けです。',
    'LBL_INSTALL_TYPE_MSG3' => 'インストールのためのその他のオプションを入力してください。ほとんどの設定はインストール後に管理メニューから指定することも可能です。インストール経験のあるユーザー向けです。',
    'LBL_LANG_1' => 'SuiteCRMでデフォルトの言語（米国英語）以外を用いる場合、ここで言語パックをアップロードしてインストールすることができます。後でSuiteCRM管理メニューからインストールすることも可能です。',
    'LBL_LANG_BUTTON_COMMIT' => 'インストール',
    'LBL_LANG_BUTTON_REMOVE' => '削除',
    'LBL_LANG_BUTTON_UNINSTALL' => 'アンインストール',
    'LBL_LANG_BUTTON_UPLOAD' => 'アップロード',
    'LBL_LANG_NO_PACKS' => 'なし',
    'LBL_LANG_PACK_INSTALLED' => '以下の言語パックがインストール済みです:',
    'LBL_LANG_PACK_READY' => '以下の言語パックがインストール待ちです:',
    'LBL_LANG_SUCCESS' => '言語パックは正しくアップロードされました。',
    'LBL_LANG_TITLE' => '言語パック',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'SuiteCRMをインストールしています。数分かかる可能性があります。',
    'LBL_LANG_UPLOAD' => '言語パックをアップロード',
    'LBL_LICENSE_ACCEPTANCE' => 'ライセンス確認',
    'LBL_LICENSE_CHECKING' => '整合性のチェックをしています。',
    'LBL_LICENSE_CHKENV_HEADER' => '環境をチェック中',
    'LBL_LICENSE_CHKDB_HEADER' => 'データベースの認証を確認しています。',
    'LBL_LICENSE_CHECK_PASSED' => 'システムコンポーネントの整合性を確認できました。',
    'LBL_CREATE_CACHE' => 'インストールの準備中...',
    'LBL_LICENSE_REDIRECT' => '移動します',
    'LBL_LICENSE_I_ACCEPT' => '同意します',
    'LBL_LICENSE_PRINTABLE' => '印刷用',
    'LBL_PRINT_SUMM' => '概要を印刷',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRMライセンス',

    'LBL_LOCALE_NAME_FIRST' => '太郎',
    'LBL_LOCALE_NAME_LAST' => 'デモ',
    'LBL_LOCALE_NAME_SALUTATION' => '先生',

    'LBL_ML_ACTION' => 'アクション',
    'LBL_ML_DESCRIPTION' => '詳細',
    'LBL_ML_INSTALLED' => 'インストール日時',
    'LBL_ML_NAME' => '名前',
    'LBL_ML_PUBLISHED' => '公開日',
    'LBL_ML_TYPE' => 'タイプ',
    'LBL_ML_UNINSTALLABLE' => 'アンインストール',
    'LBL_ML_VERSION' => 'バージョン',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver for PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli 拡張モジュール)',
    'LBL_NEXT' => '次へ',
    'LBL_NO' => 'いいえ',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'サイト管理者のパスワードを設定しています',
    'LBL_PERFORM_CONFIG_PHP' => 'SuiteCRM設定ファイルを作成しています',
    'LBL_PERFORM_CREATE_DB_1' => '<b>データベースを作成中</b>',
    'LBL_PERFORM_CREATE_DB_2' => '<b>上に</b>',
    'LBL_PERFORM_CREATE_DB_USER' => 'データベースのユーザー名とパスワードを作成しています...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'デフォルトのSuiteCRMデータを作成しています',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'デフォルトのスケジューラーを作成しています',
    'LBL_PERFORM_DEFAULT_USERS' => 'デフォルトのユーザーを作成しています',
    'LBL_PERFORM_DEMO_DATA' => 'デモデータをデータベーステーブルに追加しています (少々お待ちください) ...',
    'LBL_PERFORM_DONE' => '完了<br>',
    'LBL_PERFORM_FINISH' => '完了',
    'LBL_PERFORM_OUTRO_1' => 'SuiteCRM',
    'LBL_PERFORM_OUTRO_2' => 'のインストールが完了しました。',
    'LBL_PERFORM_OUTRO_3' => '実行時間:',
    'LBL_PERFORM_OUTRO_4' => '秒',
    'LBL_PERFORM_OUTRO_5' => 'メモリ使用: 約',
    'LBL_PERFORM_OUTRO_6' => 'バイト',
    'LBL_PERFORM_SUCCESS' => '成功！',
    'LBL_PERFORM_TABLES' => 'SuiteCRMアプリケーションのテーブル、監査テーブル、関連メタテーブルを作成しています。',
    'LBL_PERFORM_TITLE' => 'セットアップ実行',
    'LBL_PRINT' => '印刷',
    'LBL_REG_CONF_1' => '下の短いフォームにお答えください。SuiteCRMより、製品に関するご案内、トレーニングクラスに関するニュース、特別なイベントへのご招待などをお送りします。ここで得られた情報は、第三者に販売、貸与、もしくは配布しません。',
    'LBL_REG_CONF_3' => 'ご登録ありがとうございました。完了ボタンをクリックし、SuiteCRMにログインしてください。初回は 「admin」 と、インストール時に設定したパスワードでログインいただけます。',
    'LBL_REG_TITLE' => '登録',
    'LBL_REQUIRED' => '* 必須項目',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM管理者のユーザー名',
    'LBL_SITECFG_ADMIN_PASS_2' => 'SuiteCRM管理者のユーザー パスワードを再入力してください。',
    'LBL_SITECFG_ADMIN_PASS' => 'SuiteCRM管理者のユーザー パスワード',
    'LBL_SITECFG_APP_ID' => 'アプリケーションID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => '選択した場合、自動生成されるアプリケーションIDを上書きするIDを指定する必要があります。このIDはSuiteCRMインスタンスが他のインスタンスに使われないようにする識別子となります。SuiteCRMインスタンスをクラスタ構成にする場合には同一のIDを共有する必要があります。',
    'LBL_SITECFG_CUSTOM_ID' => 'カスタムアプリケーションID',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => '選択した場合、デフォルトのログディレクトリを上書きするディレクトリを指定する必要があります。ログファイルの場所によらず、Webブラウザによってログファイルに直接アクセスしても.htaccessによってリダレクトされます。',
    'LBL_SITECFG_CUSTOM_LOG' => 'カスタムログディレクトリを使用',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => '選択した場合、SuiteCRMのセション情報を保持するデレクトリを指定する必要があります。共有サーバーなどでセション情報の脆弱性を秘匿することができます。',
    'LBL_SITECFG_CUSTOM_SESSION' => 'SuiteCRM用のカスタムセションディレクトリを使用',
    'LBL_SITECFG_FIX_ERRORS' => '<b>進む前に以下のエラーを修復してください：</b>',
    'LBL_SITECFG_LOG_DIR' => 'ログディレクトリ',
    'LBL_SITECFG_SESSION_PATH' => 'セションディレクトリパス<br> (書き込み可である必要があります)',
    'LBL_SITECFG_SITE_SECURITY' => 'セキュリティオプションの選択',
    'LBL_SITECFG_SUGAR_UP_DIRECTIONS' => '選択した場合、システムは定期的にアプリケーションの更新ファイルを確認します。',
    'LBL_SITECFG_SUGAR_UP' => '自動的にアップデートをチェック?',
    'LBL_SITECFG_TITLE' => 'サイト設定',
    'LBL_SITECFG_TITLE2' => 'SuiteCRMインスタンスの定義',
    'LBL_SITECFG_SECURITY_TITLE' => 'サイトセキュリティ',
    'LBL_SITECFG_URL' => 'SuiteCRMインスタンスURL',
    'LBL_SITECFG_ANONSTATS' => '匿名の利用統計情報を送信?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'SuiteCRM社にインストールの匿名統計情報を送ります。この情報はよりよい製品の開発と改善に利用されます。',
    'LBL_SITECFG_URL_MSG' => 'インストール後にSuiteCRMインスタンスにアクセスするためのURLを入力してください。このURLはSuiteCRMアプリケーション全体のベースURLにもなります。URLはWebサーバーかホスト名、もしくはIPアドレスを含む必要があります。',
    'LBL_SITECFG_SYS_NAME_MSG' => 'このシステムの名前を入力してください。この名前はブラウザの上部バーに表示されます。',
    'LBL_SITECFG_PASSWORD_MSG' => 'インストール後、SuiteCRMインスタンスにログインするためにはSuiteCRM管理者のユーザー(ユーザー名=admin) を使用する必要があります。この管理者のパスワードを入力してください。このパスワードは最初のログイン後に変更可能です。',
    'LBL_SITECFG_COLLATION_MSG' => 'お使いのシステムの照合 (ソート) 設定を選択します。この設定を使用する特定の言語でテーブルが作成されます。あなたの言語が特別必要としない場合、設定には既定値を使用してください。',
    'LBL_SPRITE_SUPPORT' => 'スプライトのサポート',
    'LBL_SYSTEM_CREDS' => 'システム認証情報',
    'LBL_SYSTEM_ENV' => 'システム環境',
    'LBL_SHOW_PASS' => 'パスワードの表示',
    'LBL_HIDE_PASS' => 'パスワードを隠す',
    'LBL_HIDDEN' => '<i>（非表示）</i>',
    'LBL_STEP1' => '手順 1 / 2 - インストール前の要件',
    'LBL_STEP2' => '手順 2 / 2 - 設定',
    'LBL_STEP' => 'ステップ',
    'LBL_TITLE_WELCOME' => 'SuiteCRMへようこそ ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'インストールの準備はできていますか？',
    'REQUIRED_SYS_COMP' => '必要なシステムコンポーネント',
    'REQUIRED_SYS_COMP_MSG' =>
        '始める前に次のシステム コンポーネントがサポートしているバージョンであることを確認してください: <br><ul><li>データベース/データベース管理システム (例: MariaDB、MySQL または SQL Server)</li> <li>We b サーバー (Apache, IIS)</li></ul> インストールする SuiteCRM バージョンに対する互換性のあるシステム コンポーネントのリリース ノートにある互換性マトリックスを参照してください。<br>',
    'REQUIRED_SYS_CHK' => '初期のシステムチェック',
    'REQUIRED_SYS_CHK_MSG' =>
        'インストール プロセスを開始するときにシステムが正しく構成されている、すべてに必要なコンポーネントを確認するために SuiteCRM ファイルにある web サーバー上システム チェックで行います正常にインストールを完了します。<br><br>システムは、すべて次のチェック: <br><ul><li><b>PHP のバージョン</b> &#8211; アプリケーションと互換性がある必要があります</li> <li><b>セッション変数</b> &#8211; 作業する必要があります正しく</li> <li><b>MB の文字列</b> &#8211; インストールし、php.ini で有効にする必要があります</li> <li><b>データベース サポート</b> &#8211; MariaDB、MySQL または SQL サーバーに存在する必要があります</li> <li><b>Config.php</b> &#8211; する必要があります ファイルを書き込み可能に適切なアクセス許可が必要があり、</li> <li>以下の SuiteCRM ファイルを書き込み可能にする必要があります: <ul><li><b>/カスタム</li> <li>/キャッシュ</li> <li>/モジュール</li> < li>/アップロード</b></li></ul></li></ul> チェックが失敗した場合、インストールを続行することはできません。                                   なぜ、あなたのシステムがチェックを通過しなかった説明する、エラー メッセージが表示されます。                                  任意の必要な変更を行った後は、インストールを続行してシステム チェックを受けることができます。<br>',


    'REQUIRED_INSTALLTYPE' => '通常またはカスタムインストール',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'システムチェックの完了後、通常またはカスタムインストールのどちらかを選択できます。<br><br><br /><b>通常</b>および<b>カスタム</b>インストールのどちらにおいても下記が必要になります：<br><br /><ul><br /><li> <b>SuiteCRMデータを保持するデータベースのタイプ</b> <ul><li>サポートされるデータベース タイプ：MySQL、MS SQL Server、Oracle<br><br></li></ul></li><br /><li> <b>データベースが動作するサーバーのマシン（ホスト）名</b><br /><ul><li>データベースがWebサーバーと同じローカル コンピュータにある場合はこの値は<i>localhost</i>となります。<br><br></li></ul></li><br /><li><b>SuiteCRMデータを保持するデータベース名</b><br /><ul><br /><li> 既にデータベースが存在する場合、それと同じ名前を入力すると、インストール中にデータベースは削除されます。</li><br /><li> 既存のデータベースが存在しない場合、インストール処理中にこの名前で新たなデータベースが作成されます。<br><br></li><br /></ul></li><br /><li><b>データベース管理者のユーザー名とパスワード</b> <ul><li>データベース管理者はテーブルやユーザーを作成し、データベースへの書き込みができる必要があります。</li><li>データベースがローカル コンピュータになく、あなたがデータベースで管理者でない場合は、データベース管理者に連絡してください。<br><br></li></ul></li><br /><li> <b>SuiteCRMデータベースのみに使われるデータベース ユーザー</b><ul><br /><li> ユーザーはデータベース管理者でも構いませんし、既存のデータベースの管理者ユーザーでも構いません。</li><br /><li> 新しいユーザーを作成する場合は、新しいユーザー名とパスワードを入力してください。インストール処理中に作成されます。</li><br /></ul></ul><p><br /><b>カスタム</b>セットアップの場合、追加で下記が必要になります：<br><br /> <ul><br /> <li> <b>インストール後にSuiteCRMインスタンスにアクセスするためのURL </b>このURLはWebサーバーのマシン名もしくはIPアドレスになります。<br><br></li><br /><li> [オプション] <b>セションディレクトリのパス</b>共有サーバーなどでセション情報を脆弱性から守るため、セション情報を特別なディレクトリに格納する場合に指定します。<br><br></li><br /><li> [オプション] <b>カスタムログディレクトリのパス</b>デフォルトのログディレクトリを上書きする場合に指定します。<br><br></li><br /><li> [オプション] <b>アプリケーションID</b>自動生成されるアプリケーションIDを上書きしたい場合に指定します。このIDは当インスタンスを他と区別するために用いられます。<br><br></li><br /><li>このロケールで一般的に用いられる<b>キャラクタセット</b><br><br></li></ul>より詳細な情報についてはインストールガイドをご覧下さい。                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'インストールを進める前に以下の重要情報をお読みください。この情報は、インストールの準備が出来ているかどうかを判断することに役立ちます。',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>言語の選択</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'セットアップウィザード',
    'LBL_WIZARD_TITLE' => 'SuiteCRMセットアップウィザード',
    'LBL_YES' => 'はい',

    'LBL_PATCHES_TITLE' => '最新パッチのインストール',
    'LBL_MODULE_TITLE' => '言語パックのインストール',
    'LBL_PATCH_1' => 'このステップを飛ばしたい場合は次へをクリックしてください。',
    'LBL_PATCH_TITLE' => 'システムパッチ',
    'LBL_PATCH_READY' => '以下のパッチがインストール待ちです:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRMは重要情報を格納するためにWebサーバーに接続中にPHPセションを利用しています。このPHPインストレーションはセションが正しく設定されていません。<br><br>もっとも一般的な設定ミスは、<b>&#39;session.save_path&#39;</b>ディレクティブが正しいディレクトリを指していないことです。<br><br>php.iniの<a target=_new href=&#39;http://us2.php.net/manual/en/ref.session.php&#39;>PHPの設定</a>を見直してください。",
    'LBL_SESSION_ERR_TITLE' => 'PHPセション設定エラー',
    'LBL_SYSTEM_NAME' => 'システム名',
    'LBL_COLLATION' => '照合順序の設定',
    'LBL_REQUIRED_SYSTEM_NAME' => 'SuiteCRMインスタンスのシステム名を入力してください。',
    'LBL_PATCH_UPLOAD' => 'ローカルコンピュータからパッチを選択してください。',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHPのバージョンは5以上である必要があります。',
    'LBL_MINIMUM_PHP_VERSION' => 'PHPのバージョンは5.1.0以上である必要があります。（5.2.x以上推奨）',
    'LBL_YOUR_PHP_VERSION' => '(ご利用システムのPHPバージョンは',
    'LBL_RECOMMENDED_PHP_VERSION' => 'PHPのバージョンは5.2.x以上を推奨します。)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP下位互換モードが有効になっています。先に進めるためにzend.ze1_compatibility_modeをOffにセットしてください。',
    'LBL_STREAM' => 'PHP のストリームを使用する',

    'advanced_password_new_account_email' => array(
        'subject' => '新しい顧客情報',
        'type' => 'システム',
        'description' => 'このテンプレートはシステム管理者がユーザーに新しいパスワードを送信するときに使用されます。',
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>ここは顧客のユーザー名と仮のパスワード:</p><p>ユーザー名 : $contact_user_user_name </p><p>パスワード : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>上記のパスワードを使用してログインした後、あなた自身が選んだパスワードにリセットする必要があります。</p>   </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
ここは顧客のユーザー名と一時的なパスワード: 
ユーザー名: $contact_user_user_name
パスワード: $contact_user_user_hash

$config_site_url

上記のパスワードを使用してログインした後、あなた自身が選んだパスワードにリセットする必要があります。',
        'name' => 'システムで生成されたパスワードをメール',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'あなたのアカウントのパスワードをリセット',
        'type' => 'システム',
        'description' => "このテンプレートは、ユーザーのアカウントのパスワードをリセットする際にクリックするリンクをユーザーに送信するために使用します。",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>最近 $contact_user_pwd_last_changed に要求されたアカウントのパスワードをリセットできます。 </p><p>リセットするには以下のリンクをクリックしてください:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
最近、 $contact_user_pwd_last_changed に要求されたアカウントのパスワードをリセットできます。 リセットするには以下のリンクをクリックしてください:

$contact_user_link_guid',
        'name' => '忘れたパスワードをメール',
    ),
    
    
    'two_factor_auth_email' => array(
        'subject' => '2段階認証',
        'type' => 'システム',
        'description' => "このテンプレートを使用して、2 要素認証のユーザー コードを送信します。",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>2 段階認証コードは <b>$code</b>。</p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '2段階認証コードは $code です。',
        'name' => '2段階認証Eメール',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => 'From(名前):',
    'LBL_FROM_ADDR' => 'From（アドレス）:',

    'LBL_WIZARD_SMTP_DESC' => 'メール アカウントを設定してください。このアカウントからは、レコードがアサインされた際の通知やユーザーの新パスワードの連絡などが送信されます。また、SuiteCRMから送信されるメールはこのアカウントから送信されます。',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Eメールプロバイダを選択:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo!メール',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'その他',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTPサーバー設定',
    'LBL_MAIL_SMTPSERVER' => 'SMTPサーバー名:',
    'LBL_MAIL_SMTPPORT' => 'SMTPポート番号:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP認証を使用？',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'SMTP over SSLかTLSを有効',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Eメールアドレス:',
    'LBL_GMAIL_SMTPPASS' => 'Gmailパスワード:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'ユーザーがメールを送信する際にこのアカウントを使用可能:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'このオプションが選択された場合、すべてのユーザーがこのアカウントを用いて通知や通知を送信することが可能になります。選択しない場合は、ユーザーが個別に送信アカウントを設定することでメールを送信することが可能です。',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo!メールパスワード:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo!メールID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchangeパスワード:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchangeユーザー名:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchangeサーバーポート:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchangeサーバー:',


    'LBL_MAIL_SMTPUSER' => 'SMTPユーザー名:',
    'LBL_MAIL_SMTPPASS' => 'SMTPパスワード:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => '名称設定',
    'LBL_WIZARD_SYSTEM_DESC' => 'システム名とロゴを設定してください。',
    'SYSTEM_NAME_WIZARD' => '名前:',
    'SYSTEM_NAME_HELP' => 'これはブラウザのタイトルバーに表示される名前です。',
    'NEW_LOGO' => '新たなロゴをアップロード（212×40）',
    'NEW_LOGO_HELP' => '画像のファイル形式は .png ファイルまたは .jpg のいずれでも可能です。高さの最大値は 170px、幅の最大値は 450px です。アップロードされた画像すべて、これらの最大サイズに調整されます。',
    'COMPANY_LOGO_UPLOAD_BTN' => 'アップロード',
    'CURRENT_LOGO' => '現在のロゴ',
    'CURRENT_LOGO_HELP' => 'このロゴは各画面の左上に表示されます。',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'シナリオ選択',
    'LBL_WIZARD_SCENARIO_DESC' => '要件に基づいて表示されたモジュールの構成を許します。それぞれのモジュールは管理ページを使用してインストール後に有効にできます。',
    'LBL_WIZARD_SCENARIO_EMPTY' => '設定ファイル(config.php)に現在の設定のシナリオがありません。',



    // System Local Settings


    'LBL_LOCALE_TITLE' => 'システムロケール設定',
    'LBL_WIZARD_LOCALE_DESC' => 'データを表示する形式を指定してください。ここで設定した内容はデフォルト値になりますが、ユーザーが個別に設定することも可能です。',
    'LBL_DATE_FORMAT' => '日付表示形式:',
    'LBL_TIME_FORMAT' => '時間表示形式:',
    'LBL_TIMEZONE' => 'タイムゾーン:',
    'LBL_LANGUAGE' => 'タブグループ言語:',
    'LBL_CURRENCY' => '通貨',
    'LBL_CURRENCY_SYMBOL' => '通貨記号:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 の通貨コード:',
    'LBL_NUMBER_GROUPING_SEP' => '1000の区切り文字',
    'LBL_DECIMAL_SEP' => '小数点シンボル',
    'LBL_NAME_FORMAT' => '名前フォーマット',
    'UPLOAD_LOGO' => 'お待ちください。ロゴをアップロードしています..',
    'ERR_UPLOAD_FILETYPE' => '許されていないファイルの種類です。jpegまたはpngをアップロードしてください。',
    'ERR_LANG_UPLOAD_UNKNOWN' => '不明なファイルのアップロード エラーが発生しました。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'ファイルはphp.iniのupload_max_filesizeで指定されたサイズを超えています。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => '\'ファイルは、HTMLのMAX_FILE_SIZEで指定されたサイズを超えています。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'ファイルは部分的にアップロードされました。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'ファイルはアップロードされませんでした。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => '一時フォルダが見つかりません。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'ディスクに書き込みが出来ません。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'PHP の拡張モジュールは、ファイルのアップロードを停止しました。PHP はどの拡張がファイルのアップロードの停止の原因になったかを確認する方法がありません。',

    'LBL_INSTALL_PROCESS' => 'インストールしています...',

    'LBL_EMAIL_ADDRESS' => 'メールアドレス:',
    'ERR_ADMIN_EMAIL' => '管理者のメール アドレスが正しくありません。',
    'ERR_SITE_URL' => 'サイトの URL が必要です。',

    'STAT_CONFIGURATION' => '関連を設定しています...',
    'STAT_CREATE_DB' => 'データベースを生成しています...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'デフォルト設定を生成しています...',
    'STAT_INSTALL_FINISH' => 'インストール完了...',
    'STAT_INSTALL_FINISH_LOGIN' => 'インストールが完了したら、<a href="%s"> ログインしてください...</a>',
    'LBL_LICENCE_TOOLTIP' => 'はじめにライセンスに同意してください',

    'LBL_MORE_OPTIONS_TITLE' => 'その他のオプション',
    'LBL_START' => '開始',
    'LBL_DB_CONN_ERR' => 'データベース エラー',
    'LBL_OLD_PHP' => '古いバージョンの PHP が検出されました!',
    'LBL_OLD_PHP_MSG' => 'SuiteCRM をインストールするために推奨される PHP のバージョンは %s です。<br />最低限必要となる PHP のバージョンは %s ですが、より新しいバージョンにおいてセキュリティ面でのバグ フィックスを含む、多くのバグ フィックスが行われているので、 推奨されません。<br />使用している PHP のバージョン %s は、EOLです: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />PHP のバージョンのアップグレードを検討してください。こちら<a href="http://php.net/migration70">http://php.net/migration70</a>に説明があります。 ',
    'LBL_OLD_PHP_OK' => '私はリスクを認識したうえで、続行を望みます。',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => '担当ユーザー',
    'LBL_DBCONFIG_MSG3_LABEL' => 'データベース名',
    'LBL_DBCONFIG_MSG3' => 'SuiteCRMインスタンスのデータを保持するデータベースの名前:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'ホスト名',
    'LBL_DBCONFIG_MSG2' => 'Web サーバーまたはデータベースが配置された (www.mydomain.com など)コンピューター (ホスト) の名前。ローカルにインストールする場合、パフォーマンス上の理由のための \'127.0.0.1\' よりも \' localhost\' を使用することをお勧めします。',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'SuiteCRMデータベースをセットアップするには、データベーステーブルとユーザーを作成でき、データベースへの書き込みができる管理者ユーザーのユーザー名とパスワードが必要です。'
);