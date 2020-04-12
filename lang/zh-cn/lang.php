<?php

return [
    'topics' => [
        'component_name' => '主题列表',
        'component_description' => '显示所有主题的列表。',
        'per_page' => '每页主题数',
        'per_page_validation' => '每页主题数的格式无效'
    ],
    'topic' => [
        'page_name' => '主题页面',
        'page_help' => '点击一个话题进入的页面'
    ],
    'posts' => [
        'component_name' => '帖子列表',
        'component_description' => '显示所有帖子的列表',
        'per_page' => '每页帖子数',
        'per_page_validation' => '每页帖子数必须是数字'
    ],
    'member' => [
        'page_name' => '用户页面',
        'page_help' => '点击一个用户跳转的页面'
    ],
    'channel' => [
        'component_name' => '频道',
        'component_description' => '显示属于某个频道的帖子列表',
        'page_name' => '频道页面',
        'page_help' => '点击一个频道跳转的页面'
    ],
    'channels' => [
        'new_channel' => '新建频道',
        'delete_selected_confirm' => '确定吗？',
        'delete' => '删除',
        'manage' => '管理频道排序',
        'return' => '返回频道列表',
        'name' => '频道',
        'create' => '创建频道',
        'update' => '编辑频道',
        'preview' => '预览频道',
        'manage' => '管理频道',
        'creating' => '频道创建中...',
        'create' => '创建',
        'createnclose' => '创建和关闭',
        'cancel' => '取消',
        'or' => '或者',
        'returnlist' => '返回频道列表',
        'saving' => '频道保存中...',
        'save' => '保存',
        'savenclose' => '保存和关闭',
        'deleting' => '频道删除中...',
        'really' => '您确定要删除该频道吗？',
        'list_name' => '频道列表',
        'list_desc' => '显示所有可见的频道列表。'
    ],
    'slug' => [
        'name' => 'Slug 参数名',
        'desc' => 'URL路由参数，用于通过它的 slug 查找频道。硬编码的 slug 也可以使用。'
    ],
    'frontend' => [
        'notopic' => '这个频道没有主题。'
    ],

    'plugin' => [
        'name' => '论坛',
        'description' => '一个简单的嵌入式论坛'
    ],
    'data' => [
        'title' => '标题',
        'desc' => '描述',
        'slug' => 'Slug',
        'parent' => '父级',
        'noparent' => '-- 没有父级 --',
        'moderated' => '主持模式',
        'is_mod' => '只有版主才能在这个频道发表文章。',
        'hidden' => '屏蔽',
        'is_hidden' => '从主类别列表中隐藏此类别。',
        'guarded' => '垃圾防护',
        'is_guarded' => '成员必须得到版主的批准，他们的帖子才会出现在未注册用户面前。'
    ],
    'settings' => [
        'username' => '用户名',
        'username_comment' => '该用户在论坛上显示的用户名',
        'moderator' => '论坛版主',
        'moderator_comment' => '如果该用户可以主持整个论坛，请在此框中打勾。',
        'banned' => '禁止进入论坛',
        'banned_comment' => '如果该用户被禁止向论坛发帖，请在此框中打勾。',
        'forum_username' => '论坛用户名',
        'channels' => '论坛频道',
        'channels_desc' => '管理可用的论坛频道。',
        'channels_filter' => '频道过滤',
        'channels_filter_description' => '输入一个分类 slug 或网址参数来过滤主题。留空以显示所有主题。',
        'rssfeed_title' => 'RSS Feed',
        'rssfeed_description' => '生成包含论坛主题的RSS源.',
        'rssfeed_forum' => '论坛页面',
        'rssfeed_forum_description' => '用于生成链接的主论坛页面文件的名称。默认组件 partial 使用此属性。',
    ],
    'embedch' => [
        'channel_name' => '嵌入频道',
        'channel_self_desc' => '附加一个频道到页面。',
        'channel_title' => '父频道',
        'channel_desc' => '指定要在其中创建新频道的频道',
        'embed_title' => '嵌入代码参数',
        'embed_desc' => '生成的通道的唯一代码。还可以使用路由参数。',
        'topic_name' => '主题代码参数',
        'topic_desc' => 'URL路由参数，用于通过它的slug查找主题。'
    ],
    'embedtopic' => [
        'topic_name' => '嵌入主题',
        'topic_self_desc' => '附加一个主题到页面',
        'target_name' => '目标频道',
        'target_desc' => '指定要在其中创建新主题或频道的频道',
        'embed_title' => '嵌入代码',
        'embed_desc' => '生成的主题或频道的唯一代码。也可以使用路由参数。'
    ],
    'memberpage' => [
        'name' => '成员',
        'self_desc' => '显示表单成员信息和活动。',
        'slug_name' => 'Slug 参数名',
        'slug_desc' => 'URL路径参数，用于通过他们的 slug 查找论坛成员。硬编码的 slug 也可以使用。',
        'view_title' => '视图模式',
        'view_desc' => '手动为该成员组件设置视图模式。',
        'ch_title' => '频道页',
        'ch_desc' => '用于点击频道后的跳转的页面名称。',
        'topic_title' => '主题页',
        'topic_desc' => '用于点击话题后跳转的页面名称。'
    ],
    'topicpage' => [
        'name' => '主题',
        'self_desc' => '显示主题和帖子。',
        'slug_name' => 'Slug 参数名',
        'slug_desc' => 'URL路由参数，用于通过它的 slug 查找主题。硬编码的 slug 也可以使用。',
        'channel_title' => '频道页',
        'channel_desc' => '用于点击频道后跳转的页面名称。'
    ]
];
