# Session


## Cookies:

- I cookie sono contenuti in file nel browser del client, 
- I cookie possono essere impostati per scadere in una determinata data e ora, oppure possono essere impostati come "session cookies" che scadono quando il browser viene chiuso.
- I cookie possono essere letti dal client e dal server, il che significa che le informazioni contenute nei cookie possono essere accessibili ai malintenzionati, in particolare se il cookie non è protetto da flag come HttpOnly e Secure.
- I cookie sono spesso utilizzati per il tracciamento dell'utente e per la pubblicità mirata.

[Documentazione PHP `setcookie()`](https://www.php.net/manual/en/function.setcookie.php)

## Tag di sicurezza dei cookies

**Secure**: Quando l'etichetta "secure" viene impostata su un cookie, viene indicato al browser di inviare il cookie solo su una connessione sicura HTTPS. Ciò significa che il cookie può essere inviato al server solo se la richiesta viene effettuata su una connessione sicura. Ciò aiuta a prevenire che il cookie venga intercettato o manomesso da un attaccante che sta intercettando la rete.

**HttpOnly**: Quando l'etichetta "httponly" viene impostata su un cookie, viene indicato al browser di impedire agli script lato client di accedere al cookie. Ciò significa che il cookie può essere accessibile solo dal server, non da JavaScript o altri codici lato client. Ciò aiuta a prevenire gli attacchi di scripting tra siti (XSS), in cui un attaccante inserisce codice dannoso in una pagina web per rubare dati sensibili, come i cookie di sessione.\ 

Per impostare i parametri di default dei cookie: [Documentazione PHP `session_get_cookie_params()`](https://www.php.net/manual/en/function.session-set-cookie-params.php)



### Dove vengono salvati

- **Firefox (Linux)**: `/home/<user>/.mozilla/firefox/<profile-folder>/cookies.sqlite`
- **Firefox (Windows)**: `%APPDATA%\Mozilla\Firefox\Profiles\<profile folder>\cookies.sqlite`

Nel mio caso: `/home/oxio2/.mozilla/firefox/bcjt4i0r.default-esr`

## Sessioni:

- Le sessioni sono un meccanismo di gestione dello stato delle applicazioni web che memorizza le informazioni dell'utente lato server.
- Le sessioni utilizzano un identificatore di sessione univoco (solitamente un cookie) per mantenere lo stato dell'utente tra le richieste. (`PHPSESSID`)
- Le sessioni sono in genere più sicure dei cookie, poiché le informazioni memorizzate nella sessione non sono accessibili dal client.
- Le sessioni hanno una durata predefinita e possono essere distrutte dal server quando non sono più necessarie.
- Le sessioni possono essere crittografate per proteggere le informazioni degli utenti da eventuali attacchi.

### Come funzionano le sessioni in PHP 

- Quando viene chiamato il metodo `"session_start()"` viene creata una sessione e un ID di sessione associato
- Viene memorizzato nel client il cookie `PHPSESSID` che contiene l'id di sessione appena creato
- Il server utilizza il cookie `PHPSESSID` e l'id memorizzato in memoria per associare una 

[Documentazione PHP `session_start()`](https://www.php.net/manual/en/function.session-start.php)

---

In generale, i cookie sono più utilizzati per la memorizzazione di piccole quantità di dati, mentre le sessioni sono utilizzate per memorizzare dati più complessi e sensibili. Tuttavia, sia i cookie che le sessioni presentano alcune vulnerabilità di sicurezza e devono essere gestiti in modo adeguato per evitare attacchi informatici.


