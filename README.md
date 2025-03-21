# Laboratoire 02

## Objectif

Mettre en pratique les notions vues à la deuxième semaine du cours sur les boucles `while` et `for`. Les notions précédentes sur les structures conditionnelles seront mobilisées également.

## Prérequis

Clonez ce dépôt à la racine du répertoire contenant les fichiers Web de votre serveur Apache. Utilisez ensuite un navigateur Web pour accéder à l'adresse `/lab02` sur votre serveur local.

Vous devriez voir une page avec le titre « Laboratoire 02 ».

Ouvrez ensuite le dossier `lab02` dans Visual Studio Code. Prenez connaissance des fichiers qu'il comprend. Vous constaterez qu'il y a un fichier `index.php` (page d'accueil du laboratoire) et plusieurs fichiers `exerciceX.php` où `X` est un numéro d'exercice.

## Page d'accueil du laboratoire

Pour commencer, il serait agréable d'avoir une liste de liens vers chaque exercice sur la page d'accueil (`index.php`), comme ceci:

![](images-readme/index.png)

Ajoutez donc le code suivant dans le fichier `index.php` pour générer la liste de liens:

```php
    <nav>
        <ul>
            <?php

            for ($i = 1; $i <= 9; $i++) {
            ?>
                <li>
                    <a href="exercice<?= $i ?>.php">Exercice <?= $i ?></a>
                </li>
            <?php
            }

            ?>
        </ul>
    </nav>
```

Ce code utilise une boucle `for` qui itère sur les nombres 1 à 9, correspondant aux numéros des 9 exercices. À chaque itération, un nouvel item de liste (`li`) est ajouté, avec un lien vers l'exercice correspondant. Ce lien utilise la variable d'itération de la boucle (`$i`). Cette variable prend la valeur `1` à la première itération, puis la valeur `2` à la deuxième, et ainsi de suite. C'est ce qui permet à chaque fois de générer un lien avec le bon numéro d'exercice.

Assurez-vous de bien comprendre la boucle avant de poursuivre.

## Exercice 1

### Exercice 1.1

Dans le fichier `exercice1.php`, ajoutez le titre *h1* `Exercice 1`, suivi du titre *h2* `Exercice 1.1`. Ensuite, utilisez une boucle **while** pour afficher les nombres 1 à 10 dans une liste non ordonnée (`ul`).

![](images-readme/exercice1_1.png)

### Exercice 1.2

Sous l'exercice 1.1, ajoutez un exercice 1.2. Pour celui-ci, utilisez une boucle **do...while** pour afficher de nouveau les nombres 1 à 10.

![](images-readme/exercice1_2.png)

### Exercice 1.3

Ajoutez ensuite un exercice 1.3. Dans celui-ci, utilisez une boucle **for** pour afficher les nombres 1 à 10.

### Exercice 1.4

Pour l'exercice 1.4, utilisez une boucle **while** pour afficher les nombres en ordre décroissant de 10 à 1.

![](images-readme/exercice1_4.png)

### Exercice 1.5

Pour l'exercice 1.5, faites la même chose qu'à l'exercice 1.4, mais cette fois-ci avec une boucle **for**.

### Exercice 1.6

Pour l'exercice 1.6, utilisez une boucle **while** pour afficher les nombres **pairs** de 0 à 20.

![](images-readme/exercice1_6.png)

### Exercice 1.7

Pour l'exercice 1.7, faites la même chose qu'à l'exercice 1.6, mais cette fois-ci avec une boucle **for**.

### Exercice 1.8

Utilisez une boucle **while** pour afficher les 20 premiers nombres de la suite de Fibonacci. Cette fois-ci, utilisez une liste ordonnée (*ol*) pour qu'on puisse facilement valider qu'il y a bien 20 nombres.

![](images-readme/exercice1_8.png)

### Exercice 1.9

Faites afficher de nouveau la suite de Fibonacci, mais cette fois-ci en utilisant une boucle **for**.

## Exercice 2

Dans le fichier `exercice2.php`, utilisez une boucle **for** pour afficher 1000 étoiles (caractère `*`) à l'écran. Le CSS lié à la page ajoutera des sauts de ligne automatiquement.

![](images-readme/exercice2.png)

Modifiez ensuite votre code pour afficher le nombre d'étoiles correspondant au paramètre `etoiles` passé par l'URL. Utilisez une valeur par défaut de 1000 si le paramètre est absent. Si le paramètre est présent mais invalide (non numérique), affichez un message d'erreur, puis n'affichez aucune étoile.

Une fois que tout fonctionne, modifiez votre code à nouveau pour prendre en compte un deuxième paramètre `saut`. Si ce paramètre est présent, il doit déterminer à quelle fréquence (après combien d'étoiles) votre code doit produire un saut de ligne. Si le paramètre est absent, ne générez pas de saut de ligne. Si le paramètre est présent mais invalide, affichez un message d'erreur.

> **NOTE:** Vous aurez besoin d'une structure conditionnelle à l'intérieur de votre boucle de même que de l'opérateur modulo (`%`) pour réaliser cette modification.

Voici le résultat attendu pour les paramètres `etoiles=100`et `saut=5`.

![](images-readme/exercice2_2.png)

## Exercice 3

Dans le fichier `exercice3.php`, affichez un paragraphe (balise `p`) à l'intérieur duquel vous afficherez en séquence les caractères `A`, puis `B`, `C` et `D`, en recommençant jusqu'à ce que vous ayez affiché autant de caractères que la valeur du paramètre `nombre` passé dans l'URL. Utilisez une valeur par défaut de 999 si le paramètre est absent.

Voici à quoi doit ressembler l'affichage pour la valeur par défaut (999):

![](images-readme/exercice3.png)

## Exercice 4

Il est tout à fait possible d'imbriquer des boucles, c'est-à-dire d'utiliser une boucle à l'intérieur d'une autre boucle. Par exemple:

```php
$x = 0;
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $x++; // équivalent de `$x += 1;`
    }
}
```

Notez que lorsqu'on imbrique des boucles **for**, il est essentiel d'utiliser des noms différents pour la variable d'itération (`$i` et `$j` dans notre exemple).

Dans le fichier `exercice4.php`, utilisez des boucles **for** imbriquées pour générer l'affichage suivant:

```
*
* *
* * *
* * * *
* * * * *
* * * * * *
* * * * * * *
* * * * * * * *
* * * * * * * * *
* * * * * * * * * * 
```

Comptez le nombre d'étoiles de votre dernière ligne pour vous assurer qu'il y en a bien 10.

Modifiez ensuite votre code pour utiliser un paramètre d'URL `nombre` déterminant le nombre de lignes à afficher (10 par défaut).

## Exercice 5

Dans le fichier `exercice5.php`, copiez vos boucles imbriquées de l'exercice 4. Modifiez-les ensuite pour produire l'affichage suivant:

```
                  *
                * *
              * * *
            * * * *
          * * * * *
        * * * * * *
      * * * * * * *
    * * * * * * * *
  * * * * * * * * *
* * * * * * * * * * 
```

Assurez-vous encore une fois que vous avez bien 10 étoiles sur la dernière ligne. Vous devez de nouveau utiliser le paramètre `nombre` s'il est présent.

## Exercice 6

Dans le fichier `exercice6.php`, ajoutez du code qui:

1. Reçoit un paramètre `nombre` passé dans l'URL.
2. Détermine le nombre de fois que `nombre` peut être multiplié par 2 avant que le résultat dépasse 100 000.
3. Affiche le résultat à l'écran.

Vous devez valider que le paramètre `nombre` est présent et numérique, et qu'il est situé entre 1 et 50&nbsp;000 inclusivement.

![](images-readme/exercice6.png)

## Exercice 7

Dans le fichier `exercice7.php`, ajoutez le code nécessaire pour générer, à l'aide d'une boucle, une liste déroulante dont la première option est `Sélectionnez un nombre`, et dont les options suivantes sont les nombres 1 à 100.

![](images-readme/exercice7.png)

## Exercice 8

Dans le fichier `exercice8.php`, ajoutez le code nécessaire, à l'aide d'une boucle et d'une structure conditionnelle, pour:

* Afficher les nombres de 1 à 100
* Si un nombre est divisible par 3, afficher `Fizz` à la place du nombre
* Si un nombre est divisible par 5, afficher `Buzz` à la place du nombre
* Si un nombre est divisible par 3 et 5, afficher `FizzBuzz` à la place du nombre

![](images-readme/exercice8.png)

Vous venez de faire le *FizzBuzz test*, un exercice classique que des employeurs demandent de faire en entrevue d'embauche!

## Exercice 9

Dans le fichier `exercice9.php`, utilisez des boucles **for** imbriquées pour générer un tableau de 10 lignes par 10 colonnes qui affiche les nombres de 0 à 99.

![](images-readme/exercice9.png)
