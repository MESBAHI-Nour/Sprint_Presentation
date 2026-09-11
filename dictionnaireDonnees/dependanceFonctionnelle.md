## Produit
idProduit -> nomProduit , prixProduit

## Commande
idCommande -> numeroCommande , dateCommande , quantiteCommande

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
