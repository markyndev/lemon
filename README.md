<img src="https://github.com/markyndev/lemon/blob/master/web/icone.png?raw=true" width="40" height="40"> <img src="https://cdn2.iconfinder.com/data/icons/nodejs-1/512/nodejs-512.png" width="45" height="45">


# Lemon - Project

Projeto ultra simples de um gerenciador de pacotes e repositorios baseado em node.js
## Como baixar um pacote?

Use o comando abaixo:
```
node index.js install nomedopacote
```   
Exemplo: 
```
node index.js install base
```

## Como adicionar um pacote?

Lembrando que o projeto ainda está em beta, mas caso queira adicionar um script interessante [Clique Aqui](http://juiceancap.hopto.org/lemon/) e leia o footer da pagina para entender como funciona.

Exemplo de um pacote já montado:
```
   {
      "getname": "base",
      "appname": "Base-Lemon",
      "version": "1.0",
      "info": "A non-functional application for example",
      "link": "https://cloud.algumacoisa.com/files/script.zip"
    } 
  ]
```
<sub><sup>OBS: TODOS LINKS PARA OS PACOTES DEVEM SER EM .ZIP</sub></sup>

## Conquistas do projeto
 - [x] Automatizar a postagem de pacotes (Via [SITE](http://juiceancap.hopto.org/lemon/))
 - [x] Criar sistema de download simples
 - [ ] Sistema de atualização
 - [ ] Sistema de dependencias
 - [ ] Nuvem propria.
