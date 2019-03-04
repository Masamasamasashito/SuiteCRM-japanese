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



$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => '日本語 (Japanese) - ja_JP',
    'moduleList' => array(
        'Home' => 'ホーム',
        'ResourceCalendar' => 'リソース カレンダー',
        'Contacts' => '連絡先',
        'Accounts' => '口座',
        'Alerts' => 'アラート',
        'Opportunities' => '商談',
        'Cases' => 'ケース',
        'Notes' => 'ノート',
        'Calls' => 'コール',
        'TemplateSectionLine' => 'テンプレート セクション ライン',
        'Calls_Reschedule' => '電話スケジュールを変更する',
        'Emails' => 'Eメール',
        'EAPM' => 'EAPM',
        'Meetings' => 'ミーティング',
        'Tasks' => 'タスク',
        'Calendar' => 'カレンダー',
        'Leads' => '潜在顧客',
        'Currencies' => '通貨',
        'Activities' => '活動',
        'Bugs' => 'バグトラッカー',
        'Feeds' => 'RSSフィード',
        'iFrames' => 'マイポータル',
        'TimePeriods' => '期間',
        'ContractTypes' => '契約種別',
        'Schedulers' => 'スケジューラ',
        'Project' => 'プロジェクト',
        'ProjectTask' => 'プロジェクトタスク',
        'Campaigns' => 'キャンペーン',
        'CampaignLog' => 'キャンペーンログ',
        'Documents' => 'ドキュメント',
        'DocumentRevisions' => '文書改訂',
        'Connectors' => 'コネクタ',
        'Roles' => '役割',
        'Notifications' => '通知',
        'Sync' => '同期',
        'Users' => 'ユーザー',
        'Employees' => '従業員',
        'Administration' => 'システム管理',
        'ACLRoles' => '役割',
        'InboundEmail' => '受信メール',
        'Releases' => 'リリース',
        'Prospects' => 'ターゲット',
        'Queues' => 'キュー',
        'EmailMarketing' => 'Eメールマーケティング',
        'EmailTemplates' => 'メール - テンプレート',
        'ProspectLists' => '目的リスト',
        'SavedSearch' => '保存済み検索',
        'UpgradeWizard' => 'アップグレードウィザード',
        'Trackers' => 'トラッカー',
        'TrackerSessions' => 'トラッカーセッション',
        'TrackerQueries' => 'トラッカークエリ',
        'FAQ' => 'よくある質問',
        'Newsletters' => 'ニュースレター',
        'SugarFeed' => 'SuiteCRM フィード',
        'SugarFavorites' => 'SuiteCRM お気に入り',

        'OAuthKeys' => 'Oトークン認証キー',
        'OAuthTokens' => 'Oトークン認証',
        'OAuth2Clients' => 'OAuthクライアント',
        'OAuth2Tokens' => 'Oトークン認証',
    ),

    'moduleListSingular' => array(
        'Home' => 'ホーム',
        'Dashboard' => 'ダッシュボード',
        'Contacts' => '連絡先',
        'Accounts' => '口座',
        'Opportunities' => '商談',
        'Cases' => 'チケット',
        'Notes' => 'ノート',
        'Calls' => 'コール情報',
        'Emails' => 'メール',
        'EmailTemplates' => 'Eメールテンプレート',
        'Meetings' => 'ミーティング',
        'Tasks' => 'タスク',
        'Calendar' => 'カレンダー',
        'Leads' => '潜在顧客',
        'Activities' => '活動',
        'Bugs' => 'バグトラッカー',
        'KBDocuments' => 'ナレッジベース',
        'Feeds' => 'RSSフィード',
        'iFrames' => 'マイポータル',
        'TimePeriods' => '期間',
        'Project' => 'プロジェクト',
        'ProjectTask' => 'プロジェクトタスク',
        'Prospects' => 'ターゲット',
        'Campaigns' => 'キャンペーン',
        'Documents' => 'ドキュメント',
        'Sync' => '同期',
        'Users' => 'ユーザー',
        'SugarFavorites' => 'SuiteCRM お気に入り',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'はい',
        '2' => 'いいえ',
    ),

    //e.g. en francais 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'アナリスト',
        'Competitor' => '競合他社',
        'Customer' => '顧客',
        'Integrator' => 'インテグレーター',
        'Investor' => '投資家',
        'Partner' => 'パートナー',
        'Press' => '記者',
        'Prospect' => '見込み客',
        'Reseller' => '再販業者',
        'Other' => 'その他',
    ),
    //e.g. en espanol 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'アパレル',
        'Banking' => '銀行',
        'Biotechnology' => 'バイオテクノロジー',
        'Chemicals' => '化学',
        'Communications' => 'コミュニケーション',
        'Construction' => '建築',
        'Consulting' => 'コンサルティング',
        'Education' => '教育',
        'Electronics' => '電気',
        'Energy' => 'エネルギー',
        'Engineering' => 'エンジニア',
        'Entertainment' => 'エンターテイメント',
        'Environmental' => '環境',
        'Finance' => '金融',
        'Government' => '政府',
        'Healthcare' => '保健',
        'Hospitality' => 'ホスピタリティ',
        'Insurance' => '保険',
        'Machinery' => '機械',
        'Manufacturing' => '製造業',
        'Media' => 'メディア',
        'Not For Profit' => 'ボランティア',
        'Recreation' => 'レクリエーション',
        'Retail' => '小売業',
        'Shipping' => '運送業',
        'Technology' => 'テクノロジー',
        'Telecommunications' => '通信業',
        'Transportation' => '交通',
        'Utilities' => 'ユーティリティ',
        'Other' => 'その他',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => '勧誘電話',
        'Existing Customer' => '既存客',
        'Self Generated' => '自動生成',
        'Employee' => '従業員',
        'Partner' => 'パートナー',
        'Public Relations' => '広報活動',
        'Direct Mail' => 'ダイレクトメール',
        'Conference' => '会議',
        'Trade Show' => 'トレードショー',
        'Web Site' => 'ウェブサイト',
        'Word of mouth' => '口コミ',
        'Email' => 'メール',
        'Campaign' => 'キャンペーン',
        'Other' => 'その他',
    ),
    'language_dom' => array(
        'af' => 'アフリカーンス語',
        'ar-EG' => 'エジプト ・ アラビア語',
        'ar-SA' => 'アラビア語 (サウジアラビア)',
        'az' => 'アゼルバイジャン語',
        'bg' => 'ブルガリア語',
        'bn' => 'ベンガル語',
        'bs' => 'ボスニア語',
        'ca' => 'カタロニア語',
        'ceb' => 'セブアノ語',
        'cs' => 'チェコ語',
        'da' => 'デンマーク語',
        'de' => 'ドイツ語',
        'de-CH' => 'ドイツ、スイス',
        'el' => 'ギリシャ語',
        'en-GB' => '英語（イギリス）',
        'en-US' => '英語（アメリカ）',
        'es-ES' => 'スペイン語',
        'es-MX' => 'スペイン語（メキシコ）',
        'es-PY' => 'スペイン語（パラグアイ）',
        'es-VE' => 'スペイン語（ベネズエラ）',
        'et' => 'エストニア語',
        'eu' => 'バスク語',
        'fa' => 'ペルシャ語',
        'fi' => 'フィリピノ語',
        'fil' => 'フィンランド語',
        'fr' => 'フランス語',
        'fr-CA' => 'フランス語（カナダ）',
        'gu-IN' => 'グジャラート語',
        'he' => 'ヘブライ語',
        'hi' => 'ヒンディー語',
        'hr' => 'クロアチア語',
        'hu' => 'ハンガリー語',
        'hy-AM' => 'アルメニア語',
        'id' => 'インドネシア語',
        'it' => 'イタリア語',
        'ja' => '日本語',
        'ka' => 'グルジア語',
        'ko' => '韓国語',
        'lt' => 'リトアニア語',
        'lv' => 'ラトビア語',
        'mk' => 'マケドニア語',
        'nb' => 'ノルウェー語（ブークモール）',
        'nl' => 'オランダ語',
        'pcm' => 'ナイジェリア・ピジン',
        'pl' => 'ポーランド語',
        'pt-BR' => 'ポルトガル語（ブラジル）',
        'pt-PT' => 'ポルトガル語',
        'ro' => 'ルーマニア語',
        'ru' => 'ロシア語',
        'si-LK' => 'シンハラ語',
        'sk' => 'スロバキア語',
        'sl' => 'スロベニア語',
        'sq' => 'アルバニア語',
        'sr-CS' => 'セルビア語 (ラテン)',
        'sv-SE' => 'スウェーデン語',
        'th' => 'タイ語',
        'tl' => 'タガログ語',
        'tr' => 'トルコ語',
        'uk' => 'ウクライナ語',
        'ur-IN' => 'ウルドゥ語 (インド)',
        'ur-PK' => 'ウルドゥ語 (パキスタン)',
        'vi' => 'ベトナム語',
        'yo' => 'ヨルバ語',
        'zh-CN' => '簡体字中国語',
        'zh-TW' => '繁体字中国語',
        'other' => 'その他',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => '既存事業',
        'New Business' => '新事業',
    ),
    'roi_type_dom' => array(
        'Revenue' => '収益',
        'Investment' => '投資',
        'Expected_Revenue' => '期待収益',
        'Budget' => '予算',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => '主な意思決定者',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => '第一意思決定者',
        'Business Decision Maker' => '事業意思決定者',
        'Business Evaluator' => '事業評価者',
        'Technical Decision Maker' => '技術意思決定者',
        'Technical Evaluator' => '技術評価者',
        'Executive Sponsor' => 'エグゼクティブスポンサー',
        'Influencer' => 'インフルエンサー',
        'Other' => 'その他',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => '主要連絡先',
        'Alternate Contact' => '代替連絡先',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => '請求書の日付から15日以内',
        'Net 30' => '請求書の日付から30日以内',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => '見込み',
        'Qualification' => '資格',
        'Needs Analysis' => '需要分析',
        'Value Proposition' => '価値提案',
        'Id. Decision Makers' => '意思決定者の識別',
        'Perception Analysis' => '知覚分析',
        'Proposal/Price Quote' => '提案書/見積価格',
        'Negotiation/Review' => '交渉/レビュー',
        'Closed Won' => 'クローズ 成功',
        'Closed Lost' => 'クローズ ロスト',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'コール',
        'Meeting' => 'ミーティング',
        'Task' => 'タスク',
        'Email' => 'メール',
        'Note' => 'ノート',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => '様',
        'Ms.' => '様',
        'Mrs.' => '様',
        'Miss' => '様',
        'Dr.' => '先生',
        'Prof.' => '教授',
    ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1分前',
        300 => '5分前',
        600 => '10分前',
        900 => '15分前',
        1800 => '30分前',
        3600 => '1時間前',
        7200 => '2時間前',
        10800 => '3時間前',
        18000 => '5時間前',
        86400 => '1日前',
    ),

    'task_priority_default' => '中',
    'task_priority_dom' => array(
        'High' => '高',
        'Medium' => '中',
        'Low' => '低',
    ),
    'task_status_default' => '未開始',
    'task_status_dom' => array(
        'Not Started' => '未開始',
        'In Progress' => '進行中',
        'Completed' => '完了',
        'Pending Input' => '保留',
        'Deferred' => '延期',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => '計画済み',
        'Held' => '完了',
        'Not Held' => '未実施',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'その他',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => '計画済み',
        'Held' => '完了',
        'Not Held' => '未実施',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => '着信',
        'Outbound' => 'アウトバウンド',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => '新規',
        'Assigned' => 'アサイン済み',
        'In Process' => '進行中',
        'Converted' => 'コンバート済み',
        'Recycled' => '戻し',
        'Dead' => 'デッド',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => '高',
        'P2' => '中',
        'P3' => '低',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'レギュラー ユーザー',
        'Administrator' => 'システム管理者',
    ),
    'user_status_dom' => array(
        'Active' => 'アクティブ',
        'Inactive' => '非アクティブ',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'メールコード',
    ),
    'employee_status_dom' => array(
        'Active' => '在職中',
        'Terminated' => '退職',
        'Leave of Absence' => '休職',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => '高',
        'Medium' => '中',
        'Low' => '低',
    ),
    'project_task_priority_default' => '中',

    'project_task_status_options' => array(
        'Not Started' => '未開始',
        'In Progress' => '進行中',
        'Completed' => '完了',
        'Pending Input' => '保留',
        'Deferred' => '延期',
    ),
    'project_task_utilization_options' => array(
        '0' => 'なし',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'ドラフト',
        'In Review' => 'レビュー中',
        'Underway' => '進行中',
        'On_Hold' => '保留中',
        'Completed' => '完了',
    ),
    'project_status_default' => 'ドラフト',

    'project_duration_units_dom' => array(
        'Days' => '日',
        'Hours' => '時間',
    ),

    'activity_status_type_dom' => array(
        '' => '--管理者アクション--',
        'active' => '稼働中',
        'inactive' => '非稼働中',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => '口座',
    'record_type_display' => array(
        '' => '',
        'Accounts' => '口座',
        'Opportunities' => '商談',
        'Cases' => 'チケット',
        'Leads' => '潜在顧客',
        'Contacts' => '連絡先', // cn (11/22/2005) added to support Emails

        'Bugs' => 'バグトラッカー',
        'Project' => 'プロジェクト',

        'Prospects' => 'ターゲット',
        'ProjectTask' => 'プロジェクトタスク',

        'Tasks' => 'タスク',

    ),
// PR 4606
    'record_type_display_notes' => array(
        'Accounts' => '口座',
        'Contacts' => '連絡先',
        'Opportunities' => '商談',
        'Campaigns' => 'キャンペーン',
        'Tasks' => 'タスク',
        'Emails' => 'メール',

        'Bugs' => 'バグトラッカー',
        'Project' => 'プロジェクト',
        'ProjectTask' => 'プロジェクトタスク',
        'Prospects' => 'ターゲット',
        'Cases' => 'チケット',
        'Leads' => '潜在顧客',

        'Meetings' => 'ミーティング',
        'Calls' => 'コール情報',
    ),

    'parent_type_display' => array(
        'Accounts' => '口座',
        'Contacts' => '連絡先',
        'Tasks' => 'タスク',
        'Opportunities' => '商談',

        'Bugs' => 'バグトラッカー',
        'Cases' => 'チケット',
        'Leads' => '潜在顧客',

        'Project' => 'プロジェクト',
        'ProjectTask' => 'プロジェクトタスク',

        'Prospects' => 'ターゲット',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => '見積',
        'AOS_Invoices' => '請求',
        'AOS_Contracts' => '契約',
    ),
    'issue_priority_default_key' => '中',
    'issue_priority_dom' => array(
        'Urgent' => '緊急',
        'High' => '高',
        'Medium' => '中',
        'Low' => '低',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => '承諾',
        'Duplicate' => '重複',
        'Closed' => '完了',
        'Out of Date' => '期限切れ',
        'Invalid' => '無効',
    ),

    'issue_status_default_key' => '新規',
    'issue_status_dom' => array(
        'New' => '新規',
        'Assigned' => 'アサイン済み',
        'Closed' => '完了',
        'Pending' => '保留',
        'Rejected' => '拒否',
    ),

    'bug_priority_default_key' => '中',
    'bug_priority_dom' => array(
        'Urgent' => '緊急',
        'High' => '高',
        'Medium' => '中',
        'Low' => '低',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => '承諾',
        'Duplicate' => '重複',
        'Fixed' => '修正済み',
        'Out of Date' => '期限切れ',
        'Invalid' => '無効',
        'Later' => '後回し',
    ),
    'bug_status_default_key' => '新規',
    'bug_status_dom' => array(
        'New' => '新規',
        'Assigned' => 'アサイン済み',
        'Closed' => '完了',
        'Pending' => '保留',
        'Rejected' => '拒否',
    ),
    'bug_type_default_key' => 'バグトラッカー',
    'bug_type_dom' => array(
        'Defect' => '不具合',
        'Feature' => '仕様',
    ),
    'case_type_dom' => array(
        'Administration' => 'システム管理',
        'Product' => '商品',
        'User' => 'ユーザー',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => '内部',
        'Forum' => 'フォーラム',
        'Web' => 'Web',
        'InboundEmail' => 'メール',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => '口座',
        'Activities' => '活動',
        'Bugs' => 'バグトラッカー',
        'Calendar' => 'カレンダー',
        'Calls' => 'コール',
        'Campaigns' => 'キャンペーン',
        'Cases' => 'ケース',
        'Contacts' => '連絡先',
        'Currencies' => '通貨',
        'Dashboard' => 'ダッシュボード',
        'Documents' => 'ドキュメント',
        'Emails' => 'Eメール',
        'Feeds' => 'RSSフィード',
        'Forecasts' => '予算',
        'Help' => 'ヘルプ',
        'Home' => 'ホーム',
        'Leads' => '潜在顧客',
        'Meetings' => 'ミーティング',
        'Notes' => 'ノート',
        'Opportunities' => '商談',
        'Outlook Plugin' => 'Outlookプラグイン',
        'Projects' => 'プロジェクト',
        'Quotes' => '見積',
        'Releases' => 'リリース',
        'RSS' => 'RSSフィード',
        'Studio' => 'Studio',
        'Upgrade' => 'アップグレード',
        'Users' => 'ユーザー',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => '計画中',
        'Active' => '稼働中',
        'Inactive' => '非稼働中',
        'Complete' => '完了',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => '電話営業',
        'Mail' => 'ダイレクトメール',
        'Email' => 'メール',
        'Print' => '印刷',
        'Web' => 'Web',
        'Radio' => 'ラジオ',
        'Television' => 'テレビ',
        'NewsLetter' => 'ニュースレター',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => '毎週',
        'Monthly' => '毎月',
        'Quarterly' => '毎四半期',
        'Annually' => '毎年',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => '1月',
        '2' => '2月',
        '3' => '3月',
        '4' => '4月',
        '5' => '5月',
        '6' => '6月',
        '7' => '7月',
        '8' => '8月',
        '9' => '9月',
        '10' => '10月',
        '11' => '11月',
        '12' => '12月',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => '1月',
        '2' => '2月',
        '3' => '3月',
        '4' => '4月',
        '5' => '5月',
        '6' => '6月',
        '7' => '7月',
        '8' => '8月',
        '9' => '9月',
        '10' => '10月',
        '11' => '11月',
        '12' => '12月',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => '日曜日',
        '2' => '月曜日',
        '3' => '火曜日',
        '4' => '水曜日',
        '5' => '木曜日',
        '6' => '金曜日',
        '7' => '土曜日',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => '日',
        '2' => '月',
        '3' => '火',
        '4' => '水',
        '5' => '木',
        '6' => '金',
        '7' => '土',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => '午前',
        'pm' => '午後',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => '午前',
        'PM' => '午後',
    ),

    'dom_email_types' => array(
        'out' => '送信済み',
        'archived' => '保存済み',
        'draft' => 'ドラフト',
        'inbound' => '着信',
        'campaign' => 'キャンペーン',
    ),
    'dom_email_status' => array(
        'archived' => '保存済み',
        'closed' => '完了',
        'draft' => 'ドラフト',
        'read' => '既読',
        'replied' => '返信済み',
        'sent' => '送信済み',
        'send_error' => '送信エラー',
        'unread' => '未読',
    ),
    'dom_email_archived_status' => array(
        'archived' => '保存済み',
    ),

    'dom_email_server_type' => array(
        '' => '--管理者アクション--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '作成[任意]',
        'createcase' => 'チケット作成',
        'bounce' => 'バウンス処理',
    ),
    'dom_email_distribution' => array(
        '' => '--管理者アクション--',
        'direct' => '直接アサイン',
        'roundRobin' => 'ラウンド-ロビン',
        'leastBusy' => '最も暇な',
    ),
    'dom_email_errors' => array(
        1 => '直接アイテムを割り当てるときは、一人のユーザーだけを選択します。',
        2 => '直接アイテムを割り当てるときは、チェックされたアイテムだけを割り上げる必要があります。',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'はい',
        'bool_false' => 'いいえ',
    ),
    'dom_int_bool' => array(
        1 => 'はい',
        0 => 'いいえ',
    ),
    'dom_switch_bool' => array(
        'on' => 'はい',
        'off' => 'いいえ',
        '' => '--管理者アクション--',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM Eメール クライアント',
        'mailto' => '外部メールクライアント',
    ),

    'dom_editor_type' => array(
        'none' => '直接 HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => '--管理者アクション--',
        'html' => 'HTMLメール',
        'plain' => 'プレーンテキストメール',
    ),

    'schedulers_times_dom' => array(
        'not run' => '実行時間を経過、未実施',
        'ready' => '準備完了',
        'in progress' => '処理中',
        'failed' => '失敗',
        'completed' => '完了',
        'no curl' => '実行不可: cURLライブラリがありません',
    ),

    'scheduler_status_dom' => array(
        'Active' => '稼働中',
        'Inactive' => '非稼働中',
    ),

    'scheduler_period_dom' => array(
        'min' => '分',
        'hour' => '時間',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'マーケティング',
        'Knowledege Base' => 'ナレッジベース',
        'Sales' => '営業',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => '保存済み',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'マーケティング資料',
        'Product Brochures' => '製品パンフレット',
        'FAQ' => 'よくある質問',
    ),

    'document_status_dom' => array(
        'Active' => '稼働中',
        'Draft' => 'ドラフト',
        'FAQ' => 'よくある質問',
        'Expired' => '期限切れ',
        'Under Review' => 'レビュー中',
        'Pending' => '保留',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'メールマージ',
        'eula' => '使用許諾契約書',
        'nda' => 'NDA',
        'license' => 'ライセンス契約',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => '承諾',
        'decline' => '拒否',
        'tentative' => '仮',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => '受領',
        'decline' => '辞退',
        'tentative' => '仮',
        'none' => 'なし',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15分毎',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => '--管理者アクション--',
        'Daily' => '毎日',
        'Weekly' => '毎週',
        'Monthly' => '毎月',
        'Yearly' => '毎年',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => '毎日',
        'Weekly' => '毎週',
        'Monthly' => '毎月',
        'Yearly' => '毎年',
    ),

    'duration_dom' => array(
        '' => '--管理者アクション--',
        '900' => '15分',
        '1800' => '30分',
        '2700' => '45分',
        '3600' => '1時間',
        '5400' => '1.5時間',
        '7200' => '2時間',
        '10800' => '3時間',
        '21600' => '6時間',
        '86400' => '1日',
        '172800' => '2日',
        '259200' => '3日',
        '604800' => '1週間',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'デフォルト',
        'seed' => 'シード',
        'exempt_domain' => '禁止リスト - 禁止ドメイン',
        'exempt_address' => '禁止リスト - 禁止Eメールアドレス',
        'exempt' => '禁止リスト - 禁止ID',
        'test' => 'テスト',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'アクティブ',
        'inactive' => '非アクティブ',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'メッセージ送信完了 / 施行済み',
        'send error' => '送信エラー: 他',
        'invalid email' => '送信エラー: 不正アドレス',
        'link' => 'クリックスルーリンク',
        'viewed' => '閲覧済み',
        'removed' => 'メール不可',
        'lead' => '作成された潜在顧客',
        'contact' => '作成された連絡先',
        'blocked' => 'Eメールアドレスまたはドメインによって抑止',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => '連絡先',
        'Users' => 'ユーザー',
        'Prospects' => 'ターゲット',
        'Leads' => '潜在顧客',
        'Accounts' => '口座',
    ),
    'merge_operators_dom' => array(
        'like' => '含む',
        'exact' => '完全一致',
        'start' => '～で始まる',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'はい',
        'false' => 'いいえ',
        'required' => '要求済み',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => '無効',
        1 => '使用可能',
    ),

    'projects_priority_options' => array(
        'high' => '高',
        'medium' => '中',
        'low' => '低',
    ),

    'projects_status_options' => array(
        'notstarted' => '開始前',
        'inprogress' => '進行中',
        'completed' => '完了',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => '説明を表示',
        'collapselegend' => '説明を非表示',
        'clickfordrilldown' => 'ドリルダウン',
        'detailview' => '詳細',
        'piechart' => 'パイ チャート',
        'groupchart' => 'グループチャート',
        'stackedchart' => '積み上げチャート',
        'barchart' => 'バー チャート',
        'horizontalbarchart' => '水平バー チャート',
        'linechart' => 'ライン チャート',
        'noData' => 'データ無し',
        'print' => '印刷',
        'pieWedgeName' => 'セクション',
    ),
    'release_status_dom' => array(
        'Active' => '稼働中',
        'Inactive' => '非稼働中',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'シングルクォーテーション (&#39;)',
        '"' => 'ダブルクォーテーション (&#34;)',
        '' => '--管理者アクション--',
        'other' => 'その他:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'その他:',
    ),
    'link_target_dom' => array(
        '_blank' => '新しいウィンドウ',
        '_self' => '同じウィンドウ',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => '手動',
        '30' => '30秒毎',
        '60' => '1時間毎',
        '180' => '毎3分',
        '300' => '毎5分',
        '600' => '毎10分',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => '停止',
        '30' => '30秒毎',
        '60' => '1時間毎',
        '180' => '毎3分',
        '300' => '毎5分',
        '600' => '毎10分',
    ),
    'date_range_search_dom' => array(
        '=' => 'イコール',
        'not_equal' => 'イコールでない',
        'greater_than' => '以後',
        'less_than' => '以前',
        'last_7_days' => '過去7日間',
        'next_7_days' => '次の7日間',
        'last_30_days' => '過去30日',
        'next_30_days' => '次の30日',
        'last_month' => '先月',
        'this_month' => '今月',
        'next_month' => '来月',
        'last_year' => '去年',
        'this_year' => '今年',
        'next_year' => '来年',
        'between' => '期間(範囲)',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'イコール',
        'not_equal' => 'イコールでない',
        'greater_than' => '～より大きい',
        'greater_than_equals' => '～以上',
        'less_than' => '～未満',
        'less_than_equals' => '～以下',
        'between' => '期間(範囲)',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'コピー',
        'move' => '移動',
        'donothing' => '何もしない',
    ),
    // PR 6009
    'inboundmail_assign_replies_to_admin' => array(
        'donothing' => '何もしない',
        'repliedtoowner' => 'Eメールのオーナーに返信',
        'recordowner' => '関連付けられているレコードの所有者',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => '結果', // PR 6522
    'ERR_SEARCH_INVALID_QUERY' => '検索の実行中にエラーが発生しました。クエリの構文が無効な場合があります。', // PR 6522
    'ERR_SEARCH_NO_RESULTS' => '検索条件に一致する結果はありません。検索条件を広げてみてください。', // PR 6522
    'LBL_SEARCH_PERFORMED_IN' => '以下で検索実行', // PR 6522
    'LBL_EMAIL_CODE' => 'Eメールコード:',
    'LBL_SEND' => '送信',
    'LBL_LOGOUT' => 'ログアウト',
    'LBL_TOUR_NEXT' => '次へ',
    'LBL_TOUR_SKIP' => 'スキップ',
    'LBL_TOUR_BACK' => '戻る',
    'LBL_TOUR_TAKE_TOUR' => 'ツアーに出かける',
    'LBL_MOREDETAIL' => '詳細' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'インライン編集' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => '見る' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'フィルタ' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => '追加' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Eメール アドレスを追加する。' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => '隠す/表示' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => '削除' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'クリア' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => '削除' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Eメール アドレスを削除' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'オプトアウトする',
    'LBL_ID_FF_OPT_IN' => 'オプト インする',
    'LBL_ID_FF_INVALID' => '無効にする',
    'LBL_ADD' => '追加' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => '会社ロゴ' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'コネクタポップアップ',
    'LBL_CLOSEINLINE' => '閉じる',
    'LBL_VIEWINLINE' => '見る',
    'LBL_INFOINLINE' => '情報',
    'LBL_PRINT' => '印刷',
    'LBL_HELP' => 'ヘルプ',
    'LBL_ID_FF_SELECT' => '選択',
    'DEFAULT' => '基本', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SORT' => '並べ替え',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'SMTP over SSLかTLSを有効',
    'LBL_NO_ACTION' => 'その名前のアクションがありません: %s',
    'LBL_NO_SHORTCUT_MENU' => '利用可能なアクションはありません。',
    'LBL_NO_DATA' => 'データ無し',

    'LBL_ERROR_UNDEFINED_BEHAVIOR' => '予期しないエラーが発生しました。', //PR 3669
    'LBL_ERROR_UNHANDLED_VALUE' => '値が正しく処理されていないため、プロセスが続行されません。', //PR 3669
    'LBL_ERROR_UNUSABLE_VALUE' => '使用不能な値が見つかり、プロセスの継続を妨げています。', //PR 3669
    'LBL_ERROR_INVALID_TYPE' => '値の種類が期待されるものと異なります。', //PR 3669

    'LBL_ROUTING_FLAGGED' => 'が指定されている',
    'LBL_NOTIFICATIONS' => '通知',

    'LBL_ROUTING_TO' => 'から',
    'LBL_ROUTING_TO_ADDRESS' => '送信先アドレス',
    'LBL_ROUTING_WITH_TEMPLATE' => 'テンプレートと共に',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => '会社電話、および住所情報の各フィールドがすでに入力されています。口座に登録された情報で上書きする場合はOKボタンを、そうでない場合はキャンセルボタンをクリックしてください。',
    'LBL_DROP_HERE' => '[ここへドロップ]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Gmailのデフォルトをセット',
    'LBL_EMAIL_ACCOUNTS_NAME' => '名前',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'アウトバウンドメールサーバー',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTPパスワード',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTPポート',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTPサーバー',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTPユーザー名',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => '初期値',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => '警告: 送信メール アカウントのユーザー名とパスワードが見つかりません。',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => '受信したメールを閲覧するためのアカウント設定をします。',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => '送信メールで利用するSMTPサーバーの情報を提供してください。',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => '完了',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'クリア',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => '宛先:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'CC:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'BCC:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => '宛先・CC・BCC',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'メールアドレス',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'フィルタ',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => '名前',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'アドレスが見つかりません',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => '保存してアドレス帳に追加',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'アドレス帳のエントリを選択',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'アドレス帳',
    'LBL_EMAIL_REPORTS_TITLE' => 'レポート',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => '注意！ 削除しようとしている送信アカウントは受信アカウントに紐付いています。削除しますか？',
    'LBL_EMAIL_ADDRESSES' => 'メール',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'メールアドレス',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Eメール アドレスがオプトインされていることを確認します: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Eメール アドレスを確認できません。',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'SuiteCRMへインポート',
    'LBL_EMAIL_ASSIGNMENT' => 'アサイン',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'メールに添付',
    'LBL_EMAIL_ATTACHMENT' => '添付',
    'LBL_EMAIL_ATTACHMENTS' => 'ファイルを添付',
    'LBL_EMAIL_ATTACHMENTS2' => 'SuiteCRM 文書管理から',
    'LBL_EMAIL_ATTACHMENTS3' => 'テンプレート添付ファイル',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'ファイル',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'ドキュメント',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'キャンセル',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => '文字コードセット',
    'LBL_EMAIL_CHECK' => 'Eメール確認',
    'LBL_EMAIL_CHECKING_NEW' => '新着Eメールをチェック',
    'LBL_EMAIL_CHECKING_DESC' => '新規メールをチェック中。<br><br>これが最初のチェックの場合、時間がかかることがあります。',
    'LBL_EMAIL_CLOSE' => '完了',
    'LBL_EMAIL_COFFEE_BREAK' => '新規メールをチェック中。<br><br>大量にメールがある場合は時間がかかることがあります。',

    'LBL_EMAIL_COMPOSE' => 'メール',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'このメールの受信者を指定してください。',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'このメールには本文がありません。送信しますか?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'このメールには件名がありません。送信しますか?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(題名なし)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'To、CC、BCC欄に正しいメールアドレスを入力してください。',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'このEメールを破棄しますか?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'このシグネチャを削除しますか?',

    'LBL_EMAIL_SENT_SUCCESS' => 'メールを送りました',

    'LBL_EMAIL_CREATE_NEW' => '--保存時に作成--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => '複数',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'データ無し',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => '送信者が送信した日',
    'LBL_EMAIL_DATE_TODAY' => '今日',
    'LBL_EMAIL_DELETE' => '削除',
    'LBL_EMAIL_DELETE_CONFIRM' => '選択したメッセージを削除しますか?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Eメールは削除されました。',
    'LBL_EMAIL_DELETING_MESSAGE' => 'メッセージを削除しています',
    'LBL_EMAIL_DETAILS' => '詳細',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => '連絡先に対して適用する場合は、主となる住所が使用されます。',

    'LBL_EMAIL_EMPTYING_TRASH' => 'ゴミ箱を空にしています',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'アウトバウンド用メールサーバーを削除',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'キャッシュファイルを削除',
    'LBL_EMAIL_EMPTY_MSG' => '表示するEメールがありません。',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => '表示するEメール アドレスがありません。',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'フォルダー名はユニークかつ空でない必要があります。やり直してください。',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'フォルダを削除できません。メールボックスが、当該フォルダかそのサブフォルダと紐づいています。',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => '状況から意図されたフォルダを決定することができません。再度試してください。',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => '設定を確認してください。',
    'LBL_EMAIL_ERROR_DESC' => 'エラーが見つかりました: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'この操作を行う権限を持っていません。サイト管理者に連絡してください。',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'フォルダ名が重複しています。',
    'LBL_EMAIL_ERROR_EMPTY' => '検索条件を入力してください。',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'エラーが発生しました。',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'サーバーからメッセージが削除されました。',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'メッセージはサーバーから削除されるか異なるフォルダに移動されます。',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'メールサーバーへの接続に失敗しました。サーバー管理者に連絡してください。',
    'LBL_EMAIL_ERROR_MOVE' => 'Eメールやメールアカウントをサーバー間で移動することはサポートされていません。',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => '移動エラー',
    'LBL_EMAIL_ERROR_NAME' => '名前は必須です。',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Fromアドレスが必要です。',
    'LBL_EMAIL_ERROR_NO_FILE' => 'ファイルを提供してください。',
    'LBL_EMAIL_ERROR_SERVER' => 'メールサーバーのアドレスは必須です。',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'このメールアカウントはまだ保存されていません。',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'メールサーバーとの通信中に問題が発生しました。',
    'LBL_EMAIL_ERROR_USER' => 'ログイン名は必須です。',
    'LBL_EMAIL_ERROR_PORT' => 'メールサーバーのポート番号は必須です。',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'サーバーのプロトコルは必須です。',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => '監視フォルダは必須です。',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'ゴミ箱フォルダは必須です。',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'この情報は有効ではありません。',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => '送信用のサーバーが指定されていません。',
    'LBL_EMAIL_ERROR_SENDING' => '送信Eメールエラー。管理者にお問い合わせください。',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0',        null, null, '.gif', '') . 'フォルダ',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder',        'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ADD' => '追加',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => '新たなフォルダを追加',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'リネームフォルダ',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => '新しいグループフォルダを追加',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'このフォルダに追加',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'このフォルダは変更できません',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'このフォルダを本当に削除しますか?\nこの処理は取り消しできません\nフォルダの削除は、そのフォルダに含まれる全てのフォルダも削除します。',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => '新しいフォルダ',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'このアクションを実行する前にフォルダを選択してください。',
    'LBL_EMAIL_FOLDERS_TITLE' => 'SuiteCRMフォルダ管理',

    'LBL_EMAIL_FORWARD' => '転送',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => '[[total]] 件中 [[count]] 件のEメールをダウンロードしました。',
    'LBL_EMAIL_FROM' => '開始',
    'LBL_EMAIL_GROUP' => 'グループ',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'グループ',
    'LBL_EMAIL_HOME_FOLDER' => 'ホーム',
    'LBL_EMAIL_IE_DELETE' => 'メールアカウントを削除中',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'シグネチャを削除中',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'このメールアカウントを削除しても良いですか?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => '削除しました。',
    'LBL_EMAIL_IE_SAVE' => 'メールアカウントの情報を保存しています。',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Eメールを取り込んでいます',
    'LBL_EMAIL_IMPORT_EMAIL' => 'SuiteCRM へのインポート',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'インポート設定',
    'LBL_EMAIL_INVALID' => '無効',
    'LBL_EMAIL_LOADING' => '読み込み中...',
    'LBL_EMAIL_MARK' => 'フラグ',
    'LBL_EMAIL_MARK_FLAGGED' => 'フラグをつける',
    'LBL_EMAIL_MARK_READ' => '既読とする',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'フラグをはずす',
    'LBL_EMAIL_MARK_UNREAD' => '未読とする',
    'LBL_EMAIL_ASSIGN_TO' => 'アサイン先',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'フォルダを追加',
    'LBL_EMAIL_MENU_COMPOSE' => 'このアドレス宛にメールを作成',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'フォルダを削除',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'ゴミ箱を空にする',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => '同期',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'キャッシュファイルを削除',
    'LBL_EMAIL_MENU_REMOVE' => '削除',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'フォルダをリネーム',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'フォルダの名前を変更中',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'この操作を試みる前に選択してください。',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'フォルダを作成 (リモートもしくはSuiteCRM内で)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'フォルダー名を削除(リモートまたは SuiteCRM内)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'アカウントの全てのゴミ箱フォルダを空にする',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'これらのEメールを既読にする',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'これらのEメールのフラグを外す',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'フォルダー名を変更(リモートまたは SuiteCRM内)',

    'LBL_EMAIL_MESSAGES' => 'メッセージ',

    'LBL_EMAIL_ML_NAME' => 'メーリングリスト名',
    'LBL_EMAIL_ML_ADDRESSES_1' => '選択されたメーリングリストアドレス',
    'LBL_EMAIL_ML_ADDRESSES_2' => '有効なメーリングリストアドレス',

    'LBL_EMAIL_MULTISELECT' => '複数選択するために<b>Ctrlを押しながらクリック</b>してください<br />(Macユーザーは<b>CMDを押しながらクリック</b>)',

    'LBL_EMAIL_NO' => 'いいえ',
    'LBL_EMAIL_NOT_SENT' => 'リクエストを受けることができませんでした。システム管理者へお問い合わせください。',

    'LBL_EMAIL_OK' => '了解',
    'LBL_EMAIL_ONE_MOMENT' => 'しばらくお待ちください...',
    'LBL_EMAIL_OPEN_ALL' => '複数のメッセージを開く',
    'LBL_EMAIL_OPTIONS' => 'オプション',
    'LBL_EMAIL_QUICK_COMPOSE' => 'クイック編集',
    'LBL_EMAIL_OPT_OUT' => 'メール不可',
    'LBL_EMAIL_OPT_IN' => 'オプトインされた',
    'LBL_EMAIL_OPT_IN_AND_INVALID' => 'オプトインされ無効',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => '送信付加かつ不正',
    'LBL_EMAIL_PERFORMING_TASK' => 'タスクを実行中',
    'LBL_EMAIL_PRIMARY' => 'メインアドレス',
    'LBL_EMAIL_PRINT' => '印刷',

    'LBL_EMAIL_QC_BUGS' => 'バグトラッカー',
    'LBL_EMAIL_QC_CASES' => 'チケット',
    'LBL_EMAIL_QC_LEADS' => '潜在顧客',
    'LBL_EMAIL_QC_CONTACTS' => '連絡先',
    'LBL_EMAIL_QC_TASKS' => 'タスク',
    'LBL_EMAIL_QC_OPPORTUNITIES' => '商談',
    'LBL_EMAIL_QUICK_CREATE' => 'クイック作成',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'フォルダを再構築中',
    'LBL_EMAIL_RELATE_TO' => '関連付け',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => '関連を参照',
    'LBL_EMAIL_RECORD' => 'Eメールレコード',
    'LBL_EMAIL_REMOVE' => '削除',
    'LBL_EMAIL_REPLY' => '返信',
    'LBL_EMAIL_REPLY_ALL' => '全員に返信',
    'LBL_EMAIL_REPLY_TO' => '返信',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'メッセージ',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Eメールを取得',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Eメールは一つだけ選択してください',
    'LBL_EMAIL_RETURN_TO_VIEW' => '直前のモジュールへ戻りますか?',
    'LBL_EMAIL_REVERT' => '戻す',
    'LBL_EMAIL_RELATE_EMAIL' => '関連Eメール',

    'LBL_EMAIL_RULES_TITLE' => 'ルール管理',

    'LBL_EMAIL_SAVE' => '保存',
    'LBL_EMAIL_SAVE_AND_REPLY' => '保存して返信',
    'LBL_EMAIL_SAVE_DRAFT' => 'ドラフト保存',
    'LBL_EMAIL_DRAFT_SAVED' => '案を保存されました',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null,    '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null,        null, '.gif', ''),
    'LBL_EMAIL_SEARCH_DATE_FROM' => '以下の指定日以降',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => '以下の指定日まで',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => '検索条件に合致する結果はありません。',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => '検索結果',

    'LBL_EMAIL_SELECT' => '選択',

    'LBL_EMAIL_SEND' => '送信',
    'LBL_EMAIL_SENDING_EMAIL' => 'Eメールを送信中',

    'LBL_EMAIL_SETTINGS' => '設定',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'メールアカウント',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'クリア',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => '新着メールをチェック',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => '送信元アドレス',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'テスト通知用Eメール:',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => '送信元名',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => '返信(Reply)',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => '全てのアカウントを同期',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => '設定された送信サーバー情報にもとづき、Eメールが指定された宛先に送信されました。Eメールが正しく送信され、サーバー情報が正しいことを確認してください。',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => '完全な SMTP ログを見る',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => '全てのアカウントに対する同期を実行しますか?\n多くのアカウントがある場合は多少時間がかかります。',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'シフトキーかコントロールキーを押して複数フォルダを選択してください。',
    'LBL_EMAIL_SETTINGS_GENERAL' => '一般',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'グループフォルダを作成',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'グループフォルダを編集',

    'LBL_EMAIL_SETTINGS_NAME' => '名前',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'これらの設定を有効にするには画面のリフレッシュが必要',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'アカウントを取得中',
    'LBL_EMAIL_SETTINGS_SAVED' => '設定が保存されました。',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Eメールをテキストで送信',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'ページごとに表示するメールの数',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => '表示設定',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => '初期設定',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => '利用できるユーザーフォルダ',
    'LBL_EMAIL_ERROR_PREPEND' => 'Eメールでエラーが発生しました:', // PR 6752
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => '利用中のメールアカウントで指定された送信サーバーが正しくありません。設定を確認するか、別の送信サーバーを選択してください。',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => '利用中のメールアカウントの送信サーバーが設定されていません。送信サーバーを選択するか、新たに追加してください。',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'デフォルトの署名',
    'LBL_EMAIL_SIGNATURES' => 'シグネチャ',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo!メール',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'その他',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ リモートフォルダ ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[SuiteCRM フォルダー]',
    'LBL_EMAIL_SUBJECT' => '件名',
    'LBL_EMAIL_SUCCESS' => '成功',
    'LBL_EMAIL_SUGAR_FOLDER' => 'SuiteCRM フォルダ',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'メールテンプレートのボディに入力がありません。',
    'LBL_EMAIL_TEMPLATES' => 'テンプレート',
    'LBL_EMAIL_TO' => '宛先',
    'LBL_EMAIL_VIEW' => '閲覧',
    'LBL_EMAIL_VIEW_HEADERS' => 'ヘッダを表示',
    'LBL_EMAIL_VIEW_RAW' => 'Eメールの元データを表示',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'この機能はPOP3を使用する場合はサポートされません。',
    'LBL_DEFAULT_LINK_TEXT' => 'デフォルトリンクテキスト',
    'LBL_EMAIL_YES' => 'はい',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'テストメール送信',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'テストメール送信完了',
    'LBL_EMAIL_MESSAGE_NO' => 'メッセージID', // Counter. Message number xx
    'LBL_EMAIL_IMPORT_SUCCESS' => 'インポートに成功しました',
    'LBL_EMAIL_IMPORT_FAIL' => 'インポートに失敗しました。対象メッセージはすでにインポート済みかサーバーから削除されています。',

    'LBL_LINK_NONE' => 'なし',
    'LBL_LINK_ALL' => '全て',
    'LBL_LINK_RECORDS' => 'レコード',
    'LBL_LINK_SELECT' => '選択',
    'LBL_LINK_ACTIONS' => '活動', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CLOSE_ACTIVITY_HEADER' => '確認',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'この #module# を閉じても良いですか?',
    'LBL_INVALID_FILE_EXTENSION' => '不正な拡張子',

    'ERR_AJAX_LOAD' => 'エラー:',
    'ERR_AJAX_LOAD_FAILURE' => '要求に対して処理エラーが発生しました。後でもう一度試してください。',
    'ERR_AJAX_LOAD_FOOTER' => 'このエラーが引き続き発生する場合、このモジュールの Ajax を無効にするよう管理者に依頼してください。',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => '小数点シンボルに1000位セパレータと同じ文字を指定することはできません。\n\n小数点シンボルを修正してください。',
    'ERR_DELETE_RECORD' => '連絡先を削除するにはレコード番号を指定する必要があります。',
    'ERR_EXPORT_DISABLED' => 'エクスポートを無効',
    'ERR_EXPORT_TYPE' => 'エクスポート中にエラー ',
    'ERR_INVALID_EMAIL_ADDRESS' => '無効なEメールアドレスです',
    'ERR_INVALID_FILE_REFERENCE' => '不正なファイル参照',
    'ERR_NO_HEADER_ID' => 'この機能はこのテーマでは利用できません。',
    'ERR_NOT_ADMIN' => '管理エリアへのアクセスが認められていません。',
    'ERR_MISSING_REQUIRED_FIELDS' => '入力なし:',
    'ERR_INVALID_REQUIRED_FIELDS' => '無効なフィールド:',
    'ERR_INVALID_VALUE' => '不正な値:',
    'ERR_NO_SUCH_FILE' => 'システムにファイルが存在しません。',
    'ERR_FILE_EMPTY' => 'ファイルは空です', // PR 6672
    'ERR_NO_SINGLE_QUOTE' => 'シングルクォーテーションマークは使用できません: ',
    'ERR_NOTHING_SELECTED' => '実行する前に選択してください。',
    'ERR_SELF_REPORTING' => '自分自身にレポートできません',
    'ERR_SQS_NO_MATCH_FIELD' => 'フィールドにマッチしません: ',
    'ERR_SQS_NO_MATCH' => 'マッチしません',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Meta-Data定義用のdisplayParam属性中の\'key\'インデックスを指定してください',
    'ERR_EXISTING_PORTAL_USERNAME' => 'エラー: ポータル名はすでに他の連絡先にアサインされています。',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'フィールドの値は、有効桁数値として適切ではありません。',
    'ERR_EXTERNAL_API_SAVE_FAIL' => '外部アカウントに保存中にエラーが発生しました。',
    'ERR_NO_DB' => 'データベースに接続できませんでした。詳細については suitecrm.log を参照してください。',
    'ERR_DB_FAIL' => 'データベースで障害が発生しました。詳細については suitecrm.log を参照してください。',
    'ERR_DB_VERSION' => 'SuiteCRM {0} ファイルは、SuiteCRM {1} データベースでのみ使用されます。',

    'LBL_ACCOUNT' => '口座',
    'LBL_ACCOUNTS' => '口座',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'サマリ表示',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'サマリ表示',
    'LBL_ADD_BUTTON' => '追加',
    'LBL_ADD_DOCUMENT' => 'ドキュメント追加',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'ターゲットリストに追加',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'ターゲット リストに連絡先を追加',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'クリックして閉じる',
    'LBL_ADDITIONAL_DETAILS' => '追加詳細',
    'LBL_ADMIN' => '管理',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => '保存',
    'LBL_ASSIGNED_TO_USER' => 'ユーザーにアサイン',
    'LBL_ASSIGNED_TO' => 'アサイン先:',
    'LBL_BACK' => '戻る',
    'LBL_BILLING_ADDRESS' => '請求先住所',
    'LBL_QUICK_CREATE' => '作成 ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - オープンソース CRM',
    'LBL_BUGS' => 'バグトラッカー',
    'LBL_BY' => 'by',
    'LBL_CALLS' => 'コール',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'キューに従ってキャンペーンメールを送信',
    'LBL_SUBMIT_BUTTON_LABEL' => '作成',
    'LBL_CASE' => 'チケット',
    'LBL_CASES' => 'チケット',
    'LBL_CHANGE_PASSWORD' => 'パスワード変更',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => '全てチェック',
    'LBL_CITY' => '市区町村',
    'LBL_CLEAR_BUTTON_LABEL' => 'クリア',
    'LBL_CLEAR_BUTTON_TITLE' => 'クリア',
    'LBL_CLEARALL' => '全てクリア',
    'LBL_CLOSE_BUTTON_TITLE' => '完了にする', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'これを完了状態にして複製を新規作成', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'これを完了状態にして複製を新規作成', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => '未決項目:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Eメール作成',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Eメール作成',
    'LBL_SEARCH_DROPDOWN_YES' => 'はい',
    'LBL_SEARCH_DROPDOWN_NO' => 'いいえ',
    'LBL_CONTACT_LIST' => '連絡先一覧',
    'LBL_CONTACT' => '連絡先',
    'LBL_CONTACTS' => '連絡先',
    'LBL_CONTRACT' => '契約',
    'LBL_CONTRACTS' => '契約',
    'LBL_COUNTRY' => '国:',
    'LBL_CREATE_BUTTON_LABEL' => '作成', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CREATED_BY_USER' => 'ユーザーが作成',
    'LBL_CREATED_USER' => 'ユーザーが作成',
    'LBL_CREATED' => '作成者',
    'LBL_CURRENT_USER_FILTER' => '自分の項目のみ:',
    'LBL_CURRENCY' => '通貨:',
    'LBL_DOCUMENTS' => 'ドキュメント',
    'LBL_DATE_ENTERED' => '入力日:',
    'LBL_DATE_MODIFIED' => '最終更新日:',
    'LBL_EDIT_BUTTON' => '編集',
    'LBL_DUPLICATE_BUTTON' => '複製',
    'LBL_DELETE_BUTTON' => '削除',
    'LBL_DELETE' => '削除',
    'LBL_DELETED' => '削除済み',
    'LBL_DIRECT_REPORTS' => '直属の部下',
    'LBL_DONE_BUTTON_LABEL' => '完了',
    'LBL_DONE_BUTTON_TITLE' => '完了',
    'LBL_FAVORITES' => 'お気に入り',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'vCardファイルを選択してください。',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard がこのモジュールのすべての必須フィールドをもっていません。詳細については suitecrm.log を参照してください。',
    'LBL_VCARD_ERROR_FILESIZE' => 'アップロードしたファイルは、HTML 形式で指定された 30000 バイトのサイズの制限を超えています。',
    'LBL_VCARD_ERROR_DEFAULT' => 'vCard ファイルのアップロード エラーが発生しました。詳細については suitecrm.log を参照してください。',
    'LBL_IMPORT_VCARD' => 'インポートvCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'インポートvCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'インポートvCard',
    'LBL_VIEW_BUTTON' => '閲覧',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'PDFをメール送信',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'PDFをメール送信',
    'LBL_EMAILS' => 'Eメール',
    'LBL_EMPLOYEES' => '従業員',
    'LBL_ENTER_DATE' => '入力日',
    'LBL_EXPORT' => 'エクスポート',
    'LBL_FAVORITES_FILTER' => 'お気に入り:',
    'LBL_GO_BUTTON_LABEL' => '実行',
    'LBL_HIDE' => '非表示',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'インポート',
    'LBL_IMPORT_STARTED' => 'インポートがスタートしました。',
    'LBL_LAST_VIEWED' => '参照履歴',
    'LBL_LEADS' => '潜在顧客',
    'LBL_LESS' => '以下',
    'LBL_CAMPAIGN' => 'キャンペーン:',
    'LBL_CAMPAIGNS' => 'キャンペーン',
    'LBL_CAMPAIGNLOG' => 'キャンペーンログ',
    'LBL_CAMPAIGN_CONTACT' => 'キャンペーン',
    'LBL_CAMPAIGN_ID' => 'キャンペーンID',
    'LBL_CAMPAIGN_NONE' => 'なし',
    'LBL_THEME' => 'テーマ:',
    'LBL_FOUND_IN_RELEASE' => '発見したリリース',
    'LBL_FIXED_IN_RELEASE' => '修正したリリース',
    'LBL_LIST_ACCOUNT_NAME' => '口座名',
    'LBL_LIST_ASSIGNED_USER' => 'ユーザー',
    'LBL_LIST_CONTACT_NAME' => '連絡先名',
    'LBL_LIST_CONTACT_ROLE' => '連絡先の役割',
    'LBL_LIST_DATE_ENTERED' => '作成日',
    'LBL_LIST_EMAIL' => 'メール',
    'LBL_LIST_NAME' => '名前',
    'LBL_LIST_OF' => '件中',
    'LBL_LIST_PHONE' => '電話番号',
    'LBL_LIST_RELATED_TO' => '関連先',
    'LBL_LIST_USER_NAME' => 'ユーザー名',
    'LBL_LISTVIEW_NO_SELECTED' => '少なくとも一つのレコードを選択してください。',
    'LBL_LISTVIEW_TWO_REQUIRED' => '最低2つのレコードを選択して下さい。',
    'LBL_LISTVIEW_OPTION_SELECTED' => '選択されたレコード',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => '選択済み: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => '名',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => '姓',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => '様',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => '非凡なコード モンキー',
    'LBL_CANCEL' => 'キャンセル',
    'LBL_VERIFY' => '検証',
    'LBL_RESEND' => '再送信',
    'LBL_PROFILE' => 'プロフィール',
    'LBL_MAILMERGE' => 'メールマージ',
    'LBL_MASS_UPDATE' => '一括更新',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => '更新可能なフィールドがありませんでした。',
    'LBL_OPT_OUT_FLAG_PRIMARY' => '受信拒否メールアドレス',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'プライマリEメールをオプト・インする',
    'LBL_MEETINGS' => 'ミーティング',
    'LBL_MEETING_GO_BACK' => 'ミーティングへ戻る',
    'LBL_MEMBERS' => 'メンバー一覧',
    'LBL_MEMBER_OF' => '次のメンバー',
    'LBL_MODIFIED_BY_USER' => 'ユーザーが更新',
    'LBL_MODIFIED_USER' => 'ユーザーが更新',
    'LBL_MODIFIED' => '更新者',
    'LBL_MODIFIED_NAME' => '更新者',
    'LBL_MORE' => 'もっと',
    'LBL_MY_ACCOUNT' => '私の設定',
    'LBL_NAME' => '名前',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => '作成',
    'LBL_NEW_BUTTON_TITLE' => '作成',
    'LBL_NEXT_BUTTON_LABEL' => '次へ',
    'LBL_NONE' => '--なし--',
    'LBL_NOTES' => 'ノート',
    'LBL_OPPORTUNITIES' => '商談',
    'LBL_OPPORTUNITY_NAME' => '商談名',
    'LBL_OPPORTUNITY' => '商談',
    'LBL_OR' => 'または',
    'LBL_PANEL_OVERVIEW' => '概要', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ASSIGNMENT' => 'その他', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ADVANCED' => '追加情報', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PARENT_TYPE' => '親タイプ',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => '郵便番号:',
    'LBL_PRIMARY_ADDRESS_CITY' => '主となる市区町村:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '主となる国:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '主となる郵便番号:',
    'LBL_PRIMARY_ADDRESS_STATE' => '主となる都道府県:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '主となる住所 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '主となる住所 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => '主となる番地:',
    'LBL_PRIMARY_ADDRESS' => '主となる住所:',

    'LBL_PROSPECTS' => '見込み客',
    'LBL_PRODUCTS' => '商品',
    'LBL_PROJECT_TASKS' => 'プロジェクトタスク',
    'LBL_PROJECTS' => 'プロジェクト',
    'LBL_QUOTES' => '見積',

    'LBL_RELATED' => '関連',
    'LBL_RELATED_RECORDS' => '関連レコード',
    'LBL_REMOVE' => '削除',
    'LBL_REPORTS_TO' => 'レポート先',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => '入力必須項目',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => '完了',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'フルフォーム',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'フルフォーム',
    'LBL_SAVE_NEW_BUTTON_LABEL' => '保存後新規作成',
    'LBL_SAVE_NEW_BUTTON_TITLE' => '保存後新規作成',
    'LBL_SAVE_OBJECT' => '{0} を保存',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => '検索',
    'LBL_SEARCH_BUTTON_TITLE' => '検索',
    'LBL_FILTER' => 'フィルタ',
    'LBL_SEARCH' => '検索',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'もっと',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'ファイルのフォーマットが無効です。',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => '選択',
    'LBL_SELECT_BUTTON_TITLE' => '選択',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => '参照',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => '参照',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => '連絡先の選択',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => '連絡先の選択',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'レポートから選択',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'レポート選択',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'ユーザーを選択',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'ユーザーを選択',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'ユーザーを選択',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'ユーザーを選択',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'ユーザーをクリア',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'ユーザークリア',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'このページを構成するリソース (クエリ、ファイル)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => '秒',
    'LBL_SERVER_RESPONSE_TIME' => 'サーバー応答時間:',
    'LBL_SERVER_MEMORY_BYTES' => 'バイト',
    'LBL_SERVER_MEMORY_USAGE' => 'サーバー使用メモリ: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => '使用状況: - モジュール: {0} - アクション: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'サーバー最大使用メモリ: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => '出荷先住所',
    'LBL_SHOW' => '表示',
    'LBL_STATE' => '都道府県:', //Used for Case State, situation, condition
    'LBL_STATUS_UPDATED' => '当イベントのステータスが更新されました!',
    'LBL_STATUS' => 'ステータス:',
    'LBL_STREET' => '番地',
    'LBL_SUBJECT' => '件名',

    'LBL_INBOUNDEMAIL_ID' => '受信メールID',

    'LBL_SCENARIO_SALES' => '営業',
    'LBL_SCENARIO_MARKETING' => 'マーケティング',
    'LBL_SCENARIO_FINANCE' => '金融',
    'LBL_SCENARIO_SERVICE' => 'サービス',
    'LBL_SCENARIO_PROJECT' => 'プロジェクト管理',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'このシナリオは販売アイテムの管理を容易にします',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'このシナリオはマーケティングアイテムの管理を容易にします',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'このシナリオは金融関連アイテムの管理を容易にします',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'このシナリオはサービス関連アイテムの管理を容易にします',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'このシナリオはプロジェクト関連アイテムの管理を容易にします',

    'LBL_SYNC' => '同期',
    'LBL_TABGROUP_ALL' => 'CRM',
    'LBL_TABGROUP_ACTIVITIES' => '活動',
    'LBL_TABGROUP_COLLABORATION' => '共同作業',
    'LBL_TABGROUP_MARKETING' => 'マーケティング',
    'LBL_TABGROUP_OTHER' => 'その他',
    'LBL_TABGROUP_SALES' => '営業',
    'LBL_TABGROUP_SUPPORT' => 'サポート',
    'LBL_TASKS' => 'タスク',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'メールをアーカイブする',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'メールをアーカイブする',
    'LBL_UNDELETE_BUTTON_LABEL' => '削除取消',
    'LBL_UNDELETE_BUTTON_TITLE' => '削除取消',
    'LBL_UNDELETE_BUTTON' => '削除取消',
    'LBL_UNDELETE' => '削除取消',
    'LBL_UNSYNC' => '同期取消',
    'LBL_UPDATE' => '更新',
    'LBL_USER_LIST' => 'ユーザー一覧',
    'LBL_USERS' => 'ユーザー',
    'LBL_VERIFY_EMAIL_ADDRESS' => '既存のEメールをチェックする...',
    'LBL_VERIFY_PORTAL_NAME' => '既存のポータル名をチェックする...',
    'LBL_VIEW_IMAGE' => '見る',

    'LNK_ABOUT' => '製品について',
    'LNK_ADVANCED_FILTER' => '高度なフィルタ',
    'LNK_BASIC_FILTER' => 'クイック フィルタ',
    'LBL_ADVANCED_SEARCH' => '高度なフィルタ',
    'LBL_QUICK_FILTER' => 'クイック フィルタ',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => '全て表示',
    'LNK_CLOSE' => '閉じる',
    'LBL_MODIFY_CURRENT_FILTER' => '現在のフィルタを変更する',
    'LNK_SAVED_VIEWS' => '保存済みビュー',
    'LNK_DELETE' => '削除',
    'LNK_EDIT' => '編集',
    'LNK_GET_LATEST' => '最新を取得',
    'LNK_GET_LATEST_TOOLTIP' => '最新と入れ替え',
    'LNK_HELP' => 'ヘルプ',
    'LNK_CREATE' => '作成',
    'LNK_LIST_END' => '最後',
    'LNK_LIST_NEXT' => '次へ',
    'LNK_LIST_PREVIOUS' => '前へ',
    'LNK_LIST_RETURN' => '一覧へ戻る',
    'LNK_LIST_START' => '最初',
    'LNK_LOAD_SIGNED' => 'サイン',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'サイン済みと入れ替え',
    'LNK_PRINT' => '印刷',
    'LNK_BACKTOTOP' => 'トップに戻る',
    'LNK_REMOVE' => '削除',
    'LNK_RESUME' => '戻す',
    'LNK_VIEW_CHANGE_LOG' => '変更履歴表示',

    'NTC_CLICK_BACK' => 'エラーを修正するにはブラウザの戻るボタンをクリックしてください',
    'NTC_DATE_FORMAT' => '(年年年年 月月 日日)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => '本当にこのレコードを削除してよいですか?',
    'NTC_TEMPLATE_IS_USED' => 'このテンプレートは、少なくとも一つのEメールマーケティングで利用されています。削除しますか？',
    'NTC_TEMPLATES_IS_USED' => '次のテンプレートは、メール マーケティング レコードで使用されます。削除してもよろしいですか？' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => '本当にこのレコードを削除してよいですか?',
    'NTC_DELETE_CONFIRMATION_NUM' => '次を削除してもよいですか: ',
    'NTC_UPDATE_CONFIRMATION_NUM' => '次を更新してもよいですか? ',
    'NTC_DELETE_SELECTED_RECORDS' => 'レコード選択',
    'NTC_LOGIN_MESSAGE' => 'ユーザー名とパスワードを入力してください:',
    'NTC_NO_ITEMS_DISPLAY' => 'なし',
    'NTC_REMOVE_CONFIRMATION' => '本当にこのリレーションを削除してよいですか?',
    'NTC_REQUIRED' => '必須項目',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'ようこそ',
    'NTC_YEAR_FORMAT' => '(年年年年)',
    'WARN_UNSAVED_CHANGES' => '更新した情報を保存せずに画面を移動しようとしています。この画面から移動しても良いですか？',
    'ERROR_NO_RECORD' => 'レコードの検索中にエラー。このレコードは削除されているか、閲覧する権限がありません。',
    'WARN_BROWSER_VERSION_WARNING' => '<b>警告:</b>ブラウザーのバージョンがサポートされていない、または、サポートされていないブラウザーを使用しています。<p></p> 下記バージョンのブラウザーをお勧めします <p></p> <ul><li>インターネット エクスプ ローラー 10 (互換性ビューはサポートされていません) <li>Firefox 32.0 <li>Safari 5.1 <li>Chrome 37</ul>。',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>警告:</b>お使いのブラウザーはサポートされていない IE 互換性ビューです。',
    'ERROR_TYPE_NOT_VALID' => 'エラー: このタイプは有効ではありません。',
    'ERROR_NO_BEAN' => 'エラー：No Bean',
    'LBL_DUP_MERGE' => '重複を検出',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'サブスクリプションの管理',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'サブスクリプションの管理対象: ',
    // Ajax status strings
    'LBL_LOADING' => 'ロード中....',
    'LBL_SEARCHING' => '検索中...',
    'LBL_SAVING_LAYOUT' => 'レイアウトを保存中....',
    'LBL_SAVED_LAYOUT' => 'レイアウトは保存されました。',
    'LBL_SAVED' => '保存済み',
    'LBL_SAVING' => '保存中',
    'LBL_DISPLAY_COLUMNS' => '列を表示',
    'LBL_HIDE_COLUMNS' => '列を非表示',
    'LBL_SEARCH_CRITERIA' => '検索条件',
    'LBL_SAVED_VIEWS' => 'ビューを保存',
    'LBL_PROCESSING_REQUEST' => '処理中...',
    'LBL_REQUEST_PROCESSED' => '完了',
    'LBL_AJAX_FAILURE' => 'Ajaxエラー',
    'LBL_MERGE_DUPLICATES' => '重複をマージ',
    'LBL_SAVED_FILTER_SHORTCUT' => '私のフィルタ',
    'LBL_SEARCH_POPULATE_ONLY' => '上記の検索フォームを用いて検索を実行',
    'LBL_DETAILVIEW' => '詳細ビュー',
    'LBL_LISTVIEW' => 'リストビュー',
    'LBL_EDITVIEW' => '編集ビュー',
    'LBL_BILLING_STREET' => '請求先住所:',
    'LBL_SHIPPING_STREET' => '配送先住所:',
    'LBL_SEARCHFORM' => '検索フォーム',
    'LBL_SAVED_SEARCH_ERROR' => 'このビューに名前を付けてください。',
    'LBL_DISPLAY_LOG' => 'ログを表示',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'システム管理',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'セッションタイムアウト',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'セッションがおよそ2分でタイムアウトします。作業内容を保存してください。',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'セッションがタイムアウトしました',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "アジェンダ: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'ミーティング',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'コール通知',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => '時間: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => '場所: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => '詳細: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'ステータス: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => '関連: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nクリック OK で情報を表示します。",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nクリック OK で情報を表示します。",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'イベント',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'イベントが設定されていません。',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => '場所は設定されていません。',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => '開始日が定義されていません。',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => '情報がありません。',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => '見つかりませんでした。検索条件を変更して、やり直しますか？',
    'MSG_LIST_VIEW_NO_RESULTS' => '情報がありません： <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => '作成：<item1> as a new <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'または、検索条件を変更します。',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => '現在保存されたレコードがありません。<item2>または <item3>してください。',

    'LBL_CLICK_HERE' => 'ココをクリック',
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => '私のお気に入りに追加',
    'LBL_CREATE_CONTACT' => '連絡先を作成',
    'LBL_CREATE_CASE' => 'チケット作成',
    'LBL_CREATE_NOTE' => 'ノート作成',
    'LBL_CREATE_OPPORTUNITY' => '商談作成',
    'LBL_SCHEDULE_CALL' => 'コール作成',
    'LBL_SCHEDULE_MEETING' => 'ミーティング作成',
    'LBL_CREATE_TASK' => 'タスク作成',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'フォームの生成',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Web フォームを保存',
    'LBL_AVAILABLE_FIELDS' => '使用可能なフィールド',
    'LBL_FIRST_FORM_COLUMN' => '1番目のフォームの列',
    'LBL_SECOND_FORM_COLUMN' => '2番目のフォームの列',
    'LBL_ASSIGNED_TO_REQUIRED' => '未入力の必須項目: アサイン先',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => '未入力の必須項目: 関連のキャンペーン',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => '作成する Web フォーム ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => '作成するこのフォームを送信する ',

    'LBL_ADD_ALL_LEAD_FIELDS' => '全フィールドの追加',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'すべてのフィールドをリセットする',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => '全フィールドの削除',
    'LBL_NEXT_BTN' => '次へ',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'イメージタイプの添付ファイルのみ埋め込めます。',
    'LBL_TRAINING' => 'サポート フォーラム',
    'ERR_MSSQL_DB_CONTEXT' => 'データベースコンテキストが変更されました',
    'ERR_MSSQL_WARNING' => '警告:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'エラー: ファイル[[file]]がありません。対応するHTMLファイルが蜜からないため作成できません。',
    'ERR_CANNOT_FIND_MODULE' => 'エラー: モジュール[[module]]は存在しません。',
    'LBL_ALT_ADDRESS' => '別の住所:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'エラー: displayParam配列中の\'key\'と\'copy\'に対して引数の数が異なっています。',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => '一般',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'フィルター',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => '私の項目のみ',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'タイトル',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => '行の表示',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => '管理者が設定した SuiteCRM ダッシュレットの最大数に達しました。さらに追加するには SuiteCRM ダッシュレットを削除してください。',
    'LBL_ADDING_DASHLET' => 'SuiteCRM ダッシュレットを追加しています ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM ダッシュレット追加',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'この SuiteCRM ダッシュレットを削除してもよろしいですか？',
    'LBL_REMOVING_DASHLET' => 'SuiteCRM ダッシュレットを削除しています ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM ダッシュレット削除',

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'ページをロード中、お待ちください...',

    'LBL_RELOAD_PAGE' => 'この SuiteCRM ダッシュレットを使用するには <a href="javascript: window.location.reload()"> ウィンドウを再読み込み</a> してください。',
    'LBL_ADD_DASHLETS' => 'ダッシュレットの追加',
    'LBL_CLOSE_DASHLETS' => '完了',
    'LBL_OPTIONS' => 'オプション',
    'LBL_1_COLUMN' => '1列',
    'LBL_2_COLUMN' => '2列',
    'LBL_3_COLUMN' => '3列',
    'LBL_PAGE_NAME' => 'ページ名',

    'LBL_SEARCH_RESULTS' => '検索結果',
    'LBL_SEARCH_MODULES' => 'モジュール',
    'LBL_SEARCH_TOOLS' => 'ツール',
    'LBL_SEARCH_HELP_TITLE' => 'マルチセレクトコントロールの検索方法と保存済み検索の利用方法',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'イメージなし',

    'LBL_MODULE' => 'モジュール',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => '左からアドレスをコピー:',
    'LBL_SAVE_AND_CONTINUE' => '保存して継続',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>マルチセレクト コントロール</strong></p><ul><li>値をクリックして属性を表示してください。</li><li>Ctrl-クリック で複数を選択できます。MacユーザーはCMD-クリックを使用します。</li><li>2つの属性間の全てを選択する場合、最初の属性をクリックし次に最後の属性をシフト-クリックします。</li></ul><p><strong>詳細検索とレイアウト オプション</strong><br><br><b>保存済み検索とレイアウト</b>オプションを使うと、検索パラメタと一覧画面のカスタムレイアウトを保存することができ、次回以降、同じ検索をすばやく行うことができます。保存済み検索とレイアウトの数に制限はありません。保存された検索の名前は保存済み検索エリアに表示されます。最後に保存されたものがトップに表示されます。<br><br>一覧画面のレイアウトをカスタマイズするには、カラムの非表示と表示ボックスを用い、表示したいカラムを選択します。例えば、レコード名、担当ユーザー、担当ユーザーチームといった詳細情報を非表示にしたり、表示したりできます。一覧画面にカラムを追加するには、非表示カラムからカラムを選択し、左向きの矢印を押下して表示カラムのボックスに移動します。一覧画面からカラムを非表示にするには、表示カラムからカラムを選択し、右向き矢印を使って非表示カラムのボックスに移動します。<br><br>レイアウトの設定を保存したら、いつでもカスタムのレイアウトで検索結果を見ることができます。<br><br><strong>検索とレイアウトの更新</strong><ol><li><b>検索結果に名前を付けて保存</b>フィールドに名前を入力し、<b>保存</b>をクリックすることで検索結果を保存します。入力した名前は<b>クリア</b>ボタンのすぐそばの保存済み検索に表示されます。</li><li>保存済み検索を見る場合、保存済み検索一覧から当該検索を選択してください。検索結果が一覧画面として表示されます。</li><li>保存済み検索の属性を更新する場合、保存済み検索を一覧から選択し、新たな検索条件かレイアウトを指定して、<b>更新</b>を押下してください。</li><li>保存済み検索を削除する場合、保存済み検索から当該検索を選択し、<b>削除< /b>を押下してください。その後、確認画面で<b>OK</b>を押下してください。</li></ol>',

    //resource management
    'ERR_QUERY_LIMIT' => 'エラー: $module モジュールの検索リミット $limit に達しました。',
    'ERROR_NOTIFY_OVERRIDE' => 'エラー: ResourceObserver->notify() をオーバーライドする必要があります。',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'エラー: メタファイルが空もしくは存在しないため、モニターを作成できません。',
    'ERR_MONITOR_NOT_CONFIGURED' => 'エラー: 要求された名前の設定されたモニターが存在しません。',
    'ERR_UNDEFINED_METRIC' => 'エラー: 未定義のマトリックスに値は設定できません。',
    'ERR_STORE_FILE_MISSING' => 'エラー: 保存された実装ファイルが見つかりません。',

    'LBL_MONITOR_ID' => 'モニターID',
    'LBL_USER_ID' => 'ユーザーID',
    'LBL_MODULE_NAME' => 'モジュール名',
    'LBL_ITEM_ID' => '項目ID',
    'LBL_ITEM_SUMMARY' => '項目概要',
    'LBL_ACTION' => 'アクション',
    'LBL_SESSION_ID' => 'セッションID',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStackがユーザーID {0} 用に作成されました。',
    'LBL_VISIBLE' => 'レコードの可視性',
    'LBL_DATE_LAST_ACTION' => '最後のアクションの日付',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'は、次よりも前ではない ',
    'MSG_IS_MORE_THAN' => 'は次より大きい',
    'MSG_IS_LESS_THAN' => 'は次より小さい',
    'MSG_SHOULD_BE' => '以下に従ってください。',
    'MSG_OR_GREATER' => '以上',

    'LBL_LIST' => '一覧',
    'LBL_CREATE_BUG' => '不具合作成',

    'LBL_OBJECT_IMAGE' => 'オブジェクトのイメージ',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => '日付選択',

    'LBL_VALIDATE_RANGE' => 'は有効な範囲内にありません',
    'LBL_CHOOSE_START_AND_END_DATES' => '開始と終了の日付の範囲を選択してください。',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => '開始と終了のエントリの範囲を選択してください。',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => '全て',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'エラー: Beanパラメータの配列の要素数と結果の配列の要素数が一致しません。',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'エラー: モジュールの関連エントリがありません。',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'エラー: {0} コネクタのデータを取得できません。サービスが現在利用不可の状態であるか、設定に誤りがあります。コネクタエラーメッセージ：({1})',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'IIS/FastCGI sapiを使った際の経験から、php.iniファイルのfastcgi.logging を 0にセットしてください。',

    //Collection Field
    'LBL_COLLECTION_NAME' => '名前',
    'LBL_COLLECTION_PRIMARY' => 'メインアドレス',
    'ERROR_MISSING_COLLECTION_SELECTION' => '空の必須入力フィールド',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'アサインされたユーザー',
    'LBL_DESCRIPTION' => '詳細',

    'LBL_YESTERDAY' => '昨日',
    'LBL_TODAY' => '今日',
    'LBL_TOMORROW' => '明日',
    'LBL_NEXT_WEEK' => '来週',
    'LBL_NEXT_MONDAY' => '来週月曜日',
    'LBL_NEXT_FRIDAY' => '来週金曜日',
    'LBL_TWO_WEEKS' => '2週間',
    'LBL_NEXT_MONTH' => '来月',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => '翌月第一日',
    'LBL_THREE_MONTHS' => '3か月',
    'LBL_SIXMONTHS' => '6か月',
    'LBL_NEXT_YEAR' => '来年',

    //Datetimecombo fields
    'LBL_HOURS' => '時',
    'LBL_MINUTES' => '分',
    'LBL_MERIDIEM' => '子午線',
    'LBL_DATE' => '日',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => '自動更新',

    'LBL_DURATION_DAY' => '日',
    'LBL_DURATION_HOUR' => '時',
    'LBL_DURATION_MINUTE' => '分',
    'LBL_DURATION_DAYS' => '日',
    'LBL_DURATION_HOURS' => '期間時間',
    'LBL_DURATION_MINUTES' => '期間分',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => '月選択',
    'LBL_ENTER_YEAR' => '年入力',
    'LBL_ENTER_VALID_YEAR' => '有効な年を入力してください。',

    //File write error label
    'ERR_FILE_WRITE' => '{0}ファイルを書き込めません。システムやWebサーバーのパーミッションを確認してください。',
    'ERR_FILE_NOT_FOUND' => 'エラー：{0}ファイルをロードできません。システムやWebサーバーのパーミッションを確認してください。',

    'LBL_AND' => 'と',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => '外部ソース上のファイル',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'セキュリティ',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"これはインポートの準備ができたファイルに期待される内容例を提供するサンプル インポート ファイルです。"
"ファイルはフィールド修飾子として二重引用符を使用し、コンマで区切った .csv ファイルです。"

"ヘッダー行はファイルの最上位の行にあり、アプリケーションに表示されるフィールドのラベルが含まれています。"
"これらのラベルはファイル内のデータをアプリケーションのフィールドに対応付けるために使用されます。"

"注意: データベース名をヘッダー行で使用される場合もあります。これは、インポートするためにエクスポートされたデータのリストを提供する際、 phpMyAdmin または別のデータベース ツールを使用するときにしばしば有用です。"
"インポート プロセス が データ をヘッダ列に基づく適切なフィールドと一致させるので、列の順序は重要でありません。"


"テンプレートとしてこのファイルを使用するには:"
"1. データのサンプル行を削除する"
"2. あなたが今読んでいるヘルプ テキストを削除する"
"3. 適切な行および列に独自のデータを入力する"
"4. お使いのシステムの既存の場所にファイルを保存する"
"5. アプリケーションの 操作 メニューから インポート オプションをクリックして、アップロードするファイルを選択する"   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => '現在の通知はありません',
    'LBL_ALT_SORT_DESC' => '降順に並び替え',
    'LBL_ALT_SORT_ASC' => '昇順に並び替え',
    'LBL_ALT_SORT' => '並び替え',
    'LBL_ALT_SHOW_OPTIONS' => 'オプションを表示する',
    'LBL_ALT_HIDE_OPTIONS' => 'オプションを隠す',
    'LBL_ALT_MOVE_COLUMN_LEFT' => '左側のリストに選択したエントリを移動',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => '右側のリストに選択したエントリを移動',
    'LBL_ALT_MOVE_COLUMN_UP' => '選択したエントリを表示リスト順で上に移動',
    'LBL_ALT_MOVE_COLUMN_DOWN' => '選択したエントリを表示リスト順で下に移動',
    'LBL_ALT_INFO' => '情報',
    'MSG_DUPLICATE' => '作成しようとしている {0} レコードが既に存在する {0} レコードと重複があります。似たような名前を含む {1} レコードは次のとおりです。<br>この新しい {0} の作成を続行するために {1} 作成をクリックするか、下記の既存の {0} を選択します。',
    'MSG_SHOW_DUPLICATES' => '作成しようとしている {0} レコードが既に存在する {0} レコードと重複があります。似たような名前を含む {1} レコードは次のとおりです。この新しい {0} の作成を続行するために 保存 をクリックするか、 {0} の生成をせずにモジュールに戻るためには キャンセル をクリックします。',
    'LBL_EMAIL_TITLE' => 'メールアドレス',
    'LBL_EMAIL_OPT_TITLE' => 'オプトアウトされたメールアドレス',
    'LBL_EMAIL_INV_TITLE' => '無効なメール アドレス',
    'LBL_EMAIL_PRIM_TITLE' => 'プライマリメール アドレスを作る',
    'LBL_SELECT_ALL_TITLE' => '全て選択',
    'LBL_SELECT_THIS_ROW_TITLE' => '行を選択',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'エラー: There was an error during upload. エラーコード: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'エラー: アップロード時にエラーが発生しました。エラー コード: {0} - {1}。upload_maxsize は {2} です。 ',
    'UPLOAD_ERROR_HOME_TEXT' => 'エラー: アップロード時にエラーが発生しました。管理者に問い合わせてください。',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'アップロードサイズ ({0} バイト) アップロード容量最大値を超過: {1} バイト',
    'UPLOAD_REQUEST_ERROR' => 'エラーが発生しました。ページをリフレッシュしてやり直してください。',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => '編集',
    'LBL_EDIT_BUTTON_TITLE' => '編集',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => '複製',
    'LBL_DUPLICATE_BUTTON_TITLE' => '複製',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => '削除',
    'LBL_DELETE_BUTTON_TITLE' => '削除',
    'LBL_BULK_ACTION_BUTTON_LABEL' => '一括操作', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'アクション', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => '保存',
    'LBL_SAVE_BUTTON_TITLE' => '保存',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'キャンセル',
    'LBL_CANCEL_BUTTON_TITLE' => 'キャンセル',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => '{0} のコネクタ配列が正しく定義されていない、または空のため使用できませんでした。',
    'ERR_SUHOSIN' => 'アップロード ストリームが Suhosin によってブロックされています。&quot;アップロード&quot;をsuhosin.executor.include.whitelist に追加してください。 (詳細については suitecrm.log を参照してください)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'サーバーからのレスポンス不良',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => '見積',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => '販売価格',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => '手動',
        '5' => '毎5分',
        '15' => '毎15分',
        '30' => '毎30分',
        '60' => '1時間毎',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'リマインダが空、または正しくありません。',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'ポップアップまたはEメールに対してリマインダは設定されません。',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'リマインダの招待者がいません。',
    'LBL_DELETE_REMINDER_CONFIRM' => 'リマインダに招待者が含まれていません。リマインダを削除しますか。',
    'LBL_DELETE_REMINDER' => 'リマインダを削除',
    'LBL_OK' => '終了',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => '列を選択',
    'LBL_COLUMN_CHOOSER' => '列の選択',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => '変更を保存',
    'LBL_DISPLAYED' => '表示',
    'LBL_HIDDEN' => '非表示',
    'ERR_EMPTY_COLUMNS_LIST' => '少なくとも、1 つの要素が必要です',

    'LBL_FILTER_HEADER_TITLE' => 'フィルタ',

    'LBL_CATEGORY' => 'カテゴリ',
    'LBL_LIST_CATEGORY' => 'カテゴリ',
    'ERR_FACTOR_TPL_INVALID' => 'ファクタ認証メッセージは無効です。管理者にお問い合わせください。',
    'LBL_SUBTHEMES' => 'スタイル',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Dawn',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Day',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Dusk',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Night',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'ドラフトを無視します',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'この操作はこのメールを削除します。続行しますか？',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => '編集ダイアログを終了する',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => '編集ダイアログを終了することですべての入力情報は失われます。続けますか？',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'メール テンプレートを適用',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'この操作はメール本文と件名フィールドを上書きします。続行しますか？',

    'LBL_CONFIRM_OPT_IN_TITLE' => '確認したオプト・イン',
    'LBL_OPT_IN_TITLE' => 'オプト インする',
    'LBL_CONFIRM_OPT_IN_DATE' => '確認したオプト・インの日付',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => '確認したオプト・インの送信日付',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => '確認したオプト・インの失敗した日付',
    'LBL_CONFIRM_OPT_IN_TOKEN' => '確認したオプト・インのトークン',
    'ERR_OPT_IN_TPL_NOT_SET' => 'オプト・インのメールテンプレートが構成されていません。メール設定で設定してください。',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'オプ・トインはメールをアカウント/連絡先/潜在顧客/ターゲットに関連付ける必要があります。',

    'LBL_SECURITYGROUP_NONINHERITABLE' => '非継承グループ',
    'LBL_PRIMARY_GROUP' => "主要グループ",

    // footer
    'LBL_SUITE_TOP' => 'トップに戻る',
    'LBL_SUITE_SUPERCHARGED' => 'Supercharged by SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Powered By SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM は <a href="https://salesagility.com">SalesAgility</a>によって記述、構築されています。プログラムは保証なしに現状のまま提供されます。 AGPLv3の下でライセンスされています。',
    'LBL_SUITE_DESC2' => 'このプログラムはフリー ソフトウェアです。再配布及び、GNU Affero 一般公衆利用許諾契約書バージョン 3 ソース コード ヘッダーの追加許可を含む、フリー ソフトウェア財団によって発行の条件の下でそれを変更することができます。',
    'LBL_SUITE_DESC3' => 'SuiteCRM は SalesAgility 株式会社の商標です。その他のすべての会社名および製品名が関連付けられているそれぞれの会社の商標があります。',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'リセットパスワード',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => '送信確認をEメールで送信',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'アカウント/連絡先/リード/見込み客のみに送信確認をメールで送信する',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => '送信確認の送信が無効の場合、Eメールでの送信確認の選択肢の設定を有効にするか、管理者に相談してください。',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'コンタクトにプライマリEメール・アドレスがないため、送信確認の電子メールの送信をすることができません。',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'オプトインメール送信が失敗したことを確認する',
    'LBL_CONFIRM_EMAIL_SENT' => 'オプトインメールが正常に送信されたことを確認する',
);

$app_list_strings['moduleList']['Library'] = '辞書 図書館';
$app_list_strings['moduleList']['EmailAddresses'] = 'メールアドレス';
$app_list_strings['project_priority_default'] = '中';
$app_list_strings['project_priority_options'] = array(
    'High' => '高',
    'Medium' => '中',
    'Low' => '低',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => '同意',
    'contract' => '契約',
    'legal_obligation' => '法律上の義務',
    'protection_of_interest' => '利益の擁護',
    'public_interest' => '公共の利益',
    'legitimate_interest' => '正当な利益',
    'withdrawn' => '撤回',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Webサイト',
    'phone' => '電話番号',
    'given_to_user' => '与えられたユーザー',
    'email' => 'メール',
    'third_party' => 'サード パーティ',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'ナレッジベース';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'アブダビ',
    'ADEN' => 'アデン',
    'AFGHANISTAN' => 'アフガニスタン',
    'ALBANIA' => 'アルバニア',
    'ALGERIA' => 'アルジェリア',
    'AMERICAN SAMOA' => 'アメリカ領サモア',
    'ANDORRA' => 'アンドラ',
    'ANGOLA' => 'アンゴラ',
    'ANTARCTICA' => '南極大陸',
    'ANTIGUA' => 'アンティグア',
    'ARGENTINA' => 'アルゼンチン',
    'ARMENIA' => 'アルメニア',
    'ARUBA' => 'アルバ',
    'AUSTRALIA' => 'オーストラリア',
    'AUSTRIA' => 'オーストリア',
    'AZERBAIJAN' => 'アゼルバイジャン',
    'BAHAMAS' => 'バハマ',
    'BAHRAIN' => 'バーレーン',
    'BANGLADESH' => 'バングラデシュ',
    'BARBADOS' => 'バルバドス',
    'BELARUS' => 'ベラルーシ',
    'BELGIUM' => 'ベルギー',
    'BELIZE' => 'ベリーズ',
    'BENIN' => 'ベナン',
    'BERMUDA' => 'バミューダ',
    'BHUTAN' => 'ブータン',
    'BOLIVIA' => 'ボリビア',
    'BOSNIA' => 'ボスニア ・ ヘルツェゴビナ',
    'BOTSWANA' => 'ボツワナ',
    'BOUVET ISLAND' => 'ブーベ島',
    'BRAZIL' => 'ブラジル',
    'BRITISH ANTARCTICA TERRITORY' => 'イギリス領南極地域',
    'BRITISH INDIAN OCEAN TERRITORY' => '英領インド洋地域',
    'BRITISH VIRGIN ISLANDS' => 'イギリス領ヴァージン諸島',
    'BRITISH WEST INDIES' => 'イギリスの西インド諸島',
    'BRUNEI' => 'ブルネイ',
    'BULGARIA' => 'ブルガリア',
    'BURKINA FASO' => 'ブルキナ ・ ファソ',
    'BURUNDI' => 'ブルンジ',
    'CAMBODIA' => 'カンボジア',
    'CAMEROON' => 'カメルーン',
    'CANADA' => 'カナダ',
    'CANAL ZONE' => '運河地帯',
    'CANARY ISLAND' => 'カナリア島',
    'CAPE VERDI ISLANDS' => 'カーボベルデ共和国',
    'CAYMAN ISLANDS' => 'ケイマン諸島',
    'CHAD' => 'チャド',
    'CHANNEL ISLAND UK' => 'チャネル島英国',
    'CHILE' => 'チリ',
    'CHINA' => '中国',
    'CHRISTMAS ISLAND' => 'クリスマス島',
    'COCOS (KEELING) ISLAND' => 'ココス (キーリング) 島',
    'COLOMBIA' => 'コロンビア',
    'COMORO ISLANDS' => 'コモロ諸島',
    'CONGO' => 'コンゴ',
    'CONGO KINSHASA' => 'コンゴ キンシャサ',
    'COOK ISLANDS' => 'クック諸島',
    'COSTA RICA' => 'コスタリカ',
    'CROATIA' => 'クロアチア',
    'CUBA' => 'キューバ',
    'CURACAO' => 'キュラソー',
    'CYPRUS' => 'キプロス',
    'CZECH REPUBLIC' => 'チェコ共和国',
    'DAHOMEY' => 'ダオメー',
    'DENMARK' => 'デンマーク',
    'DJIBOUTI' => 'ジブチ',
    'DOMINICA' => 'ドミニカ国',
    'DOMINICAN REPUBLIC' => 'ドミニカ共和国',
    'DUBAI' => 'ドバイ',
    'ECUADOR' => 'エクアドル',
    'EGYPT' => 'エジプト',
    'EL SALVADOR' => 'エルサルバドル',
    'EQUATORIAL GUINEA' => '赤道ギニア',
    'ESTONIA' => 'エストニア',
    'ETHIOPIA' => 'エチオピア',
    'FAEROE ISLANDS' => 'フェロー諸島',
    'FALKLAND ISLANDS' => 'フォークランド諸島',
    'FIJI' => 'フィジー',
    'FINLAND' => 'フィンランド',
    'FRANCE' => 'フランス',
    'FRENCH GUIANA' => 'フランス領ギアナ',
    'FRENCH POLYNESIA' => 'フランス領ポリネシア',
    'GABON' => 'ガボン',
    'GAMBIA' => 'ガンビア',
    'GEORGIA' => 'グルジア',
    'GERMANY' => 'ドイツ',
    'GHANA' => 'ガーナ',
    'GIBRALTAR' => 'ジブラルタル',
    'GREECE' => 'ギリシャ',
    'GREENLAND' => 'グリーンランド',
    'GUADELOUPE' => 'グアドループ (仏領)',
    'GUAM' => 'グアム',
    'GUATEMALA' => 'グアテマラ',
    'GUINEA' => 'ギニア',
    'GUYANA' => 'ガイアナ',
    'HAITI' => 'ハイチ',
    'HONDURAS' => 'ホンジュラス',
    'HONG KONG' => '香港',
    'HUNGARY' => 'ハンガリー',
    'ICELAND' => 'アイスランド',
    'IFNI' => 'イフニ',
    'INDIA' => 'インド',
    'INDONESIA' => 'インドネシア',
    'IRAN' => 'イラン',
    'IRAQ' => 'イラク',
    'IRELAND' => 'アイルランド',
    'ISRAEL' => 'イスラエル',
    'ITALY' => 'イタリア',
    'IVORY COAST' => 'コートジボワール',
    'JAMAICA' => 'ジャマイカ',
    'JAPAN' => '日本',
    'JORDAN' => 'ヨルダン',
    'KAZAKHSTAN' => 'カザフスタン',
    'KENYA' => 'ケニア',
    'KOREA' => '韓国',
    'KOREA, SOUTH' => '韓国、南部',
    'KUWAIT' => 'クウェート',
    'KYRGYZSTAN' => 'キルギス',
    'LAOS' => 'ラオス',
    'LATVIA' => 'ラトビア',
    'LEBANON' => 'レバノン',
    'LEEWARD ISLANDS' => 'リーワード諸島',
    'LESOTHO' => 'レソト',
    'LIBYA' => 'リビア',
    'LIECHTENSTEIN' => 'リヒテンシュタイン',
    'LITHUANIA' => 'リトアニア',
    'LUXEMBOURG' => 'ルクセンブルク',
    'MACAO' => 'マカオ',
    'MACEDONIA' => 'マケドニア',
    'MADAGASCAR' => 'マダガスカル',
    'MALAWI' => 'マラウイ',
    'MALAYSIA' => 'マレーシア',
    'MALDIVES' => 'モルディブ',
    'MALI' => 'マリ',
    'MALTA' => 'マルタ',
    'MARTINIQUE' => 'マルティニーク島',
    'MAURITANIA' => 'モーリタニア',
    'MAURITIUS' => 'モーリシャス',
    'MELANESIA' => 'メラネシア',
    'MEXICO' => 'メキシコ',
    'MOLDOVIA' => 'モルドバ',
    'MONACO' => 'モナコ',
    'MONGOLIA' => 'モンゴル国',
    'MOROCCO' => 'モロッコ',
    'MOZAMBIQUE' => 'モザンビーク',
    'MYANAMAR' => 'ミャンマー',
    'NAMIBIA' => 'ナミビア',
    'NEPAL' => 'ネパール',
    'NETHERLANDS' => 'オランダ',
    'NETHERLANDS ANTILLES' => 'オランダ領アンティル諸島',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'オランダ領アンティル諸島の中立地帯',
    'NEW CALADONIA' => 'ニューカレドニア',
    'NEW HEBRIDES' => 'ニューヘブリディーズ',
    'NEW ZEALAND' => 'ニュージーランド',
    'NICARAGUA' => 'ニカラグア',
    'NIGER' => 'ニジェール',
    'NIGERIA' => 'ナイジェリア',
    'NORFOLK ISLAND' => 'ノーフォーク島',
    'NORWAY' => 'ノルウェー',
    'OMAN' => 'オマーン',
    'OTHER' => 'その他',
    'PACIFIC ISLAND' => '太平洋の島',
    'PAKISTAN' => 'パキスタン',
    'PANAMA' => 'パナマ',
    'PAPUA NEW GUINEA' => 'パプア ニューギニア独立国',
    'PARAGUAY' => 'パラグアイ',
    'PERU' => 'ペルー',
    'PHILIPPINES' => 'フィリピン',
    'POLAND' => 'ポーランド',
    'PORTUGAL' => 'ポルトガル',
    'PORTUGUESE TIMOR' => '東ティモール',
    'PUERTO RICO' => 'プエルトリコ',
    'QATAR' => 'カタール',
    'REPUBLIC OF BELARUS' => 'ベラルーシ共和国',
    'REPUBLIC OF SOUTH AFRICA' => '南アフリカ共和国',
    'REUNION' => '再会',
    'ROMANIA' => 'ルーマニア',
    'RUSSIA' => 'ロシア',
    'RWANDA' => 'ルワンダ',
    'RYUKYU ISLANDS' => '琉球列島',
    'SABAH' => 'サバ',
    'SAN MARINO' => 'サンマリノ',
    'SAUDI ARABIA' => 'サウジアラビア',
    'SENEGAL' => 'セネガル',
    'SERBIA' => 'セルビア',
    'SEYCHELLES' => 'セイシェル',
    'SIERRA LEONE' => 'シエラレオネ',
    'SINGAPORE' => 'シンガポール',
    'SLOVAKIA' => 'スロバキア',
    'SLOVENIA' => 'スロベニア',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => '南アフリカ',
    'SOUTH YEMEN' => '南イエメン',
    'SPAIN' => 'スペイン',
    'SPANISH SAHARA' => 'スペイン領サハラ',
    'SRI LANKA' => 'スリランカ',
    'ST. KITTS AND NEVIS' => 'セントクリストファー ・ ネイビス',
    'ST. LUCIA' => '聖ルチア',
    'SUDAN' => 'スーダン',
    'SURINAM' => 'スリナム',
    'SW AFRICA' => '南西アフリカ',
    'SWAZILAND' => 'スワジランド',
    'SWEDEN' => 'スウェーデン',
    'SWITZERLAND' => 'スイス',
    'SYRIA' => 'シリア',
    'TAIWAN' => '台湾',
    'TAJIKISTAN' => 'タジキスタン',
    'TANZANIA' => 'タンザニア',
    'THAILAND' => 'タイ',
    'TONGA' => 'トンガ',
    'TRINIDAD' => 'トリニダード',
    'TUNISIA' => 'チュニジア',
    'TURKEY' => 'トルコ',
    'UGANDA' => 'ウガンダ',
    'UKRAINE' => 'ウクライナ',
    'UNITED ARAB EMIRATES' => 'アラブ首長国連邦',
    'UNITED KINGDOM' => 'イギリス',
    'URUGUAY' => 'ウルグアイ',
    'US PACIFIC ISLAND' => '米領パシフィック諸島',
    'US VIRGIN ISLANDS' => '英領ヴァージン諸島',
    'USA' => 'アメリカ合衆国',
    'UZBEKISTAN' => 'ウズベキスタン',
    'VANUATU' => 'バヌアツ',
    'VATICAN CITY' => 'バチカン市国',
    'VENEZUELA' => 'ベネズエラ',
    'VIETNAM' => 'ベトナム',
    'WAKE ISLAND' => 'ウェーク島',
    'WEST INDIES' => '西インド諸島',
    'WESTERN SAHARA' => '西サハラ',
    'YEMEN' => 'イエメン',
    'ZAIRE' => 'ザイール',
    'ZAMBIA' => 'ザンビア',
    'ZIMBABWE' => 'ジンバブエ',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (台湾と香港)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS キリル文字)',
    'CP1252' => 'CP1252 (MS 西ヨーロッパとUS)',
    'EUC-CN' => 'EUC-CN (簡体中国語 GB2312)',
    'EUC-JP' => 'EUC-JP (Unix 日本語)',
    'EUC-KR' => 'EUC-KR (韓国語)',
    'EUC-TW' => 'EUC-TW (台湾語)',
    'ISO-2022-JP' => 'ISO-2022-JP (日本語)',
    'ISO-2022-KR' => 'ISO-2022-KR (韓国語)',
    'ISO-8859-1' => 'ISO-8859-1 (西ヨーロッパとUS)',
    'ISO-8859-2' => 'ISO-8859-2 (中欧および東欧)',
    'ISO-8859-3' => 'ISO-8859-3 (ラテン語 3)',
    'ISO-8859-4' => 'ISO-8859-4 (ラテン語 4)',
    'ISO-8859-5' => 'ISO-8859-5 (キリル文字)',
    'ISO-8859-6' => 'ISO-8859-6 (アラビア語)',
    'ISO-8859-7' => 'ISO-8859-7 (ギリシャ語)',
    'ISO-8859-8' => 'ISO-8859-8 (ヘブライ語)',
    'ISO-8859-9' => 'ISO-8859-9 (ラテン語 5)',
    'ISO-8859-10' => 'ISO-8859-10 (ラテン語 6)',
    'ISO-8859-13' => 'ISO-8859-13 (ラテン語 7)',
    'ISO-8859-14' => 'ISO-8859-14 (ラテン語 8)',
    'ISO-8859-15' => 'ISO-8859-15 (ラテン語 9)',
    'KOI8-R' => 'KOI8-R (キリル文字 ロシア語)',
    'KOI8-U' => 'KOI8-U (キリル文字 ウクライナ語)',
    'SJIS' => 'CP932 (MS 日本語)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'アフリカ/アルジェ',
    'Africa/Luanda' => 'アフリカ/ルアンダ',
    'Africa/Porto-Novo' => 'アフリカ/ポルトノボ',
    'Africa/Gaborone' => 'アフリカ/ハボローネ',
    'Africa/Ouagadougou' => 'アフリカ/ワガドゥグー',
    'Africa/Bujumbura' => 'アフリカ/ブジュンブラ',
    'Africa/Douala' => 'アフリカ/ドゥアラ',
    'Atlantic/Cape_Verde' => '大西洋/カーボベルデ',
    'Africa/Bangui' => 'アフリカ/バンギ',
    'Africa/Ndjamena' => 'アフリカ/ンジャメナ',
    'Indian/Comoro' => 'インド/コモロフラン',
    'Africa/Kinshasa' => 'アフリカ/キンシャサ',
    'Africa/Lubumbashi' => 'アフリカ/ルブンバシ',
    'Africa/Brazzaville' => 'アフリカ/ブラザビル',
    'Africa/Abidjan' => 'アフリカ/アビジャン',
    'Africa/Djibouti' => 'アフリカ/ジブチフラン',
    'Africa/Cairo' => 'アフリカ/カイロ',
    'Africa/Malabo' => 'アフリカ/マラボ',
    'Africa/Asmera' => 'アフリカ/アスマラ',
    'Africa/Addis_Ababa' => 'アフリカ/アジス ・ アベバ',
    'Africa/Libreville' => 'アフリカ/リーブルヴィル',
    'Africa/Banjul' => 'アフリカ/バンジュール',
    'Africa/Accra' => 'アフリカ ・ アクラ',
    'Africa/Conakry' => 'アフリカ/コナクリ',
    'Africa/Bissau' => 'アフリカ ・ ギニアビサウ',
    'Africa/Nairobi' => 'アフリカ/ナイロビ',
    'Africa/Maseru' => 'アフリカ/マセル',
    'Africa/Monrovia' => 'アフリカ/モンロビア',
    'Africa/Tripoli' => 'アフリカ/トリポリ',
    'Indian/Antananarivo' => 'インド/アンタナナリボ',
    'Africa/Blantyre' => 'アフリカ/ブランタイヤ',
    'Africa/Bamako' => 'アフリカ/バマコ',
    'Africa/Nouakchott' => 'アフリカ/ヌアクショット',
    'Indian/Mauritius' => 'インド/モーリシャスルピー',
    'Indian/Mayotte' => 'インド/マヨット島',
    'Africa/Casablanca' => 'アフリカ/カサブランカ',
    'Africa/El_Aaiun' => 'アフリカ/アイウン',
    'Africa/Maputo' => 'アフリカ/マプト',
    'Africa/Windhoek' => 'アフリカ/ウィントフック',
    'Africa/Niamey' => 'アフリカ/ニアメ',
    'Africa/Lagos' => 'アフリカ/ラゴス',
    'Indian/Reunion' => 'インド/再会',
    'Africa/Kigali' => 'アフリカ/キガリ',
    'Atlantic/St_Helena' => 'アトランティック/セント ・ ヘレナ',
    'Africa/Sao_Tome' => 'アフリカ/サントメ',
    'Africa/Dakar' => 'アフリカ/ダカール',
    'Indian/Mahe' => 'インド/マヘ',
    'Africa/Freetown' => 'アフリカ/フリータウン',
    'Africa/Mogadishu' => 'アフリカ/モガディシュ',
    'Africa/Johannesburg' => 'アフリカ ・ ヨハネスブルグ',
    'Africa/Khartoum' => 'アフリカ/ハルツーム',
    'Africa/Mbabane' => 'アフリカ/ムババネ',
    'Africa/Dar_es_Salaam' => 'アフリカ/ダル ・ エス ・ サラーム',
    'Africa/Lome' => 'アフリカ/ロメ',
    'Africa/Tunis' => 'アフリカ/チュニス',
    'Africa/Kampala' => 'アフリカ/カンパラ',
    'Africa/Lusaka' => 'アフリカ/ルサカ',
    'Africa/Harare' => 'アフリカ/ハラレ',
    'Antarctica/Casey' => '南極・ ケーシー',
    'Antarctica/Davis' => '南極/デイビス',
    'Antarctica/Mawson' => '南極/モーソン',
    'Indian/Kerguelen' => 'インド/ケルゲレン',
    'Antarctica/DumontDUrville' => '南極/デュモン・デュルヴィル',
    'Antarctica/Syowa' => '南極/昭和基地',
    'Antarctica/Vostok' => '南極/ボストーク',
    'Antarctica/Rothera' => '南極/ロゼラ',
    'Antarctica/Palmer' => '南極/パーマー',
    'Antarctica/McMurdo' => '南極/マクマード',
    'Asia/Kabul' => 'アジア/カブール',
    'Asia/Yerevan' => 'アジア/エレバン',
    'Asia/Baku' => 'アジア/バクー',
    'Asia/Bahrain' => 'アジア/バーレーン',
    'Asia/Dhaka' => 'アジア/ダッカ',
    'Asia/Thimphu' => 'アジア/ティンプー',
    'Indian/Chagos' => 'インド/チャゴス',
    'Asia/Brunei' => 'アジア/ブルネイ',
    'Asia/Rangoon' => 'アジア/ラングーン',
    'Asia/Phnom_Penh' => 'アジア/プノンペン',
    'Asia/Beijing' => 'アジア/北京',
    'Asia/Harbin' => 'アジア/ハルビン',
    'Asia/Shanghai' => 'アジア/上海',
    'Asia/Chongqing' => 'アジア/重慶',
    'Asia/Urumqi' => 'アジア/ウルムチ',
    'Asia/Kashgar' => 'アジア/カシュガル',
    'Asia/Hong_Kong' => 'アジア/香港',
    'Asia/Taipei' => 'アジア/台北',
    'Asia/Macau' => 'アジア/マカオ',
    'Asia/Nicosia' => 'アジア/ニコシア',
    'Asia/Tbilisi' => 'アジア/トビリシ',
    'Asia/Dili' => 'アジア/ディリ',
    'Asia/Calcutta' => 'アジア/カルカッタ',
    'Asia/Jakarta' => 'アジア/ジャカルタ',
    'Asia/Pontianak' => 'アジア/ポンティアナック',
    'Asia/Makassar' => 'アジア/マカッサル',
    'Asia/Jayapura' => 'アジア/ジャヤプラ',
    'Asia/Tehran' => 'アジア/テヘラン',
    'Asia/Baghdad' => 'アジア/バグダッド',
    'Asia/Jerusalem' => 'アジア/エルサレム',
    'Asia/Tokyo' => 'アジア/東京',
    'Asia/Amman' => 'アジア/アンマン',
    'Asia/Almaty' => 'アジア/アルマトイ',
    'Asia/Qyzylorda' => 'アジア/クズロルダ',
    'Asia/Aqtobe' => 'アジア/アクトベ',
    'Asia/Aqtau' => 'アジア/アクタウ',
    'Asia/Oral' => 'アジア/オラル',
    'Asia/Bishkek' => 'アジア/ビシュケク',
    'Asia/Seoul' => 'アジア/ソウル',
    'Asia/Pyongyang' => 'アジア/平壌',
    'Asia/Kuwait' => 'アジア/クウェート',
    'Asia/Vientiane' => 'アジア/ビエンチャン',
    'Asia/Beirut' => 'アジア/ベイルート',
    'Asia/Kuala_Lumpur' => 'アジア/クアラルンプール',
    'Asia/Kuching' => 'アジア/クチン',
    'Indian/Maldives' => 'インド/モルディブ',
    'Asia/Hovd' => 'アジア/ホブド',
    'Asia/Ulaanbaatar' => 'アジア/ウランバートル',
    'Asia/Choibalsan' => 'アジア/チョイバルサン',
    'Asia/Katmandu' => 'アジア/カトマンズ',
    'Asia/Muscat' => 'アジア/マスカット',
    'Asia/Karachi' => 'アジア/カラチ',
    'Asia/Gaza' => 'アジア/ガザ',
    'Asia/Manila' => 'アジア/マニラ',
    'Asia/Qatar' => 'アジア/カタール',
    'Asia/Riyadh' => 'アジア/リヤド',
    'Asia/Singapore' => 'アジア/シンガポール',
    'Asia/Colombo' => 'アジア/コロンボ',
    'Asia/Damascus' => 'アジア/ダマスカス',
    'Asia/Dushanbe' => 'アジア/ドゥシャンベ',
    'Asia/Bangkok' => 'アジア/バンコク',
    'Asia/Ashgabat' => 'アジア/アシガバート',
    'Asia/Dubai' => 'アジア/ドバイ',
    'Asia/Samarkand' => 'アジア/サマルカンド',
    'Asia/Tashkent' => 'アジア/タシケント',
    'Asia/Saigon' => 'アジア/サイゴン',
    'Asia/Aden' => 'アジア/アデン',
    'Australia/Darwin' => 'オーストラリア/ダーウィン',
    'Australia/Perth' => 'オーストラリア/パース',
    'Australia/Brisbane' => 'オーストラリア/ブリスベン',
    'Australia/Lindeman' => 'オーストラリア/リンドマン',
    'Australia/Adelaide' => 'オーストラリア/アデレード',
    'Australia/Hobart' => 'オーストラリア/ ホバート',
    'Australia/Currie' => 'オーストラリア/カリー',
    'Australia/Melbourne' => 'オーストラリア/メルボルン',
    'Australia/Sydney' => 'オーストラリア/シドニー',
    'Australia/Broken_Hill' => 'オーストラリア/ブロークンヒル',
    'Indian/Christmas' => 'インド/クリスマス',
    'Pacific/Rarotonga' => '太平洋/ラロトンガ',
    'Indian/Cocos' => 'インド/ココス',
    'Pacific/Fiji' => '太平洋/フィジー',
    'Pacific/Gambier' => '太平洋/ガンビア',
    'Pacific/Marquesas' => '太平洋/マルケサス諸島',
    'Pacific/Tahiti' => '太平洋/フィジー',
    'Pacific/Guam' => '太平洋/グアム',
    'Pacific/Tarawa' => '太平洋/タラワ',
    'Pacific/Enderbury' => '太平洋/エンダーベリー',
    'Pacific/Kiritimati' => '太平洋/キリティマティ',
    'Pacific/Saipan' => 'パシフィック/サイパン',
    'Pacific/Majuro' => '太平洋/マジュロ',
    'Pacific/Kwajalein' => '太平洋/クエジェリン',
    'Pacific/Truk' => '太平洋/トラック諸島',
    'Pacific/Pohnpei' => '太平洋/ポンペイ',
    'Pacific/Kosrae' => '太平洋/コスラエ',
    'Pacific/Nauru' => '太平洋/ナウル',
    'Pacific/Noumea' => '太平洋/ヌメア',
    'Pacific/Auckland' => '太平洋/オークランド',
    'Pacific/Chatham' => '太平洋/チャタム',
    'Pacific/Niue' => '太平洋/ニウエ',
    'Pacific/Norfolk' => '太平洋/ノーフォーク',
    'Pacific/Palau' => '太平洋/パラオ',
    'Pacific/Port_Moresby' => '太平洋/ポートモレスビー',
    'Pacific/Pitcairn' => '太平洋/ピトケアン',
    'Pacific/Pago_Pago' => '太平洋/パゴパゴ',
    'Pacific/Apia' => '太平洋/アピア',
    'Pacific/Guadalcanal' => '太平洋/ガダルカナル島',
    'Pacific/Fakaofo' => '太平洋/ファカオフォ',
    'Pacific/Tongatapu' => '太平洋/トンガタプ',
    'Pacific/Funafuti' => '太平洋/フナフチ',
    'Pacific/Johnston' => '太平洋/ジョンストン',
    'Pacific/Midway' => '太平洋/ミッドウェイ',
    'Pacific/Wake' => '太平洋/ウェーク島',
    'Pacific/Efate' => '太平洋/エファテ島',
    'Pacific/Wallis' => '太平洋/ウォリス',
    'Europe/London' => 'ヨーロッパ/ロンドン',
    'Europe/Dublin' => 'ヨーロッパ/ダブリン',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'ヨーロッパ/ティラナ',
    'Europe/Andorra' => 'ヨーロッパ/アンドラ',
    'Europe/Vienna' => 'ヨーロッパ/ウィーン',
    'Europe/Minsk' => 'ヨーロッパ/ミンスク',
    'Europe/Brussels' => 'ヨーロッパ/ブリュッセル',
    'Europe/Sofia' => 'ヨーロッパ/ソフィア',
    'Europe/Prague' => 'ヨーロッパ/プラハ',
    'Europe/Copenhagen' => 'ヨーロッパ/コペンハーゲン',
    'Atlantic/Faeroe' => 'アトランティック/フェロー',
    'America/Danmarkshavn' => 'アメリカ/デンマークシャウン',
    'America/Scoresbysund' => 'アメリカ/スコルズビスン',
    'America/Godthab' => 'アメリカ/ヌーク',
    'America/Thule' => 'アメリカ/トゥーレ',
    'Europe/Tallinn' => 'ヨーロッパ/タリン',
    'Europe/Helsinki' => 'ヨーロッパ/ヘルシンキ',
    'Europe/Paris' => 'ヨーロッパ/パリ',
    'Europe/Berlin' => 'ヨーロッパ/ベルリン',
    'Europe/Gibraltar' => 'ヨーロッパ/ジブラルタル',
    'Europe/Athens' => 'ヨーロッパ/アテネ',
    'Europe/Budapest' => 'ヨーロッパ/ブダペスト',
    'Atlantic/Reykjavik' => '大西洋/レイキャビク',
    'Europe/Rome' => 'ヨーロッパ/ローマ',
    'Europe/Riga' => 'ヨーロッパ/リガ',
    'Europe/Vaduz' => 'ヨーロッパ/ファドゥーツ',
    'Europe/Vilnius' => 'ヨーロッパ/ビリニュス',
    'Europe/Luxembourg' => 'ヨーロッパ/ルクセンブルク',
    'Europe/Malta' => 'ヨーロッパ/マルタ',
    'Europe/Chisinau' => 'ヨーロッパ/キシナウ',
    'Europe/Monaco' => 'ヨーロッパ/モナコ',
    'Europe/Amsterdam' => 'ヨーロッパ/アムステルダム',
    'Europe/Oslo' => 'ヨーロッパ/オスロ',
    'Europe/Warsaw' => 'ヨーロッパ/ワルシャワ',
    'Europe/Lisbon' => 'ヨーロッパ/リスボン',
    'Atlantic/Azores' => '大西洋/アゾレス諸島',
    'Atlantic/Madeira' => '大西洋/マデイラ',
    'Europe/Bucharest' => 'ヨーロッパ/ブカレスト',
    'Europe/Kaliningrad' => 'ヨーロッパ/カリーニング ラード',
    'Europe/Moscow' => 'ヨーロッパ/モスクワ',
    'Europe/Samara' => 'ヨーロッパ/サマラ',
    'Asia/Yekaterinburg' => 'アジア/エカテリンブルク',
    'Asia/Omsk' => 'アジア/オムスク',
    'Asia/Novosibirsk' => 'アジア/ノボシビルスク',
    'Asia/Krasnoyarsk' => 'アジア/クラスノヤルスク',
    'Asia/Irkutsk' => 'アジア/イルクーツク',
    'Asia/Yakutsk' => 'アジア/ヤクーツク',
    'Asia/Vladivostok' => 'アジア/ウラジオストク',
    'Asia/Sakhalin' => 'アジア/サハリン',
    'Asia/Magadan' => 'アジア/マガダン',
    'Asia/Kamchatka' => 'アジア/カムチャッカ',
    'Asia/Anadyr' => 'アジア/アナディリ',
    'Europe/Belgrade' => 'ヨーロッパ/ベオグラード',
    'Europe/Madrid' => 'ヨーロッパ/マドリード',
    'Africa/Ceuta' => 'アフリカ/セウタ',
    'Atlantic/Canary' => '大西洋/カナリア',
    'Europe/Stockholm' => 'ヨーロッパ/ストックホルム',
    'Europe/Zurich' => 'ヨーロッパ/チューリッヒ',
    'Europe/Istanbul' => 'ヨーロッパ/イスタンブール',
    'Europe/Kiev' => 'ヨーロッパ/キエフ',
    'Europe/Uzhgorod' => 'ヨーロッパ/ウージュホロド',
    'Europe/Zaporozhye' => 'ヨーロッパ/ザポリージャ',
    'Europe/Simferopol' => 'ヨーロッパ/シンフェロポリ',
    'America/New_York' => 'アメリカ/ニューヨーク',
    'America/Chicago' => 'アメリカ/シカゴ',
    'America/North_Dakota/Center' => 'アメリカ /ノースダコタ州/センター',
    'America/Denver' => 'アメリカ/デンバー',
    'America/Los_Angeles' => 'アメリカ/ロサンゼルス',
    'America/Juneau' => 'アメリカ/ジュノー',
    'America/Yakutat' => 'アメリカ/ヤクタット',
    'America/Anchorage' => 'アメリカ/アンカレッジ',
    'America/Nome' => 'アメリカ/ノーム',
    'America/Adak' => 'アメリカ/アダック',
    'Pacific/Honolulu' => '太平洋/ホノルル',
    'America/Phoenix' => 'アメリカ/フェニックス',
    'America/Boise' => 'アメリカ/ボイジー',
    'America/Indiana/Indianapolis' => 'アメリカ/インディアナ州/インディアナポリス',
    'America/Indiana/Marengo' => 'アメリカ/インディアナ州/マレンゴ',
    'America/Indiana/Knox' => 'アメリカ/インディアナ州/ノックス',
    'America/Indiana/Vevay' => 'アメリカ/インディアナ州/べベイ',
    'America/Kentucky/Louisville' => 'アメリカ/ケンタッキー州/ルイビル',
    'America/Kentucky/Monticello' => 'アメリカ/ケンタッキー/モンティセロ',
    'America/Detroit' => 'アメリカ/デトロイト',
    'America/Menominee' => 'アメリカ/メノミニー',
    'America/St_Johns' => 'アメリカ/セント ジョンズ',
    'America/Goose_Bay' => 'アメリカ/グースベイ',
    'America/Halifax' => 'アメリカ/ハリファックス',
    'America/Glace_Bay' => 'アメリカ/グレースベイ',
    'America/Montreal' => 'アメリカ/モントリオール',
    'America/Toronto' => 'アメリカ/トロント',
    'America/Thunder_Bay' => 'アメリカ/サンダー ベイ',
    'America/Nipigon' => 'アメリカ/ニピゴン',
    'America/Rainy_River' => 'アメリカ/レイニー リバー',
    'America/Winnipeg' => 'アメリカ/ウィニペグ',
    'America/Regina' => 'アメリカ/レジーナ',
    'America/Swift_Current' => 'アメリカ/スウィフト・カレント',
    'America/Edmonton' => 'アメリカ/エドモントン',
    'America/Vancouver' => 'アメリカ/バンクーバー',
    'America/Dawson_Creek' => 'アメリカ/ドーソン クリーク',
    'America/Pangnirtung' => 'アメリカ/パングニータング',
    'America/Iqaluit' => 'アメリカ/イカルイト',
    'America/Coral_Harbour' => 'アメリカ/コーラル ハーバー',
    'America/Rankin_Inlet' => 'アメリカ/ランキン インレット',
    'America/Cambridge_Bay' => 'アメリカ/ケンブリッジ湾',
    'America/Yellowknife' => 'アメリカ/イエロー ナイフ',
    'America/Inuvik' => 'アメリカ/イヌヴィック',
    'America/Whitehorse' => 'アメリカ/ホワイト ホース',
    'America/Dawson' => 'アメリカ/ドーソン',
    'America/Cancun' => 'アメリカ/カンクン',
    'America/Merida' => 'アメリカ/メリダ',
    'America/Monterrey' => 'アメリカ/モンテレー',
    'America/Mexico_City' => 'アメリカ/メキシコ シティ',
    'America/Chihuahua' => 'アメリカ/チワワ',
    'America/Hermosillo' => 'アメリカ/エルモシージョ',
    'America/Mazatlan' => 'アメリカ/マサトラン',
    'America/Tijuana' => 'アメリカ/ティファナ',
    'America/Anguilla' => 'アメリカ/アンギラ',
    'America/Antigua' => 'アメリカ/アンティグア',
    'America/Nassau' => 'アメリカ/ナッソー',
    'America/Barbados' => 'アメリカ/バルバドス',
    'America/Belize' => 'アメリカ/ベリーズドル',
    'Atlantic/Bermuda' => '大西洋/バミューダ',
    'America/Cayman' => 'アメリカ/ケイマン',
    'America/Costa_Rica' => 'アメリカ/コスタリカ',
    'America/Havana' => 'アメリカ/ハバナ',
    'America/Dominica' => 'アメリカ/ドミニカ国',
    'America/Santo_Domingo' => 'アメリカ/サント ・ ドミンゴ',
    'America/El_Salvador' => 'アメリカ/エルサルバドル',
    'America/Grenada' => 'アメリカ/グレナダ',
    'America/Guadeloupe' => 'アメリカ/グアドループ',
    'America/Guatemala' => 'アメリカ/グアテマラ',
    'America/Port-au-Prince' => 'アメリカ/ポルトープランス',
    'America/Tegucigalpa' => 'アメリカ/テグシガルパ',
    'America/Jamaica' => 'アメリカ/ジャマイカ',
    'America/Martinique' => 'アメリカ/マルティニーク',
    'America/Montserrat' => 'アメリカ/モントセラト',
    'America/Managua' => 'アメリカ/マナグア',
    'America/Panama' => 'アメリカ/パナマ',
    'America/Puerto_Rico' => 'アメリカ/プエルトリコ',
    'America/St_Kitts' => 'アメリカ/セントキッツ島',
    'America/St_Lucia' => 'アメリカ/セントルシア',
    'America/Miquelon' => 'アメリカ/サンピエール島ミクロン島',
    'America/St_Vincent' => 'アメリカ/セント ・ ヴィンセント',
    'America/Grand_Turk' => 'アメリカ/グランドターク島',
    'America/Tortola' => 'アメリカ/トルトラ',
    'America/St_Thomas' => 'アメリカ/セント ・ トーマス',
    'America/Argentina/Buenos_Aires' => 'アメリカ/アルゼンチン/ブエノスアイレス',
    'America/Argentina/Cordoba' => 'アメリカ/アルゼンチン/コルドバ',
    'America/Argentina/Tucuman' => 'アメリカ/アルゼンチン ・ トゥクマン',
    'America/Argentina/La_Rioja' => 'アメリカ/アルゼンチン/ラ・リオハ',
    'America/Argentina/San_Juan' => 'アメリカ/アルゼンチン/サンフアン',
    'America/Argentina/Jujuy' => 'アメリカ/アルゼンチン/フフイ',
    'America/Argentina/Catamarca' => 'アメリカ/アルゼンチン/カタマルカ',
    'America/Argentina/Mendoza' => 'アメリカ/アルゼンチン/メンドーサ',
    'America/Argentina/Rio_Gallegos' => 'アメリカ/アルゼンチン/リオガイェゴス',
    'America/Argentina/Ushuaia' => 'アメリカ/アルゼンチン/ウシュアイア',
    'America/Aruba' => 'アメリカ/アルバ',
    'America/La_Paz' => 'アメリカ/ラパス',
    'America/Noronha' => 'アメリカ/ノローニャ',
    'America/Belem' => 'アメリカ/ベレン',
    'America/Fortaleza' => 'アメリカ/フォルタレザ',
    'America/Recife' => 'アメリカ/レシフェ',
    'America/Araguaina' => 'アメリカ/アラグァイーナ',
    'America/Maceio' => 'アメリカ/マセイオ',
    'America/Bahia' => 'アメリカ/バイア',
    'America/Sao_Paulo' => 'アメリカ/サンパウロ',
    'America/Campo_Grande' => 'アメリカ/カンポ ・ グランデ',
    'America/Cuiaba' => 'アメリカ/クイアバ',
    'America/Porto_Velho' => 'アメリカ/ポルト・ヴェーリョ',
    'America/Boa_Vista' => 'アメリカ/ボアビスタ',
    'America/Manaus' => 'アメリカ/マナウス',
    'America/Eirunepe' => 'アメリカ/エイルネペ',
    'America/Rio_Branco' => 'アメリカ/リオブランコ',
    'America/Santiago' => 'アメリカ/サンティアゴ',
    'Pacific/Easter' => '太平洋/イースター',
    'America/Bogota' => 'アメリカ/ボゴタ',
    'America/Curacao' => 'アメリカ/キュラソー',
    'America/Guayaquil' => 'アメリカ/グアヤキル',
    'Pacific/Galapagos' => '太平洋/ガラパゴス',
    'Atlantic/Stanley' => '大西洋/スタンレー',
    'America/Cayenne' => 'アメリカ/カイエン',
    'America/Guyana' => 'アメリカ/ガイアナドル',
    'America/Asuncion' => 'アメリカ/アスンシオン',
    'America/Lima' => 'アメリカ/リマ',
    'Atlantic/South_Georgia' => 'アトランティック ・ サウス ジョージア',
    'America/Paramaribo' => 'アメリカ/パラマリボ',
    'America/Port_of_Spain' => 'アメリカ/ポートオブスペイン',
    'America/Montevideo' => 'アメリカ/モンテビデオ',
    'America/Caracas' => 'アメリカ/カラカス',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google Docs',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google コンタクト',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google ドライブ',
);
$app_list_strings['token_status'] = array(
    1 => 'リクエスト',
    2 => 'アクセス',
    3 => '無効',
);
// PR 5464
$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'キャンペーン',
    'email' => 'メール',
    'event' => 'イベント',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'キャンペーン',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'キャンペーン',
    'email' => 'メール',
    'system' => 'システム管理',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'ナレッジベース'; // Shows in the ALL menu entries
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'ナレッジベース - カテゴリー'; // Shows in the ALL menu entries
$app_list_strings['aok_status_list']['Draft'] = '草案';
$app_list_strings['aok_status_list']['Expired'] = '期限切れ';
$app_list_strings['aok_status_list']['In_Review'] = 'レビュー中';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'プライベート';
$app_list_strings['aok_status_list']['published_public'] = 'パブリック';

$app_list_strings['moduleList']['FP_events'] = 'イベント';
$app_list_strings['moduleList']['FP_Event_Locations'] = '場所';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = '招待済';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = '未招待';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = '出席';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = '欠席';
$app_list_strings['fp_event_status_dom']['Accepted'] = '承諾';
$app_list_strings['fp_event_status_dom']['Declined'] = '辞退';
$app_list_strings['fp_event_status_dom']['No Response'] = '応答無';

$app_strings['LBL_STATUS_EVENT'] = '招待ステータス';
$app_strings['LBL_ACCEPT_STATUS'] = 'ステータス承認';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'このページ';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = '全てのレコード';
$app_strings['LBL_LISTVIEW_NONE'] = 'なし';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'インデックス　イベント';
$app_list_strings['moduleList']['AOD_Index'] = 'インデックス';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'ケースイベント';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'ケースのアップデート';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '====== この行より上についてご返信ください ======';


//aop PR 5426
$app_list_strings['moduleList']['JAccount'] = 'JAccount';

$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => '開封済み',
        'Closed' => '完了',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => '新規',
        'Open_Assigned' => 'アサイン済み',
        'Closed_Closed' => '完了',
        'Open_Pending Input' => '保留',
        'Closed_Rejected' => '拒否',
        'Closed_Duplicate' => '重複',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'シングル ユーザー',
        'Account' => 'アカウント ユーザー',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'AOPのデフォルトを使用する',
    'singleUser' => 'シングル ユーザー',
    'roundRobin' => 'ラウンド-ロビン',
    'leastBusy' => '最も暇な',
    'random' => 'ランダム',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'レポート';
$app_list_strings['moduleList']['AOR_Conditions'] = 'レポートの状態';
$app_list_strings['moduleList']['AOR_Charts'] = 'レポートチャート';
$app_list_strings['moduleList']['AOR_Fields'] = 'レポートフィールド';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'スケジュール済みレポート一覧';
$app_list_strings['aor_operator_list']['Equal_To'] = '〜と同じ';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = '〜と異なる';
$app_list_strings['aor_operator_list']['Greater_Than'] = '～より大きい';
$app_list_strings['aor_operator_list']['Less_Than'] = '～未満';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = '〜以上';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = '〜以下';
$app_list_strings['aor_operator_list']['Contains'] = '含む';
$app_list_strings['aor_operator_list']['Not_Contains'] = '含まれていない';
$app_list_strings['aor_operator_list']['Starts_With'] = '～で始まる';
$app_list_strings['aor_operator_list']['Ends_With'] = '〜で終わる';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-m-d';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'と';
$app_list_strings['aor_condition_operator_list']['OR'] = 'または';
$app_list_strings['aor_condition_type_list']['Value'] = '値';
$app_list_strings['aor_condition_type_list']['Field'] = 'フィールド';
$app_list_strings['aor_condition_type_list']['Date'] = '日';
$app_list_strings['aor_condition_type_list']['Multi'] = '〜の一つ';
$app_list_strings['aor_condition_type_list']['Period'] = '期間';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = '現在のユーザー';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = '分';
$app_list_strings['aor_date_type_list']['hour'] = '時間';
$app_list_strings['aor_date_type_list']['day'] = '日';
$app_list_strings['aor_date_type_list']['week'] = '週間';
$app_list_strings['aor_date_type_list']['month'] = '月';
$app_list_strings['aor_date_type_list']['business_hours'] = '営業時間';
$app_list_strings['aor_date_options']['now'] = '現在';
$app_list_strings['aor_date_options']['field'] = 'このフィールド';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = '昇順';
$app_list_strings['aor_sort_operator']['DESC'] = '降順';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = '合計';
$app_list_strings['aor_function_list']['MIN'] = '最小';
$app_list_strings['aor_function_list']['MAX'] = '最大';
$app_list_strings['aor_function_list']['SUM'] = '合計';
$app_list_strings['aor_function_list']['AVG'] = '平均';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = '合計';
$app_list_strings['aor_total_options']['SUM'] = '合計';
$app_list_strings['aor_total_options']['AVG'] = '平均';
$app_list_strings['aor_chart_types']['bar'] = 'バー チャート';
$app_list_strings['aor_chart_types']['line'] = 'ライン チャート';
$app_list_strings['aor_chart_types']['pie'] = 'パイ チャート';
$app_list_strings['aor_chart_types']['radar'] = 'レーダーチャート';
$app_list_strings['aor_chart_types']['stacked_bar'] = '積み上げチャート';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'グループ チャート';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = '毎月';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = '毎週';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = '毎日';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = '稼働中';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = '非稼働中';
$app_list_strings['aor_email_type_list']['Email Address'] = 'メール';
$app_list_strings['aor_email_type_list']['Specify User'] = 'ユーザー';
$app_list_strings['aor_email_type_list']['Users'] = 'ユーザー';
$app_list_strings['aor_assign_options']['all'] = 'すべてのユーザー';
$app_list_strings['aor_assign_options']['role'] = '権限内のすべてのユーザー';
$app_list_strings['aor_assign_options']['security_group'] = 'セキュリティ グループ内のすべてのユーザー';
$app_list_strings['date_time_period_list']['today'] = '今日';
$app_list_strings['date_time_period_list']['yesterday'] = '昨日';
$app_list_strings['date_time_period_list']['this_week'] = '今週';
$app_list_strings['date_time_period_list']['last_week'] = '先週';
$app_list_strings['date_time_period_list']['last_month'] = '先月';
$app_list_strings['date_time_period_list']['this_month'] = '今月';
$app_list_strings['date_time_period_list']['this_quarter'] = '今四半期';
$app_list_strings['date_time_period_list']['last_quarter'] = '先四半期';
$app_list_strings['date_time_period_list']['this_year'] = '今年';
$app_list_strings['date_time_period_list']['last_year'] = '昨年';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = '上';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = '上';
$app_strings['LBL_CRON_AT'] = 'に';
$app_strings['LBL_CRON_RAW'] = '詳細';
$app_strings['LBL_CRON_MIN'] = '分';
$app_strings['LBL_CRON_HOUR'] = '時';
$app_strings['LBL_CRON_DAY'] = 'Day';
$app_strings['LBL_CRON_MONTH'] = '月';
$app_strings['LBL_CRON_DOW'] = 'ダウ';
$app_strings['LBL_CRON_DAILY'] = '毎日';
$app_strings['LBL_CRON_WEEKLY'] = '毎週';
$app_strings['LBL_CRON_MONTHLY'] = '毎月';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = '契約';
$app_list_strings['moduleList']['AOS_Invoices'] = '請求';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - テンプレート';
$app_list_strings['moduleList']['AOS_Product_Categories'] = '製品 - カテゴリ';
$app_list_strings['moduleList']['AOS_Products'] = '商品';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = '１行項目';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = '項目グループ';
$app_list_strings['moduleList']['AOS_Quotes'] = '見積';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'アナリスト';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = '競合他社';
$app_list_strings['aos_quotes_type_dom']['Customer'] = '顧客';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'インテグレーター';
$app_list_strings['aos_quotes_type_dom']['Investor'] = '投資家';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'パートナー';
$app_list_strings['aos_quotes_type_dom']['Press'] = '記者';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = '見込み客';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = '再販業者';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'その他';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = '草案';
$app_list_strings['quote_stage_dom']['Negotiation'] = '交渉';
$app_list_strings['quote_stage_dom']['Delivered'] = '提供済み';
$app_list_strings['quote_stage_dom']['On Hold'] = '保留中';
$app_list_strings['quote_stage_dom']['Confirmed'] = '承認済み';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'クローズ 承認';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'クローズ ロスト';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'クローズ デッド';
$app_list_strings['quote_term_dom']['Net 15'] = '請求書の日付から15日以内';
$app_list_strings['quote_term_dom']['Net 30'] = '請求書の日付から30日以内';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = '承諾済';
$app_list_strings['approval_status_dom']['Not Approved'] = '未承諾';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20$';
$app_list_strings['discount_list']['Percentage'] = 'パーセント';
$app_list_strings['discount_list']['Amount'] = '合計';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'アナリスト';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = '競合他社';
$app_list_strings['aos_invoices_type_dom']['Customer'] = '顧客';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'インテグレーター';
$app_list_strings['aos_invoices_type_dom']['Investor'] = '投資家';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'パートナー';
$app_list_strings['aos_invoices_type_dom']['Press'] = '記者';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = '見込み客';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = '再販業者';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'その他';
$app_list_strings['invoice_status_dom']['Paid'] = '支払済';
$app_list_strings['invoice_status_dom']['Unpaid'] = '未払';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'キャンセル済';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = '未請求';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = '請求済';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'ラップトップ';
$app_list_strings['product_category_dom']['Desktops'] = 'デスクトップ';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Good';
$app_list_strings['product_type_dom']['Service'] = 'サービス';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = '見積';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = '請求';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = '契約';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = '見積';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = '請求';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = '契約';
$app_list_strings['pdf_template_type_dom']['Accounts'] = '口座';
$app_list_strings['pdf_template_type_dom']['Contacts'] = '連絡先';
$app_list_strings['pdf_template_type_dom']['Leads'] = '潜在顧客';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = '未開始';
$app_list_strings['contract_status_list']['In Progress'] = '進行中';
$app_list_strings['contract_status_list']['Signed'] = 'サイン済';
$app_list_strings['contract_type_list']['Type'] = 'タイプ';
$app_strings['LBL_PRINT_AS_PDF'] = 'PDFを印刷';
$app_strings['LBL_SELECT_TEMPLATE'] = 'テンプレートを選択してください';
$app_strings['LBL_NO_TEMPLATE'] = 'エラー\nテンプレートがありません。\nテンプレートモジュールを確認して、１つ作成してください。';

//aow PR 5775
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'ワークフロー';
$app_list_strings['moduleList']['AOW_Conditions'] = 'ワークフローの状態';
$app_list_strings['moduleList']['AOW_Processed'] = '進捗審査';
$app_list_strings['moduleList']['AOW_Actions'] = 'ワークフローアクション';
$app_list_strings['aow_status_list']['Active'] = '稼働中';
$app_list_strings['aow_status_list']['Inactive'] = '非稼働中';
$app_list_strings['aow_operator_list']['Equal_To'] = '〜と同じ';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = '〜と異なる';
$app_list_strings['aow_operator_list']['Greater_Than'] = '～より大きい';
$app_list_strings['aow_operator_list']['Less_Than'] = '～未満';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = '〜以上';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = '〜以下';
$app_list_strings['aow_operator_list']['Contains'] = '含む';
$app_list_strings['aow_operator_list']['Not_Contains'] = '含まれていない';
$app_list_strings['aow_operator_list']['Starts_With'] = '～で始まる';
$app_list_strings['aow_operator_list']['Ends_With'] = '〜で終わる';
$app_list_strings['aow_operator_list']['is_null'] = 'はNull';
$app_list_strings['aow_operator_list']['is_not_null'] = 'Null ではありません';
$app_list_strings['aow_operator_list']['Anniversary'] = '記念日';
$app_list_strings['aow_process_status_list']['Complete'] = '完了';
$app_list_strings['aow_process_status_list']['Running'] = '起動中';
$app_list_strings['aow_process_status_list']['Pending'] = '保留';
$app_list_strings['aow_process_status_list']['Failed'] = '失敗';
$app_list_strings['aow_condition_operator_list']['And'] = 'と';
$app_list_strings['aow_condition_operator_list']['OR'] = 'または';
$app_list_strings['aow_condition_type_list']['Value'] = '値';
$app_list_strings['aow_condition_type_list']['Field'] = 'フィールド';
$app_list_strings['aow_condition_type_list']['Any_Change'] = '変更';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'セキュリティグループ内';
$app_list_strings['aow_condition_type_list']['Date'] = '日';
$app_list_strings['aow_condition_type_list']['Multi'] = '〜の一つ';
$app_list_strings['aow_action_type_list']['Value'] = '値';
$app_list_strings['aow_action_type_list']['Field'] = 'フィールド';
$app_list_strings['aow_action_type_list']['Date'] = '日';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'ラウンド-ロビン';
$app_list_strings['aow_action_type_list']['Least_Busy'] = '最も暇な';
$app_list_strings['aow_action_type_list']['Random'] = 'ランダム';
$app_list_strings['aow_rel_action_type_list']['Value'] = '値';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'フィールド';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = '分';
$app_list_strings['aow_date_type_list']['hour'] = '時間';
$app_list_strings['aow_date_type_list']['day'] = '日';
$app_list_strings['aow_date_type_list']['week'] = '週間';
$app_list_strings['aow_date_type_list']['month'] = '月';
$app_list_strings['aow_date_type_list']['business_hours'] = '営業時間';
$app_list_strings['aow_date_options']['now'] = '現在';
$app_list_strings['aow_date_options']['today'] = '今日';
$app_list_strings['aow_date_options']['field'] = 'このフィールド';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'すべてのユーザー';
$app_list_strings['aow_assign_options']['role'] = '権限内のすべてのユーザー';
$app_list_strings['aow_assign_options']['security_group'] = 'セキュリティ グループ内のすべてのユーザー';
$app_list_strings['aow_email_type_list']['Email Address'] = 'メール';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Eメールに記録';
$app_list_strings['aow_email_type_list']['Related Field'] = '関連フィールド';
$app_list_strings['aow_email_type_list']['Specify User'] = 'ユーザー';
$app_list_strings['aow_email_type_list']['Users'] = 'ユーザー';
$app_list_strings['aow_email_type_list']['Record Field'] = 'フィールド';
$app_list_strings['aow_email_to_list']['to'] = '宛先';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'すべてのレコード';
$app_list_strings['aow_run_on_list']['New_Records'] = '新しいレコード';
$app_list_strings['aow_run_on_list']['Modified_Records'] = '更新されたレコード';
$app_list_strings['aow_run_when_list']['Always'] = '常に';
$app_list_strings['aow_run_when_list']['On_Save'] = '保存のみ';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'スケジュール上のみ';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'プロジェクト - テンプレート';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'プロジェクトタスクテンプレート';
$app_list_strings['relationship_type_list']['FS'] = '終わりから次のタスクの先頭へ';
$app_list_strings['relationship_type_list']['SS'] = '先頭からタスクの先頭へ';
$app_list_strings['duration_unit_dom']['Days'] = '日';
$app_list_strings['duration_unit_dom']['Hours'] = '時間';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'ガントチャートを見る';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = '詳細を表示';
$app_strings['LBL_CREATE_PROJECT'] = 'プロジェクト作成';

//gmaps
$app_strings['LBL_MAP'] = '地図';

$app_strings['LBL_JJWG_MAPS_LNG'] = '経度';
$app_strings['LBL_JJWG_MAPS_LAT'] = '緯度';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'ジオコードの状態';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = '住所';

$app_list_strings['moduleList']['jjwg_Maps'] = '地図';
$app_list_strings['moduleList']['jjwg_Markers'] = '地図 - マーカー';
$app_list_strings['moduleList']['jjwg_Areas'] = '地図 - エリア';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = '地図 - アドレス キャッシュ';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP パートナー';

$app_list_strings['map_unit_type_list']['mi'] = 'マイル';
$app_list_strings['map_unit_type_list']['km'] = 'キロメートル';

$app_list_strings['map_module_type_list']['Accounts'] = '口座';
$app_list_strings['map_module_type_list']['Contacts'] = '連絡先';
$app_list_strings['map_module_type_list']['Cases'] = 'ケース';
$app_list_strings['map_module_type_list']['Leads'] = '潜在顧客';
$app_list_strings['map_module_type_list']['Meetings'] = 'ミーティング';
$app_list_strings['map_module_type_list']['Opportunities'] = '商談';
$app_list_strings['map_module_type_list']['Project'] = 'プロジェクト';
$app_list_strings['map_module_type_list']['Prospects'] = 'ターゲット';

$app_list_strings['map_relate_type_list']['Accounts'] = '口座';
$app_list_strings['map_relate_type_list']['Contacts'] = '連絡先';
$app_list_strings['map_relate_type_list']['Cases'] = 'チケット';
$app_list_strings['map_relate_type_list']['Leads'] = '潜在顧客';
$app_list_strings['map_relate_type_list']['Meetings'] = 'ミーティング';
$app_list_strings['map_relate_type_list']['Opportunities'] = '商談';
$app_list_strings['map_relate_type_list']['Project'] = 'プロジェクト';
$app_list_strings['map_relate_type_list']['Prospects'] = 'ターゲット';

$app_list_strings['marker_image_list']['accident'] = 'アクシデント';
$app_list_strings['marker_image_list']['administration'] = 'システム管理';
$app_list_strings['marker_image_list']['agriculture'] = '農業';
$app_list_strings['marker_image_list']['aircraft_small'] = '航空機小';
$app_list_strings['marker_image_list']['airplane_tourism'] = '航空会社';
$app_list_strings['marker_image_list']['airport'] = '空港';
$app_list_strings['marker_image_list']['amphitheater'] = '円形劇場';
$app_list_strings['marker_image_list']['apartment'] = 'アパート';
$app_list_strings['marker_image_list']['aquarium'] = '水族館';
$app_list_strings['marker_image_list']['arch'] = '橋';
$app_list_strings['marker_image_list']['atm'] = 'ATM';
$app_list_strings['marker_image_list']['audio'] = 'オーディオ';
$app_list_strings['marker_image_list']['bank'] = '銀行';
$app_list_strings['marker_image_list']['bank_euro'] = 'ヨーロッパ銀行';
$app_list_strings['marker_image_list']['bank_pound'] = '銀行のポンド';
$app_list_strings['marker_image_list']['bar'] = 'バー';
$app_list_strings['marker_image_list']['beach'] = 'ビーチ';
$app_list_strings['marker_image_list']['beautiful'] = '美しい';
$app_list_strings['marker_image_list']['bicycle_parking'] = '自転車駐車場';
$app_list_strings['marker_image_list']['big_city'] = '大きな町';
$app_list_strings['marker_image_list']['bridge'] = '橋';
$app_list_strings['marker_image_list']['bridge_modern'] = 'モダンな橋';
$app_list_strings['marker_image_list']['bus'] = 'バス';
$app_list_strings['marker_image_list']['cable_car'] = 'ケーブルカー';
$app_list_strings['marker_image_list']['car'] = '車';
$app_list_strings['marker_image_list']['car_rental'] = 'レンタカー';
$app_list_strings['marker_image_list']['carrepair'] = '車の修理';
$app_list_strings['marker_image_list']['castle'] = '城';
$app_list_strings['marker_image_list']['cathedral'] = '大聖堂';
$app_list_strings['marker_image_list']['chapel'] = 'チャペル';
$app_list_strings['marker_image_list']['church'] = '協会';
$app_list_strings['marker_image_list']['city_square'] = '都市広場';
$app_list_strings['marker_image_list']['cluster'] = 'クラスター';
$app_list_strings['marker_image_list']['cluster_2'] = 'クラスター2';
$app_list_strings['marker_image_list']['cluster_3'] = 'クラスター3';
$app_list_strings['marker_image_list']['cluster_4'] = 'クラスター4';
$app_list_strings['marker_image_list']['cluster_5'] = 'クラスター5';
$app_list_strings['marker_image_list']['coffee'] = 'コーヒー';
$app_list_strings['marker_image_list']['community_centre'] = 'コミュニティセンター';
$app_list_strings['marker_image_list']['company'] = '会社';
$app_list_strings['marker_image_list']['conference'] = '会議';
$app_list_strings['marker_image_list']['construction'] = '建築';
$app_list_strings['marker_image_list']['convenience'] = 'コンビニ';
$app_list_strings['marker_image_list']['court'] = '裁判所';
$app_list_strings['marker_image_list']['cruise'] = 'クルーズ';
$app_list_strings['marker_image_list']['currency_exchange'] = '外貨両替';
$app_list_strings['marker_image_list']['customs'] = '習慣';
$app_list_strings['marker_image_list']['cycling'] = 'サイクリング';
$app_list_strings['marker_image_list']['dam'] = 'ダム';
$app_list_strings['marker_image_list']['dentist'] = '歯医者';
$app_list_strings['marker_image_list']['deptartment_store'] = 'デパート';
$app_list_strings['marker_image_list']['disability'] = '障害者';
$app_list_strings['marker_image_list']['disabled_parking'] = '障害者駐車場';
$app_list_strings['marker_image_list']['doctor'] = '医者/博士';
$app_list_strings['marker_image_list']['dog_leash'] = '犬のリーシュ';
$app_list_strings['marker_image_list']['down'] = '下へ';
$app_list_strings['marker_image_list']['down_left'] = '左下';
$app_list_strings['marker_image_list']['down_right'] = '右下';
$app_list_strings['marker_image_list']['down_then_left'] = '下から左';
$app_list_strings['marker_image_list']['down_then_right'] = '下から右';
$app_list_strings['marker_image_list']['drugs'] = 'ドラッグ';
$app_list_strings['marker_image_list']['elevator'] = 'エレベーター';
$app_list_strings['marker_image_list']['embassy'] = '大使館';
$app_list_strings['marker_image_list']['expert'] = '出力';
$app_list_strings['marker_image_list']['factory'] = '工場';
$app_list_strings['marker_image_list']['falling_rocks'] = '落石';
$app_list_strings['marker_image_list']['fast_food'] = 'ファーストフード';
$app_list_strings['marker_image_list']['festival'] = 'お祭り';
$app_list_strings['marker_image_list']['fjord'] = 'フィヨルド';
$app_list_strings['marker_image_list']['forest'] = '森';
$app_list_strings['marker_image_list']['fountain'] = '噴水';
$app_list_strings['marker_image_list']['friday'] = '金曜日';
$app_list_strings['marker_image_list']['garden'] = '庭';
$app_list_strings['marker_image_list']['gas_station'] = 'ガソリンスタンド';
$app_list_strings['marker_image_list']['geyser'] = '間欠泉';
$app_list_strings['marker_image_list']['gifts'] = '贈り物';
$app_list_strings['marker_image_list']['gourmet'] = 'クーポン';
$app_list_strings['marker_image_list']['grocery'] = '食料品店';
$app_list_strings['marker_image_list']['hairsalon'] = '美容室';
$app_list_strings['marker_image_list']['helicopter'] = 'ヘリコプター';
$app_list_strings['marker_image_list']['highway'] = '高速道路';
$app_list_strings['marker_image_list']['historical_quarter'] = '歴史的な地区';
$app_list_strings['marker_image_list']['home'] = 'ホーム';
$app_list_strings['marker_image_list']['hospital'] = '病院';
$app_list_strings['marker_image_list']['hostel'] = 'ホステル';
$app_list_strings['marker_image_list']['hotel'] = 'ホテル';
$app_list_strings['marker_image_list']['hotel_1_star'] = '1つ星ホテル';
$app_list_strings['marker_image_list']['hotel_2_stars'] = '2つ星ホテル';
$app_list_strings['marker_image_list']['hotel_3_stars'] = '3つ星ホテル';
$app_list_strings['marker_image_list']['hotel_4_stars'] = '4つ星ホテル';
$app_list_strings['marker_image_list']['hotel_5_stars'] = '5つ星ホテル';
$app_list_strings['marker_image_list']['info'] = '情報';
$app_list_strings['marker_image_list']['justice'] = '正義';
$app_list_strings['marker_image_list']['lake'] = '池';
$app_list_strings['marker_image_list']['laundromat'] = 'コイン ランドリー';
$app_list_strings['marker_image_list']['left'] = '左';
$app_list_strings['marker_image_list']['left_then_down'] = '左から下';
$app_list_strings['marker_image_list']['left_then_up'] = '左から上';
$app_list_strings['marker_image_list']['library'] = '辞書 図書館';
$app_list_strings['marker_image_list']['lighthouse'] = 'ライトハウス';
$app_list_strings['marker_image_list']['liquor'] = '酒';
$app_list_strings['marker_image_list']['lock'] = 'ロック';
$app_list_strings['marker_image_list']['main_road'] = '幹線道路';
$app_list_strings['marker_image_list']['massage'] = 'メッセージ';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = '携帯電話の塔';
$app_list_strings['marker_image_list']['modern_tower'] = 'モダンな塔';
$app_list_strings['marker_image_list']['monastery'] = '修道院';
$app_list_strings['marker_image_list']['monday'] = '月曜日';
$app_list_strings['marker_image_list']['monument'] = '記念碑';
$app_list_strings['marker_image_list']['mosque'] = 'モスク';
$app_list_strings['marker_image_list']['motorcycle'] = 'バイク';
$app_list_strings['marker_image_list']['museum'] = '博物館 美術館';
$app_list_strings['marker_image_list']['music_live'] = 'ミュージックライブ';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'オイル・ポンプ・ジャック';
$app_list_strings['marker_image_list']['pagoda'] = 'パゴダ';
$app_list_strings['marker_image_list']['palace'] = 'パレス';
$app_list_strings['marker_image_list']['panoramic'] = 'パノラマ';
$app_list_strings['marker_image_list']['park'] = '公園';
$app_list_strings['marker_image_list']['park_and_ride'] = '公園と道路';
$app_list_strings['marker_image_list']['parking'] = '駐車場';
$app_list_strings['marker_image_list']['photo'] = '写真';
$app_list_strings['marker_image_list']['picnic'] = 'ピクニック';
$app_list_strings['marker_image_list']['places_unvisited'] = '未訪問の場所';
$app_list_strings['marker_image_list']['places_visited'] = '訪れた場所';
$app_list_strings['marker_image_list']['playground'] = '遊び場';
$app_list_strings['marker_image_list']['police'] = '警察';
$app_list_strings['marker_image_list']['port'] = 'ポート: ';
$app_list_strings['marker_image_list']['postal'] = '郵便';
$app_list_strings['marker_image_list']['power_line_pole'] = '電柱の線';
$app_list_strings['marker_image_list']['power_plant'] = '発電所';
$app_list_strings['marker_image_list']['power_substation'] = '変電所';
$app_list_strings['marker_image_list']['public_art'] = 'パブリック アート';
$app_list_strings['marker_image_list']['rain'] = '雨';
$app_list_strings['marker_image_list']['real_estate'] = '不動産';
$app_list_strings['marker_image_list']['regroup'] = '再グループ化';
$app_list_strings['marker_image_list']['resort'] = 'リゾート';
$app_list_strings['marker_image_list']['restaurant'] = 'レストラン';
$app_list_strings['marker_image_list']['restaurant_african'] = 'アフリカ料理店';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'レストラン・バーベキュー';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'レストラン・ビュッフェ';
$app_list_strings['marker_image_list']['restaurant_chinese'] = '中華料理店';
$app_list_strings['marker_image_list']['restaurant_fish'] = '魚料理店';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'レストラン・フィッシュチップ';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'レストラン・グルメ';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'ギリシャ料理店';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'インド料理店';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'イタリア料理店';
$app_list_strings['marker_image_list']['restaurant_japanese'] = '日本料理店';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'レストラン・ケバブ';
$app_list_strings['marker_image_list']['restaurant_korean'] = '韓国料理店';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'レストラン・地中海';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'メキシコ料理店';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'レストラン・ロマンチック';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'タイ料理店';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'トルコ料理店';
$app_list_strings['marker_image_list']['right'] = '右';
$app_list_strings['marker_image_list']['right_then_down'] = '右から下';
$app_list_strings['marker_image_list']['right_then_up'] = '右から上';
$app_list_strings['marker_image_list']['saturday'] = '土曜日';
$app_list_strings['marker_image_list']['school'] = '学校';
$app_list_strings['marker_image_list']['shopping_mall'] = 'ショッピングモール';
$app_list_strings['marker_image_list']['shore'] = 'お店';
$app_list_strings['marker_image_list']['sight'] = '観光地';
$app_list_strings['marker_image_list']['small_city'] = '小さな町';
$app_list_strings['marker_image_list']['snow'] = '雪';
$app_list_strings['marker_image_list']['spaceport'] = '宇宙基地';
$app_list_strings['marker_image_list']['speed_100'] = 'スピード 100';
$app_list_strings['marker_image_list']['speed_110'] = 'スピード 110';
$app_list_strings['marker_image_list']['speed_120'] = 'スピード 120';
$app_list_strings['marker_image_list']['speed_130'] = 'スピード 130';
$app_list_strings['marker_image_list']['speed_20'] = 'スピード 20';
$app_list_strings['marker_image_list']['speed_30'] = 'スピード 30';
$app_list_strings['marker_image_list']['speed_40'] = 'スピード 40';
$app_list_strings['marker_image_list']['speed_50'] = 'スピード 50';
$app_list_strings['marker_image_list']['speed_60'] = 'スピード 60';
$app_list_strings['marker_image_list']['speed_70'] = 'スピード 70';
$app_list_strings['marker_image_list']['speed_80'] = 'スピード 80';
$app_list_strings['marker_image_list']['speed_90'] = 'スピード 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'スピード ハンプ';
$app_list_strings['marker_image_list']['stadium'] = 'スタジアム';
$app_list_strings['marker_image_list']['statue'] = '像';
$app_list_strings['marker_image_list']['steam_train'] = '蒸気機関車';
$app_list_strings['marker_image_list']['stop'] = '停止';
$app_list_strings['marker_image_list']['stoplight'] = 'ストップ ライト';
$app_list_strings['marker_image_list']['subway'] = '地下鉄';
$app_list_strings['marker_image_list']['sun'] = '日';
$app_list_strings['marker_image_list']['sunday'] = '日曜日';
$app_list_strings['marker_image_list']['supermarket'] = 'スーパーマーケット';
$app_list_strings['marker_image_list']['synagogue'] = 'シナゴーグ';
$app_list_strings['marker_image_list']['tapas'] = 'タパス';
$app_list_strings['marker_image_list']['taxi'] = 'タクシー';
$app_list_strings['marker_image_list']['taxiway'] = '誘導路';
$app_list_strings['marker_image_list']['teahouse'] = '茶屋';
$app_list_strings['marker_image_list']['telephone'] = '電話';
$app_list_strings['marker_image_list']['temple_hindu'] = 'ヒンズ教寺院';
$app_list_strings['marker_image_list']['terrace'] = 'テラス';
$app_list_strings['marker_image_list']['text'] = '文章';
$app_list_strings['marker_image_list']['theater'] = '劇場';
$app_list_strings['marker_image_list']['theme_park'] = 'テーマパーク';
$app_list_strings['marker_image_list']['thursday'] = '木曜日';
$app_list_strings['marker_image_list']['toilets'] = 'トイレ';
$app_list_strings['marker_image_list']['toll_station'] = '料金所';
$app_list_strings['marker_image_list']['tower'] = 'タワー';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = '自動速度違反取締装置';
$app_list_strings['marker_image_list']['train'] = '電車';
$app_list_strings['marker_image_list']['tram'] = 'トラム';
$app_list_strings['marker_image_list']['truck'] = 'トラック';
$app_list_strings['marker_image_list']['tuesday'] = '火曜日';
$app_list_strings['marker_image_list']['tunnel'] = 'トンネル';
$app_list_strings['marker_image_list']['turn_left'] = '左に曲がる';
$app_list_strings['marker_image_list']['turn_right'] = '右に曲がる';
$app_list_strings['marker_image_list']['university'] = '大学';
$app_list_strings['marker_image_list']['up'] = '上';
$app_list_strings['marker_image_list']['up_left'] = '左上';
$app_list_strings['marker_image_list']['up_right'] = '右上';
$app_list_strings['marker_image_list']['up_then_left'] = '上から左';
$app_list_strings['marker_image_list']['up_then_right'] = '上から右';
$app_list_strings['marker_image_list']['vespa'] = 'ベスパ';
$app_list_strings['marker_image_list']['video'] = 'ビデオ';
$app_list_strings['marker_image_list']['villa'] = 'ヴィラ';
$app_list_strings['marker_image_list']['water'] = '水';
$app_list_strings['marker_image_list']['waterfall'] = '滝';
$app_list_strings['marker_image_list']['watermill'] = '水車小屋';
$app_list_strings['marker_image_list']['waterpark'] = 'ウォーターパーク';
$app_list_strings['marker_image_list']['watertower'] = '貯水塔';
$app_list_strings['marker_image_list']['wednesday'] = '水曜日';
$app_list_strings['marker_image_list']['wifi'] = 'Wifi';
$app_list_strings['marker_image_list']['wind_turbine'] = '風力タービン';
$app_list_strings['marker_image_list']['windmill'] = '風車';
$app_list_strings['marker_image_list']['winery'] = 'ワイナリー';
$app_list_strings['marker_image_list']['work_office'] = '事務所';
$app_list_strings['marker_image_list']['world_heritage_site'] = '世界遺産';
$app_list_strings['marker_image_list']['zoo'] = '動物園';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = '外出中';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'ミーティング中';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'リスケ';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'スケジュール変更情報を入力してください。';
$app_strings['LBL_RESCHEDULE_DATE'] = '日付:';
$app_strings['LBL_RESCHEDULE_REASON'] = '理由:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = '有効な日付を選択してください';
$app_strings['LBL_RESCHEDULE_ERROR2'] = '理由を選択してください';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'リスケ';
$app_strings['LBL_RESCHEDULE_HISTORY'] = '電話試行履歴';
$app_strings['LBL_RESCHEDULE_COUNT'] = '電話連絡';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'セキュリティ スイートの管理';
$app_strings['LBL_LOGIN_AS'] = 'ログイン ';
$app_strings['LBL_LOGOUT_AS'] = 'ログアウト ';
$app_strings['LBL_SECURITYGROUP'] = 'セキュリティグループ';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = '送信メール アカウント';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'ソーシャル フィードの詳細';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'フィルタ';

$app_strings['LBL_COLLECTION_TYPE'] = 'タイプ';

$app_strings['LBL_ADD_TAB'] = 'タブ追加';
$app_strings['LBL_EDIT_TAB'] = 'タブ編集';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SuiteCRM ダッシュボード'; //Can be translated in all caps. This string will be used by SuiteP template menu actions
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'ダッシュボード名入力：';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'コラム数：';
$app_strings['LBL_DELETE_DASHBOARD1'] = '次を削除してもよろしいですか';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'ダッシュボード？';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'ダッシュボードページ追加';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = '現在のダッシュボードページを削除';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'ダッシュボードページ名変更';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = '活動'; //Can be translated in all caps. This string will be used by SuiteP template menu actions

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'タスク',
    'Meetings' => 'ミーティング',
    'Calls' => 'コール',
    'Notes' => 'ノート',
    'Emails' => 'Eメール'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'テンプレート パーツ エディタ';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "編集されたフィールドから保存せずにクリックして離れました。編集を続行したい場合はキャンセルを、変更を失っても構わない場合 ok をクリックします";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "フィールドの読み込みエラーが発生しました。セッションがタイムアウトした可能性があります。この問題を解決するためにもう一度ログインしてください。";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => '営業',
    'getAccountsSpotsData' => '口座',
    'getLeadsSpotsData' => '潜在顧客',
    'getServiceSpotsData' => 'サービス',
    'getMarketingSpotsData' => 'マーケティング',
    'getMarketingActivitySpotsData' => 'マーケティング活動',
    'getActivitiesSpotsData' => '活動',
    'getQuotesSpotsData' => '見積'
);

$app_list_strings['moduleList']['Spots'] = 'スポット';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = '営業時間';
$app_list_strings['business_hours_list']['0'] = '12am';
$app_list_strings['business_hours_list']['1'] = '1am';
$app_list_strings['business_hours_list']['2'] = '2am';
$app_list_strings['business_hours_list']['3'] = '3am';
$app_list_strings['business_hours_list']['4'] = '4am';
$app_list_strings['business_hours_list']['5'] = '5am';
$app_list_strings['business_hours_list']['6'] = '6am';
$app_list_strings['business_hours_list']['7'] = '7am';
$app_list_strings['business_hours_list']['8'] = '8am';
$app_list_strings['business_hours_list']['9'] = '9am';
$app_list_strings['business_hours_list']['10'] = '10am';
$app_list_strings['business_hours_list']['11'] = '11am';
$app_list_strings['business_hours_list']['12'] = '12pm';
$app_list_strings['business_hours_list']['13'] = '1pm';
$app_list_strings['business_hours_list']['14'] = '2pm';
$app_list_strings['business_hours_list']['15'] = '3pm';
$app_list_strings['business_hours_list']['16'] = '4pm';
$app_list_strings['business_hours_list']['17'] = '5pm';
$app_list_strings['business_hours_list']['18'] = '6pm';
$app_list_strings['business_hours_list']['19'] = '7pm';
$app_list_strings['business_hours_list']['20'] = '8pm';
$app_list_strings['business_hours_list']['21'] = '9pm';
$app_list_strings['business_hours_list']['22'] = '10pm';
$app_list_strings['business_hours_list']['23'] = '11pm';
$app_list_strings['day_list']['Monday'] = '月曜日';
$app_list_strings['day_list']['Tuesday'] = '火曜日';
$app_list_strings['day_list']['Wednesday'] = '水曜日';
$app_list_strings['day_list']['Thursday'] = '木曜日';
$app_list_strings['day_list']['Friday'] = '金曜日';
$app_list_strings['day_list']['Saturday'] = '土曜日';
$app_list_strings['day_list']['Sunday'] = '日曜日';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = '手紙';
$app_list_strings['pdf_page_size_dom']['Legal'] = '法';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'ポートレート';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'ランドスケープ';
$app_list_strings['run_when_dom']['When True'] = '評価の保存'; // PR 6143
$app_list_strings['run_when_dom']['Once True'] = '永久的 - (フィールドは監査される必要があります)';
$app_list_strings['sa_status_list']['Complete'] = '完了';
$app_list_strings['sa_status_list']['In_Review'] = 'レビュー中';
$app_list_strings['sa_status_list']['Issue_Resolution'] = '問題の解決';
$app_list_strings['sa_status_list']['Pending_Apttus_Submission'] = '保留中の Apttus の提出';
$app_list_strings['sharedGroupRule']['none'] = 'アクセスなし';
$app_list_strings['sharedGroupRule']['view'] = '表示のみ';
$app_list_strings['sharedGroupRule']['view_edit'] = '表示&編集';
$app_list_strings['sharedGroupRule']['view_edit_delete'] = '表示、編集&削除';
$app_list_strings['moduleList']['SharedSecurityRulesFields'] = '共有セキュリティ ルール フィールド';
$app_list_strings['moduleList']['SharedSecurityRules'] = '共有セキュリティの規則';
$app_list_strings['moduleList']['SharedSecurityRulesActions'] = '共有セキュリティの規則の振る舞い';
$app_list_strings['shared_email_type_list'][''] = '';
$app_list_strings['shared_email_type_list']['Specify User'] = 'ユーザー';
$app_list_strings['shared_email_type_list']['Users'] = 'ユーザー';
$app_list_strings['aow_condition_type_list']['Value'] = '値';
$app_list_strings['aow_condition_type_list']['Field'] = 'フィールド';
$app_list_strings['aow_condition_type_list']['Any_Change'] = '変更';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'セキュリティグループ内';
$app_list_strings['aow_condition_type_list']['currentUser'] = '現在ログインしているユーザー';
$app_list_strings['aow_condition_type_list']['Date'] = '日';
$app_list_strings['aow_condition_type_list']['Multi'] = '〜の一つ';


$app_list_strings['moduleList']['SurveyResponses'] = '調査の回答';
$app_list_strings['moduleList']['Surveys'] = '調査';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = '調査質問の回答';
$app_list_strings['moduleList']['SurveyQuestions'] = '調査質問';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = '調査質問の選択肢';
$app_list_strings['survey_status_list']['Draft'] = '草案';
$app_list_strings['survey_status_list']['Public'] = 'パブリック';
$app_list_strings['survey_status_list']['Closed'] = '完了';
$app_list_strings['surveys_question_type']['Text'] = '文章';
$app_list_strings['surveys_question_type']['Textbox'] = 'テキスト ボックス';
$app_list_strings['surveys_question_type']['Checkbox'] = 'チェックボックス';
$app_list_strings['surveys_question_type']['Radio'] = 'ラジオボタン';
$app_list_strings['surveys_question_type']['Dropdown'] = 'ドロップダウン';
$app_list_strings['surveys_question_type']['Multiselect'] = '複数選択';
$app_list_strings['surveys_question_type']['Matrix'] = 'マトリックス';
$app_list_strings['surveys_question_type']['DateTime'] = '日付時刻';
$app_list_strings['surveys_question_type']['Date'] = '日';
$app_list_strings['surveys_question_type']['Scale'] = 'スケール';
$app_list_strings['surveys_question_type']['Rating'] = '格付:';
$app_list_strings['surveys_matrix_options'][0] = '満足';
$app_list_strings['surveys_matrix_options'][1] = 'どちらとも言えない';
$app_list_strings['surveys_matrix_options'][2] = '不満';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'オプトインの確認を保留中、オプトインが送信されないことを確認する';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'メールの送信に失敗したことを確認する';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'オプトインの確認を保留中、オプトインの確認の送信';
$app_strings['LBL_OPT_IN'] = 'オプトインされた';
$app_strings['LBL_OPT_IN_CONFIRMED'] = '確認されたオプトイン';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'メール不可';
$app_strings['LBL_OPT_IN_INVALID'] = '無効';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => '無効',
    'opt-in' => 'オプト インする',
    'confirmed-opt-in' => '確認したオプト・イン'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'オプトインされていない',
    'opt-in' => 'オプト インする',
    'confirmed-opt-in' => '確認したオプト・イン'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'Eメールでのオプトインの確認は %s Eメールアドレス(es) に対するEメールキューに追加されました。 ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'オプトインしていないので %s Eメール アドレス(es) にEメールを送信できません。 ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s Eメール アドレスは、有効な id を持っていません。 ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = '2段階認証に失敗しました';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = '2段階認証のコードが送信されました。';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = '2段階認証のコードの送信に失敗しました。';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'ご関心ありがとうございました。';

$app_strings['ERR_IP_CHANGE'] = 'IP アドレスの重要な変更のため、セッションが終了しました';
$app_strings['ERR_RETURN'] = 'ホームに戻る';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'パスワード付与',
    'client_credentials' => 'クライアントの資格情報',
    'implicit' => '暗黙的',
    'authorization_code' => '認証コード'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => '分',
    'hour' => '時',
    'day' => '日',
    'week' => '週',
    'month' => '月',
];
/** PR 6222 */
$app_list_strings['search_controllers'] = [
    'Search' => '検索 (新規)',
    'UnifiedSearch' => 'グローバル統合検索 (旧来)'
];


$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'JSON API エラー';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'JSON API エラーが発生しました。'; // PR 6752
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Api バージョン: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = '必要なフィールドに入力してください。';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'Json APIはリクエストの本文がJSONであることを期待します';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Json Api ペイロード要求を検証できません';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Json Api ペイロード応答を検証できません';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'Json API リソースを見つけることができません';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'Json APIは、 "Accept"ヘッダーがapplication / vnd.api + jsonであることを期待しています';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'Json APIは"Content-type"ヘッダーがapplication/vnd.api+jsonであることを期待します';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'デスクトップ通知は、web ブラウザーで有効になりました。';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Ｗeb ブラウザーのデスクトップ通知は無効です。ブラウザーの設定を使用して、再度有効にします。';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'このブラウザーでは、デスクトップ通知はサポートされていません。';

$app_strings['LBL_GOOGLE_SYNC_ERR'] = 'SuiteCRM Google Sync - エラー'; // PR 6539
$app_strings['LBL_THERE_WAS_AN_ERR'] = 'エラーが発生しました: '; // PR 6539

$app_strings['LBL_TO_CONTINUE'] = ' 続行する。'; // PR 6539

$app_strings['IMAP_HANDLER_ERROR'] = 'エラー: {error}; キー: "{key}"。'; // PR 6600 6617
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: テストの設定を"{key}"に変更'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = '無効な要求、"{var}"の値を使用します。'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = '不明なエラーが発生しました。キー"{key}"は保存されません。'; // PR 6752
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'テストの設定が存在しません。'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'キーが見つかりません。'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'キーの保存エラー。'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = '不明なエラー'; // PR 6600 6617

$app_strings['LBL_SEARCH_TITLE']                   = '検索'; // Dev 6543
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = '検索条件を入力'; // Dev 6543
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = '検索'; // Dev 6543
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = '検索'; // Dev 6543
$app_strings['LBL_SEARCH_QUERY']                   = '検索条件: '; // Dev 6543
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'ページ単位の結果: '; // Dev 6543
$app_strings['LBL_SEARCH_ENGINE']                  = 'エンジン: '; // Dev 6543
$app_strings['LBL_SEARCH_TOTAL'] = '合計の実績: '; // Dev PR 6705
$app_strings['LBL_SEARCH_PREV'] = '前へ'; // Dev PR 6705
$app_strings['LBL_SEARCH_NEXT'] = '次へ'; // Dev PR 6705
$app_strings['LBL_SEARCH_PAGE'] = 'ページ '; // Dev PR 6705
$app_strings['LBL_SEARCH_OF'] = ' の '; // Usage: Page 1 of 5 - Dev PR 6705

$app_list_strings['LBL_REPORTS_RESTRICTED'] = '選択したレポートは、アクセスできないモジュールを対象としています。アクセスできるモジュールを対象とするレポートを選択してください。';
