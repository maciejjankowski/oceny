# oceny
## Zadanie
Opracowanie interfejsu do oceny liczby odwiedzających i opinii na temat wydarzeń, ofert itp. Ma zostać opracowana aplikacja webowa. Wykorzystane ma zostać terminal/kiosk

## Opis
Opracowany zostanie graficzny interfejs, który będzie odpowiedni do zbierania opinii (obsługa, kompletność, dostosowanie do dzieci). Rozwój statycznej strony HTML jako przykładowej wersji. Opracowanie skryptów, bazy danych/tabeli itp. do przechowywania opinii. Opracowanie interfejsu redakcyjnego do pobierania i statystycznej analizy (według kryteriów) opinii i liczby odwiedzających. Rozszerzenie interfejsu redakcyjnego do zarządzania zebranymi opiniami.

## Możliwe rozszerzenie
- Zbieranie danych osobowych, czyli kto oddał głos.

## Podejście
- Stworzenie konspektu, jak zrealizujesz zadanie
    - Zaprojektować [model danych](data/schema.sql)
    - Opisanie zachowania aplikacji zwykłym tekstem
- Opracowanie grafiki
    - prosty CSS [style.css](styles.css)
- Opracowanie statycznego przykładu
    - kilka stron zrobionych
- Niezbędna technologia
    - Xampp: php, mysql, apache
- Stworzenie interfejsów dla formularzy, interfejsu redakcyjnego itd.
    
    **Do zrobienia**
    - lista ocen
    - lista kursów


    **Wstępnie Zrobione**
    - [ocena](ocena.php)
    - [logowanie](login.php), [wylogowanie](login.php)
    - [panel admina](admin.php)
    

- Rozwój systemu
    - czyli co jeszcze dodać?
- Testowanie i ocena
    - testowanie ręczne według scenariusza, chyba, że coś było o testach automatycznych
- Dokumentacja
    - ten plik Readme.md - tylko usunąć info o testach automatycznych i dodatkowych technologiach

## Uruchomienie
- open this folder in terminal
- execute `php -S localhost:8000` command
- navigate to [localhost:8000](http://localhost:8000)
