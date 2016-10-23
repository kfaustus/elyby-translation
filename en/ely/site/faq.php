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
            <td>We want to give users free alternative of the official skin system.If we give them cloaks, ears, HD-skins, it will hurt 
            the spirit of Minecraft skins. But do not worry, the current version of our patch is able to load cloaks, but we have reserved them for something more interesting.</td>
        </tr>
        <tr>
            <td>But I really want cloaks/ears/HD-skins!</td>
            <td>There is a French project, that called <a href="http://minecrack.fr.nf/">MineCrack</a>. There you can find everything that you can\'t find in official Minecraft and Ely.</td>
        </tr>
        <tr>
            <td>Can I use this skins system on my server?</td>
            <td>You can and should! The more people use our skins system, the faster it will become an alternative to official, and you\'ll see a lot less of "Steves" on servers.</td>
        </tr>
        <tr>
            <td>On my own skin I can see ears/cloaks. How can I delete it?</td>
            <td>As told above, Ely doesn\'t support neither of them. Consequently, your client probably has any third-party patch installed. Perform a clean installation of the client and they shall be gone.</td>
        </tr>
        <tr>
            <td>Where can I find Minecraft?</td>
            <td>Try searching <a href="http://bfy.tw/8KYT" target="_blank">here</a>, we think you\'ll find it pretty quickly.</td>
        </tr>
    ',
    'text.question' => 'Question',
    'title' => 'FAQ',
];
