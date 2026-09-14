## Produit
idProduit -> nomProduit , prixProduit

## Commande
idCommande -> numeroCommande , dateCommande 

## CommandeProduit
idProduit , idComande -> quantiteCommande

## Client
idClient -> nomClient , emailClient


## Les Groupes
Commande (
    idCommande,
    numeroCommande,
    dateCommande,
    idClient
)

Produit (
    idProduit,
    nomProduit,
    prixProduit
)

commandeProduit (
    idProduit,
    idCommande,
    quantiteCommande
)

client (
    idClient,
    nomClient,
    emailClient
)