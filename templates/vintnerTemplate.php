<?php
require_once (FS_TEMPLATES . 'templateEngine.php');

class vintnerTemplate extends templateEngine
{
    /**
     * This is the html code that makes up the template.  This will
     * be unique to and set in eacb instance of the class
     *
     * @var null
     */
    public function vintner()
    {
        echo <<<vintner
        <!-- PASTE HTML CODE HERE -->
  <div class="container">
    <div style="padding-left: 24px">
        <div  style="padding-left: 24px; padding-right: 24px;">
          <h2 style="padding-top: 48px;"> Making Your Own Wine </h2>
          </div>
          <hr>
          </div>

          <div align="center">
            <iframe height="65%" width="80%" style="padding-top: 12px; padding-bottom: 24px" src="https://www.youtube-nocookie.com/embed/x1kD6-izWtY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>

          <h3 style="padding-top: 10px; padding-left: 24px;"> Welcome to the Family! </h3>
          <hr>
            <div style="padding-left: 72px;">
              <p> The history of making wine spans thousands of years and is closely intertwined with the history of agriculture, cuisine, civilization and man himself. Archaeological evidence suggests that the earliest wine production came from sites in Georgia and Iran, dating from 6000 to 5000 BC. The archaeological evidence becomes clearer and points to domestication of grapevine in Early Bronze Age sites of the Near East, Sumer and Egypt from around the third millennium BC. </p>
              <p> Wine was common in classical Greece and Rome and many of the major wine producing regions of Western Europe today were established with Phoenician and later Roman plantations. Wine making technology, such as the wine press, improved considerably during the time of the Roman Empire; many grape varieties and cultivation techniques were known and barrels were developed for storing and shipping wine.</p>
            </div>

            <h3 style="padding-top: 10px; padding-left: 24px;"> Preparing to Make Wine </h3>
            <hr>
              <div align="center">
                  <img src="https://www.wikihow.com/images/thumb/d/d3/Make-Cheap-Wine-Step-6-Version-2.jpg/aid49160-v4-728px-Make-Cheap-Wine-Step-6-Version-2.jpg.webp" style="width: 55%; height: 45%; padding: 10px; padding-bottom: 18px; frameborder: 3px solid black;">
              </div>

            <h4 style="padding-left: 48px"> 1. Select Your Juice </h4>
            <div style="padding: 10px; padding-left: 48px;">
                <p>
                  Any juice will work for your vinting, but you may want to start with something familiar, like grape juice. The most important thing to be aware of when selecting your juice is the sugar content. This will influence the strength of your finished wine.
                  </p>
              <ul>
                <li>
                  The higher your sugar content, the stronger your wine will be.
                </li>
                <li>
                  You may want to avoid juices that list corn syrup as a sweetener. This will make a corn based wine, which may undesirably affect the flavor profile.
                </li>
                <li>
                  You can vint your wine with as little as a half gallon of juice, but to keep your measurements simple while getting the hang of the process, a gallon of juice is recommended.
                </li>
              </ul>
            </div>

            <h4 style="padding-left: 48px"> 2. Test Your Sugar Content </h4>
            <div style="padding: 10px; padding-left: 48px;">
                <p>
                  This is an optional step. You can simply use whatever juice you have selected without testing, but you won't know how strong the wine will be. Warm or cool your juice to the temperature the hydrometer is calibrated to, usually 60°F (15°C). Clean your hydrometer with soap and water, if necessary, and then:
                </p>
              <ul>
                <li>
                  Insert your hydrometer into your juice, bulb oriented downward. You'll want the inner fluid of the hydrometer to be even with the top of your juice.
                </li>
                <li>
                  Swirl the hydrometer slightly, being sure not to touch the sides or bottom of your container. Wait until your hydrometer ceases to bubble. Where the inner fluid of your hydrometer reaches will indicate your potential alcohol. For most hydrometers, this value will be between 0.990 and 1.120.
                </li>
                <li>
                  Juice with reading of 1.090 will produce wine that is 12.3% alcohol. The average alcohol content for wine is between 12 and 15%. Many vinting/brewing hydrometers will have a scale on the side to indicate the percentage of potential alcohol.
                </li>
              </ul>
            </div>

            <h4 style="padding-left: 48px"> 3. Add Sugar If Necessary  </h4>
            <div style="padding: 10px; padding-left: 48px;">
                <p>
                In some cases, the sugar in your wine may be insufficient for the strength that you're aiming for. In this case, you'll have to remove some juice and dissolve sugar into it. For example, if you plan on adding 2 cups of sugar, first remove two cups of juice.
                </p>
              <ul>
                <li>
                  You may have an easier time adding sugar to your juice using a funnel.
                </li>
                <li>
                  If you don't have a funnel, you could use a rolled up piece of paper or parchment paper to form a makeshift one.
                </li>
                <li>
                  As a general rule, you should aim for about 4 cups of sugar for each gallon of juice. However, if you want a weaker wine, you may want to use less.
                </li>
              </ul>
            </div>

            <h4 style="padding-left: 48px"> 4. Dissolve the Sugar in your Juice </h4>
            <div style="padding: 10px; padding-left: 48px;">
                <p>
                  You'll need the sugar to be completely dissolved, with none swirling around in the juice or collecting at the bottom of the container. The best way to speed this process along is to shake the container thoroughly.
                </p>
              <ul>
                <li>
                  To make sure your sugar has dissolved after shaking, you may want to leave it for 5 - 10 minutes. If sugar collects on the bottom, you'll need to shake it some more.
                </li>
                <li>
                  Some juices can be very dark. This may make it difficult to see the sugar. In many cases, you can improve visibility through the juice by holding it up to a light or shining a flashlight on it.
                </li>
              </ul>
            </div>

            <h3 style="padding-top: 10px; padding-left: 24px;"> Fermenting the Juice </h3>
            <hr>
              <div align="center">
                  <img src="https://www.wikihow.com/images/thumb/8/84/Make-Cheap-Wine-Step-7-Version-2.jpg/aid49160-v4-728px-Make-Cheap-Wine-Step-7-Version-2.jpg.webp" style="width: 55%; height: 45%; padding: 10px; padding-bottom: 18px; frameborder: 3px solid black;">
              </div>

            <h4 style="padding-left: 48px"> 5. Check the Temperature of your Juice   </h4>
            <div style="padding: 10px; padding-left: 48px;">
                <p>
                  Yeast ferments best between 70° and 90°F (21.1°- 32.2°C). The warmer the temperature of your juice, the quicker your yeast will ferment. If your juice is at room temperature, it should ferment acceptably.
                </p>
            </div>

            <h4 style="padding-left: 48px"> 6. Add Yeast to Your Juice  </h4>
            <div style="padding: 10px; padding-left: 48px;">
                <p>
                  You can use any yeast that's available, though champagne yeast is recommended. For a gallon of juice, you'll only need about 1/5 of the packet, which will be about the size of a nickel.
                </p>
              <ul>
                <li>
                  For those who do not have access to a nickel, a thin pile of yeast about ¾" (2 cm) in diameter should be sufficient.
                </li>
                <li>
                  Other kinds of yeast will take longer to ferment your juice into wine, and will often result in a weaker alcohol content.
                </li>
                <li>
                  You don't need to mix your yeast into the juice. It will eventually spread throughout the mixture naturally.
                </li>
              </ul>
            </div>

            <h4 style="padding-left: 48px"> 7. Insert Your Airlock  </h4>
            <div style="padding: 10px; padding-left: 48px;">
                <p>
                  Your airlock is the most important piece of equipment for your vinting, and can usually be bought at a brewing store for around a dollar. The airlock will allow the carbon dioxide that is released during the fermenting process to escape while keeping your juice/yeast from outside contaminants. Be sure to clean your airlock with soap and thoroughly rinse it before using.
                </p>
              <ul>
                <li>
                  Keep the original cap that came with your juice. You can use this later to reseal the container. Clean it with soap and hot water and store it in a baggie until you are ready to cap.
                </li>
                <li>
                  You may want to purchase a few airlocks. This way, you can brew multiple batches of wine at the same time.
                </li>
                <li>
                  For the airlock to function, you'll need to fill it with water. There should be a line on the airlock that says "Max." Fill it to this line.
                </li>
                <li>
                  To ensure the airlock is free of bacteria or other contaminants, you may want to use vodka to fill it. This can be especially useful if you don't plan on changing your airlock any time soon.
                </li>
              </ul>
            </div>

            <h4 style="padding-left: 48px"> 8. Wait For the Fermenation Stage to take Place  </h4>
            <div style="padding: 10px; padding-left: 48px;">
                <p>
                  For three-fourths to a full gallon of juice, it will usually take about two weeks for the fermentation to finish. You'll know when your juice is done fermenting by the lessening of the bubbling in your airlock.
                </p>
              <ul>
                <li>
                  At the beginning of the fermentation process, your airlock should release bubbles about every five seconds.
                </li>
                <li>
                  When your airlock bubbles once every 50 seconds or so, your wine is ready to be capped.
                </li>
                <li>
                  You can also wait until the airlock ceases to bubble at all.
                </li>
              </ul>
            </div>

            <h3 style="padding-top: 10px; padding-left: 24px;"> Storing Your Wine </h3>
            <hr>

            <div align="center">
                <img src="http://upload.wikimedia.org/wikipedia/commons/6/65/Wine_cellar.jpg" style="width: 55%; height: 45%; padding: 10px; padding-bottom: 18px; frameborder: 3px solid black;">
            </div>

            <h4 style="padding-left: 48px"> 9. Cap Your Wine  </h4>
            <div style="padding: 10px; padding-left: 48px;">
                <p>
                  Remove the airlock and seal the juice container with the cap it came with. At this point, you'll notice some sediment along the bottom of the container. This is the dead yeast that fermented your wine, and is a natural byproduct of fermentation.
                </p>
            </div>

            <h4 style="padding-left: 48px"> 10. Remove the Yeast Sediment from Your Wine   </h4>
            <div style="padding: 10px; padding-left: 48px;">
                <p>
                  If you leave the wine with the dead yeast for too long, it will affect the flavor. The yeast will be heavier than the liquid, so you can remove it easily by carefully pouring your wine into another suitable container, leaving the sediment at the bottom of your original one.
                </p>
              <ul>
                <li>
                  The dead yeast isn't harmful to you, so if you forget to remove it and don't want to waste the wine, you can still drink it.
                </li>
                <li>
                  Yeast byproduct is very nutritious and makes excellent compost. You might want to dump the yeast byproduct in with your compost pile.
                </li>
                <li>
                  When using a separate container, you should clean it thoroughly with soap and water before transferring wine to it to prevent contamination and bacterial growth.
                </li>
              </ul>
            </div>

            <h4 style="padding-left: 48px"> 11. Label Your Wine  </h4>
            <div style="padding: 10px; padding-left: 48px;">
                <p>
                  You'll want to include the date it finished fermenting as well as your process, like how much sugar you used, the kind of juice, etc. This has a dual purpose. Labeling your wine will help you remember how long its been aging and will also help you tighten up your process.
                </p>
              <ul>
                <li>
                  For example, you may find that using white sugar in your vinting takes too long to age. In this case, you might try a substitute, like honey.
                </li>
              </ul>
            </div>

            <h4 style="padding-left: 48px"> 12. Age Your Wine  </h4>
            <div style="padding: 10px; padding-left: 48px;">
                <p>
                  Immediately after you separate your wine and yeast byproduct, it's likely it won't taste very good. You'll want to let your wine age until it suits your tastes. In some cases, this may be as few as two weeks, in other cases it may take up to six months.
                </p>
              <ul>
                <li>
                  Wine vinted with white sugar often takes longer to age before it is palatable. It's likely that the more white sugar you add to your juice, the longer it will take the wine to age to an acceptable taste.
                </li>
              </ul>
            </div>

            <h4 style="padding-left: 48px"> 13. Store and Watch Your Wine  </h4>
            <div style="padding: 10px; padding-left: 48px;">
                <p>
                  You don't need to have a specialized room for storing your wine. However, a cool, dark place is traditional and will help the wine to age without other variables, like heat and light, influencing it. It's common for some yeast to remain active after capping, so be on the lookout for bulging containers.
                </p>
              <ul>
                <li>
                  If you notice a container is bulging, this is from the release of carbon dioxide from active yeast still in the mixture. Simply unscrew the cap to release the gas, then reseal the container.
                </li>
                <li>
                  If you've noticed bulging, it's likely sediment will appear at the bottom of your container once the remaining yeast expires. This means you may have to filter out yeast byproduct again.
                </li>
              </ul>
            </div>

            <h4 style="padding-left: 48px"> 14. Remove Spoiled Wine  </h4>
            <div style="padding: 10px; padding-left: 48px;">
                <p>
                  Wine professionally bottled can have a very long shelf life. Your homemade wine won't likely last as long, but it should still be good for a minimum of six months. Even so, a poor seal or contamination can occur. When checking your wine to see if it's still good, you should be on the lookout for:
                </p>
              <ul>
                <li>
                  <b> IF: </b> A strong odor of applesauce, burnt marshmallow, or one that is nutty. This is sign that your wine has oxidized, meaning it has become stale.
                </li>
                <li>
                  <b> IF: </b>  strong odor of cabbage, burnt rubber, or garlic. These are indicators that your wine had impurities in it that caused it to go bad.
                </li>
                <li>
                  A small taste of bad wine won't hurt you, so if you're unsure if your wine is good, take a sip. If the wine has a sharp vinegar taste that burns, or if the wine has a strong caramelized taste, like applesauce, your wine has likely gone bad.
                </li>
              </ul>
            </div>

            <h4 style="padding-left: 48px"> 15. Congrats! You have Succesfully Created Your Own Wine!! </h4>
            <div align="center">
                <img src="https://www.wikihow.com/images/thumb/c/c2/Make-Cheap-Wine-Step-14.jpg/aid49160-v4-728px-Make-Cheap-Wine-Step-14.jpg.webp" style="width: 55%; height: 45%; padding: 10px; padding-bottom: 18px; frameborder: 3px solid black;">
            </div>
        </div>
    </div>
  </div>
        <!-- END HTML CODE -->
vintner;
        // $this->template = $temp;
    }
}
