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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'グループが特定できません。',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'オーナーが特定できません。',
    'ERR_UW_CONFIG_WRITE' => '新たなバージョン情報でconfig.phpを更新中にエラー。',
    'ERR_UW_CONFIG' => 'config.phpを書き込み可能にしてページを再ロードしてください。',
    'ERR_UW_DIR_NOT_WRITABLE' => 'ディレクトリが書き込み可能ではありません。',
    'ERR_UW_FILE_NOT_COPIED' => 'ファイルがコピーされませんでした。',
    'ERR_UW_FILE_NOT_DELETED' => 'パッケージの削除中に問題がありました。 ',
    'ERR_UW_FILE_NOT_READABLE' => 'ファイルが読み込めません。',
    'ERR_UW_FILE_NOT_WRITABLE' => 'ファイルが移動または書き込みできません: ',
    'ERR_UW_FLAVOR_2' => 'アップグレードフレーバー: ',
    'ERR_UW_FLAVOR' => 'SuiteCRMシステムフレーバー: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.logが作成（書き込み）出来ませんでした。SuiteCRMインストールディレクトリのパーミッションを確認してください。',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'php.iniファイルのmbstring.func_overloadの値を1以上に設定して、Webサーバーを再起動してください。',
    'ERR_UW_NO_FILE_UPLOADED' => 'ファイルを指定して再度実行してください。',
    'ERR_UW_NO_FILES' => 'エラーが発生しました。チェックすべきファイルは見つかりませんでした。',
    'ERR_UW_NO_MANIFEST' => 'ZIPファイルにmanifest.phpファイルが含まれていません。次に進めません。',
    'ERR_UW_NO_VIEW' => '不正なビューが指定されました。',
    'ERR_UW_NOT_VALID_UPLOAD' => '不正なアップロードです。',
    'ERR_UW_NO_CREATE_TMP_DIR' => '一時ディレクトリを作成できません。ディレクトリの権限を確認してください。',
    'ERR_UW_ONLY_PATCHES' => 'このページではパッチのみをアップロードできます。',
    'ERR_UW_PREFLIGHT_ERRORS' => '事前チェック中にエラーが見つかりました。',
    'ERR_UW_UPLOAD_ERR' => 'ファイルのアップロード中にエラーが発生しました。再度実行して下さい。<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRMシステムバージョン: ',
    'ERR_UW_PHP_VERSION' => 'PHPバージョン: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRMシステムバージョン: ',
    'ERR_UW_WRONG_TYPE' => 'このページは実行用ではありません。 ',
    'LBL_BUTTON_BACK' => '戻る',
    'LBL_BUTTON_CANCEL' => 'キャンセル',
    'LBL_BUTTON_DELETE' => 'パッケージの削除',
    'LBL_BUTTON_DONE' => '完了',
    'LBL_BUTTON_EXIT' => 'インポート完了',
    'LBL_BUTTON_NEXT' => '次へ',
    'LBL_BUTTON_RECHECK' => '再チェック',
    'LBL_BUTTON_RESTART' => '再開',

    'LBL_UPLOAD_UPGRADE' => 'アップグレードファイルのアップロード: ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'ファイルバックアップ',
    'LBL_UW_BACKUP_FILES_EXIST' => 'このアップグレードによるバックアップファイルの格納場所: ',
    'LBL_UW_BACKUP' => 'ファイルのバックアップ',
    'LBL_UW_CANCEL_DESC' => 'アップグレードウィザードは中止されました。  すべての一時ファイルとアップロードされたzipファイルは削除されます。<br><br>「完了」ボタンを押してアップグレードウィザードを再度実行して下さい。',
    'LBL_UW_CHECK_ALL' => 'すべてチェック',
    'LBL_UW_CHECKLIST' => 'アップグレードステップ',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => '上書きされるファイルのバックアップは、次のディレクトリにあります。 ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => '次のファイルを手動でマージするには: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'アップグレードプロセス: 手作業でファイルをマージ',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => '最適な差分ツールを用いて、これらのファイルをマージしてください。この作業が完了するまで、このSuiteCRMインスタンスは不安定な状態になり、アップグレードが完了しません。',
    'LBL_UW_COMPLETE' => '完了',
    'LBL_UW_COMPLIANCE_ALL_OK' => '設定に問題はありません。',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP設定: 実行時間',
    'LBL_UW_COMPLIANCE_CURL' => 'cURLモジュール',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAPモジュール',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'mbstringモジュール',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStringsのmbstring.func_overloadパラメータ',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP設定: メモリリミット',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP 設定: ストリーム',
    'LBL_UW_COMPLIANCE_DB' => '最低限のデータベースバージョン',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'php.iniの場所',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => '必要最低PHPバージョン',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP設定: セーフモード',
    'LBL_UW_COMPLIANCE_TITLE2' => '検出された問題',
    'LBL_UW_COMPLIANCE_XML' => 'XMLのパース',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zipサポート',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCREバージョン',
    'LBL_UW_COPIED_FILES_TITLE' => 'ファイルのコピーが成功しました。',

    'LBL_UW_DB_CHOICE1' => 'アップグレードウィザードがSQLを実行',
    'LBL_UW_DB_CHOICE2' => 'マニュアルでSQLをで実行',
    'LBL_UW_DB_ISSUES_PERMS' => 'データベースに対する権限',
    'LBL_UW_DB_METHOD' => 'データベースの更新方法',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => '不足している権限はありません。',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => '必要な権限',

    'LBL_UW_DESC_MODULES_INSTALLED' => '以下のアップグレードがインストール済みです:',
    'LBL_UW_END_LOGOUT_PRE' => 'アップグレードが完了しました。',
    'LBL_UW_END_LOGOUT_PRE2' => '完了を押下してアップグレードウィザードを終了してください。',
    'LBL_UW_END_LOGOUT' => 'パッチ/アップグレードの適用をさらに続ける場合は、一度ログアウトしてください。',

    'LBL_UW_FILE_DELETED' => ' 削除されました。<br>',
    'LBL_UW_FILE_GROUP' => 'グループ',
    'LBL_UW_FILE_ISSUES_PERMS' => 'ファイルパーミッション',
    'LBL_UW_FILE_NO_ERRORS' => '<b>すべてのファイルは書き込み可能です。</b>',
    'LBL_UW_FILE_OWNER' => 'オーナー',
    'LBL_UW_FILE_PERMS' => 'パーミッション',
    'LBL_UW_FILE_UPLOADED' => ' がアップロードされました。',
    'LBL_UW_FILE' => 'ファイル名',
    'LBL_UW_FILES_QUEUED' => '以下のアップグレードがインストール待ちです:',
    'LBL_UW_FILES_REMOVED' => '次のファイルはシステムから削除されます:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>次へを押下してアップグレードパッケージをアップロードしてください。</b>',
    'LBL_UW_FROZEN' => '処理を継続する前に以下のステップを完了する必要があります。',
    'LBL_UW_HIDE_DETAILS' => '詳細を非表示',
    'LBL_UW_IN_PROGRESS' => '進行中',
    'LBL_UW_INCLUDING' => '次を含む: ',
    'LBL_UW_INCOMPLETE' => '未完了',
    'LBL_UW_MANUAL_MERGE' => 'ファイルマージ',
    'LBL_UW_MODULE_READY' => 'モジュールのインストールの準備ができました。インストールを進めるには"実行"をクリックして下さい。',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'アップグレードは行われていません。',
    'LBL_UW_NONE' => 'なし',
    'LBL_UW_OVERWRITE_DESC' => 'あなたが作成したカスタマイズしたコードやテンプレートを含むすべての変更したファイルは上書きされました。続行してよろしいですか？',

    'LBL_UW_PREFLIGHT_ADD_TASK' => '手作業でのマージのためにタスクを作成しますか？',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => '手作業でのマージのために自身にリマインダーのメールを送信しますか？',
    'LBL_UW_PREFLIGHT_FILES_DESC' => '下記のファイルが更新されています。手作業でのマージが必要なものはチェックをはずしてください。<i>レイアウトが変更されているものは自動的にチェックがはずれています。上書きしても良いものは再度チェックを入れて下さい。',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => '手作業でのマージが必要なものはありません。',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => '必要ではありません。',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => '自動的に保存されたファイル:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'すべての事前チェックが完了しました。',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => '次へを押下してアップグレードファイルをシステムにコピーしてください。',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>注意: </b>残りのアップグレード処理は必須です。次へを押下すると処理を完了させることができます。処理を中断するにはキャンセルボタンを押下してください。',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => '全ファイルの選択・非選択',

    'LBL_UW_REBUILD_TITLE' => '結果の再構築',
    'LBL_UW_SCHEMA_CHANGE' => 'スキーマの変更',

    'LBL_UW_SHOW_COMPLIANCE' => '検出された設定の表示',
    'LBL_UW_SHOW_DB_PERMS' => '不足するデータベースパーミッションを表示',
    'LBL_UW_SHOW_DETAILS' => '詳細表示',
    'LBL_UW_SHOW_DIFFS' => 'マニュアルでのマージを必要とするファイルの表示',
    'LBL_UW_SHOW_NW_FILES' => '不正なパーミッションを持つファイルの表示',
    'LBL_UW_SHOW_SCHEMA' => 'スキーマを変更するスクリプトの表示',
    'LBL_UW_SHOW_SQL_ERRORS' => '不正なクエリの表示',
    'LBL_UW_SHOW' => '表示',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'スキップされたファイル',
    'LBL_UW_SQL_RUN' => 'SQLが手動で実行された場合をチェック',
    'LBL_UW_START_DESC' => 'SuiteCRMアップグレードウィザードへようこそ。このウィザードは管理者の方がSuiteCRMインスタンスをアップグレードする作業を支援します。これから提示する手順に注意してしたがってください。',
    'LBL_UW_START_DESC2' => '注意：本番環境で使用するSuiteCRMインスタンスのコピーを作成し、新しいバージョンを展開する前にアップグレードパッケージをテストすることを強くお勧めします。 "composer.json"ファイルを変更した場合は、アップグレード・プロセスが完了したら、次のコマンドを実行してください：<br/> <pre>composer update</ pre>', // Keep the <pre>composer update</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => '次へを押下すると、システムをチェックしアップグレードを実行して良いかどうかを確認します。チェック処理には、ファイルのパーミッション、データベース権限、サーバーの設定の確認などが含まれます。',
    'LBL_UW_START_UPGRADED_UW_DESC' => '新アップグレードウィザードはアップグレード処理を再開します。アップグレードを継続してください。',
    'LBL_UW_START_UPGRADED_UW_TITLE' => '新アップグレードウィザードへようこそ。',

    'LBL_UW_TITLE_CANCEL' => 'キャンセル',
    'LBL_UW_TITLE_COMMIT' => 'アップグレードの適用',
    'LBL_UW_TITLE_END' => '結果のチェック',
    'LBL_UW_TITLE_PREFLIGHT' => '事前チェック',
    'LBL_UW_TITLE_START' => '開始',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'システムチェック',
    'LBL_UW_TITLE_UPLOAD' => 'アップグレードファイルのアップロード',
    'LBL_UW_TITLE' => 'アップグレードウィザード',
    'LBL_UW_UNINSTALL' => 'アンインストール',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'ライセンスを受諾',
    'LBL_UW_CONVERT_THE_LICENSE' => 'ライセンスをコンバート',

    'LBL_START_UPGRADE_IN_PROGRESS' => '開始中です',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'システムチェック中です',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'ライセンスチェック中です',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => '事前チェック中です',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'ファイルのコピー中',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'アップグレードのコミット中です',
    'LBL_UW_COMMIT_DESC' => '次へを押下すると追加のアップグレードスクリプトを実行します。',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'アップグレドスクリプトの実行中',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'アップグレードサマリの処理中です',
    'LBL_UPGRADE_IN_PROGRESS' => '処理中 ',
    'LBL_UPGRADE_TIME_ELAPSED' => '経過時間',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'アップグレードのキャンセルとロールバック',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'アップグレードには時間がかかる場合があります。',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'アップロードのチェック中...',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'アップグレードパッケージをアップロード中... ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'アップグレードウィザードが旧4.5.1のスキーマを削除',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'アップグレード後に手作業で旧スキーマを削除',
    'LBL_UW_DROP_SCHEMA_METHOD' => '旧スキーマの削除方法',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'ドロップ可能なキュスキーマを表示',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'スキップされたクエリー',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHPのバージョンは5以上である必要があります。',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'SuiteCRMは、ご利用のPHPのバージョンをサポートしていません。SuiteCRMアプリケーションに準拠したバージョンをインストールする必要があります。リリースノートの互換性マトリックスでサポートするPHPのバージョンをご確認ください。ご利用のバージョン ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP下位互換モードが有効になっています。先に進めるためにzend.ze1_compatibility_modeをOffにセットしてください。',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'アクション',
    'LBL_ML_CANCEL' => 'キャンセル',
    'LBL_ML_COMMIT' => '実行',
    'LBL_ML_DESCRIPTION' => '詳細',
    'LBL_ML_INSTALLED' => 'インストール日',
    'LBL_ML_NAME' => '名前',
    'LBL_ML_PUBLISHED' => '発行日',
    'LBL_ML_TYPE' => 'タイプ',
    'LBL_ML_UNINSTALLABLE' => 'インストール不可',
    'LBL_ML_VERSION' => 'バージョン',
    'LBL_ML_INSTALL' => 'インストール',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'ご利用システムのPHPバージョンは: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => '推奨するPHPのバージョンは ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' またはそれ以降。', // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'アップグレードウィザード',
    'LBL_UPLOAD_SUCCESS' => 'アップグレードパッケージがアップロードされました。次へを押下して最終チェックに進んでください。',
    'LBL_UW_TITLE_LAYOUTS' => 'レイアウトの確認',
    'LBL_LAYOUT_MODULE_TITLE' => 'レイアウト',
    'LBL_LAYOUT_MERGE_DESC' => 'アップグレードによって追加されたフィールドがあります。これらは現在のレイアウトに自動的に追加されます。新たなフィールドの詳細については、リリースメモを参照ください。<br><br>新たなフィールドを追加したくない場合は、モジュールのチェックをはずすことで、現在のカスタムレイアウトを変更しませんが、これらの新たなフィールドはStudioで追加することが可能です。<br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => '次へを押下するとレイアウトを確認し、アップグレードを完了します。',
    'LBL_LAYOUT_MERGE_TITLE2' => '次へを押下してアップグレードを完了してください。',
    'LBL_UW_CONFIRM_LAYOUTS' => 'レイアウトの確認',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'レイアウトの確認の結果',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => '以下のレイアウトは正しくマージされました:',
    'LBL_SELECT_FILE' => 'ファイルを選択:',
    'ERROR_VERSION_INCOMPATIBLE' => 'アップロードされたファイルはこのSuiteCRMのバージョンと互換性がありません。',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'アップロードされたファイルはこのPHPのバージョンと互換性がありません: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'アップロードされたファイルはこのSuiteCRMのバージョンと互換性がありません。',
    'LBL_LANGPACKS' => '言語パック' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'モジュールローダー' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'パッチ アップグレード' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'テーマ' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'ワークフロー' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'アップグレード' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => '処理中' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => '互換性のあるバージョンがマニュフェスト ファイル内に設定できません。',
    'LBL_UPGRD_CSTM_CHK' => 'アップグレード プロセスがcustom/フォルダ内にも存在するいくつかのファイルをアップデートしました。続ける前のその内容をレビューしてください。',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'ファイルはphp.iniのupload_max_filesizeで指定されたサイズを超えています。',
        2 => '\'ファイルは、HTMLのMAX_FILE_SIZEで指定されたサイズを超えています。',
        3 => 'ファイルは部分的にアップロードされました。',
        4 => 'ファイルはアップロードされませんでした。',
        5 => '不明なエラー',
        6 => '一時フォルダが見つかりません。',
        7 => 'ディスクに書き込みが出来ません。',
        8 => '拡張子が不適切なためアップロードが中止しました。',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => '警告: パスワードの設定期限がなしに設定されています！',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'ここで設定をアップデートしてください。',
);
