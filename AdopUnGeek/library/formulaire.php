<?php


function form_inscription(){?>
<form method="get" action="/treatment">
<div>
  <input type="text" name="nom" class="nom" placeholder="Your Name" />
  </div>
  <div>
  <input type="password" name="nom" class="nom" placeholder="Your password" />
  </div>
  <div>
  <input type="text" name="prenom" class="email" placeholder="Email Access"/>
  </div>
  <select>
  <option value="subject" selected disabled>SEXE</option>
  <option>Mâle</option>
  <option>Femelle</option>
<?php }
function form_recherche_ingenieur(){}
function form_recherche_travail(){}
function form_Editer_profil_ingenieur(){}

function form_connexion(){
    ?><div>
  <textarea name="comments" class="comments"  placeholder="Your message"></textarea>
  </div>
  <div>
  <input type="submit" name="connexion" class="submit" value="M'inscrire" />
  </div>
</form>
</div>

<?php }