<?php
// Version: 2.1 RC4; Index

global $forum_copyright;

// Native name, please use write your language's name (in Unicode).
$txt['native_name'] = 'Русский';

// Locale (strftime, basename). For more information see:
//   - https://php.net/function.setlocale
$txt['lang_locale'] = 'ru_RU';
$txt['lang_dictionary'] = 'ru';
//https://developers.google.com/recaptcha/docs/language
$txt['lang_recaptcha'] = 'ru';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Number format.
$txt['number_format'] = '1,234.00';

$txt['days_title'] = 'дней';
$txt['days'] = array('Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота');
$txt['days_short'] = array('Вс.', 'Пн.', 'Вт.', 'Ср.', 'Чт.', 'Пт.', 'Сб.');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months_title'] = 'месяцев';
$txt['months'] = array(1 => 'января', 2 => 'февраля', 3 => 'марта', 4 => 'апреля', 5 => 'мая', 6 => 'июня', 7 => 'июля', 8 => 'августа', 9 => 'сентября', 10 => 'октября', 11 => 'ноября', 12 => 'декабря');
$txt['months_titles'] = array(1 => 'Январь', 2 => 'Февраль', 3 => 'Март', 4 => 'Апрель', 5 => 'Май', 6 => 'Июнь', 7 => 'Июль', 8 => 'Август', 9 => 'Сентябрь', 10 => 'Октябрь', 11 => 'Ноябрь', 12 => 'Декабрь');
$txt['months_short'] = array(1 => 'Янв.', 2 => 'Фев.', 3 => 'Март', 4 => 'Апр.', 5 => 'Май', 6 => 'Июнь', 7 => 'Июль', 8 => 'Авг.', 9 => 'Сен.', 10 => 'Окт.', 11 => 'Нояб.', 12 => 'Дек.');
$txt['prev_month'] = 'Предыдущий месяц';
$txt['next_month'] = 'Следующий месяц';
$txt['start'] = 'Начало';
$txt['end'] = 'Конец';
$txt['starts'] = 'Начинаются';
$txt['ends'] = 'Заканчиваются';
$txt['none'] = 'Нет';

$txt['minutes_label'] = 'мин.';
$txt['hours_label'] = 'ч.';
$txt['years_title'] = 'лет';

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

// Short form of minutes
$txt['minutes_short'] = 'мин.';
// Short form of hour
$txt['hour_short'] = 'ч.';
// Short form of hours
$txt['hours_short'] = 'ч.';
// Descimal sign
$txt['decimal_sign'] = '.';

$txt['admin'] = 'Админка';
$txt['moderate'] = 'Модерация';

$txt['save'] = 'Сохранить';
$txt['reset'] = 'Сброс';
$txt['upload'] = 'Загрузка';
$txt['upload_all'] = 'Загрузить все';
$txt['processing'] = 'Обработка... ';

$txt['modify'] = 'Изменить';
$txt['forum_index'] = '%1$s - Главная страница';
$txt['members'] = 'Пользователей';
$txt['board_name'] = 'Название раздела';
$txt['posts'] = 'Сообщений';

$txt['member_postcount'] = 'Сообщений';
$txt['no_subject'] = '(Нет темы)';
$txt['view_profile'] = 'Просмотр профиля';
$txt['guest_title'] = 'Гость';
$txt['author'] = 'Автор';
$txt['on'] = '';
$txt['remove'] = 'Удалить';
$txt['start_new_topic'] = 'Новая тема';

$txt['login'] = 'Вход';
// Use numeric entities in the below string.
$txt['username'] = 'Имя пользователя';
$txt['password'] = 'Пароль';

$txt['username_no_exist'] = 'Такого пользователя не существует.';
$txt['no_user_with_email'] = 'Пользователя с таким адресом электронной почты не существует.';

$txt['board_moderator'] = 'Модератор';
$txt['remove_topic'] = 'Удалить тему';
$txt['topics'] = 'Тем';
$txt['modify_msg'] = 'Редактировать сообщение';
$txt['name'] = 'Имя';
$txt['email'] = 'Имейл';
$txt['user_email_address'] = 'Имейл';
$txt['subject'] = 'Тема';
$txt['message'] = 'Сообщение';
$txt['redirects'] = 'Переходов';
$txt['quick_modify'] = 'Изменить';
$txt['quick_modify_message'] = 'Вы успешно отредактировали сообщение.';
$txt['reason_for_edit'] = 'Причина редактирования';

$txt['choose_pass'] = 'Пароль';
$txt['verify_pass'] = 'Подтвердите пароль';
$txt['notify_announcements'] = 'Получать важные новости по электронной почте';

$txt['position'] = 'Группа';

// argument(s): username
$txt['view_profile_of_username'] = 'Просмотр профиля %1$s';
$txt['total'] = 'Всего';
$txt['website'] = 'Сайт';
$txt['register'] = 'Регистрация';
$txt['warning_status'] = 'Статус предупреждения';
$txt['user_warn_watch'] = 'Пользователь в списке наблюдения модераторов';
$txt['user_warn_moderate'] = 'Сообщение пользователя поставлено в очередь для одобрения';
$txt['user_warn_mute'] = 'Пользователь забанен из-за сообщения';
$txt['warn_watch'] = 'Под наблюдением';
$txt['warn_moderate'] = 'Модерируемый';
$txt['warn_mute'] = 'Запрещено оставлять сообщения';

$txt['message_index'] = 'Сообщения';
$txt['news'] = 'Новости';
$txt['home'] = 'Начало';
$txt['page'] = 'Страница';
$txt['prev'] = 'предыдущая страница';
$txt['next'] = 'следующая страница';

$txt['lock_unlock'] = 'Заблокировать/разблокировать тему';
$txt['post'] = 'Отправить';
$txt['error_occured'] = 'Ошибка!';
$txt['at'] = 'в';
$txt['by'] = 'от';
$txt['logout'] = 'Выход';
$txt['started_by'] = 'Автор';
$txt['topic_started_by'] = 'Тема создана пользователем <strong>%1$s</strong> в <em>%2$s</em>';
$txt['replies'] = 'Ответов';
$txt['last_post'] = 'Последний ответ';
$txt['first_post'] = 'Первое сообщение';
$txt['last_poster'] = 'Последний ответ от';
$txt['last_post_message'] = '%3$s<br>%2$s от %1$s';
$txt['last_post_topic'] = '%1$s<br>от %2$s';
$txt['post_by_member'] = '<strong>%1$s</strong> от <strong>%2$s</strong><br>';
$txt['boardindex_total_posts'] = 'Сообщений: %1$s, тем: %2$s, пользователей: %3$s';
$txt['show'] = 'Показать';
$txt['hide'] = 'Скрыть';

$txt['admin_login'] = 'Вход для администратора';
// Use numeric entities in the below string.
$txt['topic'] = 'Тема';
$txt['help'] = 'Помощь';
$txt['terms_and_rules'] = 'Условия и правила';
$txt['watch_board'] = 'Следить за разделом';
$txt['unwatch_board'] = 'Не следить за разделом';
$txt['watch_topic'] = 'Следить за темой';
$txt['unwatch_topic'] = 'Не следить за темой';
$txt['watching_this_topic'] = 'Вы будете получать уведомления о новых сообщениях в данной теме.';
$txt['notify'] = 'Уведомлять';
$txt['unnotify'] = 'Не уведомлять';
// Use numeric entities in the below string.
// argument(s): forum name
$txt['regards_team'] = 'С уважением,
Администрация форума %1$s';
$txt['notify_replies'] = 'Уведомить о новых ответах';
$txt['move_topic'] = 'Переместить тему';
$txt['move_to'] = 'Переместить в';
$txt['pages'] = 'Страницы';
$txt['users_active'] = 'Пользователи за последние %1$d минут';
$txt['personal_messages'] = 'Личные сообщения';
$txt['reply_quote'] = 'Процитировать';
$txt['reply'] = 'Ответить';
$txt['reply_noun'] = 'Ответ';
$txt['reply_number'] = 'Ответ #%1$s%2$s';
$txt['approve'] = 'Одобрить';
$txt['unapprove'] = 'Отклонить';
$txt['approve_all'] = 'Одобрить все';
$txt['issue_warning'] = 'Предупреждение';
$txt['awaiting_approval'] = 'Ожидает одобрения';
$txt['attach_awaiting_approve'] = 'Вложения, ожидающие одобрения';
$txt['post_awaiting_approval'] = 'Данное сообщение ожидает одобрения модератора.';
$txt['there_are_unapproved_topics'] = 'В данном разделе ожидают одобрения %1$s тем и %2$s сообщений. Нажмите <a href="%3$s">здесь</a> для просмотра.';
$txt['send_message'] = 'Отправить сообщение';

$txt['msg_alert_no_messages'] = 'у вас нет сообщений';
$txt['msg_alert_one_message'] = 'у вас <a href="%1$s">1 сообщение</a>';
$txt['msg_alert_many_message'] = 'у вас <a href="%1$s">несколько сообщений</a> (%2$d)';
$txt['msg_alert_one_new'] = '1 новое';
$txt['msg_alert_many_new'] = 'новых: %1$d';
$txt['new_alert'] = 'Новое оповещение';
$txt['remove_message'] = 'Удалить это сообщение';
$txt['remove_message_question'] = 'Удалить это сообщение?';

$txt['topic_alert_none'] = 'Нет сообщений...';
$txt['pm_alert_none'] = 'Нет сообщений...';
$txt['no_messages'] = 'Нет сообщений';

$txt['online_users'] = 'Сейчас на форуме';
$txt['jump_to'] = 'Перейти в';
$txt['go'] = 'да';
$txt['are_sure_remove_topic'] = 'Хотите удалить эту тему?';
$txt['yes'] = 'Да';
$txt['no'] = 'Нет';

$txt['search_end_results'] = 'Конец результатов';
$txt['search_on'] = 'от';

$txt['search'] = 'Поиск';
$txt['all'] = 'Все';
$txt['search_entireforum'] = 'По всему форуму';
$txt['search_thisboard'] = 'В этом разделе';
$txt['search_thistopic'] = 'В этой теме';
$txt['search_members'] = 'Среди пользователей';

$txt['back'] = 'Назад';
$txt['continue'] = 'Продолжить';
$txt['password_reminder'] = 'Напомнить пароль';
$txt['topic_started'] = 'Тема начата';
$txt['title'] = 'Название';
$txt['post_by'] = 'Отправлено';
$txt['memberlist_searchable'] = 'Поиск пользователей.';
$txt['welcome_newest_member'] = 'Добро пожаловать, %1$s, наш самый новый пользователь.';
$txt['admin_center'] = 'Центр администрирования';
$txt['last_edit_by'] = '<span class="lastedit">Последнее редактирование</span>: %1$s от %2$s';
$txt['last_edit_reason'] = '<span id="reason" class="lastedit">Причина</span>: %1$s';
$txt['notify_deactivate'] = 'Хотите отключить уведомления для этой темы?';
$txt['modified_time'] = 'Последнее изменение';
$txt['modified_by'] = 'Изменено';

$txt['recent_posts'] = 'Последние сообщения';

$txt['location'] = 'Расположение';
$txt['location_desc'] = 'Географическое положение.';
$txt['gender'] = 'Пол';
$txt['gender_0'] = 'Нет';
$txt['gender_1'] = 'Мужской';
$txt['gender_2'] = 'Женский';
$txt['gender_desc'] = 'Ваш пол.';
$txt['icq'] = 'ICQ';
$txt['icq_desc'] = 'Ваш номер ICQ.';
$txt['skype'] = 'Skype';
$txt['skype_username'] = 'Имя пользователя Skype.';
$txt['personal_text'] = 'Подпись под аватаром';
$txt['date_registered'] = 'Дата регистрации';

$txt['recent_view'] = 'Последние сообщения на форуме.';
$txt['recent_updated'] = '— самая последняя обновленная тема';
$txt['is_recent_updated'] = '%1$s это самая последняя обновленная тема';

$txt['male'] = 'Мужской';
$txt['female'] = 'Женский';

$txt['error_invalid_characters_username'] = 'Недопустимый символ в имени пользователя.';

// argument(s): forum name, login URL, login JavaScript snippet
$txt['welcome_guest'] = 'Добро пожаловать на <strong>%1$s</strong>. Пожалуйста, <a href="%2$s" onclick="%3$s">авторизуйтесь</a>.';

// argument(s): forum name, login URL, login JavaScript snippet, signup URL
$txt['welcome_guest_register'] = 'Добро пожаловать на <strong>%1$s</strong>. <a href="%2$s" onclick="%3$s">Войдите</a> или <a href="%4$s">зарегистрируйтесь</a>.';

// argument(s): $scripturl
$txt['welcome_guest_activate'] = '<a href="%1$s?action=activate">Пропустили письмо для активации?</a>';
// @todo the following to sprintf
$txt['hello_member'] = 'Здравствуйте,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Добро пожаловать,';
$txt['select_destination'] = 'Пожалуйста, выберите назначение';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Автор';

$txt['icon_smiley'] = 'Улыбающийся';
$txt['icon_angry'] = 'Злой';
$txt['icon_cheesy'] = 'Веселый';
$txt['icon_laugh'] = 'Смеющийся';
$txt['icon_sad'] = 'Грустный';
$txt['icon_wink'] = 'Подмигивающий';
$txt['icon_grin'] = 'Усмешка';
$txt['icon_shocked'] = 'Шокированный';
$txt['icon_cool'] = 'Крутой';
$txt['icon_huh'] = 'Непонимающий';
$txt['icon_rolleyes'] = 'Строит глазки';
$txt['icon_tongue'] = 'Показывает язык';
$txt['icon_embarrassed'] = 'Обеспокоенный';
$txt['icon_lips'] = 'Рот на замке';
$txt['icon_undecided'] = 'В замешательстве';
$txt['icon_kiss'] = 'Целующий';
$txt['icon_cry'] = 'Плачущий';

$txt['moderator'] = 'Модератор';
$txt['moderators'] = 'Модераторы';

$txt['views'] = 'Просмотров';
$txt['new'] = 'Новинка';

$txt['view_all_members'] = 'Все пользователи';
$txt['view'] = 'Смотреть';

$txt['viewing_members'] = 'Список от %1$s до %2$s';
$txt['of_total_members'] = 'Всего: %1$s';

$txt['forgot_your_password'] = 'Забыли пароль?';

$txt['date'] = 'Дата';
// Use numeric entities in the below string.
$txt['from'] = 'От';
$txt['check_new_messages'] = 'Проверить новые сообщения';
$txt['to'] = isset($_REQUEST['action']) && $_REQUEST['action'] == 'calendar' ? '&rarr;' : 'Кому';

$txt['board_topics'] = 'Тем';
$txt['members_title'] = 'Пользователи';
$txt['members_list'] = 'Список пользователей';
$txt['new_posts'] = 'Новые сообщения';
$txt['old_posts'] = 'Нет новых сообщений';
$txt['redirect_board'] = 'Перенаправление';

$txt['sendtopic_send'] = 'Отправить';
$txt['report_sent'] = 'Ваша жалоба успешно отправлена.';
$txt['post_becomes_unapproved'] = 'Ваше сообщение не было опубликовано, потому что было отправлено в неодобренную тему. Как только тема будет одобрена, ваше сообщение тоже будет одобрено.';

$txt['time_offset'] = 'Часовой пояс';
$txt['or'] = 'или';

$txt['no_matches'] = 'Ничего не найдено';

$txt['notification'] = 'Уведомления';

$txt['your_ban'] = '%1$s, вы забанены и не можете оставлять сообщения на форуме!';
$txt['your_ban_expires'] = 'Ваш бан истекает %1$s.';
$txt['your_ban_expires_never'] = 'Вы забанены навсегда.';
$txt['ban_continue_browse'] = 'Вы можете продолжать пользоваться форумом как гость.';

$txt['mark_as_read'] = 'Отметить все сообщения прочитанными';

$txt['locked_topic'] = 'Заблокированная тема';
$txt['normal_topic'] = 'Обычная тема';
$txt['participation_caption'] = 'Тема с вашими ответами';
$txt['moved_topic'] = 'Перемещенная тема';

$txt['go_caps'] = 'Перейти';

$txt['print'] = 'Печать';
$txt['profile'] = 'Профиль';
$txt['topic_summary'] = 'Сообщения в этой теме';
$txt['not_applicable'] = 'нет данных';
$txt['name_in_use'] = 'Это имя уже используется другим пользователем.';

$txt['total_members'] = 'Всего пользователей';
$txt['total_posts'] = 'Всего сообщений';
$txt['total_topics'] = 'Всего тем';

$txt['time_logged_in'] = 'Хранить данные входа';

$txt['preview'] = 'Предварительный просмотр';
$txt['always_logged_in'] = 'Постоянно';

$txt['logged'] = 'Записан';
$txt['show_ip'] = 'Показать IP';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';
$txt['url'] = 'URL';
$txt['www'] = 'WWW';

$txt['hours'] = 'часов';
$txt['minutes'] = 'минут';
$txt['seconds'] = 'секунд';

// Used upper case in Paid subscriptions management
$txt['hour'] = 'Час';
$txt['days_word'] = 'дней';

$txt['search_for'] = 'Искать';
$txt['search_match'] = 'Соответствует';

$txt['forum_in_maintenance'] = 'Форум находится в режиме технического обслуживания. Только администраторы могут войти на него.';
$txt['maintenance_page'] = 'Вы можете отключить режим обслуживания в разделе <a href="%1$s">Настройки сервера</a>.';

$txt['read_one_time'] = 'Прочитано 1 раз';
$txt['read_many_times'] = 'Прочитано %1$d раз(а)';

$txt['forum_stats'] = 'Статистика форума';
$txt['latest_member'] = 'Последний пользователь';
$txt['total_cats'] = 'Всего категорий';
$txt['latest_post'] = 'Последнее сообщение';

$txt['total_boards'] = 'Всего разделов';

$txt['print_page'] = 'Печать страницы';
$txt['print_page_text'] = 'Только текст';
$txt['print_page_images'] = 'Текст с изображениями';

$txt['valid_email'] = 'Адрес электронной почты должен быть существующим.';

$txt['geek'] = 'Я форумный маньяк!!';
$txt['info_center_title'] = '%1$s - Информационный центр';

$txt['watch'] = 'Следить';
$txt['unwatch'] = 'Перестать следить';

$txt['check_all'] = 'Выделить все';

// Use numeric entities in the below string.
$txt['database_error'] = 'Ошибка базы данных';
$txt['try_again'] = 'Пожалуйста, повторите ещё раз. Если ошибка продолжает повторяться, обратитесь к администратору.';
$txt['file'] = 'Файл';
$txt['line'] = 'Строка';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF обнаружил и пытается автоматически исправить ошибку в базе данных. Если проблема осталась или продолжают приходить уведомления, пожалуйста, обратитесь к хостеру.';
$txt['database_error_versions'] = '<strong>Примечание:</strong> возможно, базе данных <em>требуется </em>обновление. Версия файлов форума %1$s, тогда как версия используемой базы данных %2$s. Для устранения ошибки, пожалуйста, обновите форум.';
$txt['template_parse_error'] = 'Ошибка шаблона!';
$txt['template_parse_error_message'] = 'Возможно, что-то случилось с системой шаблонов на форуме. Это временная проблема, возвращайтесь чуть позже и попробуйте снова. Если увидите это сообщение снова, обратитесь к администратору.<br><br>Кроме того, можете попробовать <a href="javascript:location.reload();">обновить страницу</a>.';
// argument(s): filename, $boardurl, $scripturl
$txt['template_parse_error_details'] = 'Проблема с загрузкой <pre><strong>%1$s</strong></pre> шаблона или языкового файла. Пожалуйста, проверьте синтаксис и попробуйте снова - помните, одинарные кавычки (<pre>\'</pre>) должны экранироваться слэшем (<pre>\\</pre>). Чтобы увидеть более подробную информацию об ошибке PHP, попытайтесь <a href="%2$s%1$s">обратиться к файлу напрямую</a>.<br><br>Кроме того, попробуйте <a href="javascript:location.reload();">обновить страницу</a> или <a href="%3$s?theme=1">переключиться на стандартную тему оформления</a>.';
$txt['template_parse_errmsg'] = 'К сожалению, сейчас отсутствует информация о том, в чем именно проблема.';

$txt['today'] = '<strong>Сегодня</strong> в ';
$txt['yesterday'] = '<strong>Вчера</strong> в ';
$txt['new_poll'] = 'Новое голосование';
$txt['poll_question'] = 'Вопрос';
$txt['poll_vote'] = 'Голосовать';
$txt['poll_total_voters'] = 'Проголосовало пользователей';
$txt['poll_results'] = 'Посмотреть результаты';
$txt['poll_lock'] = 'Заблокировать голосование';
$txt['poll_unlock'] = 'Разблокировать голосование';
$txt['poll_edit'] = 'Редактировать голосование';
$txt['poll'] = 'Голосование';
$txt['one_hour'] = '1 час';
$txt['one_day'] = '1 день';
$txt['one_week'] = '1 неделя';
$txt['two_weeks'] = '2 недели';
$txt['one_month'] = '1 месяц';
$txt['two_months'] = '2 месяца';
$txt['forever'] = 'Навсегда';
$txt['moved'] = 'Перенесено';
$txt['move_why'] = 'Кратко опишите причину, по которой эти темы объединены.';
$txt['board'] = 'Раздел';
$txt['in'] = 'в';
$txt['sticky_topic'] = 'Закрепленная тема';

$txt['delete'] = 'Удалить';
$txt['no_change'] = 'Без изменений';

$txt['your_pms'] = 'Ваши личные сообщения';

$txt['kilobyte'] = 'КБ';
$txt['megabyte'] = 'МБ';

$txt['more_stats'] = '[Подробная статистика]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Код';
$txt['code_select'] = 'Выделить';
$txt['code_expand'] = 'Развернуть';
$txt['code_shrink'] = 'Свернуть';
$txt['quote_from'] = 'Цитата';
$txt['quote'] = 'Цитировать';
$txt['quote_action'] = 'Цитировать';
$txt['quote_selected_action'] = 'Цитировать выделенное';
$txt['fulledit'] = 'Полное&nbsp;редактирование';
$txt['edit'] = 'Правка';
$txt['quick_edit'] = 'Редактировать';
$txt['post_options'] = 'Ещё...';

$txt['merge_to_topic_id'] = 'ID темы, с которой объединить';
$txt['split'] = 'Разделить тему';
$txt['merge'] = 'Объединить темы';
$txt['target_id'] = 'Выберите тему для объединения по её ID';
$txt['target_below'] = 'Выберите тему для объединения из списка';
$txt['subject_new_topic'] = 'Название для новой темы';
$txt['split_this_post'] = 'Отделить только это сообщение.';
$txt['split_after_and_this_post'] = 'Отделить это и последующие сообщения.';
$txt['select_split_posts'] = 'Отделить выделенные сообщения.';
$txt['new_topic'] = 'Новая тема';
$txt['split_successful'] = 'Тема успешно разделена на две.';
$txt['origin_topic'] = 'Исходная тема';
$txt['please_select_split'] = 'Пожалуйста, выберите сообщения, которые необходимо отделить.';
$txt['merge_successful'] = 'Темы успешно объединены.';
$txt['new_merged_topic'] = 'Новая объединенная тема';
$txt['topic_to_merge'] = 'Тема для объединения';
$txt['target_board'] = 'Раздел для новой темы';
$txt['target_topic'] = 'Объединить с темой';
$txt['merge_desc'] = 'Эта функция объединяет две темы в одну. Сообщения будут упорядочены по дате. Самое раннее сообщение будет первым в объединённой теме.';

$txt['set_sticky'] = 'Закрепить тему';
$txt['set_nonsticky'] = 'Открепить тему';
$txt['set_lock'] = 'Заблокировать тему';
$txt['set_unlock'] = 'Разблокировать тему';

$txt['search_advanced'] = 'Расширенный поиск';

$txt['security_risk'] = 'РИСК БЕЗОПАСНОСТИ:';
$txt['not_removed'] = 'ВЫ НЕ УДАЛИЛИ ';
$txt['not_removed_extra'] = '%1$s это резервная копия для %2$s, которая была создана не форумом. Она доступна напрямую и может использоваться для получения несанкционированного доступа к вашему форуму. Следует удалить её немедленно.';
$txt['generic_warning'] = 'Предупреждение';
$txt['agreement_missing'] = 'Вы требуете от новых пользователей принятия регистрационного соглашения, но файл с текстом соглашения (agreement.txt) не существует.';
$txt['policy_agreement_missing'] = 'Вы требуете от новых пользователей принятия политики конфиденциальности, но текст этой политики не заполнен.';
$txt['auth_secret_missing'] = 'Невозможно установить секрет аутентификации в Settings.php. Это ослабляет вашу безопасность и подвергает вашу систему риску атак. Проверьте права доступа к Settings.php, чтобы убедиться, что SMF может записывать данные в файл.';

$txt['cache_writable'] = 'Директория для кэширования недоступна для записи — это значительно снизит производительность работы форума.';

$txt['page_created_full'] = 'Страница создана за %1$.3f сек. Запросов: %2$d.';

$txt['report_to_mod_func'] = 'Используйте эту функцию для уведомления модераторов и администраторов об оскорбительных или неуместных сообщениях.';
$txt['report_profile_func'] = 'Используйте эту функцию для уведомления администраторов о недопустимом содержимом в профиле, таком как спам или недопустимые изображения.';

$txt['online'] = 'Онлайн';
$txt['member_is_online'] = '%1$s в сети';
$txt['offline'] = 'Офлайн';
$txt['member_is_offline'] = '%1$s вне сети';
$txt['pm_online'] = 'Личное сообщение (Онлайн)';
$txt['pm_offline'] = 'Личное сообщение (Офлайн)';
$txt['status'] = 'Статус';

$txt['go_up'] = 'Вверх';
$txt['go_down'] = 'Вниз';

// argument(s): SMF_FULL_VERSION, SMF_SOFTWARE_YEAR, $scripturl
$forum_copyright = '<a href="%3$s?action=credits" title="Лицензия" target="_blank" rel="noopener">%1$s &copy; %2$s</a>, <a href="https://www.simplemachines.org" title="Simple Machines" target="_blank" rel="noopener">Simple Machines</a>';

$txt['birthdays'] = 'Дни рождения:';
$txt['events'] = 'События:';
$txt['birthdays_upcoming'] = 'Ближайшие дни рождения:';
$txt['events_upcoming'] = 'Ближайшие события:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = 'Праздники:';
$txt['calendar_month'] = 'Месяц';
$txt['calendar_year'] = 'Год';
$txt['calendar_day'] = 'День';
$txt['calendar_event_title'] = 'Название события';
$txt['calendar_event_options'] = 'Настройки события';
$txt['calendar_post_in'] = 'Отправить в';
$txt['calendar_edit'] = 'Редактировать событие';
$txt['calendar_export'] = 'Экспорт события';
$txt['calendar_view_week'] = 'Просмотр недели';
$txt['event_delete_confirm'] = 'Удалить это событие?';
$txt['event_delete'] = 'Удалить событие';
$txt['calendar_post_event'] = 'Добавить событие';
$txt['calendar'] = 'Календарь';
$txt['calendar_link'] = 'Ссылка на календарь';
$txt['calendar_upcoming'] = 'Календарь предстоящих событий';
$txt['calendar_today'] = 'Текущие события';
$txt['calendar_week'] = 'Неделя';
$txt['calendar_week_title'] = 'Неделя %1$d из %2$d';
// %1$s is the month, %2$s is the day, %3$s is the year. Change to suit your language.
$txt['calendar_week_beginning'] = 'Неделя начинается с %2$s %1$s, %3$s';
$txt['calendar_numb_days'] = 'Количество дней:';
$txt['calendar_how_edit'] = 'как отредактировать это событие?';
$txt['calendar_link_event'] = 'Ссылка на событие';
$txt['calendar_confirm_delete'] = 'Хотите удалить это событие?';
$txt['calendar_linked_events'] = 'Ссылки на связанные события';
$txt['calendar_click_all'] = 'нажмите сюда для просмотра %1$s';
$txt['calendar_allday'] = 'Весь день';
$txt['calendar_timezone'] = 'Часовой пояс';
$txt['calendar_list'] = 'Список';
$txt['calendar_empty'] = 'Нет никаких событий для отображения.';

$txt['movetopic_change_subject'] = 'Изменить название темы';
$txt['movetopic_new_subject'] = 'Новая тема';
$txt['movetopic_change_all_subjects'] = 'Изменить тему каждого сообщения';
$txt['move_topic_unapproved_js'] = 'Предупреждение! Данная тема не одобрена.\\n\\nНе рекомендуется создавать тему перенаправления, если вы сразу не одобрите тему.';
$txt['movetopic_auto_board'] = '[РАЗДЕЛ ФОРУМА]';
$txt['movetopic_auto_topic'] = '[ССЫЛКА НА ТЕМУ]';
// argument(s): $txt['movetopic_auto_board'], $txt['movetopic_auto_topic']
$txt['movetopic_default'] = 'Тема перенесена в %1$s.

%2$s';
$txt['movetopic_redirect'] = 'Перенаправлять в перемещенную тему';

$txt['post_redirection'] = 'Создать тему перенаправления';
$txt['redirect_topic_expires'] = 'Автоматически удалить тему перенаправления';
$txt['mergetopic_redirect'] = 'Перенаправление в объединенную тему';
$txt['merge_topic_unapproved_js'] = 'Внимание! Тема ещё не была одобрена.\\n\\nНе рекомендуется создавать тему перенаправления, если только вы не собираетесь одобрить сообщение сразу после объединения.';

$txt['theme_template_error'] = 'Невозможно загрузить \'%1$s\' шаблон.';
$txt['theme_language_error'] = 'Невозможно загрузить \'%1$s\' языковой файл.';

$txt['sub_boards'] = 'Подразделы';
$txt['restricted_board'] = 'Раздел с ограниченным доступом';

$txt['smtp_no_connect'] = 'Ошибка подключения к SMTP серверу';
$txt['smtp_port_ssl'] = 'Неверно указан SMTP порт; Для SSL серверов он должен быть 465. Перед именем хоста иногда требуется указать префикс ssl://.';
$txt['smtp_bad_response'] = 'Не удалось получить ответ с почтового сервера';
$txt['smtp_error'] = 'Проблема с отправкой почты. Ошибка: ';
$txt['mail_send_unable'] = 'Невозможно отправить почту по указанному адресу «%1$s»';

$txt['mlist_search'] = 'Поиск пользователей';
$txt['mlist_search_again'] = 'Искать ещё раз';
$txt['mlist_search_filter'] = 'Параметры';
$txt['mlist_search_email'] = 'Имейл';
$txt['mlist_search_messenger'] = 'Ник в мессенджерах';
$txt['mlist_search_group'] = 'Группа';
$txt['mlist_search_name'] = 'Имена';
$txt['mlist_search_website'] = 'Сайт';
$txt['mlist_search_results'] = 'Искать';
$txt['mlist_search_by'] = 'Искать %1$s';
$txt['mlist_menu_view'] = 'Общий список';

$txt['attach_downloaded'] = 'скачиваний: %1$d';
$txt['attach_viewed'] = 'просмотров: %1$d';

$txt['settings'] = 'Настройки';
$txt['never'] = 'Никогда';
$txt['more'] = 'ещё';
$txt['etc'] = 'и&nbsp;т.&nbsp;д.';

$txt['hostname'] = 'Хост';
$txt['you_are_post_banned'] = 'Извините, %1$s, но вы забанены и поэтому не можете общаться на этом форуме.';
$txt['ban_reason'] = 'Причина';
$txt['select_item_check'] = 'Пожалуйста, выберите хотя бы один пункт в списке';

$txt['tables_optimized'] = 'Таблицы базы данных оптимизированы';

$txt['add_poll'] = 'Добавить голосование';
$txt['poll_options_limit'] = 'Доступно вариантов ответа: %1$s.';
$txt['poll_remove'] = 'Удалить голосование';
$txt['poll_remove_warn'] = 'Хотите удалить голосование?';
$txt['poll_results_expire'] = 'Результаты будут отображены после окончания голосования';
$txt['poll_expires_on'] = 'Голосование заканчивается';
$txt['poll_expired_on'] = 'Голосование закончилось';
$txt['poll_change_vote'] = 'Удалить голос';
$txt['poll_return_vote'] = 'Назад';
$txt['poll_cannot_see'] = 'В данный момент просмотреть результаты голосования невозможно.';

$txt['quick_mod_approve'] = 'Одобрить выделенные';
$txt['quick_mod_remove'] = 'Удалить выделенные';
$txt['quick_mod_lock'] = 'Заблокировать/Разблокировать выделенные';
$txt['quick_mod_sticky'] = 'Закрепить/Открепить выделенные';
$txt['quick_mod_move'] = 'Переместить выделенные в';
$txt['quick_mod_merge'] = 'Объединить выделенные';
$txt['quick_mod_markread'] = 'Пометить выделенные как прочитанные';
$txt['quick_mod_markunread'] = 'Пометить выделенные как непрочитанные';
$txt['quick_mod_selected'] = 'Сделать с выделенными';
$txt['quick_mod_go'] = '&crarr;';
$txt['quickmod_confirm'] = 'Уверены?';

$txt['spell_check'] = 'Проверка орфографии';

$txt['quick_reply'] = 'Быстрый ответ';
$txt['quick_reply_warning'] = 'Внимание: тема заблокирована! Ответить в ней может только модератор или администратор форума.';
$txt['quick_reply_verification'] = 'После отправки сообщения произойдёт перенаправление на страницу полного ответа, чтобы подтвердить его %1$s.';
$txt['quick_reply_verification_guests'] = '(требуется для всех гостей)';
$txt['quick_reply_verification_posts'] = '(требуется для всех пользователей, у которых количество сообщений < %1$d)';
$txt['wait_for_approval'] = 'Обратите внимание: данное сообщение не будет отображаться, пока модератор не одобрит его.';

$txt['notification_enable_board'] = 'Хотите получать уведомления при создании новых тем в данном разделе форума?';
$txt['notification_disable_board'] = 'Отключить уведомления?';
$txt['notification_enable_topic'] = 'Хотите получать уведомления при появлении новых ответов в этой теме?';
$txt['notification_disable_topic'] = 'Отключить уведомления?';

// Mentions
$txt['mentions'] = 'Упоминания';

// Likes
$txt['likes'] = 'Лайки';
$txt['like'] = 'Понравилось';
$txt['unlike'] = 'Разонравилось';
$txt['like_success'] = 'Ваш контент был отмечен понравившимся.';
$txt['like_delete'] = 'Ваш контент был успешно удален.';
$txt['like_insert'] = 'Ваш контент был успешно добавлен.';
$txt['like_error'] = 'Произошла ошибка.';
$txt['like_disable'] = 'Лайки отключены.';
$txt['not_valid_like_type'] = 'Недопустимый тип контента для лайка/дизлайка.';
// Translators, if you need to make more strings to suit your language, e.g. $txt['likes_2'] = 'Two people like this', please do so.
$txt['likes_1'] = '<a href="%1$s">%2$s пользователю</a> это нравится.';
$txt['likes_n'] = '<a href="%1$s">%2$s пользователям</a> это нравится.';
$txt['you_likes_0'] = 'Вам это нравится.';
$txt['you_likes_1'] = 'Вам и ещё <a href="%1$s">%2$s пользователю</a> это нравится.';
$txt['you_likes_n'] = 'Вам и ещё <a href="%1$s">%2$s пользователям</a> это нравится.';

$txt['report_to_mod'] = 'Пожаловаться';
$txt['report_profile'] = 'Пожаловаться на профиль %1$s';

$txt['unread_topics_visit'] = 'Непрочитанные темы с последнего посещения';
// argument(s): scripturl
$txt['unread_topics_visit_none'] = 'Нет непрочитанных тем с момента вашего последнего посещения. <a href="%1$s?action=unread;all">Просмотреть все непрочитанные темы</a>.';
$txt['updated_topics_visit_none'] = 'Нет обновленных тем с момента вашего последнего посещения.';
$txt['unread_topics_all'] = 'Все непрочитанные темы';
$txt['unread_replies'] = 'Темы с непрочитанными ответами';

$txt['who_title'] = 'Кто онлайн';
$txt['who_and'] = ' и ';
$txt['who_viewing_topic'] = ' просматривают эту тему.';
$txt['who_viewing_board'] = ' просматривают этот раздел.';
$txt['who_member'] = 'Пользователь';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Работает на PHP';
$txt['powered_by_mysql'] = 'Работает на MySQL';
$txt['valid_css'] = 'Валидный CSS!';

// Footer strings, no longer used
$txt['rss'] = 'RSS';
$txt['atom'] = 'Atom';
$txt['html'] = 'HTML';

$txt['guest'] = 'гость';
$txt['guests'] = 'гостей';
$txt['user'] = 'пользователь';
$txt['users'] = 'пользователей';
$txt['hidden'] = 'скрытый';

// Plural form of hidden for languages other than English
$txt['hidden_s'] = 'скрытых';
$txt['buddy'] = 'друг';
$txt['buddies'] = 'друзей';
$txt['most_online_ever'] = 'Максимум онлайн за всё время';
$txt['most_online_today'] = 'Максимум онлайн сегодня';

$txt['merge_select_target_board'] = 'Выбрать раздел для объединённой темы';
$txt['merge_select_poll'] = 'Выбрать голосование для объединённой темы';
$txt['merge_topic_list'] = 'Выбрать темы для объединения';
$txt['merge_select_subject'] = 'Название объединённой темы';
$txt['merge_custom_subject'] = 'Выбрать название';
$txt['merge_include_notifications'] = 'Включить уведомления?';
$txt['merge_check'] = 'Объединить?';
$txt['merge_no_poll'] = 'Нет голосования';
$txt['merge_why'] = 'Кратко опишите причину, по которой эти темы объединены.';
$txt['merged_subject'] = '[ОБЪЕДИНЕНА] %1$s';
// argument(s): $txt['movetopic_auto_topic']
$txt['mergetopic_default'] = 'Тема была объединена в %2$s.';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Иконка';
$txt['message_icon'] = 'Иконка сообщения';

$txt['smileys_current'] = 'Текущий набор смайликов';
$txt['smileys_none'] = 'Нет смайликов';
$txt['smileys_forum_board_default'] = 'По умолчанию (из настроек форума)';

$txt['search_results'] = 'Результаты поиска';
$txt['search_no_results'] = 'Извините, ничего не найдено';

$txt['total_time_logged_days'] = ' дн., ';
$txt['total_time_logged_hours'] = ' ч. и ';
$txt['total_time_logged_minutes'] = ' мин.';
$txt['total_time_logged_d'] = 'д ';
$txt['total_time_logged_h'] = 'ч ';
$txt['total_time_logged_m'] = 'м';

$txt['approve_members_waiting'] = 'Ожидающие подтверждения пользователи';

$txt['activate_code'] = 'Ваш код активации';

$txt['find_members'] = 'Поиск пользователей';
$txt['find_username'] = 'Отображаемое имя, имя пользователя или электронный адрес';
$txt['find_buddies'] = 'Отображать только друзей?';
$txt['find_wildcards'] = 'Доступные символы для поиска по маске: *, ?';
$txt['find_no_results'] = 'Ничего не найдено';
$txt['find_results'] = 'Результаты';
$txt['find_close'] = 'Закрыть';

$txt['unread_since_visit'] = 'Новые сообщения с последнего визита.';
$txt['show_unread_replies'] = 'Новые ответы на ваши сообщения.';

$txt['change_color'] = 'Изменить цвет';

$txt['quickmod_delete_selected'] = 'Удалить выбранные';
$txt['quickmod_split_selected'] = 'Отделить выбранные';

$txt['show_personal_messages_heading'] = 'Новые сообщения';
$txt['show_personal_messages'] = 'У вас есть <strong>%1$s</strong> непрочитанные личные сообщения.<br><br><a href="%2$s">Перейти к ним</a>';

$txt['help_popup'] = 'Подсказка';

$txt['previous_next_back'] = '&laquo; назад';
$txt['previous_next_forward'] = 'далее &raquo;';

$txt['mark_unread'] = 'Отметить непрочитанным';

$txt['ssi_not_direct'] = 'Пожалуйста, не обращайтесь напрямую к файлу SSI.php через URL-адрес. Возможно, вы захотите использовать путь (%1$s) или добавить ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php не может загрузить сессию! Возможно, эта проблема связана с выходом или другими функциями. Пожалуйста, убедитесь что файл SSI.php подключается в самом начале перед всеми другими скриптами!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Предварительный просмотр';
$txt['preview_fetch'] = 'Ожидание предварительного просмотра...';
$txt['preview_new'] = 'Новое сообщение';
$txt['pm_error_while_submitting'] = 'Следующие ошибки возникли при попытке отправки данного личного сообщения:';
$txt['error_while_submitting'] = 'Следующие ошибки возникли при попытке отправки сообщения:';
$txt['error_old_topic'] = 'Предупреждение: в этой теме не было сообщений более %1$d дней.<br> Возможно, будет лучше создать новую тему.';

$txt['split_selected_posts'] = 'Выбранные сообщения';
$txt['split_selected_posts_desc'] = 'Ниже находятся сообщения, формирующие тему после разделения.';
$txt['split_reset_selection'] = 'снять выделение';

$txt['modify_cancel'] = 'Отменить';
$txt['modify_cancel_all'] = 'Отменить все';
$txt['mark_read_short'] = 'Пометить прочитанными';

$txt['alerts'] = 'Оповещения';

$txt['pm_short'] = 'Личные сообщения';
$txt['pm_menu_read'] = 'Входящие';
$txt['pm_menu_send'] = 'Отправить';

$txt['unapproved_posts'] = 'Неодобренные сообщения (Тем: %1$d, Сообщений: %2$d)';

$txt['ajax_in_progress'] = 'Загружается...';

$txt['mod_reports_waiting'] = 'Жалобы на сообщения';

$txt['view_unread_category'] = 'Непрочитанные сообщения';
$txt['new_posts_in_category'] = 'Нажмите для просмотра новых сообщений в категории %1$s';
$txt['verification'] = 'Визуальная проверка';
$txt['visual_verification_hidden'] = 'Оставьте это поле пустым';
$txt['visual_verification_description'] = 'Наберите символы, которые изображены на картинке';
$txt['visual_verification_sound'] = 'Прослушать';
$txt['visual_verification_request_new'] = 'Запросить другое изображение';

// Sub menu labels
$txt['summary'] = 'Основная информация';
$txt['account'] = 'Аккаунт';
$txt['theme'] = 'Оформление';
$txt['forumprofile'] = 'Профиль';
$txt['activate_changed_email_title'] = 'Электронный адрес изменен';
$txt['activate_changed_email_desc'] = 'Вы изменили свой электронный адрес. Для его активации перейдите по ссылке в полученном письме.';
$txt['modSettings_title'] = 'Свойства и параметры';
$txt['package'] = 'Менеджер пакетов';
$txt['errorlog'] = 'Журнал ошибок';
$txt['edit_permissions'] = 'Права доступа';
$txt['mc_unapproved_attachments'] = 'Неодобренные вложения';
$txt['mc_unapproved_poststopics'] = 'Неодобренные сообщения и темы';
$txt['mc_reported_posts'] = 'Жалобы на сообщения';
$txt['mc_reported_members'] = 'Жалобы на пользователей';
$txt['modlog_view'] = 'Журнал модерации';
$txt['calendar_menu'] = 'Просмотр календаря';

// @todo Send email strings - should move?
$txt['send_email'] = 'Отправить электронное сообщение';

$txt['ignoring_user'] = 'Вы игнорируете этого пользователя.';
$txt['show_ignore_user_post'] = 'Показать сообщение.';

$txt['spider'] = 'Бот';
$txt['spiders'] = 'Ботов';

$txt['downloads'] = 'Скачано';
$txt['filesize'] = 'Размер файла';

// Restore topic
$txt['restore_topic'] = 'Восстановить тему';
$txt['restore_message'] = 'Восстановить сообщение';
$txt['quick_mod_restore'] = 'Восстановить выделенные сообщения';

// Editor prompt.
$txt['prompt_text_email'] = 'Введите электронный адрес.';
$txt['prompt_text_ftp'] = 'Введите FTP-адрес';
$txt['prompt_text_url'] = 'Введите URL-адрес ссылки.';
$txt['prompt_text_img'] = 'Введите URL-адрес картинки.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Удалить';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Шаблонов: ';
$txt['debug_subtemplates'] = 'Дополнительных шаблонов: ';
$txt['debug_language_files'] = 'Языковых файлов: ';
$txt['debug_stylesheets'] = 'Файлов стилей: ';
$txt['debug_files_included'] = 'Подключено файлов: ';
$txt['debug_memory_use'] = 'Использовано памяти: ';
$txt['debug_kb'] = ' КБ.';
$txt['debug_show'] = 'показать';
$txt['debug_cache_hits'] = 'Попаданий в кэш: ';
$txt['debug_cache_misses'] = 'Промахов кэша: ';
$txt['debug_cache_seconds_bytes'] = '%1$s сек. - %2$s байт';
$txt['debug_cache_seconds_bytes_total'] = '%1$s сек. для %2$s байт';
$txt['debug_queries_used'] = 'Запросов в БД: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Запросов в БД: %1$d, %2$d предупреждений.';
$txt['debug_query_in_line'] = 'файл <em>%1$s</em>, строка <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'длительность %1$s сек.';
$txt['debug_query_which_took_at'] = 'что заняло %1$s сек. и запросов: %2$s.';
$txt['debug_show_queries'] = '[Показать запросы]';
$txt['debug_hide_queries'] = '[Скрыть запросы]';
$txt['debug_tokens'] = 'Токены: ';
$txt['debug_browser'] = 'ID браузера: ';
$txt['debug_hooks'] = 'Вызвано хуков: ';
$txt['debug_instances'] = 'Создано экземпляров:';
$txt['are_sure_mark_read'] = 'Хотите отметить сообщения как прочитанные?';

// Inline attachments messages.
$txt['attachments_not_enable'] = 'Вложения отключены';
$txt['attachments_no_data_loaded'] = 'Неверный ID вложения.';
$txt['attachments_not_allowed_to_see'] = 'Вам недоступны вложения в этом разделе.';
$txt['attachments_no_msg_associated'] = 'Нет сообщений, связанных с этим вложением.';
$txt['attachments_unapproved'] = 'Вложение ожидает одобрения.';

// Accessibility
$txt['hide_category'] = 'Свернуть категорию';
$txt['show_category'] = 'Развернуть категорию';
$txt['hide_infocenter'] = 'Свернуть информационный центр';
$txt['show_infocenter'] = 'Развернуть информационный центр';

// Notification post control
$txt['notify_topic_0'] = 'Не следить';
$txt['notify_topic_1'] = 'Без уведомлений и оповещений';
$txt['notify_topic_2'] = 'Получать оповещения';
$txt['notify_topic_3'] = 'Получать уведомления и оповещения';
$txt['notify_topic_0_desc'] = 'Вы не будете получать ни уведомлений по электронной почте, ни оповещений для этой темы; также эта тема не будет отображаться в непрочитанных ответах и новых темах. За исключением случаев упоминания вас другими пользователями через @ник.';
$txt['notify_topic_1_desc'] = 'Вы не будете получать ни уведомлений по электронной почте, ни оповещений для этой темы, за исключением случаев упоминания вас другими пользователями через @ник.';
$txt['notify_topic_2_desc'] = 'Вы будете получать оповещения для этой темы.';
$txt['notify_topic_3_desc'] = 'Вы будете получать уведомления по электронной почте и оповещения для этой темы.';
$txt['notify_board_1'] = 'Без уведомлений и оповещений';
$txt['notify_board_2'] = 'Получать оповещения';
$txt['notify_board_3'] = 'Получать уведомления по электронной почте и оповещения';
$txt['notify_board_1_desc'] = 'Вы не будете получать ни уведомлений по электронной почте, ни оповещений для этого раздела.';
$txt['notify_board_2_desc'] = 'Вы будете получать оповещения для этого раздела.';
$txt['notify_board_3_desc'] = 'Вы будете получать уведомления по электронной почте и оповещения для этого раздела.';

$txt['notify_board_prompt'] = 'Хотите получать уведомления по электронной почте, когда кто-то публикует новую тему в этом разделе?';
$txt['notify_board_subscribed'] = 'Пользователь %1$s подписан(а) на уведомления о новых темах в этом разделе.';
$txt['notify_board_unsubscribed'] = 'Пользователь %1$s отписан(а) от уведомлений о новых темах в этом разделе.';

$txt['notify_topic_prompt'] = 'Хотите получать уведомления по электронной почте, если кто-то отвечает в этой теме?';
$txt['notify_topic_subscribed'] = 'Пользователь %1$s подписан(а) на уведомления о новых ответах в этой теме.';
$txt['notify_topic_unsubscribed'] = 'Пользователь %1$s отписан(а) от уведомлений о новых ответах в этой теме.';

$txt['notify_announcements_prompt'] = 'Хотите получать рассылки, объявления и важные оповещения форума по электронной почте?';
$txt['notify_announcements_subscribed'] = 'Пользователь %1$s подписан(а) на рассылки, объявления и важные оповещения форума.';
$txt['notify_announcements_unsubscribed'] = 'Пользователь %1$s отписан(а) от рассылок, объявлений и важных оповещений форума.';

$txt['unsubscribe_announcements_plain'] = 'Чтобы отписаться от рассылки форума, объявлений и важных оповещений, перейдите по этой ссылке: %1$s';
$txt['unsubscribe_announcements_html'] = '<span style="font-size:small"><a href="%1$s">Отписаться</a> от рассылки форума, объявлений и важных оповещений.</span>';

// Mobile Actions
$txt['mobile_action'] = 'Действия пользователя';
$txt['mobile_moderation'] = 'Модерация';
$txt['mobile_user_menu'] = 'Адаптивная навигация';

// Formats for lists in a sentence (e.g. "Alice, Bob, and Charlie")
// Examples:
// 	$txt['sentence_list_format'][2] specifies a format for a list with two items
// 	$txt['sentence_list_format']['n'] specifies the default format
// Notes on placeholders:
// 	{1} = first item in the list, {2} = second item, etc.
// 	{-1} = last item in the list, {-2} = second last item, etc.
// 	{series} = concatenated string of the rest of the items in the list
$txt['sentence_list_format'][1] = '{1}';
$txt['sentence_list_format'][2] = '{1} и {-1}';
$txt['sentence_list_format'][3] = '{series} и {-1}';
$txt['sentence_list_format'][4] = '{series} и {-1}';
$txt['sentence_list_format'][5] = '{series} и {-1}';
$txt['sentence_list_format']['n'] = '{series} и {-1}';
// Separators used to build lists in a sentence
$txt['sentence_list_separator'] = ', ';
$txt['sentence_list_separator_alt'] = '; ';

?>