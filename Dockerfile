From debian

ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get update -y && apt-get install python3.9 -y
RUN apt-get install python3-pip -y

RUN apt-get install libnss3 -y
RUN apt install curl -y
RUN apt install wget -y
RUN apt install libfontconfig -y
RUN apt install expect -y