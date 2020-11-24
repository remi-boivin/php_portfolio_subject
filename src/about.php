<section class="section about-me" data-section="section1">
  <div class="container">
    <div class="section-heading">
      <h2>About Me</h2>
      <div class="line-dec"></div>
      <span>
        <?php echo $_SESSION['DESCRIPTION'] ?>
      </span>
    </div>
    <div class="left-image-post">
      <div class="row">
        <div class="col-md-6">
          <div class="right-text">
            <h4>Schools</h4>
            <?php
            $reponse = $conn->query('SELECT * from FORMATIONS');
            while ($donnees = $reponse->fetch()) {?>
              <h3>
                <?php echo $donnees['TITLE'];?>
              </h3>
              <?php
              echo $donnees['START_DATE'].' - '.$donnees['END_DATE'].' <b>'.$donnees['SCHOOL'];?></b>
               <p>
                <?php echo $donnees['DESCRIPTION'];
              }?>
            </p>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="right-image-post">
    <div class="row">
      <div class="col-md-6">
        <div class="right-text">
          <h4>Experiences</h4>
          <p>
            <?php
            $reponse = $conn->query('SELECT * from EXPERIENCES');
            while ($donnees = $reponse->fetch()) {?>
              <h3>
                <?php echo $donnees['TITLE'].' - '.$donnees['COMPANY'] ;?>
              </h3>
              <?php
                echo $donnees['START_DATE'].' - '.$donnees['END_DATE']
                ?> <p>
                <?php echo $donnees['DESCRIPTION'];
              }?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
