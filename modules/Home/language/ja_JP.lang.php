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
    'LBL_MODULE_NAME' => 'ホーム',
    'LBL_NEW_FORM_TITLE' => '新規連絡先',
    'LBL_FIRST_NAME' => '名:',
    'LBL_LAST_NAME' => '姓:',
    'LBL_LIST_LAST_NAME' => '姓',
    'LBL_PHONE' => '電話番号:',
    'LBL_EMAIL_ADDRESS' => 'メールアドレス:',
    'LBL_MY_PIPELINE_FORM_TITLE' => '私のパイプライン',
    'LBL_PIPELINE_FORM_TITLE' => '商談ステージ別パイプライン',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'セールス段階別　パイプライン',
    'LNK_NEW_CONTACT' => '連絡先を作成',
    'LNK_NEW_ACCOUNT' => '口座の作成',
    'LNK_NEW_OPPORTUNITY' => '商談作成',
    'LNK_NEW_LEAD' => '潜在顧客を作成',
    'LNK_NEW_CASE' => 'チケット作成',
    'LNK_NEW_NOTE' => 'メモ作成',
    'LNK_NEW_CALL' => '電話作成',
    'LNK_NEW_EMAIL' => 'メールをアーカイブする',
    'LNK_NEW_MEETING' => '会議作成',
    'LNK_NEW_TASK' => 'タスク作成',
    'LNK_NEW_BUG' => '不具合作成',
    'LBL_ADD_BUSINESSCARD' => '名刺から作成',
    'LNK_NEW_SEND_EMAIL' => 'Eメール作成',
    'LBL_NO_ACCESS' => 'アクセス権限がありません。システム管理者に連絡してください。',
    'LBL_NO_RESULTS_IN_MODULE' => '-- 検索結果なし --',
    'LBL_NO_RESULTS' => '<h2>検索結果が見つかりませんでした。検索条件を変えてください。</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>検索のコツ：</h3><ul><li>検索すべきカテゴリが正しく選択されていることを確認してください。</li><li>検索条件を緩やかにしてください。</li><li>それでも検索結果が1件も見つからない場合、詳細検索を試してみてください。</li></ul>',

    'LBL_ADD_DASHLETS' => 'ダッシュレットの追加',
    'LBL_WEBSITE_TITLE' => 'Webサイト',
    'LBL_RSS_TITLE' => 'ニュースフィード',
    'LBL_CLOSE_DASHLETS' => '完了',
    'LBL_OPTIONS' => 'オプション',
    // dashlet search fields
    'LBL_TODAY' => '今日',
    'LBL_YESTERDAY' => '昨日',
    'LBL_TOMORROW' => '明日',
    'LBL_NEXT_WEEK' => '翌週',
    'LBL_LAST_7_DAYS' => '過去7日間',
    'LBL_NEXT_7_DAYS' => '次の7日間',
    'LBL_LAST_MONTH' => '先月',
    'LBL_NEXT_MONTH' => '翌月',
    'LBL_LAST_YEAR' => '昨年',
    'LBL_NEXT_YEAR' => '翌年',
    'LBL_LAST_30_DAYS' => '過去30日',
    'LBL_NEXT_30_DAYS' => '次の30日',
    'LBL_THIS_MONTH' => '今月',
    'LBL_THIS_YEAR' => '今年',

    'LBL_MODULES' => 'モジュール',
    'LBL_CHARTS' => 'チャート一覧',
    'LBL_TOOLS' => 'ツール',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => '検索結果',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'モジュールビュー',
        'Portal' => 'ポータル',
        'Charts' => 'チャート一覧',
        'Tools' => 'ツール',
        'Miscellaneous' => 'その他'
    ),
    'LBL_ADDING_DASHLET' => 'SuiteCRM ダッシュレットを追加しています ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM ダッシュレット追加',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'この SuiteCRM ダッシュレットを削除してもよろしいですか？',
    'LBL_REMOVING_DASHLET' => 'SuiteCRM ダッシュレットを削除しています ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => '一般',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'フィルター',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => '私のアイテムのみ',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'タイトル',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => '行の表示',

    'LBL_DASHLET_DELETE' => 'SuiteCRMダッシュレットを削除する',
    'LBL_DASHLET_REFRESH' => 'SuiteCRMダッシュレットをリフレッシュする',
    'LBL_DASHLET_EDIT' => 'SuiteCRMダッシュレットを編集する',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => '閉じる',

    'LBL_SEARCH' => '検索',
    'LBL_CLEAR' => 'クリア',

    'LBL_BASIC_CHARTS' => '基本チャート',

    'LBL_DASHLET_SEARCH' => 'SuiteCRMダッシュレットを見つける',

//ABOUT page
    'LBL_VERSION' => 'バージョン',
    'LBL_BUILD' => 'ビルド',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - CEフレームワークのプロバイダ',

    'LBL_DASHLET_TITLE' => '私のサイト',
    'LBL_DASHLET_OPT_TITLE' => 'タイトル',
    'LBL_DASHLET_INCORRECT_URL' => 'ウェブサイトのロケーションに誤りがあるようです。',
    'LBL_DASHLET_OPT_URL' => 'Webサイトの場所',
    'LBL_DASHLET_OPT_HEIGHT' => 'Dashletの高さ（ピクセル）',
    'LBL_DASHLET_SUGAR_NEWS' => 'SuiteCRMニュース',
    'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'SuiteCRM入門',
    'LBL_BASIC_SEARCH' => 'クイック フィルタ' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => '高度なフィルタ' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'ホームアイコン',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Home画面へ戻る',
    'LBL_TOUR_MODULES' => '主要モジュール',
    'LBL_TOUR_MODULES_DESCRIPTION' => '全ての主要モジュール',
    'LBL_TOUR_MORE' => 'その他のモジュール',
    'LBL_TOUR_MORE_DESCRIPTION' => 'その他のモジュール',
    'LBL_TOUR_SEARCH' => 'フルテキスト検索',
    'LBL_TOUR_SEARCH_DESCRIPTION' => '便利な検索機能です。',
    'LBL_TOUR_NOTIFICATIONS' => '通知',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRMアプリケーションの通知はここに表示されます。',
    'LBL_TOUR_PROFILE' => 'プロファイル',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'プロファイルへのアクセス、設定やログアウト',
    'LBL_TOUR_QUICKCREATE' => 'クイック作成',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => '場所を失うことなくすぐにレコードを作成します。',
    'LBL_TOUR_FOOTER' => '折りたたみ式フッター',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'このフッターは簡単に展開・閉じることができます。',
    'LBL_TOUR_CUSTOM' => 'カスタムアプリケーション',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'カスタムインテグレーション',
    'LBL_TOUR_BRAND' => 'ブランド',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'あなたのロゴはここに配置されます。',
    'LBL_TOUR_WELCOME' => 'Ameyo-J x SuiteCRMへようこそ',
    'LBL_TOUR_WATCH' => 'SuiteCRMの最新情報を見る',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">新しくシンプルになったナビゲーションバー</li><li class="icon-ok">新しい折りたたみ式フッター</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>その他多数</p>',
    'LBL_TOUR_VISIT' => '詳細については我々のアプリケーションをご覧ください。',
    'LBL_TOUR_DONE' => '完了！',
    'LBL_TOUR_REFERENCE_1' => 'プロファイルタブ内、"サポート"より',
    'LBL_TOUR_REFERENCE_2' => 'いつでも参照可能です。',
    'LNK_TOUR_DOCUMENTATION' => 'ドキュメント',
    'LBL_TOUR_CALENDAR_URL_1' => 'Microsoft OutlookまたはExchangeなど、サード パーティーとSuiteCRMカレンダを共有しますか？その場合、新しいURLが必要です。この新しい安全なURLには、カレンダーの不正な公開を防ぐ個人用のキーが含まれています。',
    'LBL_TOUR_CALENDAR_URL_2' => '新しい共有カレンダーURLの取り込み',
    'LBL_CONTRIBUTORS' => '貢献者',
    'LBL_ABOUT_SUITE' => 'SuiteCRMについて',
    'LBL_PARTNERS' => 'パートナー',
    'LBL_FEATURING' => 'SalesAgilityによるAOS、AOW、AOR、AOP、AOEとリスケジュール モジュール',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - 世界のオープン ソース CRM',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'Jason EggersによるSecuritySuite',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'Jeferey J. WaltersによるJJWDesign Google Maps',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'Conscious Solutionsによって提供されたSuiteCRM LOGO',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'ResponseTap による SuiteCRM 7.3 リリースへの貢献',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fieldsは、diligent technology＆business consulting GmbHによって寄稿されました。',

    'LBL_LANGUAGE_ABOUT' => 'SuiteCRM 翻訳について',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'SuiteCRM コミュニティによる共同翻訳',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => '翻訳はCrowdin を使用して作成されました',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM はオープン ソース ライセンス - AGPLv3 の下で公開します。',
    'LBL_ABOUT_SUITE_4' => 'プロジェクトによって管理または開発されたすべての SuiteCRM コードはオープン ソース - AGPLv3 としてリリースされます',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM サポートは無料と有料の両方のオプションで利用可能です。',

    'LBL_SUITE_PARTNERS' => '我々はオープン ソースに情熱的で忠実な SuiteCRM パートナーを持っています。我々の完全なパートナーのリストについては、当社の web サイトを参照してください。',

    'LBL_SAVE_BUTTON' => '新しいグループフォルダを追加',
    'LBL_DELETE_BUTTON' => '削除',
    'LBL_APPLY_BUTTON' => '適用',
    'LBL_SEND_INVITES' => '保存 & 招待',
    'LBL_CANCEL_BUTTON' => 'キャンセル',
    'LBL_CLOSE_BUTTON' => '閉じる',

    'LBL_CREATE_NEW_RECORD' => '活動作成',
    'LBL_CREATE_CALL' => 'コール作成',
    'LBL_CREATE_MEETING' => 'ミーティング作成',

    'LBL_GENERAL_TAB' => '詳細',
    'LBL_PARTICIPANTS_TAB' => '招待者',
    'LBL_REPEAT_TAB' => 'リピート',

    'LBL_REPEAT_TYPE' => 'リピート',
    'LBL_REPEAT_INTERVAL' => '毎',
    'LBL_REPEAT_END' => '最後',
    'LBL_REPEAT_END_AFTER' => '以後',
    'LBL_REPEAT_OCCURRENCES' => '繰り返し',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'On',
    'LBL_REPEAT_UNTIL' => '～まで繰り返す',
    'LBL_REPEAT_COUNT' => '回数',
    'LBL_REPEAT_LIMIT_ERROR' => ' $limit を超える数のミーティングを作成できません',

    //Events PR 5641
    'LNK_EVENT' => 'イベント',
    'LNK_EVENT_VIEW' => 'イベントを表示',
    'LBL_DATE' => '日付: ',
    'LBL_DURATION' => '期間: ',
    'LBL_NAME' => 'タイトル: ',
    'LBL_HOUR_ABBREV' => '時',
    'LBL_HOURS_ABBREV' => '時',
    'LBL_MINSS_ABBREV' => '分',
    'LBL_LOCATION' => '場所: ',
    'LBL_STATUS' => 'ステータス: ',
    'LBL_DESCRIPTION' => '詳細: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => '検索の実行中にエラーが発生しました。クエリの構文が無効な場合があります。',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => '要求された検索エンジンが見つかりません。 検索をやり直してください。',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Elasticsearchサーバーへの接続に失敗しました。',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => '検索の内部エラーが発生しました。',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => '検索の実行中に不明なエラーが発生しました。',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => '問題が解決しない場合は管理者に連絡してください。 ログで詳細情報が利用可能です。',
);