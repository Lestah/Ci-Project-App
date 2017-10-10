<div class="large-12 columns">
        <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle></button>
          <div class="title-bar-title">Menu</div>
        </div>

        <div class="top-bar" id="example-menu">
          <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
              <li class="menu-text">FLIP TOP</li>
              <li class="has-submenu">
                <a href="#0">Isabuhay</a>
                <ul class="submenu menu vertical" data-submenu>
                  <li><a href="#0">Aspakan 1</a></li>
                  <li><a href="#0">Aspakan 2</a></li>
                  <li><a href="#0">Dospordos</a></li>
                </ul>
              </li>
              <li><a href="#0">Loonie vs Zaito</a></li>
              <li><a href="#0">Shehyee vs Sinio</a></li>
            </ul>
          </div>
          <div class="top-bar-right">
            <ul class="menu">
              <li><input type="search" placeholder="Search"></li>
              <li><button type="button" class="button">Search</button></li>
            </ul>
          </div>
        </div>
      </div>
</div>

<div class="row">
    <div class="large-2 columns">
    <br>
        <div class="menu_simple">
          <ul>
            <li><a href="<?php echo base_url(); ?>index.php/fliptop/battles_by_cat/isabuhay">isabuhay</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/fliptop/battles_by_cat/ahon">ahon</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/fliptop/battles_by_cat/aspakan">aspakan</a></li>
  
          </ul>
       </div>
    </div>
    <div class="large-10 columns">
    
    
    <!--<video width="720" height="720" controls>
    <source src="<?php //echo base_url(); ?>assets/css/vid/<?php //echo $play['video']; ?>" type="video/mp4">
    </video>-->
      <br>
      <div class="row" style="margin-left: 100px;">
          <?php echo $play['video']; ?>
      </div>

    </div><!--end of div col-10-->
</div><!--end of div row-->