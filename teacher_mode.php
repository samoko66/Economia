<!DOCTYPE html>
<html>
	<head>
		<title>Essai QCM</title>
		<meta charset="utf-8">
		<style>
		
		
			.rad_label
			{
				display: inline;
				margin: 10px;
			}
			
			input[type=text]
			{
				display: block;
				margin : 10px;
				width: 300px;
				height: 30px; 
			}
			
			input[type=radio], .rad_label
			{
				position: relative;
				left: 330px;
				bottom: 40px;
			}
		</style>
	</head>
	<body>
		
	
	
	<script src="jquery.js"></script>
	
	<script>
	$(function() {
	
	var q_id = 1; // Initialisation des id du formulaire qui nous serviront plus tard en PHP.
	var r_id = 1;
	
	function q_ins_id(q_id)  {
		'id="' + q_id + '" name="' + q_id + '"'}; // Regroupement des attributs HTML des questions et réponses.
	function r_ins_id(r_id)  {
		r_ins_id = 'id="' + r_id + '" name="' + r_id + '"'};
		
	var qcm_name = '<input type="text" id="qcm_name" name="qcm_name" value="Nom du QCM"></input>'; // Regroupement HTML du champ de nom du QCM.
	
	function q(q_id) {
	'<input type="text"' + q_ins_id(q_id) + ' value="Question n°' + q_id + '"></input>';}; // Regroupement HTML des questions et réponses.
	function r(r_id) {
	'<input type="text"' + r_ins_id(r_id) + ' value="Réponse n°' + r_id + '"></input>';}; 
	
	var add_ques = '<input type="button" value="Ajouter une question" class="add_ques"></input>'; // Regroupement HTML des boutons d'ajouts de question et réponses.
	var add_answ = '<input type="button" value="Ajouter une réponse" class="add_answ"></input>';
	function rad_v() {
	'<p class="rad_label">V</p><input type="radio"' + r_ins_id() + 'value="v"></input>';}; // Regroupement HTML des boutons radios qui nous serviront plus tard en PHP.
	function rad_f() {
	'<p class="rad_label">F</p><input type="radio"' + r_ins_id() + 'value="f"></input>';};
	
	$('<input type="button" value="Créer un QCM"></input>').appendTo($('body')).click(function() { // Création du QCM
	
		$(this).hide(); // On cache le bouton pour éviter un reset du formulaire.
		$(qcm_name).appendTo($('body')); // le champ nom du QCM est crée.
		
		
		$(add_ques).appendTo($('body')).click(function add_ques() { // On crée le bouton d'ajout de questions.
		
			$(this).hide(); // On cache le bouton pour éviter un reset.
			$(q()).appendTo($('body')) // Un champ de question s'ouvre.
			q_id++; // On incrémente la variable d'identifiant de questions.
			
				$(add_answ).appendTo($('body')).click(function add_answ() { // On crée le bouton d'ajout de réponses.
					
				$(r()).appendTo($('body')); // Insertion du champ réponse.
				$(rad_v()).appendTo($('body')); // Insertion des boutons radios V(rai) & F(aux).
				$(rad_f()).appendTo($('body'));
				r_id++; // On incrémente la variable d'identifiant de questions.

				});
		
			});		
	
		});	
	});
	
	</script>
	</body>
	
	
</html>