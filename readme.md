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

1. Open https://localhost/admin1
2. Login: **xyz@wp.pl** password: **KochamPreste123!**

## Selenium
1. Open selenium project
2. Run project
3. Enter 8 in command line runner
4. In admin panel mark the order as delivered
5. Enter 7 in command Line runner
   
## Scrapper
1. Open moonscraper project in python
2. Run project
3. The scrapped items are in 'scrapedItems' folder

# Cluster
### Connecting

```bash
ssh rsww@172.20.83.101
qwe123
ssh hdoop@student-swarm01.maas
qwe123 
```

### Directing to student directory

```bash
cd /opt/storage/actina15-20/block-storage/students/projects/students-swarm-services
cd BE_188889
```

### Initialiazing the script

```bash
sudo ./deploy.sh
```
### Displaying the logs

```bash
docker service ls # find your id
docker service logs $id # first 3 characters are sufficient
```

### Checking the active services
```bash
docker service ps BE_188889
```

### Deleting containers
```bash
Docker stack rm BE_188889
```

# Connecting to database and website

### Database
```bash
ssh -L 9099:student-swarm03.maas:9099 rsww@172.20.83.101
```
[localhost:9099](localhost:9099)

### Website
```bash
ssh -L 18888:student-swarm03.maas:18888 rsww@172.20.83.101
```
[https://localhost:18888/](https://localhost:18888/)

docker build . -t janek1010/be_188889
docker push janek1010/be_188889:latest



# Team:
Jan Domozych 191701
Konrad Wojtanowski 188890
Kacper Gogacz 191720
Oskar Świderski 188945
Michał Warmbier 188889
