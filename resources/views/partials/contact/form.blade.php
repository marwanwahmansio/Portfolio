<link href="css/form.css" rel="stylesheet">
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFirstName">Prénom</label>
      <input type="text" class="form-control" id="inputFirstName" placeholder="Votre prénom">
    </div>
    <div class="form-group col-md-6">
      <label for="inputLastName">Nom</label>
      <input type="text" class="form-control" id="inputLastName" placeholder="Votre nom">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="email@example.com">
  </div>
  <div class="form-group">
    <label for="inputSubject">Objet</label>
    <input type="text" class="form-control" id="inputSubject" placeholder="Objet de votre message">
  </div>
  <div class="form-group">
    <label for="inputMessage">Message</label>
    <textarea class="form-control" id="inputMessage" rows="5" placeholder="Écrivez votre message ici"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
