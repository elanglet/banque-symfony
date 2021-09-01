FROM ubuntu:20.04

COPY ./sources/Paris /etc/localtime

RUN apt update && \
	apt -y -qq install libfreetype6 fontconfig git php7.4 php7.4-curl php7.4-mbstring php7.4-xml php7.4-zip curl && \
	php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
	php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
	php composer-setup.php && \
	php -r "unlink('composer-setup.php');" && \
	mv composer.phar /usr/local/bin/composer && \
	mkdir /build

WORKDIR /build

# COPY ./sources/apache-tomcat-9.0.52.tar.gz /build/
# COPY ./sources/openjdk-16.0.2_linux-x64_bin.tar.gz /build/
# COPY ./sources/jenkins.war /build/

RUN curl -O https://download.java.net/java/GA/jdk16.0.2/d4a915d82b4c4fbb9bde534da945d746/7/GPL/openjdk-16.0.2_linux-x64_bin.tar.gz && \
    curl -O https://mirroir.wptheme.fr/apache/tomcat/tomcat-9/v9.0.52/bin/apache-tomcat-9.0.52.tar.gz && \
	curl -O https://get.jenkins.io/war-stable/2.303.1/jenkins.war && \
	tar xzf openjdk-16.0.2_linux-x64_bin.tar.gz && \
    tar xzf apache-tomcat-9.0.52.tar.gz && \
    # On déplace les répertoires dans /usr/local
    mv jdk-16.0.2 /usr/local && \
    mv apache-tomcat-9.0.52 /usr/local && \
    # On créé des liens symboliques
    ln -s /usr/local/apache-tomcat-9.0.52 /usr/local/tomcat && \
    ln -s /usr/local/jdk-16.0.2 /usr/local/jdk && \
    # On déplace le WAR dans le répertoire webapps/ de Tomcat
    mv jenkins.war /usr/local/tomcat/webapps && \ 
    # On supprime le répertoire de build
    rm -rf /build && \
	mkdir /jenkins-data

ENV JAVA_HOME=/usr/local/jdk
ENV JAVA_OPTS=-Djava.awt.headless=true 
ENV CATALINA_HOME=/usr/local/tomcat
ENV PATH=/usr/local/tomcat/bin:$PATH
ENV JENKINS_HOME=/jenkins-data

# On se positionne dans le répertoire de Tomcat
WORKDIR /usr/local/tomcat

# On expose le port de Tomcat (8080)
EXPOSE 8080/tcp

# Enfin, on démarre Tomcat
CMD ["catalina.sh", "run"]