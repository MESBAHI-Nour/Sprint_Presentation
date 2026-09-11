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

commandeProduit (
    idProduit,
    idCommande,
    quantiteCommande
)

Produit (
    idProduit,
    nomProduit,
    prixProduit
)

client (
    idClient,
    nomClient,
    emailClient
)