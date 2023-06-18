<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../style/details.css" />
    <title>Détails</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/accueil">Gestion RH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/create">Ajouter un employe</a>
          </li>
        </ul>
        
        <a class="nav-link" href="/logOut" id="logout">Se deconnecter</a>
      </div>
    </div>
  </nav>
    <div class="div_details">
        <form action="" method="" class="form_details">
            @csrf
          <div>
            <a href="/accueil" >Liste des employés</a>
          </div>
          <div>
            <h1 class="form_title">Détails {{ $employe->nom }} {{ $employe->prenom }}</h1>
          </div>
          <br />
          <div>
            <label>
              Nom : <br />
              <input type="text" name="nom" placeholder="Nom :"  class="input_details" value="{{ $employe->nom }}" readonly />
            </label>
          </div>
          
          <br />
          <div>
            <label>
              Prénom : <br />
              <input type="text" name="prenom" placeholder="Prenom :"  class="input_details" value="{{ $employe->prenom }}" readonly />
            </label>
          </div>
          {{-- @if ($errors->has('prenom'))
          <div class="erreur">*Prenom est obligatoire</div>
          @endif --}}
          <br />
  
          <div>
            <label>
              Tél : <br />
              <input type="text" name="tel" placeholder="Numéro :"  class="input_details"  value="{{ $employe->tel }}" readonly/>
            </label>
          </div>
          {{-- @if ($errors->has('tel'))
          <div class="erreur">*Tél est obligatoire</div>
          @endif --}}
          <br />
  
          <div>
            <label>
              Adress : <br />
              <input
                type="text"
                name="adresse"
                placeholder="Adress :"
              class="input_details" value="{{ $employe->adresse }}"  readonly/>
            </label>
          </div>
          {{-- @if ($errors->has('adresse'))
          <div class="erreur">*Adresse est obligatoire</div>
          @endif --}}
          <br />
  
          <div>
            <label>
              Date de naissance : <br />
              <input
                type="date"
                name="date_naissance"
                placeholder="Date de naissance :"
              class="input_details"  value="{{ $employe->date_naissance }}" readonly/>
            </label>
          </div>
          {{-- @if ($errors->has('date_naissance'))
          <div class="erreur">*Date est obligatoire</div>
          @endif --}}
          
          <br />
          <div>
            <label>
              Poste : <br />
              <input
                type="text"
                name="poste"
                placeholder="Poste :"
              class="input_details"  value="{{ $employe->poste }}" readonly/>
            </label>
          </div>
          {{-- @if ($errors->has('poste'))
          <div class="erreur">*Poste est obligatoire</div>
          @endif --}}
          <br />
          <div>
            <label>
              Salaire : <br />
              <input
                type="number"
                name="salaire"
                placeholder="Salaire :"
                min="0"
             class="input_details"  value="{{ $employe->salaire }}" readonly/>
            </label>
          </div>
          {{-- @if ($errors->has('salaire'))
          <div class="erreur">*Salaire est obligatoire</div>
          @endif --}}
          <br />
          <div>
            <a href="/employe/{{ $employe->id }}/attestation">Télécharger Attestation</a>
          </div>
          {{-- <div>
            <input
              type="submit"
              name="modifier"
              value="Modifier"
              class="modifier"
            />
          </div> --}}
          
          
        </form>
</body>
</html>