# OpenHPC Prototyping Using VirtualBox

## Getting Started
* [Download VirtualBox for your OS](https://www.virtualbox.org/wiki/Downloads)
* [Install the VirtualBox Extension Pack](https://download.virtualbox.org/virtualbox/6.1.14/Oracle_VM_VirtualBox_Extension_Pack-6.1.14.vbox-extpack)
* [Download CentOS 7 Minimal ISO](http://mirror.dal.nexril.net/centos/7.8.2003/isos/x86_64/CentOS-7-x86_64-Minimal-2003.iso)
* [Grab a copy of the OpenHPC Install Recipe](https://github.com/openhpc/ohpc/releases/tag/v2.0.GA/Install_guide-Centos8-Warewulf-SLURM-2.0-x86_64.pdf)

## Getting started with VirtualBox
### Before creation of the Master Node VM
**Create a Host Only Network**
* Before creating a master node VM, let us create a Host Only Network in the VirtualBox
* This network will be for SSHing into the master node from your native OS
* Go to File > Host Network Manager
* **Note:** Enabling DHCP makes it easier

<p><a href="url"><img src="https://i.postimg.cc/pLvdbTC8/Screen-Shot-2020-10-11-at-10-35-47-AM.png" height="350" ></a></p>

**Adding CentOS 7 ISO to Virtual Media Manager**

<p><a href="url"><img src="https://i.postimg.cc/yxTzdC4L/Screen-Shot-2020-10-12-at-6-51-25-PM.png" height="350" ></a></p>

Now to the creation of the Master Node VM

## **Minimum requirements for the Master Node VM**

1. 1 GB RAM
2. 8 GB Disk min (dynamically allocated is fine)
   *  If you want to install any software / actually use it, you’ll need more space
   *  Might make sense to make separate sparse volume for /opt • Same for /home if you want to use the cluster
3. Three network interfaces 
   * NAT
   * Internal Network
   * Host-only Adapter

**Note:** You must first create a host only network before this option is available; check preferences or tools (OS / version dependent)

<p><a href="url"><img src="https://i.postimg.cc/qRgp7B4j/Screen-Shot-2020-10-13-at-5-36-35-PM.png" height="350" ></a></p>

For the three Network Interfaces, This is how the Network Interfaces should look like

**Network Interface: NAT**

<p><a href="url"><img src="https://i.postimg.cc/WzLpfLc8/Screen-Shot-2020-10-13-at-5-39-20-PM.png" height="350" ></a></p>

**Network Interface: Internal Network**

<p><a href="url"><img src="https://i.postimg.cc/wMXqCf6p/Screen-Shot-2020-10-13-at-5-39-27-PM.png" height="350" ></a></p>

**Network Interface: Host-only Adapter**

<p><a href="url"><img src="https://i.postimg.cc/bYkwSJ1B/Screen-Shot-2020-10-13-at-5-39-34-PM.png" height="350" ></a></p>

**Next step will be Adding ISO to our SMS VM**

<p><a href="url"><img src="https://i.postimg.cc/dQr8BrbR/Screen-Shot-2020-10-13-at-5-52-00-PM.png" height="350" ></a></p>

**Set up Boot Order to Hard-disk followed by Optical Drive in the System option of the VM**

<p><a href="url"><img src="https://i.postimg.cc/C1YFVyKx/Screen-Shot-2020-10-13-at-5-55-56-PM.png" height="350" ></a></p>

## **Installation of the VM**

### **Network Settings Configuration**

* Start the VM
* Go into Network setting in the CentOS installer first
* Set up a hostname for your box
* Then configure the first device
* Set it to “on” and then click configure
* NAT addresses in VirtualBox assigns these as 10.0.x.15, where x begins at 2 for the 1st VM, 3 for the 2nd, etc.

**For the first and third Network Interface, select the "Automatically connect to this network when it is available" option in the General Tab of Configure**

<p><a href="url"><img src="https://i.postimg.cc/gkpBqYTJ/Screen-Shot-2020-10-13-at-6-07-16-PM.png" height="350" ></a></p>

**For the second Network Interface, modify the IPv4 settings as follows**

<p><a href="url"><img src="https://i.postimg.cc/x8nyHd1V/Screen-Shot-2020-10-13-at-6-07-47-PM.png" height="350" ></a></p>

<p><a href="url"><img src="https://i.postimg.cc/MH50Y8nM/Screen-Shot-2020-10-13-at-6-07-53-PM.png" height="350" ></a></p>

### **Storage Settings Configuration**

**Choose Automatic Partitioning unless using separate volumes for /opt or /home**

<p><a href="url"><img src="https://i.postimg.cc/d1mGqKmH/Screen-Shot-2020-10-13-at-6-08-49-PM.png" height="350" ></a></p>

## **Finish Installation**

* Set up time zone and turn on NTP
* Then click begin installation
* Set root password and create a user
* Click Reboot when done
* Because Hard Drive was first in boot order, it’ll now boot off disk instead of the ISO
