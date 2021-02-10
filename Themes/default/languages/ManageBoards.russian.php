<?php
// Version: 2.1 RC3; ManageBoards

$txt['boards_and_cats'] = 'Управление разделами и категориями';
$txt['order'] = 'Расположение';
$txt['full_name'] = 'Название';
$txt['name_on_display'] = 'Будет отображаться на главной странице.';
$txt['boards_and_cats_desc'] = 'Здесь можно редактировать разделы и категории форума. Модераторы разделов прописываются в список через запятую, например <em>«username», «username»</em> (указывайте логины пользователей, а не отображаемые имена).<br>Для создания нового раздела нажмите кнопку «Добавить раздел». Для создания подраздела форума выберите пункт «Подраздел...» в раскрывающемся списке «Расположение».';
$txt['parent_members_only'] = 'Обычные пользователи';
$txt['parent_guests_only'] = 'Гости';
$txt['cat_delete_confirm'] = 'Хотите удалить эту категорию?';
$txt['board_delete_confirm'] = 'Хотите удалить этот раздел?';

$txt['cat_edit'] = 'Редактировать категорию';
$txt['collapse_enable'] = 'Сворачиваемая';
$txt['collapse_desc'] = 'Позволить пользователям сворачивать эту категорию';
$txt['cat_modify'] = '(изменить)';

$txt['mboards_order_after'] = 'После ';
$txt['mboards_order_inside'] = 'В ';
$txt['mboards_order_first'] = 'На первом месте';

$txt['mboards_new_board'] = 'Добавить раздел';
$txt['mboards_new_cat_name'] = 'Новая категория';
$txt['mboards_add_cat_button'] = 'Добавить категорию';
$txt['mboards_new_board_name'] = 'Новый раздел';

$txt['mboards_name'] = 'Название';
$txt['mboards_modify'] = 'изменить';
$txt['mboards_permissions'] = 'права';
// Don't use entities in the below string.
$txt['mboards_permissions_confirm'] = 'Хотите переключить данный раздел на локальные права доступа?';

$txt['mboards_delete_cat'] = 'Удалить категорию';
$txt['mboards_delete_board'] = 'Удалить раздел';

$txt['mboards_delete_cat_contains'] = 'Удаление этой категории приведёт к удалению содержащихся в ней разделов, а также тем, сообщений и вложений';
$txt['mboards_delete_option1'] = 'Удалить категорию и все разделы, находящиеся в ней.';
$txt['mboards_delete_option2'] = 'Удалить категорию и перенести все разделы в';
$txt['mboards_delete_board_contains'] = 'Удаление этого раздела уберет подразделы, включая все темы, сообщения и вложения, находящиеся внутри';
$txt['mboards_delete_board_option1'] = 'Удалить раздел и конвертировать его подразделы в разделы (все подразделы будут подняты на уровень выше).';
$txt['mboards_delete_board_option2'] = 'Удалить раздел и переместить все его подразделы в';
$txt['mboards_delete_what_do'] = 'Пожалуйста, выберите действия, которые будут произведены с этими разделами';
$txt['mboards_delete_confirm'] = 'Подтвердить';
$txt['mboards_delete_cancel'] = 'Отмена';

$txt['mboards_category'] = 'Категория';
$txt['mboards_description'] = 'Описание';
$txt['mboards_description_desc'] = 'Небольшое описание раздела. Теги HTML не допускаются, но можно использовать теги форума: {allowed_tags} ';
$txt['mboards_cat_description_desc'] = 'Небольшое описание категории. Теги HTML не допускаются, но можно использовать теги форума: {allowed_tags} ';
$txt['mboards_groups'] = 'Группы пользователей';
$txt['mboards_groups_desc'] = 'Группы у которых есть доступ в этот раздел.<br><em>Примечание: если пользователь в любой из этих групп, или выбраны группы, основанные на количестве сообщений, то он будет иметь доступ в этот раздел.</em>';
$txt['mboards_groups_regular_members'] = 'В эту группу входят все, у кого не задана основная группа.';
$txt['mboards_groups_post_group'] = 'Эта группа основана на количестве сообщений.';
$txt['mboards_moderators'] = 'Модераторы';
$txt['mboards_moderators_desc'] = 'Пользователи, имеющие права модераторов в этом разделе. Помните, что администраторов сюда добавлять не требуется.';
$txt['mboards_moderator_groups'] = 'Группы модераторов';
$txt['mboards_moderator_groups_desc'] = 'Группы, пользователи которых будут иметь права модераторов в этом разделе. Имейте в виду, что можно выбрать только группы не основанные на количестве сообщений и не скрытые.';
$txt['mboards_count_posts'] = 'Подсчитывать сообщения';
$txt['mboards_count_posts_desc'] = 'Сообщения, оставленные в этом разделе, будут прибавляться к общему количеству.';
$txt['mboards_unchanged'] = 'По умолчанию';
$txt['mboards_theme'] = 'Тема оформления';
$txt['mboards_theme_desc'] = 'Эта функция позволяет изменить тему оформления только внутри данного раздела.';
$txt['mboards_theme_default'] = '(оставить по умолчанию.)';
$txt['mboards_override_theme'] = 'Заменять тему оформления пользователя';
$txt['mboards_override_theme_desc'] = 'При заходе в этот раздел у всех пользователей будет меняться тема оформления.';

$txt['mboards_redirect'] = 'Перенаправлять на веб-адрес';
$txt['mboards_redirect_desc'] = 'Перенаправление пользователей, входящих в раздел, на другой адрес.';
$txt['mboards_redirect_url'] = 'URL-адрес перенаправления';
$txt['mboards_redirect_url_desc'] = 'Пример: «https://www.simplemachines.ru».';
$txt['mboards_redirect_reset'] = 'Сбросить счетчик переходов';
$txt['mboards_redirect_reset_desc'] = 'При выборе счётчик переходов будет сброшен на 0.';
$txt['mboards_current_redirects'] = 'Текущее количество переходов: %1$s';

$txt['mboards_order_before'] = 'До';
$txt['mboards_order_child_of'] = 'Подраздел';
$txt['mboards_order_in_category'] = 'В категории';
$txt['mboards_current_position'] = 'Текущая позиция';
$txt['no_valid_parent'] = 'Раздел %1$s не имеет правильной корневой категории. Используйте функцию «Поиск и устранение ошибок» для устранения этой ошибки.';

$txt['mboards_recycle_disabled_delete'] = 'Примечание: перед тем как удалить этот раздел, необходимо выбрать другой, для хранения удаленных сообщений.';

$txt['mboards_settings_desc'] = 'Редактировать общие настройки разделов и категорий.';
$txt['groups_manage_boards'] = 'Группы, которым разрешено редактировать разделы и категории';
$txt['mboards_settings_submit'] = 'Сохранить';
$txt['recycle_enable'] = 'Разрешить восстановление удаленных тем';
$txt['recycle_board'] = 'Раздел для удаленных тем';
$txt['redirect_board_desc'] = 'Раздел, который перенаправляет пользователей заходящих в него';
$txt['recycle_board_unselected_notice'] = 'Вы включили возможность восстановления удаленных тем, не указав раздел для их хранения. Эта функция не будет включена до тех пор, пока не будет указан раздел для хранения удаленных тем.';
$txt['boardindex_max_depth'] = 'Максимальный уровень вложенности подразделов для проверки новых сообщений';
$txt['countChildPosts'] = 'Добавлять количество сообщений в подразделах к статистике родительского раздела';
$txt['allow_ignore_boards'] = 'Разрешить игнорирование разделов';
$txt['deny_boards_access'] = 'Разрешить запрет доступа к разделам в зависимости от группы';
$txt['boardsaccess_option_desc'] = 'Для каждого права доступа можно установить «Разрешить» (+), «Отклонить» (-), или <span class="alert">«Запретить» (X)</span>.<br><br>Если запретить права, любой пользователь, находящийся в этой группе (даже модератор), лишится этих прав.<br>Поэтому, следует пользоваться запретом прав с осторожностью, только когда это <strong>действительно необходимо</strong>. Отклонение прав, с другой стороны, запрещает, если не перекрывается другим разрешающим правом. ';

$txt['mboards_select_destination'] = 'Выберите назначение для раздела «<strong>%1$s</strong>»';
$txt['mboards_cancel_moving'] = 'Отменить перемещение';
$txt['mboards_move'] = 'переместить';

$txt['mboards_no_cats'] = 'Не создано ни одной категории или раздела.';

?>