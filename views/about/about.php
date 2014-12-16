<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <title>Laura Nelson Design</title>
        <link href="/css/style_1.css" type="text/css" rel="stylesheet"/>
    </head> 
    <body> 
       

    <main>
        <h1>About</h1>
        <div id="main_content">
            <div id='profile'>
                <img src='/images/about/profile.jpg' alt='Laura Nelson Profile Picture' width='190' height='266'>

            </div>
            <div id="audio-into">
                <h3>Let Me Introduce Myself</h3>

                <audio controls preload="none">
                    <source src="/audio_video/intro.mp3">
                    <source src="/audio_video/intro.ogg">
                </audio>
            </div>
            <div id="experience">
                <a href="/views/about/experience.php" title="Experience">Skills and Experience</a>
            </div>
            <h2>Hello</h2>
            <p class="content">
                I am a Web Designer from Friendswood, Texas. My love for creating web sites
                began with a love for organizing information in useful and appealing ways.
                Designing web sites provides me with the challenge of finding a way to take 
                content and make it visually appealing for the user while being intuitive
                to use simultaneously. I began designing web sites in 2013 and since then have
                acquired <a href='/views/about/experience.php' title='experience'>new skills and
                    experience.</a>
            </p>

            Some interesting tid-bits of information for you:<br>
            <ul>
                <li>I am a list-maker. I even had to make a list to tell you about myself.
                    Maybe it's because lists organize information or maybe it's because
                    I feel accomplished when I can visually see the completion of a task.
                    Either way, lists are a way I take care of business</li>
                <li>I like to follow rules. Lucky for you, you can be assured that when
                    I build your web site I will use Best Practices and Semantics. Not 
                    sure what that means? You can read about it on the 
                    <a href = "/views/about/best_practices.php" title="Best Practices">Best Practices page</a>.</li>
                <li>
                    While I love to design, my favorite role is that of wife and mother.
                    I have a husband who supports me in all my endeavors, a daughter who 
                    makes me laugh and a son who keeps me on my toes.
                </li>
            </ul>
        </div>


    </main>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/modular/footer.php'; ?> 
    </footer>
</body> 
</html> 
