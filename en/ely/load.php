<?php
return [
    'button.download' => 'Download',
    'button.have_some_questions' => 'Have some questions?',
    'link.tlauncher_group_url' => 'https://fb.com/tlauncher',
    'text.instruction_for_linux' => '
        <li>Move to the folder home/&lt;you_username&gt;.</li>
        <li>If disabled visibility of hidden files, then you should press Ctrl+H.</li>
        <li>Find the folder .minecraft (visible only on enabled hidden files) and open it.</li>
        <li>Next do the same way as case Windows.</li>
    ',
    'text.instruction_for_windows_authlib' => '
        <li>Move to the folder libraries, then /com/mojang/authlib.</li>
        <li>Open downloaded from this site archive and see the file authlib-x.x.x. You should open an folder with the same name with file inside archive.</li>
        <li>Replace inside folder original .jar file to file from our archive.</li>
    ',
    'text.instruction_for_windows_common' => '
        <li>Press simultaneously Win+R (key Win - key with Microsoft symbol).</li>
        <li>In opened window you should write down %APPDATA% and the press Enter. Opens window.</li>
        <li>If you see only 3 folders, then you need to open Roaming folder. Then open .minecraft folder.</li>
    ',
    'text.instruction_for_windows_finish' => '
        <li>Close all and try to play.</li>
    ',
    'text.instruction_for_windows_forge' => '
        <li>Open the folder mods (forge had to create it when you first run Minecraft).</li>
        <li>Open downloaded from this site archive and simply drag and drop the file with jar extension in mods folder.</li>
    ',
    'text.instruction_for_windows_forge_164' => '<b>If you are using OptiFine</b> and want to use our skins system - use TLauncher, because our patch is not compatible with 1.6.4 and OptiFine.',
    'text.instruction_for_windows_vanila' => '
        <li>Go to the folder "versions", then to the folder of interest to us version and see the file named "version".jar (possible extension will not be visible).</li>
        <li>Right-click on the found file and select "Open As...".</li>
        <li>Chose archivator WinRar or 7-Zip.</li>
        <li>If you see folder META-INF, then just delete this.</li>
        <li>Open downloaded from this site archive and just simply drag and drop files inside archive to the archive with
        Minecraft.</li>
    ',
    'text.only_forge_versions' => 'Only Forge-compatible versions',
    'text.pick_version' => 'Select version',
    'text.select_minecraft_version' => 'Select Minecraft version.',
    'text.tlauncher_desc' => '<b>TLauncher</b> 1.5 and above contain support of <b>authorization</b> and <b>Ely.by skin system</b>. All you need to do is specify to <b>Account Manager</b> your account email and password, and the skins system will be automatically installed on all of the latest version of the game, including Forge mods, troubles OptiFine versions, authlib and etc. We recommend .jar version, as .exe can be blocked by your antivirus program.',
    'text.tlauncher_download_exe' => 'Download exe version',
    'text.tlauncher_download_jar' => 'Download jar version',
    'text.tlauncher_group' => 'Page <div class="ico-facebook s26"></div>',
    'title' => 'Downloads',
    'title.ely' => 'Free skin system',
    'title.install_instruction' => 'Instructions for installing the skins system',
    'title.instruction_for_linux' => 'Instruction for Ubuntu (GNU/Linux):',
    'title.instruction_for_windows' => 'Instruction for Windows:',
    'title.tlauncher' => 'Best alternative launcher',
];
