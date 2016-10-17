<?php
return [
    'link.have_questions' => 'Have some questions?',
    'text.answer' => 'Answer',
    'text.faq' => 'Frequently Asked Questions',
    'text.page_content' => '
        <tr>
            <td>What to do if my friends can\'t see my skin in game?</td>
            <td>Only users of the same skin system can see each other\'s skins. They don\'t have to sign up on Ely.by, but they do need to download and install Ely.by\'s patch, which is located <a href="/load">here</a>. This applies for the licensed Minecraft users too.</td>
        </tr>
        <tr>
            <td>What to do if I can\'t see my own skin outside the singleplayer mode?</td>
            <td>The majority of Minecraft v1.7.9 servers and above use so-called "Skin Restorer" which forcibly loads the skin of an official skins system and ignores our system. Ask server administrator about this problem.</td>
        </tr>
        <tr>
            <td>How to fix black screen problem after installing skin system?</td>
            <td>Most likely you forgot to delete your META-INF folder. It is also very likely that you downloaded the wrong version of our skin system.</td>
        </tr>
        <tr>
            <td>I use Minecraft v1.6+. After installing the skins system Minecraft is failing to run. What to do?</td>
            <td>Find your launcher\'s startup parameter and add next line:<br />
                "-Dfml.ignoreInvalidMinecraftCertificates=true"<br />
                to the end of it. If you are using a bat-file, it is necessary to open it with any text editor and add above line to the end of it.</td>
        </tr>
        <tr>
            <td>I installed the skins system, but my launcher updates the client and removes it. What to do?</td>
            <td>Yes, some launchers don\'t allow to patch Minecraft. Disable this feature or, if you can\'t, use another launcher.</td>
        </tr>
        <tr>
            <td>I changed my skin, but I still see my previous skin in Minecraft.</td>
            <td>Relaunch your Minecraft. If issue is still there, try to re-change your skin on Ely.by.</td>
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
