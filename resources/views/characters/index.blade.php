@extends("app")
@section("title", "Tous les articles")
@section("content")

	<h1>Tous les personnages</h1>

	<p>
		<!-- Lien pour créer un nouveau personnage : "characters.create" -->
		<a href="{{ route('characters.create') }}" title="Créer un personnage" >Créer un nouveau personnage</a>
	</p>

	<!-- Le tableau pour lister les personnages -->
	<table border="1" >
		<thead>
			<tr>
				<th>Titre</th>
				<th colspan="2" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de Character -->
			@foreach ($characters as $character)
			<tr>
				<td>
					<!-- Lien pour afficher un Character : "characters.show" -->
					<a href="{{ route('characters.show', $character) }}" title="Voir le personnage" >{{ $character->title }}</a>
				</td>
				<td>
					<!-- Lien pour modifier un Character : "characters.edit" -->
					<a href="{{ route('characters.edit', $character) }}" title="Modifier le personnage" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un Character : "characters.destroy" -->
					<form method="POST" action="{{ route('characters.destroy', $character) }}" >
						<!-- CSRF token -->
						@csrf
						<!-- <input type="hidden" name="_method" value="DELETE"> -->
						@method("DELETE")
						<input type="submit" value="x Supprimer" >
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
@endsection