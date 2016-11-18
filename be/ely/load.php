<?php
return [
    'button.download' => 'Скачать',
    'button.have_some_questions' => 'Остались ещё вопросы?',
    'link.tlauncher_group_url' => 'https://vk.com/tlauncher',
    'text.instruction_for_linux' => '
        <li>Перейти в папку home/&lt;ваш_логин&gt;.</li>
        <li>Если отключена видимость скрытых файлов, то необходимо нажать Ctrl+H.</li>
        <li>Найти папку .minecraft (видна только при включённых скрытых файлах) и открыть её.</li>
        <li>Далее действуем так же, как и в случае с Windows.</li>
    ',
    'text.instruction_for_windows_authlib' => '
        <li>Переходим в папку libraries, за тем следуем по пути /com/mojang/authlib.</li>
        <li>Открываем скачанный с этого сайта архив и видим там файлик authlib-x.x.x. Вам необходимо открыть папку с
        соответствующим именем файлика внутри архива.</li>
        <li>Замените внутри папки оригинальный .jar файл на файл из архива.</li>
    ',
    'text.instruction_for_windows_common' => '
        <li>Нажать одновременно Win+R (кнопка Win - кнопка с символом Microsoft).</li>
        <li>В открывшееся окошко вписать %APPDATA% и нажать Enter. Откроется окно.</li>
        <li>Если вы видите только 3 папки, то нужно открыть папку Roaming. Далее открываем папку .minecraft.</li>
    ',
    'text.instruction_for_windows_finish' => '
        <li>Закрываем всё и пробуем играть.</li>
    ',
    'text.instruction_for_windows_forge' => '
        <li>Открываем папку mods (forge должен был её создать при первом запуске).</li>
        <li>Открываем скачанный с этого сайта архив и просто перетаскиваем файл с расширением jar из архива со скинами в
        папку mods.</li>
    ',
    'text.instruction_for_windows_forge_164' => '<b>Если вы используете OptiFine</b> и хотите использовать нашу систему скинов - воспользуйтесь TLauncher, т.к. наш патч не совместим с 1.6.4 и OptiFine.',
    'text.instruction_for_windows_vanila' => '
        <li>Переходим в папку versions, далее в папку интересующей нас версии и видим файл с именем "версия".jar
        (возможно расширения не будет видно).</li>
        <li>Правой кнопкой мыши жмём на найденный файл и выбираем "Открыть как...".</li>
        <li>Выбираем архиватор WinRar или 7-Zip.</li>
        <li>Если есть папка META-INF, то удаляем её.</li>
        <li>Открываем скачанный с этого сайта архив и просто перетаскиваем файлы из архива со скинами в архив с Minecraft.</li>
    ',
    'text.only_forge_versions' => 'Только Forge-совместимые версии',
    'text.pick_version' => 'Выберите версию',
    'text.select_minecraft_version' => 'Выберите версию Minecraft.',
    'text.tlauncher_desc' => 'В <b>TLauncher</b>, с версии 1.5, появилась встроенная поддержка <b>авторизации</b> и <b>системы скинов Ely.by</b>. Всё, что вам нужно сделать - указать в <b>менеджере аккаунтов</b> свой email и пароль от аккаунта и система скинов автоматически будет установлена на все актуальные версии игры, включая Forge, проблемые OptiFine, библиотеки authlib и т.д. К скачиванию рекомендуется .jar версия, т.к. .exe может быть заблокирована вашим антивирусом.',
    'text.tlauncher_download_exe' => 'Скачать exe версию',
    'text.tlauncher_download_jar' => 'Скачать jar версию',
    'text.tlauncher_group' => 'Группа <div class="ico-vk s26"></div>',
    'title' => 'Загрузки',
    'title.ely' => 'Бесплатная система скинов',
    'title.install_instruction' => 'Инструкция по установке системы скинов',
    'title.instruction_for_linux' => 'Инструкция для Ubuntu (GNU/Linux):',
    'title.instruction_for_windows' => 'Инструкция для Windows:',
    'title.tlauncher' => 'Лучший альтернативный лаунчер',
];
