#!/bin/bash
# Indique au système que l'argument qui suit est le programme utilisé pour exécuter ce fichier
# En règle générale, les "#" servent à mettre en commentaire le texte qui suit comme ici

echo Mise en ligne du Projet_PRS

git init
git add *
git commit -m "Mise à jour du projet WEB"
git branch ALeb
git checkout ALeb
git remote add origin https://github.com/jcassou/Projet-WEB
git remote add ALeb https://github.com/jcassou/Projet-WEB
git remote -v
git push -f origin ALeb
 
exit 0
