<section class="section my-work" data-section="section3">
  <div class="container">
    <div class="section-heading">
      <h2>My Work</h2>
      <div class="line-dec"></div>
      <span>This is all my work</span
      >
    </div>
    <div class="row">
      <div class="isotope-wrapper">
        <form class="isotope-toolbar">
          <label
          ><input
          type="radio"
          data-type="*"
          checked=""
          name="isotope-filter"
          />
          <span>all</span></label
          >
          <label
          ><input
          type="radio"
          data-type="people"
          name="isotope-filter"
          />
          <span>people</span></label
          >
          <label
          ><input
          type="radio"
          data-type="nature"
          name="isotope-filter"
          />
          <span>nature</span></label
          >
          <label
          ><input
          type="radio"
          data-type="animals"
          name="isotope-filter"
          />
          <span>animals</span></label
          >
        </form>
        <div class="isotope-box">
          <?php
          $reponse = $conn->query('SELECT * from PORTFOLIO');
          while ($donnees = $reponse->fetch()) {?>
            <p>
              <div class="isotope-item" data-type="<?php echo $donnees['DATA_TYPE']?>">
                <figure class="snip1321">
                  <img
                  src="assets/images/portfolio-01.jpg"
                  alt="sq-sample26"
                  />
                  <figcaption>
                    <a
                    href="assets/images/portfolio-01.jpg"
                    data-lightbox="image-1"
                    data-title="Caption"
                    ><i class="fa fa-search"></i
                      ></a>
                      <h4><?php echo $donnees['TITLE'];?></h4>
                      <span><?php echo $donnees['CREATION_DATE'];?></span>
                      <span><?php echo $donnees['DESCRIPTION'];?></span>
                    </figcaption>
                  </figure>
                </div>
              <?php } ?>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
