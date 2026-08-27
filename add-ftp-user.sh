#!/bin/bash

BASE_FTP_PATH="/ftp"

# Controlla se sono stati passati i parametri corretti
if [ "$#" -lt 3 ]; then
    echo "Uso: $0 <nome_utente> <password> <tipo: standard|guest> [cartella_condivisa_per_guest]"
    echo "Esempi:"
    echo "  $0 marco pass123 standard"
    echo "  $0 luca guest123 guest marco  (crea guest con accesso alla cartella di marco)"
    exit 1
fi

USR=$1
PWD=$2
TYPE=$3
FOLDER_GUEST=$4
CONTAINER="mio-ftp-alpine"

# 1. Gestione dei percorsi delle cartelle
if [ "$TYPE" == "guest" ]; then
    if [ -z "$FOLDER_GUEST" ]; then
        echo "❌ Errore: Per gli utenti guest devi specificare a quale cartella dare accesso."
        exit 1
    fi
    FOLDER="$BASE_FTP_PATH/$CARTELLA_GUEST"
    OPT_GUEST="-R"
else
    FOLDER="$BASE_FTP_PATH/$UTENTE"
    OPT_GUEST=""
    
    # Crea la cartella reale e assegna i permessi corretti (solo per utenti standard)
    echo "📂 Creazione cartella per l'utente..."
    docker exec $CONTAINER mkdir -p "$FOLDER"
    docker exec $CONTAINER chown -R ftpuser:ftpgroup "$FOLDER"
fi

# 2. Creazione dell'utente passando la password in modo automatico
echo "👤 Creazione utente FTP in corso..."
echo -e "${PASSWORD}\n${PASSWORD}" | docker exec -i $CONTAINER pure-pw useradd "$USR" -u ftpuser -d "$FOLDER" $OPT_GUEST

# 3. Aggiornamento del database senza riavviare il server
echo "🔄 Aggiornamento database FTP..."
docker exec $CONTAINER pure-pw mkdb

echo "✅ Fatto! L'utente '$UTENTE' è attivo immediatamente."
