<?php
require_once (FS_TEMPLATES . 'templateEngine.php');

class investorRelationsTemplate extends templateEngine
{
    /**
     * This is the html code that makes up the template.  This will
     * be unique to and set in eacb instance of the class
     *
     * @var null
     */
    public function investor()
    {
        echo <<<investor
        <!-- PASTE HTML CODE HERE -->
        <div style="padding-top: 18px;">
        <div class="container" align="center">
          <div style="padding-bottom: 48px;">
              <h1> FY18 Second Quarter Results </h1>
                <h4> Tuesday, May 1st, 2018 <h4>
                <h5> 2:00 p.m. PT / 5:00 p.m. ET </h5>
              <a href="tel:234-736-6808"> Listen to the Conference Call / View Webcast </a>
            </div>
        <hr>

        <div align="left" style="padding: 15px;">
          <h2> Friends and Family, </h2>
          <h5> March 15, 2018 </h5>
          <div style="padding-left: 18px; padding-top: 24px;">
                <p>Tortor dignissim convallis aenean et. Sed euismod nisi porta lorem mollis aliquam. Erat velit scelerisque in dictum non consectetur. Blandit libero volutpat sed cras. Mattis rhoncus urna neque viverra.</p>
                <p>Montes nascetur ridiculus mus mauris vitae ultricies. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Elit ullamcorper dignissim cras tincidunt. Et egestas quis ipsum suspendisse. Cursus euismod quis viverra nibh. Euismod quis viverra nibh cras pulvinar. Porttitor eget dolor morbi non arcu risus quis varius.</p>
                <p> Diam ut venenatis tellus in metus vulputate eu scelerisque felis. Viverra nam libero justo laoreet sit amet cursus. Eu volutpat odio facilisis mauris sit amet massa vitae. Egestas diam in arcu cursus euismod. Et tortor at risus viverra adipiscing at. Rhoncus urna neque viverra justo nec ultrices. Egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Scelerisque eleifend donec pretium vulputate sapien nec. Blandit massa enim nec dui nunc mattis enim. </p>
            </div>
            <div style="padding-left: 70%; padding-bottom: 18px;">
            <h3> Mr. Vino DeMerlot </h3>
            <h5> Chief Wine Officer </h5>
            </div>
          <hr>

          <div>
          <h2 style="padding-top: 18px; padding-bottom: 18px;"> Vino Green Earth Initiative </h2>
          <div style="padding: 10px;">
            Quisque id diam vel quam elementum. Leo in vitae turpis massa sed elementum tempus egestas sed. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Tristique sollicitudin nibh sit amet commodo. Porta non pulvinar neque laoreet suspendisse interdum. Viverra nam libero justo laoreet sit amet.
          </div>
            <div class="row mb-2" style="padding-top: 15px;">
              <div class="col-lg-4">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                    <img src="https://i.makeagif.com/media/7-26-2015/QqLYna.gif" height="29%" width="100%" alt="Guest profile picture" style="#">
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                    <div>
                    <div>
                        <h4> Community Involvement </h4>
                        <div style="padding: 5px;">
                          Neque gravida in fermentum et sollicitudin ac orci phasellus egestas. Viverra ipsum nunc aliquet bibendum.
                        </div>
                        <h4> Sustainable Energy </h4>
                        <div style="padding: 5px;">
                          Neque gravida in fermentum et sollicitudin ac orci phasellus egestas.  Duis at tellus at urna condimentum mattis pellentesque id nibh. Suscipit tellus mauris a diam maecenas.
                        </div>
                        <h4> Fitbit Partnership </h4>
                        <div style="padding: 5px;">
                          Viverra ipsum nunc aliquet bibendum. Duis at tellus at urna condimentum mattis pellentesque id nibh. Suscipit tellus mauris a diam maecenas.
                        </div>

                      </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

            </div>
          </div>
        </div>
        <!-- END HTML CODE -->
investor;

    }
}
