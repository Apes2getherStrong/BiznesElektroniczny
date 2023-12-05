## Tech stack:

1. Prestashop 1.7.8-apache
2. Mariadb
3. Docker
4. Python
5. Scrappy
6. Selenium
7. WSL2 - Ubuntu

## Running website:

1. Open WSL2 - Ubuntu 
2. Clone the repository
    ```
    sudo git clone -b main https://github.com/Apes2getherStrong/BiznesElektroniczny
    ```
3. Give permissions and move to the directory 
    ```
    sudo chmod -R 777 BiznesElektroniczny/
    cd BiznesElektroniczny/
    ```
4. Run docker compose
    ```
    docker-compose up -d
    ```
5. Open https://localhost in web browser 
6. To stop Docker container run command
    ```
    docker-compose down
    ```

## Admin panel:

1. Open https://localhost/admi1
2. Login: **xyz@wp.pl** password: **KochamPreste123!**

## Selenium
## Scrapper

# Team:
Jan Domozych 191701
Konrad Wojtanowski 188890
Kacper Gogacz 191720
Oskar Świderski 188945
Michał Warmbier 188889