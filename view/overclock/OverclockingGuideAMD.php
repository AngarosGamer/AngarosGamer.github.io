<!DOCTYPE HTML>

<!-- If you're seeing this, you're definitely a Russian spy stealing intelligence -->

<html lang="en">
    <head>
    <link rel="stylesheet" href="../design/css/general.css" />
      <link rel="stylesheet" href="../design/css/nav.css" />
      <link rel="stylesheet" href="../design/css/overclocking.css" />
    <title>Angaros - Overclock AMD</title>
    </head>
    <body>
      <!-- Header -->
      <nav>
      <ul>
        <li><a href="../mainPage.php" data-value="Home" id="nav-header-1">Home</a></li>
        <li><a href="OverclockingGuide.php" data-value="Overclocking Guide" id="nav-header-2">Overclocking Guide</a></li>
      </ul>
        <div class="fade_rule"></div>
      </nav>
      <div class="author">
      <h1>Overclocking Guide AMD</h1>
            <p>
                Made by Plerion#6666 based on Happy Pill#9683's guide - Last update 5/8/2022 @17:13 UTC+1
            </p>
        </div>
      <div id="maintext">
        <h3>Advantages</h3>
        <p>Overclocking allows you to:</p>
        <ul>
            <li>Get more earnings</li>
            <li>Lower power usage</li>
            <li>Increase the life of your GPU</li>
        </ul>
        <h3>Warnings</h3>

        <p>The following content is not official, and is not being monitored by Salad. The use of the following is solely at your own risk, and <b>we will not be held liable for any damage</b>, loss of information, or any issue whatsoever.
        <br><br>
        We cannot and will not pay you back in any event.</p>
        <p><i>Wondering why this is here? It's because I'm a sole user outside of Salad that made this. Like in a children's playground, where they say you have to use it at your own risk, it isn't because it is made to hurt kids, but rather because we can't afford to be held liable for damage.</i></p>

        <h3>Prerequisites</h3>

        <ul>
            <li>Internet Connection</li>
            <li>A GPU with 3GB+ VRAM</li>
        </ul>

        <h3>Step 1: Open Wattman</h3>

        <p>To access Radeon Wattman, open Radeon Settings by right-clicking on your desktop and select AMD Radeon Settings.</p>
        <p>Click on the Gaming Tab. Click on Global Settings. Click on the Global WattMan tab and read the Terms of Use.</p>
        <p>Accept the Terms of Use and continue to Wattman</p>
        <p>If you have a Rx 400/500 series GPU, the first step when overclocking your GPU for mining is to enable compute mode within your adrenaline software.
        </p>

        <h3>Step 2: Increasing Mem Clocks</h3>

        <p>Slowly increase the memory clock graph by a few mhz at a time. 
        <br>Keep in mind that this graph displays the true clock of your memory modules, so a 10mhz increase in Wattman is equivalent to a 40mbps increase in bandwidth on GDDR5 GPUs, and a 80mbps increase in bandwidth on GDDR6 GPUs.
        <br> As such, it is recommended to increase the plot point by relatively small increments. 
        <br>As you tune your memory, you will likely experience crashes or showing artifacts.
        <br>If this occurs, restart your PC or reduce the overclocks respectively.</p>


        <h3>Step 3: Taking it a Step Further (Optional)</h3>

        <p>You may also be able to raise the voltage for your memory chips. 
        <br>This usually caps out at about +150mv.
        <br>Increasing this voltage can increase your maximum stable clock speeds with some memory modules, however others may experience negative scaling and lose frequency. 
        <br>Others still may remain neutral and not experience any gains or losses. </p>
        <p><b><i>It is important to note that raising the voltage on your GDDR memory modules will increase the wear they experience over time.<br>Long term health concerns of throwing an extra 150mv into memory have not been tested, but based on my extrapolation with DDR4 system memory, 150mv is far too small an increase to do any real damage.<br>Please do not take this as a guarantee of long term safeness of this, however.</i></b></p>


        <h3>Step 4: Adjusting Core</h3>

        <p>Once you are finished with your memory overclocks, the next step would be to locate and adjust the core clock. 
        <br>You’ll notice 7 distinct power states each with their own clock speeds. 
        <br>Disable the “Frequency %” option. Next, raise the frequency for all power states to that of Pstate 7. 
        <br>Now, slowly drop the frequency of every power state by a few MHz at a time. 
        <br>Generally speaking, decreasing in intervals of around 5% would be ideal. 
        <br>Take very careful and constant note of hashrate while doing this. 
        <br>Hashrate will fluctuate somewhat, but as soon as it is consistently lower than prior to adjusting your core clock, revert to the lowest clock speed you can run without that loss in hashrate.
        <br>Finally, reduce the voltage for each of your power states until your GPU crashes, artifacts, or the miner crashes. 
        <br>Once you’ve done this, you’re finished.</p>

        <h3>Notes</h3>

        <p>-Some GPUs have the option “fast timings” and others have the option to manually tune memory timings. 
        <br>Fast timings option will increase hashrate, but it may decrease maximum stable clock. 
        <br>As such, you’ll want to keep an eye on hashrate to ensure that the gains it supplies outweighs the lower memory clock you’ll likely need to use. 
        <br>With manual setting timings, you can simply lower timings until the miner gets upset, your GPU crashes, etc. </p>
        <p>-It is recommended that manual tuning is done one timing at a time, with long intervals in between to verify stability. 
            <br>Long intervals being ideally >1 hour. 
            <br>Memory tuning is complex, so to avoid getting too deep in the weeds, the basic process by which you'd do this is as simple as finding a timing, lower it a few ticks until you lose stability, rinse and repeat with a new timing.</p>

      </div>
    </body>
    <script src="../design/js/letterAlternate.js"></script>
</html>
