<h2> Candidatures </h2>

<ul>
	<?php
		foreach($listcandidature as $candidature)
			{
?>
	<li>
	<?= date('d-m-Y', strtotime($candidature->date_envoi())) ?> : <?= $candidature->poste(); ?> <?= $candidature->n_annonce?> 
	</li>			
<?php
		}
?>
</ul>
