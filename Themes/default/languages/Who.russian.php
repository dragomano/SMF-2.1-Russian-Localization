<?php
// Version: 2.1 RC3; Who

global $scripturl, $context;

$txt['who_hidden'] = 'Скрытый пользователь. Просмотр недоступен.';
$txt['who_admin'] = 'Просматривает центр администрирования';
$txt['who_moderate'] = 'Просматривает центр модерации';
$txt['who_generic'] = 'Просматривает';
$txt['who_unknown'] = 'Неизвестное действие';
$txt['who_user'] = 'Пользователь';
$txt['who_time'] = 'Время';
$txt['who_action'] = 'Действие';
$txt['who_show'] = 'Показать ';
$txt['who_show_members_only'] = 'только пользователей';
$txt['who_show_guests_only'] = 'только гостей';
$txt['who_show_spiders_only'] = 'только пауков';
$txt['who_show_all'] = 'всех';
$txt['who_no_online_spiders'] = 'В настоящее время нет пауков онлайн.';
$txt['who_no_online_guests'] = 'В настоящее время нет гостей онлайн.';
$txt['who_no_online_members'] = 'В настоящее время нет пользователей онлайн.';
$txt['who_guest_login'] = 'Пользователь был перенаправлен на страницу входа.';

$txt['whospider_login'] = 'Просматривает страницу входа.';
$txt['whospider_register'] = 'Просматривает страницу регистрации.';
$txt['whospider_reminder'] = 'Просматривает страницу напоминания.';

$txt['whoall_activate'] = 'Активирует свою учётную запись.';
$txt['whoall_buddy'] = 'Изменяет список своих друзей.';
$txt['whoall_coppa'] = 'Заполняет сведения о родителях/опекунах.';
$txt['whoall_credits'] = 'Просматривает информацию о разработчиках.';
$txt['whoall_emailuser'] = 'Отправляет письмо другому пользователю.';
$txt['whoall_groups'] = 'Просматривает группы.';
// argument(s): $scripturl
$txt['whoall_help'] = 'Просматривает <a href="%1$s?action=help">справочный раздел</a>.';
$txt['whoall_helpadmin'] = 'Читает подсказку.';
$txt['whoall_pm'] = 'Просматривает личные сообщения.';
$txt['whoall_login'] = 'Входит на форум.';
$txt['whoall_login2'] = 'Входит на форум.';
$txt['whoall_logout'] = 'Выходит с форума.';
$txt['whoall_markasread'] = 'Отмечает темы как прочитанные (непрочитанные).';
$txt['whoall_news'] = 'Просматривает новости.';
$txt['whoall_notify'] = 'Изменяет настройки уведомлений.';
$txt['whoall_notifyboard'] = 'Изменяет настройки уведомлений.';
$txt['whoall_quickmod'] = 'Модерирует раздел.';
// argument(s): $scripturl
$txt['whoall_recent'] = 'Просматривает список <a href="%1$s?action=recent">последних сообщений</a>.';
$txt['whoall_reminder'] = 'Восстанавливает пароль.';
$txt['whoall_reporttm'] = 'Отправляет отчёт модератору.';
$txt['whoall_restoretopic'] = 'Восстанавливает тему.';
$txt['whoall_signup'] = 'Регистрируется на форуме.';
$txt['whoall_signup2'] = 'Регистрируется на форуме.';
$txt['whoall_spellcheck'] = 'Пользуется проверкой орфографии';
$txt['whoall_unread'] = 'Просматривает непрочитанные темы с последнего визита.';
$txt['whoall_unreadreplies'] = 'Просматривает непрочитанные сообщения с последнего визита.';
$txt['whoall_unwatchtopic'] = 'Отмечает темы как не просмотренные.';
// argument(s): $scripturl
$txt['whoall_who'] = 'Просматривает <a href="%1$s?action=who">текущий онлайн</a>.';

$txt['whoall_collapse_collapse'] = 'Сворачивает категорию.';
$txt['whoall_collapse_expand'] = 'Разворачивает категорию.';
$txt['whoall_pm_removeall'] = 'Удаляет личные сообщения.';
$txt['whoall_pm_send'] = 'Пишет личное сообщение.';
$txt['whoall_pm_send2'] = 'Отправляет личное сообщение.';

// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_announce'] = 'Анонсирует тему <a href="%3$s?topic=%1$d.0">%2$s</a>.';
$txt['whotopic_attachapprove'] = 'Одобряет вложение.';
$txt['whotopic_dlattach'] = 'Просматривает вложение.';
$txt['whotopic_deletemsg'] = 'Удаляет сообщение.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_editpoll'] = 'Редактирует голосование <a href="%3$s?topic=%1$d.0">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_editpoll2'] = 'Редактирует голосование в теме <a href="%3$s?topic=%1$d.0">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_jsmodify'] = 'Изменяет сообщение в теме <a href="%3$s?topic=%1$d.0">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_lock'] = 'Закрывает тему <a href="%3$s?topic=%1$d.0">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_lockvoting'] = 'Закрывает голосование в теме <a href="%3$s?topic=%1$d.0">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_mergetopics'] = 'Объединяет тему <a href="%3$s?topic=%1$d.0">%2$s</a> с другой.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_movetopic'] = 'Переносит тему <a href="%3$s?topic=%1$d.0">%2$s</a> в другой раздел.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_movetopic2'] = 'Перемещает тему <a href="%3$s?topic=%1$d.0">%2$s</a> в другой раздел.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_post'] = 'Пишет ответ в тему <a href="%3$s?topic=%1$d.0">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_post2'] = 'Отправляет ответ в тему <a href="%3$s?topic=%1$d.0">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_printpage'] = 'Просматривает версию для печати <a href="%3$s?topic=%1$d.0">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_quickmod2'] = 'Модерирует тему <a href="%3$s?topic=%1$d.0">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_removepoll'] = 'Удаляет голосование в теме <a href="%3$s?topic=%1$d.0">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_removetopic2'] = 'Удаляет тему <a href="%3$s?topic=%1$d.0">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_splittopics'] = 'Разделяет тему <a href="%3$s?topic=%1$d.0">%2$s</a> на две разных.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_sticky'] = 'Закрепляет тему <a href="%3$s?topic=%1$d.0">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['whotopic_vote'] = 'Голосует в теме <a href="%3$s?topic=%1$d.0">%2$s</a>.';

// argument(s): $id_topic, $subject, $scripturl
$txt['whopost_quotefast'] = 'Цитирует сообщение в теме <a href="%3$s?topic=%1$d.0">%2$s</a>.';

$txt['whoadmin_editagreement'] = 'Редактирует регистрационное соглашение.';
$txt['whoadmin_featuresettings'] = 'Изменяет настройки форума.';
$txt['whoadmin_modlog'] = 'Просматривает список действий модераторов.';
$txt['whoadmin_serversettings'] = 'Изменяет настройки форума.';
$txt['whoadmin_packageget'] = 'Получает пакеты.';
$txt['whoadmin_packages'] = 'Просматривает менеджер пакетов.';
$txt['whoadmin_permissions'] = 'Редактирует права пользователей.';
$txt['whoadmin_pgdownload'] = 'Загружает пакет.';
$txt['whoadmin_theme'] = 'Изменяет настройки темы оформления.';
$txt['whoadmin_trackip'] = 'Проверяет IP-адрес пользователя.';

$txt['whoallow_manageboards'] = 'Редактирует настройки разделов и категорий.';
// argument(s): $scripturl
$txt['whoallow_admin'] = 'Находится в <a href="%1$s?action=admin">Центре администрирования</a>.';
$txt['whoallow_ban'] = 'Редактирует бан лист.';
$txt['whoallow_boardrecount'] = 'Пересчитывает статистику форума.';
// argument(s): $scripturl
$txt['whoallow_calendar'] = 'Просматривает <a href="%1$s?action=calendar">календарь</a>.';
$txt['whoallow_editnews'] = 'Редактирует новости.';
$txt['whoallow_mailing'] = 'Отправляет электронное сообщение.';
$txt['whoallow_maintain'] = 'Выполняет обслуживание форума.';
$txt['whoallow_manageattachments'] = 'Управляет вложениями.';
$txt['whoallow_modsettings'] = 'Редактирует настройки мода';
$txt['whoallow_logs '] = 'Просматривает журнал ошибок';
$txt['whoallow_languages'] = 'Управляет локализациями форума';
$txt['whoallow_sengines'] = 'Управляет поисковыми системами';
$txt['whoallow_managesearch'] = 'Редактирует настройки поиска';
$txt['whoallow_managecalendar'] = 'Управляет календарем';
$txt['whoallow_postsettings'] = 'Редактирует настройки сообщений';
$txt['whoallow_scheduledtasks'] = 'Настраивает диспетчер задач';
$txt['whoallow_mailqueue'] = 'Просматривает очередь сообщений';
$txt['whoallow_reports'] = 'Просматривает отчёты';
$txt['whoallow_membergroups'] = 'Управляет пользовательскими группами';
$txt['whoallow_regcenter'] = 'Просматривает центр регистрации';
$txt['whoallow_paidsubscribe'] = 'Управляет платными подписками';
// argument(s): $scripturl
$txt['whoallow_moderate'] = 'Просматривает <a href="%1$s?action=moderate">центр модерации</a>.';
// argument(s): $scripturl
$txt['whoallow_mlist'] = 'Просматривает <a href="%1$s?action=mlist">список пользователей</a>.';
$txt['whoallow_optimizetables'] = 'Оптимизирует таблицы форума.';
$txt['whoallow_repairboards'] = 'Восстанавливает таблицы форума.';
// argument(s): $scripturl
$txt['whoallow_search'] = 'Пользуется <a href="%1$s?action=search">поиском</a>.';
$txt['whoallow_search2'] = 'Просматривает результаты поиска.';
// argument(s): $scripturl
$txt['whoallow_stats'] = 'Просматривает <a href="%1$s?action=stats">статистику форума</a>.';
$txt['whoallow_viewerrorlog'] = 'Просматривает список ошибок.';
$txt['whoallow_viewmembers'] = 'Просматривает список пользователей.';

// argument(s): $id_topic, $subject, $scripturl
$txt['who_topic'] = 'Просматривает тему <a href="%3$s?topic=%1$d.0">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['who_board'] = 'Просматривает раздел <a href="%3$s?board=%1$d.0">%2$s</a>.';
// argument(s): $scripturl, $context['forum_name_html_safe']
$txt['who_index'] = 'Просматривает главную страницу <a href="%1$s">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['who_viewprofile'] = 'Просматривает профиль пользователя <a href="%3$s?action=profile;u=%1$d">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['who_viewownprofile'] = 'Просматривает <a href="%3$s?action=profile;u=%1$d">свой профиль</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['who_profile'] = 'Редактирует профиль пользователя <a href="%3$s?action=profile;u=%1$d">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['who_post'] = 'Создает новую тему в <a href="%3$s?board=%1$d.0">%2$s</a>.';
// argument(s): $id_topic, $subject, $scripturl
$txt['who_poll'] = 'Создает новое голосование в <a href="%3$s?board=%1$d.0">%2$s</a>.';

// Credits text
$txt['credits'] = 'Благодарности';
$txt['credits_intro'] = 'Simple Machines выражает благодарность всем, кто помог сделать SMF 2.1 таким, какой он сейчас; влияя на нас и направляя наш проект через все преграды. Это было бы невозможно без вас. Спасибо всем нашим пользователям и, особенно, группе Charter Members — за установку и использование нашего программного обеспечения, за обратную связь с нами, сообщения об ошибках, за ваше мнение о проекте.';
$txt['credits_team'] = 'Команде проекта';
$txt['credits_special'] = 'Отдельное спасибо';
$txt['credits_list'] = '%1$s.';
$txt['credits_anyone'] = 'И каждому, кого мы, возможно, пропустили — спасибо!';
$txt['credits_copyright'] = '/ Авторские права';
$txt['credits_forum'] = 'Форум';
$txt['credits_modifications'] = 'Модификации';
$txt['credits_software_graphics'] = 'Код / Графика';
$txt['credits_software'] = 'Код';
$txt['credits_graphics'] = 'Графика';
$txt['credits_fonts'] = 'Шрифты';
$txt['credits_groups_pm'] = 'Менеджер проекта';
$txt['credits_groups_dev'] = 'Разработчикам';
$txt['credits_groups_support'] = 'Специалистам поддержки';
$txt['credits_groups_customize'] = 'Разработчикам модов';
$txt['credits_groups_docs'] = 'Составителям документации';
$txt['credits_groups_marketing'] = 'Маркетологам';
$txt['credits_groups_internationalizers'] = 'Локализаторам';
$txt['credits_groups_servers'] = 'Администраторам серверов';
$txt['credits_groups_site'] = 'Администраторам сайта';
$txt['credits_license'] = 'Лицензия';
$txt['credits_version'] = 'Версия';
// Replace "English" with the name of this language pack in the string below.
$txt['credits_groups_translation'] = 'Создателям русской локализации';
$txt['credits_groups_translators'] = 'Переводчикам';
$txt['credits_translators_message'] = 'Благодарим за проделанную работу, которая сделала возможным использование SMF во всем мире.';
$txt['credits_groups_consultants'] = 'Консультантам';
$txt['credits_code_contributors'] = 'всем, кто участвовал в <a href="https://github.com/SimpleMachines/SMF2.1/graphs/contributors">разработке на GitHub</a>';
$txt['credits_groups_beta'] = 'Бета тестерам';
$txt['credits_beta_message'] = 'Тем, кто неустанно находил ошибки, использовал обратную связь, а также сводил с ума разработчиков.';
$txt['credits_groups_founder'] = 'Основателю SMF';
$txt['credits_groups_orignal_pm'] = 'Первым менеджерам проекта';
$txt['credits_in_memoriam'] = 'Памяти';

// List of people who have made more than a token contribution to this translation. (blank for English)
$txt['translation_credits'] = array('Mavn', 'Digger', 'Bugo');

?>