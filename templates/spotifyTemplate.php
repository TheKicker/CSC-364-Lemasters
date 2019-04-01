<?php
require_once (FS_TEMPLATES . 'templateEngine.php');

class spotifyTemplate extends templateEngine
{
    /**
     * This is the html code that makes up the template.  This will
     * be unique to and set in eacb instance of the class
     *
     * @var null
     */
    public function Spotify()
    {
        echo <<<Spotify
        <!-- PASTE HTML CODE HERE -->

        <div align:center style="padding:72px;">
          <h2 style="text-shadow: 0.08em 0.08em gold"> Secret Shopper Playlist </h2>
          <h4 style="padding: 15px; border-style: dotted;"> <b> Warning </b> This playlist does not stop upon closing browser tab -- make sure to 'cork' after you finish enjoying! </h4>
          <iframe src="https://open.spotify.com/embed/user/spotify/playlist/37i9dQZF1DWXi7h4mmmkzD" width="100%" height="75%" frameborder="3px solid black" allowtransparency="true"></iframe>
          </div>

        <!-- END HTML CODE -->
Spotify;

    }
}
