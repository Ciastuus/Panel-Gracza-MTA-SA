Panel Gracza WWW dla MTA:SA
===========

Panel Gracza jest stworzony dla serwerów Multi Theft Auto. Został wykonany z myślą o serwerach, które mają zapotrzebowanie na tego typu rzeczy.

Autor
========================================================================

- Michał 'Ciastuuś' <kz-michal@wp.pl>

Licencja
========================================================================

Kod dystrybuowany jest na licencji: GPLv2. 

Polskie tłumaczenie licencji GPLv2: http://gnu.org.pl/text/licencja-gnu.html

W repozytorium znajdują się również fragmenty kodu z boostrap, dystrybuowane na innej licencji, informacja o tym zawsze znajduje się przy danym zasobie.

Powód wydania kodu
========================================================================

Wydałem ten kod z prostych powdów:

1. Oddać społeczności Multi Theft Auto i jego założyciełom serwerów coś nowego.

3. Poprawić jakość powstających serwerów i pokazać, że jednak mogą mieć coś więcej, niż statystki in-game.

4. Pokazać, że jednak w takiej grze da się zrobić coś takiego co zostało przedstawione.

Zawartość repozytorium
========================================================================

W repozytorium znajduje się:
- Boostrap styl(css) & skrypt(js)
- Zawartość php wraz z plikiem html(1)
- Grafika
- Czcionki

W repozytorium nie znajduje się:

- Pliki wersji 2.0
- Pliki wersji 3.0

Gdzie wgrać panel gracza
========================================================================

Panel Gracza współpracuje jak dotychczas ze wszystkimi hostingami mając na myśli,

- cba.pl
- ugu.pl
- proserwer.pl
- nazwa.pl
- oraz wiele więcej!

Więc bez problemu można wgrać pliki, podpiąć pod bazę danych i cieszyć się działającym panelem.

Jak uruchomić panel gracza
========================================================================

Aby, uruchomić poprwanie panel gracza:

1. Skonfigurować bazę danych w pliku: bazadanych.php
 
2. Wrzucić do głównego folderu wszystkie pliki na stronie www.
 
3. Zedytować potrzebne pliki w których nazwy kolumn jak i tabeli nie są dostosowane pod każdy serwer.

4. Po wszystkim wejść na stronę odświeżyć i cieszyć się grą.

Informacje techniczne
========================================================================

### Baza danych - MySQL

Wszystko utrzymywane jest na klasie PDO, która oferuje wspomaganie dla wersji PHP 7.x oraz większych. Dotychczas się nic nie zmieniło.

### Hasła graczy - MD5

Hasła graczy są zapisywane i odczytywane w hash md5. Głównie serwery zapisują swe hasła w Base64(teaEncode). Ja proponuję za to md5, gdyż wygodniej się zapisuje w systemie logowań dla php. Jeżeli będzie potrzeba można przenieść kodowanie na powyższe. Choć gdy nie będzie problemu można dla serwerów zmienić kodowanie na md5.

### Styl - Boostrap

Styl jest utrzymywany na boostrap wersji 4.0 - wygodny układ jak i sam wygląd nie odstrasza potencjalnych ludzi, którzy mogą na niego spojrzeć w panelu gracza.

### Skrypt - Boostrap

Skrypt jest i wyłącznie smaczkiem co do poniektórych rzeczy znajdujących się na stronie, dlatego też jest on też potrzebny. Nic nie zajmuje, a jest on jedynym skryptem, który i wyłącznie wspomaga styl boostrap'a.

### Grafika - Sygnatury

W repozytorium znajduje się pięć grafik, a wzorów, które można Sobie dobrać. Oczywiście można dodać własny wzór. Przy zmianie wzoru stosujemy się kodem znajdującym się w ../sygnatura_gracz.php/ Linijka: 20 oraz Linijka: 42. Dostępne są wzory od 1-5.

