<?php
// Version: 2.1 RC3; ManageMaintenance

$txt['repair_zero_ids'] = 'Найти темы и/или сообщения, ID которых равен 0.';
$txt['repair_missing_topics'] = 'Сообщение #%1$d в несуществующей теме #%2$d.';
$txt['repair_missing_messages'] = 'Тема #%1$d не содержит фактических сообщений.';
$txt['repair_topic_wrong_first_id'] = 'Тема #%1$d содержит первое сообщение с некорректным ID %2$d.';
$txt['repair_topic_wrong_last_id'] = 'Тема #%1$d содержит последнее сообщение с некорректным ID %2$d.';
$txt['repair_topic_wrong_replies'] = 'Тема #%1$d содержит неправильное количество ответов, %2$d.';
$txt['repair_topic_wrong_unapproved_number'] = 'Тема #%1$d содержит неправильное количество неодобренных сообщений, %2$d.';
$txt['repair_topic_wrong_approval'] = 'Тема #%1$d содержит неправильное значение одобрения.';
$txt['repair_missing_boards'] = 'Тема #%1$d на форуме #%2$d не существует.';
$txt['repair_missing_categories'] = 'Раздел #%1$d в категории #%2$d не существует.';
$txt['repair_missing_posters'] = 'Сообщение #%1$d, отправленное пользователем #%2$d, не существует.';
$txt['repair_missing_parents'] = 'Раздел #%1$d является подразделом #%2$d, которого не существует.';
$txt['repair_missing_polls'] = 'В теме #%1$d голосования не найдено #%2$d.';
$txt['repair_polls_missing_topics'] = 'Голосование #%1$d связано с несуществующей темой #%2$d.';
$txt['repair_poll_options_missing_poll'] = 'Голосование #%1$d имеет %2$d вариантов, но сам опрос отсутствует.';
$txt['repair_missing_calendar_topics'] = 'Событие #%1$d связано с несуществующей темой #%2$d.';
$txt['repair_missing_log_topics'] = 'Тема #%1$d, отмеченная как прочитанная одним или более пользователем, отсутствует.';
$txt['repair_missing_log_topics_members'] = 'Пользователь #%1$d отметил одну или более тему как прочитанную, но она отсутствует.';
$txt['repair_missing_log_boards'] = 'Раздел #%1$d, отмеченный прочитанным одним или более пользователей, не существует.';
$txt['repair_missing_log_boards_members'] = 'Пользователь #%1$d, отметивший прочитанным один или более разделов, не существует.';
$txt['repair_missing_log_mark_read'] = 'Раздел #%1$d, отмеченный прочитанным одним или более пользователями, не существует.';
$txt['repair_missing_log_mark_read_members'] = 'Пользователь #%1$d, отметивший один или более разделов прочитанными, не существует.';
$txt['repair_missing_pms'] = 'Личное сообщение #%1$d, отосланное одному или более пользователям, не существует.';
$txt['repair_missing_recipients'] = 'Пользователь #%1$d, получивший одно или более личных сообщений, не существует.';
$txt['repair_missing_senders'] = 'Личное сообщение #%1$d, отосланное пользователем #%2$d, не существует.';
$txt['repair_missing_notify_members'] = 'Объекты уведомления, отмеченные пользователем #%2$d, не существуют.';
$txt['repair_missing_cached_subject'] = 'Название темы #%1$d не было сохранено.';
$txt['repair_missing_topic_for_cache'] = 'Словоформы «%1$d» ссылаются на несуществующую тему.';
$txt['repair_missing_log_poll_member'] = 'Голосование #%1$d было открыто пользователем #%2$d, который сейчас не существует.';
$txt['repair_missing_log_poll_vote'] = 'Пользователем был отдан голос #%1$d в несуществующем голосовании #%2$d.';
$txt['repair_missing_thumbnail_parent'] = 'Существует миниатюра изображения с именем %1$s, но нет самого изображения.';
$txt['repair_report_missing_comments'] = 'Отчёт #%1$d о теме: «%s&» не содержит комментариев.';
$txt['repair_comments_missing_report'] = 'Комментарий к отчёту #%1$d от %s не связан ни с одним отчётом.';
$txt['repair_group_request_missing_member'] = 'Запрос на членство в группе существует для удаленного пользователя #%1$d.';
$txt['repair_group_request_missing_group'] = 'Запрос на членство в группе существует для удаленной группы #%1$d.';

$txt['repair_currently_checking'] = 'Проверить: «%1$s»';
$txt['repair_currently_fixing'] = 'Исправить: «%1$s»';
$txt['repair_operation_zero_topics'] = 'Тема с id_topic некорректно установлена в 0';
$txt['repair_operation_zero_messages'] = 'Сообщение с id_msg некорректно установлено в 0';
$txt['repair_operation_missing_topics'] = 'Сообщения принадлежат несуществующей теме';
$txt['repair_operation_missing_messages'] = 'Тема без сообщений';
$txt['repair_operation_stats_topics'] = 'Темы с некорректными первым или последним сообщением';
$txt['repair_operation_stats_topics2'] = 'Тема с неверным количеством ответов в ней';
$txt['repair_operation_stats_topics3'] = 'Тема с неверным количеством неодобренных сообщений';
$txt['repair_operation_missing_boards'] = 'Тема принадлежит отсутствующему разделу';
$txt['repair_operation_missing_categories'] = 'Раздел принадлежит несуществующей категории';
$txt['repair_operation_missing_posters'] = 'Неверная ссылка на несуществующего пользователя';
$txt['repair_operation_missing_parents'] = 'Подразделы, не имеющие родительских разделов';
$txt['repair_operation_missing_polls'] = 'Тема привязана к отсутствующему голосованию';
$txt['repair_operation_missing_calendar_topics'] = 'Событие привязано к несуществующей теме';
$txt['repair_operation_missing_log_topics'] = 'Логи привязаны к несуществующему разделу';
$txt['repair_operation_missing_log_topics_members'] = 'Логи привязаны к несуществующему пользователю';
$txt['repair_operation_missing_log_boards'] = 'Логи привязаны к несуществующему разделу';
$txt['repair_operation_missing_log_boards_members'] = 'Логи привязаны к несуществующему пользователю';
$txt['repair_operation_missing_log_mark_read'] = 'Отметка прочтения привязана к несуществующему разделу';
$txt['repair_operation_missing_log_mark_read_members'] = 'Отметка прочтения привязана к несуществующему ';
$txt['repair_operation_missing_pms'] = 'Отправитель сообщения личной почты отсутствует';
$txt['repair_operation_missing_recipients'] = 'Отправитель сообщения личной почты ссылается на несуществующего пользователя';
$txt['repair_operation_missing_senders'] = 'Сообщение принадлежит несуществующему пользователю';
$txt['repair_operation_missing_notify_members'] = 'Лог сообщений ссылается на несуществующего пользователя';
$txt['repair_operation_missing_cached_subject'] = 'Раздел отсутствует в поисковом кэше';
$txt['repair_operation_missing_topic_for_cache'] = 'Кэш поиска ссылается на несуществующий раздел';
$txt['repair_operation_missing_member_vote'] = 'Результаты голосования ссылаются на несуществующего пользователя';
$txt['repair_operation_missing_log_poll_vote'] = 'Результаты голосования ссылаются на несуществующее голосование';
$txt['repair_operation_report_missing_comments'] = 'Отчёт о теме без комментария';
$txt['repair_operation_comments_missing_report'] = 'Комментарий к отчёту не связан ни с одним отчётом';
$txt['repair_operation_group_request_missing_member'] = 'Запрос на участие в группе от несуществующего пользователя';
$txt['repair_operation_group_request_missing_group'] = 'Запрос на участие в несуществующей группе';

$txt['salvaged_category_name'] = 'Восстановленные данные';
$txt['salvaged_category_error'] = 'Невозможно создать категорию «Восстановленные данные»!';
$txt['salvaged_category_description'] = 'Разделы, созданные для восстановленных сообщений';
$txt['salvaged_board_name'] = 'Восстановленные темы';
$txt['salvaged_board_description'] = 'Темы, созданные для сообщений из несуществующих тем';
$txt['salvaged_board_error'] = 'Невозможно создать раздел «Восстановленные темы»!';
$txt['salvaged_poll_topic_name'] = 'Восстановленное голосование';
$txt['salvaged_poll_message_body'] = 'Это голосование не было связано ни с какой темой.';
$txt['salvaged_poll_question'] = 'Это голосование было без текста.';

$txt['database_optimize'] = 'Оптимизировать базу данных';
$txt['database_numb_tables'] = 'Ваша база данных содержит %1$d таблиц.';
$txt['database_optimize_attempt'] = 'Попытка оптимизировать базу данных...';
$txt['database_optimizing'] = 'Оптимизация %1$s... %2$f КБ оптимизировано.';
$txt['database_already_optimized'] = 'Все таблицы были оптимизированы.';
$txt['database_opimize_unneeded'] = 'Нет необходимости оптимизировать таблицы.';
$txt['database_optimized'] = ' таблиц оптимизировано.';
$txt['database_no_id'] = 'такого ID пользователя не существует';

$txt['apply_filter'] = 'Применить фильтр';
$txt['applying_filter'] = 'Применяется фильтр';
$txt['filter_only_member'] = 'Показать сообщения об ошибках этого пользователя';
$txt['filter_only_ip'] = 'Показать сообщения об ошибках с этого IP-адреса';
$txt['filter_only_session'] = 'Показать сообщения об ошибках этой сессии';
$txt['filter_only_url'] = 'Показать сообщения об ошибках с этого URL-адреса';
$txt['filter_only_message'] = 'Показать ошибки только с такими же сообщениями';
$txt['session'] = 'Сессия';
$txt['error'] = 'Ошибка';
$txt['error_url'] = 'URL-адрес страницы, вызвавшей ошибку';
$txt['error_message'] = 'Сообщение об ошибке';
$txt['error_file'] = 'Файл';
$txt['error_line'] = 'Строка';
$txt['clear_filter'] = 'Очистить фильтр';
$txt['remove_selection'] = 'Удалить выделенные';
$txt['remove_filtered_results'] = 'Удалить все результаты фильтрации';
$txt['sure_about_errorlog_remove'] = 'Хотите удалить все сообщения об ошибках?';
$txt['remove_selection_confirm'] = 'Хотите удалить все выбранные записи?';
$txt['remove_filtered_results_confirm'] = 'Хотите удалить все отфильтрованные записи?';
$txt['reverse_direction'] = 'Показать в обратном хронологическом порядке';
$txt['error_type'] = 'Тип ошибки';
$txt['filter_only_type'] = 'Отображать ошибки только этого типа';
$txt['filter_only_file'] = 'Отображать ошибки только этого файла';
$txt['apply_filter_of_type'] = 'Применить фильтр';
$txt['backtrace_title'] = 'Данные трассировки';
// argument(s): error message, function, filename, line nr, filehash, $scripturl
$txt['backtrace_info'] = '<b>#%1$d</b>: %2$s()<br>Вызов из <a href="%6$s?action=admin;area=logs;sa=errorlog;file=%5$s;line=%4$d" onclick="return reqWin(this.href, 600, 480, false);">%3$s в строке %4$d</a>';

$txt['errortype_all'] = 'Все ошибки';
$txt['errortype_general'] = 'Общие';
$txt['errortype_general_desc'] = 'Общие ошибки, которые не были отнесены к другим типам';
$txt['errortype_critical'] = 'Критические';
$txt['errortype_critical_desc'] = 'Критические ошибки. Их желательно исправить как можно быстрее. Наличие таких ошибок может вызвать некорректную работу форума и стать причиной нарушения безопасности работы.';
$txt['errortype_database'] = 'База данных';
$txt['errortype_database_desc'] = 'Ошибки, вызванные некорректными запросами. Должны быть рассмотрены и сообщены команде SMF либо авторам используемых модификаций.';
$txt['errortype_undefined_vars'] = 'Неопределенные';
$txt['errortype_undefined_vars_desc'] = 'Ошибки, вызванные неправильной передачей параметров или их отсутствием.';
$txt['errortype_ban'] = 'Баны';
$txt['errortype_ban_desc'] = 'Журнал попыток доступа забаненных пользователей.';
$txt['errortype_template'] = 'Шаблон';
$txt['errortype_template_desc'] = 'Ошибки, вызванные загрузкой шаблонов.';
$txt['errortype_user'] = 'Пользователь';
$txt['errortype_user_desc'] = 'Ошибки, вызванные пользователем. Включают неправильный ввод пароля, попытки авторизации при наличии бана, а также попытки доступа в различные разделы форума без права доступа.';
$txt['errortype_cron'] = 'Cron';
$txt['errortype_cron_desc'] = 'Ошибки выполнения периодических задач.';
$txt['errortype_paidsubs'] = 'Платные подписки';
$txt['errortype_paidsubs_desc'] = 'Ошибки обработки платных подписок, которые включают уведомления о неудавшихся платежах.';
$txt['errortype_backup'] = 'Резервные копии';
$txt['errortype_backup_desc'] = 'Ошибки создания резервных копий, которые могут помочь понять причины неудавшихся действий.';
$txt['errortype_login'] = 'Попытки авторизации';
$txt['errortype_login_desc'] = 'Ошибки, вызванные неудачными попытками входа в систему или попытками подобрать пароль путем перебора.';

$txt['maintain_recount'] = 'Пересчитать все форумы и статистику';
$txt['maintain_recount_info'] = 'Пересчитывает количество тем и разделов, сообщений в них, количество писем в личных ящиках и т.п.';
$txt['maintain_errors'] = 'Найти и исправить любые ошибки';
$txt['maintain_errors_info'] = 'Если сообщения или темы отсутствуют после краха сервера, эта функция сможет помочь восстановить потерянные данные.';
$txt['maintain_logs'] = 'Удалить незначительные логи';
$txt['maintain_logs_info'] = 'Очищает ненужные логи, которые больше не нужны.';
$txt['maintain_cache'] = 'Очистить файл кэша';
$txt['maintain_cache_info'] = 'Используется для очистки кэша, когда требуется чтобы форум «забыл» старые данные.';
$txt['maintain_optimize'] = 'Оптимизировать все таблицы';
$txt['maintain_optimize_info'] = 'Эта функция используется для увеличения быстродействия форума,&nbsp;т.&nbsp;к.&nbsp;очищает все индексы таблиц и создает их заново на основании данных, находящихся в таблицах БД.';
$txt['maintain_version'] = 'Проверить версии используемых файлов';
$txt['maintain_version_info'] = 'Эта функция дает возможность сравнения текущих версий файлов движка форума с версиями, имеющимися у разработчика движка.';
$txt['maintain_run_now'] = 'Начать выполнение';
$txt['maintain_return'] = 'Вернуться в обслуживание форума';

$txt['maintain_backup'] = 'Резервные копии базы данных';
$txt['maintain_backup_info'] = 'Скачать резервную копию базы данных на случай аварийной ситуации.';
$txt['maintain_backup_struct'] = 'Сохранить структуру таблиц.';
$txt['maintain_backup_data'] = 'Сохранить все данные из таблиц (только самое важное).';
$txt['maintain_backup_gz'] = 'Сжать файл gzip.';
$txt['maintain_backup_save'] = 'Сохранить';

$txt['maintain_old'] = 'Удалить старые сообщения';
$txt['maintain_old_since_days1'] = 'Удалить все темы, в которых не было новых сообщений более  ';
$txt['maintain_old_since_days2'] = ' дней.';
$txt['maintain_old_nothing_else'] = 'Любой тип темы (включая голосования).';
$txt['maintain_old_are_moved'] = 'Уведомления о перемещении и объединении тем.';
$txt['maintain_old_are_locked'] = 'Закрытые темы.';
$txt['maintain_old_are_not_stickied'] = 'Не удалять закрепленные темы.';
$txt['maintain_old_all'] = 'Все разделы (нажмите для выбора определенных)';
$txt['maintain_old_choose'] = 'Выбранные разделы (нажмите для выбора всех)';
$txt['maintain_old_remove'] = 'Удалить';
$txt['maintain_old_confirm'] = 'Хотите удалить старые сообщения?-n-Это действие не может быть отменено!';

$txt['maintain_old_drafts'] = 'Удалить старые черновики';
$txt['maintain_old_drafts_days'] = 'Удалить черновики старее';
$txt['maintain_old_drafts_confirm'] = 'Хотите удалить старые черновики?-n-Это действие нельзя отменить!';
$txt['maintain_members'] = 'Удалить неактивных пользователей';
$txt['maintain_members_ungrouped'] = 'Пользователи без групп <span class="smalltext">(Пользователи, не относящиеся ни к одной из групп)</span>';
$txt['maintain_members_since1'] = 'Удалить всех пользователей, которые не';
$txt['maintain_members_since2'] = 'в течение';
$txt['maintain_members_since3'] = ' дней.';
$txt['maintain_members_activated'] = 'активировали свои учётные записи';
$txt['maintain_members_logged_in'] = 'посещали форум';
$txt['maintain_members_all'] = 'Все группы пользователей';
$txt['maintain_members_choose'] = 'Выбранные группы';
$txt['maintain_members_confirm'] = 'Хотите удалить учётную запись этого пользователя?-n-Это действие нельзя будет отменить!';

$txt['text_title'] = 'Преобразовать поля таблиц в тип TEXT';
$txt['mediumtext_title'] = 'Преобразовать в тип MEDIUMTEXT';
$txt['mediumtext_introduction'] = 'По умолчанию таблица сообщений может хранить сообщения длиной до 65535 символов. Если вы хотите хранить более длинные сообщения, следует преобразовать это поле в тип MEDIUMTEXT. Позже возможно будет провести обратное преобразование в тип TEXT (это действие даст дополнительное свободное место в базе), но <strong>только если</strong> ни одно из сообщений в базе не будет длиннее 65535 символов. Это условие будет проверено перед преобразованием.';
$txt['body_checking_introduction'] = 'Эта функция преобразует поле, содержащее тексты сообщений в таблице базы данных, в тип TEXT (сейчас оно MEDIUMTEXT). Это позволит уменьшить место, занимаемое сообщениями в базе данных (на 1 байт для каждого сообщения). Если какое-то сообщение, хранящееся в базе данных, будет длиннее 65535 символов &mdash; оно будет обрезано и часть текста будет потеряна..';
$txt['exceeding_messages'] = 'Эти сообщения длиннее 65535 символов и будут обрезаны:';
$txt['exceeding_messages_morethan'] = 'И остальные %1$d';
$txt['convert_to_text'] = 'Нет сообщений длиннее 65535 символов. Можно безопасно провести преобразование, не потеряв части текстов.';
$txt['convert_to_suggest_text'] = 'Поле таблицы сообщений в базе данных сейчас имеет тип MEDIUMTEXT, но максимальная длина сообщений меньше чем 65535 символов. Вы можете получить дополнительное свободное место, преобразовав это поле в тип TEXT.';

$txt['entity_convert_title'] = 'Преобразовать элементы HTML в UTF-8';
$txt['entity_convert_only_utf8'] = 'Перед преобразованием HTML-элементов убедитесь, что база данных имеет формат UTF-8';
$txt['entity_convert_introduction'] = 'Эта функция преобразует все символы, сохраненные в базе данных в виде HTML-последовательностей, в кодировку UTF-8. Это особенно полезно после преобразования форума из кодировки ISO-8859-1, если в сообщениях использовались символы, отличные от латинских. В таких случаях браузер посылает все символы в виде HTML-элементов. Для примера, последовательность HTML &amp;#945; представляет греческий символ &#945; (альфа). Преобразование в кодировку UTF-8 улучшит поиск и сортировку текста и уменьшит размер базы.';
$txt['entity_convert_proceed'] = 'Выполнить';

// Move topics out.
$txt['move_topics_maintenance'] = 'Перенос тем';
$txt['move_topics_select_board'] = 'Выбрать раздел';
$txt['move_topics_from'] = 'Перенести темы из';
$txt['move_topics_to'] = 'в';
$txt['move_topics_now'] = 'Перенести';
$txt['move_topics_confirm'] = 'Хотите перенести ВСЕ темы из раздела «%board_from%» в раздел «%board_to%»?';
$txt['move_topics_older_than'] = 'Перенести темы, в которых не было ответов ';
$txt['move_type_sticky'] = 'Прикрепленные темы';
$txt['move_type_locked'] = 'Закрытые темы';
$txt['move_zero_all'] = 'Введите 0, чтобы переместить все темы';

$txt['maintain_reattribute_posts'] = 'Присвоить сообщения пользователю';
$txt['reattribute_guest_posts'] = 'Присвоить сообщения гостя, опубликованные с';
$txt['reattribute_email'] = 'Имейлом';
$txt['reattribute_username'] = 'Именем пользователя';
$txt['reattribute_current_member'] = 'Присвоить сообщения пользователю';
$txt['reattribute_increase_posts'] = 'Добавить количество сообщений пользователю';
$txt['reattribute'] = 'Присвоить';
// Don't use entities in the below string.
$txt['reattribute_confirm'] = 'Хотите присвоить все сообщения гостей с %type% «%find%» пользователю «%member_to%»?';
$txt['reattribute_confirm_username'] = 'имя пользователя';
$txt['reattribute_confirm_email'] = 'электронный адрес';
$txt['reattribute_cannot_find_member'] = 'Не найден пользователь, которому нужно присвоить сообщения.';

$txt['maintain_recountposts'] = 'Пересчитать сообщения пользователей';
$txt['maintain_recountposts_info'] = 'Запустите эту задачу, чтобы пересчитать количество сообщений пользователей. Будут пересчитаны все доступные сообщения, сделанные каждым пользователем, и обновлены счетчики сообщений в профилях';

$txt['safe_mode_enabled'] = 'На вашем сервере включен <a href="https://secure.php.net/manual/ru/features.safe-mode.php">безопасный режим</a>!<br>Резервная копия, сделанная здесь, не может считаться надежной!';
$txt['use_external_tool'] = 'Поэтому используйте другой инструмент для создания резервных копий. Любая резервная копия, сделанная здесь, не может считаться надежной на 100%.';
$txt['zipped_file'] = 'Если хотите создать сжатую (zip) резервную копию.';
$txt['plain_text'] = 'Лучший способ создать резервную копию &mdash; использовать обычный текстовый файл, сжатая копия не может считаться полностью надежной.';
$txt['enable_maintenance1'] = 'Из-за большого размера форума рекомендуется переключить форум в «режим обслуживания» перед созданием резервной копии.';
$txt['enable_maintenance2'] = 'Из-за большого размера форума, чтобы продолжить, переключите форум в «режим обслуживания».';

?>