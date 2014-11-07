#Monographie
##Obsolescence programmée

###Rapport
####Structure et fichiers :
#####Fichiers 
Le fichier à compiler est le *main.tex*.    
Les fichiers *introduction.tex* et *conclusion.tex* contiennent l'introduction et la conclusion.    
Le fichier *monographie.cls* contient le style du projet. C'est l'équivalent du css en web.   
Les autres fichiers sont générés automatiquement. S'ils sont supprimés, normalement ce n'est pas grave, cependant dans certain cas, ça peut poser des problèmes (cf si on utilise un glossaire ... ce qui risque d'être le cas). Il est donc plus prudent de ne pas supprimer ces fichiers.   
Le fichier *main.pdf* est le résultat voulu. Une fois celui ci produit, il est totalement indépendant des autres fichiers.  

#####Structure du projet
Les répertoire *c1*,*c2* et *c3* contiennent les chapitres, ainsi que tout leur contenu. Prenons l'exemple de *c1* : 
*c1* contient le fichier *chapter.tex*, qui contient du contenu. Les trois sous répertoire sont des sections, qui sont eux même organisé de même manière que *c1*.    
Le répertoire Images contient toutes les images que l'on utilisera dans le projet ( ne pas utiliser png, mais jpg ou pdf). 
####Utilisation
#####main.tex
Le fichier *main.tex* contient toutes les inclusions. Il est donc important de ne **pas** modifier la partie encpsulée par document.   
Les champs `title`, `author`, présent sur la page de garde sont défini et donc modifiable dans l'entete de ce document.   

#####monographie.cls
Contient le style du rapport. Il est assymilable à l'entete du fichier *main.tex*, qui aurait été séparé dans une autre fichier. 

#####\*.tex\\{main}
Contenu brut. Les balise `chapter`,`section` ou `subsection` contiennent le nom du chapitre, de la section ou de la subsection. 
