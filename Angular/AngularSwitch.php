<!DOCTYPE html>
<html>
<head>
	<title>Switch</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="">
<form>
	<label>Animal History</label>
	<br>
	<input type="radio" ng-model="animal" value="dog">Dog
	<input type="radio" ng-model="animal" value="elephant">Elephant
	<input type="radio" ng-model="animal" value="cat">Cat
</form>
<div ng-switch="animal">
	<div ng-switch-when="dog">
		<h3>HERE History of Dog</h3>
			<pre>he domestic dog's origin includes the dog's genetic divergence from the wolf, its domestication, and its development into dog types and dog breeds. The dog is a member of the genus Canis, which forms part of the wolf-like canids, and was the first species and the only large carnivore to have been domesticated.[14][27] Genetic studies comparing dogs with modern wolves show reciprocal monophyly (separate groups).</pre>
	</div>
	<div ng-switch-when="elephant">
		<h3>HERE History of Elephant</h3>
		<pre>The word "elephant" is based on the Latin elephas (genitive elephantis) ("elephant"), which is the Latinised form of the Greek ἐλέφας (elephas) (genitive ἐλέφαντος (elephantos[2]), probably from a non-Indo-European language, likely Phoenician.[3] It is attested in Mycenaean Greek as e-re-pa (genitive e-re-pa-to) in Linear B syllabic script.[4][5] As in Mycenaean Greek, Homer used the Greek word to mean ivory, but after the time of Herodotus, it also referred to the animal.[2] The word "elephant" appears in Middle English as olyfaunt (c.1300) and was borrowed from Old French oliphant (12th century)</pre>
	</div>
	<div ng-switch-when="cat">
		<h3>HERE History of Cat</h3>
		<pre>The origin of the English word 'cat', Old English catt, is thought to be the Late Latin word cattus, which was first used at the beginning of the 6th century.[18] It was suggested that the word 'cattus' is derived from an Egyptian precursor of Coptic ϣⲁⲩ šau, "tomcat", or its feminine form suffixed with -t.[19] The Late Latin word is also thought to be derived from Afro-Asiatic languages.[20] The Nubian word kaddîska "wildcat" and Nobiin kadīs are possible sources or cognates.[21] The Nubian word may be a loan from Arabic قَطّ‎ qaṭṭ ~ قِطّ qiṭṭ. It is "equally likely that the forms might derive from an ancient Germanic word, imported into Latin and thence to Greek and to Syriac and Arabic".[22] The word may be derived from Germanic and Northern European languages, and ultimately be borrowed from Uralic, cf. Northern Sami gáđfi, "female stoat", and Hungarian hölgy, "stoat"; from Proto-Uralic *käďwä, "female (of a furred animal)"</pre>
	</div>
</div>
</body>
</html>