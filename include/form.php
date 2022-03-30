
<section class="container">
  <div class="row col-6  ">
    <form action="index.php" method="post">

      <div class="form-group ">
        <label for="exampleInputnom1">Nom</label>
        <input type="text" class="form-control" name="firstname">
      </div>

      <div class="form-group">
        <label for="exampleInputprenom1">Prénom</label>
        <input type="text" class="form-control" name="lastname">
      </div>

      <div class="form-group">
        <label for="exampleInputage1">Age</label>
        <input type="text" class="form-control" name="agee">
      </div>

      <div class="form-group">
        <label for="exampleInputtaille1">Taille</label>
        <input type="number" step="0.01"min="0.1" max="3" class="form-control" name="size">
      </div>


      <div class="form-check">
        <input class="form-check-input" type="radio" name="work"  value="formateur" checked>
        <label class="form-check-label" for="exampleRadios1">formateur</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="work"  value="aprenant">
        <label class="form-check-label" for="exampleRadios2">aprenant</label>
      </div>

    <input class="btn btn-primary col-3 " type="submit" name="submit" value="submit"> 

    </form>
  </div>
</section>
