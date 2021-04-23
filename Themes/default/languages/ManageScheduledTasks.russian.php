<?php
// Version: 2.1 RC3; ManageScheduledTasks

$txt['scheduled_tasks_title'] = 'Запланированные задачи';
$txt['scheduled_tasks_header'] = 'Все запланированные задачи';
$txt['scheduled_tasks_name'] = 'Название задачи';
$txt['scheduled_tasks_next_time'] = 'Следующий запуск';
$txt['scheduled_tasks_regularity'] = 'Регулярность';
$txt['scheduled_tasks_enabled'] = 'Разрешена';
$txt['scheduled_tasks_run_now'] = 'Запустить сейчас';
$txt['scheduled_tasks_save_changes'] = 'Сохранить изменения';
$txt['scheduled_tasks_time_offset'] = '<strong>Примечание:</strong> все значения времени, указанные ниже, являются <em>серверными</em> и не зависят от смещения, заданного в SMF.';
$txt['scheduled_tasks_were_run'] = 'Все выбранные задачи выполнены';
$txt['scheduled_tasks_were_run_errors'] = 'Все выбранные задачи выполнены, но некоторые с ошибками:';

$txt['scheduled_tasks_na'] = 'Недоступно';
$txt['scheduled_task_auto_optimize'] = 'Оптимизация базы данных';
$txt['scheduled_task_desc_auto_optimize'] = 'Оптимизация базы данных, исправление ошибок.';
$txt['scheduled_task_daily_maintenance'] = 'Ежедневное обслуживание';
$txt['scheduled_task_desc_daily_maintenance'] = 'Ежедневный запуск обслуживания форума — не отключайте.';
$txt['scheduled_task_daily_digest'] = 'Ежедневное уведомление';
$txt['scheduled_task_desc_daily_digest'] = 'Отправка ежедневного обзора подписчикам.';
$txt['scheduled_task_weekly_digest'] = 'Еженедельное уведомление';
$txt['scheduled_task_desc_weekly_digest'] = 'Отправка еженедельного обзора подписчикам.';
$txt['scheduled_task_fetchSMfiles'] = 'Получение файлов с официального сайта SMF';
$txt['scheduled_task_desc_fetchSMfiles'] = 'Скачивание уведомлений об обновлениях и другой информации.';
$txt['scheduled_task_birthdayemails'] = 'Отправка поздравлений';
$txt['scheduled_task_desc_birthdayemails'] = 'Рассылка поздравлений с днём рождения.';
$txt['scheduled_task_weekly_maintenance'] = 'Еженедельное обслуживание';
$txt['scheduled_task_desc_weekly_maintenance'] = 'Запуск еженедельного обслуживания форума — не отключайте.';
$txt['scheduled_task_paid_subscriptions'] = 'Проверка платной подписки';
$txt['scheduled_task_desc_paid_subscriptions'] = 'Отправка уведомлений о платных подписках и удаление истекших подписок.';
$txt['scheduled_task_remove_topic_redirect'] = 'Удаление тем-уведомлений «ПЕРЕНЕСЕНО:»';
$txt['scheduled_task_desc_remove_topic_redirect'] = 'Удаляет темы-уведомления «ПЕРЕНЕСЕНО:», создаваемые при переносе тем.';
$txt['scheduled_task_remove_temp_attachments'] = 'Удаление временных файлов вложений';
$txt['scheduled_task_desc_remove_temp_attachments'] = 'Удаляет временные файлы, созданные при прикреплении к сообщениям, которые по какой-то причине не были переименованы или удалены ранее.';

$txt['scheduled_task_reg_starting'] = 'Начинать в %1$s';
$txt['scheduled_task_reg_repeating'] = 'повторять раз в %1$d %2$s';
$txt['scheduled_task_reg_unit_m'] = 'мин.';
$txt['scheduled_task_reg_unit_h'] = 'ч.';
$txt['scheduled_task_reg_unit_d'] = 'дн.';
$txt['scheduled_task_reg_unit_w'] = 'нед.';

$txt['scheduled_task_edit'] = 'Изменение задачи';
$txt['scheduled_task_edit_repeat'] = 'Повторять задачу раз в';
$txt['scheduled_task_edit_interval'] = 'Интервал';
$txt['scheduled_task_edit_start_time'] = 'Время запуска';
$txt['scheduled_task_edit_start_time_desc'] = 'Часы:минуты';
$txt['scheduled_task_time_offset'] = 'Обратите внимание: время запуска задачи должно указываться с учётом текущего времени сервера: %1$s';

$txt['scheduled_view_log'] = 'Просмотр журналов';
$txt['scheduled_log_empty'] = 'Записей нет.';
$txt['scheduled_log_time_run'] = 'Когда выполнена';
$txt['scheduled_log_time_taken'] = 'Результат';
$txt['scheduled_log_time_taken_seconds'] = '%1$d сек.';
$txt['scheduled_log_empty_log'] = 'Очистить журнал';
$txt['scheduled_log_empty_log_confirm'] = 'Хотите полностью очистить журнал?';

$txt['scheduled_task_remove_old_drafts'] = 'Удаление старых черновиков';
$txt['scheduled_task_desc_remove_old_drafts'] = 'Всех, которые старее заданного в настройках черновиков количества дней.';

$txt['scheduled_task_prune_log_topics'] = 'Пометка разделов прочитанными';
$txt['scheduled_task_desc_prune_log_topics'] = 'Помечает разделы прочитанными для пользователей, неактивных более указанного в <a href="%1$s?action=admin;area=logs;sa=settings#markread_title">настройках журналов</a> количества дней назад.';

$txt['cron_is_real_cron'] = 'Отключить метод запуска запланированных задач на основе JavaScript.';
$txt['cron_is_real_cron_desc'] = '<strong>Не устанавливайте этот флажок</strong>, если не <strong><u>уверены</u></strong>, что настроили другой метод для регулярного запуска файла cron.php.';
$txt['cron_not_working'] = 'За последние 24 часа запланированные задачи не выполнялись. Повторное включение JavaScript-метода для запуска запланированных задач.';

?>