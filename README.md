# Klimkaffee

[TOC]

## Database

Op dit ogenblik is er een lokale database, genaamd '**klimkaffee**' om te testen totdat Pieter-Jan er één online zet. Indien dit gebeurd is, moet de database connectie in **wp-config.php** aangepast worden.

## Gulp

Om gulp te kunnen gebruiken, moet je zien dat deze eerst geïnstalleerd is. Dit doe je door het commando

>sudo npm install gulp-cli -g 

uit te voeren in je terminal.

## SASS

Om SASS te gebruiken in dit project, navigeer je via je terminal naar de map **themes** in **wp-content**.

Run hier het commando

>npm install

Hierna worden alle node-modules die gedefinieerd zijn in de **package.json** binnengehaald.

## Run Gulp

Gulp kan je gemakkelijk starten door het commando **gulp**.
>NOTE: je kan dit enkel runnen in de map waar de **gulpfile.js** staat.

## Schrijf SASS

Om SASS te schrijven, schrijf je in een scss file, die zich in de **gulp-resources** map bevindt.

In SASS kan je werken met variabelen. Deze stockeer je in een aparte file onder de map **components** als volgt

> $color: #kleurcode;

Deze file moet je implementeren via de volgende lijn code

> @import "components/_filename.scss";

Hierna kan je alle gedefinieerde variabelen gebruiken.

Have fun coding!