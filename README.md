Sistema CRUD com integração com API ViaCEP

# Configurações de Ambiente

```
Na sua máquina, renomeie o arquivo env para .env
Em seguida, configure conforme as dicas...
```

### _**no arquivo .env:**_

```

#para mostrar todos os erros no ambiente de desenvolvimento
CI_ENVIRONMENT = development

#configure corretamente o endereço web raiz para a pasta pública do sistema em sua máquina
app.baseURL = 'http://localhost/CRUD/public'

#para conectar corretamente ao banco de dados
database.default.hostname = localhost
database.default.database = usuarios
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306

```

# Criação do banco de dados (caso não tenha feito isso ainda):

### _**executar no terminal o comando:**_

```
php spark db:create usuarios

```

### _**em seguida executar no terminal o comando:**_

```
php spark migrate --all
```

## Instalação do SHIELD

### 1) Baixar e instalar o composer:

```
Download: https://getcomposer.org/Composer-Setup.exe
Tutorial: https://www.youtube.com/watch?v=t-WoLniiBfc
```

### 2) Instalar o shield usando composer:

```
Abra o terminal da sua IDE e utilize o comando: composer require codeigniter4/shield
```

### 3) Configurar o shield:

```
Abra o terminal do VSCode e utilize o comando: php spark shield:setup
n -> Enter
n -> Enter
y -> Enter

Tabelas do shield criadas
```
