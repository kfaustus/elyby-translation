<?php
return [
    'link.have_questions' => 'Have some questions?',
    'text.answer' => 'Answer',
    'text.faq' => 'Frequently Asked Questions',
    'text.page_content' => '
        <tr>
            <td>I can see my skin and the other not.</td>
            <td>For others can see you skin, they need to install the same skin system. This does not mean that they need to register on Ely.by, but they need to download and install our patch, which is located on the <a href="/load">download page</a>. This must be done even if your friends have a license Minecraft.</td>
        </tr>
        <tr>
            <td>In single player skin appears normal, but on multi player does not appear or the skin is another.</td>
            <td>The majority of servers on version 1.7.9 and above use so-called "Skin Restorer" which forcibly loads the skin of an official skins system and ignores our system. Ask about it with server administrator.</td>
        </tr>
        <tr>
            <td>After installing skins system during boot I see black screen. What to do?</td>
            <td>Most likely you still forget to delete the folder META-INF. Also, it is possible that you just downloaded the wrong version of skins system.</td>
        </tr>
        <tr>
            <td>I use Minecraft 1.6+. After installing skins system ceased to run Minecraft. What to do?</td>
            <td>The need to find your launcher startup parameter and append a line<br />
                "-Dfml.ignoreInvalidMinecraftCertificates=true" without the quotes. If you use a bat-file, it is necessary to open it any text editor, and in the end just append this line.</td>
        </tr>
        <tr>
            <td>I installed the skins system, but my own launcher updates the client and removes it.</td>
            <td>Yes, some launchers can not allow to patch Minecraft. Unfortunately not all the launchers, you can disable this feature. Maybe you need another Minecraft launcher.</td>
        </tr>
        <tr>
            <td>I changed my skin, but I see my previous skin in Minecraft.</td>
            <td>This is a characteristic of the algorithm loading skins in Minecraft. If you already go in the game, you will need to restart it. If the problem persists, then put on any skin from our skins catalog and then put back desired skin. Maybe just could not update the information about your skin in the skins system.</td>
        </tr>
        <tr>
            <td>Why i cant find cloaks, ears, HD-skins there?</td>
            <td>I want to give users free alternative of official sceens.If i give them cloaks, ears, HD-skins, it will kill all the essence of Minecraft skins. But do not worry, in the current version of the patch that you will downloading, registered code to load cloaks, but we have reserved them for something more interesting.</td>
        </tr>
        <tr>
            <td>But I want cloaks/ears/HD-skins very much!</td>
            <td>There is a French project, that called <a href="http://minecrack.fr.nf/">MineCrack</a>. There are you can find everything things, that you cant find in the official Minecraft and Ely.</td>
        </tr>
        <tr>
            <td>Can I use this is system of skins on my server?</td>
            <td>Can and must! The more people use our skins system, the faster it will be an alternative of the official and number of "Steves" on the servers will decline.</td>
        </tr>
        <tr>
            <td>On my skin I have ears/cloaks. How can i delete it?</td>
            <td>As told above, Ely doesnt support neither one neither other. This is means, that your client has any third-party patch, that it add. Perform a clean installation of the client and everything will be gone.</td>
        </tr>
        <tr>
            <td>Where can I download/how launch Minecraft?</td>
            <td>You can find <a href="http://bfy.tw/2gGK" target="_blank">there</a>, I think you will find it quickly.</td>
        </tr>
    ',
    'text.question' => 'Question',
    'title' => 'FAQ',
];
