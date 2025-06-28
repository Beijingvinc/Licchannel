<?php
// Basic configuration for the textboard

// Board name
define('BOARD_TITLE', 'Licchannel');
define('BOARD_TITLE_IMG', ''); // Vacío si no quieres imagen
// Admin password (change after install)
define('ADMIN_PASSWORD', 'admin123');
// Max threads to show in index
define('MAX_THREADS', 10);
// Max replies per thread
define('MAX_REPLIES', 100);
// Data directory
define('DATA_DIR', __DIR__ . '/data');
// Timezone
date_default_timezone_set('UTC');

// Available styles
$STYLES = [
    'mercury' => 'src/styles/css/mercury.css',
    'buun' => 'src/styles/css/buun.css',
];

// Default username if none is provided
const DEFAULT_USERNAME = '路人甲';

// Global language
const LANG = 'en'; // Change to 'zh', 'ja', etc. to switch language

// Translation dictionary
$GLOBALS['TRANSLATIONS'] = [
    'es' => [
        'rules' => 'Reglas',
        'board_look' => 'Apariencia',
        'new_thread' => 'Nuevo hilo',
        'create_new_thread' => 'Crear nuevo hilo',
        'reply' => 'Responder',
        'admin_panel' => 'Panel de administración',
        'go_to_thread' => 'Ir al hilo',
        'no_threads' => 'No hay hilos aún.',
        'style' => 'Estilo',
        'threads' => 'Hilos',
        'message' => 'Mensaje',
        'submit' => 'Enviar',
        'back_to_index' => 'Volver al índice',
        'all_threads' => 'Todos los hilos',
        'entire_thread' => 'Hilo completo',
        'last_50_posts' => 'Últimos 50 mensajes',
        'thread_list' => 'Lista de hilos',
        'footer_channel' => '88论坛',
    ],
    'en' => [
        'rules' => 'Rules',
        'board_look' => 'Board look',
        'new_thread' => 'New thread',
        'create_new_thread' => 'Create new thread',
        'reply' => 'Reply',
        'admin_panel' => 'Admin panel',
        'go_to_thread' => 'Go to thread',
        'no_threads' => 'No threads yet.',
        'style' => 'Style',
        'threads' => 'Threads',
        'message' => 'Message',
        'submit' => 'Submit',
        'back_to_index' => 'Back to index',
        'all_threads' => 'All threads',
        'entire_thread' => 'Entire thread',
        'last_50_posts' => 'Last 50 posts',
        'thread_list' => 'Thread list',
        'footer_channel' => '88Forum',
    ],
    'zh' => [
        'rules' => '规则',
        'board_look' => '版面风格',
        'new_thread' => '新主题',
        'create_new_thread' => '创建新主题',
        'reply' => '回复',
        'admin_panel' => '管理面板',
        'go_to_thread' => '进入主题',
        'no_threads' => '暂无主题。',
        'style' => '风格',
        'threads' => '主题',
        'message' => '内容',
        'submit' => '提交',
        'back_to_index' => '返回首页',
        'all_threads' => '所有主题',
        'entire_thread' => '完整主题',
        'last_50_posts' => '最近50条',
        'thread_list' => '主题列表',
        'footer_channel' => '88论坛',
    ],
    'fr' => [
        'rules' => 'Règles',
        'board_look' => 'Apparence',
        'new_thread' => 'Nouveau fil',
        'create_new_thread' => 'Créer un nouveau fil',
        'reply' => 'Répondre',
        'admin_panel' => 'Panneau d\'administration',
        'go_to_thread' => 'Aller au fil',
        'no_threads' => 'Aucun fil pour le moment.',
        'style' => 'Style',
        'threads' => 'Fils',
        'message' => 'Message',
        'submit' => 'Envoyer',
        'back_to_index' => 'Retour à l\'index',
        'all_threads' => 'Tous les fils',
        'entire_thread' => 'Fil complet',
        'last_50_posts' => '50 derniers messages',
        'thread_list' => 'Liste des fils',
        'footer_channel' => '88Forum',
    ],
    'ja' => [
        'rules' => 'ルール',
        'board_look' => '板の見た目',
        'new_thread' => '新しいスレッド',
        'create_new_thread' => '新しいスレッドを作成',
        'reply' => '返信',
        'admin_panel' => '管理パネル',
        'go_to_thread' => 'スレッドへ',
        'no_threads' => 'まだスレッドがありません。',
        'style' => 'スタイル',
        'threads' => 'スレッド',
        'message' => 'メッセージ',
        'submit' => '送信',
        'back_to_index' => 'インデックスに戻る',
        'all_threads' => '全てのスレッド',
        'entire_thread' => '全スレッド',
        'last_50_posts' => '最新50件',
        'thread_list' => 'スレッド一覧',
        'footer_channel' => '88フォーラム',
    ],
];

function tr($key) {
    $lang = defined('LANG') ? LANG : 'en';
    return $GLOBALS['TRANSLATIONS'][$lang][$key] ?? $key;
}

// Default CSS style for the site
define('DEFAULT_STYLE', 'buun'); 