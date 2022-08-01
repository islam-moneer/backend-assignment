# Setup (this is not required for the interview/test)

When entities are create the following command can be run to create/update tables in database:
1) Make run .


To have the system up and running the following should be installed on the computer: 
```
Docker
Docker-compose
```

## Virtual Machine (VM)
* Install VMWare Player / Fusion:  
    * Windows / Linux: https://www.vmware.com/products/workstation-player/workstation-player-evaluation.html
    * MacOS: https://www.vmware.com/products/fusion/fusion-evaluation.html

* Download the compressed VM image: https://wf-setup.s3-eu-west-1.amazonaws.com/developer/assignments/backend/backend-test.zip

* Unzip the contents to a folder on your local machine

* Open the 'backend-test/backed-test.vmx' file in VMWare Player/Fusion.
* When prompted, press the 'I copied it' button.

* The VM should now resume a previous state with the test environment running and the project opened in VS Code.
* You should be able to complete your assignment with tools provided in the VM, but feel free to install other tools to your liking.

Good luck :)

PS: The password for the 'developer' user is 'test'

### Install Docker
Mac:

“Docker for Mac” can be downloaded from: 
[https://docs.docker.com/docker-for-mac/install/](https://docs.docker.com/docker-for-mac/install/)

"Docker for Mac" contains both Docker and Docker-compose 

Ubuntu: 

* Docker:  
```
sudo apt-get update
sudo apt-get install -y curl
sudo su -c 'curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -'
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"
sudo apt-get -y update
sudo sudo apt-get install -y docker-ce
sudo update-rc.d docker enable
sudo groupadd docker
sudo gpasswd -a ${USER} docker
echo '{"storage-driver": "devicemapper"}' | sudo tee /etc/docker/daemon.json
sudo systemctl restart docker
sudo chown ${USER}:${USER} /var/run/docker.sock 
```

* Docker-compose:  
```
sudo curl -L -o /usr/local/bin/docker-compose $(curl -s https://api.github.com/repos/docker/compose/releases/latest | grep 'browser_' | cut -d\" -f4 | grep Linux | grep -v sha256)
sudo chmod +x /usr/local/bin/docker-compose
```

* Make:
```
sudo apt-get install -y make
```

### Setup
1- After set up the project  Open [http://localhost](http://localhost) to fill the database with the required data.

2- Open [http://localhost/cars](http://localhost/cars) to list all cars.

3- Open [http://localhost/models](http://localhost/models) to list all models.

4- Open [http://localhost/brands](http://localhost/brands) to list all brands.

5- To filter cars with brands open [http://localhost/cars/{brand_id}/brand](http://localhost/cars/{brand_id}/brand) 
to list all cars exists in this brand.

6- To filter cars with models open [http://localhost/cars/{model_id}/brand](http://localhost/cars/{model_id}/brand) 
to list all cars exists in this model.
  
