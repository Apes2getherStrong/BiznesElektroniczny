### 1. *Zespół zakłada repozytorium kodu (projekt) na GitHub/GitLab
- a. Wersjonowany jest tylko kod źródłowy, bez cache, uploadów, itd. –
dopuszczalne jest umieszczenie zdjęć zarejestrowanych produktów
- b. W ustawieniach projektu zarejestrowano wszystkich członków zespołu;
- c. Repozytorium zawiera plik .gitignore określający zasoby niepodlegające
wersjonowaniu;
- d. Repozytorium zawiera plik README.md z opisem projektu, wykorzystanej
wersji oprogramowania, sposobu uruchomienia i składu zespołu.
- e. W gałęzi głównej (master/main) przechowywana jest tylko wersja produkcyjna
tzn. prezentowana podczas zaliczenia;
- f. W gałęziach pobocznych przechowywane są wersje robocze projektu;
- g. Wprowadzanie zmian do gałęzi głównej (poza inicjalnym commitem) jest
możliwe jedynie poprzez wystawienie Pull Request (PR) lub Merge Request
(MR) i akceptację przez innego członka zespołu.
- h. Zawartość repozytorium jest podzielona na następujące foldery:
+ i. kody źródłowe sklepu;
+ ii. kody źródłowe testów automatycznych;
+ iii. kody źródłowe narzędzia do scrapowania;
+ iv. rezultat scrappowania;
+ v. pliki konfiguracyjne i skrypty wykorzystywane w procesie instalacji/
wdrożenia.
- i. Historia pracy zespołu jest prawidłowo rejestrowana w projekcie. Oznacza to
m.in., że zadania realizowane przez zespół są opisane jako issues i przypisane
do osób odpowiedzialnych za realizację. Realizacja issue powinna być
zakończona wystawieniem PR/MR i akceptacją propozycji rozwiązania przez
innego członka zespołu.
### 2. *Zespół utworzył skrypt/program to scrapowania (automatycznego odczytania i
zapisania lokalnie informacji/danych z wybranego sklepu internetowego).
- a. Kod źródłowy rozwiązania znajduje się w repozytorium;
- b. Rezultaty scrappowania (kodowanie UTF-8) znajdują się w folderze w
repozytorium,
- c. Rezultatami scrappowania są m.in. listy kategorii, podkategorii, produktów
(nazwa, opis, cena, atrybuty (np. kolor, materiał), dwa zdjęcia w rozdzielcz