Description du Factory Method en PHP
Le pattern Factory Method est un modèle de conception créatif qui fournit une interface pour créer des objets dans une superclasse, mais permet aux sous-classes de modifier le type d'objets qui seront créés. Cela permet de créer des objets sans avoir besoin de spécifier la classe exacte de l'objet à créer.

Exemples Concrets :
Supposons que nous ayons une application qui gère différents types de produits. Nous voulons une méthode flexible pour créer ces produits sans coupler étroitement le code client avec les classes spécifiques des produits.


Explication du Code
1. Interface Product : C'est une interface simple qui définit la méthode getType(). Toutes les classes de produits doivent implémenter cette interface.

2. Classes ConcreteProductA et ConcreteProductB : Ce sont des implémentations concrètes de l'interface Product.

3. Interface Factory : C'est une interface qui déclare la méthode createProduct(). Toutes les factories doivent implémenter cette interface.

4. Classes ConcreteFactoryA et ConcreteFactoryB : Ce sont des implémentations concrètes de l'interface Factory. Chaque factory sait comment créer un type spécifique de produit.

5. Fonction clientCode : Cette fonction accepte une factory en paramètre, utilise la factory pour créer un produit, puis affiche le type de produit créé.

Ce modèle permet d'ajouter facilement de nouveaux types de produits et de factories sans modifier le code client. Vous pouvez simplement ajouter de nouvelles implémentations de Product et de Factory.