Capitali

Dato il seguente array crea una pagina che richiami se stessa dove ogni volta
viene proposto il nome di uno stato casuale, ma non ripetuto e l'utente deve
tentare di indovinare la capitale. Dopo che all'utente sono stati proposti 9 stati
da indovinare visualizzare la percentuale di risposte esatte e errate.
Alla fine chiedere se vuole effettuare un'altra partita.


# PHP introduzione a sessioni

## Parte iniziale

- (html) Creo pagina html
	- (html) Implemento il template html
	- (html) Scrivo il form
- Leggo le coppie di domande e risposta dal file JSON

- Estraggo una domanda casuale
	- Scrivo la domanda nel label form con il **short echo tag**
- Quando viene mandato il form, controllo che l'input mandato sia uguale alla risposta associata alla domanda
	- Scrivo a schermo se questa è giusta o meno


## Utilizzo delle sessioni

- Inizializzo la sessione
	- Controllo che la sessione sia già iniziata
	- Vari costanti `PHP_SESSION_??`
- Implemento delle variabili di sessione che fungono da contatori
	- `nQuestionsAnswered`: Numero di domande risposte
	- `nQuestionsCorrect`: Numero di domande risposte correttamente
- Quando rispondo a `n` domande nascondo il form e mostro a schermo
	- Quante domande risposte correttaemnte
	- Quante domande risposte
	- Rapporto di domande risposte corrette
- Do la possibilità al giocatore di resettare la partita
	- Divido le variabili iniziate con il `session_start` in un'altro if
	- **OPPURE** distruggo la sessione `session_destroy` e ne creo una nuova
- Faccio in modo che le domande non si ripetano più volte nella stessa partita
	- All'inizio della partita inserisco in un array tutte le domande e poi elimino quella data ad ogni round




